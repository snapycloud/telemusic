@extends('layouts.app')

@section('header')

<header class="header text-white h-fullscreen bg-fixed" style="background-image: url('../img/bg/19.jpg')" data-overlay="2">

      <div class="overlay opacity-80" style="background-image: linear-gradient(-45deg, rgba(63, 81, 181, 0.85) 0%, #673AB7 100%);"></div>
      <canvas class="constellation" data-radius="0"></canvas>
      <div class="container text-center">
        <div class="row align-items-center h-100 pt-12 pt-md-8">

          <div class="col-md-8 mx-auto">
            <img src="img/logo_snapppbit.png" alt="" class="col-4 col-md-3 rounded-circle">
            <h2 class="display-4 fw-500 ">مدیریت ارتباط با مشتری اسنپ‌بیت</h2>
            <h3 class="display-5 fw-500"><span class="fw-400 pl-2" data-typing="اتوماسیون فروش, اتوماسیون پشتیبانی, اتوماسیون مارکتینگ , سیستم گزارشگیری, مدیریت وظایف" data-type-speed="80"></span></h3>
            <p class="lead mt-5 mb-8">اسنپ‌بیت برنامه‌ای ساده، با رابط بصری قدرتمند برای افزایش فروش شماست. (۱۵ روز رایگان) <br>
               نسل بعدی نرم افزار مدیریت ارتباط با مشتری را با اسنپ‌بیت تجربه کنید.
             </p>
            <a class="btn btn-xl btn-round btn-success w-200 mr-3 px-6 d-none d-md-inline-block" @click="runPlan('starter')">عضویت در سرویس</a>
            <a class="btn btn-xl btn-round btn-outline-light w-200 px-6" href="#" @click="runPlan('trial')">۱۵ روز رایگان </a>
          </div>

          <div class="col-lg-5 d-none d-lg-block">

          </div>

        </div>

           

      </div>


    </header>

@stop


@section('main')





<section class="section">
        <div class="container">
          <header class="section-header">
            <small></small>
            <h1 class="divider">همه امکانات در یک نرم افزار</h1>
            <p class="lead">تمام اطلاعات مشتری شما را در یک پلتفرم یکپارچه جمع آوری شده و شما را قادر می سازد تا کسب و کار مشتری محور را از طریق بازاریابی به فروش، خدمات مشتری و تجزیه و تحلیل کسب و کار را ایجاد کنید. به شما درک کاملتری از مشتریان میدهد تا در کسب و کارتان موفق شوید. به همین دلیل ما آن را پلت فرم موفقیت مشتری می نامیم.

</p>
          </header>


          <div class="row gap-y">

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-gears lead-5 opacity-70"></i></p>
                  <p class="mb-0">سفارشی سازی آسان</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-adjustments lead-5 opacity-70"></i></p>
                  <p class="mb-0">سیستم مدیریتی پیشرفته</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-happy lead-5 opacity-70"></i></p>
                  <p class="mb-0">ساده برای استفاده</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-pricetags lead-5 opacity-70"></i></p>
                  <p class="mb-0">راهنمای استفاده</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-tools-2  lead-5 opacity-70"></i></p>
                  <p class="mb-0">پشتیبانی فنی</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-layers lead-5 opacity-70"></i></p>
                  <p class="mb-0">سرویس های ابری و هاست</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-presentation lead-5 opacity-70"></i></p>
                  <p class="mb-0">سیستم فروش کارآمدتر</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3">
              <a class="card text-white text-center py-6 rounded-md" href="{{ route('integration') }}" style="background-color: #5baaff">
                <div class="position-relative">
                  <p><i class="icon-megaphone lead-5 opacity-70"></i></p>
                  <p class="mb-0">پورتال مشتریان</p>
                </div>
              </a>
            </div>

          </div>
        </div>
      </section>



