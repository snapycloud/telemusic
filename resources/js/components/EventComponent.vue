<template>
<div>
      <div class="row" v-if="onplay">
            <iframe style="height:700px;" class="col-lg-12 col-md-12 col-sm-12" src="{ live.embeddedLink }">              
            </iframe>
        </div>

<div v-if="offplay" class="container wow animated fadeInLeft bottom-spacing">
        <div class="row">
          <div class="col-md-8 align-center wow animated fadeInLeft">
            <h1 class="arrow">سرویس پخش زنده، تله موزیک</h1><hr>
            

      

        <form v-if='step1' v-on:submit.prevent="onSubmit" id="notifyMe" method="POST" class="center-block align-center col-lg-6 col-md-6 col-sm-10 col-xs-12">
          <div v-if="status1" class="alert alert-danger" role="alert">
        <p>شماره همراه  وارد شده اشتباه است</p>
      </div>
          <div class="input-group col-lg-12 align-center">
            <input type="text" required="required" v-model="phone" class="form-control email-add" name="text" placeholder="شماره همراه خود را وارد کنید">
            <button type="submit" class="btn btn-default notify-button">ثبت نام</button>
          </div>
        </form>

        <form v-if='step2' v-on:submit.prevent="onSubmitOtp" id="notifyMe" method="POST" class="center-block align-center col-lg-6 col-md-6 col-sm-10 col-xs-12">
          <h1>کد احتراز به شماره {{ phone }} ارسال شد.</h1>
          <div v-if="status2" class="alert alert-danger" role="alert">
            <p>کد وارد شده اشتباه است.</p>
          </div>
          <div class="input-group col-lg-12 align-center">
            <input type="text" required="required" v-model="otp" class="form-control email-add" name="text" placeholder="کد خود را واردی کنید">
            <button type="submit" class="btn btn-default notify-button">ورود</button>
          </div>
        </form>


        <div v-if="live_error" class="alert alert-danger" role="alert">
            <p>در حال حاضر رویدادی بای پخش وجود ندارد، در اولین رویداد از طریق پیامک اطلاع رسانی خواهد شد.</p>
          </div>



          </div>
        </div>
      </div>

</div>


</template>

<script>
    export default {
        mounted() {

        },
        data(){
            return {
                phone: '',
                otp: '',
                code: false,
                verifcation: false,
                step1: true,
                step2: false,
                status1: false,
                status2: false,
                live_error: false,
                live: false,
                onplay: false,
                offplay: true
            }
        },

        methods: {
            onSubmit(e) {
              let self = this;
              var status = self.checkPhoneNumber();
                if(status){
                  axios.post('/send/otp',{phoneNumber: self.phone}).then(function (response) {
                      self.code = response.data
                      self.step2 = true;
                      self.step1 = false;
                      self.status1 = false
                  }).catch(function (error) {
                      self.status1 = true
                  });
                }
              },
              onSubmitOtp(e) {
                var self = this;
                if(self.code == self.otp){
                    self.status1 = false
                    self.status2 = false
                axios.post('/event/live',{phoneNumber: self.phone}).then(function (response) {
                      self.live = response.data
                      self.onplay = true
                      self.offplay = false
                      self.live_error = false
                      
                  }).catch(function (error) {
                      self.live_error = true
                  });


                } else {
                    self.status2 = true
                }
              
              },

              checkPhoneNumber() {
                if(this.phone){
                  return true;
                }
                self.status = true
              }
        }

    }
</script>
