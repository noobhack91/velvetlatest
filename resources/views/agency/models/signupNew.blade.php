@extends('backend_layout.master')

@section('content')
 <div class="content-wrapper">
<section class="profile-sec">
        <div class="container">
            <div class="profile-form">
                <!-- multistep form -->
                <form id="regForm" class="my-multistep-form" method="POST" action="{{url('agency/createmodel')}}">
				{{ csrf_field()}}
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-ottom:40px;" class="steps">
                        <p>Steps: </p>
                        <span class="step">Step 1</span>
                        


                    </div>

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="profile-details">
                            <h3>Registration</h3>
                            <p>These are required for your profile to display.</p>
                            <!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
                            <div class="row">
                                <div class="col-sm-12">

                                    <!-- Gender -->
                                    <div class="form-group">
                                        <div class="editing-form-label-cell">
                                            <label for="country" class="control-label editing-form-label"
                                                oninput="this.className = 'tab'" name="country">Country</label>
                                        </div>
                                        <div class="editing-form-value-cell">
                                            <select name="country" id="select_country_admin" class="form-control" required>
                                                <option value="">- not set -</option>
												@foreach($countries as $country)
                                                <option value="{{$country->name}}" data-country_id="{{$country->id}}">{{$country->name}}</option>
												@endforeach
                                               

                                            </select>
                                            <span id="ctl01" class="form-control-error" style="display:none;"
                                                oninput="this.className = ''" name="fname">Please select your
                                                country.</span>
                                        </div>
                                    </div>

                                    <!-- Sexuality -->
                                    <div class="form-group">
                                        <div class="editing-form-label-cell">
                                            <label for="State"
                                                class="control-label editing-form-label">State</label>
                                        </div>
                                        <div class="editing-form-value-cell">
                                            <select name="state" id="select_state" class="form-control" required>
                                                <option value="">- not set -</option>
                                                

                                            </select>
                                            <span id="ctl03" class="form-control-error" style="display:none;">Please
                                                select your
                                                state.</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <div class="editing-form-label-cell">
                                            <label for="Account Classification"
                                                class="control-label editing-form-label">Account Classification</label>
                                        </div>
                                        <div class="editing-form-value-cell">
                                            <select name="role" id="select_role" class="form-control" required>
                                                <option value="">- not set -</option>
                                                <option value="model">Independent</option>
                                                <option value="establishment">Establishment</option>
                                                <option value="agency">Agency</option>
                                                

                                            </select>
                                            <span id="ctl03" class="form-control-error" style="display:none;">Please
                                                select your
                                                account classification.</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <div class="editing-form-label-cell">
                                            <label for="Account Type"
                                                class="control-label editing-form-label">Account Type</label>
                                        </div>
                                        <div class="editing-form-value-cell">
                                            <select name="account_type" id="select_account_type" class="form-control" required>
                                                <option value="">- not set -</option>
                                                
                                                
                                                

                                            </select>
                                            <span id="ctl03" class="form-control-error" style="display:none;">Please
                                                select your
                                                account classification.</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <div class="editing-form-label-cell">
                                            <label for="Advertising Category"
                                                class="control-label editing-form-label">Advertising Category</label>
                                        </div>
                                        <div class="editing-form-value-cell">
                                            <select name="advertising_category" id="select_advertising_category" class="form-control" required>
                                                <option value="">- not set -</option>
                                                
                                                
                                                

                                            </select>
                                            <span id="ctl03" class="form-control-error" style="display:none;">Please
                                                select your
                                                advertising category.</span>
                                        </div>
                                    </div>
									<div id="signupForm">
										<div class="form-group">
											<div class="editing-form-label-cell">
												<label for="User Name"
													class="control-label editing-form-label">User Name</label>
											</div>
											<div class="editing-form-value-cell">
												<input type="text" aria-required="true" maxlength="25" class="form-control text-center" placeholder="User Name" id="name" name="name" value="{{old('name')}}" required>
											</div>
										</div>
                                    
										<div class="form-group">
											<div class="editing-form-label-cell">
												<label for="Email"
													class="control-label editing-form-label">Email</label>
											</div>
											<div class="editing-form-value-cell">
												<input type="email" aria-required="true" class="form-control text-center" placeholder="Email" id="email" name="email" value="{{old('email')}}" required>
											</div>
										</div>
                                    
										<div class="form-group">
											<div class="editing-form-label-cell">
												<label for="Password"
													class="control-label editing-form-label">Password</label>
											</div>
											<div class="editing-form-value-cell">
												<input type="password" aria-required="true" class="form-control text-center" placeholder="Password" id="password" name="password" value="{{old('password')}}" required>
											</div>
										</div>
										
										<div class="form-group">
											<div class="editing-form-label-cell">
												<label for="Mobile"
													class="control-label editing-form-label">Mobile</label>
											</div>
											<div class="editing-form-value-cell">
												<input type="number" aria-required="true" class="form-control text-center" placeholder="Mobile" id="phone" name="phone" value="{{old('phone')}}" required>
											</div>
										</div>
										
										<div class="form-group">
											<div class="editing-form-label-cell">
												<label for="Mobile"
													class="control-label editing-form-label">I am 18+ of age. I accept terms and condition.</label>
											</div>
											<div class="editing-form-value-cell">
												<input type="checkbox" aria-required="true" class="form-control text-center" placeholder="" id="confirm_age" name="confirm_age"  value="1" required>
											</div>
										</div>
										
                                    </div>
									
									

                                    

                                </div>
                            </div>
                        </div>
					</div>

                    <!-- Profile text html starts from here -->

                    
            </div>

            <div style="overflow:auto;" class="my-mt-buttons">
                <div style="float:right;">
                    <button type="submit" id="">Register</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </section>
    </div>
