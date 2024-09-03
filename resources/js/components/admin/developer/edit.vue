<template>
    <Base>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Developer</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/developers">Back to List</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Developer</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="validateForm">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input 
                                    v-model="developer.name" 
                                    type="text" 
                                    class="form-control" 
                                    id="name" 
                                    :class="{ 'is-invalid': errors.name }"
                                    required>
                                <div v-if="errors.name" class="invalid-feedback">
                                    {{ errors.name }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input 
                                    v-model="developer.slug" 
                                    type="text" 
                                    class="form-control" 
                                    id="slug" 
                                    :class="{ 'is-invalid': errors.slug }"
                                    required>
                                <div v-if="errors.slug" class="invalid-feedback">
                                    {{ errors.slug }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea 
                                    v-model="developer.description" 
                                    id="description" 
                                    class="form-control" 
                                    rows="5"
                                    :class="{ 'is-invalid': errors.description }"></textarea>
                                <div v-if="errors.description" class="invalid-feedback">
                                    {{ errors.description }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input 
                                    @change="handleLogoChange" 
                                    type="file" 
                                    class="form-control-file" 
                                    id="logo">
                                <img 
                                    v-if="developer.logo" 
                                    :src="getImageUrl(developer.logo)" 
                                    alt="Developer Logo" 
                                    width="100" 
                                    class="mt-2">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Base>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';
import $ from 'jquery';
import 'summernote/dist/summernote-lite.min.css';
import 'summernote/dist/summernote-lite.min.js';

const developer = ref({
    name: '',
    slug: '',
    description: '',
    logo: ''
});
const errors = ref({});
const logoFile = ref(null);
const route = useRoute();
const id = ref(route.params.id);

const validateForm = () => {
    errors.value = {}; 

    if (!developer.value.name) {
        errors.value.name = 'Name is required.';
    }
    if (!developer.value.slug) {
        errors.value.slug = 'Slug is required.';
    }


    if (Object.keys(errors.value).length === 0) {
        updateDeveloper();
    }
};

const fetchDeveloper = async () => {
    try {
        const response = await axios.get(`/api/admin/developers/${id.value}`);
        developer.value = response.data;
        $('#description').summernote({
            height: 300,
            callbacks: {
                onInit: function() {
                    $(this).summernote('code', developer.value.description);
                }
            }
        });
    } catch (error) {
        console.error("Error fetching developer:", error);
    }
};

const updateDeveloper = async () => {
    try {
        const formData = new FormData();
        formData.append('name', developer.value.name);
        formData.append('slug', developer.value.slug);
        formData.append('description', $('#description').summernote('code'));
        if (logoFile.value) {
            formData.append('logo', logoFile.value);
        }

        await axios.put(`/api/admin/developers/${id.value}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
    } catch (error) {
        console.error("Error updating developer:", error.response.data);
    }
};

const handleLogoChange = (event) => {
    const file = event.target.files[0];
    if (file) {
        logoFile.value = file;
    }
};

const getImageUrl = (logo) => {
    return logo ? `/storage/${logo}` : '/images/default-logo.png';
};

watch(() => route.params.id, (newId) => {
    id.value = newId;
    fetchDeveloper();
}, { immediate: true });

onMounted(() => {
    fetchDeveloper();
});
</script>
