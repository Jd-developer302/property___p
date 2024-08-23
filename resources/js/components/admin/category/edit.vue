<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/category">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="updateCategory" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <!-- Name Field -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Description Field -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea v-model="form.description" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <!-- Meta Title Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" v-model="form.meta_title" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Meta Description Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        <textarea v-model="form.meta_description" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <!-- Meta Keywords Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" v-model="form.meta_keywords" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Image Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" @change="handleFileUpload">
                                        <img v-if="form.imageUrl" :src="form.imageUrl" alt="Current Image" class="mt-2" style="max-width: 150px;">
                                    </div>
                                </div>
                                <!-- Navbar Status Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Navbar Status</label>
                                        <input type="checkbox" v-model="form.navbar_status" class="form-check-input ml-3">
                                    </div>
                                </div>
                                <!-- Status Field -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <input type="checkbox" v-model="form.status" class="form-check-input ml-3">
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
import { ref, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const route = useRoute();
const router = useRouter();
const form = ref({
    name: '',
    description: '',
    meta_title: '',
    meta_description: '',
    meta_keywords: '',
    navbar_status: false,
    status: false,
    image: null,
    imageUrl: ''
});

const fetchCategory = async () => {
    try {
        const response = await axios.get(`/api/admin/categories/${route.params.id}`);
        const data = response.data;
        form.value = { 
            ...data, 
            navbar_status: data.navbar_status === 1, 
            status: data.status === 1,
            imageUrl: data.image ? `/storage/${data.image}` : '' // Adjust path if needed
        };
    } catch (error) {
        console.error('Error fetching category data:', error.response ? error.response.data : error.message);
    }
};

const handleFileUpload = (event) => {
    form.value.image = event.target.files[0];
    form.value.imageUrl = URL.createObjectURL(event.target.files[0]);
};

const updateCategory = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('description', form.value.description);
    formData.append('meta_title', form.value.meta_title);
    formData.append('meta_description', form.value.meta_description);
    formData.append('meta_keywords', form.value.meta_keywords);
    formData.append('navbar_status', form.value.navbar_status ? 1 : 0);
    formData.append('status', form.value.status ? 1 : 0);
    if (form.value.image) {
        formData.append('image', form.value.image);
    }

    try {
        const response = await axios.put(`/api/admin/categories/${route.params.id}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        console.log('Category updated successfully:', response.data);
        router.push('/admin/category');
    } catch (error) {
        console.error('Error updating category:', error.response ? error.response.data : error.message);
    }
};

onMounted(() => {
    fetchCategory();
});
</script>


<style scoped>
/* Add your scoped styles here */
</style>
