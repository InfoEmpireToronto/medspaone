@extends('layouts.clean')


@section('content')
<style>
	.close-btn {border-radius:50%; background:red; color:#fff; -moz-transform: rotate(45deg);
-webkit-transform: rotate(45deg);
-o-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg); 
width: 50px;
    height: 50px;
    padding: 10px;
    display: inline-block;
    text-align: center;
    font-size: 30px;
    margin: 10px auto;
	}

</style>

<div class="wrapper light-wrapper">
      <div class="container inner pt-70 pt-sm-20">
		  <div class="row">
			  <div class="col-md-6 offset-md-3 text-center">
    <div class="infoBox box bg-light shadow">
		<div class="icon fs-50 color-dark mb-20"><i class="fa fa-video-camera"></i></div>
		<h3>Start video chat with an expert</h3>
        <p>Please provide your name and phone number to launch a conversation</p>
        <div class="form-group"><input type="text" name="name" placeholder="Name" id="name" class="form-control"></div>
        <div class="form-group"><input type="text" name="name" placeholder="Phone Number" id="phone"class="form-control"></div>
        <div class="form-group"><input type="submit" value="Connect Me" id="connectMe" class="btn btn-red btn-l"></div>
    </div></div>
	</div>
		  
		  <div class="row">
			<div class="page-content col-md-6">
        <!-- <div class="connectingText">Connecting you to an expert...</div> -->
				
				
    </div>	  
			<a href="" class="close-btn"><i class="si-education_plus"></i></a>	  
	</div>

	
</div>
</div>
@stop

