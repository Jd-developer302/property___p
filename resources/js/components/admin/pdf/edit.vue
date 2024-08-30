<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Pdf</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/pdf">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Pdf</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" v-model="form.title" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">PDF File</label>
                                        <input type="file" class="form-control" @change="handleFileUpload('pdf_file', $event)" name="pdf_file">
                                        <small v-if="existingPdf.pdf_file">Current PDF: <a :href="existingPdf.pdf_file" target="_blank">View Current PDF</a></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" @change="handleFileUpload('image', $event)" name="image">
                                        <small v-if="existingPdf.image">Current Image: <img :src="existingPdf.image" alt="Current Image" class="img-thumbnail" width="100"></small>
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
import { ref, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const form = ref({
    title: '',
    image: null,
    pdf_file: null
});

const existingPdf = ref({});

const route = useRoute();
const router = useRouter();
const pdfId = route.params.id;

const fetchPdf = async () => {
    try {
        const response = await axios.get(`/api/admin/pdfs/${pdfId}`);
        existingPdf.value = response.data;
        form.value.title = existingPdf.value.title;
    } catch (error) {
        console.error('Error fetching PDF details:', error);
    }
};

const handleFileUpload = (field, event) => {
    form.value[field] = event.target.files[0];
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('title', form.value.title);
    if (form.value.image) {
        formData.append('image', form.value.image);
    }
    if (form.value.pdf_file) {
        formData.append('pdf_file', form.value.pdf_file);
    }

    // Log the form data to check its content
    for (let pair of formData.entries()) {
        console.log(pair[0]+ ', ' + pair[1]); 
    }

    try {
        const response = await axios.put(`/api/admin/pdfs/${pdfId}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        console.log('Response:', response.data);
        router.push('/admin/pdf');
    } catch (error) {
        console.error('There was an error!', error.response ? error.response.data : error.message);
    }
};

onMounted(fetchPdf);
</script>
