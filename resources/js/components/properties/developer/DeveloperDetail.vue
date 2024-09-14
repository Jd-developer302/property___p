<template>
  <div class="container mt-5">
    <div class="row" v-if="developers.length > 0">
      <div class="col-md-4 mb-4" v-for="developer in developers" :key="developer.id">
        <div class="dev-bg border-0 shadow rounded-0 mb-4">
          <!-- Default background image -->
          <img :src="thumb1" class="card-img-top" width="122" height="129" alt="Default Background Image">
          <div class="card-body">
            <!-- Use slug in href instead of id -->
            <a :href="`/developer/${developer.slug}`" style="text-decoration: none;">
              <figure class="shadow text-center">
                <!-- Display developer logo using the correct path -->
                <img :src="`/storage/${developer.logo}`" width="122" height="129" alt="Developer Logo" class="img-fluid">
              </figure>
              <h4 class="card-title">{{ developer.name }}</h4>
              <p class="card-text">Total Projects: <span>{{ developer.projects_count }}</span></p>
              <!-- View Details button with slug -->
              <span class="btn-hover default-btn" :href="`/developer/${developer.slug}`">View Details</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div v-else>
      <p>No developers found</p>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import thumb1 from '@/assets/img/dev-bg.jpg'; // Default background image
import axios from 'axios';

const developers = ref([]);

// Fetch developers from the backend
const fetchDevelopers = async () => {
  try {
    const response = await axios.get('/api/all_developers'); // API endpoint for developers with logos
    developers.value = response.data.data;
    console.log(developers.value); // Log to verify logos and slugs
  } catch (error) {
    console.error('Error fetching developers:', error);
  }
};

// Fetch developers on component mount
onMounted(() => {
  fetchDevelopers();
});
</script>



  

<style scoped>
    .card {
        overflow: hidden;
        transition: transform 0.3s;
    }

    .card-title {
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 5px;
        color: #000;
        text-decoration: none; /* Ensure no underline */
    }

    .card-text {
        font-size: 13px;
        color: #847f7f;
        letter-spacing: .5px;
        font-weight: 500;
        text-decoration: none; /* Ensure no underline */
    }

    .card a {
        text-decoration: none; /* Remove underline from all links in card */
    }

    .card a:hover {
        text-decoration: none; /* Ensure no underline on hover */
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        height: 200px;
        object-fit: cover;
        transition: opacity 0.3s;
    }

    .card:hover img {
        opacity: 0.7;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .dev-bg,
    .dev-bg figure {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        position: relative;
    }

    .logo-overlay {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 50px;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.3s;
    }

    .card:hover .logo-overlay {
        opacity: 1;
    }

    .default-btn {
        display: inline-block;
        font-weight: 500;
        line-height: 1;
        padding: 10px 15px;
        text-transform: uppercase;
        z-index: 9;
        position: relative;
        margin-top: 10px;
        margin-bottom: 10px;
        letter-spacing: 1px;
        border: 1px solid #9C3133;
        color: #9C3133 !important;
        text-decoration: none; /* Ensure no underline */
    }

    .btn-hover::before {
        background: #9C3133;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transform: scaleX(0);
        transform-origin: 0 50% 0;
        transition-duration: .3s;
        transition-property: transform;
        transition-timing-function: ease-out;
        z-index: -1;
    }

    .btn-hover:hover::before {
        transform: scaleX(1);
    }

    .default-btn:hover {
        color: #fff !important;
    }

    figure {
        margin: 0 auto 1rem; /* Center the figure and add bottom margin */
        display: flex; /* Use flex to center content */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
    }

    figure img {
        max-width: 100%; /* Ensure image fits within the figure */
        height: auto; /* Maintain aspect ratio */
    }

    .dev-bg figure {
        margin-top: -65px;
        z-index: 1;
        background: #fff;
        width: 250px;
        height: 105px;
        overflow: hidden;
        text-align: center;
        display: flex; /* Use flex to center the figure's content */
        justify-content: center; /* Center content horizontally */
        align-items: center; /* Center content vertically */
    }
</style>

