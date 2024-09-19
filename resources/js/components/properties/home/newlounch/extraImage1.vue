<template>

      <img  v-if="projects.length" :src="projects[0].image ? `/storage/${projects[0].image}` : '/images/default-image.png'" alt="Project Image" class="extra-image">

  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        projects: [],
      };
    },
    created() {
      this.fetchProject();
    },
    methods: {
      fetchProject() {
        axios.get(`/api/projects?limit=1`)  // Assuming the API supports a limit query parameter
          .then(response => {
            // Store only the first project
            this.projects = response.data.data.slice(0, 1);
          })
          .catch(error => {
            console.error("There was an error fetching the project!", error);
          });
      },
    },
  };
  </script>
  
 
  