<section id="monthly-yearly" class="section bg-gray">
        <div class="container">
          <h6 class="divider">هزینه راه اندازی سرویس های ابری</h6>
          <div class="text-center mb-7">
            {{-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-round btn-outline-info w-150 active">
                <input type="radio" name="pricing-1" value="monthly" autocomplete="off" checked=""> ماهانه
              </label>
              <label class="btn btn-round btn-outline-info w-150">
                <input type="radio" name="pricing-1" value="yearly" autocomplete="off"> سالانه
              </label>
            </div> --}}
          </div>

          <div class="row">

            

            <div class="col-md-4 mx-auto">
              <div class="pricing-1 popular">
                <p class="plan-name">معمولی</p>
                <br>
                <h2 class="price text-success">
                  <span data-bind-radio="pricing-1" data-monthly="۱۲۹،۰۰۰" data-yearly="۱،۵۴۸،۰۰۰">۱۲۹،۰۰۰</span><br>
                  <span class="price-unit">تومان</span>
                </h2>
                <p class="small text-lighter">
                 پرداخت 
                  <span data-bind-radio="pricing-1" data-monthly="ماهانه" data-yearly="سالانه">ماهانه</span>
                </p>

                <div class="text-muted">
                  <small>پنج کاربره</small><br>
                  <small>دو گیگابایت فضا</small><br>
                  <small>پشتیبانی آنلاین</small><br>
                  <small><del>اتوماسیون بازاریابی</del></small><br>
                  <small>اتوماسیون فروش</small><br>
                  <small>پنل مدیریتی</small><br>
                  <small><del>سیستم ماژول ساز</del></small><br>
                  <small><del>گردش کار</del></small><br>
                  <small><del>فلوچارت و فرآیند</del></small>
                </div>

                <br>
                <p class="text-center py-3"><a class="btn btn-primary" href="#" @click="runPlan('starter')">ثبت نام</a></p>
              </div>
            </div>

          <div class="col-md-4 mx-auto">
              <div class="pricing-1 popular">
                <p class="plan-name">پیشرفته</p>
                <br>
                <h2 class="price text-success">
                  <span data-bind-radio="pricing-1" data-monthly="۲۹۹،۰۰۰" data-yearly="۳،۵۸۵،۰۰۰">۲۹۹،۰۰۰</span><br>
                  <span class="price-unit">تومان</span>
                </h2>
                <p class="small text-lighter">
                   پرداخت 
                  <span data-bind-radio="pricing-1"  data-monthly="ماهانه" data-yearly="سالانه">ماهانه</span>
                </p>

                <div class="text-muted">
                  <small>ده کاربره</small><br>
                  <small>چهار گیگابایت فضا</small><br>
                  <small>پشتیبانی آنلاین</small><br>
                  <small>اتوماسیون بازاریابی</small><br>
                  <small>اتوماسیون فروش</small><br>
                  <small>پنل مدیریتی پیشرفته</small><br>
                  <small>سیستم ماژول ساز</small><br>
                  <small>گردش کار</small><br>
                  <small>فلوچارت و فرآیند</small>
                </div>

                <br>
                <p class="text-center py-3"><a class="btn btn-primary" href="#" @click="runPlan('pro')">ثبت نام</a></p>
              </div>
            </div>

        </div>
      </section>







            <section class="section bg-fixed text-white" style="background-image: url('../img/bg/19.jpg')" data-overlay="5">
              <div class="overlay opacity-90" style="background-image: linear-gradient(-45deg, rgb(102, 126, 234) 0%, rgb(118, 75, 162) 100%);"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-right">
              <h2>اسنپ‌‌بیت (بیت شگفت‌انگیز)</h2>
              <h5>درک کنید چگونه شما و تیم‌تان وظایف فروش را انجام می‌دهید.</h5>
              <p class="lead-2">
                تهیه گزارش‌هایی از وضعیت معاملات (فروش) و شناسایی فرصتهایی برای بهبود و پیش‌بینی نتایجی که از معاملات به‌دست می‌آید.
            </p>
              <br>
              <p>
                <a class="btn btn-lg btn-round btn-light" href="{{ route('price') }}">مشاهده طرح‌ها</a>
                <a class="btn btn-lg btn-round btn-success" href="{{ route('integration') }}">مشاهد‌ امکانات</a>
              </p>
            </div>
          </div>
        </div>
      </section>

      @if($articles)
      <section id="section-demo" class="section overflow-hidden bg-gray">
        <div class="container">
          <header class="section-header">
            <small>وبگاه</small>
            <h2>آخرین مطالب و اخبار</h2>
            <hr>
            {{-- <p class="lead">Apart from internal pages, we have designed several single sample pages to get start with.</p> --}}
          </header>


      
          <div class="row gap-y">
            @foreach($articles as $article)
                <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                  <a class="card shadow-1 hover-shadow-7" href="{{ route('weblog.article', $article->slug) }}" >
                    <img class="card-img-top" src="{{ route('image', $article->attachment->first()->id) }}" alt="{{ $article->name }}">
                    <div class="card-body">
                      <p class="mb-0 text-right">{{ str_limit($article->name, 30) }}</p>
                    </div>
                  </a>
                </div>
            @endforeach

          </div>

        </div>
      </section>
      @endif



           <section class="section">
        <div class="container">

          <header class="section-header">
            <h2>مشتریان ما</h2>
            <hr>
            <p class="lead">برخی از مشتریان ما که از اسنپ‌بیت استفاده میکنند</p>
          </header>

          <div class="partner">
            <a href="http://vada.ir" target="_blank" title="شرکت وادا"><img src="{{ asset('img/partner/1.png') }}" alt="شرکت وادا"></a>
            <a href="http://teleban.ir" target="_blank" title="شرکت وادا"><img src="{{ asset('img/partner/8.png') }}" alt="شرکت تله‌بان"></a>
          </div>

        </div>
      </section>

      
