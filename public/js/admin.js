function tinymce_setup_callback(editor)
{
    console.log('here', editor);

    // editor.plugins = 'link, image, code, table, textcolor, lists, paste';

    // return editor;
}

function tinymce_init_callback(editor)
{
	// editor.remove();
 //  editor = null;

// tinymce.init({
//     menubar: false,
//     selector:'textarea.richTextBox',
//     skin_url: $('meta[name="assets-path"]').attr('content')+'?path=js/skins/voyager',
//     min_height: 600,
//     resize: 'vertical',
//     plugins: 'link, image, code, table, textcolor, lists, paste',
//     extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
//     file_browser_callback: function(field_name, url, type, win) {
//             if(type =='image'){
//               $('#upload_file').trigger('click');
//             }
//         },
//     toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code',
//     convert_urls: false,
//     image_caption: true,
//     image_title: true,
//     init_instance_callback: function (editor) {
//         if (typeof tinymce_init_callback !== "undefined") {
//             tinymce_init_callback(editor);
//         }
//     },
//     setup: function (editor) {
//         if (typeof tinymce_setup_callback !== "undefined") {
//             tinymce_setup_callback(editor);
//         }
//     }
//   });


	}