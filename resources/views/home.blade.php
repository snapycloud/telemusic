@extends('layouts.app')

@section('header')
<header id="home" class="header text-white h-fullscreen text-center text-lg-right" style="background-image: url(../img/bg/32.jpg)">
  <div class="overlay opacity-80" style="background-image: linear-gradient(-45deg, rgba(25, 25, 25, 0.85) 0%, rgba(43, 28, 64, 0.66) 100%);"></div>
      <canvas class="constellation" data-color="rgba(255,255,255,0.7)" width="1920" height="1001"></canvas>
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-lg-6 ml-auto">
            <img class="mt-5" src="../img/telemusic.png" alt="img">
            <h1>تله‌موزیک</h1>
            <p class="lead mt-5 mb-8">اولین رسانه تصویری اختصاصی موسیقی ایران</p>
            <p class="gap-xy">
              <a class="btn btn-lg btn-round btn-outline-light mw-150" href="#">دربافت اپلیکیشن</a>
              <a class="btn btn-lg btn-round btn-light mw-150" href="#" data-toggle="modal" data-target="#modal-register">ثبت نام</a>
            </p>
          </div>

        </div>
      </div>
    </header>

@stop

@section('main')


<section class="section" >
        <div class="container">
          <header class="section-header">
            <h2>تماشا کنید</h2>
            <hr>
            <p class="lead">آنچه در تله موزیک خواهید دید</p>
          </header>


          <div class="row">
            <div class="col-md-12 mx-auto">

              <div class="video-wrapper rounded-lg">
                <div class="poster" style="background-image: url(../img/video/1.png)"></div>
                <button class="btn btn-circle btn-lg btn-danger"><i class="fa fa-play"></i></button>
                <video src="https://stream.telemusic.ir/5c192a5a99d396500/backup.mp4" poster="../img/video/1.png" controls=""></video>
              </div>

            </div>
          </div>

        </div>
      </section>



      <section class="section text-white overflow-hidden" style="background-image: linear-gradient(-45deg, rgb(0, 0, 0) 0%, rgba(10, 10, 10, 0.82) 100%);">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto mt-8 mt-md-0">
              <img src="../img/preview/phone-5.png" alt="..." data-aos="slide-up" class="aos-init aos-animate">
            </div>

            <div class="col-md-6 text-right">
              <h2>تله‌موزیک</h2>
              <p class="lead">اولین رسانه تصویری اختصاصی موسیقی ایران</p>
              <br>
              <div class="row">
                <form class="col-md-12 input-glass text-right" action="" method="post" target="_blank">
                  <div class="input-group">
                    {{-- <input type="text" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید"> --}}
                    <span class="input-group-prepend">
                      <button class="btn btn-glass btn-light" data-toggle="modal" data-target="#modal-register" type="button">عضویت در تله موزیک <i class="ti-arrow-left fs-9 ml-3"></i></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>

          </div>

        </div>
      </section>




{{-- 
<section class="section bg-gray">
        <div class="container">
          <div class="row gap-y">

            <div class="col-md-4">
              <div class="row">
                <div class="col-6">
                  <h4 class="lead-7 text-right counted" data-provide="countup" data-from="0" data-to="42">۲۰،۰۰۰</h4>
                </div>

                <div class="col-6">
                  <p class="small text-uppercase ls-2 mb-2">ویدئو‌ها</p>
                  <p><i class="icon-briefcase lead-4 mb-0"></i></p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="row">
                <div class="col-6">
                  <h4 class="lead-7 text-right counted" data-provide="countup" data-from="0" data-to="3500">۳،۵۰۰</h4>
                </div>

                <div class="col-6">
                  <p class="small text-uppercase ls-2 mb-2">کاربان محتوا</p>
                  <p><i class="icon-profile-male lead-4 mb-0"></i></p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="row">
                <div class="col-6">
                  <h4 class="lead-7 text-right counted" data-provide="countup" data-from="0" data-to="100" data-prefix="%">۱۰۰٪</h4>
                </div>

                <div class="col-6">
                  <p class="small text-uppercase ls-2 mb-2">رضایت</p>
                  <p><i class="icon-happy lead-4 mb-0"></i></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section> --}}


{{--       <section class="section py-7" style="background-image: linear-gradient(-45deg, rgb(0, 0, 0) 0%, rgba(43, 28, 64, 0.82) 100%);">
        <div class="container">
          <div class="row gap-y align-items-center">
            <div class="col-md-3 text-center text-md-right">
              <a class="btn btn-lg btn-round btn-light" href="#" data-toggle="modal" data-target="#modal-register">عضویت در تله موزیک</a>
            </div>
            <div class="col-md-9">
              <h4 class="mb-0 text-white text-center text-md-left">می خوای محتوای ویدئویی وارد کنی؟ از همین جا ثبت نام کن.</h4>
            </div>
          </div>
        </div>
      </section> --}}


      <section id="boxed" class="section">
        <div class="container" id="member">
          <header class="section-header">
            <h2>سروریس‌های اشتراکی</h2>
            <hr>
          </header>

          <div class="row">


            <div class="col-md-4 mx-auto">
              <div class="pricing-3 popular">
                <h6 class="plan-name">شخصی</h6>
                <h2 class="">رایگان</h2>
                <ul>
                  <li>محتوای موزیک</li>
                  <li>HLS</li>
                  <li>سرویس api</li>
                </ul>
                <br>
                <a class="btn btn-round btn-primary w-200" href="#" data-toggle="modal" data-target="#modal-register">عضویت</a>
              </div>
            </div>


            <div class="col-md-4 mx-auto">
              <div class="pricing-3 popular">
                <h6 class="plan-name">شرکتی</h6>
                <h2 class="">۱۹۹ هزار تومان</h2>
                <ul>
                  <li>محتوای موزیک</li>
                  <li>HLS</li>
                  <li>سرویس API</li>
                </ul>
                <br>
                <a class="btn btn-round btn-primary w-200" href="#" data-toggle="modal" data-target="#modal-register">عضویت</a>
              </div>
            </div>


          </div>


        </div>
      </section>



    <section class="section">
        <div class="container">
          <header class="section-header">
            <h2>با تله‌موزیک بهتر ببینید</h2>
            <hr>
            <p class="lead">تله‌موزیک آینه جهان‌نمای دنیای موسیقی است؛ موجوعه‌ای بی‌نظیر از بهترین کنسرت‌ها، فیلم‌های مستند، موزیک ویدیوها، زندگی‌نامه چهره‌های مطرح موسیقی و تاریخ موسیقی ملل که همه آنها در یک اپلیکیشن و روی گوشی شما قابل دسترس است. در حال حاضر نسخه اندروید این اپلیکیشن به صورت آزمایشی منتشر شده است و به زودی نسخه آی‌اواس اپلیکیشن تله‌موزیک هم عرضه خواهد شد</p>
          </header>


          <div class="row gap-y">

            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #78a300"><i class="icon-lightbulb lead-7"></i></p>
                <h6 class="mb-0"><strong>Support</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #eb4a62"><i class="icon-book-open lead-7"></i></p>
                <h6 class="mb-0"><strong>Guide</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #f69a3e"><i class="icon-chat lead-7"></i></p>
                <h6 class="mb-0"><strong>Chat</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #f0c93e"><i class="icon-mic lead-7"></i></p>
                <h6 class="mb-0"><strong>Talk</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #37b8af"><i class="icon-envelope lead-7"></i></p>
                <h6 class="mb-0"><strong>Message</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #2faabc"><i class="icon-piechart lead-7"></i></p>
                <h6 class="mb-0"><strong>Explore</strong></h6>
              </a>
            </div>

          </div>
        </div>
      </section>




<section class="section py-9" id="about" style="background-image: url(../img/thumb/23.png)">
        <div class="overlay opacity-90" style="background-image: linear-gradient(90deg, #3131319e 0%, #101010 100%);"></div>
        <div class="container">

          <div class="row">
            <div class="col-10 col-md-7 col-xl-5 text-right" >
              <div class="section-dialog shadow-4">
                <h5 class="fw-500">درباره تله‌موزیک</h5>
                <blockquote class="blockquote text-left lead-1 mb-0 mt-5">
                  <p>تله‌موزیک آینه جهان‌نمای دنیای موسیقی است؛ موجوعه‌ای بی‌نظیر از بهترین کنسرت‌ها، فیلم‌های مستند، موزیک ویدیوها، زندگی‌نامه چهره‌های مطرح موسیقی و تاریخ موسیقی ملل که همه آنها در یک اپلیکیشن و روی گوشی شما قابل دسترس است. در حال حاضر نسخه اندروید این اپلیکیشن به صورت آزمایشی منتشر شده است و به زودی نسخه آی‌اواس اپلیکیشن تله‌موزیک هم عرضه خواهد شد</p>
                </blockquote>
              </div>
            </div>
          </div>

        </div>
      </section>

<section class="section" id="contact">
        <div class="container">
          <div class="row gap-y align-items-center ">

            <div class="col-md-5">
              <img src="../img/thumb/24.png" alt="...">
            </div>

            <div class="col-md-7 mr-auto text-right">
              <h4>ارتباط با ما</h4>
              <p>آدرس: تهران، خیابان گیشا، کوچه ۳۷ا، پلاک ۶۷</p>
              <p>شماره شرکت: ۸۸۲۷۵۷۹۱</p>
              <p>ایمیل: mehrtahacom@gmail.com</p>
            </div>


          </div>


        </div>
      </section>








@stop