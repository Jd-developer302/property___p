<template>
    <Base>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">PDF List</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/pdf/create">+ New</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">PDFs</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>PDF File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="pdf in pdfs" :key="pdf.id">
                                        <td>{{ pdf.title }}</td>
                                        <td><img :src="`/storage/${pdf.image}`" alt="PDF Image" width="100"></td>
                                        <td>
                                            <a :href="`/storage/${pdf.pdf_file}`" target="_blank">View PDF</a>
                                        </td>
                                        <td>
                                            <router-link :to="`/admin/pdfs/${pdf.id}/edit`" class="btn btn-sm btn-primary">Edit</router-link>

                                            <button @click="deletePdf(pdf.id)" class="btn btn-sm btn-danger">Delete</button>
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

const pdfs = ref([]);
const currentPage = ref(1);
const perPage = ref(10);
const totalPages = ref(1);

const fetchData = async () => {
    try {
        const response = await axios.get('/api/admin/pdfs', {
            params: {
                page: currentPage.value,
                perPage: perPage.value,
            },
        });
        pdfs.value = response.data.data;
        totalPages.value = response.data.last_page;
    } catch (error) {
        console.error("Error fetching PDFs:", error);
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

const deletePdf = async (id) => {
    try {
        await axios.delete(`/api/admin/pdfs/${id}`);
        fetchData();
    } catch (error) {
        console.error("Error deleting PDF:", error);
    }
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
