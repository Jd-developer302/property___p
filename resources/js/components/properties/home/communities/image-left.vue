<template>
    <div>
      <!-- Display the Left Top image from the first community -->
      <div class="image-left-top" v-if="firstCommunity">
        <a :href="`/communities/${firstCommunity.slug}`">
          <img :src="getImageUrl(firstCommunity.image)" :alt="firstCommunity.name" />
        </a>
      </div>
  
      <!-- Display the Left Bottom image from the second community -->
      <div class="image-left-bottom" v-if="secondCommunity">
        <a :href="`/communities/${secondCommunity.slug}`">
          <img :src="getImageUrl(secondCommunity.image)" :alt="secondCommunity.name"  height="120%"/>
        </a>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        communities: {
          data: [],
          current_page: 1,
          last_page: 1,
          prev_page_url: null,
          next_page_url: null,
        },
        firstCommunity: {}, // Property to store the first community
        secondCommunity: {}, // Property to store the second community
      };
    },
    created() {
      this.fetchCommunities();
    },
    methods: {
      async fetchCommunities(url = '/api/all_communities') {
        try {
          const response = await axios.get(url);
          this.communities = response.data;
  
          // Set default communities to display
          if (this.communities.data.length > 1) {
            this.firstCommunity = this.communities.data[0]; // First community
            this.secondCommunity = this.communities.data[1]; // Second community
          } else if (this.communities.data.length === 1) {
            this.firstCommunity = this.communities.data[0]; // Only one community
            this.secondCommunity = {}; // No second community
          }
        } catch (error) {
          console.error('Error fetching communities:', error);
        }
      },
      getImageUrl(image) {
        return image ? `/storage/${image}` : '/images/default-image.png';
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add your styles here */
  
  .sec-heading {
    margin-bottom: 20px;
  }
  
  .sec-heading h1 {
    text-transform: uppercase;
    margin-bottom: 10px;
    line-height: 36px;
    font-size: 24px;
    font-weight: 600;
    color: #9c3133;
    font-family: 'Montserrat', sans-serif;
  }
  
  .sec-heading p {
    color: #000;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif;
  }
  
  .image-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  
  .image-left-column,
  .image-right-column {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 20%;
  }
  
  .image-left-top,
  .image-right-top,
  .image-left-bottom,
  .image-right-bottom {
    width: 100%;
  }
  
  .image-left-top,
  .image-right-top {
    height: 50%;
  }
  
  .image-left-bottom,
  .image-right-bottom {
    height: 50%;
    margin-top: 10px;
  }
  
  .image-center {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    max-height: 150%;
    border-radius: 15px;
  }
  
  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  @media (max-width:1400px){
    section{
      margin-left: 15px;
      margin-right: 15px;
    }
  }
  @media (max-width: 992px) {
    .image-container {
      flex-direction: column;
      align-items: stretch;
    }
  
    .image-left-column,
    .image-right-column,
    .image-center {
      width: 100%;
      margin-bottom: 10px;
    }
  
    .image-left-column,
    .image-right-column {
      flex-direction: row;
    }
  
    .image-left-top,
    .image-left-bottom,
    .image-right-top,
    .image-right-bottom {
      height: auto;
      margin: 0 5px;
    }
  
    .image-center img {
      border-radius: 0;
    }
  }
  </style>
  