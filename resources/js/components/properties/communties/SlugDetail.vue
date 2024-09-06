<template>
    <section class="container my-3 my-lg-5" v-if="community">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3 class="mb-2 mb-lg-5"style="color: #696969;font-family: Lato, sans-serif;font-weight: 600;">Premium Residential Properties <span class="d-block" style="color: #000;">in {{ community.name }}</span></h3>
        </div>
        <div class="col-md-6">
          <video width="100%" controls class="rounded" v-if="community.video">
            <source :src="getVideoUrl(community.video)" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <p v-else>No video available.</p>
        </div>
        <div class="col-md-6">
          <div class="overview" id="Project-Overview">
            <div v-html="community.description"></div>
          </div>
        </div>
      </div>
    </section>
    <div v-else>
      <p>Loading community details...</p>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  import { useRoute } from 'vue-router';
  
  const route = useRoute();
  const community = ref(null);
  
  const fetchCommunityData = async () => {
    const slug = route.params.slug;
    try {
      const response = await axios.get(`/api/communities/${slug}`);
      community.value = response.data;
    } catch (error) {
      console.error('Error fetching community data:', error);
    }
  };
  
  onMounted(() => {
    fetchCommunityData();
  });
  
  function getVideoUrl(video) {
    return video ? `/storage/${video}` : '/videos/default-video.mp4';
  }
  </script>
  
  <style scoped>
  /* Add your styles here */
  </style>
  