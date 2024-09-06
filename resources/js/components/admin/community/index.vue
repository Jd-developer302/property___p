<template>
    <Base>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Communities List</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/communities/create">+ New</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Communities</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="communities.length === 0">
                                        <td colspan="6" class="text-center">No communities found.</td>
                                    </tr>
                                    <tr v-else v-for="community in communities" :key="community.id">
                                        <td>{{ community.name }}</td>
                                        <td>{{ community.slug }}</td>
                                        <td>{{ stripHtmlTags(community.description).slice(0, 100) }}...</td>
                                        <td>
                                            <img :src="getImageUrl(community.image)" alt="Community Image" width="100">
                                        </td>
                                        <td>
                                            <a v-if="community.video" :href="getVideoUrl(community.video)" target="_blank" class="btn btn-sm btn-info">View Video</a>
                                            <span v-else>No Video</span>
                                        </td>
                                        <td>
                                            <router-link :to="`/admin/communities/${community.id}/edit`" class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i></router-link>
                                            <button @click="deleteCommunity(community.id)" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
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

const communities = ref([]);
const currentPage = ref(1);
const perPage = ref(10);
const totalPages = ref(1);

const fetchData = async () => {
    try {
        const response = await axios.get('/api/admin/communities');
        communities.value = response.data;
    } catch (error) {
        console.error('Error fetching categories:', error);
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

const deleteCommunity = async (id) => {
    try {
        await axios.delete(`/api/admin/communities/${id}`);
        fetchData();
    } catch (error) {
        console.error("Error deleting community:", error);
        alert('Failed to delete community. Please try again later.');
    }
};

const getImageUrl = (image) => {
    return image ? `/storage/${image}` : '/images/default-image.png'; 
};

const getVideoUrl = (video) => {
    return video ? `/storage/${video}` : ''; 
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
