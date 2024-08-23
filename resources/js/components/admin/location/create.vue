<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Location</h1>
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
                        <h6 class="m-0 font-weight-bold text-primary">Create Location</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <select v-model="form.state_id" class="form-control" name="state_id">
                                            <option value="" disabled>Select State</option>
                                            <option v-for="state in states" :key="state.id" :value="state.id">{{ state.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <select v-model="form.city_id" class="form-control" name="city_id">
                                            <option value="" disabled>Select City</option>
                                            <option v-for="city in cities" :key="city.id" :value="city.id">{{ city.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select v-model="form.country_id" class="form-control" name="country_id">
                                            <option value="" disabled>Select Country</option>
                                            <option v-for="country in countries" :key="country.id" :value="country.id">{{ country.name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" v-model="form.address" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="text" v-model="form.postal_code" class="form-control" name="postal_code">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Latitude</label>
                                        <input type="number" step="any" v-model="form.latitude" class="form-control" name="latitude">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Longitude</label>
                                        <input type="number" step="any" v-model="form.longitude" class="form-control" name="longitude">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <label for="status">Status</label>
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
    name: '',
    state_id: null,
    city_id: null,
    country_id: null,
    address: '',
    postal_code: '',
    latitude: null,
    longitude: null,
    status: false, // default to false
});

const states = ref([]);
const cities = ref([]);
const countries = ref([]);

const router = useRouter();

const fetchData = async () => {
    try {
        const [statesResponse, citiesResponse, countriesResponse] = await Promise.all([
            axios.get('/api/admin/states'),
            axios.get('/api/admin/cities'),
            axios.get('/api/admin/countries')
        ]);

        states.value = statesResponse.data;
        cities.value = citiesResponse.data;
        countries.value = countriesResponse.data;
    } catch (error) {
        console.error('Error fetching data:', error);
    }
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('state_id', form.value.state_id);
    formData.append('city_id', form.value.city_id);
    formData.append('country_id', form.value.country_id);
    formData.append('address', form.value.address);
    formData.append('postal_code', form.value.postal_code);
    formData.append('latitude', form.value.latitude);
    formData.append('longitude', form.value.longitude);
    formData.append('status', form.value.status ? 1 : 0); // Convert checkbox to 1 or 0

    try {
        await axios.post('/api/admin/locations', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/location'); // Redirect to the location list
    } catch (error) {
        console.error('There was an error!', error);
        // Handle validation errors here if needed
    }
};

onMounted(() => {
    fetchData();
});
</script>
