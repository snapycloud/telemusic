<div class="modal fade" id="otp" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <h4 class="text-center">ثبت نام در تله‌موزیک</h4>

            @if ($otp_error)
                <div class="alert alert-danger text-right" role="alert">کد وارد شده صحیحی نمی باشد</div>
            @endif

            <form method="POST" action="{{ route('otp.check') }}">
              {{ csrf_field() }}
              <input hidden class="form-control" value="{{ $otp }}" required type="text" name="phoneNumber" placeholder="" autocomplete="off">
              <hr class="w-10">
              <div class="form-group">
                <input class="form-control" value="" required type="text" name="code" placeholder="کد خود را وارد کنید" autocomplete="off">
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
   $('#otp').modal();

</script>