@extends('pages.master')

@section('content')


<section class="ds section_padding_70">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="big topmargin_0 bottommargin_30">Photo Session Appointment</h2>
							<p class="fontsize_20 maxwidth_570 inline-block bottommargin_40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="calendar appointment-calendar">
								<div class="calendar-header text-center">
									<a href="#" class="prev pull-left">
										<i class="rt-icon2-angle-left"></i>
									</a>
									<h2 class="inline-block">December 2016</h2>
									<a href="#">Back to November</a>
									<a href="#" class="next pull-right">
										<i class="rt-icon2-angle-right"></i>
									</a>
								</div>
								<div class="week-days">
									<div class="sunday">Sun</div>
									<div class="monday">Mon</div>
									<div class="tuesday">Tue</div>
									<div class="wednesday">Wed</div>
									<div class="thursday">Thu</div>
									<div class="friday">Fri</div>
									<div class="saturday">Sat</div>
								</div>
								<div class="month-box">
									<div class="week-row">
										<div class="day-cell not-cur-month">
											<span class="day-date">28</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">29</span>
										</div>
										<div class="day-cell">
											<span class="day-date">1</span>
										</div>
										<div class="day-cell">
											<span class="day-date">2</span>
										</div>
										<div class="day-cell">
											<span class="day-date">3</span>
										</div>
										<div class="day-cell">
											<span class="day-date">4</span>
										</div>
										<div class="day-cell">
											<span class="day-date">5</span>
										</div>
									</div>
									<div class="week-row">
										<div class="day-cell">
											<span class="day-date">6</span>
										</div>
										<div class="day-cell">
											<span class="day-date">7</span>
										</div>
										<div class="day-cell">
											<span class="day-date">8</span>
										</div>
										<div class="day-cell">
											<span class="day-date">9</span>
										</div>
										<div class="day-cell">
											<span class="day-date">10</span>
										</div>
										<div class="day-cell">
											<span class="day-date">11</span>
										</div>
										<div class="day-cell">
											<span class="day-date">12</span>
										</div>
									</div>
									<div class="week-row selected-row">
										<div class="day-cell">
											<span class="day-date">13</span>
										</div>
										<div class="day-cell">
											<span class="day-date">14</span>
										</div>
										<div class="day-cell">
											<span class="day-date">15</span>
										</div>
										<div class="day-cell">
											<span class="day-date">16</span>
										</div>
										<div class="day-cell selected-day">
											<span class="day-date">17</span>
										</div>
										<div class="day-cell">
											<span class="day-date">18</span>
										</div>
										<div class="day-cell">
											<span class="day-date">19</span>
										</div>
									</div>
									<div class="appointment-list">
										<p class="grey bottommargin_25">Available Appointment:</p>
										<ul>
											<li class="unavailable">
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>0 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button inverse">Unavailable</a>
												</div>
											</li>
											<li class="unavailable">
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>0 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button inverse">Unavailable</a>
												</div>
											</li>
											<li class="unavailable">
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>0 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button inverse">Unavailable</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>1 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>3 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>5 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>5 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>4 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
										</ul>
									</div>
									<div class="week-row">
										<div class="day-cell">
											<span class="day-date">20</span>
										</div>
										<div class="day-cell">
											<span class="day-date">21</span>
										</div>
										<div class="day-cell">
											<span class="day-date">22</span>
										</div>
										<div class="day-cell">
											<span class="day-date">23</span>
										</div>
										<div class="day-cell">
											<span class="day-date">24</span>
										</div>
										<div class="day-cell">
											<span class="day-date">25</span>
										</div>
										<div class="day-cell">
											<span class="day-date">26</span>
										</div>
									</div>
									<div class="week-row">
										<div class="day-cell">
											<span class="day-date">27</span>
										</div>
										<div class="day-cell">
											<span class="day-date">28</span>
										</div>
										<div class="day-cell">
											<span class="day-date">29</span>
										</div>
										<div class="day-cell">
											<span class="day-date">30</span>
										</div>
										<div class="day-cell">
											<span class="day-date">31</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">1</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">2</span>
										</div>
									</div>
									<div class="week-row">
										<div class="day-cell not-cur-month">
											<span class="day-date">3</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">4</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">5</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">6</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">7</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">8</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">9</span>
										</div>
									</div>
								</div>
							</div>

							<div class="flexslider banner-slider">
								<ul class="slides">
									<li class="gradient_bg_goriz">
										<div class="bg_overlay"></div>
										<img src="images/banner_slide_01.jpg" alt="">
										<div class="media-links">
											<a class="abs-link" href="#"></a>
										</div>
									</li>
									<li class="gradient_bg_goriz">
										<div class="bg_overlay"></div>
										<img src="images/banner_slide_02.jpg" alt="">
										<div class="media-links">
											<a class="abs-link" href="#"></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
 @endsection

           