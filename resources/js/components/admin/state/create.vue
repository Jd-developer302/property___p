<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create State</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/state">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create State</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select v-model="form.country_id" class="form-select" required>
                                            <option v-for="country in countries" :key="country.id" :value="country.id">
                                                {{ country.name }}
                                            </option>
                                        </select>
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
                                        <input type="text" v-model="form.slug" class="form-control" name="slug" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="checkbox" v-model="form.status" value="1">
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
    country_id: '',
    name: '',
    slug: '',
    status: false, // default to false
});

const countries = ref([]);
const router = useRouter();

const fetchCountries = async () => {
    try {
        const response = await axios.get('/api/admin/countries');
        countries.value = response.data;
    } catch (error) {
        console.error('Error fetching countries:', error);
    }
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('country_id', form.value.country_id);
    formData.append('name', form.value.name);
    formData.append('slug', form.value.slug);
    formData.append('status', form.value.status ? 1 : 0); // Convert checkbox to 1 or 0

    try {
        await axios.post('/api/admin/states', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/state'); // Adjust the route to match the list of states
    } catch (error) {
        console.error('There was an error!', error);
        // Handle validation errors here if needed
    }
};

onMounted(() => {
    fetchCountries();
});
</script>
