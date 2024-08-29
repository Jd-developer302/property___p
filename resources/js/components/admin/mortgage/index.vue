<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mortgage & Home Loan List</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link v-if="!hasMortgage" class="btn btn-primary" to="/admin/mortgage-loan/create">+ New</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Mortgage & Home Loan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr v-for="item in items" :key="item.id">
                                        <td>{{ item.title }}</td>
                                        <td>{{ stripHtmlTags(item.description).slice(0, 100) }}...</td>
                                        <td class="d-flex">
                                            <button @click="editItem(item.id)" class="btn btn-warning btn-sm mr-2">
                                                <i class="fa-solid fa-pencil"></i>
                                            </button>
                                            <button @click="deleteItem(item.id)" class="btn btn-danger btn-sm mr-2">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-if="items.length > 1" class="pagination">
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
import { ref, onMounted, computed } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const router = useRouter();

const items = ref([]);
const currentPage = ref(1);
const totalPages = ref(1);

const hasMortgage = computed(() => items.value.length > 0);

const fetchItems = async (page = 1) => {
    try {
        const response = await axios.get(`/api/admin/mortgages?page=${page}`);
        items.value = response.data.data;
        totalPages.value = response.data.last_page;
        currentPage.value = response.data.current_page;
    } catch (error) {
        console.error('Error fetching items:', error);
    }
};

// Method to strip HTML tags
const stripHtmlTags = (text) => {
    return text ? text.replace(/<\/?[^>]+(>|$)/g, "") : '';
};

const editItem = (id) => {
    router.push(`/admin/mortgage-loan/edit/${id}`);
};

const deleteItem = async (id) => {
    try {
        await axios.delete(`/api/admin/mortgage-loan/${id}`);
        items.value = items.value.filter(item => item.id !== id); // Update local list after deletion
    } catch (error) {
        console.error('Error deleting item:', error);
    }
};

const prevPage = () => {
    if (currentPage.value > 1) {
        fetchItems(currentPage.value - 1);
    }
};

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        fetchItems(currentPage.value + 1);
    }
};

onMounted(() => {
    fetchItems();
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
