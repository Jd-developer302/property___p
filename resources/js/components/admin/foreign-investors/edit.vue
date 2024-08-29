<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Foreign Investor</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/foreign-investors">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Foreign Investor</h6>
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
                                        <label class="form-label">Title</label>
                                        <input type="text" v-model="form.title" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" name="slug" required readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea id="description" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" @change="handleImageUpload" class="form-control" name="image" accept="image/*">
                                        <img v-if="imagePreview" :src="imagePreview" alt="Image Preview" class="mt-2" width="100" height="100">
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
import { ref, onMounted, nextTick, watch, onUnmounted } from 'vue';
import { useRouter, useRoute } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';
import 'summernote/dist/summernote-lite.min.css';
import $ from 'jquery';
import 'summernote/dist/summernote-lite.min.js';
import slugify from 'slugify';

const form = ref({
    name: '',
    title: '',
    slug: '',
    description: '',
    image: null 
});
const imagePreview = ref(null);
const router = useRouter();
const route = useRoute();
const investorId = route.params.id;

watch(() => form.value.name, (newName) => {
    form.value.slug = slugify(newName, { lower: true });
});

const fetchInvestorData = async () => {
    try {
        const response = await axios.get(`/api/admin/foreign-investors/${investorId}`);
        const investor = response.data;
        form.value.name = investor.name;
        form.value.title = investor.title;
        form.value.slug = investor.slug;
        form.value.description = investor.description;
        $('#description').summernote('code', investor.description); 
        if (investor.image) {
            imagePreview.value = `/storage/${investor.image}`; 
        }
    } catch (error) {
        console.error('Error fetching foreign investor data:', error);
    }
};

const handleImageUpload = (event) => {
    const file = event.target.files[0];
    if (file) {
        form.value.image = file;
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.value = e.target.result;
        };
        reader.readAsDataURL(file);
    }
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('title', form.value.title);
    formData.append('description', $('#description').summernote('code'));
    
    if (form.value.image) {
        formData.append('image', form.value.image);
    }

    try {
        const response = await axios.put(`/api/admin/foreign-investors/${investorId}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/foreign-investors');
    } catch (error) {
        console.error('There was an error!', error);
        if (error.response && error.response.data.errors) {
            alert(JSON.stringify(error.response.data.errors));
        } else {
            alert('An unexpected error occurred.');
        }
    }
};


onMounted(() => {
    nextTick(() => {
        $('#description').summernote({
            placeholder: 'Enter description here...',
            tabsize: 2,
            height: 200
        });
        fetchInvestorData();
    });
});

onUnmounted(() => {
    $('#description').summernote('destroy');
});
</script>

<style scoped>
img {
    object-fit: cover;
    border-radius: 5px;
}
</style>
