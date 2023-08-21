@extends('pages.master')

@section('content')
<?php
$modeldata=Session::get('modeldata');

?>

<div class="custom-signup-content">
    <h2>Advertise on Velvet Klub - </h2>
    <P>Velvet Klub is a premier escort service in Australia, New Zealand, and India. This gives you the chance to promote your profile and get verified customers in your city.</P>
    <p>We offer opportunities for adult entertainers to find venues that suit their tastes and preferences, by creating content and communicating directly with fans. Our customers are legit users and range from local partying users to tourists.</p>
    <p>We have worked hard to make our platform secure and safe with verified customers. This gives you the chance to make use of your digital marketing skills for organic and paid marketing. On top of that, we have our support team which is available 24/7 for your help.</p>
    
    <h2>Photo Guidelines are as follows:-</h2>
    <p>First, set up your account by uploading a photo and bio that is original and not sourced from platforms such as Instagram or Facebook.</p>
    <p>Please share all relevant information, including your bio and images, with us via email at <a href="mailto:listing@velvetklub.com">listing@velvetklub.com</a>"</p>
    <p>Note. If you are from Victoria, then you need an SWA exception number or license number. Click on the BLA link to find out more: <a href="www.consumer.vic.gov.au/licensing-and-registration/sex-work-service-providers">www.consumer.vic.gov.au/licensing-and-registration/sex-work-service-providers</a></p>
    <h2>Select an advertising plan that fits your requirements:-</h2>
    <p>Independent accounts have options starting at $10 per week for 1 location, or $50 for 4 weeks and 2 locations. If you're looking for the best, consider our Featured Package, which starts at $110 for 4 weeks. Additionally, advertising on the home page is now available. Check out all the available packages and account types to choose from.</p>
    <h2>Velvet Klub Advertising Step-by-Step Guide:-</h2>
    <p>Select the state, advertising category, and username, and then check your email for a link. Follow the link and log back in to complete your profile, including confirming the code sent to your phone</p>
    <p>Complete your profile details to make it easier for people to find you through our search filters.</p>
    <p>Write a descriptive text with an eye-catching headline and include any reviews.</p>
    <p>Upload photos and choose which part of the photo will be displayed in the site's thumbnails.</p>
    <p>Select a location and take advantage of the search filter to choose from existing locations. Extra locations and touring locations can be added later and can have different pricing and rates</p>
    <p>Add your roster, which can be set for weekly, fortnightly, or 4-weekly intervals.</p>
    <p>Choose a membership and payment option and make a purchase using a credit/debit card through our secure payment gateway. Alternatively, you can opt for cash or direct deposit through ANZ.</p>
    <h2>Maximize Your Advertising Benefits with Photo Verification:-</h2>
    <p>Before applying for Photo Verification, please be aware that the Velvet Klub team will require an additional Selfie Photo along with the 7 Gallery Photos and 2 Verification Photos. You will receive instructions for the Selfie Photo after completing the steps below and informing us that you are ready.</p>
    <p>The Selfie Photo must be taken within 5 minutes of our request and from the phone number listed on your ad.</p>
    <p>It is possible that we may periodically request that you repeat this process to maintain your Photo Verified status. If you are unable to provide the Selfie Photo within the designated time frame, your Photo Verification will be removed from your ad and the process will have to be restarted.</p>
    <p>Earning the "Photos Verified" label on your profile requires that your photos be confirmed as depicting you by the editor based on the Verification Photos. Note that verification cannot be purchased and is a privilege, not a right.</p>
    <p>Once you have completed the following steps, please contact us at 0450 733 525 during business hours (9 am to 5 pm EST) or via SMS after hours. We cannot provide refunds based on the outcome of your Photo Verification application.</p>
    <p>The Verification Photos are for Velvet Klub admin review only, but you may display them in your Photo Gallery to prove your identity. However, your gallery cannot consist solely of photos of you holding your verification sign.</p>
    <h2>To ensure that the photos are of you, please follow these guidelines:</h2>
    <p>Provide a minimum of 7 Gallery Photos for public viewing</p>
    <p>Provide a minimum of 2 Verification Photos for the Velvet Klub team review. For the first Verification Photo, hold a piece of paper with your #Username, date, and "Escorts and Babes" written on it, and hold it to the side, not in front of your body or face. For the second Verification Photo, crinkle the same paper and hold it in your left hand, ensuring a full body shot (head to toe). If you do not have someone to take the photo for you, stand in front of a full-length mirror. Wear one of your outfits, lingerie, shoes, or jewellery from your Gallery Photos to make it easier for us to verify. If your Gallery Photos display tattoos, your Verification Photos must also show these tattoos. If your Gallery Photos consist of partial nudity, your Verification Photos must also depict this nudity.</p>
    <p>The final step in verifying your photos is to call or text us during business hours (9 am to 5 pm EST Monday to Friday) or after hours when you are ready. A Velvet Klub team member will request a selfie photo in a specific pose, which must be sent back to us within 5 minutes.</p>
    <p>If you upload new photos in the future and the editor is unable to confirm that they are of you, your Photo Verification will be removed from your ad and you will be advised to restart the verification process.</p>
    <p>If you are unable to meet these guidelines, we will not be able to verify that the photos are yours.</p>
    <p>If we receive reports that someone other than you attend a meeting, verification will be removed and you will be asked to verify again. DO NOT SEND A REPLACEMENT TO A MEETING!</p>
    <p>You may take down your profile by unchecking the "Show my Ad" option. Share your web links and check your potential clients using our new searchable database, "Tour Australia," and more."</p>
    <!--<p><b>Note.</b> Victorian Advertisers require a SWA exception number or license number. Click on the BLA link to find out more: <a href="https://www.consumer.vic.gov.au/licensing-and-registration/sex-work-service-providers.">www.consumer.vic.gov.au/licensing-and-registration/sex-work-service-providers.</a></p>-->
</div>

<div class="filters custom-filter-iso isotope_filters">

    <a href="javascript:void(0);" id="model" data-filter="<?php if(isset($modeldata)) { if($modeldata =='1') { echo '.modelsign'; } else{ echo'.modelsign';}  }  else { echo '.modelsign'; } ?>" class="<?php if(isset($modeldata)) { if(Session::get('modeldata')=='1') { echo 'selected'; } else { echo'';} }  else { echo 'selected'; } ?> button_t" data-tab = "modelsign">Model Signup</a>
    <a href="javascript:void(0);" data-filter="<?php if(isset($modeldata)) { if($modeldata =='0') { echo '.customersign'; } else{ echo '.customersign';} }  else { echo '.customersign'; } ?>" id="cussg" class="<?php if(isset($modeldata)) { if(Session::get('modeldata')=='0') { echo 'selected'; } else { echo'';} }  ?> button_t" data-tab = "customersign">Customer Signup</a>    
 </div>
 <div class="columns_padding_5 custom-customer-form">
	<div class="isotope_container inner-form-isotope isotope row masonry-layout" data-filters=".isotope_filters">
		<div class="isotope-item bottommargin_10 text-center col-md-6 col-sm-6 col-xs-6 modelsign" id="modelsign" class="">
        
        <form method="post" enctype="multipart/form-data" action="{{url('save')}}">
					     {{csrf_field()}}
					    <div class="form-group">
                            <label for="name" class="sr-only">Model name
                            <span class="required">*</span>
                            </label>
                            <input maxlength="25" type="text" aria-required="true" class="form-control text-center" placeholder="Model Name" id="name" name="name" value="{{old('name')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Email
                            <span class="required">*</span>
                            </label>
                            <input type="email" aria-required="true" size="30" class="form-control text-center" placeholder="Email" id="email" name="email" value="{{old('email')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Phone
                            <span class="required">*</span>
                            </label>
                            <input type="number" aria-required="true" size="30" class="form-control text-center" placeholder="Phone" id="phone" name="phone" value="{{old('phone')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Location
                            <span class="required">*</span>
                            </label>
                            <input maxlength="50" type="text" aria-required="true" size="30" class="form-control text-center" placeholder="Location" id="street_address" name="street_address" value="{{old('street_address')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">City
                            <span class="required">*</span>
                            </label>
                            <input maxlength="15" type="text" aria-required="true" class="form-control text-center" placeholder="City" id="city" name="city" value="{{old('city')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">State
                            <span class="required">*</span>
                            </label>
                            <input maxlength="15" type="text" aria-required="true" class="form-control text-center" placeholder="State" id="state" name="state" value="{{old('state')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Pin/Zip Code
                            <span class="required">*</span>
                            </label>
                            <input type="number" aria-required="true" class="form-control text-center" placeholder="Pin/Zip Code" id="zip" name="zip" value="{{old('zip')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Sex
                            <span class="required">*</span>
                            </label>
                            <select name="sex" class="form-control text-center" required>
                          <option value="">Select Sex</option>
                          <option value="male" {{ old('sex') == "male" ? 'selected' : '' }}>Male</option>
                          <option value="female" {{ old('sex') == "female" ? 'selected' : '' }}>Female</option>
                          <option value="Transgender" {{ old('sex') == "transgender" ? 'selected' : '' }}>Transgender</option>
                          <option value="bisexual" {{ old('sex') == "bisexual" ? 'selected' : '' }}>Bisexual</option>
                        </select>
                        </div>
                        
                        <!--<div class="form-group">-->
                        <!--    <label for="name" class="sr-only">Preferences-->
                        <!--    <span class="required">*</span>-->
                        <!--    </label>-->
                        <!--    <input type="text" aria-required="true" size="30" class="form-control text-center" placeholder="Preferences" id="preferences" name="preferences" value="{{old('preferences')}}" required>-->
                        <!--</div>-->
                        
                        <input type="hidden" id="preferences" name="preferences" value="preferences" >
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Bio
                            <span class="required">*</span>
                            </label>
                             <textarea placeholder="Bio" id="bio" class="form-control text-center" col=10 row=5 name="bio" required>{{old('bio')}}</textarea>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Distance
                            <span class="required">*</span>
                            </label>
                           <input type="number" id="distance" class="form-control text-center" placeholder="Distance" name="distance" value="{{old('distance')}}" required>
                        </div>
                        
                        <!--<div class="form-group">-->
                        <!--    <label for="name" class="sr-only">Marital Status-->
                        <!--    <span class="required">*</span>-->
                        <!--    </label>-->
                        <!--   <input type="text" maxlength="10" class="form-control text-center" placeholder="Marital Status" id="marital_status" name="marital_status" value="{{old('marital_status')}}" required>-->
                        <!--</div>-->
                        
                        <input type="hidden" name="marital_status" value="single">
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Lifestyle
                            <span class="required">*</span>
                            </label>
                           <input type="text" maxlength="10" class="form-control text-center" placeholder="Lifestyle" id="lifestyle" name="lifestyle" value="{{old('lifestyle')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Body Structure
                            <span class="required">*</span>
                            </label>
                           <input type="text" maxlength="10" class="form-control text-center" placeholder="Body Structure" id="body_structure" name="body_structure" value="{{old('body_structure')}}" required>
                        </div>
						<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Send</button>
					</form>
                </div>

                <div class="isotope-item bottommargin_10 col-md-6 col-sm-6 col-xs-6 customersign" id="customersign" style="display:none;">
                <form method="post" enctype="multipart/form-data" action="{{url('customerdata')}}">
					     {{csrf_field()}}
					    <div class="form-group">
                            <label for="name" class="sr-only">Username
                            <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" maxlength="25" class="form-control text-center" placeholder="User Name" id="name" name="name" value="{{old('name')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Email
                            <span class="required">*</span>
                            </label>
                            <input type="email" aria-required="true" class="form-control text-center" placeholder="Email" id="email" name="email" value="{{old('email')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Phone
                            <span class="required">*</span>
                            </label>
                            <input type="number" aria-required="true" class="form-control text-center" placeholder="Phone" id="phone" name="phone" value="{{old('phone')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Location
                            <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" maxlength="50" class="form-control text-center" placeholder="Location" id="street_address" name="street_address" value="{{old('street_address')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">City
                            <span class="required">*</span>
                            </label>
                            <input type="text" maxlength="15" aria-required="true" class="form-control text-center" placeholder="City" id="city" name="city" value="{{old('city')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">State
                            <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" maxlength="15" class="form-control text-center" placeholder="State" id="state" name="state" value="{{old('state')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Pin/Zip Code
                            <span class="required">*</span>
                            </label>
                            <input type="number" aria-required="true" class="form-control text-center" placeholder="Pin/Zip Code" id="zip" name="zip" value="{{old('zip')}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Sex
                            <span class="required">*</span>
                            </label>
                            <select name="sex" class="form-control text-center" required>
                          <option value="">Select Sex</option>
                          <option value="male" {{ old('sex') == "male" ? 'selected' : '' }}>Male</option>
                          <option value="female" {{ old('sex') == "female" ? 'selected' : '' }}>Female</option>
                          <option value="Transgender" {{ old('sex') == "transgender" ? 'selected' : '' }}>Transgender</option>
                          <option value="bisexual" {{ old('sex') == "bisexual" ? 'selected' : '' }}>Bisexual</option>
                        </select>
                        </div>
                        
                        <!--<div class="form-group">-->
                        <!--    <label for="name" class="sr-only">Preferences-->
                        <!--    <span class="required">*</span>-->
                        <!--    </label>-->
                            
                        <!--</div>-->
                        
                        <input type="hidden" class="form-control text-center" placeholder="Preferences" id="preferences" name="preferences" value="preferences">
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Bio
                            <span class="required">*</span>
                            </label>
                             <textarea maxlength="2000" placeholder="Interests" id="interests" class="form-control text-center" col=10 row=5 name="interests" required>{{old('interests')}}</textarea>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Distance
                            <span class="required">*</span>
                            </label>
                           <input type="number" id="distance" class="form-control text-center" placeholder="Distance" name="distance" value="{{old('distance')}}" required>
                        </div>
                        
                        <!--<div class="form-group">-->
                        <!--    <label for="name" class="sr-only">Marital Status-->
                        <!--    <span class="required">*</span>-->
                        <!--    </label>-->
                        <!--   <input type="text" maxlength="10" class="form-control text-center" placeholder="Marital Status" id="marital_status" name="marital_status" value="{{old('marital_status')}}" required>-->
                        <!--</div>-->
                        
                        <input type="hidden" name="marital_status" value="single">
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">Lifestyle
                            <span class="required">*</span>
                            </label>
                           <input type="text" maxlength="10" class="form-control text-center" placeholder="Lifestyle" id="lifestyle" name="lifestyle" value="{{old('lifestyle')}}" required>
                        </div>
                        
						<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Send</button>
					</form>
                </div>
            </div>
        </div>
</div>


@endsection
@section('custom_javascript')
<?php 
if(isset($modeldata)) { 
	if($modeldata =='1') {
	?>
	<script>
	
	$("#customersign").hide();
	$("#modelsign").show();
	$("#customersign form").reset();
	</script>
		
	<?php
	
	} 
	elseif($modeldata =='0'){ 
	?>
	<script>
	
	
	$("#modelsign").hide();
	$("#customersign").show();
	$("#modelsign form").reset();
	</script>
	<?php
	}  
	
}   
?>

<script>
$('.button_t').click(function(){
	var tb = $(this).data('tab');
	
	$('.isotope-item').hide();
	$('#'+tb).show();
});

</script>
@endsection