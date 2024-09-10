<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Feature</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/features">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Feature</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm">
                            <!-- Form Fields -->
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Projects</label>
                                        <select v-model="form.project_id" class="form-control" name="project_id" required>
                                            <option v-for="project in projects" :key="project.id" :value="project.id">{{ project.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" name="slug" required>
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
import { ref, onMounted, nextTick, watch } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';
import 'summernote/dist/summernote-lite.min.css';
import $ from 'jquery';
import 'summernote/dist/summernote-lite.min.js';
import slugify from 'slugify';

const form = ref({
    name: '',
    project_id: null,
    slug: '',
    description: '',
});

const projects = ref([]);
const router = useRouter();

// Watch for changes in the name field and auto-generate the slug
watch(() => form.value.name, (newName) => {
    form.value.slug = slugify(newName, { lower: true });
});



const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('project_id', form.value.project_id);
    formData.append('slug', form.value.slug);
    formData.append('description', $('#description').summernote('code'));
    


    try {
        await axios.post('/api/admin/features', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/features');
    } catch (error) {
        console.error('There was an error!', error);
    }
};

const fetchCategories = async () => {
    try {
        const response = await axios.get('/api/admin/projects');
        projects.value = response.data;
    } catch (error) {
        console.error('Error fetching categories:', error);
    }
};

onMounted(() => {
    fetchCategories();
    nextTick(() => {
        $('#description').summernote({
            placeholder: 'Enter article description here...',
            tabsize: 2,
            height: 200
        });
    });
});
</script>
