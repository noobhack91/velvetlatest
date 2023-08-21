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
            <form name="update_user" method="POST" enctype="multipart/form-data" action="{{url('model/profile/update/'.encrypt($user->id))}}">
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
                <div class="card-body my-card-tt">
                    <div class="form-group">
                      <label>Name:</label>
                        <input type="text" id="name" name="name" value="{{ $user->name ? $user->name:'' }}" maxlength="25" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Email:</label>
                        <input type="email" id="Email" name="email" value="{{ $user->email ? $user->email:'' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Phone:</label>
                        <input type="number" id="phone" name="phone" value="{{ isset($user->modeles) && !empty($user->modeles->phone) ? $user->modeles->phone : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Profile Photo:</label>
                     
                        <img height="200" width="200" src="{{ isset($user->modeles) && !empty($user->modeles->image_name) ? asset('images/'.$user->modeles->image_name) : asset('images/no-image.png') }}">
                    </div>
                    
                    <div class="form-group">
                      <label>Upload Profile Photo:</label>
                        <input type="file" name="profile_photo">
                        
                    </div>
                    
                    
                    @if(isset($gallery) && !empty($gallery) && isset($gallery[0]->filename)	)
                    
                    <table id="dataTable" class="table table-striped">
                      <thead>
                      <tr>
                        <th>Sr No.</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                        <tbody>
                          
                          @foreach($gallery as $usergallary)
                          @if(file_exists(public_path('gallarydata/' . $usergallary->filename)))
                          <?php
                          
                          $mimeType = mime_content_type(public_path('gallarydata/' . $usergallary->filename));
                          $fileType = explode('/', $mimeType)[0]; 
                          ?>
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                              <?php

                              if($fileType=='video'){
                                ?>
                                     <video width="320" height="240" controls>
                                        <source src="{{$usergallary->file_url}}" type="video/mp4">
                                      </video>
                                <?php
                              }
                              if($fileType=='image'){
                                ?>
                                <img height="200" width="200" src="{{$usergallary->file_url}}">
                                <?php
                              }

                              ?>
                            </td>
                            <td><a href="{{url('model/galary/delete/'.encrypt($usergallary->id))}}" class="btn">Remove</a></td>
                          </tr>
                          @endif
                          @endforeach
                        </tbody> 
                     </table>
                    @endif
                    <div class="form-group">
                      <label>Upload Gallary:</label>
                        <input type="file" name="gallary[]" multiple>
                        
                    </div>
                    
                    <div class="form-group">
                      <label>Location:</label>
                        <input maxlength="50" type="text" id="street_address" name="street_address" value="{{ isset($user->modeles) && !empty($user->modeles->street_address) ? $user->modeles->street_address : '' }}" required>
                    </div>
                    <div class="form-group">
                      <label>City:</label>
                        <input type="text" maxlength="15" id="city" name="city" value="{{ isset($user->modeles) && !empty($user->modeles->city) ? $user->modeles->city : '' }}" required>
                    </div>
                    <div class="form-group">
                      <label>State:</label>
                        <input type="text" maxlength="15" id="state" name="state" value="{{ isset($user->modeles) && !empty($user->modeles->state) ? $user->modeles->state : '' }}"  required>
                    </div>
                    <div class="form-group">
                      <label>Pin/Zip Code:</label>
                        <input type="number" id="zip" name="zip" value="{{ isset($user->modeles) && !empty($user->modeles->zip) ? $user->modeles->zip : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Sex</label>
                        <select name="sex" required>
                          <option value="">Select Sex</option>
                          <option value="male" <?php if(isset($user->modeles) && !empty($user->modeles->sex)) { echo $user->modeles->sex == "male" ? 'selected' : ''; } ?>>Male</option>
                          <option value="female" <?php if(isset($user->modeles) && !empty($user->modeles->sex)) {echo $user->modeles->sex == "female" ? 'selected' : ''; } ?>>Female</option>
                          <option value="transgender" <?php if(isset($user->modeles) && !empty($user->modeles->sex)) { echo $user->modeles->sex == "transgender" ? 'selected' : ''; } ?>>Transgender</option>
                          <option value="bisexual" <?php if(isset($user->modeles) && !empty($user->modeles->sex)) { echo $user->modeles->sex == "bisexual" ? 'selected' : ''; } ?>>Bisexual</option>
                        </select>
                    </div>
                    <!--<div class="form-group">-->
                    <!--  <label>Preferences:</label>-->
                    <!--    <input type="text" id="preferences" name="preferences" value="{{ isset($user->modeles) && !empty($user->modeles->preferences) ? $user->modeles->preferences : '' }}" required>-->
                    <!--</div>-->
                    <input type="hidden" id="preferences" name="preferences" value="preferences">
                    <div class="form-group">
                      <label>Bio:</label>
                      <textarea id="bio" maxlength="2000" col=10 row=5 name="bio" required>{{ isset($user->modeles) && !empty($user->modeles->bio) ? $user->modeles->bio : '' }}</textarea>
                    </div>
                    
                    <div class="form-group">
                      <label>Distance:</label>
                        <input type="number" id="distance" name="distance" value="{{ isset($user->modeles) && !empty($user->modeles->distance) ? $user->modeles->distance : '' }}" required>
                    </div>
                    <!--<div class="form-group">-->
                    <!--  <label>Marital Status:</label>-->
                    <!--    <input type="text" maxlength="10" id="marital_status" name="marital_status" value="{{ isset($user->modeles) && !empty($user->modeles->marital_status) ? $user->modeles->marital_status : '' }}" required>-->
                    <!--</div>-->
                    <input type="hidden" name="marital_status" value="single">
                    <div class="form-group">
                      <label>Lifestyle:</label>
                        <input type="text" maxlength="10" id="lifestyle" name="lifestyle" value="{{ isset($user->modeles) && !empty($user->modeles->lifestyle) ? $user->modeles->lifestyle : '' }}" required>
                    </div>

                    <div class="form-group">
                      <label>Body Structure:</label>
                        <input type="text" maxlength="15" id="body_structure" name="body_structure" value="{{ isset($user->modeles) && !empty($user->modeles->body_structure) ? $user->modeles->body_structure : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Price:</label>
                        <input type="number" maxlength="5" id="price" name="price" value="{{ isset($user->modeles) && !empty($user->modeles->price) ? $user->modeles->price : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Age:</label>
                        <input type="number" id="age" name="age" value="{{ isset($user->modeles) && !empty($user->modeles->age) ? $user->modeles->age : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Sexuality:</label>
                        <input type="text" maxlength="10" id="sexuality" name="sexuality" value="{{ isset($user->modeles) && !empty($user->modeles->sexuality) ? $user->modeles->sexuality : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Hair:</label>
                        <input type="text" maxlength="10" id="hair" name="hair" value="{{ isset($user->modeles) && !empty($user->modeles->hair) ? $user->modeles->hair : '' }}" required>
                    </div>
                    
                    <!--<div class="form-group">-->
                    <!--  <label>Dress:</label>-->
                    <!--    <input type="text" id="dress" name="dress" value="{{ isset($user->modeles) && !empty($user->modeles->dress) ? $user->modeles->dress : '' }}" required>-->
                    <!--</div>-->
                    
                    <div class="form-group">
                      <label>Ethnicity/Nationality:</label>
                        <input type="text" maxlength="20"  id="ethnicity" name="ethnicity" value="{{ isset($user->modeles) && !empty($user->modeles->ethnicity) ? $user->modeles->ethnicity : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Language:</label>
                        <input type="text" maxlength="10" id="language" name="language" value="{{ isset($user->modeles) && !empty($user->modeles->language) ? $user->modeles->language : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Height:</label>
                      <input type="number" id="height" name="height" value="{{ isset($user->modeles) && !empty($user->modeles->height) ? $user->modeles->height : '' }}">
                    </div>
                    
                    <div class="form-group">
                      <label>Bust:</label>
                      <input type="number" id="bust" name="bust" value="{{ isset($user->modeles) && !empty($user->modeles->bust) ? $user->modeles->bust : '' }}">
                    </div>
                    
                    <div class="form-group">
                      <label>Waist:</label>
                      <input type="number" id="waist" name="waist" value="{{ isset($user->modeles) && !empty($user->modeles->bust) ? $user->modeles->bust : '' }}">
                    </div>
                    
                    <!--<div class="form-group">-->
                    <!--  <label>Hips:</label>-->
                    <!--  <input type="number" id="hips" name="hips" value="{{ isset($user->modeles) && !empty($user->modeles->hips) ? $user->modeles->hips : '' }}">-->
                    <!--</div>-->
                    
                    <!--<div class="form-group">-->
                    <!--  <label>Shoe:</label>-->
                    <!--  <input type="number" id="shoe" name="shoe" value="{{ isset($user->modeles) && !empty($user->modeles->shoe) ? $user->modeles->shoe : '' }}">-->
                    <!--</div>-->
                    
                    <div class="form-group">
                      <label>Eyes:</label>
                      <input type="text" maxlength="10" id="eyes" name="eyes" value="{{ isset($user->modeles) && !empty($user->modeles->eyes) ? $user->modeles->eyes : '' }}">
                    </div>
                    
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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


