@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Customer</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Customers</li>
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
            <form name="add_user" method="POST" enctype="multipart/form-data" action="{{url('admin/create')}}">
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
                      <label>Interests:</label>
                      <textarea maxlength="2000" id="interests" col=10 row=5 name="interests" required>{{old('interests')}}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Distance:</label>
                      <input type="number" id="distance" name="distance" value="{{old('distance')}}" required>
                    </div>

                    <!--<div class="form-group">-->
                    <!--  <label>Marital Status:</label>-->
                    <!--  <input maxlength="10" type="text" id="marital_status" name="marital_status" value="{{old('marital_status')}}" required>-->
                    <!--</div>-->
                    <input type="hidden" name="marital_status" value="single">
                    <div class="form-group">
                      <label>Lifestyle:</label>
                      <input maxlength="10" type="text" id="lifestyle" name="lifestyle" value="{{old('lifestyle')}}" required>
                    </div>
 
                   
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="my-tt-button">
        <div class="row">
          <div class="col-12">
            <!--<a href="#" class="btn btn-secondary">Cancel</a>-->
            <input type="submit" value="Add Customer" class="btn btn-success">
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


