<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		
		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<meta name="csrf-token" value="{{ csrf_token() }}" />
				
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
	   
    <body   data-spy="scroll" data-target=".header" data-offset="80">
	  
		
			
		<!-- <div class="preloader">
		<div class="status"></div>
		</div> -->
		
		
		
	  	<div id="top" class="header header-hide">
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
					  	<li><a class="md-trigger data-scroll href="#" data-modal="modal-11">قوانین</a></li>
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
		


<div id="app">
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
				<div class="container col-lg-12 col-md-12 features-md">          
					<div class="row">
						<div class="col-md-12">
							<div class="features-wrapper">
								<div class="col-md-2 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="icon">
									  <a href="" class="btn btn-link"><img width="150px" src="{{ asset('assets/img/bazar.png') }}" alt=""></a>
									</div>
									<h2><a href="" class="btn btn-link">دانلود برنامه اندروید</a></h2>
								</div>
							  
								<div class="col-md-2 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="icon">
									 <a href="" class="btn btn-link"><img width="150px" src="{{ asset('assets/img/sib.png') }}" alt=""></a>
									</div>
									<h2><a href="" class="btn btn-link">دانلود برنامه ای او اس</a></h2>
				
								</div>
							  
								<div class="col-md-2 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
									<div class="icon">
									  LIVE
									</div>
									<h2><a href="#responsive" class="btn btn-link">پخش زنده رویداد موسیقی</a></h2>
								</div>


								<div class="col-md-6 wow animated fadeInUp" style="top: -25px" data-wow-duration="1s" data-wow-delay="0.9s">
									<img src="{{ asset('assets/img/telemusicmok.png') }}" alt="">
								</div

							</div>
						</div>
					</div>
				</div>
			</div><!--row ends here-->
        </section>
        <!--/FEATURES-->	
		
		<!--LINE UP-->        
        <section class="subscribe text-center section-padding" id="responsive">
			
			<event></event>




		
       
		
		 <!--TICKETS-->        
		<section id="portfolio" class="portfolio text-center section-padding">
			<div class="container">
				<div class="row">
				  <div class="col-md-12">
					<h1 class="arrow">اشتراک‌های محتوای تولیدی کاربران </h1><hr><p></p>
				  </div>
				</div>
				<div class="row">
					<div class="pricing-wrap">                
						<ul class="slides">
							<li>
								<div class="col-md-offset-3 col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
									<ul class="planContainer">
										<li class="title"><h2>رایگان</h2></li>
										<li class="button"><a data-scroll class="btn-effect" href="#swag">ثبت نام</a></li>
									</ul>             
								</div>
							  
								<div class=" col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
									<ul class="planContainer">
										<li class="title"><h2 class="bestPlanTitle">پیشرفته</h2></li>
										<li class="button"><a data-scroll class="btn-effect" href="#swag">ثبت نام</a></li>
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
						<form id="nl-form" class="nl-form " style="direction: rtl;">
							سلام، اسم من  
							<input id="name" type="text" name="name" placeholder="نام شما" data-subline="نام"/>
							<br>
							می خواهم از سرویس اشتراکی ثبت محتوا در تله موزیک استفاده کنم
							<br>
							انتخاب سرویس
							<select id="field_1">
								<option value="1" selected>رایگان</option>
								<option value="2">پیشرفته</option>
							</select> 
							<br>
							ایمیل من 
							<input id="email1" type="text" name="email" placeholder="ایمیل" data-subline="ایمیل"/>									
							<div class="nl-submit-wrap">
								<button class="nl-submit btn-effect" type="submit" id="submit_btn">ارسال درخواست</button>
							</div>				
							<div id="result"></div>
							<div class="nl-overlay"></div>
						</form>


						<div class="col-md-12 tc"><p>لطفا<button class="md-trigger" data-modal="modal-11"> شرایط و ضوابط</button>را با دقت مطالعه کنید.</p></div>
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
						<h1 class="arrow">حامیان معنوی و تجاری تله موزیک</h1><hr>
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

		<!--CONTACT-->	
        <section class="text-center section-padding contact-wrap" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8 wow animated fadeInLeft align-center" data-wow-duration="1s" data-wow-delay="0.3s">
						<h1 class="arrow">تماس با تله موزیک</h1><hr>
						<p>برای تماس با تله موزیک از راه‌های زیر با ما در ارتباط باشید.</p>
					</div>
				</div>
				<div class="row contact-details">
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="light-box box-hover">
							<h2><span>پست الکترونیک</span></h2>
							<p><a href="mailto:mehrtahacom@gmail.com" target="_top">mehrtahacom@gmail.com</a><br></p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
						<div class="light-box box-hover">
							<h2><span>شماره تماس‌ها</span></h2>
							<p>۰۲۱-۸۸۲۷۵۷۹۱<br>۰۲۱-۸۸۲۶۶۳۶۴</p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
						<div class="light-box box-hover">
							

							<h2><span>آدرس</span></h2>
							<p>تهران، خیابان گیشا<br> کوچه ۳۷ا، پلاک ۶۷</p>
						</div>
					</div>
				</div>

				{{-- <div class="row">
					<div class="col-md-12">
						<ul class="social-buttons">
							<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div> --}}
			</div>
        </section>
		<!-- /CONTACT -->	

		<!--FOOTER-->	
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-center">
						<ul class="legals">
							<li><button class="md-trigger " data-modal="modal-11">قوانین و شرایط استفاده</button></li>
						</ul>
					</div>
					<div class="md-modal md-effect-9" id="modal-11">
						<div class="md-content padding-none">
							<div class="folio">
								<div class="sp-name disclaimer"><strong>قوانین و شرایط استفاده</strong></div>
								<div class="sp-dsc disclaim-border">
									<p>قوانین بارگذاری ویدیو</p>
									<ul>
										<li>رعایت حقوق ناشر و مولف</li>
										<li>دلخراش و آزار دهنده نبودن</li>
										<li>عدم مغایرت با شئونات اخلاقی و عرف جامعه</li>
										<li>اهانت آمیز نبودن به مقامات سیاسی</li>
										<li>نداشتن موزیک و متن غیرمجاز</li>
										<li>عدم ایجاد تنش و التهاب سیاسی در سایت</li>
										<li>عدم تمسخر یک شهروند یا دسته‌ای از شهروندان</li>
										<li>اهانت آمیز نبودن به اقلیت‌های قومی و مذهبی</li>
									</ul>
									<br>
									<p>
									با استناد به ماده ۷۴ قانون تجارت الکترونیک مصوب ۱۷-۱۰-۱۳۸۲ مجلس شورای اسلامی و با توجه به اینکه سایت تله موزیک مصداق بستر مبادلات الکترونیکی صوتی و تصویری است، مسئولیت نقض حقوق تصریح شده مولفان در قانون فوق از قبیل تکثیر، اجرا و توزیع و یا هر گونه محتوای خلاف قوانین کشور ایران بر عهده کاربران است.
									<br /><br />
									پس از بارگذاری ویدیو، حقوق مربوط به انتشار، حذف و ویرایش ویدیوهای بارگذاری شده نزد تله موزیک محفوظ خواهد ماند.
									<br><br>
									سایت تله موزیک تابع کلیه قوانین موضوعه کشور، به خصوص قانون تجارت الکترونیک است. لذا نقض هر رفتاری که متضمن نقض هریک از قوانین کشور باشد مجرمانه تلقی شده و قابل پیگیری است .
									<br>
									نام کانال: پس از انتخاب نام کانال، چنانچه این نام مربوط به برندها و مارک‎های تجاری خاص و یا وبسایت‎های ثبت شده باشد، در صورت تماس نمایندگان رسمی این شخصیت‎های حقوقی، امتیاز استفاده از نام کانال پس از مکاتبه با دارنده کانال، به آن شخص اعطا خواهد شد.
									</p>
								</div>
								<button class="md-close"><i class="fa fa-times" style="margin-left: -25px;"></i> خروج</button>
							</div>
						</div>
					</div> 
					<div class="md-overlay"></div>
				</div>
			</div>
        </footer>
</div>
		
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
		<script type="text/javascript" src="assets/js/app.js"></script>

    </body>
</html>