<template>
    <div class="image-group">
      <div v-for="project in projects.slice(0, 4)" :key="project.id" class="image-wrapper">
        <img :src="project.image ? `/storage/${project.image}` : '/images/default-image.png'" alt="Project Image" class="image">
        <div class="overlay">
          <p class="overlay-text">{{ project.name }}</p>
          <p class="overlay-text1">{{ project.community.name }}</p>
          <a :href="`/projects/${project.slug}`" class="overlay-button">VIEW DETAILS</a>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        projects: [], // Array to store project data
      };
    },
    created() {
      this.fetchProjects();
    },
    methods: {
      fetchProjects() {
        axios.get('/api/projects?limit=4')  // Fetch up to 4 projects
          .then(response => {
            // Store the projects data
            this.projects = response.data.data;
          })
          .catch(error => {
            console.error("There was an error fetching the projects!", error);
          });
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

  a,
  a:hover {
    text-decoration: none !important;
  }
  section{
    padding-left: 40px;
    padding-right: 40px;
  }

  /* Sidebar styles */
  
  /* Topbar styles */

  .sec-heading {
    margin-top: 30px;
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

  

  .image-container {
    position: relative;
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
  }

  .image-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 600px;
  }



  .image {
    width: 300px;
    height: 150px;
    border-radius: 8px;
    margin-left: -10px;
    border-radius: 25px
  }

  .extra-images {
    position: absolute;
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-top: -30%;
    transform: translateY(-50%);
    max-width: 600px;
    /* Same as .image-group max-width */
  }
  .extra-images a {
    display: block;
  }

  .extra-image {
    width: 330px;
    height: 330px;
    border-radius: 8px;
    
  }

  .extra-images img:first-of-type {
    position: absolute;
    left: -365px;
    margin-top: 30px;
  }

  .extra-images img:last-of-type {
    position: absolute;
    right: -365px;
    margin-top: 30px;
  }
  .image-wrapper {
  position: relative;
}
.overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
 
  width: 100%;
  height: 100%;
  border-radius: 8px; 

}


.overlay-text {
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 0px;
  margin-top: 15px;
}
.overlay-text1{
  font-size: 18px;
  font-weight: 500;
}

.overlay-button {
  padding: 7px 20px;
  background-color: #9C3133; 
  color: #fff; 
  border: none;
  border-radius: 5px;
  text-decoration: none;
  font-size: 10px;
  transition: background-color 0.3s ease;
}
.btn-container {
  text-align: center;
  margin-top: 20px;
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
  
}
@media (max-width:1400px){
  .sec-heading h1{
    margin-left: 20px;
  }
  .sec-heading p{
    margin-left: 20px;
  }
}


  /* Responsive Styles */
  @media (max-width: 1280px) {
  
  }

  @media (max-width: 1200px) {
  

    .image-group {
      margin-left: -50px;
      max-width: 500px;
      grid-template-columns: repeat(2, 1fr);
    }
    .extra-image {
    width: 200px;
    height: 330px;
    border-radius: 8px;
    
  }

  .extra-images img:first-of-type {
    position: absolute;
    left: -200px;
  }

  .extra-images img:last-of-type {
    position: absolute;
    right: -200px;
  }

  }

  @media (max-width: 992px) {
    .header .navbar-brand {
      margin-left: -70px;
    }

    .act-buttons {
      margin-right: -40px;
    }

    .extra-images {
      display: none;
    }

    .image-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      max-width: 600px;
    }

    .image {
      width: 300px;
      height: 220px;
      border-radius: 8px;
    }


  }

  @media (max-width: 768px) {
    .header .navbar-brand {
      margin-left: -60px;
    }

    .act-buttons {
      margin-right: -10px;
    }

    .image-group {
      grid-template-columns: 1fr;
      max-width: 100%;
    }

    .extra-images {
      display: none;
    }

    .image-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      max-width: 600px;
    }

    .image {
      width: 300px;
      height: 220px;
      border-radius: 8px;
    }
  }

  @media (max-width: 576px) {
    .header .navbar-brand a {
      display: none;
      margin-right: 0px;
    }

    .act-buttons {
      margin-right: 20px;
      margin-top: 10px;
    }

    aside {
      top: 0px;
    }

    .whatsapp {
      margin-top: -5px;
    }

    .lni-whatsapp::before {
      content: "\f232";
      font-family: 'FontAwesome';
      color: #fff;
      font-size: 24px;
    }

    .sec-heading h1 {
      font-size: 20px;
      font-weight: 600;
    }

    .sec-heading p {
      font-size: 18px;
      font-weight: 400;
    }

    .image-group {
      grid-template-columns: 1fr; /* Single column layout for medium screens */
    max-width: 100%; /* Full width */
      gap: 10px;
      margin-left: 0px;
    }

    .image {
      width: 100%;
      height: auto;
    }
  }
</style>