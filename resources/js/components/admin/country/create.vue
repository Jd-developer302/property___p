<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Country</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/country">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Country</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" name="slug">
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
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const form = ref({
    name: '',
    slug: '',
    status: false, // default to false
});

const router = useRouter();

const submitForm = async () => {
    try {
        const response = await axios.post('/api/admin/countries', {
            name: form.value.name,
            slug: form.value.slug,
            status: form.value.status ? 1 : 0,
        });
        console.log('Created Country:', response.data);
        router.push('/admin/country'); // Redirect to the list of countries
    } catch (error) {
        if (error.response && error.response.status === 422) {
            console.error('Validation Errors:', error.response.data.errors);
            // Display validation errors to the user if necessary
        } else {
            console.error('There was an unexpected error!', error);
        }
    }
};
</script>
