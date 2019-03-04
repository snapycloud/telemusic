<template>
                <div class="container" >
                <div class="row">
     <div class="wrap-contact100">
    <form class="contact100-form validate-form text-right" _lpchecked="1">
        <span class="contact100-form-title">اشتراک انتخاب شده: {{ plan }}</span>
        <div class="text-right wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100 ">نام خود را وارد کنید *</span>
            <input class="input100" type="text" name="name" placeholder="">
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100">ایمیل خود را وارد کنی *</span>
            <input class="input100" type="text" name="email" placeholder="">
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
                email: ''
            }
        },

        methods: {
            onSubmit(e) {
              
            }
              
        }

    }
</script>
