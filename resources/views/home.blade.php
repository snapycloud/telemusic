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


<section class="section">
        <div class="container">
          <header class="section-header">
            <h2>تماشا کنید</h2>
            <hr>
            <p class="lead">آنچه در تله موزیک خواهید دید</p>
          </header>


          <div class="row">
            <div class="col-md-8 mx-auto">

              <div class="video-wrapper rounded-lg">
                <div class="poster" style="background-image: url(../img/video/1.png)"></div>
                <button class="btn btn-circle btn-lg btn-danger"><i class="fa fa-play"></i></button>
                <video src="https://stream.telemusic.ir/5c192a5a99d396500/backup.mp4" poster="../img/video/1.png" controls=""></video>
              </div>

            </div>
          </div>

        </div>
      </section>



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
      </section>
      <section class="section">
        <div class="container">
          <header class="section-header">
            <h2>تله‌موزیک</h2>
            <hr>
            <p class="lead">
              تله‌موزیک آینه جهان‌نمای دنیای موسیقی است؛ موجوعه‌ای بی‌نظیر از بهترین کنسرت‌ها، فیلم‌های مستند، موزیک ویدیوها، زندگی‌نامه چهره‌های مطرح موسیقی و تاریخ موسیقی ملل که همه آنها در یک اپلیکیشن و روی گوشی شما قابل دسترس است. در حال حاضر نسخه اندروید این اپلیکیشن به صورت آزمایشی منتشر شده است و به زودی نسخه آی‌اواس اپلیکیشن تله‌موزیک هم عرضه خواهد شد
            </p>
          </header>



          <div class="row gap-y">

            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-mobile lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">پورتال مشتریان</h5>
              </a>
            </div>


            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-gears lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">سفارشی سازی آسان</h5>
              </a>
            </div>


            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-tools lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">سفارشی سازی آسان</h5>
              </a>
            </div>


            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-recycle lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">ساده برای استفاده</h5>
              </a>
            </div>


            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-browser lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">پشتیبانی فنی</h5>
              </a>
            </div>


            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-paintbrush lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">پشتیبانی فنی</h5>
              </a>
            </div>


            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-puzzle lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">پشتیبانی فنی</h5>
              </a>
            </div>


            <div class="col-md-6 col-lg-3">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p><i class="icon-newspaper lead-6 text-muted"></i></p>
                <h5 class="card-title text-dark mb-0">پشتیبانی فنی</h5>
              </a>
            </div>

          </div>
        </div>
      </section>







      <section class="section py-7" style="background-color: #8ea6e6">
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
      </section>



@stop