@endsection
@section('custom_css')
<style>
/**************23-02-2023******************/
.my-mt-buttons {
    margin-top: 10px;
}
.my-multistep-form {
    background-color: #ffffff;
    margin: 0 auto 0 0;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    border: 1px solid #000000;
}

.my-multistep-form .tab {
    background-color: unset;
    border: 0;
}

.my-multistep-form input {
    padding: 0 10px;
    width: 100%;
    height: 40px;
    line-height: 40px;
    border: 1px solid #ced4da;
    font-size: 16px;
    border-radius: 2px;
}

.my-multistep-form input[type=radio],
.my-multistep-form input[type=checkbox] {
    width: auto;
    height: auto;
}

/* Mark input boxes that gets an error on validation: */
.my-multistep-form input.invalid {
    background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
   /* display: none;*/
}

.my-mt-buttons button {
    background-color: #383838;
    color: #ffffff;
    border: none;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    border-radius: 2px;
}

.my-mt-buttons button:hover {
    opacity: 0.8;
}

.my-mt-buttons #prevBtn {
    background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
    height: 10px;
    width: 10px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}

.step.active {
    opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
    background-color: #c551d0;
}

.multi-dots {
    display: none;
}

.selected-state h4 {
    margin: 0;
    border-bottom: 1px dashed #cccccc;
    padding-bottom: 5px;
    font-size: 16px;
    font-weight: 400;
}

.selected-state {
    align-items: center;
    padding-bottom: 10px;
}

.tab .inner-tab h6 {
    margin: 0;
    margin-right: 20px;
    width: 30%;
}

.inner-tab {
    display: flex;
    padding-bottom: 15px;

}

.multistep-buttons {
    padding: 20px 0;
}

.multistep-buttons a {
    background-color: #c551d0;
    color: #ffffff;
    height: 40px;
    line-height: 40px;
    padding: 0 20px;
    font-size: 16px;
    font-weight: 500;
    margin-right: 10px;
    display: inline-block;
}

.multi-accordian .btn-link {
    color: #b033bb;
    text-decoration: none;
    background-color: transparent;
}

.multi-accordian .card-body {
    padding: 20px;
}

.multistep-form-sec {
    padding: 40px 0;
}

.multi-accordian .card-header {
    padding: 5px 10px;
    margin-bottom: 0;
    background-color: transparent;
    border-bottom: 1px solid #fde8ff;
}

.multi-accordian .card {
    border: 1px solid #fde8ff;
    margin-bottom: 5px;
}

.multi-accordian .btn-link:hover {
    text-decoration: none;
}

.multi-accordian .btn.focus,
.multi-accordian .btn:focus {
    outline: 0;
    box-shadow: unset;
}

.multi-accordian {
    padding-bottom: 30px;
}

