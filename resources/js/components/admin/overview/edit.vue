<template>
    <Base>
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Overview</h1>
        <li class="breadcrumb-item" style="list-style: none;">
          <router-link class="btn btn-primary" to="/admin/overviews">- Back</router-link>
        </li>
      </div>
  
      <!-- Main Content -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Overview</h6>
            </div>
  
            <!-- Card Body -->
            <div class="card-body">
              <form @submit.prevent="submitForm">
                <div class="row mb-3 mt-3 mx-3">
                  <!-- Project Field -->
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
  
                  <!-- Logo 1 Field -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label for="logo1" class="form-label">Logo 1</label>
                      <input type="file" @change="handleFileUpload('logo1', $event)" class="form-control" id="logo1" accept="image/*">
                    </div>
                  </div>
  
                  <!-- Logo 2 Field -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label for="logo2" class="form-label">Logo 2</label>
                      <input type="file" @change="handleFileUpload('logo2', $event)" class="form-control" id="logo2" accept="image/*">
                    </div>
                  </div>
  
                  <!-- Description Field -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label for="description" class="form-label">Description</label>
                      <textarea id="description" class="form-control" name="description"></textarea>
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
    project_id: '',
    logo1: null,
    logo2: null,
    description: '',
  });
  
  const projects = ref([]);
  const router = useRouter();
  const route = useRoute(); // to get the overview ID from the route params
  
  // Fetch projects from API
  const fetchProjects = async () => {
    try {
      const { data } = await axios.get('/api/admin/projects');
      projects.value = data;
    } catch (error) {
      console.error('Error fetching projects:', error);
    }
  };
  
  // Handle file uploads for logos
  const handleFileUpload = (field, event) => {
    const file = event.target.files[0];
    if (file) {
      form.value[field] = file;
    }
  };
  
  // Submit form data
  const submitForm = async () => {
    const formData = new FormData();
    formData.append('project_id', form.value.project_id);
    if (form.value.logo1) formData.append('logo1', form.value.logo1);
    if (form.value.logo2) formData.append('logo2', form.value.logo2);
    formData.append('description', $('#description').summernote('code'));
  
    try {
      // Post request to update overview with the specific ID
      const overviewId = route.params.id; // Get the overview ID from the route
      await axios.post(`/api/admin/overviews-update/${overviewId}`, formData, {
        headers: {
          'Content-Type': 'multipart/form-data',
        },
      });
      router.push('/admin/overviews');
    } catch (error) {
      console.error('Error updating overview:', error);
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
  