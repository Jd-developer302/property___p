<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Overview</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/overviews">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Overview</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm">
                            <!-- Form Fields -->
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Project</label>
                                        <select v-model="form.project_id" class="form-control" name="project_id" required>
                                            <option v-for="project in projects" :key="project.id" :value="project.id">
                                                {{ project.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Logo 1</label>
                                        <input type="file" @change="handleFileUpload('logo1', $event)" class="form-control" name="logo1" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Logo 2</label>
                                        <input type="file" @change="handleFileUpload('logo2', $event)" class="form-control" name="logo2" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea id="description" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
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
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';
import 'summernote/dist/summernote-lite.min.css';
import $ from 'jquery';
import 'summernote/dist/summernote-lite.min.js';


// Form state
const form = ref({
    project_id: '',
    logo1: null,
    logo2: null,
    description: '',
});

// Projects list
const projects = ref([]);
const router = useRouter();

// Fetch projects from API
const fetchProjects = async () => {
    try {
        const response = await axios.get('/api/admin/projects');
        projects.value = response.data;
    } catch (error) {
        console.error('Error fetching projects:', error);
    }
};

// Handle file uploads
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
    formData.append('logo1', form.value.logo1);
    formData.append('logo2', form.value.logo2);
    formData.append('description', $('#description').summernote('code'));

    try {
        await axios.post('/api/admin/overviews', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/overviews');
    } catch (error) {
        console.error('There was an error!', error);
    }
};

// Initialize Summernote on mount and fetch projects
onMounted(() => {
    fetchProjects();
    nextTick(() => {
        $('#description').summernote({
            placeholder: 'Enter description here...',
            tabsize: 2,
            height: 200
        });
    });
});
</script>

<style scoped>
/* Add any scoped styles if needed */
</style>