.multi-advertise h2 {
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
    color: #EEAFDD;
    font-size: 36px;
}

.multi-advertise p a {
    color: #c551d0;
}

.multi-advertise .inner-tab a {
    color: #c551d0;
}


.steps {
    display: flex;
    padding: 5px 15px;
    margin-bottom: 20px;
    background: #f5f5f5;
    border: 1px solid #ddd;
}

.steps p {
    margin-bottom: 0rem;
    font-weight: bold;
}

.steps span {
    padding: 0 5px;
}



/* profile details */

.profile-details {
    border: 1px dotted #a5a5a5;
    padding: 25px;
}

.profile-details-optional {
    border: 1px dotted #a5a5a5;
    padding: 25px;
    margin-top: 20px;
}

.private-things {
    border: 1px dotted #a5a5a5;
    padding: 25px;
    margin-top: 20px;
}

.profile-text {
    border: 1px dotted #a5a5a5;
    padding: 25px;
}

.form-group {
    display: flex;
    justify-content: space-between;
}

.editing-form-value-cell {
    width: 60%;
    padding-left: 15px;
    padding-right: 15px;
}

.editing-form-label-cell {
    text-align: right;
    width: 40%;
    padding-right: 10px;
    /*padding-top: 6px;*/
    font-weight: 500;
}

.checkbox {
    padding-top: 8px;
}

.checkbox label {
    padding-left: 5px;
}

.form-control-static {
    color: #b033bb;
}

.private-things p {
    padding-top: 20px;
}

.profile-text-form {
    width: 80%;
    margin: auto !important;
}


.profile-text-form-content {
    width: 80%;
    margin: auto;
}

.title-label {
    width: 25%;
    font-weight: 700;
    padding-top: 5px;
    text-align: end;
    padding-right: 30px;
}

.title-input {
    width: 75%;
}

.sec-title {
    display: flex;
    width: 70%;
}

.sec-title input {
    width: 65%;
}

/* for text editor */
.description {
    display: flex;
    width: 70%;
    padding-top: 15px;
}

.editButtons button {
    border: none !important;
    font-size: 20px;
    background-color: #fff;
}

.editButtons {
    width: 75%;
    border: 1px solid #ced4da;
}

.bold-italic {
    border-bottom: 1px solid #aeaeae;
    padding: 5px 0;
}

div#textbox {
    height: 70px;
}

.photos {
    border: 1px dotted #a5a5a5;
    padding: 25px;
}

/*************************profie-css*******************************/

.profile-form .step {
    height: auto;
    width: auto;
    background-color: transparent;
    cursor: pointer;
}

.profile-form .step.finish {
    background-color: transparent;
    opacity: 1;
}

.profile-sec {
    padding: 60px 0;
    background-color: #ffffff;
}

.profile-form form .tab {
    overflow: hidden;
    border: 0;
    background-color: transparent;
}

.profile-form form input[type=checkbox] {
    visibility: visible;
    position: relative;
}

.profile-form form input[type="checkbox"]+label:before {
    content: unset;
}

.checkbox input {
    display: inline-block;
    vertical-align: middle;
}

.checkbox label {
    margin: 0;
}

.checkbox {
    background-color: #f8f8f8;
    padding: 0 5px;
}

.profile-details .checkbox {
    background-color: transparent;
}

.profile-form .my-mt-buttons {
    padding-top: 20px !important;
}

.profile-form form {
    width: 100%;
    border: none;
    min-width: auto;
    padding: 0;
}

.custom-upload-box img {
    max-width: 100%;
}

.custom-upload-box input[type=file] {
    background: #fbaa52;
    margin-bottom: 20px;
    border-radius: 5px;
    color: #fff;
    height: 45px;
    line-height: 45px;
    padding: 0 10px;
    width: 100%;
}

.profile-text-form-content #textbox {
    height: 40px;
}

.profile-text-form-content #textbox:focus:not(:focus-visible) {
    outline: 0;
    box-shadow: none;
}

.profile-text-form-content .bold-italic {
    border-bottom: 1px solid #aeaeae;
}




/* profile image */

.uploader {
    display: block;
    clear: both;
    margin: 0 auto;
    width: 100%;
    max-width: 600px;
}

