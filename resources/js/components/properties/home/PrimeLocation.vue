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
                <div v-for="city in limitedCities" :key="city.id" class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <a :href="`/${city.slug}`"><img class="card-img-top"
                           :src="city.image ? '/storage/cities/' + city.image : 'default-image.jpg'"
                           :alt="city.name"></a>
                        <div class="card-body">
                            <a href="" style="text-decoration: none;"><p class="card-text">{{ city.name }}</p></a>
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
import axios from 'axios';


export default {

    data() {
        return {
            cities: {
                data: [],
                current_page: 1,
                last_page: 1,
                next_page_url: null,
                prev_page_url: null,
            },
        };
    },
    computed: {
        limitedCities() {
            return this.cities.data.slice(0, 4); // Only return the first 4 cities
        }
    },
    created() {
        this.fetchCities('/api/cities');  
    },
    methods: {
        async fetchCities(url) {
            try {
                const response = await axios.get(url); 
                this.cities = response.data; 
            } catch (error) {
                console.error('Error fetching city data:', error);
            }
        }
    }
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