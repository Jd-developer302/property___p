<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create City</h1>
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
                        <h6 class="m-0 font-weight-bold text-primary">Create City</h6>
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
                                        <label class="form-label">Title</label>
                                        <input type="text" v-model="form.title" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <select v-model="form.country_state_id" class="form-control" name="country_state_id" required>
                                            <option v-for="state in states" :key="state.id" :value="state.id">{{ state.name }}</option>
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
                                        <label class="form-label">Total Area</label>
                                        <input type="number" v-model="form.total_area" class="form-control" name="total_area" step="any">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Density</label>
                                        <input type="number" v-model="form.density" class="form-control" name="density" step="any">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Population</label>
                                        <input type="number" v-model="form.population" class="form-control" name="population">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea v-model="form.description" class="form-control" name="description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="checkbox" v-model="form.status" value="1">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" @change="handleFileUpload" class="form-control" name="image">
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
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const form = ref({
    name: '',
    title: '',
    country_state_id: null,
    slug: '',
    total_area: null,
    density: null,
    population: null,
    description: '',
    status: false,
    image: null
});

const states = ref([]);

const router = useRouter();

const handleFileUpload = (event) => {
    form.value.image = event.target.files[0];
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('title', form.value.title);
    formData.append('country_state_id', form.value.country_state_id);
    formData.append('slug', form.value.slug);
    formData.append('total_area', form.value.total_area);
    formData.append('density', form.value.density);
    formData.append('population', form.value.population);
    formData.append('description', form.value.description);
    formData.append('status', form.value.status ? 1 : 0);
    if (form.value.image) {
        formData.append('image', form.value.image);
    }

    try {
        await axios.post('/api/admin/cities', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/city');
    } catch (error) {
        console.error('There was an error!', error.response.data);
    }
};

const fetchStates = async () => {
    try {
        const response = await axios.get('/api/admin/states'); // Adjust the endpoint to your actual states API
        states.value = response.data;
    } catch (error) {
        console.error('Error fetching states:', error);
    }
};

onMounted(() => {
    fetchStates();
});
</script>

<style scoped>
/* Add your styles here if needed */
</style>
