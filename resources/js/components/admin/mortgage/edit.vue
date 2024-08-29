<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Mortgage & Home Loan</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/mortgage-loan">- Back</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Mortgage & Home Loan</h6>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submitForm">
                            <!-- Form Fields -->
                            <div class="row mb-3 mt-3 mx-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input
                                            type="text"
                                            v-model="form.title"
                                            class="form-control"
                                            name="title"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea
                                            id="description"
                                            class="form-control"
                                            name="description"
                                        ></textarea>
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

<script setup type="module">
import { ref, onMounted, nextTick } from 'vue';
import { useRouter, useRoute } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';
import 'summernote/dist/summernote-lite.min.css';
import $ from 'jquery';
import 'summernote/dist/summernote-lite.min.js';

const form = ref({
    title: '',
    description: '',
});

const router = useRouter();
const route = useRoute();
const mortgageId = ref(null);

const fetchArticle = async () => {
    try {
        mortgageId.value = route.params.id; // Store the mortgageId in a ref
        const response = await axios.get(`/api/admin/mortgages/${mortgageId.value}`);

        form.value.title = response.data.title;
        form.value.description = response.data.description;

        nextTick(() => {
            $('#description').summernote({
                placeholder: 'Enter article description here...',
                tabsize: 2,
                height: 200
            });
            $('#description').summernote('code', form.value.description);
        });
    } catch (error) {
        console.error('There was an error fetching the article!', error);
    }
};

const submitForm = async () => {
    const formData = new FormData();
    formData.append('title', form.value.title);
    formData.append('description', $('#description').summernote('code'));

    try {
        await axios.put(`/api/admin/mortgages/${mortgageId.value}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });
        router.push('/admin/mortgage-loan');
    } catch (error) {
        console.error('There was an error updating the article!', error);
    }
};

onMounted(() => {
    fetchArticle();
});
</script>
