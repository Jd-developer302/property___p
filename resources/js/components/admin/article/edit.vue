<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Article</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/article">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Article</h6>
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
                                        <label class="form-label">Category</label>
                                        <select v-model="form.category_id" class="form-control" name="category_id" required>
                                            <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" name="slug" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea id="description" class="form-control" name="description"></textarea>
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
                                        <input type="text" v-model="form.meta_description" class="form-control" name="meta_description">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" v-model="form.meta_keywords" class="form-control" name="meta_keywords">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <input type="checkbox" v-model="form.status" value="1">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Created By</label>
                                        <input type="text" v-model="form.created_by" class="form-control" name="created_by" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" @change="handleFileUpload" class="form-control" name="image">
                                        <img v-if="form.image_url" :src="form.image_url" alt="Article Image" class="img-thumbnail mt-2" style="max-width: 200px;">
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
import { useRouter, useRoute } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';
import $ from 'jquery';
import 'summernote/dist/summernote-lite.min.css';
import 'summernote/dist/summernote-lite.min.js';

const form = ref({
    id: null,
    name: '',
    meta_title: '',
    category_id: null,
    slug: '',
    description: '',
    meta_description: '',
    meta_keywords: '',
    status: false,
    created_by: null,
    image: null,
    image_url: null
});

const categories = ref([]);
const router = useRouter();
const route = useRoute();

const fetchArticle = async () => {
    try {
        const response = await axios.get(`/api/admin/articles/${route.params.id}`);
        const article = response.data;
        form.value = {
            ...form.value,
            ...article,
            image_url: article.image_url // Assuming the API returns the image URL
        };
        nextTick(() => {
            $('#description').summernote('code', form.value.description);
        });
    } catch (error) {
        console.error('Error fetching article:', error);
    }
};

const fetchCategories = async () => {
    try {
        const response = await axios.get('/api/admin/categories');
        categories.value = response.data;
    } catch (error) {
        console.error('Error fetching categories:', error);
    }
};

const handleFileUpload = (event) => {
    form.value.image = event.target.files[0];
};

const submitForm = async () => {
    form.value.description = $('#description').summernote('code');
    const formData = new FormData();
    
    Object.keys(form.value).forEach(key => {
        if (form.value[key] !== null && form.value[key] !== undefined) {
            formData.append(key, form.value[key]);
        }
    });

    try {
        const response = await axios.put(`/api/admin/articles/${form.value.id}`, formData, {
    headers: {
        'Content-Type': 'multipart/form-data'
    }
});

        router.push('/admin/article');
    } catch (error) {
        if (error.response && error.response.data && error.response.data.errors) {
            console.error('Validation errors:', error.response.data.errors);
        } else {
            console.error('There was an error!', error);
        }
    }
};




onMounted(() => {
    fetchCategories();
    fetchArticle();
    nextTick(() => {
        $('#description').summernote({
            placeholder: 'Enter article description here...',
            tabsize: 2,
            height: 200
        });
    });
});
</script>

<style scoped>
/* Add any additional styles if necessary */
</style>
