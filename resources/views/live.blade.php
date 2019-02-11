@extends('layouts.app')


@section('header')
<header id="home" class="header text-white  text-center text-lg-right" style="background-image: url(../img/bg/32.jpg)">
  <div class="overlay opacity-80" style="background-image: linear-gradient(-45deg, rgba(25, 25, 25, 0.85) 0%, rgba(43, 28, 64, 0.66) 100%);"></div>
      <canvas class="constellation" data-color="rgba(255,255,255,0.7)" width="1920" height="1001"></canvas>
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-lg-6 ml-auto">
            <img class="mt-5" src="{{ asset('img/telemusic.png') }}" alt="img">
            <h1>تله‌موزیک</h1>
            <p class="lead mt-5 mb-8">اولین رسانه تصویری اختصاصی موسیقی ایران</p>
            <p class="gap-xy">
              <a class="btn btn-lg btn-round btn-outline-light mw-150" href="#">دربافت اپلیکیشن</a>
              <a class="btn btn-lg btn-round btn-light mw-150" href="#" data-toggle="modal" data-target="#modal-register">ثبت نام</a>
              @if($event)
                <a id="promot"  class="btn btn-lg btn-round btn-light mw-150" href="#" data-toggle="popup" data-target="#popup-promotion-3
">مشاهده رویداد جدید</a>
              @endif
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
                <div class="poster" style="background-image: url(https://backend.telemusic.ir/api/v1/assets/index.php?id={{ $video['bannerId'] }}&call=apiv1
)"></div>
                <button class="btn btn-circle btn-lg btn-danger"><i class="fa fa-play"></i></button>
                <video type="application/x-mpegURL" src="{{ $video['streamUrl'] }}" poster="https://backend.telemusic.ir/api/v1/assets/index.php?id={{ $video['bannerId'] }}&call=apiv1" controls=""></video>
              </div>

            </div>
          </div>

        </div>
      </section>




@stop