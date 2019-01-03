
<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <h4 class="text-center">ثبت نام در تله‌موزیک</h4>

            @if ($errors->any())
                <div class="alert alert-danger text-right" role="alert">اطلاعات وارد شده اشتباه است</div>
            @endif

            <form method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
              <hr class="w-10">
              <div class="form-group">
                <input class="form-control" value="{{ old('userName') }}" required type="email" name="userName" placeholder="ایمیل" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" value="{{ old('lastName') }}" required type="text" name="lastName" placeholder="نام شما" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" value="{{ old('phoneNumber') }}" required type="text" name="phoneNumber" placeholder="شماره همراه" autocomplete="off">
              </div>
              <hr class="w-10">
              {{-- <p class="text-center">توجه کنید، پس از بررسی نهایی، حساب کاربری شما به آدرس ایمیتان ارسال می‌شود</p> --}}

              <button class="btn btn-lg btn-block btn-success" type="submit">ثبت نام</button>
            </form>
          </div>

        </div>
      </div>
    </div>



<footer class="footer text-white bg-dark py-7">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-6">
              <div class="nav nav-bold nav-uppercase justify-content-center justify-content-md-end">
                <a class="nav-link" href="https://backend.telemusic.ir">ورود به پنل</a>
                <a class="nav-link" href="#contact">تماس با ما</a>
                <a class="nav-link" href="#about">درباره ما</a>
                <a class="nav-link" href="#member">تولید محتوا</a>
                <a class="nav-link" href="#home">صفحه اصلی</a>
              </div>
            </div>

            <div class="col-md-6 text-center text-md-left mt-5 mt-md-0">
              <div class="social social-bg-dark">
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                <a class="social-youtube" href="#"><i class="fa fa-youtube"></i></a>
                <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
              </div>
            </div>

            <div class="col-12 text-center">
              <br>
              <small>© Telemusic 2018, All rights reserved.</small>
            </div>

          </div>
        </div>
      </footer>




    <button class="btn btn-circle btn-primary scroll-top"><i class="fa fa-angle-up"></i></button>
    <!-- Scripts -->
    <script src="{{ asset('js/min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>      

    @if($errors->any())
      <script type="text/javascript">
          $('#modal-register').modal()
      </script>
    @endif
 
  </body>
</html>