@section('js')
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
            <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
		<script src="https://medspa.one:8080/socket.io/socket.io.js"></script>
        <script>

        /** CONFIG **/
        var SIGNALING_SERVER = "https://medspa.one:8080";
        var USE_AUDIO = true;
        var USE_VIDEO = true;
        var DEFAULT_CHANNEL = 'some-global-channel-name';
        var MUTE_AUDIO_BY_DEFAULT = false;

        /** You should probably use a different stun server doing commercial stuff **/
        /** Also see: https://gist.github.com/zziuni/3741933 **/
        var ICE_SERVERS = [
            {'urls':"stun:stun.l.google.com:19302"},
            { 'urls': 'stun:stun.stunprotocol.org:3478' },
            { 'urls': 'stun:stun.sipnet.net:3478' },
            { 'urls': 'stun:stun.ideasip.com:3478' },
            { 'urls': 'stun:stun.iptel.org:3478' }
        ];
    
        $(document).ready(function(){
            $('.page-content').hide();
			
			$('video').addClass('embed-responsive-item');			
            $('#connectMe').click(function(){

                $.ajax({
                    url: "{{ route('saveContact') }}",
                    type: 'GET',
                    data: {
                        name: $('#name').val(),
                        phone: $('#phone').val()
                    },
                    success: function(result) { 
                        // $("#h11").html(result); 
                    }
                }); 
                
                $('.page-content').show();				
				$('.wrapper, body').addClass('dark-wrapper');
                $('.infoBox').hide();
                init();
            });
        	// init();
        });
            var signaling_socket = null;   /* our socket.io connection to our webserver */
            var local_media_stream = null; /* our own microphone / webcam */
            var peers = {};                /* keep track of our peer connections, indexed by peer_id (aka socket.io id) */
            var peer_media_elements = {};  /* keep track of our <video>/<audio> tags, indexed by peer_id */

            function init() {
                console.log("Connecting to signaling server: "+SIGNALING_SERVER);
                signaling_socket = io(SIGNALING_SERVER);
                signaling_socket = io();

                signaling_socket.on('connect', function() {
                    console.log("Connected to signaling server");
                    setup_local_media(function() {
                        /* once the user has given us access to their
                         * microphone/camcorder, join the channel and start peering up */
                        join_chat_channel(DEFAULT_CHANNEL, {'whatever-you-want-here': 'stuff'});
                    });
                });
                signaling_socket.on('disconnect', function() {
                    console.log("Disconnected from signaling server");
                    /* Tear down all of our peer connections and remove all the
                     * media divs when we disconnect */
                    for (peer_id in peer_media_elements) {
                        peer_media_elements[peer_id].remove();
                    }
                    for (peer_id in peers) {
                        peers[peer_id].close();
                    }

                    peers = {};
                    peer_media_elements = {};
                });
                function join_chat_channel(channel, userdata) {
                    signaling_socket.emit('join', {"channel": channel, "userdata": userdata});
                }
                function part_chat_channel(channel) {
                    signaling_socket.emit('part', channel);
                }


                /** 
                * When we join a group, our signaling server will send out 'addPeer' events to each pair
                * of users in the group (creating a fully-connected graph of users, ie if there are 6 people
                * in the channel you will connect directly to the other 5, so there will be a total of 15 
                * connections in the network). 
                */
                signaling_socket.on('addPeer', function(config) {
                    console.log('Signaling server said to add peer:', config);
                    var peer_id = config.peer_id;
                    if (peer_id in peers) {
                        /* This could happen if the user joins multiple channels where the other peer is also in. */
                        console.log("Already connected to peer ", peer_id);
                        return;
                    }
                    var peer_connection = new RTCPeerConnection(
                        {"iceServers": ICE_SERVERS},
                        {"optional": [{"DtlsSrtpKeyAgreement": true}]} /* this will no longer be needed by chrome
                                                                        * eventually (supposedly), but is necessary 
                                                                        * for now to get firefox to talk to chrome */
                    );
                    peers[peer_id] = peer_connection;

                    peer_connection.onicecandidate = function(event) {
                        if (event.candidate) {
                            signaling_socket.emit('relayICECandidate', {
                                'peer_id': peer_id, 
                                'ice_candidate': {
                                    'sdpMLineIndex': event.candidate.sdpMLineIndex,
                                    'candidate': event.candidate.candidate
                                }
                            });
                        }
                    }
                    peer_connection.onaddstream = function(event) {
                        console.log("onAddStream", event);
                        var remote_media = USE_VIDEO ? $("<video>") : $("<audio>");
                        remote_media.attr("autoplay", "autoplay");
                        if (MUTE_AUDIO_BY_DEFAULT) {
                            remote_media.attr("muted", "true");
                        }
                        // remote_media.attr("controls", "");
                        remote_media.setAttribute('playsinline', true);
                        remote_media.mediaGroup = 'remotevideo';
                        remote_media.autoplay = true;
                        remote_media.controls = false;
                        peer_media_elements[peer_id] = remote_media;
                        var rm = $('<div class="embed-responsive embed-responsive-4by3 mb-20"></div>').append(remote_media);
						var rm2 = $('<div class="col-md-6"></div>').append(rm);
                        console.log(rm2);
                        $('.page-content').append(rm2);
                        attachMediaStream(remote_media[0], event.stream);
                    }

                    /* Add our local stream */
                    peer_connection.addStream(local_media_stream);

                    /* Only one side of the peer connection should create the
                     * offer, the signaling server picks one to be the offerer. 
                     * The other user will get a 'sessionDescription' event and will
                     * create an offer, then send back an answer 'sessionDescription' to us
                     */
                    if (config.should_create_offer) {
                        console.log("Creating RTC offer to ", peer_id);
                        peer_connection.createOffer(
                            function (local_description) { 
                                console.log("Local offer description is: ", local_description);
                                peer_connection.setLocalDescription(local_description,
                                    function() { 
                                        signaling_socket.emit('relaySessionDescription', 
                                            {'peer_id': peer_id, 'session_description': local_description});
                                        console.log("Offer setLocalDescription succeeded"); 
                                    },
                                    function() { Alert("Offer setLocalDescription failed!"); }
                                );
                            },
                            function (error) {
                                console.log("Error sending offer: ", error);
                            });
                    }
                });


                /** 
                 * Peers exchange session descriptions which contains information
                 * about their audio / video settings and that sort of stuff. First
                 * the 'offerer' sends a description to the 'answerer' (with type
                 * "offer"), then the answerer sends one back (with type "answer").  
                 */
                signaling_socket.on('sessionDescription', function(config) {
                    console.log('Remote description received: ', config);
                    var peer_id = config.peer_id;
                    var peer = peers[peer_id];
                    var remote_description = config.session_description;
                    console.log(config.session_description);

                    var desc = new RTCSessionDescription(remote_description);
                    var stuff = peer.setRemoteDescription(desc, 
                        function() {
                            console.log("setRemoteDescription succeeded");
                            if (remote_description.type == "offer") {
                                console.log("Creating answer");
                                peer.createAnswer(
                                    function(local_description) {
                                        console.log("Answer description is: ", local_description);
                                        peer.setLocalDescription(local_description,
                                            function() { 
                                                signaling_socket.emit('relaySessionDescription', 
                                                    {'peer_id': peer_id, 'session_description': local_description});
                                                console.log("Answer setLocalDescription succeeded");
                                            },
                                            function() { Alert("Answer setLocalDescription failed!"); }
                                        );
                                    },
                                    function(error) {
                                        console.log("Error creating answer: ", error);
                                        console.log(peer);
                                    });
                            }
                        },
                        function(error) {
                            console.log("setRemoteDescription error: ", error);
                        }
                    );
                    console.log("Description Object: ", desc);

                });

                /**
                 * The offerer will send a number of ICE Candidate blobs to the answerer so they 
                 * can begin trying to find the best path to one another on the net.
                 */
                signaling_socket.on('iceCandidate', function(config) {
                    var peer = peers[config.peer_id];
                    var ice_candidate = config.ice_candidate;
                    peer.addIceCandidate(new RTCIceCandidate(ice_candidate));
                });


                /**
                 * When a user leaves a channel (or is disconnected from the
                 * signaling server) everyone will recieve a 'removePeer' message
                 * telling them to trash the media channels they have open for those
                 * that peer. If it was this client that left a channel, they'll also
                 * receive the removePeers. If this client was disconnected, they
                 * wont receive removePeers, but rather the
                 * signaling_socket.on('disconnect') code will kick in and tear down
                 * all the peer sessions.
                 */
                signaling_socket.on('removePeer', function(config) {
                    console.log('Signaling server said to remove peer:', config);
                    var peer_id = config.peer_id;
                    if (peer_id in peer_media_elements) {
                        peer_media_elements[peer_id].remove();
                    }
                    if (peer_id in peers) {
                        peers[peer_id].close();
                    }

                    delete peers[peer_id];
                    delete peer_media_elements[config.peer_id];
                });
            }




            /***********************/
            /** Local media stuff **/
            /***********************/
            function setup_local_media(callback, errorback) {
                if (local_media_stream != null) {  /* ie, if we've already been initialized */
                    if (callback) callback();
                    return; 
                }
                /* Ask user for permission to use the computers microphone and/or camera, 
                 * attach it to an <audio> or <video> tag if they give us access. */
                console.log("Requesting access to local audio / video inputs");


                navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);

                if(!navigator.getUserMedia) { navigator.getUserMedia = navigator.mediaDevices.getUserMedia; }

                attachMediaStream = function(element, stream) {
                    console.log('DEPRECATED, attachMediaStream will soon be removed.');
                    element.srcObject = stream;
                 };

                navigator.getUserMedia({"audio":USE_AUDIO, "video":USE_VIDEO},
                    function(stream) { /* user accepted access to a/v */
                        console.log("Access granted to audio/video");
                        local_media_stream = stream;
                        var local_media = USE_VIDEO ? $("<video>") : $("<audio>");
                        local_media.attr("autoplay", "autoplay");
                        local_media.attr("muted", "true"); /* always mute ourselves by default */
                        local_media.attr("controls", "");
                        var rm = $('<div class="embed-responsive embed-responsive-4by3 mb-20"></div>').append(local_media);
                        var rm2 = $('<div class="col-md-6"></div>').append(rm);
                        $('.page-content').append(rm2);
                        attachMediaStream(local_media[0], stream);

                        if (callback) callback();
                    },
                    function() { /* user denied access to a/v */
                        console.log("Access denied for audio/video");
                        alert("You chose not to provide access to the camera/microphone, demo will not work.");
                        if (errorback) errorback();
                    });
            }
        </script>
@stop