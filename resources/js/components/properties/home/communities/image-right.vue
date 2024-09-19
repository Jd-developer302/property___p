<template>
    <div>
      <!-- Display the Right Top image from the third community -->
      <div class="image-right-top" v-if="thirdCommunity">
        <a :href="`/communities/${thirdCommunity.slug}`">
          <img :src="getImageUrl(thirdCommunity.image)" :alt="thirdCommunity.name" />
        </a>
      </div>
      
      <!-- Display the Right Bottom image from the fourth community -->
      <div class="image-right-bottom" v-if="fourthCommunity">
        <a :href="`/communities/${fourthCommunity.slug}`">
          <img :src="getImageUrl(fourthCommunity.image)" :alt="fourthCommunity.name" />
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
        thirdCommunity: {}, // Property to store the third community
        fourthCommunity: {}, // Property to store the fourth community
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
          if (this.communities.data.length > 3) {
            this.thirdCommunity = this.communities.data[2]; // Third community
            this.fourthCommunity = this.communities.data[3]; // Fourth community
          } else if (this.communities.data.length === 3) {
            this.thirdCommunity = this.communities.data[2]; // Only third community
            this.fourthCommunity = {}; // No fourth community
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
  