<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">States List</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/state/create">+ New</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">States</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr v-for="item in paginatedData" :key="item.id">
                                        <td>{{ item.name }}</td>
                                        <td>{{ item.country.name  }}</td> <!-- Display country name -->
                                        <td>{{ item.slug }}</td>
                                        <td>{{ item.status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button @click="editItem(item.id)" class="btn btn-warning btn-sm mr-2">Edit</button>
                                            <button @click="deleteItem(item.id)" class="btn btn-danger btn-sm mr-2">Delete</button>
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
import { ref, computed, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';
import Base from '../layouts/Base.vue';

const router = useRouter();

const items = ref([]);
const currentPage = ref(1);
const itemsPerPage = ref(5);

const fetchItems = async () => {
    try {
        const response = await axios.get('/api/admin/states'); // Adjust endpoint to fetch states with countries
        items.value = response.data; // Adjust based on actual response structure
    } catch (error) {
        console.error('Error fetching items:', error);
    }
};

const paginatedData = computed(() => {
    const start = (currentPage.value - 1) * itemsPerPage.value;
    const end = start + itemsPerPage.value;
    return items.value.slice(start, end);
});

const totalPages = computed(() => {
    return Math.ceil(items.value.length / itemsPerPage.value);
});

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++;
    }
};

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--;
    }
};

const editItem = (id) => {
    router.push(`/admin/state/edit/${id}`);
};

const deleteItem = async (id) => {
    try {
        await axios.delete(`/api/admin/states/${id}`); // Adjust endpoint for deleting states
        items.value = items.value.filter(item => item.id !== id); // Update local list after deletion
    } catch (error) {
        console.error('Error deleting item:', error);
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
