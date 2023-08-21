@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Profile Text</h1>
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
            <form name="update_user" method="POST" enctype="multipart/form-data" action="{{url('model/profile_text/update/'.encrypt($modeldata->user_id))}}">
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
							<div class="profile-text-dk">
								<div class="sec-title">
									<label for="title" class="title-label">Title:</label>
									<input type="text" class="title-input" maxlength="100" name="profile_text" value="{{ isset($modeldata->title) && !empty($modeldata->title) ? $modeldata->title : '' }}">
								</div>
								<div class="description">
									<label for="title" class="title-label">Description:</label>
									<textarea name="content" maxlength="650" id="editor">{{ isset($modeldata->description) && !empty($modeldata->description) ? $modeldata->description : '' }}</textarea>
								</div>
								<div class="description">
									<label for="title" class="title-label">My Reviews:</label>
                                    <textarea name="reviews" id="revieweditor">{{ isset($modeldata->review) && !empty($modeldata->review) ? $modeldata->review : '' }}</textarea>

								</div>
							</div>
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

@section('custom_js')

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
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
            console.log( 'successful' );
          })
          .catch( error => {
            console.error( 'faile' );
          });
</script>

@endsection