.uploader label {
    float: left;
    clear: both;
    width: 100%;
    padding: 10px;
    text-align: center;
    background: #fff;
    border-radius: 7px;
    border: 1px solid #eee;
    transition: all .2s ease;
    user-select: none;
    margin-top: 30px;

}



#file-image {
    display: inline;
    margin: 0 auto .5rem auto;
    width: auto;
    height: auto;
    max-width: 180px;
}

#file-image.hidden {
    display: none;
}


#notimage {
    display: block;
    float: left;
    clear: both;
    width: 100%;
}

#notimage.hidden {
    display: none;
}


progress,
.progress {
    appearance: none;
    display: inline;
    clear: both;
    margin: 0 auto;
    width: 100%;
    max-width: 180px;
    height: 8px;
    border: 0;
    border-radius: 4px;
    background-color: #eee;
    overflow: hidden;
}



.quote-imgs-thumbs {
    background: #eee;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
    margin: 1.5rem 0;
    padding: 0.75rem;
}

.quote-imgs-thumbs--hidden {
    display: none;
}

.img-preview-thumb {
    background: #fff;
    border: 1px solid #777;
    border-radius: 0.25rem;
    box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
    margin-right: 1rem;
    max-width: 140px;
    padding: 0.25rem;
}

.categorisation-content-left-img img {
    width: 100%;
}

.categorisation-content-right-checkboxes {
    border: 1px solid #ced4da;
    padding: 10px;
}

.checkboxforcategorisation label {
    margin-bottom: 0rem;
}

.categorisation-content-right-checkboxes p {
    font-weight: bold;
}

.base-location-form-state select {
    width: 528px;
    height: 50px;
    border-radius: 5px;
    border-bottom: 2px dotted #ced4da !important;
    border: none;
}

.set-loaction {
    padding-bottom: 10px;
}

.base-location-form label {
    font-weight: 500;
    text-align: end;
}

.base-location-form input {
    color: #000000;

}

.padding-left-right {
    padding-right: 0;
    padding-left: 0;
}



.set-rates-left-table input {
    width: 90px;
    border: 1px solid #ced4da;
    height: 40px;
    margin: 5px 0;
    border-radius: 5px;
}

.dash {
    text-align: center;
    width: 25px;
}

.td-padding-right {
    padding-right: 30px;
    font-weight: 500;
}


.timetable-outlook {
    border: 1px solid #ced4da;
    padding: 10px;
}

.availability-legend {
    border: 1px solid #ced4da;
    padding: 10px;
    margin-top: 20px;
}

.availability-legend a {
    background-color: #fef2ff;
    border-left: 4px solid #fbccff;
}

.availability-week1 {
    border: 1px solid #ced4da;
    padding: 10px;
    margin-top: 20px;
    background-color: #fffdf4;
}

td .availability-monday {
    /* border: 1px solid #ced4da; */
    display: flex;
    justify-content: space-between;
}

.availability-monday p {
    margin-bottom: 0rem !important;
    padding: 0 10px;
}

.availability-monday-input p {
    margin-bottom: 0rem !important;
    padding: 0 5px;
}