<div class="modal fade" id="modal-subscribe-1" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              <p class="my-6"><img src="../img/icon/rocket.png" alt="..."></p>
              <h4 class="lead">عضویت شما با موفقیت انجام شد</h4>
              <p>اطلاعات کاربری شما طی ساعتی بعد از طریق ایمیل ارسال میشود</p>
              <br>
          </div>

        </div>
      </div>
    </div>
{{-- <section class="section py-7" >
  <div class="overlay opacity-90" style="background-image: linear-gradient(-45deg, #545b9f 0%, var(--indigo) 100%)"></div>
        <!-- <div class="container"> -->
          <div class="row gap-y align-items-center">
            <div class="col-md-3 text-center text-md-right">
              <a  class="btn btn-label btn-success" href="https://www.instagram.com/snappbit/" target="_blank">
                <label><i class="fa fa-instagram" aria-hidden="true"></i></label> ایسنتاگرام
              </a>
            </div>

            <div class="col-md-9">
              <h4 class="mb-0 text-white text-right">ما را از طریق اینستاگرام دنبال کنید</h4>
            </div>

            
          </div>
        </div>
      </section> --}}

    {{-- <section class="section text-center text-white py-9" style="background-image: url('../img/bg/1.jpg')">
        <div class="overlay opacity-90" style="background-image: linear-gradient(-45deg, rgb(102, 126, 234) 0%, rgb(118, 75, 162) 100%);"></div>
        <div class="container">

          <div class="row">
            <div class="col-md-6 mx-auto">
              <p><img src="{{ asset('img/icon/rocket2.png' ) }}" alt="join us"></p>
              <br>
              <h4 class="mb-6"><strong>عضویت  بیش از ۱۹ شرکت که به ما اعتماد دارند.</strong></h4>
              <p class="lead text-muted text-white">برای مدتی اسنپ‌بیت را امتحان کنید درخواست بازپرداخت  در صورتی که آن را  مفید و عالی ندانستید.</p>
              <br>
              <a class="btn btn-xl btn-round btn-danger px-7"  @click="runPlan('starter')">شروع استفاده</a>
            </div>
          </div>

        </div>
      </section> --}}


@stop