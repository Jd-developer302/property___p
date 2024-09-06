<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Project</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/projects">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Project Form Card -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Create Project</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <!-- Community Selection -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Community</label>
                                        <select v-model="form.community_id" class="form-control" required>
                                            <option disabled value="">Select Community</option>
                                            <option v-for="community in communities" :key="community.id" :value="community.id">
                                                {{ community.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Developer Selection -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Developer</label>
                                        <select v-model="form.developer_id" class="form-control" required>
                                            <option disabled value="">Select Developer</option>
                                            <option v-for="developer in developers" :key="developer.id" :value="developer.id">
                                                {{ developer.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Project Name -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Project Name</label>
                                        <input type="text" v-model="form.name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Apartments -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartments</label>
                                        <input type="text" v-model="form.apartments" class="form-control">
                                    </div>
                                </div>
                                <!-- Payment Plan -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Payment Plan</label>
                                        <input type="text" v-model="form.payment_plan" class="form-control">
                                    </div>
                                </div>
                                <!-- Image Upload -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Project Image</label>
                                        <input type="file" class="form-control" @change="handleFileUpload('image', $event)">
                                    </div>
                                </div>
                                <!-- Slug -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Down Payment -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Down Payment</label>
                                        <input type="text" v-model="form.down_payment" class="form-control">
                                    </div>
                                </div>
                                <!-- Handover -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Handover Date</label>
                                        <input type="text" v-model="form.handover" class="form-control">
                                    </div>
                                </div>
                                <!-- Starting Price -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Starting Price</label>
                                        <input type="text" v-model="form.starting_price" class="form-control">
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

// Form data
const form = ref({
    community_id: '',
    developer_id: '',
    name: '',
    apartments: '',
    payment_plan: '',
    down_payment: '',
    handover: '',
    starting_price: '',
    image: null,
    slug: '',
});

const communities = ref([]);
const developers = ref([]);
const router = useRouter();

// Fetch communities and developers
const fetchCommunities = async () => {
    try {
        const response = await axios.get('/api/admin/communities');
        communities.value = response.data || [];
    } catch (error) {
        console.error('Failed to fetch communities:', error);
        communities.value = [];
    }
};

const fetchDevelopers = async () => {
    try {
        const response = await axios.get('/api/admin/developers');
        developers.value = response.data || [];
    } catch (error) {
        console.error('Failed to fetch developers:', error);
        developers.value = [];
    }
};

// Handle file uploads
const handleFileUpload = (field, event) => {
    form.value[field] = event.target.files[0];
};

// Submit form
const submitForm = async () => {
    const formData = new FormData();
    for (const key in form.value) {
        formData.append(key, form.value[key]);
    }

    try {
        await axios.post('/api/admin/projects', formData, {
            headers: { 'Content-Type': 'multipart/form-data' },
        });
        router.push('/admin/projects');
    } catch (error) {
        console.error('Submission failed:', error);
    }
};

onMounted(() => {
    fetchCommunities();
    fetchDevelopers();
});
</script>
