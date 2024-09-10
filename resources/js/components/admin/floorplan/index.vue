<template>
    <Base>
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">FloorPlan List</h1>
        <li class="breadcrumb-item" style="list-style: none;">
          <router-link class="btn btn-primary" to="/admin/floorplans/create">+ New</router-link>
        </li>
      </div>
  
      <!-- Main Content -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">FloorPlan List</h6>
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
                    <tr v-if="floorPlans.length === 0">
                      <td colspan="6" class="text-center">No Floor Plans Available</td>
                    </tr>
                    <tr v-else v-for="floorPlan in floorPlans" :key="floorPlan.id">
                      <td>{{ floorPlan.name }}</td>
                      <td>{{ floorPlan.slug }}</td>
                      <td>
                        <img :src="`/storage/${floorPlan.image}`" alt="Floor Plan Image" width="100" height="100" />
                      </td>
                      <td>{{ stripHtmlTags(floorPlan.description).slice(0, 100) }}...</td>
                      <td>{{ floorPlan.project.name }}</td>
                      <td class="d-flex">
                        <router-link :to="`/admin/floorplans/${floorPlan.id}/edit`" class="btn btn-primary btn-sm ml-1">
                          <i class="fa-solid fa-pencil"></i>
                        </router-link>
                        <button @click="deleteFloorPlan(floorPlan.id)" class="btn btn-danger btn-sm ml-1">
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
  
  const floorPlans = ref([]);
  const loading = ref(true);
  const error = ref(null);
  
  // Fetch floor plans from API
  const fetchFloorPlans = async () => {
    loading.value = true;
    error.value = null;
    try {
      // Append timestamp to avoid cached response
      const response = await axios.get(`/api/admin/floorplans?timestamp=${new Date().getTime()}`);
      floorPlans.value = response.data;
    } catch (err) {
      error.value = 'Error fetching floor plans: ' + err.message;
    } finally {
      loading.value = false;
    }
  };
  
  // Delete floor plan by ID
  const deleteFloorPlan = async (id) => {
    if (confirm('Are you sure you want to delete this floor plan?')) {
      try {
        await axios.delete(`/api/admin/floorplans/${id}`);
        // Remove the deleted floor plan from the list
        floorPlans.value = floorPlans.value.filter(floorPlan => floorPlan.id !== id);
        alert('Floor plan deleted successfully');
      } catch (error) {
        console.error('Error deleting floor plan:', error);
        alert('Error deleting floor plan. Please try again.');
      }
    }
  };
  
  // Utility to remove HTML tags from descriptions
  const stripHtmlTags = (text) => text.replace(/<\/?[^>]+>/gi, '');
  
  onMounted(() => {
    fetchFloorPlans();
  });
  </script>
  
  <style scoped>
  img {
    object-fit: cover;
    border-radius: 5px;
  }
  </style>
  