@extends('layouts.app')

@section('header')
<header id="home" class="header text-white h-fullscreen text-center text-lg-right" style="background-image: url(../img/bg/32.jpg)">
      <canvas class="constellation" data-color="rgba(255,255,255,0.3)" width="1920" height="1001"></canvas>
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-lg-6 ml-auto">
            <img class="mt-5" src="../img/telemusic.png" alt="img">
            <h1>تله‌موزیک</h1>
            <p class="lead mt-5 mb-8">اولین رسانه تصویری اختصاصی موسیقی ایران</p>
            <p class="gap-xy">
              <a class="btn btn-lg btn-round btn-outline-light mw-150" href="#">دربافت اپلیکیشن</a>
              <a class="btn btn-lg btn-round btn-light mw-150" href="#">ثبت نام</a>
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
            <h2>Local Video</h2>
            <hr>
            <p class="lead">While it's always better to host your videos on a video sharing website, but we provided a sample for you to include local videos in your pages.</p>
          </header>


          <div class="row">
            <div class="col-md-8 mx-auto">

              <div class="video-wrapper rounded-lg">
                <div class="poster" style="background-image: url(../img/video/1.jpg)"></div>
                <button class="btn btn-circle btn-lg btn-danger"><i class="fa fa-play"></i></button>
                <video src="../img/video/1.mp4" poster="../img/video/1.jpg" controls=""></video>
              </div>

            </div>
          </div>

        </div>
      </section>




<section class="section">
        <div class="container">
          <header class="section-header">
            <small>Welcome</small>
            <h2>Get a Better Understanding</h2>
            <hr>
            <p class="lead">تله‌موزیک: اولین رسانه تصویری اختصاصی موسیقی ایران</p>
          </header>



          <div class="row gap-y">

            <div class="col-md-8 mx-auto">
              <img src="../img/preview/dribbble-9.gif" alt="..." data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">
            </div>


            <div class="w-100"></div>


            <div class="col-md-6 col-xl-4">
              <div class="media">
                <div class="lead-6 line-height-1 text-dark mr-5"><i class="icon-mobile"></i></div>
                <div class="media-body">
                  <h5>Responsive</h5>
                  <p>Your website works on any device: desktop, tablet or mobile.</p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-xl-4">
              <div class="media">
                <div class="lead-6 line-height-1 text-primary mr-5"><i class="icon-gears"></i></div>
                <div class="media-body">
                  <h5>Customizable</h5>
                  <p>You can easily read, edit, and write your own code, or change everything.</p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-xl-4">
              <div class="media">
                <div class="lead-6 line-height-1 text-info mr-5"><i class="icon-tools"></i></div>
                <div class="media-body">
                  <h5>UI Kit</h5>
                  <p>There is a bunch of useful and necessary elements for developing your website.</p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-xl-4">
              <div class="media">
                <div class="lead-6 line-height-1 text-warning mr-5"><i class="icon-layers"></i></div>
                <div class="media-body">
                  <h5>Lego Base</h5>
                  <p>You can find our code well organized, commented and readable.</p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-xl-4">
              <div class="media">
                <div class="lead-6 line-height-1 text-danger mr-5"><i class="icon-recycle"></i></div>
                <div class="media-body">
                  <h5>Clean Code</h5>
                  <p>As you can see in the source code, we provided a clean code.</p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-xl-4">
              <div class="media">
                <div class="lead-6 line-height-1 text-success mr-5"><i class="icon-chat"></i></div>
                <div class="media-body">
                  <h5>Support</h5>
                  <p>When you purchase this template, you'll freely receive future updates.</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>





      <section class="section py-7" style="background-color: #8ea6e6">
        <div class="container">
          <div class="row gap-y align-items-center">
            <div class="col-md-9">
              <h4 class="mb-0 text-white text-center text-md-left">Want a bite? You're in the right place!</h4>
            </div>

            <div class="col-md-3 text-center text-md-right">
              <a class="btn btn-lg btn-round btn-light" href="#">Take a test drive</a>
            </div>
          </div>
        </div>
      </section>



      <section class="section bg-gray text-center">
        <div class="container">

          <header class="section-header">
            <small>Try It Now</small>
            <h2 class="lead-8"><strong>Get Started Free</strong></h2>
            <hr>
            <p class="lead">Sign up for free and become one of the millions of people around the world who have fallen in love with GitHub.</p>
          </header>


          <div class="row">
            <form class="col-md-4 col-xl-4 mx-auto input-border">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Name" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              </div>

              <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Email" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
              </div>

              <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
              </div>

              <button class="btn btn-block btn-xl btn-success">Sign up</button>
              <p class="small mt-3 opacity-70">or use your <a href="#">Facebook account</a></p>
            </form>
          </div>

        </div>
      </section>





@stop