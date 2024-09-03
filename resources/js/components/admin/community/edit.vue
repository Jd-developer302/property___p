<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Community</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/communities">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Community</h6>
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
                                        <textarea id="summernote" v-model="form.description" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" @change="handleFileUpload('image', $event)" name="image">
                                        <img v-if="form.imagePreview" :src="form.imagePreview" alt="Current Image" width="100" class="mt-2">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Video</label>
                                        <input type="file" class="form-control" @change="handleFileUpload('video', $event)" name="video">
                                        <video v-if="form.videoPreview" :src="form.videoPreview" controls width="200" class="mt-2"></video>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" name="slug" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Base>
</template>
<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';
import 'summernote/dist/summernote-lite.min.css';
import $ from 'jquery';
import 'summernote/dist/summernote-lite.min.js';

const form = ref({
    name: '',
    description: '',
    image: null,
    imagePreview: null,
    slug: '',
    video: null,
    videoPreview: null,
});

const router = useRouter();
const route = useRoute();
const id = route.params.id;

const fetchData = async () => {
    try {
        const response = await axios.get(`/api/admin/communities/${id}`);
        const { name, description, image, slug, video } = response.data;

        form.value.name = name;
        form.value.description = description;
        form.value.slug = slug;
        form.value.imagePreview = image ? `/storage/${image}` : null;
        form.value.videoPreview = video ? `/storage/${video}` : null;
    } catch (error) {
        console.error("Error fetching developer:", error);
    }
};

const handleFileUpload = (field, event) => {
    form.value[field] = event.target.files[0];
    if (field === 'image') {
        form.value.imagePreview = URL.createObjectURL(event.target.files[0]);
    } else if (field === 'video') {
        form.value.videoPreview = URL.createObjectURL(event.target.files[0]);
    }
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('description', form.value.description);
    formData.append('slug', form.value.slug);
    
    if (form.value.image) {
        formData.append('image', form.value.image);
    }
    
    if (form.value.video) {
        formData.append('video', form.value.video);
    }

    try {
        await axios.put(`/api/admin/communities/${id}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/communities');
    } catch (error) {
        if (error.response) {
            // The request was made and the server responded with a status code
            // that falls out of the range of 2xx
            console.error('Error data:', error.response.data);
            console.error('Error status:', error.response.status);
            console.error('Error headers:', error.response.headers);
        } else if (error.request) {
            // The request was made but no response was received
            console.error('Error request:', error.request);
        } else {
            // Something happened in setting up the request that triggered an Error
            console.error('Error message:', error.message);
        }
    }
};


onMounted(() => {
    fetchData();

    $('#summernote').summernote({
        height: 300,
        callbacks: {
            onChange: function(contents) {
                form.value.description = contents;
            }
        }
    });
});

onBeforeUnmount(() => {
    $('#summernote').summernote('destroy');
});
</script>
