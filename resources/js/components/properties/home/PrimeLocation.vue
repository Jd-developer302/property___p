<template>
    <section>
        <div class="container-xxl">
            <div class="row">
                <div class="col">
                    <div class="sec-heading mx-auto">
                        <h1>Prime Location</h1>
                        <p>Best of the locations with great investment opportunity in Dubai and the rest of UAE</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <a href=""><img class="card-img-top"
                            :src="spanishImage"
                            alt="Card image cap"></a>
                        <div class="card-body">
                            <a href="" style="text-decoration: none;"><p class="card-text">Al Barsha South Fourth, Dubai</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <a href="">
                            <img class="card-img-top"
                            :src="russianImage"
                            alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="" style="text-decoration: none;"><p class="card-text">Business Bay, Duba</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <a href="">
                            <img class="card-img-top"
                            :src="chineseImage"
                            alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="" style="text-decoration: none;"><p class="card-text">Al Hebiah Third, Dubai</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <a href="">
                            <img class="card-img-top"
                            :src="frenchImage"
                            alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="" style="text-decoration: none;"><p class="card-text">Al Merkadh, Dubai</p></a>
                        </div>
                    </div>
                </div>
                <div class="btn-container mb-5">
                    <div class="btn btn-primary">
                      <a href="/location">VIEW MORE</a>
                    </div>
                  </div>
            </div>
        </div>
    </section>
</template>

<script>
    import { ref} from 'vue';
    import frenchImagePath from '@/assets/img/444.jpg';
    import spanishImagePath from '@/assets/img/111.jpg';
    import chineseImagePath from '@/assets/img/333.jpg';
    import russianImagePath from '@/assets/img/2.22.jpg';
  
    export default {
      name: 'PrimeLocation',
      setup() {
        const frenchImage = ref(frenchImagePath);
        const spanishImage = ref(spanishImagePath);
        const chineseImage = ref(chineseImagePath);
        const russianImage = ref(russianImagePath);  
        return {
          frenchImage,
          spanishImage,
          chineseImage,
          russianImage,
        };
      },
    };
  </script>
<style scoped>
    .sec-heading {

        margin-bottom: 20px;
    }

    .sec-heading h1 {
        text-transform: uppercase;
        margin-bottom: 2px;
        line-height: 36px;
        font-size: 24px;
        font-weight: 600;
        color: #9C3133;
        font-family: 'Montserrat', sans-serif;
    }

    .sec-heading p {
        color: #000;
        font-size: 20px;
        font-weight: 500;
        font-family: 'Montserrat', sans-serif;
    }
    .btn-container {
  text-align: center;
  margin-top: 10px;
}

.btn-container .btn-primary {
  display: inline-block;
  background-color: #9C3133;
  border: #9C3133;
  padding: 10px 30px;
}

.btn-container .btn-primary a {
  color: #fff;
  font-size: 22px;
  text-decoration: none;
  
}.card-text{
    text-transform: capitalize;
        margin-bottom: 2px;
        font-size: 15px;
        font-weight: 600;
        color: #000;
}
.card{
    border-radius: 30px;
}
.card .card-img-top{
    height: 300px;
}
@media (max-width:1400px){
    section{
      margin-left: 15px;
      margin-right: 15px;
    }
  }
</style>