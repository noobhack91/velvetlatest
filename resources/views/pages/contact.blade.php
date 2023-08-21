@extends('pages.master')

@section('content')




<section class=" section_padding_70">
    <div class="container">
        <div class="row">

            <div>
                <h2 class="big margin_0">Contact Us</h2> <br>

                <div class=" topmargin_5 ">

                    <p> Private Advertisers can access the most recent packages and launch construction here.</p>
                    <p>Here, models and modeling agency advertisers can begin building.</p>

                    <p>Velvetklub operates as a non-escort agency, solely dedicated to offering an up-to-date and credible resource. Our focus is on maintaining a current and reliable directory featuring private escorts, brothels, parlors, strip clubs, and escort agencies in Australia.</p>
                    <p><b>Phone support & Photo Verification - Monday - Friday - 9 am till 5.30 pm  EST</b></p>
                    Please contact Us At <p>admin@velvetklub.com</p> or use the form below 
                    <p><b>After Hours & Sunday </b></p>
                    <p>Please email or SMS the After-Hours Team for assistance</p>
                    <p>Escort Reviews for good and bad can be submitted using the contact form below.</p>
                    <p><b>Business Contact</b></p>
                    <p>For Listings needs please contact:</p>
                    <p>Amber Rose </p>

                    <p>For general email inquiries:</p>
                    <p>Email: <b>admin@velvetklub.com</b></p>




                </div>
            </div>




            <div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6 text-center">




                <h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Contact Form</h2>

                <form class="contact-form row" method="post" action="{{url('contact/mail/')}}">
                    @csrf
                    @method('POST')
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name" class="sr-only">Full Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" required class="form-control with-icon" placeholder="Name">
                            <i class="rt-icon2-user"></i>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with-icon" placeholder="Email Address" required>
                            <i class="rt-icon2-mail"></i>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="sr-only">Phone number
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control with-icon" placeholder="Phone Number" required>
                            <i class="rt-icon2-phone5"></i>
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control with-icon" required placeholder="Message"></textarea>
                            <i class="rt-icon2-pen"></i>
                        </div>

                        <button type="submit" id="" name="contact_submit" class="theme_button color1 bottommargin_0">Send</button>
                        <button type="reset" id="contact_form_clear" name="contact_clear" class="theme_button inverse bottommargin_0">Clear</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
