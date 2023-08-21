@extends('backend_layout.master')
@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Base Location</h1>
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
            <form name="update_user" method="POST"  action="{{url('model/base_location/update/'.encrypt($modeldata->user_id))}}">
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
                <div class="custom-dk-location">
                <div class="tab">
					<div class="profile-text">
						<h3>Base Location</h3>
						<p>Start typing the City or Suburb and choose a Location from the drop down within your
							State/s.</p>
						<p>Set your in-call and/or outcall rates plus Rates Extras for this location then click
							Next/Save for that location.</p>
						<p><b>Extra Locations </b>and <b>Touring dates </b>can be added later.</p>
						<h4 class="set-loaction">Set Location</h4>

						<div class="base-location-form">
                            <div class="custom-d-form">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div>
                                            <div class="form-group row">
											<label for="staticEmail" class="col-sm-3 col-form-label">Suburb</label>
											<div class="col-sm-9 padding-left-right">
												<input class="form-control form-control-lg" value="{{ isset($modeldata->suburb) && !empty($modeldata->suburb) ? $modeldata->suburb : '' }}" name="suburb" maxlength="20" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="staticEmail"
												class="col-sm-3 col-form-label">Postcode</label>
											<div class="col-sm-9 padding-left-right">
												<input class="form-control form-control-lg" maxlength="10" name="postcode" type="number" value="{{ isset($modeldata->postcode) && !empty($modeldata->postcode) ? $modeldata->postcode : '' }}">

											</div>
										</div>


                                        <div class="form-group row">
                                            <label for="search-input" class="col-sm-3 col-form-label">Select Location:</label>
                                            <div class="col-sm-9 padding-left-right">

                                            <select name="selectedCity">
                                                <option>Select Location</option>

                                                @foreach($pages as $key=>$city)
                                                <option value="{{$city->page_name}}" <?php if(isset($modeldata) && !empty($modeldata->street_address)) { echo $modeldata->street_address == $city->page_name ? 'selected' : ''; } ?>>{{ $city->page_name}}</option>
                                                @endforeach

                                            </select>
                                          </div>
                                        </div>

										</div>
                                            <div class="base-location-form-state">
                                                <div class="form-group row">
                                                    <label for="staticEmail"
                                                        class="col-sm-3 col-form-label">State</label>
                                                    <div class="col-sm-9 padding-left-right">
                                                        <select name="state">
    												    @if(isset($states))
                                                            @foreach($states as $k=>$state)
                                                              <option value="{{$state->name}}" <?php if(isset($modeldata) && !empty($modeldata->state)) { echo $modeldata->state == $state->name ? 'selected' : ''; } ?>>{{ $state->name}}</option>
                                                            @endforeach
                                                         @endif

												        </select>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
						</div>
						<div class="set-rates">
							<h4 class="set-loaction">Set Rates</h4>
							<div class="row">
								<div class=" col-sm-12 col-md-6">
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
												<td><input class="set-rates-input" name="fifteen_min_incall" value="{{ isset($modeldata->fifteen_min_incall) && !empty($modeldata->fifteen_min_incall) ? $modeldata->fifteen_min_incall : '' }}" type="number" maxlength="3"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="fifteen_min_outcall" value="{{ isset($modeldata->fifteen_min_outcall) && !empty($modeldata->fifteen_min_outcall) ? $modeldata->fifteen_min_outcall : '' }}" type="number" maxlength="3"></td>
											</tr>
											<tr>
												<td class="td-padding-right">30 mins</td>
												<td><input class="set-rates-input" name="thirteen_min_incall" value="{{ isset($modeldata->thirteen_min_incall) && !empty($modeldata->thirteen_min_incall) ? $modeldata->thirteen_min_incall : '' }}" type="number" maxlength="3"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="thirteen_min_outcall" value="{{ isset($modeldata->thirteen_min_outcall) && !empty($modeldata->thirteen_min_outcall) ? $modeldata->thirteen_min_outcall : '' }}" type="number" maxlength="3"></td>
											</tr>
											<tr>
												<td class="td-padding-right">45 mins</td>
												<td><input class="set-rates-input" name="fourtyfive_min_incall" value="{{ isset($modeldata->fourtyfive_min_incall) && !empty($modeldata->fourtyfive_min_incall) ? $modeldata->fourtyfive_min_incall : '' }}" type="number" maxlength="3"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="fourtyfive_min_outcall" value="{{ isset($modeldata->fourtyfive_min_outcall) && !empty($modeldata->fourtyfive_min_outcall) ? $modeldata->fourtyfive_min_outcall : '' }}" type="number" maxlength="3"></td>

											</tr>
											<tr>
												<td class="td-padding-right">1 hr</td>
												<td><input class="set-rates-input" name="hour_one_incall" value="{{ isset($modeldata->hour_one_incall) && !empty($modeldata->hour_one_incall) ? $modeldata->hour_one_incall : '' }}" type="number" maxlength="3"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="hour_one_outcall" type="number" maxlength="3" value="{{ isset($modeldata->hour_one_outcall) && !empty($modeldata->hour_one_outcall) ? $modeldata->hour_one_outcall : '' }}"></td>

											</tr>
											<tr>
												<td class="td-padding-right">1.5 hr</td>
												<td><input class="set-rates-input" name="onehalf_incall" value="{{ isset($modeldata->onehalf_incall) && !empty($modeldata->onehalf_incall) ? $modeldata->onehalf_incall : '' }}" type="number" maxlength="3"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="onehalf_outcall" value="{{ isset($modeldata->onehalf_outcall) && !empty($modeldata->onehalf_outcall) ? $modeldata->onehalf_outcall : '' }}" type="number" maxlength="3"></td>

											</tr>
											<tr>
												<td class="td-padding-right">2 hrs</td>
												<td><input class="set-rates-input" name="twohour_incall" value="{{ isset($modeldata->twohour_incall) && !empty($modeldata->twohour_incall) ? $modeldata->twohour_incall : '' }}" type="number" maxlength="3"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="twohour_outcall" value="{{ isset($modeldata->twohour_outcall) && !empty($modeldata->twohour_outcall) ? $modeldata->twohour_outcall : '' }}" type="number" maxlength="3"></td>

											</tr>
											<tr>
												<td class="td-padding-right">3 hrs</td>
												<td><input class="set-rates-input" name="threehour_incall" value="{{ isset($modeldata->threehour_incall) && !empty($modeldata->threehour_incall) ? $modeldata->threehour_incall : '' }}" type="number" maxlength="3"></td>
												<td class="dash">-</td>
												<td><input class="set-rates-input" name="threehour_call" value="{{ isset($modeldata->threehour_call) && !empty($modeldata->threehour_call) ? $modeldata->threehour_call : '' }}" type="number" maxlength="3"></td>

											</tr>

										</table>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-8">
									<div class="set-rates-right-rates-extra">
										<table>
											<tr>
												<th>Rates Extra</th>
											</tr>
										</table>
										<div class="editButtons">
										<textarea name="ratesextra" id="rateseditor">{{ isset($modeldata->ratesextra) && !empty($modeldata->ratesextra) ? $modeldata->ratesextra : '' }}</textarea>
										</div>
									</div>
								</div>
							</div>
						 </div>
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
@endsection


