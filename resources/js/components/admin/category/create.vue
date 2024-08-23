<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/category">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea v-model="form.description" class="form-control" name="description" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" v-model="form.meta_title" class="form-control" name="meta_title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        <textarea v-model="form.meta_description" class="form-control" name="meta_description" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" v-model="form.meta_keywords" class="form-control" name="meta_keywords" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Navbar Status</label>
                                        <input type="checkbox" v-model="form.navbar_status" class="form-check-input ml-3" name="navbar_status">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <input type="checkbox" v-model="form.status" class="form-check-input ml-3" name="status">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" @change="handleFileUpload" name="image">
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
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const form = ref({
    name: '',
    description: '',
    meta_title: '',
    meta_description: '',
    meta_keywords: '',
    navbar_status: false,
    status: false,
    image: null,
    created_by: 1,  // Set this value dynamically based on your application
});

const router = useRouter();

const handleFileUpload = (event) => {
    form.value.image = event.target.files[0];
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('description', form.value.description);
    formData.append('meta_title', form.value.meta_title);
    formData.append('meta_description', form.value.meta_description);
    formData.append('meta_keywords', form.value.meta_keywords);
    formData.append('navbar_status', form.value.navbar_status ? '1' : '0'); // Ensure boolean values
    formData.append('status', form.value.status ? '1' : '0'); // Ensure boolean values
    formData.append('created_by', form.value.created_by);

    if (form.value.image) {
        formData.append('image', form.value.image);
    }

    try {
        await axios.post('/api/admin/categories', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        });
        router.push('/admin/category');
    } catch (error) {
        if (error.response) {
            console.error('Response error:', error.response.data);
        } else {
            console.error('There was an error!', error);
        }
    }
};



</script>
