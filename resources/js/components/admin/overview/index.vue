<template>
  <Base>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Overviews List</h1>
      <li class="breadcrumb-item" style="list-style: none;">
        <router-link class="btn btn-primary" to="/admin/overviews/create">+ New</router-link>
      </li>
    </div>

    <!-- Main Content -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Overviews List</h6>
          </div>

          <div class="card-body">
            <div v-if="loading" class="text-center">Loading...</div>
            <div v-if="error" class="text-center text-danger">Error: {{ error }}</div>

            <div v-else class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Logo 1</th>
                    <th>Logo 2</th>
                    <th>Description</th>
                    <th>Project Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Logo 1</th>
                    <th>Logo 2</th>
                    <th>Description</th>
                    <th>Project Name</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr v-if="overviews.length === 0">
                    <td colspan="5" class="text-center">No Overviews Available</td>
                  </tr>
                  <tr v-else v-for="overview in overviews" :key="overview.id">
                    <td>
                      <img :src="getImageUrl(overview.logo1)" alt="Logo 1" width="100" height="100" />
                    </td>
                    <td>
                      <img :src="`/storage/${overview.logo2}`" alt="Logo 2" width="100" height="100" />
                    </td>
                    <td>
                      {{ stripHtmlTags(overview.description).slice(0, 100) }}...
                    </td>
                    <td>{{ overview.project.name }}</td>
                    <td class="d-flex">
                      <router-link :to="`/admin/overviews/${overview.id}/edit`" class="btn btn-primary btn-sm ml-1">

                        <i class="fa-solid fa-pencil"></i>
                      </router-link>
                      <button @click="deleteOverview(overview.id)" class="btn btn-danger btn-sm ml-1">
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

const overviews = ref([]);
const loading = ref(true);
const error = ref(null);

const fetchOverviews = async () => {
  loading.value = true;
  error.value = null;
  try {
    const response = await axios.get('/api/admin/overviews');
    overviews.value = response.data; 
  } catch (err) {
    error.value = 'Error fetching overviews: ' + err.message;
  } finally {
    loading.value = false;
  }
};

const deleteOverview = async (id) => {
  if (confirm('Are you sure you want to delete this overview?')) {
    try {
      await axios.delete(`/api/admin/overviews/${id}`);
      fetchOverviews(); 
    } catch (error) {
      console.error('Error deleting overview:', error);
    }
  }
};
const getImageUrl = (logo) => {
      return logo ? `/storage/${logo}` : '/images/default-logo.png'; 
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
