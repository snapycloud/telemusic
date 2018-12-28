
<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <form method="POST">
              {{ csrf_field() }}
              <h4 class="text-center">ثبت نام در تله‌موزیک</h4>
              
              <hr class="w-10">
              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="ایمیل" autocomplete="off">
              </div>
              <hr class="w-10">
              <p class="text-center">توجه کنید، پس از بررسی نهایی، حساب کاربری شما به آدرس ایمیتان ارسال می‌شود</p>

              <button class="btn btn-lg btn-block btn-primary" type="submit">ثبت نام</button>
            </form>
          </div>

        </div>
      </div>
    </div>


    <button class="btn btn-circle btn-primary scroll-top"><i class="fa fa-angle-up"></i></button>
    <!-- Scripts -->
    <script src="{{ asset('js/min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>      
 
  </body>
</html>
