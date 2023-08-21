@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Blog</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
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
            <form name="add_blog" method="POST" enctype="multipart/form-data" action="{{url('admin/createblog')}}">
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
                      <label>Title:</label>
                        <input maxlength="100" type="text" id="name" name="name" value="{{old('name')}}" required>
                    </div>
                    <div class="form-group">
                      <label>Profile Photo:</label>
                        <input type="file" name="blog_photo" required>
                    </div>
                    <div class="form-group">
 <label>Description:</label>
                      <textarea class="ckeditor form-control"   maxlength="2000" id="description" col=10 row=5 name="description" required>{{old('description')}}</textarea>
                    </div>


            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="my-tt-button">
        <div class="row">
          <div class="col-12">
            <!--<a href="#" class="btn btn-secondary">Cancel</a>-->
            <input type="submit" value="Add Blog" class="btn btn-success">
          </div>
        </div>
    </form>
</div>

                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('description');
    });
</script>
@endsection
