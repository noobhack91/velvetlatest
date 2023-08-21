@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Agency</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Agency v1</li>
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
            <form name="update_user" method="POST" enctype="multipart/form-data" action="{{url('admin/agency/update/'.encrypt($user->id))}}">
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
                        <input maxlength="25" type="text" id="name" name="name" value="{{ isset($user) && !empty($user->name) ? $user->name : '' }}" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Email:</label>
                        <input type="email" id="Email" name="email" value="{{ isset($user) && !empty($user->email) ? $user->email : '' }}" required>
                    </div>

                    <div class="form-group">
                      <label>Profile Photo:</label>
                     
                        <img height="200" width="200" src="{{ isset($user->UserAgency) && !empty($user->UserAgency->image_name) ? asset('images/'.$user->UserAgency->image_name) : asset('images/no-image.png') }}">
                        
                    </div>

                    <div class="form-group">
                      <label>Profile Photo:</label>
                        <input type="file" name="profile_photo">
                        
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


