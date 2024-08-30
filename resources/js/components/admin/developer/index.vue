<template>
    <Base>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Developer List</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/developers/create">+ New</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Developers</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="developer in developers" :key="developer.id">
                                        <td>{{ developer.name }}</td>
                                        <td>{{ developer.slug }}</td>
                                        <td>{{ stripHtmlTags(developer.description).slice(0, 100) }}...</td>
                                        <td>
                                            <img :src="getImageUrl(developer.logo)" alt="Developer Logo" width="100">
                                        </td>
                                        <td>
                                            <router-link :to="`/admin/developers/${developer.id}/edit`" class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i></router-link>
                                            <button @click="deleteDeveloper(developer.id)" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination">
                            <button @click="prevPage" :disabled="currentPage === 1">Previous</button>
                            <span>Page {{ currentPage }} of {{ totalPages }}</span>
                            <button @click="nextPage" :disabled="currentPage === totalPages">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Base>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const developers = ref([]);
const currentPage = ref(1);
const perPage = ref(10);
const totalPages = ref(1);

const fetchData = async () => {
    try {
        const response = await axios.get('/api/admin/developers', {
            params: {
                page: currentPage.value,
                perPage: perPage.value,
            },
        });
        developers.value = response.data.data;
        totalPages.value = response.data.last_page;
    } catch (error) {
        console.error("Error fetching developers:", error);
    }
};

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--;
        fetchData();
    }
};

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++;
        fetchData();
    }
};

const deleteDeveloper = async (id) => {
    try {
        await axios.delete(`/api/admin/developers/${id}`);
        fetchData();
    } catch (error) {
        console.error("Error deleting developer:", error);
    }
};

const getImageUrl = (logo) => {
    return logo ? `/storage/${logo}` : '/images/default-logo.png'; // Provide a default image if logo is not available
};

const stripHtmlTags = (html) => {
    const doc = new DOMParser().parseFromString(html, 'text/html');
    return doc.body.textContent || '';
};

onMounted(() => {
    fetchData();
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
