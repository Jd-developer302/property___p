<template>
    <Base>
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Features List</h1>
        <li class="breadcrumb-item" style="list-style: none;">
          <router-link class="btn btn-primary" to="/admin/features/create">+ New</router-link>
        </li>
      </div>
  
      <!-- Main Content -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Features List</h6>
            </div>
  
            <div class="card-body">
              <div v-if="loading" class="text-center">Loading...</div>
              <div v-if="error" class="text-center text-danger">Error: {{ error }}</div>
  
              <div v-else class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Description</th>
                      <th>Project Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Name</th>
                      <th>Slug</th>
                      <th>Description</th>
                      <th>Project Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr v-if="features.length === 0">
                      <td colspan="5" class="text-center">No Overviews Available</td>
                    </tr>
                    <tr v-else v-for="feature in features" :key="feature.id">
                        <td>{{ feature.name }}</td>
                        <td>{{ feature.slug }}</td>
                      <td>
                        {{ stripHtmlTags(feature.description).slice(0, 100) }}...
                      </td>
                      <td>{{ feature.project.name }}</td>
                      <td class="d-flex">
                        <router-link :to="`/admin/features/${feature.id}/edit`" class="btn btn-primary btn-sm ml-1">
  
                          <i class="fa-solid fa-pencil"></i>
                        </router-link>
                        <button @click="deleteOverview(feature.id)" class="btn btn-danger btn-sm ml-1">
                          <i class="fa-solid fa-trash"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Base>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  import Base from '../layouts/Base.vue';
  
  const features = ref([]);
  const loading = ref(true);
  const error = ref(null);
  
  const fetchOverviews = async () => {
    loading.value = true;
    error.value = null;
    try {
      const response = await axios.get('/api/admin/features');
      features.value = response.data; 
    } catch (err) {
      error.value = 'Error fetching overviews: ' + err.message;
    } finally {
      loading.value = false;
    }
  };
  
  const deleteOverview = async (id) => {
    if (confirm('Are you sure you want to delete this overview?')) {
      try {
        await axios.delete(`/api/admin/features/${id}`);
        fetchOverviews(); 
      } catch (error) {
        console.error('Error deleting overview:', error);
      }
    }
  };
 
  const stripHtmlTags = (text) => text.replace(/<\/?[^>]+>/gi, '');
  
  onMounted(() => {
    fetchOverviews();
  });
  </script>
  
  <style scoped>
  img {
    object-fit: cover;
    border-radius: 5px;
  }
  </style>
  