<template>
    <Base>
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit FloorPlan</h1>
        <li class="breadcrumb-item" style="list-style: none;">
          <router-link class="btn btn-primary" to="/admin/floorplans">- Back</router-link>
        </li>
      </div>
  
      <!-- Main Content -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit FloorPlan</h6>
            </div>
  
            <!-- Card Body -->
            <div class="card-body">
              <form @submit.prevent="submitForm">
                <div class="row mb-3 mt-3 mx-3">
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Name</label>
                      <input type="text" v-model="form.name" class="form-control" required />
                    </div>
                  </div>
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label for="project" class="form-label">Project</label>
                      <select v-model="form.project_id" class="form-control" id="project" required>
                        <option value="" disabled>Select Project</option>
                        <option v-for="project in projects" :key="project.id" :value="project.id">
                          {{ project.name }}
                        </option>
                      </select>
                    </div>
                  </div>
  
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Slug</label>
                      <input type="text" v-model="form.slug" class="form-control" required />
                    </div>
                  </div>
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Image</label>
                      <input type="file" @change="handleImageUpload" class="form-control" name="image" accept="image/*" />
                    </div>
                  </div>
                  <!-- Description Field -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label for="description" class="form-label">Description</label>
                      <textarea id="description" class="form-control" name="description" v-model="form.description"></textarea>
                    </div>
                  </div>
                </div>
  
                <!-- Submit Button -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </Base>
  </template>
  
  <script setup>
  import { ref, onMounted, nextTick } from 'vue';
  import { useRouter, useRoute } from 'vue-router';
  import axios from 'axios';
  import Base from '../layouts/Base.vue';
  import 'summernote/dist/summernote-lite.min.css';
  import $ from 'jquery';
  import 'summernote/dist/summernote-lite.min.js';
  
  // Reactive form state
  const form = ref({
    name: '',
    project_id: null,
    slug: '',
    description: '',
    image: null,
  });
  
  const projects = ref([]);
  const router = useRouter();
  const route = useRoute(); // to get the floorPlan ID from the route params
  
  // Fetch projects from API
  const fetchProjects = async () => {
    try {
      const { data } = await axios.get('/api/admin/projects');
      projects.value = data;
    } catch (error) {
      console.error('Error fetching projects:', error);
    }
  };
  
  // Handle file uploads for images
  const handleImageUpload = (event) => {
    const file = event.target.files[0];
    if (file) {
      form.value.image = file;
    }
  };
  
  const submitForm = async () => {
  const formData = new FormData();
  formData.append('name', form.value.name);
  formData.append('project_id', form.value.project_id);
  formData.append('slug', form.value.slug);
  formData.append('description', form.value.description);
  if (form.value.image) formData.append('image', form.value.image);

  try {
    const floorPlanId = route.params.id; // Get the floorPlan ID from the route
    const response = await axios.post(`/api/admin/floorplans-update/${floorPlanId}`, formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
      },
    });
    router.push('/admin/floorplans');
  } catch (error) {
    if (error.response && error.response.status === 422) {
      console.error('Validation Error:', error.response.data.errors);
    } else {
      console.error('Error updating floor plan:', error);
    }
  }
};

  
  // Initialize Summernote and fetch projects on mount
  onMounted(() => {
    fetchProjects();
    nextTick(() => {
      $('#description').summernote({
        placeholder: 'Enter description here...',
        tabsize: 2,
        height: 200,
      });
    });
  });
  </script>
  
  <style scoped>
  img {
    object-fit: cover;
    border-radius: 5px;
  }
  </style>
  