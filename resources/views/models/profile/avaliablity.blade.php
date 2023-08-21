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
            <form name="update_user" method="POST" enctype="multipart/form-data" action="{{url('model/availability/update/'.encrypt($modeldata->user_id))}}">
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
				<div class="availability">
					<div class="photos">
						<h3>Availability</h3>
						<p class="availability-first">
							First,select a schedule cycle.Then,uncheck the days you do not work. <br> On the
							days you work,enter the relevant times for that day!
						</p>
						<p>7day schedule will repeat the same week roster.</p>
						<p>14 day schedule will repeat a fortnights set roster.</p>
						<p>28 day schedule to show random availability.</p>
						<p>You can change your availability at any time.</p>
						<div class="timetable-outlook">
							<h5>Timetable Outlook</h5>
							<div>
								  <input type="radio" id="html" name="fav_language" value="HTML">
								  <label for="html">7 day schedule</label><br>
								  <input type="radio" id="css" name="fav_language" value="CSS">
								  <label for="css">14 day schedule</label><br>
								  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
								  <label for="javascript">28 day schedule</label>
							</div>
						</div>
						<div class="availability-legend">
							<h5>Legend</h5>
							<a href="#" class="btn">Indicates Today</a>
						</div>
						<div class="availability-week1">

							<h5>Week 1</h5>
							<table id="customers">

								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_monday" type="checkbox"
													name="availability_monday" value="monday" checked="checked">&nbsp;<label
													for="availability_monday">Monday
												</label>
											</div>
											<!-- <p>13/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="monday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="monday_time_end" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="monday_till_late" type="checkbox"
													name="monday_till_late">&nbsp;<label
													for="monday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="monday_all_day" type="checkbox"
													name="monday_all_day">&nbsp;<label
													for="all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="monday_by_appointment" type="checkbox"
													name="monday_by_appointment">&nbsp;<label for="monday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_tuesday" type="checkbox"
													name="availability_tuesday" checked="checked">&nbsp;<label
													for="availability_tuesday">Tuesday
												</label>
											</div>
											<!-- <p>14/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="tuesday_time_start" type="datetime-local">
											<p>till</p><input name="tuesday_time_end" class="set-rates-input" type="datetime-local" >
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="tuesday_till_late" type="checkbox"
													name="tuesday_till_late">&nbsp;<label
													for="tuesday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="tuesday_all_day" type="checkbox"
													name="tuesday_all_day">&nbsp;<label
													for="tuesday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="tuesday_by_appointment" type="checkbox"
													name="tuesday_by_appointment">&nbsp;<label for="tuesday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg dark-pink">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_wednesday" type="checkbox"
													name="availability_wednesday" checked="checked">&nbsp;<label
													for="availability_wednesday">Wednesday
												</label>
											</div>
											<!-- <p>15/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="wednesday_time_start" type="datetime-local">
											<p>till</p><input name="wednesday_time_start" class="set-rates-input" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="wednesday_till_late" type="checkbox"
													name="wednesday_till_late">&nbsp;<label
													for="wednesday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="wednesday_all_day" type="checkbox"
													name="wednesday_all_day">&nbsp;<label
													for="wednesday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="wednesday_by_appointment" type="checkbox"
													name="wednesday_by_appointment">&nbsp;<label for="wednesday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_thursday" type="checkbox"
													name="availability_thursday" checked="checked">&nbsp;<label
													for="availability_thursday">Thursday
												</label>
											</div>
											<!-- <p>16/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="thursday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="thursday_time_start" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="thuresday_till_late" type="checkbox"
													name="thuresday_till_late">&nbsp;<label
													for="thuresday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="thuresday_all_day" type="checkbox"
													name="thuresday_all_day">&nbsp;<label
													for="thuresday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="thuresday_by_appointment" type="checkbox"
													name="thuresday_by_appointment">&nbsp;<label for="thuresday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_friday" type="checkbox"
													name="availability_friday" checked="checked">&nbsp;<label
													for="availability_friday">Friday
												</label>
											</div>
											<p>17/02/2023</p>
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="friday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="friday_time_end" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="friday_till_late" type="checkbox"
													name="friday_till_late">&nbsp;<label
													for="friday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="friday_all_day" type="checkbox"
													name="friday_all_day">&nbsp;<label
													for="friday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="friday_by_appointment" type="checkbox"
													name="friday_by_appointment">&nbsp;<label for="friday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_saturday" type="checkbox"
													name="availability_saturday" checked="checked">&nbsp;<label
													for="availability_saturday">Saturday
												</label>
											</div>
											<!-- <p>18/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="saturday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="saturday_time_start" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="saturday_till_late" type="checkbox"
													name="saturday_till_late">&nbsp;<label
													for="saturday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="saturday_all_day" type="checkbox"
													name="saturday_all_day">&nbsp;<label
													for="saturday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="saturday_by_appointment" type="checkbox"
													name="saturday_by_appointment">&nbsp;<label for="saturday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>
								<tr class="line-tr-bg">
									<td class="monday-bg">
										<div class="availability-monday">
											<div class="checkboxforcategorisation">
												<input id="availability_sunday" type="checkbox"
													name="availability_sunday" checked="checked">&nbsp;<label
													for="availability_sunday">Sunday
												</label>
											</div>
											<!-- <p>19/02/2023</p> -->
										</div>
									</td>
									<td class="am-pm">
										<div class="availability-monday-input">
											<input class="set-rates-input" name="sunday_time_start" type="datetime-local">
											<p>till</p><input class="set-rates-input" name="sunday_time_start" type="datetime-local">
										</div>

									</td>
									<td class="availability-monday-checkbox-bg">
										<div class="availability-monday-checkbox">
											<div class="checkboxforcategorisation">
												<input id="sunday_till_late" type="checkbox"
													name="sunday_till_late">&nbsp;<label
													for="sunday_till_late">Till late
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="sunday_all_day" type="checkbox"
													name="sunday_all_day">&nbsp;<label
													for="sunday_all_day">All day
												</label>
											</div>
											<div class="checkboxforcategorisation">
												<input id="sunday_by_appointment" type="checkbox"
													name="sunday_by_appointment">&nbsp;<label for="sunday_by_appointment">By
													appointment
												</label>
											</div>
										</div>
									</td>
									<td></td>

								</tr>

							</table>

						</div>
					</div>
				</div>
				<div class="independent-packages">
					<h3>Independent Packages</h3>
					<div class="independent-packages-content">
						<p>All independent packages have 24/7 access to our <b>'Ugly Mugs' database.</b></p>
						<p>the ability to <b>Show/Hide your profile</b> at any time. Great for when you are
							taking a break.</p>
						<p>Note:If you <b>purchase multiple account periods</b> for any featured package in one
							checkout, your featured ad will be <b>automatically boost</b> to the top at the
							start of each new account period cycle.</p>
						<p>Last updated:01:02:2023</p>
						<a href="#">Download independent packages image</a>
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


