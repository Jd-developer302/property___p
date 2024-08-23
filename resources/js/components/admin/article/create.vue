<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Article</h1>
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
                        <h6 class="m-0 font-weight-bold text-primary">Create Article</h6>
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
                                        <label class="form-label">Category</label>
                                        <select v-model="form.category_id" class="form-control" name="category_id" required>
                                            <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" v-model="form.meta_title" class="form-control" name="meta_title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        <input type="text" v-model="form.meta_description" class="form-control" name="meta_description">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" v-model="form.meta_keywords" class="form-control" name="meta_keywords">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <input type="checkbox" v-model="form.status" value="1">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" @change="handleImageUpload" class="form-control" name="image" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Created By</label>
                                        <input type="text" v-model="form.created_by" class="form-control" name="created_by" required>
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
    meta_title: '',
    category_id: null,
    slug: '',
    description: '',
    meta_description: '',
    meta_keywords: '',
    status: false,
    created_by: '',
    image: null 
});

const categories = ref([]);
const router = useRouter();

// Watch for changes in the name field and auto-generate the slug
watch(() => form.value.name, (newName) => {
    form.value.slug = slugify(newName, { lower: true });
});

const handleImageUpload = (event) => {
    const file = event.target.files[0];
    if (file) {
        form.value.image = file;
    }
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('meta_title', form.value.meta_title);
    formData.append('category_id', form.value.category_id);
    formData.append('slug', form.value.slug);
    formData.append('description', $('#description').summernote('code'));
    formData.append('meta_description', form.value.meta_description);
    formData.append('meta_keywords', form.value.meta_keywords);
    formData.append('status', form.value.status ? '1' : '0');
    formData.append('created_by', form.value.created_by);
    
    if (form.value.image) {
        formData.append('image', form.value.image);
    }

    try {
        await axios.post('/api/admin/articles', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/article');
    } catch (error) {
        console.error('There was an error!', error);
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
