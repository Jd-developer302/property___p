<template>
     <img
        v-if="projects.length > 1"
        :src="projects[1].image ? `/storage/${projects[1].image}` : '/images/default-image.png'"
        alt="Project Image"
        class="extra-image"
      />
      <p v-else>No project image available</p>

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
    this.fetchProjects();
  },
  methods: {
    fetchProjects() {
      axios.get(`/api/projects?limit=2`)  // Fetch at least two projects
        .then(response => {
          // Store the projects
          this.projects = response.data.data;
        })
        .catch(error => {
          console.error("There was an error fetching the projects!", error);
        });
    },
  },
};
</script>
  