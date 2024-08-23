<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit City</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/city">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit City</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <select v-model="form.country_state_id" class="form-control" required>
                                            <option v-for="state in states" :key="state.id" :value="state.id">
                                                {{ state.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" v-model="form.title" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name" required>
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
                                        <label>Status</label>
                                        <input type="checkbox" v-model="form.status" :true-value="1" :false-value="0">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea v-model="form.description" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" @change="handleImageUpload" class="form-control" name="image">
                                        <img v-if="imageUrl" :src="imageUrl" alt="City Image" style="max-width: 150px; margin-top: 10px;">
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
import { ref, onMounted, watch } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const route = useRoute();
const router = useRouter();

const form = ref({
    country_state_id: '',
    title: '',
    name: '',
    slug: '',
    status: 0,
    description: '',
    image: null,
});

const states = ref([]);
const imageUrl = ref('');

const fetchCity = async () => {
    try {
        const response = await axios.get(`/api/admin/cities/${route.params.id}`);
        form.value = response.data;
        if (response.data.image) {
            imageUrl.value = `/storage/cities/${response.data.image}`;
        }
    } catch (error) {
        console.error('Error fetching city data:', error);
    }
};

const fetchStates = async () => {
    try {
        const response = await axios.get('/api/admin/states');
        states.value = response.data;
    } catch (error) {
        console.error('Error fetching states:', error);
    }
};

const handleImageUpload = (event) => {
    form.value.image = event.target.files[0];
    const reader = new FileReader();
    reader.onload = (e) => {
        imageUrl.value = e.target.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};

const submitForm = async () => {
    try {
        let formData = new FormData();
        for (const key in form.value) {
            formData.append(key, form.value[key]);
        }
        
        await axios.put(`/api/admin/cities/${route.params.id}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/city');
    } catch (error) {
        console.error('Error updating city:', error);
    }
};

onMounted(() => {
    fetchCity();
    fetchStates();
});
</script>

<style scoped>
    .card-footer {
        text-align: right;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }
</style>
