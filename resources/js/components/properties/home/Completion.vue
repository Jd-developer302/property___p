<template>
  <section>
    <div class="container-xxl mb-3">
      <div class="row">
        <div class="col">
          <div class="sec-heading mx-auto">
            <h1>NEAR COMPLETION PROJECTS</h1>
            <p>Looking for immediate possession - Here are some of the newly built properties</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" v-for="(project, index) in projects" :key="index">
          <a :href="`/projects/${project.slug}`">
            <div class="image-with-logo">
              <img :src="`/storage/${project.image}`" :alt="project.name" class="main-image" />
              <div class="overlay">
                <img :src="`/storage/${project.developer.logo}`" alt="Logo" class="logo" />
                <div class="text-content">
                  <h2 class="heading">{{ project.name }}</h2>
                  <p class="paragraph">{{ project.community.name }}</p>
                </div>
              </div>
            </div>
          </a>
          <div class="info-text d-flex justify-content-between">
            <h1>{{ project.payment_plan }}</h1>
            <h2>{{ project.handover }}</h2>
          </div>
          <div class="info-text2 d-flex justify-content-between">
            <h1>Payment Plan</h1>
            <h2>Handover</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
  name: 'NearCompletionProjects',
  setup() {
    const projects = ref([]);

    const fetchProjects = async () => {
      try {
        const response = await axios.get('/api/near-completion');
        projects.value = response.data.projects;
      } catch (error) {
        console.error('Error fetching near-completion projects:', error);
      }
    };

    onMounted(() => {
      fetchProjects();
    });

    return {
      projects,
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

.images-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
  .image-with-logo {
    position: relative;
    display: block;
    margin-bottom: 20px;
  }
  
  .main-image {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 8px;
  }
  
  .overlay {
    position: absolute;
    top: 290px;
    left: 0;
    display: flex;
    align-items: center;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
  }
  
  .logo {
    width: 100px;
    height: 100px;
    margin-top: -100px;
    position: relative;
    z-index: 1;
  }
  
  .text-content {
    color: #000;
    margin-top: 30px;
    margin-left: 15px;
  }
  
  .heading {
    font-size: 1rem;
    margin-top: -90px;
  }
  
  .paragraph {
    font-size: 0.9rem;
    margin: 5px 0 0;
  }
  .info-text{
    padding-left: 20px;
    padding-right: 40px;
    margin-top: 100px;
  }
  .info-text h1{
    font-size: 15px;
    color: #000;
  }
  .info-text h2{
    font-size: 15px;
    color: #000;
  }
  .info-text2{
    padding-left: 20px;
    padding-right: 40px;
  }
  .info-text2 h1{
    font-size: 15px;
    color: #000;
  }
  .info-text2 h2{
    font-size: 15px;
    color: #000;
  }
  /* Responsive Styles */
  @media (max-width:1400px){
    section{
      margin-left: 15px;
      margin-right: 15px;
    }
  }
  @media (max-width: 1280px){}
  @media (max-width: 1200px){
    .overlay{
        top: 200px;
    }
  }
  @media (max-width: 992px){
    .overlay{
        top: 125px;
    }
  }
  @media (max-width: 768px) {
    .overlay{
        top: 130px;
    }
    .heading {
      font-size: 1rem;
    }
  
    .paragraph {
      font-size: 0.8rem;
    }
  
    .logo {
      width: 100px;
    }
  }
  
  @media (max-width: 576px) {
    .overlay{
        top: 270px;
    }
    .heading {
      font-size: 0.9rem;
    }
  
    .paragraph {
      font-size: 0.7rem;
    }
  
    .logo {
      width: 100px;
    }
  }
  @media (max-width: 545px){
    .overlay{
        top: 355px;
    }
  }
  @media (max-width: 415px){
    .overlay{
        top: 260px;
    }
  }
  @media (max-width: 390px){
    .overlay{
        top: 230px;
    }
  }
  </style>
  