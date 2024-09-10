<template>
    <Base>
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Project Location List</h1>
        <li class="breadcrumb-item" style="list-style: none;">
          <router-link class="btn btn-primary" to="/admin/projectlocation/create">+ New</router-link>
        </li>
      </div>
  
      <!-- Main Content -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Project Location List</h6>
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
                      <th>Image</th>
                      <th>Description</th>
                      <th>Project Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Project Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr v-if="projectLocations.length === 0">
                      <td colspan="6" class="text-center">No ProjectLocations Available</td>
                    </tr>
                    <tr v-else v-for="projectloaction in projectLocations" :key="projectloaction.id">
                      <td>{{ projectloaction.name }}</td>
                      <td>{{ projectloaction.slug }}</td>
                      <td>
                        <img :src="`/storage/${projectloaction.image}`" alt="Master Plan Image" width="100" height="100" />
                      </td>
                      <td>
                        {{ stripHtmlTags(projectloaction.description).slice(0, 100) }}...
                      </td>
                      <td>{{ projectloaction.project.name }}</td>
                      <td class="d-flex">
                        <router-link :to="`/admin/projectlocation/${projectloaction.id}/edit`" class="btn btn-primary btn-sm ml-1">
                          <i class="fa-solid fa-pencil"></i>
                        </router-link>
                        
                        <button @click="deleteItem(projectloaction.id)" class="btn btn-danger btn-sm mr-2"><i class="fa-solid fa-trash"></i></button>
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
  
  const projectLocations = ref([]);
  const loading = ref(true);
  const error = ref(null);
  
  const fetchOverviews = async () => {
    loading.value = true;
    error.value = null;
    try {
      const response = await axios.get('/api/admin/projectlocations'); // Corrected endpoint
      projectLocations.value = response.data; 
    } catch (err) {
      error.value = 'Error fetching master plans: ' + err.message; // Updated error message
    } finally {
      loading.value = false;
    }
  };
  
  
const deleteItem = async (id) => {
    try {
        await axios.delete(`/api/admin/projectlocations/${id}`);
        projectLocations.value = projectLocations.value.filter(projectloaction => projectloaction.id !== id); // Update local list after deletion
    } catch (error) {
        console.error('Error deleting item:', error);
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
  