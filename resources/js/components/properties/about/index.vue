<template>
  <Header />
  <div class="background-container">
    
    <div class="container text-center section-title-1">
      <h2>Who we are</h2>
    </div>
  </div>
  <div v-for="item in items" :key="item.id">
    <section class="container who-we-are" id="who">
      <div v-for="item in items" :key="item.id">
        <div class="title my-lg-3 text-center">
          <h2>{{ item.title }}</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-9 text-center">
            <p>{{ item.discription }}</p>
          </div>
        </div>
      </div>
    </section>
    <section class="gray about" id="vision">
      <div class="container-xxl">

        <div class="row">
          <div class="col-md-4 d-none d-md-block">
            <img v-if="item.image" :src="`/storage/${item.image}`" width="703" height="798" alt="Vision"
              class="abt-img img-fluid rounded shadow">
          </div>
          <div class="col-md-8">
            <div class="title mb-4 text-center">
              <h2>VISION</h2>
            </div>
            <div class="card border-0 contact-box text-left">
              <div class="card-body p-lg-4 pl-lg-5">

                <p>{{ item.vision }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="mission">
      <div class="container text-center">
          <div class="title mb-4 text-center">
              <h2>MISSION</h2>
          </div>
          <p>{{ item.mission }}</p>


      </div>
  </section>
    </div>
    <Footer />
</template>

<script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  import Footer from '../home/Footer.vue';
  import Header from '../home/Header.vue';

  const items = ref([]);

  const fetchItems = async () => {
    try {
      const response = await axios.get('/api/frontend/about');
      items.value = response.data.data;
    } catch (error) {
      console.error('Error fetching items:', error);
    }
  };

  onMounted(() => {
    fetchItems();
  });
</script>

<style scoped>
  section {
    padding: 50px 0 20px;
}
  .section-title-1 {
    padding-top: 200px;
    padding-bottom: 150px;
    color: #fff;
  }

  .section-title-1 h2 {
    font-size: 55px;
    text-transform: capitalize;
  }

  .background-container {
    background-image: url('@/assets/img/last-banner.jpg');
    background-size: cover;
    background-position: center;
    height: 60vh;
    position: relative;
  }

  .about-item {
    margin-bottom: 20px;
  }

  .about-item img {
    max-width: 100%;
    height: auto;
  }

  .title {
    padding: 10px 5px;
  }

  .title h2 {
    font-size: 22px;
    display: inline-block;
    border-top: 2px solid #9C3133;
    border-bottom: 2px solid #9C3133;
    padding: 10px 10px;
    color: #000;
    font-weight: 700;
  }
  .contact-box {
    width: 100%;
    margin: 0 auto 10px;
    display: table;
    text-align: center;
    box-shadow: 0 0 12px 0 rgba(71, 119, 244, .2);
    border-radius: 6px;
    height: 50vh;
    padding: 1.4em 1em .5em;
}
.about .abt-img {
    margin-left: 55px;
    position: relative;
    z-index: 1;
    height: 400px;
}
p{
  color: #36454F;
  font-size: 14px;
  font-weight: 400;
  line-height: 2.3;
}
/* Responsive Styles */
@media (max-width: 992px) {
  .section-title-1 {
    padding-top: 150px;
    padding-bottom: 100px;
  }
  .section-title-1 h2 {
    font-size: 45px;
  }
  .title h2 {
    font-size: 20px;
  }
}

@media (max-width: 768px) {
  .background-container {
    height: 50vh;
  }
  .section-title-1 {
    padding-top: 100px;
    padding-bottom: 80px;
  }
  .section-title-1 h2 {
    font-size: 35px;
  }
  .title h2 {
    font-size: 18px;
  }
}

@media (max-width: 576px) {
  
  .background-container {
    height: 70vh;
  }
  .section-title-1 {
    padding-top: 80px;
   padding-bottom: 60px;
  }
  .section-title-1 h2 {
    font-size: 30px;
    text-align: center;
    font-weight: 700;
    margin-top: 150px;
  }
  .title h2 {
    font-size: 16px;
  }
  p {
    margin-left: 10px;
    margin-right: 10px;
    font-size: 13px;
  }
  
  .abt-img {
    width: 100%;
    height: auto;
    margin-left: 0;
  }
}
</style>