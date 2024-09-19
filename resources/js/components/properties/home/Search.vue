<template>
    <div>
      <form @submit.prevent="handleSearch" class="narrow-w form-search d-flex mb-3">
        <input 
          v-model="searchQuery"  
          class="form-control px-4"  
          placeholder="Explore Top Selling Properties..." 
        />
        <select v-model="searchType" class="form-select mx-2">
          <option value="projects">Projects</option>
          <option value="developers">Developers</option>
          <option value="communities">Communities</option>
          <option value="locations">Locations</option>
          <option value="investors">Investors</option>
        </select>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
  
      <div v-if="loading" class="loading">Loading...</div>
  
      <div v-if="results.length">
        <ul>
          <li v-for="result in results" :key="result.id">
            <a :href="result.url" target="_blank">
              <strong>{{ result.name }}</strong> 
              <span>- {{ result.type }}</span>
            </a>
            <!-- Additional fields based on result type -->
            <div v-if="result.type === 'Project'">
              <p>Community: {{ result.community?.name }}</p>
              <p>Developer: {{ result.developer?.name }}</p>
            </div>
            <div v-if="result.type === 'Developer'">
              <p>Description: {{ result.description }}</p>
            </div>
            <!-- Add more conditional fields for Community, Location, etc. -->
          </li>
        </ul>
  
        <!-- Pagination Controls -->
        <div v-if="pagination">
          <button @click="fetchResults(pagination.prev_page_url)" :disabled="!pagination.prev_page_url">
            Previous
          </button>
          <button @click="fetchResults(pagination.next_page_url)" :disabled="!pagination.next_page_url">
            Next
          </button>
        </div>
      </div>
  
      <div v-if="!results.length && searched">
        <p>No results found for "{{ searchQuery }}".</p>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        searchQuery: '',
        searchType: 'projects',
        results: [],
        searched: false,
        loading: false,
        pagination: null
      };
    },
    methods: {
      async handleSearch() {
        if (!this.searchQuery) {
          alert('Please enter a search query');
          return;
        }
        this.loading = true;
  
        try {
          const response = await axios.get('/api/search', {
            params: {
              query: this.searchQuery,
              type: this.searchType,
            }
          });
  
          this.results = response.data.data; 
          this.pagination = response.data.meta; 
          this.searched = true;
        } catch (error) {
          console.error('Error fetching search results:', error);
        } finally {
          this.loading = false;
        }
      },
      async fetchResults(url) {
        if (!url) return;
        this.loading = true;
  
        try {
          const response = await axios.get(url);
          this.results = response.data.data;
          this.pagination = response.data.meta;
        } catch (error) {
          console.error('Error fetching paginated results:', error);
        } finally {
          this.loading = false;
        }
      }
    }
  };
  </script>
  

  
  <style scoped>
  .hero {
      position: relative;
      z-index: 1;
      margin-top: -70px;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
  }

  .hero-slide .img {
      height: 105%;
      background-size: cover;
      background-position: center;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
  }
  .input-field{
      z-index: 99;
  }

  .hero-content {
      position: relative;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      
      color: #fff; /* Text color to stand out against the background */
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow for better readability */
  }

  .heading {
      font-size: 52px;
      font-weight: bold;
      margin-bottom: 20px;
      text-transform: uppercase;
      font-family: 'Montserrat', sans-serif;
  }

  .form-search {
      max-width: 600px;
      width: 100%;
      margin: 0 auto; 
      
  }

  .form-control {
      border-radius: 0;
      padding: 30px;
      font-size: 1rem;
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
  }

  .btn-primary {
      padding: 15px 30px;
      font-size: 1rem;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
      background-color: #9C3133;
      border: #9C3133;
  }

</style>
  