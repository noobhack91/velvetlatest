@extends('backend_layout.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	<section class="profile-sec">
	<div class="container">
		<div class="profile-form">
			<!-- multistep form -->
			<form id="regForm" method="POST" enctype="multipart/form-data" action="{{url('model/createmodel')}}" class="my-multistep-form">
				<!-- Circles which indicates the steps of the form: -->
				{{csrf_field()}}

				<div style="text-align:center;margin-ottom:40px;" class="steps">
					<p>Steps: </p>
					<span class="step"> Profile details</span>
					<span class="step">Profile text</span>
					<span class="step">Photos</span>
					<span class="step">Base location</span>
					<span class="step">Availability</span>
					<span class="step">Membership</span>


				</div>

				<!-- One "tab" for each step in the form: -->
				<div class="tab">
					<div class="profile-details">
						<h3>Profile details</h3>
						<p>These are required for your profile to display.</p>

                        <!-- <input type="file" name="check"> -->
						<!-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
				<p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> -->
						<div class="row">
							<div class="col-sm-6">
								<!-- Gender -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="Gender" class="control-label editing-form-label"
											oninput="this.className = 'tab'" name="gender">Gender</label>
									</div>

									<div class="editing-form-value-cell">
										<select name="gender" id="gender" class="form-control">
											<option value="">- not set -</option>
											<option value="female" <?php if(isset($modeldata->gender)) { echo $modeldata->gender == "female" ? 'selected' : ''; } ?>>Female</option>
											<option value="male" <?php if(isset($modeldata->gender)) { echo $modeldata->gender == "male" ? 'selected' : ''; } ?>>Male</option>
											<option value="transexual_transgender" <?php if(isset($modeldata->gender)) { echo $modeldata->gender == "transexual_transgender" ? 'selected' : ''; } ?>>Transexual/Transgender</option>
										</select>
										<span id="ctl01" class="form-control-error" style="display:none;"
											oninput="this.className = ''" name="">Please select your gender.</span>
									</div>
								</div>
								<!-- Sexuality -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="Sexuality" class="control-label editing-form-label">Sexuality</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="sexuality" id="sexuality" class="form-control sexuality">
											<option value="">- not set -</option>
											<option value="heterosexual" <?php if(isset($modeldata->sexuality)) { echo $modeldata->sexuality == "heterosexual" ? 'selected' : ''; } ?>>Heterosexual</option>
											<option value="bisexual" <?php if(isset($modeldata->sexuality)) { echo $modeldata->sexuality == "bisexual" ? 'selected' : ''; } ?>>Bisexual</option>
											<option value="gay" <?php if(isset($modeldata->sexuality)) { echo $modeldata->sexuality == "gay" ? 'selected' : ''; } ?>>Gay</option>
											<option value="lesbian" <?php if(isset($modeldata->sexuality)) { echo $modeldata->sexuality == "lesbian" ? 'selected' : ''; } ?>>Lesbian</option>
										</select>
										<span id="ctl03" class="form-control-error" style="display:none;">Please select your
											sexuality.</span>
									</div>
								</div>

								<!-- Age -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="drpAge" class="control-label editing-form-label">Age</label>
									</div>
									<div class="editing-form-value-cell">

										<span id="valDropdownAge" class="form-control-error"
											style="display:none;">Please select your
											age.</span>

										<input name="age" type="text" id="age" class="form-control" value="{{ isset($modeldata->age) && !empty($modeldata->age) ? $modeldata->age : '' }}">
										<span id="Age" class="form-control-error" style="display:none;">Please enter
											your exact
											age.</span>
										<span id="valReqAge" class="form-control-error" style="display:none;">Please
											enter your exact
											age.</span>

										<!-- <div class="checkbox">
											<input id="chkShowRealAge" type="checkbox" name="checkrealage"><label
												for="_chkShowRealAge">Show my real age</label>
										</div> -->
									</div>
								</div>

								<div class="landline">
									<div id="LandlineNumber" class="form-group">
										<div class="editing-form-label-cell">
											<label for="txtLandlineNumber"
												class="control-label editing-form-label">Landline number</label>
										</div>
										<div class="editing-form-value-cell">
											<input name="landlinenumber" value="{{ isset($modeldata->landline_number) && !empty($modeldata->landline_number) ? $modeldata->landline_number : '' }}" type="text" id="landlinenumber"
												class="form-control" autocomplete="off">
											<span id="valLandlineNumber" class="error" style="display:none;">Please
												enter a valid number
												(only digits, spaces and hyphens)</span>
											<div class="checkbox">
												<input id="displaylandlinenumber" <?php if(isset($modeldata->display_landline_number_public	)) { echo $modeldata->display_landline_number_public == "on" ? 'checked' : ''; } ?> type="checkbox"
													name="displaylandlinenumber"><label for="displaylandlinenumber">
													Display landline number to public</label>
											</div>
										</div>
									</div>
								</div>

								<div class="email">
									<div class="form-group">
										<div class="editing-form-label-cell">
											<label for="_lblEmail" class="control-label editing-form-label">Email
												Address</label>
										</div>
										<div class="editing-form-value-cell">
											<span id="_lblEmail"
												class="form-control-static">{{ Auth::user()->email}}</span>
											<div class="help-block checkbox">
												<p>
													Your e-mail address is never shown publicly.
												</p>
												<input id="display_contect_form" type="checkbox"
													name="display_contect_form"><label
													for="display_contect_form">Display a contact form on my
													profile</label>
											</div>
										</div>
									</div>
								</div>
								<div class="website">
									<div class="form-group">
										<div class="editing-form-label-cell">
											<label for="_elemAdvertiserValidatdWeebAddress"
												class="control-label editing-form-label">Website</label>
										</div>
										<div class="editing-form-value-cell">
											<input name="website" type="text" id="website" class="form-control" value="{{ isset($modeldata->website) && !empty($modeldata->website) ? $modeldata->website : '' }}">
											<p class="help-block">If you have a personal website, company website or
												social media page,
												enter full URL here to display link on your EB profiles.</p>
										</div>
									</div>
								</div>

								<div class="social-media-form">
									<div class="form-group">
										<div class="editing-form-label-cell">
											<label for="elemAdvertiserValidatedWebAddress2"
												class="control-label editing-form-label">Social
												media</label>
										</div>
										<div class="editing-form-value-cell">
											<input name="social_website" type="text"
												id="social_website" class="form-control" value="{{ isset($modeldata->social_media) && !empty($modeldata->social_media) ? $modeldata->social_media : '' }}">
											<p class="help-block">If you have a personal website, company website or
												social media page,
												enter full URL here to display link on your VK profiles.</p>
										</div>
									</div>
								</div>
								<div class="contact-methods">
									<div class="form-group">
										<div class="editing-form-label-cell">
											<label for="_chkPhoneCalls"
												class="control-label editing-form-label">Preferred Contact
												Methods</label>
										</div>
										<div class="editing-form-value-cell checkbox">
											<input id="preferred_contact_method" <?php if(isset($modeldata->preferred_contact_methods)) { echo $modeldata->preferred_contact_methods == "on" ? 'checked' : ''; } ?>  type="radio" name="preferred_contact_method"><label
												for="preferred_contact_method">Phone Calls</label>
											<input id="preferred_contact_method"  <?php if(isset($modeldata->preferred_contact_methods)) { echo $modeldata->preferred_contact_methods == "on" ? 'checked' : ''; } ?> type="radio" name="preferred_contact_method"><label
												for="preferred_contact_method">SMS
												Messages</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="profile-details-optional">
						<h3>Profile details <span style="color:grey">(optional)</span></h3>
						<p>Customers can search for you by some of these fields.</p>

						<div class="row">
							<!-- <div class="col-md-6"> -->
							<div class="col-md-6">

								<!-- Height -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_txtHeight" class="control-label editing-form-label">Height
											(cm)</label>
									</div>
									<div class="editing-form-value-cell">
										<input name="height" type="text" value="{{ isset($modeldata->height) && !empty($modeldata->height) ? $modeldata->height : '' }}" id="height" class="form-control">
									</div>
								</div>

								<!-- Hair Colour -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="hair" class="control-label editing-form-label">Hair
											Colour</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="hair_color" id="hair_color" class="form-control">
											<option value="">- not set -</option>
											<option value="auburn" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "auburn" ? 'selected' : ''; } ?>>Auburn</option>
											<option value="black" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "black" ? 'selected' : ''; } ?>>Black</option>
											<option value="blonde" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "blonde" ? 'selected' : ''; } ?>>Blonde</option>
											<option value="brown" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "brown" ? 'selected' : ''; } ?>>Brown</option>
											<option value="brunette" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "brunette" ? 'selected' : ''; } ?>>Brunette</option>
											<option value="burgundy" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "burgundy" ? 'selected' : ''; } ?>>Burgundy</option>
											<option value="dark" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "dark" ? 'selected' : ''; } ?>>Dark</option>
											<option value="ginger" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "ginger" ? 'selected' : ''; } ?>>Ginger</option>
											<option value="red" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "red" ? 'selected' : ''; } ?>>Red</option>
											<option value="other" <?php if(isset($modeldata->hair_color)) { echo $modeldata->hair_color == "other" ? 'selected' : ''; } ?>>Other</option>

										</select>
									</div>
								</div>

								<!-- Hair Style -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpHairStyle" class="control-label editing-form-label">Hair
											Style</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="hair_style" id="hair_style" class="form-control">
											<option selected="selected" value="">- not set -</option>
											<option value="long" <?php if(isset($modeldata->hair_style)) { echo $modeldata->hair_style == "long" ? 'selected' : ''; } ?>>Long</option>
											<option value="short" <?php if(isset($modeldata->hair_style)) { echo $modeldata->hair_style == "short" ? 'selected' : ''; } ?>>Short</option>
											<option value="shaved" <?php if(isset($modeldata->hair_style)) { echo $modeldata->hair_style == "shaved" ? 'selected' : ''; } ?>>Shaved</option>
											<option value="straight" <?php if(isset($modeldata->hair_style)) { echo $modeldata->hair_style == "straight" ? 'selected' : ''; } ?>>Straight</option>
											<option value="curly" <?php if(isset($modeldata->hair_style)) { echo $modeldata->hair_style == "curly" ? 'selected' : ''; } ?>>Curly</option>

										</select>
									</div>
								</div>

								<!-- Eye Colour -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpEyeColour" class="control-label editing-form-label">Eye
											Colour</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="eye_color" id="eye_color" class="form-control">
											<option selected="selected" value="">- not set -</option>
											<option value="blue">Blue</option>
											<option value="brown">Brown</option>
											<option value="green">Green</option>
											<option value="hazel">Hazel</option>
											<option value="grey">Grey</option>
											<option value="amber">Amber</option>
											<option value="red">Red</option>
											<option value="black">Black</option>

										</select>
									</div>
								</div>

								<!-- Body Type -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpBodyType" class="control-label editing-form-label">Body
											Type</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="body_type" id="body_type" class="form-control">
											<option value="">- not set -</option>
											<option value="athletic">Athletic</option>
											<option value="average">Average</option>
											<option value="bbw">BBW</option>
											<option value="cuddly">Cuddly</option>
											<option value="curvaceous">Curvaceous</option>
											<option value="curvey">Curvey</option>
											<option value="full_figured">Full Figured</option>
											<option value="hour_glass">Hour Glass</option>
											<option value="muscular">Muscular/Cut</option>
											<option value="petite">Petite</option>
											<option value="petite_slim">Petite/Slim</option>
											<option value="slim">Slim</option>
											<option value="toned">Toned</option>
											<option value="voluptuous">Voluptuous</option>

										</select>
									</div>
								</div>
							</div>

							<div class="col-md-6">

								<!-- Bust Size -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpHairColour" class="control-label editing-form-label">Bust
											Size</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="bust_size" id="bust_size" class="form-control">
											<option value="">- not set -</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>



								<!-- Dress Size -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpHairStyle" class="control-label editing-form-label">Dress
											Size</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="dress_size" id="dress_size" class="form-control">
											<option selected="selected" value="">- not set -</option>
											<option value="Long">1</option>
											<option value="Short">2</option>
											<option value="Shaved">3</option>
											<option value="Straight">4</option>
											<option value="Curly">5</option>

										</select>
									</div>
								</div>
								<!-- Ethnicity -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpHairColour"
											class="control-label editing-form-label">Ethnicity</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="ethnicity" id="ethnicity" class="form-control">
											<option value="">- not set -</option>
											<option value="auburn">Auburn</option>
											<option value="black">Black</option>
											<option value="blonde">Blonde</option>
											<option value="brown">Brown</option>
											<option value="brunette">Brunette</option>
											<option value="burgundy">Burgundy</option>
											<option value="dark">Dark</option>
											<option value="ginger">Ginger</option>
											<option value="red">Red</option>
											<option value="other">Other</option>
										</select>
									</div>
								</div>
								<!-- Spoken Languages -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpEyeColour" class="control-label editing-form-label">Spoken
											Languages</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="spoken_language" id="spoken_language" class="form-control">
											<option selected="selected" value=""><i>Select Here</i></option>
											<option value="hindi">Hindi</option>
											<option value="english">English</option>
											<option value="japaneese">Japaneese</option>
											<option value="other">Other</option>


										</select>
									</div>
								</div>

								<!-- Escort For -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpBodyType" class="control-label editing-form-label">Escort
											For</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="escort_for" id="escort_for" class="form-control">
											<option value=""><i>Select Here</i></option>
											<option value="athletic">Athletic</option>
											<option value="average">Average</option>
											<option value="bBW">BBW</option>
											<option value="cuddly">Cuddly</option>
											<option value="curvaceous">Curvaceous</option>
											<option value="curvey">Curvey</option>
											<option value="full_Figured">Full Figured</option>
											<option value="hour Glass">Hour Glass</option>
											<option value="muscular">Muscular/Cut</option>
											<option value="petite">Petite</option>
											<option value="petite">Petite/Slim</option>
											<option value="slim">Slim</option>
											<option value="toned">Toned</option>
											<option value="voluptuous">Voluptuous</option>

										</select>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="private-things">
						<p>Things I prefer in Private</p>
						<div class="row">
							<div class="col-md-4">
								<div class="checkbox">
									<input id="affectionate_cuddling" type="checkbox" name="affectionate_cuddling"><label
										for="affectionate_cuddling">Affectionate cuddling</label>
								</div>
								<div class="checkbox">
									<input id="anal_play_on_me" type="checkbox" name="anal_play_on_me"><label
										for="anal_play_on_me">Anal
										play-On me</label>
								</div>
								<div class="checkbox">
									<input id="bd" type="checkbox" name="b_d"><label
										for="_chkShowRealAge">B &
										D</label>
								</div>
								<div class="checkbox">
									<input id="bi_twin" type="checkbox" name="bi_twin"><label
										for="bi_twin">Bi twin (double)</label>
								</div>
								<div class="checkbox">
									<input id="bondage" type="checkbox" name="bondage"><label
										for="bondage">Bondage</label>
								</div>
								<div class="checkbox">
									<input id="cbj" type="checkbox" name="cbj"><label
										for="cbj">CBJ</label>
								</div>
								<div class="checkbox">
									<input id="cim" type="checkbox" name="cim"><label
										for="cim">CIM</label>
								</div>
								<div class="checkbox">
									<input id="cof" type="checkbox" name="cof"><label
										for="cof">COF</label>
								</div>
								<div class="checkbox">
									<input id="couple" type="checkbox" name="couples"><label
										for="_chkShowRealAge">Couples</label>
								</div>
								<div class="checkbox">
									<input id="chkShowRealAge" type="checkbox" name="dfk"><label
										for="dfk">DFK</label>
								</div>
								<div class="checkbox">
									<input id="dp" type="checkbox" name="dp"><label
										for="dp">DP</label>
								</div>
								<div class="checkbox">
									<input id="facial" type="checkbox" name="facial"><label
										for="facial">Facial</label>
								</div>
								<div class="checkbox">
									<input id="filming" type="checkbox" name="filming"><label
										for="filming">Filming</label>
								</div>
								<div class="checkbox">
									<input id="fk" type="checkbox" name="fk"><label
										for="_chkShowRealAge">FK</label>
								</div>
								<div class="checkbox">
									<input id="gagging" type="checkbox" name="gagging"><label
										for="_chkShowRealAge">Gagging</label>
								</div>
								<div class="checkbox">
									<input id="gs" type="checkbox" name="gs"><label
										for="gs">GS</label>
								</div>
								<div class="checkbox">
									<input id="happy_ending" type="checkbox" name="happy_ending"><label
										for="happy_ending">Happy
										ending</label>
								</div>
								<div class="checkbox">
									<input id="kissing" type="checkbox" name="kissing"><label
										for="kissing">Kissing</label>
								</div>
								<div class="checkbox">
									<input id="lk" type="checkbox" name="lk"><label
										for="lk">LK</label>
								</div>
								<div class="checkbox">
									<input id="masturbation" type="checkbox" name="masturbation"><label
										for="masturbation">Masturbation</label>
								</div>
								<div class="checkbox">
									<input id="mmf" type="checkbox" name="mmf"><label
										for="mmf">MMF</label>
								</div>
								<div class="checkbox">
									<input id="mutual_french" type="checkbox" name="mutual_french"><label
										for="mutual_french">Mutual
										French (oral)</label>
								</div>
								<div class="checkbox">
									<input id="nurse" type="checkbox" name="nurse"><label
										for="nurse">Nurse</label>
								</div>
								<div class="checkbox">
									<input id="photography" type="checkbox" name="photography"><label
										for="photography">Photography</label>
								</div>
								<div class="checkbox">
									<input id="PSE" type="checkbox" name="pse"><label
										for="pse">PSE</label>
								</div>
								<div class="checkbox">
									<input id="rimming_on_me" type="checkbox" name="rimming_on_me"><label
										for="rimming_on_me">Rimming
										- On me</label>
								</div>
								<div class="checkbox">
									<input id="school_girl" type="checkbox" name="school_girl"><label
										for="school_girl">School
										girl</label>
								</div>
								<div class="checkbox">
									<input id="sexy_lingerie" type="checkbox" name="sexy_lingerie"><label
										for="sexy_lingerie">Sexy
										lingerie</label>
								</div>
								<div class="checkbox">
									<input id="social_escort" type="checkbox" name="social_escort"><label
										for="social_escort">Social
										escort</label>
								</div>
								<div class="checkbox">
									<input id="spanking_on_you" type="checkbox" name="spanking_on_you"><label
										for="spanking_on_you">Spanking - On you</label>
								</div>
								<div class="checkbox">
									<input id="strap_on_me" type="checkbox" name="strap_on_me"><label
										for="_chkShowRealAge">Strap
										on - on me</label>
								</div>
								<div class="checkbox">
									<input id="tea_bagging" type="checkbox" name="tea_bagging"><label
										for="tea_bagging">Tea
										bagging</label>
								</div>
								<div class="checkbox">
									<input id="dirty_talk" type="checkbox" name="dirty_talk"><label
										for="_chkShowRealAge">Dirty
										Talk</label>
								</div>
								<div class="checkbox">
									<input id="overnigth" type="checkbox" name="overnigth"><label
										for="overnigth">Overnight</label>
								</div>
								<div class="checkbox">
									<input id="toys" type="checkbox" name="toys"><label
										for="toys">Toys</label>
								</div>
								<div class="checkbox">
									<input id="full_service" type="checkbox" name="full_service"><label
										for="full_service">Full
										Service</label>
								</div>
								<div class="checkbox">
									<input id="toys" type="checkbox" name="toys"><label
										for="toys">Toys</label>
								</div>
								<div class="checkbox">
									<input id="electrode_play" type="checkbox" name="electrode_play"><label
										for="electrode_play">Electrode Play</label>
								</div>
								<div class="checkbox">
									<input id="cross_dressing" type="checkbox" name="cross_dressing"><label
										for="cross_dressing">Cross
										Dressing</label>
								</div>
								<div class="checkbox">
									<input id="boot_worship" type="checkbox" name="boot_worship"><label
										for="boot_worship">Boot
										Worship</label>
								</div>
								<div class="checkbox">
									<input id="needle_play" type="checkbox" name="needle_play"><label
										for="needle_play">Needle
										Play</label>
								</div>
								<div class="checkbox">
									<input id="intimidation" type="checkbox" name="intimidation"><label
										for="intimidation">Intimidation on You</label>
								</div>
								<div class="checkbox">
									<input id="ffm" type="checkbox" name="ffm"><label
										for="ffm">FFM</label>
								</div>
							</div>



							<div class="col-md-4">
								<div class="checkbox">
									<input id="affectionate_kissing" type="checkbox" name="affectionate_kissing"><label
										for="affectionate_kissing">Affectionate Kissing</label>
								</div>
								<div class="checkbox">
									<input id="anal_play" type="checkbox" name="anal_play"><label
										for="anal_play">Anal
										play - On you</label>
								</div>
								<div class="checkbox">
									<input id="bbbj" type="checkbox" name="bbbj"><label
										for="bbbj">BBBJ</label>
								</div>
								<div class="checkbox">
									<input id="bj" type="checkbox" name="bj"><label
										for="bj">BJ</label>
								</div>
								<div class="checkbox">
									<input id="brazilian" type="checkbox" name="brazilian"><label
										for="brazilian">Brazilian</label>
								</div>
								<div class="checkbox">
									<input id="cbt" type="checkbox" name="cbt"><label
										for="cbt">CBT</label>
								</div>
								<div class="checkbox">
									<input id="cimws" type="checkbox" name="cimws"><label
										for="cimws">CIMWS</label>
								</div>
								<div class="checkbox">
									<input id="costumes" type="checkbox" name="costumes"><label
										for="costumes">Costumes</label>
								</div>
								<div class="checkbox">
									<input id="daty" type="checkbox" name="daty"><label
										for="daty">DATY</label>
								</div>
								<div class="checkbox">
									<input id="dinner_companion" type="checkbox" name="dinner_companion"><label
										for="dinner_companion">Dinner
										companion</label>
								</div>
								<div class="checkbox">
									<input id=dt" type="checkbox" name="dt"><label
										for="dt">DT</label>
								</div>
								<div class="checkbox">
									<input id="fe" type="checkbox" name="fe"><label
										for="fe">FE</label>
								</div>
								<div class="checkbox">
									<input id="fire" type="checkbox" name="fire"><label
										for="fire">Fire
										and ice - hot and cold BJ</label>
								</div>
								<div class="checkbox">
									<input id="foot" type="checkbox" name="foot_fetish"><label
										for="_chkShowRealAge">Foot
										Fetish</label>
								</div>
								<div class="checkbox">
									<input id="foot" type="checkbox" name="gfe">
									<label>GFE</label>
								</div>
								<div class="checkbox">
									<input id="gs_one" type="checkbox" name="gs_one"><label
										for="gs_one">GS -
										On
										me</label>
								</div>
								<div class="checkbox">
									<input id="hj" type="checkbox" name="hj"><label
										for="hj">HJ</label>
								</div>
								<div class="checkbox">
									<input id="light_bondage" type="checkbox" name="light_bondage"><label
										for="light_bondage">Light
										bondage</label>
								</div>
								<div class="checkbox">
									<input id="maid" type="checkbox" name="maid"><label
										for="maid">Maid</label>
								</div>
								<div class="checkbox">
									<input id="mff" type="checkbox" name="mff"><label
										for="mff">MFF</label>
								</div>
								<div class="checkbox">
									<input id="msog" type="checkbox" name="msog"><label
										for="msog">MSOG</label>
								</div>
								<div class="checkbox">
									<input id="mutual_nutural_oral" type="checkbox" name="mutual_nutural_oral"><label
										for="mutual_nutural_oral">Mutual
										natural oral</label>
								</div>
								<div class="checkbox">
									<input id="overnight_stays" type="checkbox" name="overnight_stays"><label
										for="overnight_stays">Overnight stays</label>
								</div>
								<div class="checkbox">
									<input id="police_woman" type="checkbox" name="police_woman"><label
										for="police_woman">Police
										woman</label>
								</div>
								<div class="checkbox">
									<input id="pse_filming" type="checkbox" name="pse_filming"><label
										for="_chkShowRealAge">PSE -
										With filming</label>
								</div>
								<div class="checkbox">
									<input id="rimming" type="checkbox" name="rimming"><label
										for="rimming">Rimming
										- On you</label>
								</div>
								<div class="checkbox">
									<input id="secretary" type="checkbox" name="secretary"><label
										for="secretary">Secretary</label>
								</div>
								<div class="checkbox">
									<input id="sexy" type="checkbox" name="sexy"><label
										for="sexy">Sexy
										shower for 2</label>
								</div>
								<div class="checkbox">
									<input id="spanish" type="checkbox" name="spanish"><label
										for="spanish">Spanish</label>
								</div>
								<div class="checkbox">
									<input id="squirting" type="checkbox" name="squirting"><label
										for="Squirting">Squirting</label>
								</div>
								<div class="checkbox">
									<input id="strap" type="checkbox" name="strap"><label
										for="_chkShowRealAge">Strap
										on - On you</label>
								</div>
								<div class="checkbox">
									<input id="tromboning" type="checkbox" name="tromboning"><label
										for="tromboning">Tromboning</label>
								</div>
								<div class="checkbox">
									<input id="full_body_massage" type="checkbox" name="full_body_massage"><label
										for="full_body_massage">Full
										Body Massage</label>
								</div>
								<div class="checkbox">
									<input id="passionate_kissing" type="checkbox" name="passionate_kissing"><label
										for="passionate_kissing">Passionate Kissing</label>
								</div>
								<div class="checkbox">
									<input id="escort" type="checkbox" name="escort"><label
										for="escort">Escort</label>
								</div>
								<div class="checkbox">
									<input id="lactating" type="checkbox" name="lactating"><label
										for="lactating">Lactating</label>
								</div>
								<div class="checkbox">
									<input id="nipple_manipulation" type="checkbox" name="nipple_manipulation"><label
										for="nipple_manipulation">Nipple
										Manipulation</label>
								</div>
								<div class="checkbox">
									<input id="caning" type="checkbox" name="caning"><label
										for="caning">Caning</label>
								</div>
								<div class="checkbox">
									<input id="latex" type="checkbox" name="latex"><label
										for="latex">Latex
										/
										Leather Worship</label>
								</div>
								<div class="checkbox">
									<input id="ball_busting" type="checkbox" name="ball_busting"><label
										for="ball_busting">Ball
										Busting</label>
								</div>
								<div class="checkbox">
									<input id="submissive" type="checkbox" name="submissive"><label
										for="submissive">Submissive</label>
								</div>
								<div class="checkbox">
									<input id="brown_showers" type="checkbox" name="brown_showers"><label
										for="brown_showers">Brown
										Showers</label>
								</div>
							</div>

							<div class="col-md-4">
								<div class="checkbox">
									<input id="anal_play" type="checkbox" name="anal_play"><label
										for="anal_play">Anal
										play</label>
								</div>
								<div class="checkbox">
									<input id="atm" type="checkbox" name="atm"><label
										for="atm">ATM</label>
								</div>
								<div class="checkbox">
									<input id="bdsm" type="checkbox" name="bdsm"><label
										for="bdsm">BDSM</label>
								</div>
								<div class="checkbox">
									<input id="bls" type="checkbox" name="bls"><label
										for="bls">BLS</label>
								</div>
								<div class="checkbox">
									<input id="body" type="checkbox" name="body_slide"><label
										for="body">Body
										Slide</label>
								</div>
								<div class="checkbox">
									<input id="cd" type="checkbox" name="cd"><label
										for="cd">CD</label>
								</div>
								<div class="checkbox">
									<input id="cob" type="checkbox" name="cob"><label
										for="cob">COB</label>
								</div>
								<div class="checkbox">
									<input id="costume" type="checkbox" name="costumes_and_role_play"><label
										for="costume">Costumes and role play</label>
								</div>
								<div class="checkbox">
									<input id="ddp" type="checkbox" name="ddp"><label
										for="ddp">DDP</label>
								</div>
								<div class="checkbox">
									<input id="doggy" type="checkbox" name="doggy_style"><label
										for="doggy">Doggy
										style</label>
								</div>
								<div class="checkbox">
									<input id="erotic_sansual_massage" type="checkbox" name="erotic_sensual_massage"><label
										for="erotic_sansual_massage">Erotic
										sensual massage</label>
								</div>
								<div class="checkbox">
									<input id="greek" type="checkbox" name="greek"><label
										for="greek">Greek</label>
								</div>
								<div class="checkbox">
									<input id="gs" type="checkbox" name="gs"><label
										for="gs">GS -
										On
										you</label>
								</div>
								<div class="checkbox">
									<input id="italian" type="checkbox" name="italian"><label
										for="italian">Italian</label>
								</div>
								<div class="checkbox">
									<input id="light" type="checkbox" name="light_spanking"><label
										for="light">Light
										spanking</label>
								</div>
								<div class="checkbox">
									<input id="massage" type="checkbox" name="massage"><label
										for="massage">Massage</label>
								</div>
								<div class="checkbox">
									<input id="milf" type="checkbox" name="milf"><label
										for="milf">Milf</label>
								</div>
								<div class="checkbox">
									<input id="multiple_positions" type="checkbox" name="multiple_positions"><label
										for="multiple_positions">Multiple positions</label>
								</div>
								<div class="checkbox">
									<input id="natural_oral" type="checkbox" name="natural_oral"><label
										for="_chkShowRealAge">Natural
										oral</label>
								</div>
								<div class="checkbox">
									<input id="pearl_nacklace" type="checkbox" name="pearl_nacklace"><label
										for="pearl_nacklace">Pearl
										Necklace</label>
								</div>
								<div class="checkbox">
									<input id="prostate_message" type="checkbox" name="prostate_message"><label
										for="prostate_message">Prostate massage</label>
								</div>
								<div class="checkbox">
									<input id="rimming" type="checkbox" name="rimming"><label
										for="rimming">Rimming</label>
								</div>
								<div class="checkbox">
									<input id="role_play" type="checkbox" name="role_play"><label
										for="role_play">Role
										play</label>
								</div>
								<div class="checkbox">
									<input id="sex_toys" type="checkbox" name="sex_toys"><label
										for="sex_toys">Sex
										toys</label>
								</div>
								<div class="checkbox">
									<input id="snowballing" type="checkbox" name="snowballing"><label
										for="snowballing">Snowballing</label>
								</div>
								<div class="checkbox">
									<input id="spanking" type="checkbox" name="spanking"><label
										for="spanking">Spanking - On me</label>
								</div>
								<div class="checkbox">
									<input id="strap" type="checkbox" name="strap"><label
										for="strap">Strap
										on</label>
								</div>
								<div class="checkbox">
									<input id="strip_tease" type="checkbox" name="strip_tease"><label
										for="strip_tease">Strip
										tease</label>
								</div>
								<div class="checkbox">
									<input id="cuddling_touching" type="checkbox" name="cuddling_touching"><label
										for="cuddling_touching">Cuddling and Touching</label>
								</div>
								<div class="checkbox">
									<input id="mutual_masturbation" type="checkbox" name="mutual_masturbation"><label
										for="mutual_masturbation">Mutual
										Masturbation</label>
								</div>
								<div class="checkbox">
									<input id="teasing" type="checkbox" name="teasing"><label
										for="teasing">Teasing</label>
								</div>
								<div class="checkbox">
									<input id="erotic_relaxation" type="checkbox" name="erotic_relaxation"><label
										for="erotic">Erotic
										Relaxation</label>
								</div>
								<div class="checkbox">
									<input id="wax_play" type="checkbox" name="wax_play"><label
										for="wax_play">Wax
										Play</label>
								</div>
								<div class="checkbox">
									<input id="sissy_play" type="checkbox" name="sissy_play"><label
										for="sissy_play">Sissy
										Play</label>
								</div>
								<div class="checkbox">
									<input id="wrestling" type="checkbox" name="wrestling"><label
										for="wrestling">Wrestling</label>
								</div>
								<div class="checkbox">
									<input id="slave" type="checkbox" name="slave"><label
										for="slave">Slave
										/
										Sub play</label>
								</div>
								<div class="checkbox">
									<input id="urethral_play" type="checkbox" name="urethral_play"><label
										for="urethral_play">Urethral Play</label>
								</div>
								<div class="checkbox">
									<input id="relief" type="checkbox" name="relief"><label
										for="relief">Relief</label>
								</div>

							</div>

						</div>
						<p>Some items in this section will not display in Victoria or Queensland</p>

					</div>
				</div>
				<div class="tab">
					<div class="profile-text">
						<h3>Profile Text</h3>
						<p>Note :</p>
						<ul>
							<li>In <b>Victoria and Queensland</b> it is <i><b>illegal</b></i> to describe your
								sexual services.E.G,
								anal, oral, blowjob
								and things like CIM,CBJ,BBBJ and Natural.The term <b>massage</b> is reserved for the
								therapeutic
								industry and
								therefore <i><b>illegal</b></i> to use in adult advertising in these States, even if
								you are
								qualified.</li>
							<li>In<b> Queensland</b> Doubles advertising, in any form is
								<i><b>illegal</b></i>.Police entrapment is
								is legal and practiced.Be careful.
							</li>
							<li>To advertise in <b>Victoria</b> you need a <b>SWA</b> exemption number.E.G.
								SWA12345xe from Business
								Licensing Authority in Victoria.</li>
							<li>You <b>can</b> say what you <i><b>Do Not Do</b></i> .E.G. No anal or No natural.
							</li>
						</ul>

							<div class="profile-text-form-content">
								<div class="sec-title">
									<label for="title" class="title-label">Title:</label>
									<input type="text" class="title-input" name="profile_text">
								</div>
								<div class="description">
									<label for="title" class="title-label">Description:</label>
									<textarea name="content" id="editor"></textarea>
								</div>

								<div class="description">
									<label for="title" class="title-label">My Reviews:</label>
                                    <textarea name="reviews" id="revieweditor"></textarea>
								</div>

							</div>



					</div>
				</div>

				<div class="tab">


					<div class="photos">
                    <!-- <input type='file' name="aaa"> -->
						<h3>Photos :</h3>
						<p>Upload photos below.</p>
						<p><b>Profile Image</b> is the <b>main photo</b> you wish to show.Use the cropping tool to
							make your
							photos look their best for the different thumbnails arround the site.</p>
						<p><b>Gallery Images</b> is for all of your other photos that you would like to visible on
							your
							profile.Photos will be moderated to adhere to State Laws in Queensland and Victoria.</p>
						<p><b>After</b> admin approves your new photos <b>first time,</b>you can Drag and Drop your
							photos on pc
							ans Touch and Hold the Photo on mobile till a menu appears to move your photos from your
							bucket to
							your gallary and Main profile images.Swap the main 24/7!</p>
						<p><b>You can get you photos Verified</b> and increase your results by adding a selfie with
							you holding
							a note with EandB and the date.</p>
						<p>Once approved you can delete images by dragging them back to your Bucket and clicking on
							the bin
							icon.</p>

						<div class="photos-upload-btns">
							<div class="row">
								<div class="col-md-4">
									<h2>Profile Image</h2>

									<div class="form-group">
								<label>Profile Photo:</label>
									<input type="file" name="profile_photo" required>

								</div>
								<div class="form-group">
								<label>Upload Gallary:</label>
									<input type="file" name="gallary[]" multiple>

								</div>


									<!-- Upload  -->
									<!-- <div id="file-upload-form" class="uploader">
										<input id="file-upload" type="file" name="fileUpload" />
										<label for="file-upload" id="file-drag">
											<img id="file-image" src="#" alt="Preview" class="hidden">
											<div id="start">
												<div id="notimage" class="hidden"></div>
											</div>
											<div id="response" class="hidden">
												<div id="messages"></div>
											</div>
										</label>
									</div> -->
                                    <!-- <div class="custom-single-uploads">
                                        <input type='file' name="fileupload" id="readUrl">
                                        <img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;">
                                    </div> -->
                                </div>
								<!-- <div class="col-md-7">
									<h2>Gallary Image</h2>
									<div id="img-upload-form">
										<p>
											<label for="upload_imgs" class="button hollow"></label>
											<input class="show-for-sr" type="file" id="upload_imgs"
												name="gallary_images[]" multiple />
										</p>
										<div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview"
											aria-live="polite"></div>
									</div>

								</div> -->
							</div>
						</div>
					</div>

					<div class="categorisation">
						<div class="categorisation-content">
							<h5>Image Review and Classification</h5>
							<div class="row">
								<div class="col-md-8">
									<div class="categorisation-content-left-img">
										<img src="images/wallpaperflare.jpg">
									</div>
								</div>
								<div class="col-md-4">
									<div class="categorisation-content-right-content">
										<h6>Classify Your Image</h6>
										<div class="categorisation-content-right-checkboxes">
											<p>Please select all that apply.</p>
											<div class="checkboxforcategorisation">
												<input id="clothe_covered" type="checkbox"
													name="clothe_covered">&nbsp;<label
													for="clothe">Clothed or
													Covered</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="nipple_showing" type="checkbox"
													name="nipple_showing">&nbsp;<label
													for="nipple_showing">Nipples
													Showing</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="exposed_anus" type="checkbox"
													name="exposed_anus">&nbsp;<label
													for="exposed_anus">Exposed Anus
													/ Genitals</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="simulated_acts" type="checkbox"
													name="simulated_acts">&nbsp;<label
													for="simulated_acts">Simulated
													Acts</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="logos_branding" type="checkbox"
													name="logos_branding">&nbsp;<label for="logos_branding">Logos
													/
													Branding</label>
											</div>
											<div class="accessories">
												<input id="accessories" type="checkbox"
													name="accessories">&nbsp;<label
													for="accessories">Accessories</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab">
					<div class="profile-text">
						<h3>Base Location</h3>
						<p>Start typing the City or Subrub and choose a Location from the drop down within your
							State/s.</p>
						<p>Set your in-call and/or outcall rates plus Rates Extras for this location then click
							Next/Save for that location.</p>
						<p><b>Extra Locations </b>and <b>Touring dates </b>can be added later.</p>
						<h4 class="set-loaction">Set Location</h4>

						<div class="base-location-form">
							<div class="row">
								<div class="col-md-7">
									<div>
										<div class="form-group row">
											<label for="staticEmail" class="col-sm-2 col-form-label">Suburb</label>
											<div class="col-sm-10 padding-left-right">
												<input class="form-control form-control-lg" name="suburb" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="staticEmail"
												class="col-sm-2 col-form-label">Postcode</label>
											<div class="col-sm-10 padding-left-right">
												<input class="form-control form-control-lg" name="postcode" type="text">

											</div>
										</div>

                                        <div class="base-location-form-state row">
                                            <label for="search-input" class="col-sm-2 col-form-label">Select city:</label>
                                            <div class="editing-form-value-cell">

                                            <select name="selectedCity">
                                                <option>Select City</option>

                                                @foreach($pages as $key=>$city)
                                                <option value="{{$city->page_name}}" <?php if(isset($pages) && !empty($pages->street_address)) { echo $pages->street_address == $city->page_name ? 'selected' : ''; } ?>>{{ $city->page_name}}</option>
                                                    {{-- <option value="{{ $city->page_name }}" >{{ $city->page_name }}</option> --}}
                                                @endforeach
                                            </select>
                                          </div>
                                        </div>
                                        
										<div class="base-location-form-state">
											<div class="form-group row">
												<label for="staticEmail"
													class="col-sm-2 col-form-label">State</label>
												<select name="state">
													<option value="tasmania">Tasmania</option>
												</select>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="set-rates">
							<h4 class="set-loaction">Set Rates</h4>
							<div class="row">
								<div class="col-md-4">
									<div class="set-rates-left-table">
										<table id="customers">
											<tr>
												<th></th>
												<th>In-calls</th>
												<th></th>
												<th>Outcalls</th>
											</tr>
											<tr>
												<td class="td-padding-right">15 mins</td>
												<td><input class="set-rates-input" name="fifteen_min_incall" type="text"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="fifteen_min_outcall" type="text"></td>
											</tr>
											<tr>
												<td class="td-padding-right">30 mins</td>
												<td><input class="set-rates-input" name="thirteen_min_incall" type="text"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="thirteen_min_outcall" type="text"></td>
											</tr>
											<tr>
												<td class="td-padding-right">45 mins</td>
												<td><input class="set-rates-input" name="fourtyfive_min_incall" type="text"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="fourtyfive_min_outcall" type="text"></td>

											</tr>
											<tr>
												<td class="td-padding-right">1 hr</td>
												<td><input class="set-rates-input" name="hour_one_incall" type="text"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="hour_one_outcall" type="text"></td>

											</tr>
											<tr>
												<td class="td-padding-right">1.5 hr</td>
												<td><input class="set-rates-input" name="onehalf_incall" type="text"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="onehalf_outcall" type="text"></td>

											</tr>
											<tr>
												<td class="td-padding-right">2 hrs</td>
												<td><input class="set-rates-input" name="twohour_incall" type="text"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="twohour_outcall" type="text"></td>

											</tr>
											<tr>
												<td class="td-padding-right">3 hrs</td>
												<td><input class="set-rates-input" name="threehour_incall" type="text"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="threehour_call" type="text"></td>

											</tr>

										</table>
									</div>
								</div>
								<div class="col-md-8">
									<div class="set-rates-right-rates-extra">
										<table>
											<tr>
												<th>Rates Extra</th>
											</tr>
										</table>
										<div class="editButtons">
										<textarea name="reviews" id="rateseditor"></textarea>
										</div>
									</div>
								</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab">
				<div class="availability">
					<div class="photos">
						<h3>Availability</h3>
						<p class="availability-first">
							First,select a schedule cycle.Then,uncheck the days you do not work. <br> On the
							days you work,enter the relevant times for that day!
						</p>
						<p>7day schedule will repeat the same week roster.</p>
						<p>14 day schedule will repeat a fortnights set roster.</p>
						<p>28 day schedule to show random availability.</p>
						<p>You can change your availability at any time.</p>
						<div class="timetable-outlook">
							<h5>Timetable Outlook</h5>
							<div>
								  <input type="radio" id="html" name="fav_language" value="HTML">
								  <label for="html">7 day schedule</label><br>
								  <input type="radio" id="css" name="fav_language" value="CSS">
								  <label for="css">14 day schedule</label><br>
								  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
								  <label for="javascript">28 day schedule</label>
							</div>
						</div>
						<div class="availability-legend">
							<h5>Legend</h5>
							<a href="#" class="btn">Indicates Today</a>
						</div>
						<div class="availability-week1">

							<h5>Week 1</h5>
							<table id="customers">

								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_monday" type="checkbox"
													name="availability_monday" value="monday" checked="checked">&nbsp;<label
													for="availability_monday">Monday
												</label>
											</div>
											<!-- <p>13/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="monday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="monday_time_end" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="monday_till_late" type="checkbox"
													name="monday_till_late">&nbsp;<label
													for="monday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="monday_all_day" type="checkbox"
													name="monday_all_day">&nbsp;<label
													for="all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="monday_by_appointment" type="checkbox"
													name="monday_by_appointment">&nbsp;<label for="monday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_tuesday" type="checkbox"
													name="availability_tuesday" checked="checked">&nbsp;<label
													for="availability_tuesday">Tuesday
												</label>
											</div>
											<!-- <p>14/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="tuesday_time_start" type="datetime-local">
											<p>till</p><input name="tuesday_time_end" class="set-rates-input" type="datetime-local" >
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="tuesday_till_late" type="checkbox"
													name="tuesday_till_late">&nbsp;<label
													for="tuesday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="tuesday_all_day" type="checkbox"
													name="tuesday_all_day">&nbsp;<label
													for="tuesday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="tuesday_by_appointment" type="checkbox"
													name="tuesday_by_appointment">&nbsp;<label for="tuesday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg dark-pink">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_wednesday" type="checkbox"
													name="availability_wednesday" checked="checked">&nbsp;<label
													for="availability_wednesday">Wednesday
												</label>
											</div>
											<!-- <p>15/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="wednesday_time_start" type="datetime-local">
											<p>till</p><input name="wednesday_time_start" class="set-rates-input" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="wednesday_till_late" type="checkbox"
													name="wednesday_till_late">&nbsp;<label
													for="wednesday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="wednesday_all_day" type="checkbox"
													name="wednesday_all_day">&nbsp;<label
													for="wednesday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="wednesday_by_appointment" type="checkbox"
													name="wednesday_by_appointment">&nbsp;<label for="wednesday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_thursday" type="checkbox"
													name="availability_thursday" checked="checked">&nbsp;<label
													for="availability_thursday">Thursday
												</label>
											</div>
											<!-- <p>16/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="thursday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="thursday_time_start" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="thuresday_till_late" type="checkbox"
													name="thuresday_till_late">&nbsp;<label
													for="thuresday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="thuresday_all_day" type="checkbox"
													name="thuresday_all_day">&nbsp;<label
													for="thuresday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="thuresday_by_appointment" type="checkbox"
													name="thuresday_by_appointment">&nbsp;<label for="thuresday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_friday" type="checkbox"
													name="availability_friday" checked="checked">&nbsp;<label
													for="availability_friday">Friday
												</label>
											</div>
											<p>17/02/2023</p>
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="friday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="friday_time_end" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="friday_till_late" type="checkbox"
													name="friday_till_late">&nbsp;<label
													for="friday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="friday_all_day" type="checkbox"
													name="friday_all_day">&nbsp;<label
													for="friday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="friday_by_appointment" type="checkbox"
													name="friday_by_appointment">&nbsp;<label for="friday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_saturday" type="checkbox"
													name="availability_saturday" checked="checked">&nbsp;<label
													for="availability_saturday">Saturday
												</label>
											</div>
											<!-- <p>18/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="saturday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="saturday_time_start" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="saturday_till_late" type="checkbox"
													name="saturday_till_late">&nbsp;<label
													for="saturday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="saturday_all_day" type="checkbox"
													name="saturday_all_day">&nbsp;<label
													for="saturday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="saturday_by_appointment" type="checkbox"
													name="saturday_by_appointment">&nbsp;<label for="saturday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_sunday" type="checkbox"
													name="availability_sunday" checked="checked">&nbsp;<label
													for="availability_sunday">Sunday
												</label>
											</div>
											<!-- <p>19/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="sunday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="sunday_time_start" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="sunday_till_late" type="checkbox"
													name="sunday_till_late">&nbsp;<label
													for="sunday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="sunday_all_day" type="checkbox"
													name="sunday_all_day">&nbsp;<label
													for="sunday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="sunday_by_appointment" type="checkbox"
													name="sunday_by_appointment">&nbsp;<label for="sunday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>

							</table>

						</div>
					</div>
				</div>
				<div class="independent-packages">
					<h3>Independent Packages</h3>
					<div class="independent-packages-content">
						<p>All independent packages have 24/7 access to our <b>'Ugly Mugs' database.</b></p>
						<p>the ability to <b>Show/Hide your profile</b> at any time. Great for when you are
							taking a break.</p>
						<p>Note:If you <b>purchase multiple account periods</b> for any featured package in one
							checkout, your featured ad will be <b>automatically boost</b> to the top at the
							start of each new account period cycle.</p>
						<p>Last updated:01:02:2023</p>
						<a href="#">Download independent packages image</a>
					</div>
				</div>
			</div>





				<!-- base location tab starts from here -->




				<!-- Profile text html starts from here -->



		<div style="overflow:auto;" class="my-mt-buttons">
			<div style="float:right;">
				<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
				<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
			</div>
		</div>
		</form>
	</div>
	</div>
	</section>

	</div>

	</section>

  @endsection

@section('custom_css')
<style>
/**************23-02-2023******************/

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
    display: none;
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
    width: 70%;
    padding-left: 15px;
    padding-right: 15px;
}

.editing-form-label-cell {
    text-align: right;
    width: 30%;
    padding-right: 10px;
    padding-top: 6px;
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
.editButtons textarea {
    width: 100%;
    border: none;
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
<!-- <script>
        var imgUpload = document.getElementById('upload_imgs')
            , imgPreview = document.getElementById('img_preview')
            , imgUploadForm = document.getElementById('img-upload-form')
            , totalFiles
            , previewTitle
            , previewTitleText
            , img;

        imgUpload.addEventListener('change', previewImgs, false);
        imgUploadForm.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Images Uploaded! (not really, but it would if this was on your website)');
        }, false);

        function previewImgs(event) {
            totalFiles = imgUpload.files.length;

            if (!!totalFiles) {
                imgPreview.classList.remove('quote-imgs-thumbs--hidden');
                previewTitle = document.createElement('p');
                previewTitle.style.fontWeight = 'bold';
                previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
                previewTitle.appendChild(previewTitleText);
                imgPreview.appendChild(previewTitle);
            }

            for (var i = 0; i < totalFiles; i++) {
                img = document.createElement('img');
                img.src = URL.createObjectURL(event.target.files[i]);
                img.classList.add('img-preview-thumb');
                imgPreview.appendChild(img);
            }
        }
    </script> -->
    <!-- <script>
        // File Upload
        //
        function ekUpload() {
            function Init() {

                console.log("Upload Initialised");

                var fileSelect = document.getElementById('file-upload'),
                    fileDrag = document.getElementById('file-drag'),
                    submitButton = document.getElementById('submit-button');

                fileSelect.addEventListener('change', fileSelectHandler, false);

                // Is XHR2 available?
                var xhr = new XMLHttpRequest();
                if (xhr.upload) {
                    // File Drop
                    fileDrag.addEventListener('dragover', fileDragHover, false);
                    fileDrag.addEventListener('dragleave', fileDragHover, false);
                    fileDrag.addEventListener('drop', fileSelectHandler, false);
                }
            }

            function fileDragHover(e) {
                var fileDrag = document.getElementById('file-drag');

                e.stopPropagation();
                e.preventDefault();

                fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
            }

            function fileSelectHandler(e) {
                // Fetch FileList object
                var files = e.target.files || e.dataTransfer.files;

                // Cancel event and hover styling
                fileDragHover(e);

                // Process all File objects
                for (var i = 0, f; f = files[i]; i++) {
                    parseFile(f);
                    uploadFile(f);
                }
            }

            // Output
            function output(msg) {
                // Response
                var m = document.getElementById('messages');
                m.innerHTML = msg;
            }

            function parseFile(file) {

                console.log(file.name);
                output(
                    '<strong>' + encodeURI(file.name) + '</strong>'
                );

                // var fileType = file.type;
                // console.log(fileType);
                var imageName = file.name;

                var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
                if (isGood) {
                    document.getElementById('start').classList.add("hidden");
                    document.getElementById('response').classList.remove("hidden");
                    document.getElementById('notimage').classList.add("hidden");
                    // Thumbnail Preview
                    document.getElementById('file-image').classList.remove("hidden");
                    document.getElementById('file-image').src = URL.createObjectURL(file);
                }
                else {
                    document.getElementById('file-image').classList.add("hidden");
                    document.getElementById('notimage').classList.remove("hidden");
                    document.getElementById('start').classList.remove("hidden");
                    document.getElementById('response').classList.add("hidden");
                    document.getElementById("file-upload-form").reset();
                }
            }

            function setProgressMaxValue(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.max = e.total;
                }
            }

            function updateFileProgress(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                    pBar.value = e.loaded;
                }
            }

            function uploadFile(file) {

                var xhr = new XMLHttpRequest(),
                    fileInput = document.getElementById('class-roster-file'),
                    pBar = document.getElementById('file-progress'),
                    fileSizeLimit = 1024; // In MB
                if (xhr.upload) {
                    // Check if file is less than x MB
                    if (file.size <= fileSizeLimit * 1024 * 1024) {
                        // Progress bar
                        pBar.style.display = 'inline';
                        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                        xhr.upload.addEventListener('progress', updateFileProgress, false);

                        // File received / failed
                        xhr.onreadystatechange = function (e) {
                            if (xhr.readyState == 4) {
                                // Everything is good!

                                // progress.className = (xhr.status == 200 ? "success" : "failure");
                                // document.location.reload(true);
                            }
                        };

                        // Start upload
                        xhr.open('POST', document.getElementById('file-upload-form').action, true);
                        xhr.setRequestHeader('X-File-Name', file.name);
                        xhr.setRequestHeader('X-File-Size', file.size);
                        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                        xhr.send(file);
                    } else {
                        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
                    }
                }
            }

            // Check for the various File API support.
            if (window.File && window.FileList && window.FileReader) {
                Init();
            } else {
                document.getElementById('file-drag').style.display = 'none';
            }
        }
        ekUpload();
    </script> -->
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input/");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>


    <script>
        // dataset 属性选择器
        const log = console.log;
        const btns = document.querySelectorAll("[data-edit]");
        btns.forEach(btn =>
            btn.addEventListener("click", function (e) {
                // ES6 arrow function , this bug
                e.preventDefault();
                // log(this.getAttribute("data-edit"));
                const cmd_val = this.getAttribute("data-edit").split(":");
                log(`cmd_val =`, cmd_val);
                if (cmd_val[0] === 'copy') {
                    document.execCommand(cmd_val[0]);
                    alert(`\`${cmd_val[0]}\`, Done!`)
                } else {
                    log(`cmd_val[0] =`, cmd_val[0]);
                    log(`cmd_val[1] =`, cmd_val[1]);
                    document.execCommand(cmd_val[0], false, cmd_val[1]);
                }
            })
        );


        /*

        https://www.cnblogs.com/xgqfrms/p/13901860.html


        */
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#uploadimg')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<script>
        ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
            console.log( 'successful' );
          })
          .catch( error => {
            console.error( 'faile' );
          });
</script>
<script>
        ClassicEditor
          .create( document.querySelector( '#revieweditor' ) )
          .then( editor => {
            console.log( 'successful' );
          })
          .catch( error => {
            console.error( 'faile' );
          });
</script>
<script>
        ClassicEditor
          .create( document.querySelector( '#rateseditor' ) )
          .then( editor => {
            console.log( 'successful' );
          })
          .catch( error => {
            console.error( 'faile' );
          });
</script>



<script>
    document.getElementById('readUrl').addEventListener('change', function(){
  if (this.files[0] ) {
    var picture = new FileReader();
    picture.readAsDataURL(this.files[0]);
    picture.addEventListener('load', function(event) {
      document.getElementById('uploadedImage').setAttribute('src', event.target.result);
      document.getElementById('uploadedImage').style.display = 'block';
    });
  }
});
</script>


@endsection
