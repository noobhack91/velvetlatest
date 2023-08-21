@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Profile v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
</div>
      
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

   
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <form name="update_user" method="POST" enctype="multipart/form-data" action="{{url('model/profile_detail/update/'.encrypt($modeldata->user_id))}}">
            @csrf
            @method('PUT')
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>
                     <div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
							<i class="fas fa-minus"></i>
						</button>
                     </div>
                 </div>
                <div class="row">
							<div class="col-sm-12 col-md-6 card-wrap">
								<!-- Gender -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="Gender" class="control-label editing-form-label"
											oninput="this.className = 'tab'" name="gender">Gender</label>
									</div>
									
									<div class="editing-form-value-cell">
										<select name="gender" id="gender" class="form-control" required>
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
										<select name="sexuality" id="sexuality" class="form-control sexuality" required>
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

										<input name="age" maxlength="3" type="number" id="age" class="form-control" value="{{ isset($modeldata->age) && !empty($modeldata->age) ? $modeldata->age : '' }}" required>
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
												class="control-label editing-form-label">Phone number</label>
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
													name="display_contect_form" <?php if(isset($modeldata->display_contect_form	)) { echo $modeldata->display_contect_form == "on" ? 'checked' : ''; } ?>><label
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
											<input name="website" type="url" id="website" class="form-control" value="{{ isset($modeldata->website) && !empty($modeldata->website) ? $modeldata->website : '' }}">
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
											<input name="social_website" type="url"
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
											<input id="preferred_contact_method" type="checkbox"
													name="preferred_contact_method" <?php if(isset($modeldata->preferred_contact_methods)) { echo $modeldata->preferred_contact_methods == "phone_calls" ? 'checked' : ''; } ?> value="phone_calls" >&nbsp;<label
													for="preferred_contact_method" >Phone Calls</label>
													
											<input id="preferred_contact_method" type="checkbox" name="sms_messages" <?php if(isset($modeldata->sms_messages)) { echo $modeldata->sms_messages == "sms_messages" ? 'checked' : ''; } ?> value="sms_messages" >&nbsp;<label
													for="preferred_contact_method" >SMS Messages</label>
												
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          </div>
          <!-- /.card -->
        </div>

        <div class="profile-details-optional">
						<h3>Profile details <span style="color:grey">(optional)</span></h3>
						<p>Customers can search for you by some of these fields.</p>

						<div class="row">
							<!-- <div class="col-md-6"> -->
							<div class=" col-sm-12 col-md-6">

								<!-- Height -->
								<div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_txtHeight" class="control-label editing-form-label">Height
											(cm)</label>
									</div>
									<div class="editing-form-value-cell">
										<input name="height" type="number" value="{{ isset($modeldata->height) && !empty($modeldata->height) ? $modeldata->height : '' }}" maxlength="3" id="height" class="form-control">
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
											<option value="auburn" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "auburn" ? 'selected' : ''; } ?>>Auburn</option>
											<option value="black" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "black" ? 'selected' : ''; } ?>>Black</option>
											<option value="blonde" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "blonde" ? 'selected' : ''; } ?>>Blonde</option>
											<option value="brown" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "brown" ? 'selected' : ''; } ?>>Brown</option>
											<option value="brunette" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "brunette" ? 'selected' : ''; } ?>>Brunette</option>
											<option value="burgundy" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "burgundy" ? 'selected' : ''; } ?>>Burgundy</option>
											<option value="dark" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "dark" ? 'selected' : ''; } ?>>Dark</option>
											<option value="ginger" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "ginger" ? 'selected' : ''; } ?>>Ginger</option>
											<option value="red" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "red" ? 'selected' : ''; } ?>>Red</option>
											<option value="other" <?php if(isset($modeldata->hair)) { echo $modeldata->hair == "other" ? 'selected' : ''; } ?>>Other</option>

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
											<option value="blue" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "blue" ? 'selected' : ''; } ?>>Blue</option>
											<option value="brown" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "brown" ? 'selected' : ''; } ?>>Brown</option>
											<option value="green" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "green" ? 'selected' : ''; } ?>>Green</option>
											<option value="hazel" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "hazel" ? 'selected' : ''; } ?>>Hazel</option>
											<option value="grey" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "grey" ? 'selected' : ''; } ?>>Grey</option>
											<option value="amber" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "amber" ? 'selected' : ''; } ?>>Amber</option>
											<option value="red" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "red" ? 'selected' : ''; } ?>>Red</option>
											<option value="black" <?php if(isset($modeldata->eyes)) { echo $modeldata->eyes == "black" ? 'selected' : ''; } ?>>Black</option>
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
											<option value="athletic" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "athletic" ? 'selected' : ''; } ?>>Athletic</option>
											<option value="average" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "average" ? 'selected' : ''; } ?>>Average</option>
											<option value="bbw" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "bbw" ? 'selected' : ''; } ?>>BBW</option>
											<option value="cuddly" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "cuddly" ? 'selected' : ''; } ?>>Cuddly</option>
											<option value="curvaceous" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "curvaceous" ? 'selected' : ''; } ?>>Curvaceous</option>
											<option value="curvey" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "curvey" ? 'selected' : ''; } ?>>Curvey</option>
											<option value="full_figured" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "full_figured" ? 'selected' : ''; } ?>>Full Figured</option>
											<option value="hour_glass" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "hour_glass" ? 'selected' : ''; } ?>>Hour Glass</option>
											<option value="muscular" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "muscular" ? 'selected' : ''; } ?>>Muscular/Cut</option>
											<option value="petite" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "petite" ? 'selected' : ''; } ?>>Petite</option>
											<option value="petite_slim" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "petite_slim" ? 'selected' : ''; } ?>>Petite/Slim</option>
											<option value="slim" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "slim" ? 'selected' : ''; } ?>>Slim</option>
											<option value="toned" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "toned" ? 'selected' : ''; } ?>>Toned</option>
											<option value="voluptuous" <?php if(isset($modeldata->body_type)) { echo $modeldata->body_type == "voluptuous" ? 'selected' : ''; } ?>>Voluptuous</option>

										</select>
									</div>
								</div>
							</div>

							<div class=" col-sm-12 col-md-6">

								<!-- Bust Size -->
							   <div class="form-group">
									<div class="editing-form-label-cell">
										<label for="_drpHairColour" class="control-label editing-form-label">Bust
											Size</label>
									</div>
									<div class="editing-form-value-cell">
										<select name="bust_size" id="bust_size" class="form-control">
											<option value="">- not set -</option>
											<option value="28" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 28 ? 'selected' : ''; } ?>>28</option>
											<option value="30" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 30 ? 'selected' : ''; } ?>>30</option>
											<option value="32" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 32 ? 'selected' : ''; } ?>>32</option>
											<option value="34" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 34 ? 'selected' : ''; } ?>>34</option>
											<option value="36" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 36 ? 'selected' : ''; } ?>>36</option>
											<option value="38" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 38 ? 'selected' : ''; } ?>>38</option>
											<option value="40" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 40 ? 'selected' : ''; } ?>>40</option>
											<option value="42" <?php if(isset($modeldata->bust)) { echo $modeldata->bust == 42 ? 'selected' : ''; } ?>>42</option>
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
										<input name="dress_size" type="number" value="{{ isset($modeldata->dress) && !empty($modeldata->dress) ? $modeldata->dress : '' }}" maxlength="3" id="dress_size" class="form-control">
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
											<option value="australian" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'australian' ? 'selected' : ''; } ?>>Australian</option>
											<option value="indian" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'indian' ? 'selected' : ''; } ?>>Indian</option>
											<option value="pakistani" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'pakistani' ? 'selected' : ''; } ?>>Pakistani</option>
											<option value="bangladeshi" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'bangladeshi' ? 'selected' : ''; } ?>>Bangladeshi</option>
											<option value="chinese" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'chinese' ? 'selected' : ''; } ?>>Chinese</option>
											<option value="caribbean" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'caribbean' ? 'selected' : ''; } ?>>Caribbean</option>
											<option value="african" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'african' ? 'selected' : ''; } ?>>African</option>
											<option value="white" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'white' ? 'selected' : ''; } ?>>White</option>
											<option value="black" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'black' ? 'selected' : ''; } ?>>Black</option>
											<option value="asian" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'asian' ? 'selected' : ''; } ?>>Asian</option>
											<option value="irish" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'irish' ? 'selected' : ''; } ?>>Irish</option>
											<option value="arab" <?php if(isset($modeldata->ethnicity)) { echo $modeldata->ethnicity == 'arab' ? 'selected' : ''; } ?>>Arab</option>
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
											<option value="hindi" <?php if(isset($modeldata->spoken_language)) { echo $modeldata->spoken_language == 'hindi' ? 'selected' : ''; } ?>>Hindi</option>
											<option value="english" <?php if(isset($modeldata->spoken_language)) { echo $modeldata->spoken_language == 'english' ? 'selected' : ''; } ?>>English</option>
											<option value="japaneese" <?php if(isset($modeldata->spoken_language)) { echo $modeldata->spoken_language == 'japaneese' ? 'selected' : ''; } ?>>Japaneese</option>
											<option value="other" <?php if(isset($modeldata->spoken_language)) { echo $modeldata->spoken_language == 'other' ? 'selected' : ''; } ?>>Other</option>
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
											<option value="male" <?php if(isset($modeldata->escort_for)) { echo $modeldata->escort_for == 'male' ? 'selected' : ''; } ?>>Male</option>
											<option value="female" <?php if(isset($modeldata->escort_for)) { echo $modeldata->escort_for == 'female' ? 'selected' : ''; } ?>>Female</option>
											<option value="group" <?php if(isset($modeldata->escort_for)) { echo $modeldata->escort_for == 'group' ? 'selected' : ''; } ?> >Group</option>
											<option value="transsexual" <?php if(isset($modeldata->escort_for)) { echo $modeldata->escort_for == 'transsexual' ? 'selected' : ''; } ?> >Transsexual</option>
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
									<input id="affectionate_cuddling" type="checkbox" name="affectionate_cuddling" <?php if(isset($privatethings->affectionate_cuddling)) { echo $privatethings->affectionate_cuddling == "on" ? 'checked' : ''; } ?>><label
										for="affectionate_cuddling">Affectionate cuddling</label>
								</div>
								<div class="checkbox">
									<input id="anal_play_on_me" type="checkbox" name="anal_play_on_me" <?php if(isset($privatethings->anal_play_on_me)) { echo $privatethings->anal_play_on_me == "on" ? 'checked' : ''; } ?>><label
										for="anal_play_on_me">Anal
										play-On me</label>
								</div>
								<div class="checkbox">
									<input id="bd" type="checkbox" name="b_d" <?php if(isset($privatethings->b_and_d)) { echo $privatethings->b_and_d == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">B &
										D</label>
								</div>
								<div class="checkbox">
									<input id="bi_twin" type="checkbox" name="bi_twin" <?php if(isset($privatethings->bi_twin)) { echo $privatethings->bi_twin == "on" ? 'checked' : ''; } ?>><label
										for="bi_twin">Bi twin (double)</label>
								</div>
								<div class="checkbox">
									<input id="bondage" type="checkbox" name="bondage" <?php if(isset($privatethings->bondage)) { echo $privatethings->bondage == "on" ? 'checked' : ''; } ?>><label
										for="bondage">Bondage</label>
								</div>
								<div class="checkbox">
									<input id="cbj" type="checkbox" name="cbj" <?php if(isset($privatethings->cbj)) { echo $privatethings->cbj == "on" ? 'checked' : ''; } ?>><label
										for="cbj">CBJ</label>
								</div>
								<div class="checkbox">
									<input id="cim" type="checkbox" name="cim" <?php if(isset($privatethings->cim)) { echo $privatethings->cim == "on" ? 'checked' : ''; } ?>><label
										for="cim">CIM</label>
								</div>
								<div class="checkbox">
									<input id="cof" type="checkbox" name="cof" <?php if(isset($privatethings->cof)) { echo $privatethings->cof == "on" ? 'checked' : ''; } ?>><label
										for="cof">COF</label>
								</div>
								<div class="checkbox">
									<input id="couple" type="checkbox" name="couples" <?php if(isset($privatethings->couples)) { echo $privatethings->couples == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Couples</label>
								</div>
								<div class="checkbox">
									<input id="chkShowRealAge" type="checkbox" name="dfk" <?php if(isset($privatethings->dfk)) { echo $privatethings->dfk == "on" ? 'checked' : ''; } ?>><label
										for="dfk">DFK</label>
								</div>
								<div class="checkbox">
									<input id="dp" type="checkbox" name="dp" <?php if(isset($privatethings->dp)) { echo $privatethings->dp == "on" ? 'checked' : ''; } ?>><label
										for="dp">DP</label>
								</div>
								<div class="checkbox">
									<input id="facial" type="checkbox" name="facial" <?php if(isset($privatethings->facial)) { echo $privatethings->facial == "on" ? 'checked' : ''; } ?>><label
										for="facial">Facial</label>
								</div>
								<div class="checkbox">
									<input id="filming" type="checkbox" name="filming" <?php if(isset($privatethings->filming)) { echo $privatethings->filming == "on" ? 'checked' : ''; } ?>><label
										for="filming">Filming</label>
								</div>
								<div class="checkbox">
									<input id="fk" type="checkbox" name="fk" <?php if(isset($privatethings->fk)) { echo $privatethings->fk == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">FK</label>
								</div>
								<div class="checkbox">
									<input id="gagging" type="checkbox" name="gagging" <?php if(isset($privatethings->gagging)) { echo $privatethings->gagging == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Gagging</label>
								</div>
								<div class="checkbox">
									<input id="gs" type="checkbox" name="gs" <?php if(isset($privatethings->GS)) { echo $privatethings->GS == "on" ? 'checked' : ''; } ?>><label
										for="gs">GS</label>
								</div>
								<div class="checkbox">
									<input id="happy_ending" type="checkbox" name="happy_ending" <?php if(isset($privatethings->happy_ending)) { echo $privatethings->happy_ending == "on" ? 'checked' : ''; } ?>><label
										for="happy_ending">Happy
										ending</label>
								</div>
								<div class="checkbox">
									<input id="kissing" type="checkbox" name="kissing" <?php if(isset($privatethings->kissing)) { echo $privatethings->kissing == "on" ? 'checked' : ''; } ?>><label
										for="kissing">Kissing</label>
								</div>
								<div class="checkbox">
									<input id="lk" type="checkbox" name="lk" <?php if(isset($privatethings->lk)) { echo $privatethings->lk == "on" ? 'checked' : ''; } ?>><label
										for="lk">LK</label>
								</div>
								<div class="checkbox">
									<input id="masturbation" type="checkbox" name="masturbation" <?php if(isset($privatethings->masturbation)) { echo $privatethings->masturbation == "on" ? 'checked' : ''; } ?>><label
										for="masturbation">Masturbation</label>
								</div>
								<div class="checkbox">
									<input id="mmf" type="checkbox" name="mmf" <?php if(isset($privatethings->mmf)) { echo $privatethings->mmf == "on" ? 'checked' : ''; } ?>><label
										for="mmf">MMF</label>
								</div>
								<div class="checkbox">
									<input id="mutual_french" type="checkbox" name="mutual_french" <?php if(isset($privatethings->mutual_french_oral)) { echo $privatethings->mutual_french_oral == "on" ? 'checked' : ''; } ?>><label
										for="mutual_french">Mutual
										French (oral)</label>
								</div>
								<div class="checkbox">
									<input id="nurse" type="checkbox" name="nurse" <?php if(isset($privatethings->nurse)) { echo $privatethings->nurse == "on" ? 'checked' : ''; } ?>><label
										for="nurse">Nurse</label>
								</div>
								<div class="checkbox">
									<input id="photography" type="checkbox" name="photography" <?php if(isset($privatethings->photography)) { echo $privatethings->photography == "on" ? 'checked' : ''; } ?>><label
										for="photography">Photography</label>
								</div>
								<div class="checkbox">
									<input id="PSE" type="checkbox" name="pse" <?php if(isset($privatethings->pse)) { echo $privatethings->pse == "on" ? 'checked' : ''; } ?>><label
										for="pse">PSE</label>
								</div>
								<div class="checkbox">
									<input id="rimming_on_me" type="checkbox" name="rimming_on_me" <?php if(isset($privatethings->rimming_on_me)) { echo $privatethings->rimming_on_me == "on" ? 'checked' : ''; } ?>><label
										for="rimming_on_me">Rimming
										- On me</label>
								</div>
								<!--<div class="checkbox">-->
								<!--	<input id="school_girl" type="checkbox" name="school_girl" <?php if(isset($privatethings->school_girl)) { echo $privatethings->school_girl == "on" ? 'checked' : ''; } ?>><label-->
								<!--		for="school_girl">School-->
								<!--		girl</label>-->
								<!--</div>-->
								<div class="checkbox">
									<input id="sexy_lingerie" type="checkbox" name="sexy_lingerie" <?php if(isset($privatethings->sexy_lingerie)) { echo $privatethings->sexy_lingerie == "on" ? 'checked' : ''; } ?>><label
										for="sexy_lingerie">Sexy
										lingerie</label>
								</div>
								<div class="checkbox">
									<input id="social_escort" type="checkbox" name="social_escort" <?php if(isset($privatethings->social_escort)) { echo $privatethings->social_escort == "on" ? 'checked' : ''; } ?>><label
										for="social_escort">Social
										escort</label>
								</div>
								<div class="checkbox">
									<input id="spanking_on_you" type="checkbox" name="spanking_on_you" <?php if(isset($privatethings->spanking_on_you)) { echo $privatethings->spanking_on_you == "on" ? 'checked' : ''; } ?>><label
										for="spanking_on_you">Spanking - On you</label>
								</div>
								<div class="checkbox">
									<input id="strap_on_me" type="checkbox" name="strap_on_me" <?php if(isset($privatethings->strap_on)) { echo $privatethings->strap_on == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Strap
										on -me</label>
								</div>
								<div class="checkbox">
									<input id="tea_bagging" type="checkbox" name="tea_bagging" <?php if(isset($privatethings->tea_bagging)) { echo $privatethings->tea_bagging == "on" ? 'checked' : ''; } ?>><label
										for="tea_bagging">Tea
										bagging</label>
								</div>
								<div class="checkbox">
									<input id="dirty_talk" type="checkbox" name="dirty_talk" <?php if(isset($privatethings->dirty_talk)) { echo $privatethings->dirty_talk == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Dirty
										Talk</label>
								</div>
								<!--<div class="checkbox">-->
								<!--	<input id="overnigth" type="checkbox" name="overnigth" <?php if(isset($privatethings->overnigth)) { echo $privatethings->overnigth == "on" ? 'checked' : ''; } ?>><label-->
								<!--		for="overnigth">Overnight</label>-->
								<!--</div>-->
								<div class="checkbox">
									<input id="toys" type="checkbox" name="toys" <?php if(isset($privatethings->toys)) { echo $privatethings->toys == "on" ? 'checked' : ''; } ?>><label
										for="toys">Toys</label>
								</div>
								<div class="checkbox">
									<input id="full_service" type="checkbox" name="full_service" <?php if(isset($privatethings->full_service)) { echo $privatethings->full_service == "on" ? 'checked' : ''; } ?>><label
										for="full_service">Full
										Service</label>
								</div>
								<div class="checkbox">
									<input id="toys" type="checkbox" name="toys" <?php if(isset($privatethings->toys)) { echo $privatethings->toys == "on" ? 'checked' : ''; } ?>><label
										for="toys">Toys</label>
								</div>
								<div class="checkbox">
									<input id="electrode_play" type="checkbox" name="electrode_play" <?php if(isset($privatethings->electrode_play)) { echo $privatethings->electrode_play == "on" ? 'checked' : ''; } ?>><label
										for="electrode_play">Electrode Play</label>
								</div>
								<div class="checkbox">
									<input id="cross_dressing" type="checkbox" name="cross_dressing" <?php if(isset($privatethings->cross_dressing)) { echo $privatethings->cross_dressing == "on" ? 'checked' : ''; } ?>><label
										for="cross_dressing">Cross
										Dressing</label>
								</div>
								<div class="checkbox">
									<input id="boot_worship" type="checkbox" name="boot_worship" <?php if(isset($privatethings->boot_worship)) { echo $privatethings->boot_worship == "on" ? 'checked' : ''; } ?>><label
										for="boot_worship">Boot
										Worship</label>
								</div>
								<div class="checkbox">
									<input id="needle_play" type="checkbox" name="needle_play" <?php if(isset($privatethings->needle_play)) { echo $privatethings->needle_play == "on" ? 'checked' : ''; } ?>><label
										for="needle_play">Needle
										Play</label>
								</div>
								<div class="checkbox">
									<input id="intimidation" type="checkbox" name="intimidation" <?php if(isset($privatethings->intimidation_on_you)) { echo $privatethings->intimidation_on_you == "on" ? 'checked' : ''; } ?>><label
										for="intimidation">Intimidation on You</label>
								</div>
								<div class="checkbox">
									<input id="ffm" type="checkbox" name="ffm" <?php if(isset($privatethings->ffm)) { echo $privatethings->ffm == "on" ? 'checked' : ''; } ?>><label
										for="ffm">FFM</label>
								</div>
							</div>



							<div class="col-md-4">
								<div class="checkbox">
									<input id="affectionate_kissing" type="checkbox" name="affectionate_kissing" <?php if(isset($privatethings->affectionate_kissing)) { echo $privatethings->affectionate_kissing == "on" ? 'checked' : ''; } ?>><label
										for="affectionate_kissing">Affectionate Kissing</label>
								</div>
								<div class="checkbox">
									<input id="anal_play" type="checkbox" name="anal_play" <?php if(isset($privatethings->anal_play)) { echo $privatethings->anal_play == "on" ? 'checked' : ''; } ?>><label
										for="anal_play">Anal
										play - On you</label>
								</div>
								<div class="checkbox">
									<input id="bbbj" type="checkbox" name="bbbj" <?php if(isset($privatethings->bbbj)) { echo $privatethings->bbbj == "on" ? 'checked' : ''; } ?>><label
										for="bbbj">BBBJ</label>
								</div>
								<div class="checkbox">
									<input id="bj" type="checkbox" name="bj" <?php if(isset($privatethings->bj)) { echo $privatethings->bj == "on" ? 'checked' : ''; } ?>><label
										for="bj">BJ</label>
								</div>
								<div class="checkbox">
									<input id="brazilian" type="checkbox" name="brazilian" <?php if(isset($privatethings->brazilian)) { echo $privatethings->brazilian == "on" ? 'checked' : ''; } ?>><label
										for="brazilian">Brazilian</label>
								</div>
								<div class="checkbox">
									<input id="cbt" type="checkbox" name="cbt" <?php if(isset($privatethings->cbt)) { echo $privatethings->cbt == "on" ? 'checked' : ''; } ?>><label
										for="cbt">CBT</label>
								</div>
								<div class="checkbox">
									<input id="cimws" type="checkbox" name="cimws" <?php if(isset($privatethings->cimws)) { echo $privatethings->cimws == "on" ? 'checked' : ''; } ?>><label
										for="cimws">CIMWS</label>
								</div>
								<div class="checkbox">
									<input id="costumes" type="checkbox" name="costumes" <?php if(isset($privatethings->costumes)) { echo $privatethings->costumes == "on" ? 'checked' : ''; } ?>><label
										for="costumes">Costumes</label>
								</div>
								<div class="checkbox">
									<input id="daty" type="checkbox" name="daty" <?php if(isset($privatethings->daty)) { echo $privatethings->daty == "on" ? 'checked' : ''; } ?>> <label
										for="daty">DATY</label>
								</div>
								<div class="checkbox">
									<input id="dinner_companion" type="checkbox" name="dinner_companion" <?php if(isset($privatethings->dinner_companion)) { echo $privatethings->dinner_companion == "on" ? 'checked' : ''; } ?>><label
										for="dinner_companion">Dinner
										companion</label>
								</div>
								<div class="checkbox">
									<input id=dt" type="checkbox" name="dt" <?php if(isset($privatethings->dt)) { echo $privatethings->dt == "on" ? 'checked' : ''; } ?>><label
										for="dt">DT</label>
								</div>
								<div class="checkbox">
									<input id="fe" type="checkbox" name="fe" <?php if(isset($privatethings->fe)) { echo $privatethings->fe == "on" ? 'checked' : ''; } ?>><label
										for="fe">FE</label>
								</div>
								<div class="checkbox">
									<input id="fire" type="checkbox" name="fire" <?php if(isset($privatethings->fire_and_ice_hot_and_cold_bj)) { echo $privatethings->fire_and_ice_hot_and_cold_bj == "on" ? 'checked' : ''; } ?>><label
										for="fire">Fire
										and ice - hot and cold BJ</label>
								</div>
								<div class="checkbox">
									<input id="foot" type="checkbox" name="foot_fetish" <?php if(isset($privatethings->foot_fetish)) { echo $privatethings->foot_fetish == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Foot
										Fetish</label>
								</div>
								<div class="checkbox">
									<input id="foot" type="checkbox" name="gfe" <?php if(isset($privatethings->gfe)) { echo $privatethings->gfe == "on" ? 'checked' : ''; } ?>>
									<label>GFE</label>
								</div>
								<div class="checkbox">
									<input id="gs_one" type="checkbox" name="gs_one" <?php if(isset($privatethings->gs_on_me)) { echo $privatethings->gs_on_me == "on" ? 'checked' : ''; } ?>><label
										for="gs_one">GS -
										On
										me</label>
								</div>
								<div class="checkbox">
									<input id="hj" type="checkbox" name="hj" <?php if(isset($privatethings->hj)) { echo $privatethings->hj == "on" ? 'checked' : ''; } ?>><label
										for="hj">HJ</label>
								</div>
								<div class="checkbox">
									<input id="light_bondage" type="checkbox" name="light_bondage" <?php if(isset($privatethings->light_bondage)) { echo $privatethings->light_bondage == "on" ? 'checked' : ''; } ?>><label
										for="light_bondage">Light
										bondage</label>
								</div>
								<div class="checkbox">
									<input id="maid" type="checkbox" name="maid" <?php if(isset($privatethings->maid)) { echo $privatethings->maid == "on" ? 'checked' : ''; } ?>><label
										for="maid">Maid</label>
								</div>
								<div class="checkbox">
									<input id="mff" type="checkbox" name="mff" <?php if(isset($privatethings->mff)) { echo $privatethings->mff == "on" ? 'checked' : ''; } ?>><label
										for="mff">MFF</label>
								</div>
								<div class="checkbox">
									<input id="msog" type="checkbox" name="msog" <?php if(isset($privatethings->msog)) { echo $privatethings->msog == "on" ? 'checked' : ''; } ?>><label
										for="msog">MSOG</label>
								</div>
								<div class="checkbox">
									<input id="mutual_nutural_oral" type="checkbox" name="mutual_natural_oral" <?php if(isset($privatethings->mutual_natural_oral)) { echo $privatethings->mutual_natural_oral == "on" ? 'checked' : ''; } ?>><label
										for="mutual_nutural_oral">Mutual
										natural oral</label>
								</div>
								<div class="checkbox">
									<input id="overnight_stays" type="checkbox" name="overnight_stays" <?php if(isset($privatethings->overnight_stays)) { echo $privatethings->overnight_stays == "on" ? 'checked' : ''; } ?>><label
										for="overnight_stays">Overnight stays</label>
								</div>
								<div class="checkbox">
									<input id="police_woman" type="checkbox" name="police_woman" <?php if(isset($privatethings->police_woman)) { echo $privatethings->police_woman == "on" ? 'checked' : ''; } ?>><label
										for="police_woman">Police
										woman</label>
								</div>
								<div class="checkbox">
									<input id="pse_filming" type="checkbox" name="pse_filming" <?php if(isset($privatethings->pse_with_filming)) { echo $privatethings->pse_with_filming == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">PSE -
										With filming</label>
								</div>
								<div class="checkbox">
									<input id="rimming" type="checkbox" name="rimming" <?php if(isset($privatethings->rimming)) { echo $privatethings->rimming == "on" ? 'checked' : ''; } ?>><label
										for="rimming">Rimming
										- On you</label>
								</div>
								<div class="checkbox">
									<input id="secretary" type="checkbox" name="secretary" <?php if(isset($privatethings->secretary)) { echo $privatethings->secretary == "on" ? 'checked' : ''; } ?>><label
										for="secretary">Secretary</label>
								</div>
								<div class="checkbox">
									<input id="sexy" type="checkbox" name="sexy" <?php if(isset($privatethings->sexy_shower_for_2)) { echo $privatethings->sexy_shower_for_2 == "on" ? 'checked' : ''; } ?>><label
										for="sexy">Sexy
										shower for 2</label>
								</div>
								<div class="checkbox">
									<input id="spanish" type="checkbox" name="spanish" <?php if(isset($privatethings->spanish)) { echo $privatethings->spanish == "on" ? 'checked' : ''; } ?>><label
										for="spanish">Spanish</label>
								</div>
								<div class="checkbox">
									<input id="squirting" type="checkbox" name="squirting" <?php if(isset($privatethings->squirting)) { echo $privatethings->squirting == "on" ? 'checked' : ''; } ?>><label
										for="Squirting">Squirting</label>
								</div>
								<div class="checkbox">
									<input id="strap" type="checkbox" name="strap_on_you" <?php if(isset($privatethings->strap_on_you)) { echo $privatethings->strap_on_you == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Strap - On you</label>
								</div>
								<div class="checkbox">
									<input id="tromboning" type="checkbox" name="tromboning" <?php if(isset($privatethings->tromboning)) { echo $privatethings->tromboning == "on" ? 'checked' : ''; } ?>><label
										for="tromboning">Tromboning</label>
								</div>
								<div class="checkbox">
									<input id="full_body_massage" type="checkbox" name="full_body_massage" <?php if(isset($privatethings->full_body_massage)) { echo $privatethings->full_body_massage == "on" ? 'checked' : ''; } ?>><label
										for="full_body_massage">Full
										Body Massage</label>
								</div>
								<div class="checkbox">
									<input id="passionate_kissing" type="checkbox" name="passionate_kissing" <?php if(isset($privatethings->passionate_kissing)) { echo $privatethings->passionate_kissing == "on" ? 'checked' : ''; } ?>><label
										for="passionate_kissing">Passionate Kissing</label>
								</div>
								<div class="checkbox">
									<input id="escort" type="checkbox" name="escort" <?php if(isset($privatethings->escort)) { echo $privatethings->escort == "on" ? 'checked' : ''; } ?>><label
										for="escort">Escort</label>
								</div>
								<div class="checkbox">
									<input id="lactating" type="checkbox" name="lactating" <?php if(isset($privatethings->lactating)) { echo $privatethings->lactating == "on" ? 'checked' : ''; } ?>><label
										for="lactating">Lactating</label>
								</div>
								<div class="checkbox">
									<input id="nipple_manipulation" type="checkbox" name="nipple_manipulation" <?php if(isset($privatethings->nipple_manipulation)) { echo $privatethings->nipple_manipulation == "on" ? 'checked' : ''; } ?>><label
										for="nipple_manipulation">Nipple
										Manipulation</label>
								</div>
								<div class="checkbox">
									<input id="caning" type="checkbox" name="caning" <?php if(isset($privatethings->caning)) { echo $privatethings->caning == "on" ? 'checked' : ''; } ?>><label
										for="caning">Caning</label>
								</div>
								<div class="checkbox">
									<input id="latex" type="checkbox" name="latex" <?php if(isset($privatethings->latex_leather_worship)) { echo $privatethings->latex_leather_worship == "on" ? 'checked' : ''; } ?>><label
										for="latex">Latex
										/
										Leather Worship</label>
								</div>
								<div class="checkbox">
									<input id="ball_busting" type="checkbox" name="ball_busting" <?php if(isset($privatethings->ball_busting)) { echo $privatethings->ball_busting == "on" ? 'checked' : ''; } ?>><label
										for="ball_busting">Ball
										Busting</label>
								</div>
								<div class="checkbox">
									<input id="submissive" type="checkbox" name="submissive" <?php if(isset($privatethings->submissive)) { echo $privatethings->submissive == "on" ? 'checked' : ''; } ?>><label
										for="submissive">Submissive</label>
								</div>
								<div class="checkbox">
									<input id="brown_showers" type="checkbox" name="brown_showers" <?php if(isset($privatethings->brown_showers)) { echo $privatethings->brown_showers == "on" ? 'checked' : ''; } ?>><label
										for="brown_showers">Brown
										Showers</label>
								</div>
							</div>

							<div class="col-md-4">
								<div class="checkbox">
									<input id="anal_play" type="checkbox" name="anal_play" <?php if(isset($privatethings->anal_play)) { echo $privatethings->anal_play == "on" ? 'checked' : ''; } ?>><label
										for="anal_play">Anal
										play</label>
								</div>
								<div class="checkbox">
									<input id="atm" type="checkbox" name="atm" <?php if(isset($privatethings->atm)) { echo $privatethings->atm == "on" ? 'checked' : ''; } ?>><label
										for="atm">ATM</label>
								</div>
								<div class="checkbox">
									<input id="bdsm" type="checkbox" name="bdsm" <?php if(isset($privatethings->bdsm)) { echo $privatethings->bdsm == "on" ? 'checked' : ''; } ?>><label
										for="bdsm">BDSM</label>
								</div>
								<div class="checkbox">
									<input id="bls" type="checkbox" name="bls" <?php if(isset($privatethings->bls)) { echo $privatethings->bls == "on" ? 'checked' : ''; } ?>><label
										for="bls">BLS</label>
								</div>
								<div class="checkbox">
									<input id="body" type="checkbox" name="body_slide" <?php if(isset($privatethings->body_slide)) { echo $privatethings->body_slide == "on" ? 'checked' : ''; } ?>><label
										for="body">Body
										Slide</label>
								</div>
								<div class="checkbox">
									<input id="cd" type="checkbox" name="cd" <?php if(isset($privatethings->cd)) { echo $privatethings->cd == "on" ? 'checked' : ''; } ?>><label
										for="cd">CD</label>
								</div>
								<div class="checkbox">
									<input id="cob" type="checkbox" name="cob" <?php if(isset($privatethings->cob)) { echo $privatethings->cob == "on" ? 'checked' : ''; } ?>><label
										for="cob">COB</label>
								</div>
								<div class="checkbox">
									<input id="costume" type="checkbox" name="costumes_and_role_play" <?php if(isset($privatethings->costumes_and_role_play)) { echo $privatethings->costumes_and_role_play == "on" ? 'checked' : ''; } ?>><label
										for="costume">Costumes and role play</label>
								</div>
								<div class="checkbox">
									<input id="ddp" type="checkbox" name="ddp" <?php if(isset($privatethings->ddp)) { echo $privatethings->ddp == "on" ? 'checked' : ''; } ?>><label
										for="ddp">DDP</label>
								</div>
								<div class="checkbox">
									<input id="doggy" type="checkbox" name="doggy_style" <?php if(isset($privatethings->doggy_style)) { echo $privatethings->doggy_style == "on" ? 'checked' : ''; } ?>><label
										for="doggy">Doggy
										style</label>
								</div>
								<div class="checkbox">
									<input id="erotic_sansual_massage" type="checkbox" name="erotic_sensual_massage" <?php if(isset($privatethings->erotic_sensual_massage)) { echo $privatethings->erotic_sensual_massage == "on" ? 'checked' : ''; } ?>><label
										for="erotic_sansual_massage">Erotic
										sensual massage</label>
								</div>
								<div class="checkbox">
									<input id="greek" type="checkbox" name="greek" <?php if(isset($privatethings->greek)) { echo $privatethings->greek == "on" ? 'checked' : ''; } ?>><label
										for="greek">Greek</label>
								</div>
								<div class="checkbox">
									<input id="gs" type="checkbox" name="gs_on_you" <?php if(isset($privatethings->gs_on_you)) { echo $privatethings->gs_on_you == "on" ? 'checked' : ''; } ?>><label
										for="gs">GS -
										On
										you</label>
								</div>
								<div class="checkbox">
									<input id="italian" type="checkbox" name="italian" <?php if(isset($privatethings->italian)) { echo $privatethings->italian == "on" ? 'checked' : ''; } ?>><label
										for="italian">Italian</label>
								</div>
								<div class="checkbox">
									<input id="light" type="checkbox" name="light_spanking" <?php if(isset($privatethings->light_spanking)) { echo $privatethings->light_spanking == "on" ? 'checked' : ''; } ?>><label
										for="light">Light
										spanking</label>
								</div>
								<div class="checkbox">
									<input id="massage" type="checkbox" name="massage" <?php if(isset($privatethings->massage)) { echo $privatethings->massage == "on" ? 'checked' : ''; } ?>><label
										for="massage">Massage</label>
								</div>
								<div class="checkbox">
									<input id="milf" type="checkbox" name="milf" <?php if(isset($privatethings->milf)) { echo $privatethings->milf == "on" ? 'checked' : ''; } ?>><label
										for="milf">Milf</label>
								</div>
								<div class="checkbox">
									<input id="multiple_positions" type="checkbox" name="multiple_positions" <?php if(isset($privatethings->multiple_positions)) { echo $privatethings->multiple_positions == "on" ? 'checked' : ''; } ?>><label
										for="multiple_positions">Multiple positions</label>
								</div>
								<div class="checkbox">
									<input id="natural_oral" type="checkbox" name="natural_oral" <?php if(isset($privatethings->natural_oral)) { echo $privatethings->natural_oral == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Natural
										oral</label>
								</div>
								<div class="checkbox">
									<input id="pearl_nacklace" type="checkbox" name="pearl_nacklace" <?php if(isset($privatethings->pearl_nacklace)) { echo $privatethings->pearl_nacklace == "on" ? 'checked' : ''; } ?>><label
										for="pearl_nacklace">Pearl
										Necklace</label>
								</div>
								<div class="checkbox">
									<input id="prostate_message" type="checkbox" name="prostate_message" <?php if(isset($privatethings->prostate_massage)) { echo $privatethings->prostate_massage == "on" ? 'checked' : ''; } ?>><label
										for="prostate_message">Prostate massage</label>
								</div>
								<div class="checkbox">
									<input id="rimming" type="checkbox" name="rimming" <?php if(isset($privatethings->rimming)) { echo $privatethings->rimming == "on" ? 'checked' : ''; } ?>><label
										for="rimming">Rimming</label>
								</div>
								<div class="checkbox">
									<input id="role_play" type="checkbox" name="role_play" <?php if(isset($privatethings->role_play)) { echo $privatethings->role_play == "on" ? 'checked' : ''; } ?>><label
										for="role_play">Role
										play</label>
								</div>
								<div class="checkbox">
									<input id="sex_toys" type="checkbox" name="sex_toys" <?php if(isset($privatethings->sex_toys)) { echo $privatethings->sex_toys == "on" ? 'checked' : ''; } ?>><label
										for="sex_toys">Sex
										toys</label>
								</div>
								<div class="checkbox">
									<input id="snowballing" type="checkbox" name="snowballing" <?php if(isset($privatethings->snowballing)) { echo $privatethings->snowballing == "on" ? 'checked' : ''; } ?>><label
										for="snowballing">Snowballing</label>
								</div>
								<!--<div class="checkbox">-->
								<!--	<input id="spanking" type="checkbox" name="spanking" <?php if(isset($privatethings->spanking)) { echo $privatethings->bondage == "on" ? 'checked' : ''; } ?>><label-->
								<!--		for="spanking">Spanking - On me</label>-->
								<!--</div>-->
								<!--<div class="checkbox">-->
								<!--	<input id="strap" type="checkbox" name="strap" <?php if(isset($privatethings->strap)) { echo $privatethings->strap == "on" ? 'checked' : ''; } ?>><label-->
								<!--		for="strap">Strap-->
								<!--		on</label>-->
								<!--</div>-->
								<div class="checkbox">
									<input id="strip_tease" type="checkbox" name="strip_tease" <?php if(isset($privatethings->strip_tease)) { echo $privatethings->strip_tease == "on" ? 'checked' : ''; } ?>><label
										for="strip_tease">Strip
										tease</label>
								</div>
								<!--<div class="checkbox">-->
								<!--	<input id="cuddling_touching" type="checkbox" name="cuddling_touching" <?php if(isset($privatethings->cuddling_touching)) { echo $privatethings->cuddling_touching == "on" ? 'checked' : ''; } ?>><label-->
								<!--		for="cuddling_touching">Cuddling and Touching</label>-->
								<!--</div>-->
								<div class="checkbox">
									<input id="mutual_masturbation" type="checkbox" name="mutual_masturbation" <?php if(isset($privatethings->mutual_masturbation)) { echo $privatethings->mutual_masturbation == "on" ? 'checked' : ''; } ?>><label
										for="mutual_masturbation">Mutual
										Masturbation</label>
								</div>
								<div class="checkbox">
									<input id="teasing" type="checkbox" name="teasing" <?php if(isset($privatethings->teasing)) { echo $privatethings->teasing == "on" ? 'checked' : ''; } ?>><label
										for="teasing">Teasing</label>
								</div>
								<div class="checkbox">
									<input id="erotic_relaxation" type="checkbox" name="erotic_relaxation" <?php if(isset($privatethings->erotic_relaxation)) { echo $privatethings->erotic_relaxation == "on" ? 'checked' : ''; } ?>><label
										for="erotic">Erotic
										Relaxation</label>
								</div>
								<div class="checkbox">
									<input id="wax_play" type="checkbox" name="wax_play" <?php if(isset($privatethings->wax_play)) { echo $privatethings->wax_play == "on" ? 'checked' : ''; } ?>><label
										for="wax_play">Wax
										Play</label>
								</div>
								<div class="checkbox">
									<input id="sissy_play" type="checkbox" name="sissy_play" <?php if(isset($privatethings->sissy_play)) { echo $privatethings->sissy_play == "on" ? 'checked' : ''; } ?>><label
										for="sissy_play">Sissy
										Play</label>
								</div>
								<div class="checkbox">
									<input id="wrestling" type="checkbox" name="wrestling" <?php if(isset($privatethings->wrestling)) { echo $privatethings->wrestling == "on" ? 'checked' : ''; } ?>><label
										for="wrestling">Wrestling</label>
								</div>
								<!--<div class="checkbox">-->
								<!--	<input id="slave" type="checkbox" name="slave" <?php if(isset($privatethings->slave)) { echo $privatethings->slave == "on" ? 'checked' : ''; } ?>><label-->
								<!--		for="slave">Slave-->
								<!--		/-->
								<!--		Sub play</label>-->
								<!--</div>-->
								<div class="checkbox">
									<input id="urethral_play" type="checkbox" name="urethral_play" <?php if(isset($privatethings->urethral_play)) { echo $privatethings->urethral_play == "on" ? 'checked' : ''; } ?>><label
										for="urethral_play">Urethral Play</label>
								</div>
								<div class="checkbox">
									<input id="relief" type="checkbox" name="relief" <?php if(isset($privatethings->relief)) { echo $privatethings->relief == "on" ? 'checked' : ''; } ?>><label
										for="relief">Relief</label>
								</div>
							</div>
						</div>
						<p>Some items in this section will not display in Victoria or Queensland</p>
					</div>
				</div>
        <div class="my-tt-button">
        <div class="row">
          <div class="col-12">
            <!--<a href="#" class="btn btn-secondary">Cancel</a>-->
            <input type="submit" value="Update" class="btn btn-success">
          </div>
        </div>
    </form>
</div>
                
                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>

@endsection


