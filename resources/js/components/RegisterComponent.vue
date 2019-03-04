<template>
                <div class="container" >
                <div class="row">
     <div class="wrap-contact100">
        <div v-if="error"  class="alert alert-danger" role="alert">
        <p>اطلاعات وارد شده اشتباه است</p>
      </div>
    <form v-on:submit.prevent="onSubmit" class="contact100-form validate-form text-right" _lpchecked="1">
        <span class="contact100-form-title">اشتراک انتخاب شده: {{ plan }}</span>
        <div class="text-right wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100 ">نام خود را وارد کنید *</span>
            <input class="input100" type="text" v-model='name' placeholder="">
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100">ایمیل خود را وارد کنی *</span>
            <input class="input100" type="text" v-model="email" placeholder="">
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
            if(this.active) {
                this.status
            }
        },
        props: ['active'],
        data(){
            return {
                plan: '',
                name: '',
                email: '',
                error: false,
            }
        },

        methods: {
            onSubmit(e) {
                let self = this;
                  axios.post('/user/register', {
                        plan: 'free', name: self.name, email: self.email
                    }).then(function (response) {
                      self.code = response.data
                      console.log(response);
                  }).catch(function (error) {
                      self.error = true
                  });
                
            }
              
        }

    }
</script>
