@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Multiple Cheques</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cheque v1</li>
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
            <form name="multiple_file_cheque" id="multiple_file_cheque" method="POST" enctype="multipart/form-data">
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
                      <label>Import Cheque:</label>
                        <input type='file' name='file[]' required multiple>
                    </div>
                    
                    <div>
                    
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="my-tt-button">
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Upload" class="btn btn-success">
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


