<template>
    <Base>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Foreign Investors List</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/foreign-investors/create">+ New</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Foreign Investors List</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr v-for="investor in investors" :key="investor.id">
                                        <td>{{ investor.name }}</td>
                                        <td>{{ investor.title }}</td>
                                        <td>
                                            <img :src="`/storage/${investor.image}`" alt="Investor Image" width="100" height="100">
                                        </td>
                                        <td>{{ investor.slug }}</td>
                                        <td>{{ stripHtmlTags(investor.description).slice(0, 100) }}...</td>
                                        <td class="d-flex">
                                            <router-link :to="`/admin/foreign-investors/edit/${investor.id}`" class="btn btn-primary btn-sm ml-1"><i class="fa-solid fa-pencil"></i></router-link>

                                            <button @click="deleteInvestor(investor.id)" class="btn btn-danger btn-sm ml-1"><i class="fa-solid fa-trash"></i></button>
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

const investors = ref([]);
const currentPage = ref(1);
const totalPages = ref(1);

  function stripHtmlTags(text) {
    return text.replace(/<\/?[^>]+>/gi, ''); // Regular expression to remove HTML tags
  }
  
  function truncateText(text, length) {
    if (text.length > length) {
      return text.slice(0, length) + '...'; // Truncate and add ellipsis
    }
    return text;
  }

const fetchInvestors = async () => {
    try {
        const response = await axios.get(`/api/admin/foreign-investors?page=${currentPage.value}`);
        investors.value = response.data.data;
        currentPage.value = response.data.current_page;
        totalPages.value = response.data.last_page;
    } catch (error) {
        console.error('Error fetching foreign investors:', error);
    }
};

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++;
        fetchInvestors();
    }
};

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--;
        fetchInvestors();
    }
};

const deleteInvestor = async (id) => {
    if (confirm('Are you sure you want to delete this investor?')) {
        try {
            await axios.delete(`/api/admin/foreign-investors/${id}`);
            fetchInvestors();
        } catch (error) {
            console.error('Error deleting investor:', error);
        }
    }
};

onMounted(() => {
    fetchInvestors();
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

img {
    object-fit: cover;
    border-radius: 5px;
}
</style>
