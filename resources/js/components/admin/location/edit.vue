<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Location</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/location">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Location</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <!-- Name -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name">
                                        <span v-if="errors.name" class="text-danger">{{ errors.name[0] }}</span>
                                    </div>
                                </div>
                                <!-- State -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <select v-model="form.state_id" class="form-control" name="state_id">
                                            <option value="" disabled>Select State</option>
                                            <option v-for="state in states" :key="state.id" :value="state.id">{{ state.name }}</option>
                                        </select>
                                        <small v-if="errors.state_id" class="text-danger">{{ errors.state_id[0] }}</small>
                                    </div>
                                </div>
                                <!-- City -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <select v-model="form.city_id" class="form-control" name="city_id">
                                            <option value="" disabled>Select City</option>
                                            <option v-for="city in cities" :key="city.id" :value="city.id">{{ city.name }}</option>
                                        </select>
                                        <small v-if="errors.city_id" class="text-danger">{{ errors.city_id[0] }}</small>
                                    </div>
                                </div>
                                <!-- Country -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select v-model="form.country_id" class="form-control" name="country_id">
                                            <option value="" disabled>Select Country</option>
                                            <option v-for="country in countries" :key="country.id" :value="country.id">{{ country.name }}</option>
                                        </select>
                                        <small v-if="errors.country_id" class="text-danger">{{ errors.country_id[0] }}</small>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" v-model="form.address" class="form-control" name="address">
                                        <small v-if="errors.address" class="text-danger">{{ errors.address[0] }}</small>
                                    </div>
                                </div>
                                <!-- Postal Code -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="text" v-model="form.postal_code" class="form-control" name="postal_code">
                                        <small v-if="errors.postal_code" class="text-danger">{{ errors.postal_code[0] }}</small>
                                    </div>
                                </div>
                                <!-- Latitude -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Latitude</label>
                                        <input type="number" step="any" v-model="form.latitude" class="form-control" name="latitude">
                                        <small v-if="errors.latitude" class="text-danger">{{ errors.latitude[0] }}</small>
                                    </div>
                                </div>
                                <!-- Longitude -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Longitude</label>
                                        <input type="number" step="any" v-model="form.longitude" class="form-control" name="longitude">
                                        <small v-if="errors.longitude" class="text-danger">{{ errors.longitude[0] }}</small>
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
    name: '',
    state_id: null,
    city_id: null,
    country_id: null,
    address: '',
    postal_code: '',
    latitude: null,
    longitude: null,
});

const errors = ref({});

const states = ref([]);
const cities = ref([]);
const countries = ref([]);

const router = useRouter();
const route = useRoute();
const locationId = route.params.id;

const fetchData = async () => {
    try {
        const [locationResponse, statesResponse, citiesResponse, countriesResponse] = await Promise.all([
            axios.get(`/api/admin/locations/${locationId}`),
            axios.get('/api/admin/states'),
            axios.get('/api/admin/cities'),
            axios.get('/api/admin/countries')
        ]);

        form.value = locationResponse.data;
        states.value = statesResponse.data;
        cities.value = citiesResponse.data;
        countries.value = countriesResponse.data;
    } catch (error) {
        console.error('Error fetching data:', error);
    }
};

const submitForm = async () => {
    try {
        await axios.put(`/api/admin/locations/${locationId}`, {
            name: form.value.name,
            state_id: form.value.state_id,
            city_id: form.value.city_id,
            country_id: form.value.country_id,
            address: form.value.address,
            postal_code: form.value.postal_code,
            latitude: form.value.latitude,
            longitude: form.value.longitude
        });
        router.push('/admin/location'); // Redirect to the location list
    } catch (error) {
        console.error('There was an error!', error.response ? error.response.data : error);
        if (error.response && error.response.data.errors) {
            errors.value = error.response.data.errors;
        }
    }
};



onMounted(() => {
    fetchData();
});
</script>
