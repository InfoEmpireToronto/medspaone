@extends('layouts.main')


@section('content')
	<div class="wrapper light-wrapper">
      <div class="container inner pt-70 pt-sm-20">
        <h2 class="heading text-center">Membership Plans</h2>
        <div class="space20"></div>
		  <div class="row">
		  <div class="col-sm-12">
			<p>Please fill out the following information in order to become a member. <br></p>
			  <p>Please Note: All information entered below will be visible to site administrators. Registered members will be able to view any information you enter, unless you set the 
visibility selector to <span style="font-weight: bold;">Private (not visible in profile)</span> next to the field you wish to be hidden. If your email address is <span style="font-weight: bold;">Private (not visible in profile) </span>it will not be displayed, but members can still contact you via email through the site's group email system if permitted by the group 
administrator. For a publicly accessible member type, site visitors will be able to view any field whose visibility is set as <span style="font-weight: bold;">Public (Visible to Everyone)</span>. To restrict fields to only registered members set the visibility for the field to<span style="font-weight: bold;"> Member Only (Visible Only to Members).</span><br></p>
   <p class="redalert"><i><span class="redalert">*</span> Required Fields</i><br>
Your password must be a minimum of eight (8) characters in length and contain at least one number and one non-numeric character (letters, punctuation, etc.)</p>
<form name="frmRegister" action="#" method="post" id="RegisterForm">

<table border="0" cellspacing="0" cellpadding="0" class="table table-borderless">
	<thead >
   <tr>
	<th colspan="2">
		<h3>Account Information</h3>
	</th>
</tr>
  </thead>
<tbody>
<tr>
	<td width="30%" align="right"><b>Username</b> <span class="redalert">*</span></td>
	<td width="69%"><input class="form-control" type="password" name="username" value="" size="20" maxlength="20"></td>
</tr>
<tr>
	<td align="right"><b>Password</b> <span class="redalert">*</span></td>
	<td><input class="form-control" type="password" name="txt_password" value="" size="20" maxlength="20"></td>
</tr>
<tr>
	<td align="right"><b>Confirm Password</b> <span class="redalert">*</span></td>
	<td><input class="form-control" type="password" name="txt_passwordConfirm" value="" size="20" maxlength="20"></td>
</tr>
<tr>
	<td align="right"><b>E-Mail Address</b> <span class="redalert">*</span></td>
	<td>
		
			<input class="form-control" type="text" name="txt_email" size="35" maxlength="100" value="">
		
	</td>
	<input class="form-control" type="hidden" name="ERR_txt_email">
</tr>
<tr>
	<td align="right"><b>Confirm E-Mail</b> <span class="redalert">*</span></td>
	<td>
		
			<input class="form-control" type="text" name="txt_emailConfirm" value="" size="35" maxlength="100">
		
	</td>
</tr>
	
	<tr>
	<td align="right"><b>Alternate E-Mail</b></td>
	<td>

		<input class="form-control" type="text" name="txt_emailAlternate" value="" size="20" maxlength="100" id="Text3">

	</td>
</tr>



<tr>
	<td align="right"><b>Title</b>
	  </td>
	<td align="left"><div class="form-group custom-select-wrapper">
              <select class="custom-select"  name="title" id="title">
		<option value="" selected>Choose...</option>
		<option value="Mr">Mr.</option>
		<option value="Ms">Ms.</option>
		<option value="Dr">Dr.</option>


	</select>
</div></td>
</tr>

<tr>
	<td align="right"><b>Full Name</b> <span class="redalert">*</span></td>
	<td><input class="form-control" type="text" name="fullName" size="15" maxlength="50">
	</td>
</tr>






<tr>
	<th colspan="2">
		<h3>Professional Information</h3>
	</th>
</tr>

<tr>
	<td align="right"><b>Organization</b>
	  <input class="form-control" type="hidden" name="ERR_txt_employName" value="txt_employName|Organization Name|20|1||100"><span class="redalert">*</span></td>
	<td><input class="form-control" type="text" name="txt_employName" id="txt_employName" size="20" maxlength="100" value=""  autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">	
	</td>
</tr>


<tr>
	<td align="right"><b>Your Designation</b>
	  <input class="form-control" type="hidden" name="ERR_txt_employType" value=""></td>
	<td>
		<div class="form-group custom-select-wrapper">
              <select class="custom-select" name="txt_employType" id="txt_employType">
                <option selected>Choose...</option>

<option value="Aesthetician">Aesthetician</option>

<option value="ARNP">ARNP</option>

<option value="Client Coordinator">Client Coordinator</option>

<option value="Clinical Coordinator">Clinical Coordinator</option>

