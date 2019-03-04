<template>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h1 class="arrow">اشتراک‌های محتوای تولیدی کاربران </h1><hr><p></p>
          </div>
        </div>
        <div class="row">
          <div class="pricing-wrap">                
            <ul class="slides">
              <li>
                <div class="col-md-offset-3 col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                  <ul class="planContainer">
                    <li class="title text-center"><h2>رایگان</h2></li>
                    <li class="button text-center"><a v-on:click="onFree" data-scroll class="btn-effect text-center" href="#swag">ثبت نام</a></li>
                  </ul>             
                </div>
                
                <div class=" col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <ul class="planContainer">
                    <li class="title text-center"><h2 class="bestPlanTitle">پیشرفته</h2></li>
                    <li class="button text-center"><a v-on:click="onBest" data-scroll class="btn-effect text-center" href="#swag">ثبت نام</a></li>
                  </ul>
                </div>
              </li>
            </ul>                
          </div>
        </div>
      </div>

</template>

<script>
    export default {
        props: ['active'],
        
        data(){
            return {

            }
        },

        methods: {
            onFree(e) {
              console.log(this.active);
              this.active = 'free'
            },
            onBest(e){      
              console.log(this.active);
              this.active = 'best'
            }
        }

    }
</script>
