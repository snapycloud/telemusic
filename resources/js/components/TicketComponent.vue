<template>
                <div class="container" >
                <div class="row">
     <div class="wrap-contact100">

    <div v-if="error"  class="alert alert-danger" role="alert">
        <p style="color: black">اطلاعات وارد شده اشتباه است</p>
      </div>
    <div v-if="confilct"  class="alert alert-success" role="alert">
        <p style="color: black">تیکت شما ثبت شد، از طریق ایمیل پاسخ داداه خواهد شد</p>
      </div>
      
    <form v-on:submit.prevent="onSubmit" class="contact100-form validate-form text-right" _lpchecked="1">
        <span class="contact100-form-title">ثبت شکایات</span>
        <div class="text-right wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100 ">نام خود را وارد کنید *</span>
            <input class="input100" type="text" v-model='data.name' placeholder="">
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100">ایمیل خود را وارد کنید *</span>
            <input class="input100" type="text" v-model="data.email" placeholder="">
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100">ایمیل خود را وارد کنید *</span>
            <input class="input100" type="text" v-model="email" placeholder="">
        </div>
        <div class="wrap-input100 rs1-wrap-input200 validate-input">
            <span class="label-input100">پیام خود را وارد کنید *</span>
            <input class="input100" type="text" v-model="data.message" placeholder="">
        </div>
        <button class="btn-effect text-center ui-link">عضویت </button>
    </form>
</div>
                </div>
            </div>

</template>

<script>
    export default {
        mounted() {
        },
        props: ['active'],
        data(){
            return {
                data: {
                    name: '',
                    email: '',
                    message: ''
                },
                plan: '',
                name: '',
                email: '',
                error: false,
                confilct: false
            }
        },

        methods: {
            onSubmit(e) {
                let self = this;
                  axios.post('/support/ticket', self.data).then(function (response) {
                        if(response.status == 200) {
                            self.confilct = true;
                            self.hiddMessage();
                        }
                      self.code = response.data
                  }).catch(function (error) {
                    error = JSON.stringify(error)
                    error = JSON.parse(error);
                    if(error["response"]["status"] == 409) {
                            self.confilct = true;
                            self.hiddMessage();
                    } else {
                        self.error = true
                        self.confilct = false;
                    }


                  });
                
            },
            hiddMessage() {
                this.error = false
            }

              
        }

    }
</script>
