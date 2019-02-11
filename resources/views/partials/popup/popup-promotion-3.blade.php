<div id="popup-promotion-3" class="popup bg-img text-white border-0 col-10 col-md-4 p-6" data-position="top-center" data-animation="slide-down" style="background-image: url(https://backend.telemusic.ir/api/v1/assets/index.php?id={{ $event['bannerId'] }}&call=apiv1)" data-overlay="1">
      <button type="button" class="close" data-dismiss="popup" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="text-center position-relative">
        <h3 class="fw-200">{{ $event['name'] }}</h3>
        <p class="lead-1">{{ $event['description'] }}</p>
        <br>
        <a class="btn btn-lg btn-round btn-success px-7" href="#" data-toggle="modal" data-target="#register">مشاهده لایو از طریق وب</a>
        <p class="small mb-0"><a href="#" data-dismiss="popup">دانلود ios</a></p>
        <p class="small mb-0"><a href="#" data-dismiss="popup">دانلود android</a></p>
      </div>
    </div>

    <div id="popup-autoshow" class="popup bg-img text-white border-0 col-10 col-md-4 p-6" data-animation="slide-up" data-position="top-center" data-autoshow="2000" data-autohide="10000" style="background-image: url(https://backend.telemusic.ir/api/v1/assets/index.php?id={{ $event['bannerId'] }}&call=apiv1)" data-overlay="1">
       <button type="button" class="close" data-dismiss="popup" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="text-center position-relative">
        <h3 class="fw-200">{{ $event['name'] }}</h3>
        <p class="lead-1">{{ $event['description'] }}</p>
        <br>

        <p class="mb-2">
          <a class="btn btn-lg btn-round btn-success px-7" href="#" data-toggle="modal" data-target="#register">مشاهده لایو از طریق وب</a>
        </p>
        <p class="small mb-0"><a href="#" data-dismiss="popup">دانلود ios</a></p>
        <p class="small mb-0"><a href="#" data-dismiss="popup">دانلود android</a></p>
      </div>
    </div>



<div class="modal fade" id="register" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
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

            <form method="POST" action="{{ route('otp.send') }}">
              {{ csrf_field() }}
              <hr class="w-10">
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


<script>
   $('#promot').click();
</script>