.availability-monday-input {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.availability-monday-input input {
    width: 80px;
    height: 30px;
    border: 1px solid #ced4da;
}

.am-pm {
    background-color: #f0f0f0;
    padding: 10px;
    width: 20%;
}

.monday-bg {
    background-color: #e7e7e7;
    padding: 10px;
    width: 30%;
}

.availability-monday-checkbox-bg {
    background-color: #f0f0f0;
}

.availability-monday-checkbox {
    display: flex;
    padding: 10px;
}

.availability-monday-checkbox .checkboxforcategorisation {
    padding: 0 10px;
}

.line-tr-bg {
    border: 1px solid #ffe3e3;
    background-color: #f0f0f0;
    padding-bottom: 84px;
    margin-bottom: 10px;
    display: inline-table;
}

.dark-pink {
    background-color: #fbd4ff;
}

.independent-packages {
    padding-top: 50px;
}

.independent-packages-content {
    border: 1px solid #b033bb;
    padding: 10px;
}

.independent-packages-content a {
    color: #b033bb;
}

.membership-table th {
    width: 12%;
    text-align: center;
    border: 1px solid #ced4da;
}

.membership-table td {
    width: 12%;
    text-align: center;
    border: 1px solid #ced4da;

}

td.price-for-membership {
    text-align: center;
    padding: 10px 5px;
}

.membership-table-bg-black {
    color: #fff;
    background-color: #5c5c5c;
}

.membership-table-bg-pink {
    color: #fff;
    background-color: #af62c3;
}

.membership-table-bg-light-yellow {
    background-color: #f5f5f5;
}

.membership-table-bg-medium-yellow {
    background-color: #ededed;
}

.membership-table-bg-light-pink {
    background: #FCEDFF;
}

.membership-table-btns a {
    font-size: 13px;
    background-color: aqua;
    padding: 5px;
    color: #fff !important;
    background-color: #c551d0;
    border-bottom: 4px solid #b033bb;
}

.membership-table-btns td {
    height: 100px;
    border: none;
    border-right: 1px solid #ced4da;
}

.membership-table-border {
    padding: 25px 25px 0 25px !important;
}

.order-review-shopping-cart {
    display: flex;
    justify-content: space-between;
    background-color: #f5f5f5;
    border: 1px solid #ced4da;
    padding: 10px;
    margin-bottom: 15px;
}

.order-review-product {
    width: 70%;

}

.units-price td {
    padding: 0 10px;
}

.td-design {
    border: 1px solid #ced4da;
    background-color: #a5a5a5;
    padding: 0px 20px !important;
}

.order-review-total-price {
    background: #FCEDFF;
    width: 20%;
    display: flex;
    justify-content: space-between;
    padding: 10px;
    margin-left: auto;
    border: 1px solid #b033bb;
}

/* .order-review-order-comments {
    padding: 0 10px 10px 10px;
} */
.order-review-order-comments-message textarea {
    width: 100%;
    border: 1px solid #ced4da;
}

.order-review-order-comments-header {
    background-color: #f5f5f5;
    padding: 5px;
}

.order-review-order-comments-message {
    padding: 10px;
}

.order-review-order-comments {
    border: 1px solid #ced4da;
    margin-top: 20px;
    margin-bottom: 40px;
}

.order-review-terms-and-condition {
    background: #FCEDFF;
    padding: 10px;
    border: 1px solid #b033bb;
}

.order-review-terms-and-condition span {
    color: #b033bb;
}

.order-review-terms-and-condition .checkboxforcategorisation label {
    font-weight: bold !important;
}

.back-order-btns {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.back-order-btns .back-btn {
    color: #fff;
    background-color: #505050;
    border-bottom: 4px solid #000000;
}

.back-order-btns .ordernow-btn {
    color: #fff;
    background-color: #c551d0;
    border-bottom: 4px solid #b12fbd;

}

.margin-bottom {
    margin-bottom: 0rem !important;
}

.sec-shopping-cart-payment-method {
    border: 1px solid #ced4da;

}

.sec-shopping-cart-payment-method-bank-transfer {
    padding: 5px;
}

.margin-left {
    margin-left: 30px;
}

.sec-shopping-cart-discount-coupon {
    display: flex;
    justify-content: space-around;
    text-align: end;
}

.sec-shopping-cart-discount-coupon input {
    border: 1px solid #ced4da;
    height: 40px;
    border-radius: 5px;
}

.sec-shopping-cart-discount-coupon a {
    color: #fff;
    background-color: #c551d0;
    border-bottom: 4px solid #b12fbd;
    width: 160px;
}

.discount-coupon-form {
    width: 50% !important;
}

.sec-shopping-cart-payment-method-table table {
    width: 100%;
}

.sec-shopping-cart-payment-method-table td {
    padding: 10px;
}

.tr-border {
    border: 1px solid #ced4da;

}

.order-review-total-price-table {
    background: #FCEDFF;

    padding: 10px;
    margin-top: 15px;
    border: 2px solid #b033bb;
}
.sec-payment-page table {
    width: 25%;
}
.td-bold {
    font-weight: 500;
}

.payment-page-box {
    border: 2px solid #ced4da;
padding: 10px;
display: block;
margin-top: 30px;
}
.payment-page-box input {
    width: 100%;
    border: 1px solid #ced4da;
padding: 10px;
    margin: 10px 0;
}
.payment-page-box-submit-btn {
    padding-top: 30px;
}
.input-before-logo {
    width: 20%;
    margin: 0 0 0 auto;
}
.input-before-logo img {
    width: 100%;
}
/* .input-before-logo::before {
        content:url('images/download.png') ;
        position: relative;
        right: -210px;
        display: inline-block;
    width: 10px; 
    height: 20px;
      } */

</style>
@endsection
@section('custom_js')
<script>
        $('#signupForm').hide();
		$("#select_country_admin").change(function(){
		  
			//var country = $(this).attr('data-country_id');
			var country = $(this).find(':selected').data('country_id');
			var html = '';
			//alert("country "+country);
			
			if(country!=""){
				$.ajax({
					url: "/ajax/getStates", 
					data:{country:country},
					dataType : 'json',
					success: function(result){
					    console.log(result);
						if(result.states){
						    
							$.each(result.states, function( index, value ) {
							  html += '<option value="'+value.name+'">'+value.name+'</option>';
							});
							$("#select_state").html(html);
							
						}else{
							$("#select_state").html('<option value="">- not set -</option>');
						}
					}
				});
			}else{
				$("#select_state").html('<option value="">- not set -</option>');
			}
		});
		$("#select_role").change(function(){
			//var country = $(this).attr('data-country_id');
			
			$('#signupForm').hide();
			var role = $(this).val();
			var html = '';
			//alert("country "+country);
			
			if(role!=""){
				if(role=='model'){
					$("#select_account_type").html('<option value="model">Independent</option>');
					$("#select_advertising_category").html('<option value="bdsm" data-account_class="model">BDSM</option><option value="escort" data-account_class="model">Escort</option><option value="strip_dance" data-account_class="model">Strip/Dance</option><option value="body_rub" data-account_class="model">Body Rub</option>');
					$('#signupForm').show();
				}else if(role=='establishment'){
					$("#select_account_type").html('<option value="">- not set -</option><option value="brothel" data-account_class="establishment">Brothel</option><option value="establishment" data-account_class="establishment">Establishment</option><option value="parlour" data-account_class="establishment">Parlour</option><option value="strip_club" data-account_class="establishment">Strip Club</option>');
					$("#select_advertising_category").html('<option value="">- not set -</option>');
				}else if(role=='agency'){
					$("#select_account_type").html('<option value="">- not set -</option><option value="strip_agency" data-account_class="agency">Strip Agency</option><option value="escort_agency" data-account_class="agency">Escort Agency</option>');
					$("#select_advertising_category").html('<option value="">- not set -</option>');
				}
			}else{
				$("#select_account_type").html('<option value="">- not set -</option>');
			}
		});
		
		$("#select_account_type").change(function(){
			//var country = $(this).attr('data-country_id');
			
			$('#signupForm').show();
			var type = $(this).val();
			var html = '';
			//alert("country "+country);
			
			if(type!=""){
				if(type=='brothel'){
					$("#select_advertising_category").html('<option value="bdsm" data-account_class="establishment">BDSM</option><option value="escort" data-account_class="establishment">Escort</option><option value="strip_dance" data-account_class="establishment">Strip/Dance</option><option value="body_rub" data-account_class="establishment">Body Rub</option>');
				}
				else if(type=='escort_agency'){
					$("#select_advertising_category").html('<option value="bdsm" data-account_class="agency">BDSM</option><option value="escort" data-account_class="agency">Escort</option><option value="strip_dance" data-account_class="agency">Strip/Dance</option><option value="body_rub" data-account_class="agency">Body Rub</option>');
				}else if(type=='establishment'){
					$("#select_advertising_category").html('<option value="bdsm" data-account_class="establishment">BDSM</option><option value="escort" data-account_class="establishment">Escort</option><option value="strip_dance" data-account_class="establishment">Strip/Dance</option><option value="body_rub" data-account_class="establishment">Body Rub</option><option value="paid_dating" data-account_class="establishment">Paid Dating</option>');
				}else if(type=='parlour' || type=='strip_club'){
					$("#select_advertising_category").html('<option value="body_rub" data-account_class="establishment">Body Rub</option>');
				}else if(type=='strip_agency'){
					$("#select_advertising_category").html('<option value="strip_dance" data-account_class="agency">Strip/Dance</option>');
				}
			}else{
				$("#select_advertising_category").html('<option value="">- not set -</option>');
			}
		});
    </script>
@endsection