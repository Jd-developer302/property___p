<template>
    <Base>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit State</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/state">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit State</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm">
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
                                        <input type="text" v-model="form.name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="checkbox" v-model="form.status" :true-value="1" :false-value="0">
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
import { useRouter, useRoute } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const form = ref({
    country_id: '',
    name: '',
    slug: '',
    status: 0,
});

const countries = ref([]);
const router = useRouter();
const route = useRoute();

const fetchCountries = async () => {
    try {
        const response = await axios.get('/api/admin/countries');
        countries.value = response.data;
    } catch (error) {
        console.error('Error fetching countries:', error);
    }
};

const fetchState = async () => {
    try {
        const stateId = route.params.id;
        const response = await axios.get(`/api/admin/states/${stateId}`);
        form.value = response.data;
    } catch (error) {
        console.error('Error fetching state:', error);
    }
};

const submitForm = async () => {
    try {
        const stateId = route.params.id;
        await axios.put(`/api/admin/states/${stateId}`, form.value);

        // Redirect to the list of states after update
        router.push('/admin/state');
    } catch (error) {
        console.error('There was an error!', error);
    }
};

onMounted(() => {
    fetchCountries();
    fetchState();
});
</script>

<style scoped>
/* Add any specific styles you need here */
</style>
