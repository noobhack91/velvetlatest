@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Model</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Model</li>
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
            <form name="add_user" method="POST" enctype="multipart/form-data" action="{{url('admin/createmodel')}}">
            {{csrf_field()}}
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
                        <input maxlength="25" type="text" id="name" name="name" value="{{old('name')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Email:</label>
                        <input type="email" id="Email" name="email" value="{{old('email')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Phone:</label>
                        <input type="number" id="phone" name="phone" value="{{old('phone')}}" required>
                    </div>
                    <div class="form-group">
                      <label>Location:</label>
                        <input maxlength="50" type="text" id="street_address" name="street_address" value="{{old('street_address')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Profile Photo:</label>
                        <input type="file" name="profile_photo" required>
                        
                    </div>
                    <div class="form-group">
                      <label>Upload Gallary:</label>
                        <input type="file" name="gallary[]" multiple>
                        
                    </div>
                    <div class="form-group">
                      <label>City:</label>
                        <input maxlength="15" type="text" id="city" value="{{old('city')}}" name="city" required>
                    </div>
                    <div class="form-group">
                      <label>State:</label>
                        <input maxlength="15" type="text" id="state" name="state" value="{{old('state')}}" required>
                    </div>
                    <div class="form-group">
                      <label>Pin/Zip Code:</label>
                        <input type="number" id="zip" name="zip" value="{{old('zip')}}" required>
                    </div>
                    <div class="form-group">
                      <label>Sex</label>
                        <select name="sex" required>
                          <option value="">Select Sex</option>
                          <option value="male" {{ old('sex') == "male" ? 'selected' : '' }}>Male</option>
                          <option value="female" {{ old('sex') == "female" ? 'selected' : '' }}>Female</option>
                          <option value="Transgender" {{ old('sex') == "transgender" ? 'selected' : '' }}>Transgender</option>
                          <option value="bisexual" {{ old('sex') == "bisexual" ? 'selected' : '' }}>Bisexual</option>
                        </select>
                    </div>
                    <!-- <div class="form-group">-->
                    <!--  <label>Preferences:</label>-->
                    <!--  <input type="text" id="preferences" name="preferences" value="{{old('preferences')}}" required>-->
                    <!--</div>-->
                    <input type="hidden" id="preferences" name="preferences" value="preferences">
                    <div class="form-group">
                      <label>Bio:</label>
                      <textarea maxlength="2000" id="bio" col=10 row=5 name="bio" required>{{old('bio')}}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Distance:</label>
                      <input type="number" id="distance" name="distance" value="{{old('distance')}}" required>
                    </div>

                    <!--<div class="form-group">-->
                    <!--  <label>Marital Status:</label>-->
                    <!--  <input maxlength="10" type="text" id="marital_status" name="marital_status" value="{{old('marital_status')}}" required>-->
                    <!--</div>-->
                    <input type="hidden" id="marital_status" name="marital_status" value="single">
                    <div class="form-group">
                      <label>Lifestyle:</label>
                      <input maxlength="10" type="text" id="lifestyle" name="lifestyle" value="{{old('lifestyle')}}" required>
                    </div>
                    <div class="form-group">
                      <label>Body Structure:</label>
                      <input maxlength="15" type="text" id="body_structure" name="body_structure" value="{{old('body_structure')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Price:</label>
                      <input type="number" id="price" name="price" value="{{old('price')}}" required>
                    </div>
                    
                     <div class="form-group">
                      <label>Age:</label>
                      <input type="number" id="age" name="age" value="{{old('age')}}" required>
                    </div>
                    
                    
                    <div class="form-group">
                      <label>Sexuality:</label>
                      <input maxlength="10" type="text" id="sexuality" name="sexuality" value="{{old('sexuality')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Hair:</label>
                      <input maxlength="10" type="text" id="hair" name="hair" value="{{old('hair')}}" required>
                    </div>
                    
                    <!--<div class="form-group">-->
                    <!--  <label>Dress:</label>-->
                    <!--  <input type="text" id="dress" name="dress" value="{{old('dress')}}" required>-->
                    <!--</div>-->
                    
                     <div class="form-group">
                      <label>Ethnicity/Nationality:</label>
                      <input maxlength="20" type="text" id="ethnicity" name="ethnicity" value="{{old('ethnicity')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Language:</label>
                      <input maxlength="10" type="text" id="language" name="language" value="{{old('language')}}" required>
                    </div>
                    
                    
                    <div class="form-group">
                      <label>Height:</label>
                      <input type="number" id="height" name="height" value="{{old('height')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Bust:</label>
                      <input type="number" id="bust" name="bust" value="{{old('bust')}}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Waist:</label>
                      <input type="number" id="waist" name="waist" value="{{old('waist')}}" required>
                    </div>
                    
                    <!--<div class="form-group">-->
                    <!--  <label>Hips:</label>-->
                    <!--  <input type="number" id="hips" name="hips" value="{{old('hips')}}" required>-->
                    <!--</div>-->
                    
                    <!--<div class="form-group">-->
                    <!--  <label>Shoe:</label>-->
                    <!--  <input type="number" id="shoe" name="shoe" value="{{old('shoe')}}" required>-->
                    <!--</div>-->
                    
                    <div class="form-group">
                      <label>Eyes:</label>
                      <input maxlength="10" type="text" id="eyes" name="eyes" value="{{old('eyes')}}" required>
                    </div>
  
                   
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="my-tt-button">
        <div class="row">
          <div class="col-12">
            <!--<a href="#" class="btn btn-secondary">Cancel</a>-->
            <input type="submit" value="Add Model" class="btn btn-success">
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


