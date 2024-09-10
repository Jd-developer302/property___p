<template>
    <Base>
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Project Location</h1>
        <li class="breadcrumb-item" style="list-style: none;">
          <router-link class="btn btn-primary" to="/admin/masterplans">- Back</router-link>
        </li>
      </div>
  
      <!-- Main Content -->
      <div class="row">
        <div class="col-lg-12">
          <!-- Card for Editing MasterPlan -->
          <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Project Location</h6>
            </div>
  
            <!-- Card Body -->
            <div class="card-body">
              <form @submit.prevent="submitForm">
                <!-- Form Fields -->
                <div class="row mb-3 mt-3 mx-3">
                  <!-- Name Field -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Name</label>
                      <input type="text" v-model="form.name" class="form-control" required />
                    </div>
                  </div>
  
                  <!-- Projects Dropdown -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Projects</label>
                      <select v-model="form.project_id" class="form-control" required>
                        <option value="" disabled>Select a project</option>
                        <option v-for="project in projects" :key="project.id" :value="project.id">
                          {{ project.name }}
                        </option>
                      </select>
                    </div>
                  </div>
  
                  <!-- Slug Field -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Slug</label>
                      <input type="text" v-model="form.slug" class="form-control" required />
                    </div>
                  </div>
  
                  <!-- Image Upload -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Image</label>
                      <input type="file" @change="handleImageUpload" class="form-control" name="image" accept="image/*">
                    </div>
                  </div>
  
                  <!-- Description Field -->
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <label class="form-label">Description</label>
                      <textarea id="description" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
  
                <!-- Submit Button -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </Base>
  </template>
  
  <script setup>
  import { ref, onMounted, nextTick, watch } from 'vue';
  import { useRouter, useRoute } from 'vue-router';
  import axios from 'axios';
  import Base from '../layouts/Base.vue';
  import 'summernote/dist/summernote-lite.min.css';
  import $ from 'jquery';
  import 'summernote/dist/summernote-lite.min.js';
  import slugify from 'slugify';
  
  // Reactive form data
  const form = ref({
    name: '',
    project_id: null,
    slug: '',
    description: '',
    image: null, // image file
  });
  
  const projects = ref([]);
  const router = useRouter();
  const route = useRoute();
  
  const projectloactionId = route.params.id; // Get MasterPlan ID from route params
  
  // Watch the name field and generate slug automatically
  watch(() => form.value.name, (newName) => {
    form.value.slug = slugify(newName, { lower: true });
  });
  
  // Handle image upload
  const handleImageUpload = (event) => {
    const file = event.target.files[0];
    if (file) {
      form.value.image = file;
    }
  };
  
  // Fetch all available projects
  const fetchProjects = async () => {
    try {
      const { data } = await axios.get('/api/admin/projects');
      projects.value = data;
    } catch (error) {
      console.error('Error fetching projects:', error);
    }
  };
  
  // Fetch MasterPlan data
  const fetchMasterPlan = async () => {
    try {
      const { data } = await axios.get(`/api/admin/projectlocations/${projectloactionId}`);
      form.value = {
        ...data,
        description: $('#description').summernote('code'), // Assuming description is already formatted
      };
      $('#description').summernote('code', data.description);
    } catch (error) {
      console.error('Error fetching MasterPlan:', error);
    }
  };
  
  // Submit form to update the MasterPlan
  const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('project_id', form.value.project_id);
    formData.append('slug', form.value.slug);
    formData.append('description', $('#description').summernote('code'));
    if (form.value.image) {
      formData.append('image', form.value.image);
    }
  
    try {
      await axios.post(`/api/admin/projectlocations-update/${projectloactionId}`, formData, {
        headers: {
          'Content-Type': 'multipart/form-data',
        },
      });
      router.push('/admin/projectlocation'); // Redirect after successful update
    } catch (error) {
      console.error('Error updating MasterPlan:', error);
    }
  };
  
  // Initialize the component
  onMounted(() => {
    fetchProjects(); // Fetch the list of projects
    fetchMasterPlan(); // Fetch MasterPlan details
    nextTick(() => {
      $('#description').summernote({
        placeholder: 'Enter MasterPlan description here...',
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
