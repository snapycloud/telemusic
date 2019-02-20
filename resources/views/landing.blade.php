<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		
		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
				
		<!-- TITLE -->
		<title>Telemusic</title>
			
		<!-- DESCRIPTION -->		
		<meta name="description" content="Responsive Parallax Event & Music Theme" />
		<meta name="keywords"  content="Event, Coming Soon, Concert, Conference, Counter, Exhibition, Festival, Landing Page, Music, One Page, Registration Form, Seminar, Subscription, Mailchimp" />
		<meta name="author" content="Multia-Studio" />

		<!-- STYLESHEETS -->
		<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet" >
		<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/schedule.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/gridgallery.css') }}" rel="stylesheet" type="text/css"  />
		<link href="{{ asset('assets/css/venobox.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('assets/css/panel.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/styles.css') }} " rel="stylesheet"/>
		<link href="{{ asset('assets/css/rtl.css') }} " rel="stylesheet"/>
		<link href="{{ asset('assets/css/queries.css') }}" rel="stylesheet"/>
	  
	  
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	
	</head>
	   
    <body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  
		
		<!-- <div class="preloader">
		<div class="status"></div>
		</div> -->
		
		
		
	  	<div class="header header-hide">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
				   <div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" 
						 data-target="#example-navbar-collapse">
						 <span class="sr-only">Toggle navigation</span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					  </button>
					   <a class="navbar-brand" data-scroll href="#sec_1"><img src="assets/img/logo.png" alt="logo"/></a>
				   </div>
				   <div class="collapse navbar-collapse" id="example-navbar-collapse">
					  <ul class="nav navbar-nav">
					  	<li><a href="#sec_1">صفحه اصلی</a></li>
						<li><a data-scroll href="#intro">درباره ما</a></li>
						<li><a data-scroll href="#responsive">رویداد‌های آنلاین</a></li>
						<li><a data-scroll href="#sponsers">حامیان</a></li>
						<li><a data-scroll href="#contact">تماس با ما</a></li>
					  </ul>
				   </div>
				</nav>
			</div>
		</div>
		<!--/HEADER-->
		
		<!--HOME-->		
		<section id="sec_1" class="autoheight">
			<div class="home-bg"></div>
			<div class="col-lg-12 landing-text-pos align-center">
				<!-- <h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">تله‌موزیک</h1> -->
				<img class="logo" alt="logo" src="assets/img/logo.png">
				<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">اولین رسانه تصویری اختصاصی موسیقی ایران</h1>
				<hr id="title_hr"/>
				<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">رویداد آنلاین، ۲۱ اسفند  ۱۳۹۷</p>
				<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="#swag">اکنون ثبت نام کن</a>
			</div>
		</section>
		<!--/HOME-->
		
		<!--ABOUT-->	
        <section class="intro text-center section-padding" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 align-center about">
						<h1 class="arrow text-right">درباره تله‌موزیک</h1>
						<hr>
						<p class="lead text-right">تله‌موزیک آینه جهان‌نمای دنیای موسیقی است؛ موجوعه‌ای بی‌نظیر از بهترین کنسرت‌ها، فیلم‌های مستند، موزیک ویدیوها، زندگی‌نامه چهره‌های مطرح موسیقی و تاریخ موسیقی ملل که همه آنها در یک اپلیکیشن و روی گوشی شما قابل دسترس است. در حال حاضر نسخه اندروید این اپلیکیشن به صورت آزمایشی منتشر شده است و به زودی نسخه آی‌اواس اپلیکیشن تله‌موزیک هم عرضه خواهد شد</p>
					</div>
				</div>
			</div>
        </section>
		<!--/ABOUT-->
        
       
        <!--FEATURES-->	
        <section class="features text-center" id="features">
			<div class="row">
				<div id="grid-gallery" class="grid-gallery">
					<section class="grid-wrap">
						<div class="grid-gal">						
							<figure class="block-hover 3d-gallery col-lg-3 col-sm-12">
								<a href="#"><img src="assets/img/gallery/gal-icn.png" alt="img1">
									<span>تصاویر</span>
								</a>                            
							</figure>
						</div> 
					</section>
					<!--grid wrap-->

					<!-- slideshow -->
					<!-- <section class="slideshow">
						<ul>
							<li>
								<figure>											
									<img src="assets/img/gallery/1.jpg" alt="img01"/>
									<figcaption>
										<hr/>
										<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>											
									<img src="assets/img/gallery/2.jpg" alt="img02"/>
									<figcaption>
										<hr/>
										<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="assets/img/gallery/3.jpg" alt="img03"/>
									<figcaption>
										<hr/>
										<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
									</figcaption>
								</figure>
							</li>

						</ul>
						<nav>
							<span class="nav-prev fa-chevron-left fa fa-2x "></span>
							<span class="nav-next fa-chevron-right fa fa-2x"></span>
							<span class="close nav-close"><i class="fa fa-times"></i></span>
						</nav>
					</section> -->
					<!-- /slideshow -->
				</div>
				<!-- /grid-gallery -->

				<div class="container col-lg-6 col-md-12 features-md">          
					<div class="row">
						<div class="col-md-12">
							<div class="features-wrapper">
								<div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="icon">
									  Android
									</div>
									<h2>برنامه اندروید</h2>
									<p>امکانات برنامه</p>
								</div>
							  
								<div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="icon">
									 IOS 
									</div>
									<h2>ای او اس اندروید</h2>
									<p>امکانات برنامه</p>
									
				
				
								</div>
							  
								<div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
									<div class="icon">
									  LIVE
									</div>
									<h2>پخش زنده رویداد موسیقی</h2>
									<p>امکانات برنامه</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Vimoe Video-->	
				<div class="grid-gal">
				  <figure class="block-hover vimeo-video col-lg-3 col-sm-12">
					<a class="venoboxvid" data-type="vimeo"  href="https://player.vimeo.com/video/75976293" target="_self">
                                     <!--<iframe src="https://player.vimeo.com/video/75976293" width="480" height="392" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
						<img src="assets/img/vdo-icn.png" alt="video_hover">
						<span>VIDEO</span>
					</a>
				  </figure>
				</div>

			</div><!--row ends here-->
        </section>
        <!--/FEATURES-->	
		
		<!--LINE UP-->        
        <section class="text-center section-padding" id="responsive">
			<div class="container wow animated fadeInLeft bottom-spacing">
				<div class="row">
					<div class="col-md-8 align-center wow animated fadeInLeft">
						<h1 class="arrow">LINE UP</h1><hr>
						<p>Lorem ipsum dolor sit amet, alia honestatis an qui, ne soluta nemore eripuit sed. Falli exerci aperiam ut his, prompta feugiat usu minimum delicata.</p>
					</div>
				</div>
			</div>
			
			<div class="container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">
				<div id="tabs-ui" class="tabs">
					<nav>
						<ul>
							<li><a href="#section-1"><span>Day 1</span></a></li>
							<li><a href="#section-2"><span>Day 2</span></a></li>
							<li><a href="#section-3"><span>Day 3</span></a></li>
							<li><a href="#section-4"><span>Day 4</span></a></li>
							<li><a href="#section-5"><span>Day 5</span></a></li>
						</ul>
					</nav>
					<div class="content">
						<section id="section-1">
							<div class="container">
								<div class="accordion">
									<div class="day">September 15, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Welcome speech and Overview<br/>
												<span class="name">Andrew Yang - </span>
												<span class="speaker-designaition">CEO, Microsoft</span>
											</div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
						</section>
						<section id="section-2">
							<div class="container">
								<div class="accordion">
									<div class="day">September 16, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Overview - Nisi elit consequat<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Aenean sollicitudin quis bibendum auctor<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Sagittis sem nibh id elit<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>
						<section id="section-3">
							<div class="container">
								<div class="accordion">
									<div class="day">September 17, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Welcome speech and Overview<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>
						<section id="section-4">
							<div class="container">
								<div class="accordion">
									<div class="day">September 18, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Overview - Nisi elit consequat<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Aenean sollicitudin quis bibendum auctor<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Sagittis sem nibh id elit<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>   
						</section>
						<section id="section-5">
							<div class="container">
								<div class="accordion">
									<div class="day">September 19, 2014</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">9:30am - 11:30am</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Welcome speech and Overview<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11:30am - 1:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">The Standardistas are lecturers in interactive design<br/><span class="name">Andrew Yang - </span><span class="speaker-designaition">CEO, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Catered Lunch<br/><span class="name">Sponsered </span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Proin gravida nibh vel velit auctor aliquet<br/><span class="name">Mary Doe - </span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												Venue: Auditorium 1
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. The Standardistas are lecturers in interactive design.
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</div>
        </section>
		
		
		<!-- Event social links and download-->
		<section class="event-download-social-link section-padding">
			<div class="col-lg-6 col-md-12 align-center event-download-padding">
				<a class="d-sch text-right" href="#" target="_blank"><i class="fa fa-download"></i>download schedule</a>
				<a class="fb " href="#" target="_blank"><i class="fa fa-facebook"></i>connect via facebook</a>
			</div>
		</section>
		<!--/SCHEDULE-->
       
		
		 <!--TICKETS-->        
		<section id="portfolio" class="portfolio text-center section-padding">
			<div class="container">
				<div class="row">
				  <div class="col-md-12">
					<h1 class="arrow">TICKETS</h1><hr><p>See what you get during the event. Lorem ipsum dolor sit amet, ne soluta nemore eripuit sed.</p>
				  </div>
				</div>
				<div class="row">
					<div class="pricing-wrap">                
						<ul class="slides">
							<li>
								<div class="col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
									<ul class="planContainer">
										<li class="title"><h2>$99</h2></li>
										<li class="price"><p>General</p></li>
										<li>
											<ul class="options">
												<li>2x option 1</li>
												<li>Free option 2</li>
												<li>Unlimited option 3</li>
												<li>Unlimited option 4</li>
												<li>1x option 5</li>
										   </ul>
										</li>
										<li class="button"><a data-scroll class="btn-effect" href="#swag">Book Now</a></li>
									</ul>             
								</div>
							  
								<div class="col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
									<ul class="planContainer">
										<li class="title"><h2 class="bestPlanTitle">$125</h2></li>
										<li class="price"><p class="bestPlanPrice">VIP</p></li>
										<li>
											<ul class="options">
												<li>2x option 1</li>
												<li>Free option 2</li>
												<li>Unlimited option 3</li>
												<li>Unlimited option 4</li>
												<li>1x option 5</li>
											</ul>
										</li>
										<li class="button"><a data-scroll class="bestPlanButton btn-effect" href="#swag">Book Now</a></li>
									</ul>
								</div>
								
								<div class="col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
									<ul class="planContainer">
										<li class="title"><h2>$100</h2></li>
										<li class="price"><p>SUPER VIP</p></li>
										<li>
											<ul class="options">
												<li>2x option 1</li>
												<li>Free option 2</li>
												<li>Unlimited option 3</li>
												<li>Unlimited option 4</li>
												<li>1x option 5</li>
										   </ul>
										</li>
										<li class="button"><a data-scroll class="btn-effect " href="#swag">Book Now</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.9s">
									<ul class="planContainer">
										<li class="title"><h2>$150</h2></li>
										<li class="price"><p>GROUP</p></li>
										<li>
											<ul class="options">
												<li>2x option 1</li>
												<li>Free option 2</li>
												<li>Unlimited option 3</li>
												<li>Unlimited option 4</li>
												<li>1x option 5</li>
										   </ul>
										</li>
										<li class="button"><a data-scroll class="btn-effect " href="#swag">Book Now</a></li>
									</ul>
								</div>
							</li>
						</ul>                
					</div>
				</div>
			</div>
        </section>
		<!--/PRICING-->
        
        <!--REGISTER FORM-->	
        <section id="swag" class="swag text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 align-center">
						<form id="nl-form" class="nl-form ">
							Hi! My name is 
							<input id="name" type="text" name="name" placeholder="Enter your name" data-subline="Enter your name"/>
							.
							I would like to book for the 
							<select id="field_1">
								<option value="1" selected>General</option>
								<option value="2">VIP</option>
								<option value="3">Super VIP</option>
								<option value="4">Group</option>
							</select> pack
							
							.
							Contact me on 
							<input id="email1" type="text" name="email1" placeholder="My Email address" data-subline="Enter your email address"/>									
							<div class="nl-submit-wrap">
								<button class="nl-submit btn-effect" type="submit" id="submit_btn">Submit</button>
							</div>				
							<div id="result"></div>
							<div class="nl-overlay"></div>
						</form>

							<div class="md-modal md-effect-9" id="modal-10">
							<div class="md-content padding-none">
								<div class="folio">
									
									<div class="sp-name disclaimer"><strong>Terms and Conditions</strong></div>
									<div class="sp-dsc disclaim-border">
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua.</li>
										<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
										<li>Excepteur sint occaecat cupidatat non proident.</li>
									</ul>
									</div>
									
									<button class="md-close"><i class="fa fa-times"></i></button>
								</div>
							</div>
						</div> 
						<div class="col-md-12 tc">Please read the<button class="md-trigger" data-modal="modal-10">Terms & Conditions</button>carefully.</div>
						<!-- the overlay element -->
						<div class="md-overlay"></div>
					</div>
				</div>
			</div>
        </section>
		<!-- /REGISTER FORM -->

       <!--SPONSORS-->	
        <div id="sponsers" class="ignite-cta text-center section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
						<h1 class="arrow">Our Sponsors</h1><hr>
						<p>Lorem ipsum dolor sit amet, alia honestatis an qui, ne soluta nemore eripuit sed. Falli exerci aperiam ut his, prompta feugiat usu minimum delicata.</p>
					</div>
					<!-- Jssor Slider Begin -->
					<div id="slider1_container" style=" ">
						<div class="inner_carousal" data-u="slides" style="">
							<div><img alt="sp1" src="assets/img/sponsor/sp1.png" /></div>
							<div><img alt="sp2" src="assets/img/sponsor/sp2.png" /></div>
							<div><img alt="sp3" src="assets/img/sponsor/sp3.png" /></div>
							<div><img alt="sp4" src="assets/img/sponsor/sp4.png" /></div>
							<div><img alt="sp5" src="assets/img/sponsor/sp5.png" /></div>
							<div><img alt="sp6" src="assets/img/sponsor/sp6.png" /></div>
							<div><img alt="sp7" src="assets/img/sponsor/sp7.png" /></div>
						</div>
					</div>
					<!-- Jssor Slider End -->
				</div>
			</div>
		</div>
		 <!-- /SPONSORS -->	

		<!--SUBSCRIBE-->	
        <section class="subscribe text-center">
			<div class="subscribe-overlay"></div>
			<div class="container wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
				<h1>Subscribe for newsletter</h1>
				<form action="notify-me.php.html" id="notifyMe" method="POST" class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">
					<div class="input-group col-lg-12 align-center">
					  <input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">
					  <button class="btn btn-default notify-button"><i class="fa fa-paper-plane"></i><span>Send</span></button>
					</div>
				</form>
			</div>
        </section>
		<!-- /SUBSCRIBE -->

		<!--CONTACT-->	
        <section class="text-center section-padding contact-wrap" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8 wow animated fadeInLeft align-center" data-wow-duration="1s" data-wow-delay="0.3s">
						<h1 class="arrow">Contact</h1><hr>
						<p>Lorem ipsum dolor sit amet, alia honestatis an qui, ne soluta nemore eripuit sed. Falli exerci aperiam ut his, prompta feugiat usu minimum delicata.</p>
					</div>
				</div>
				<div class="row contact-details">
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="light-box box-hover">
							<h2><span>Address</span></h2>
							<p>Level 5,<br> 245 Quigley Bvld,<br>Azuire</p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
						<div class="light-box box-hover">
							<h2><span>Phone</span></h2>
							<p>+61 9 211 3747<br>+61 3 075 8371</p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
						<div class="light-box box-hover">
							<h2><span>Email</span></h2>
							<p><a href="#">mievent@reach.fr</a><br><a href="#">support@reach.com</a><br><a href="#">contact@mievent.com</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<a id="get_directions" class="learn-more-btn btn-effect" href="#"><i class="fa fa-map-marker"></i><span>Get Directions</span></a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul class="social-buttons">
							<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
        </section>
		<!-- /CONTACT -->	

		<!--FOOTER-->	
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-center">
						<ul class="legals">
							<li><button class="md-trigger " data-modal="modal-11">Disclaimer</button></li>
							<li><a href="../../../../index.html">Made in Multia</a></li>
						</ul>
					</div>
					<div class="md-modal md-effect-9" id="modal-11">
						<div class="md-content padding-none">
							<div class="folio">
								<div class="sp-name disclaimer"><strong>Disclaimer</strong></div>
								<div class="sp-dsc disclaim-border">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									<br /><br />
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
								<button class="md-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
					</div> 
					<div class="md-overlay"></div>
				</div>
			</div>
        </footer>

		
		<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui-1.10.4.min.js"></script>
		
		<!--VIMEO VIDEO-->     
        <script type="text/javascript" src="assets/js/venobox.js"></script>

        <!--3D GALLERY-->
        <script type="text/javascript" src="assets/js/classie.grid.gallery.js"></script>
		<script type="text/javascript" src="assets/js/modernizr.gridgallery.js"></script>		
		<!-- <script type="text/javascript" src="assets/js/cbpGridGallery.js"></script> -->
 
		<script type="text/javascript" src="assets/js/classie.js" ></script>
		<script type="text/javascript" src="assets/js/modalEffects.js" ></script>
       
	    <script type="text/javascript" src="assets/js/nlform.js" ></script>
		<script>var nlform = new NLForm( document.getElementById( 'nl-form' ) );</script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>
        
		<!-- TEAM SLIDER  -->
		<script type="text/javascript" src="assets/js/jquery.flexslider.js" ></script>
		
		<!-- SCHEDULE TABS  -->
        <script type="text/javascript" src="assets/js/modernizr.js" ></script>
		<script type="text/javascript" src="assets/js/cbpFWTabs.js" ></script>		
		
		<!--SPONSOR SLIDER-->
		<script type="text/javascript" src="assets/js/jssor.core.js"></script>
		<script type="text/javascript" src="assets/js/jssor.utils.js"></script>
		<script type="text/javascript" src="assets/js/jssor.slider.js"></script>
		<script type="text/javascript" src="assets/js/sponsor_init.js"></script>
		
		<!-- SMOOTH SCROLL  -->
		<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
		
		<!-- NICE SCROLL  -->
		<script type="text/javascript" src="assets/js/jquery.nicescroll.js"></script>
		
		<!-- SUBSCRIPTION FORM  -->
		<script type="text/javascript" src="assets/js/notifyMe.js"></script>
		
		<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
		
		<!-- ANIMATION  -->
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		
		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init.js"></script>

    </body>
</html>