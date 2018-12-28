

<footer class="footer bg-gray py-9">
      <div class="container">


          <div class="col-12">
            <hr class="my-0">
          </div>
          <div class="col-md-6 text-center text-md-left">
            <small>© 2018 snappbit. All rights reserved.</small>
          </div>
          <div class="col-md-3 text-center text-md-right">
             <img id = 'jxlzrgvjjxlzrgvjfukzfukz' style ='cursor:pointer' onclick = 'window.open("https://logo.samandehi.ir/Verify.aspx?id=131366&p=rfthxlaorfthxlaogvkagvka", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt = 'logo-samandehi' src = 'https://logo.samandehi.ir/logo.aspx?id=131366&p=nbpdqftinbpdqftiwlbqwlbq' />
          </div>
          <div class="col-md-3 text-center text-md-right" id="iwmf-certificate-1" style="">
            <a href="https://certificate.iwmf.ir/verify/snappbit.com" target="_blank" style=""><img src="https://certificate.iwmf.ir/images/certificate-dark.png?v=1" alt="جشنواره وب و موبایل" class="mr-5"></a>
          </div>

        </div>

    </footer>


    <div id="offcanvas-slide-down" class="offcanvas" data-animation="slide-down" >
      
      
          <div class="form-body">
        <div class="website-logo">
            <a href="#">
                <div class="logo">
                    <img class="logo-size" src="{{ asset('img/logo-light.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder text-right">
                    <h3>چه چیزی باعث می شود ما متفاوت باشیم؟</h3>
                    <p>ما در بر این باور هستیم فروش در DNA ماست، دهه ها زندگی کرده ایم و آن را بدست آورده‌ایم. ما یک محصول را ساختیم که زیبایی را به فروش می رساند.  رابط بصری قابل تنظیم و امکانات بیشمار،  کاربران ما در واقع انتخاب می کنند تا به طور مداوم وارد سیستم شوند.</p>
                    <p>حالا واقعا زیبا هست</p>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content form-sm">
                    <div class="form-items text-right">
                        <h3 class="form-title">فرم زیر را تکمیل کنید</h3>
                        <form>
                            <div class="form-group">
                                <label>اطلاعات شخصی</label>
                                <input type="text" class="form-control" name="name" placeholder="نام کامل" required>
                                <input type="email" class="form-control" name="email" placeholder="ایمیل" required>
                                <input type="email" class="form-control" name="phoneNumber" placeholder="شماره همراه" required>
                                <input type="email" class="form-control" name="company" placeholder="نام شرکت">
                            </div>
                            <div class="form-group">
                                <label>انتخاب طرح‌ها</label>
                                <div class="custom-options">
                                    <input type="radio" id="rad2" name="rad"><label for="rad2">معمولی</label>
                                    <input type="radio" id="rad3" name="rad"><label for="rad3">پیشرفته</label>
                                    <input type="radio" id="rad1" name="rad"><label for="rad1">۱۵ روز رایگان</label>
                                </div>
                            </div>

                            <p class="small mb-0 text-right">برای ثبت نام، شما با شرایط ما موافقید. <a href="/terms" target="_blank">قوانین و ضوابط</a></p>
                            <div class="form-button text-right">
                              <button type="button" class="btn btn-success">ثبت عضویت</button>
                              <button type="submit" class="btn btn-secondary" data-dismiss="offcanvas" aria-label="Close">خروج</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <button class="btn btn-circle btn-primary scroll-top"><i class="fa fa-angle-up"></i></button>
    <!-- Scripts -->
    <script src="{{ asset('js/min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

      @if(isset($data) && $data)
        <script>
          $('#modal-subscribe-1').modal()
        </script>
      @endif

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131007238-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '-UA-1310072381');
      </script>


<script type="text/javascript">!function(){function t(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,localStorage.getItem("rayToken")?t.src="https://app.raychat.io/scripts/js/"+o+"?rid="+localStorage.getItem("rayToken")+"&href="+window.location.href:t.src="https://app.raychat.io/scripts/js/"+o;var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}var e=document,a=window,o="0c610934-5936-4bfd-a25f-56674417b853";"complete"==e.readyState?t():a.attachEvent?a.attachEvent("onload",t):a.addEventListener("load",t,!1)}();</script>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H6J8RG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  </body>
</html>
