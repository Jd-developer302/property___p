<template>
  <section>
    <div class="container-xxl mb-3">
      <div class="row">
        <div class="col">
          <div class="sec-heading mx-auto">
            <h1>360° View Walkthrough</h1>
            <p>Get a better perspective of the properties with our 360 degree views</p>
          </div>
        </div>
      </div>
      <div class="row images-row">
        <div class="col" v-for="project in limitedProjects" :key="project.id">
          <div class="image-container">
           <a :href="`/projects/${project.slug}`"> <img :src="project.image ? `/storage/${project.image}` : '/images/default-image.png'"
            :alt="project.name" class="img-fluid" />
            <p>{{ project.name }}</p></a>
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
          projects: [],
          totalProjects: 0,
          currentPage: 1,
          totalPages: 0,
      };
  },
  computed: {
      limitedProjects() {
          // Limit to only the first 4 projects
          return this.projects.slice(0, 4);
      }
  },
  created() {
      this.fetchProjects(this.currentPage);
  },
  methods: {
      fetchProjects(page) {
          axios.get(`/api/projects?page=${page}`)
              .then(response => {
                  this.projects = response.data.data;
                  this.totalProjects = response.data.total;
                  this.totalPages = response.data.last_page;
              })
              .catch(error => {
                  console.error("There was an error fetching the projects!", error);
              });
      },
      handlePageChange(page) {
          this.fetchProjects(page);
      },
  },
};
</script>


<style scoped>
body {
  background: #fff;
  font-family: Montserrat, sans-serif;
  margin: 0;
  font-size: 14px;
  overflow-x: hidden;
  color: #404244;
  font-weight: 400;
  line-height: 1.8;
}

a {
  transition: .3s all ease;
}

a, a:hover {
  text-decoration: none !important;
}



.sec-heading {
    margin-bottom: 20px;
  }
  
  .sec-heading h1 {
    text-transform: uppercase;
    margin-bottom: 10px;
    line-height: 36px;
    font-size: 24px;
    margin-left: 15px;
    font-weight: 600;
    color: #9c3133;
    font-family: 'Montserrat', sans-serif;
  }
  
  .sec-heading p {
    color: #000;
    font-size: 17px;
    margin-left: 15px;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif;
  }

.images-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.image-container {
  text-align: center;
  margin-bottom: 20px;
}

.image-container img {
  width: 100%;
  max-width: 300px;
  margin-bottom: 10px;
}

.image-container p {
  font-size: 18px;
  font-weight: 600;
  color: #404244;
}

/* Responsive Styles */
@media (max-width: 992px) {
  .images-row {
    flex-direction: row;
    justify-content: space-between;
  }

  .col {
    flex: 0 0 48%;
    max-width: 48%;
  }

  .image-container img {
    max-width: 100%;
  }
}

@media (max-width: 576px) {
  .col {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .images-row {
    flex-direction: column;
    align-items: center;
  }
}
</style>
