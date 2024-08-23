<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit About</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/about">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit About</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="updateItem" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" v-model="form.title" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea v-model="form.discription" class="form-control" name="discription" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Vision</label>
                                        <textarea v-model="form.vision" class="form-control" name="vision" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Mission</label>
                                        <textarea v-model="form.mission" class="form-control" name="mission" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" @change="handleFileUpload" name="image">
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
import { ref, reactive, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const route = useRoute();
const router = useRouter();
const form = reactive({
    title: '',
    discription: '',
    vision: '',
    mission: '',
    image: null,
});

const fetchItem = async () => {
    try {
        const response = await axios.get(`/api/admin/about/${route.params.id}`);
        Object.assign(form, response.data);
    } catch (error) {
        console.error('Error fetching item:', error);
    }
};

const handleFileUpload = (event) => {
    form.image = event.target.files[0];
};

const updateItem = async () => {
    const formData = new FormData();
    formData.append('title', form.title);
    formData.append('discription', form.discription);
    formData.append('vision', form.vision);
    formData.append('mission', form.mission);
    if (form.image) {
        formData.append('image', form.image);
    }

    try {
        await axios.put(`/api/admin/about/${route.params.id}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        });
        router.push('/admin/about');
    } catch (error) {
        console.error('Error updating item:', error);
    }
};

onMounted(() => {
    fetchItem();
});
</script>

<style scoped>
.pagination {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 20px;
}

.pagination button {
    margin: 0 10px;
    padding: 5px 10px;
    border: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

.pagination button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}
</style>
