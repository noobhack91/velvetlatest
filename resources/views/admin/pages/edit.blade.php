@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Page v1</li>
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
            <form name="update_user" method="POST" enctype="multipart/form-data" action="{{url('admin/page/update/'.encrypt($page->id))}}">
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
                        <input type="text" id="name" name="name" value="{{ isset($page) && !empty($page->page_name) ? $page->page_name : '' }}" required>
                    </div>
                    <div class="form-group">
                      <label>Location:</label>
                        <input type="text" id="location" name="location" value="{{ isset($page) && !empty($page->location) ? $page->location : '' }}" required>
                    </div>

                    <div class="form-group">
                      <label>Meta Title:</label>
                        <input type="text" id="meta_title" name="meta_title" value="{{ isset($page) && !empty($page->meta_title) ? $page->meta_title : '' }}" required>
                    </div>

                    <div class="form-group">
                      <label>Meta Description:</label>
                        <textarea id="description" name="description" required> {{ isset($page) && !empty($page->meta_description) ? $page->meta_description : '' }}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Content:</label>
                            <textarea class="ckeditor form-control" name="content" required>
                              <?php
                                if(isset($page) && !empty($page->content)){
                                  echo $page->content;

                                } 
                                ?>
                            </textarea>
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
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection


