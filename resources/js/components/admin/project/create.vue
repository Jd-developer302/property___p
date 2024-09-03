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
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
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
                                            <option v-for="developer in developers" :key="developer.id" :value="developer.id">
                                                {{ developer.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- Other Fields -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" v-model="form.name" class="form-control" name="name" required>
                                    </div>
                                </div>
<!-- Apartments -->
<div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Apartments</label>
                                        <input type="text" v-model="form.apartments" class="form-control" name="apartments">
                                    </div>
                                </div>
                                <!-- Payment Plan -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Payment Plan</label>
                                        <input type="text" v-model="form.payment_plan" class="form-control" name="payment_plan">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" @change="handleFileUpload('image', $event)" name="image">
                                    </div>
                                </div>                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Slug</label>
                                        <input type="text" v-model="form.slug" class="form-control" name="slug" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Down Payment</label>
                                        <input type="text" v-model="form.down_payment" class="form-control" name="down_payment">
                                    </div>
                                </div>
                                <!-- Handover -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Handover</label>
                                        <input type="text" v-model="form.handover" class="form-control" name="handover">
                                    </div>
                                </div>
                                <!-- Starting Price -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Starting Price</label>
                                        <input type="text" v-model="form.starting_price" class="form-control" name="starting_price">
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
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';


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
    slug:'',

});

const communities = ref([]);
const developers = ref([]);

const router = useRouter();

const fetchCommunities = async () => {
    try {
        const response = await axios.get('/api/admin/communities'); 
        communities.value = response.data;
    } catch (error) {
        console.error('Failed to fetch communities:', error);
    }
};

const fetchDevelopers = async () => {
    try {
        const response = await axios.get('/api/admin/developers'); 
        developers.value = response.data;
    } catch (error) {
        console.error('Failed to fetch developers:', error);
    }
};

const handleFileUpload = (field, event) => {
    form.value[field] = event.target.files[0];
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('community_id', form.value.community_id);
    formData.append('developer_id', form.value.developer_id);
    formData.append('name', form.value.name);
    formData.append('apartments', form.value.apartments);
    formData.append('payment_plan', form.value.payment_plan);
    formData.append('down_payment', form.value.down_payment);
    formData.append('handover', form.value.handover);
    formData.append('starting_price', form.value.starting_price);
    if (form.value.image) {
        formData.append('image', form.value.image);
    }
    formData.append('slug', form.value.slug);

    try {
        await axios.post('/api/admin/projects', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/projects');
    } catch (error) {
        console.error('There was an error!', error);
    }
};

onMounted(() => {
    $('#summernote').summernote({
        height: 300,
        callbacks: {
            onChange: function(contents) {
                form.value.description = contents;
            }
        }
    });

    fetchCommunities();
    fetchDevelopers();
});

onBeforeUnmount(() => {
    $('#summernote').summernote('destroy');
});
</script>