<option value="Cosmetologist">Cosmetologist</option>

<option value="DC">DC</option>

<option value="Esthetician">Esthetician</option>

<option value="Front Office Coordinator">Front Office Coordinator</option>

<option value="Injector">Injector</option>

<option value="Laser Technician">Laser Technician</option>

<option value="LMT">LMT</option>

<option value="Manager/Supervisor">Manager/Supervisor</option>

<option value="Massage Therapist">Massage Therapist</option>

<option value="Medical Director">Medical Director</option>

<option value="NP">NP</option>

<option value="Office Administrator">Office Administrator</option>

<option value="Other">Other</option>

<option value="Owner">Owner</option>

<option value="PA">PA</option>

<option value="Patient Coordinator">Patient Coordinator</option>

<option value="PRN">PRN</option>

<option value="Receptionist">Receptionist</option>

<option value="RN">RN</option>

<option value="Sales">Sales</option>

<option value="Spa Associate">Spa Associate</option>

<option value="Spa Concierge">Spa Concierge</option>

<option value="Third Party Administrator">Third Party Administrator</option>

	</select>
		</div>
    
	</td>
</tr>

<tr>
	<td align="right"><b>Website</b></td>
	
	<td><input class="form-control" type="text" name="txt_employURL" size="35" maxlength="100" value=""></td>
</tr>

<tr class="address-row">
    <td align="right">
      <b>Address</b>
      <input class="form-control" type="hidden" name="ERR_txt_employAddress1" value=""><span class="redalert">*</span>
    </td>
	<td>
        
        <div class="work-address-1-textbox">
            <input class="form-control" type="text" name="txt_employAddress1" id="txt_employAddress1" value="" size="35" maxlength="50">
        </div>
        
            <input class="form-control" type="hidden" name="bln_WorkAddressIsPrimary" id="blnWorkAddressIsPrimary" value="1">
        
    </td>
</tr>

<tr class="address-row">
	<td align="right"><b>Address Cont.</b></td>
	<td><input class="form-control" type="text" name="txt_employAddress2" id="txt_employAddress2" value="" size="35" maxlength="50"></td>
</tr>

<tr class="address-row">
	<td align="right"><b>City/Town</b>
	  <input class="form-control" type="hidden" name="ERR_txt_employCity" value=""><span class="redalert">*</span></td>
	<td><input class="form-control" type="text" name="txt_employCity" id="txt_employCity" value="" size="20" maxlength="50"></td>
</tr>	

<tr class="address-row">
	<td align="right"><b>Country</b><input class="form-control" type="hidden" name="ERR_txt_employCountry" value=""><span class="redalert">*</span>
	  </td>
	<td>
		
	<div class="form-group custom-select-wrapper">
              <select class="custom-select"  name="txt_employCountry" id="txt_employCountry">
		<option value="" selected>Choose...</option>
		<option value="Canada">Canada</option>
		<option value="United States">United States</option>


	</select>
</div>
	</td>
</tr>

<tr class="address-row">
	<td align="right" valign="top">
	  <div style="margin-top:4px"></div><span class="" style="font-weight:bold" id="EmployLocationLabel">State/Province</span><span class="redalert">*</span></td>
	<td>

	<!-- List Block -->
	<div id="Block_txt_employState">
		<div class="form-group custom-select-wrapper">
              <select class="custom-select"  id="txt_employState" name="txt_employState" >
				  <option value="" selected="selected">Choose...</option>
				  <option value="AB">Alberta</option>
										<option value="BC">British Columbia</option>
										<option value="MB">Manitoba</option>
										<option value="NB">New Brunswick</option>
										<option value="NL">Newfoundland and Labrador</option>
										<option value="NT">Northwest Territories</option>
										<option value="NS">Nova Scotia</option>
										<option value="NU">Nunavut</option>
										<option value="ON">Ontario</option>
										<option value="PE">Prince Edward Island</option>
										<option value="QC">Quebec</option>
										<option value="SK">Saskatchewan</option>
										<option value="YT">Yukon</option>
				  <option>&nbsp;</option>
		<option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="American Samoa">American Samoa</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="Armed Forces">Armed Forces</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Pacific">Armed Forces Pacific</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Federated States of Micronesia">Federated States of Micronesia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="International">International</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Marshall Islands">Marshall Islands</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Palau">Palau</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virgin Islands">Virgin Islands</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option><option value="">Other Location</option></select>
</div>
	</div>
</td>
</tr>

<tr class="address-row">
	<td align="right"><b>Postal Code</b>
	  <input class="form-control" type="hidden" name="ERR_txt_employZip" value=""><span class="redalert">*</span></td>
	<td><input class="form-control" type="text" name="txt_employZip" id="txt_employZip" value="" size="10" maxlength="12"></td>
</tr>

<tr class="address-row">
	<td align="right"><b>Phone</b>
	  
	  <span class="redalert">*</span>
  <input class="form-control" type="hidden" name="ERR_txt_employPhone" value=""><input class="form-control" type="hidden" name="ERR_txt_employPhoneAreaCode">
	  </td>
	<td>

	<input class="form-control" type="text" name="txt_employPhone" value="" size="15" maxlength="50">
	
	</td>
</tr>

<tr class="address-row">
	<td align="right"><b>Fax</b>
  <input class="form-control" type="hidden" name="ERR_txt_employFax" value=""><input class="form-control" type="hidden" name="ERR_txt_employFaxAreaCode" value="">
	  </td>
	<td>

	<input class="form-control" type="text" name="txt_employFax" value="" size="15" maxlength="50">
	
	</td>
</tr>

<tr class="">
<td class="" style="font-weight:bold"  align="right">How long have you been in business?&nbsp;<span class="redalert">*</span></td>
<td class="" valign="top"><div class="form-group custom-select-wrapper">
              <select class="custom-select"  name="cdlCustomFieldValueIDYearsInBusiness"><option selected>Choose...</option>
<option value="Opening in 6 months or less">Opening in 6 months or less</option>
<option value="Open less than 6 months">Open less than 6 months</option>
<option value="6 months - 2 years">6 months - 2 years</option>
<option value="2-5 years">2-5 years</option>
<option value="6-10 years">6-10 years</option>
<option value="More than 10 years">More than 10 years</option>
</select>
</div><br></td></tr>
	
	<tr class="">
<td class="" style="font-weight:bold"  align="right">How many locations do you have?&nbsp;<span class="redalert">*</span></td>
<td class="" valign="top"><div class="form-group custom-select-wrapper">
              <select class="custom-select"  name="cdlCustomFieldValueIDYearsInBusiness">
				  <option selected>Choose...</option>
<option value="1">1</option>
<option value="2-5">2-5</option>
<option value="5-15">5-15</option>
<option value="<15">More than 15</option>
</select>
</div><br></td></tr>






<tr>
	<th colspan="2">
		<h3>Additional Information</h3>
		
	</th>
</tr>


<tr>
	<td align="right">
	  <b>More information about you</b>
	  </td>
	<td><textarea wrap="VIRTUAL" name="mem_personalComments" cols="35" rows="8"></textarea></td>
</tr>



<tr>
	<td colspan="2" align="center">
		<input class="btn btn-l btn-red" type="submit" name="btn_submit" value="Submit" id="btnSubmit" onclick="">&nbsp;
		<input class="btn btn-l btn-pastel-meander" type="button" value="Cancel"   onclick="if (confirm('Are you sure you want to cancel registration? ')) location.href = '/index.php';">
	</td>
</tr>
</tbody></table>

</form>

			  
			  </div>
		  </div>
         
<!--
		<div class="row">
          <div class="col-md-4">
            <div class="pricing panel box bg-pastel-lavender">
              <div class="panel-heading">
                <h4 class="panel-title">5-Star Plan</h4>
                <div class="price color-dark"> <span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">month</span></div>
              </div>

              <div class="panel-footer"> <a href="https://www.paypal.me/InfoempireLLC/" class="btn btn-white mb-10" role="button" target="">Buy membership</a></div>
            </div>
          </div>
			
			<div class="col-md-4">
            <div class="pricing panel box bg-pastel-yellow">
              <div class="panel-heading">
                <h4 class="panel-title">Gold Member Plan</h4>
                <div class="price color-dark"> <span class="price-currency">$</span><span class="price-value">299</span> <span class="price-duration">month</span></div>
              </div>
              
              <div class="panel-footer"> <a href="https://www.paypal.me/InfoempireLLC/" class="btn btn-white mb-10" role="button" target="">Buy membership</a></div>
            </div>
          </div>
			
			<div class="col-md-4">
            <div class="pricing panel box bg-pastel-rose">
              <div class="panel-heading">
                <h4 class="panel-title">VIP Sponsor Plan</h4>
                <div class="price color-dark"> <span class="price-currency">$</span><span class="price-value">599</span> <span class="price-duration">month</span></div>
              </div>
              
              <div class="panel-footer"> <a href="https://www.paypal.me/InfoempireLLC/" class="btn btn-white mb-10" role="button" target="">Buy membership</a></div>
            </div>
          </div>
			
        </div>
-->
        
      </div>
    </div>
  
@stop