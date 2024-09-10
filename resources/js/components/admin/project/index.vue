<template>
    <Base>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Projects List</h1>
            <li class="breadcrumb-item" style="list-style: none;">
                <router-link class="btn btn-primary" to="/admin/projects/create">+ New</router-link>
            </li>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Apartments</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="projects.length === 0">
                                        <td colspan="5" class="text-center">No projects found.</td>
                                    </tr>
                                    <tr v-else v-for="project in projects" :key="project.id">
                                        <td>{{ project.name }}</td>
                                        <td>{{ project.slug }}</td>
                                        <td>{{ stripHtmlTags(project.apartments).slice(0, 100) }}...</td>
                                        <td>
                                            <img :src="getImageUrl(project.image)" alt="Project Image" width="100">
                                        </td>
                                        <td>
                                            <router-link :to="`/admin/projects/${project.id}/edit`" class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i></router-link>
                                            <button @click="deleteProject(project.id)" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

const projects = ref([]);

const fetchData = async () => {
    try {
        const response = await axios.get('/api/admin/projects');
        projects.value = response.data;
    } catch (error) {
        console.error("Error fetching projects:", error);
        alert('Failed to load projects. Please try again later.');
    }
};

const deleteProject = async (id) => {
    try {
        await axios.delete(`/api/admin/projects/${id}`);
        fetchData();
    } catch (error) {
        console.error("Error deleting project:", error);
        alert('Failed to delete project. Please try again later.');
    }
};

const getImageUrl = (image) => {
    return image ? `/storage/${image}` : '/images/default-image.png'; 
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
/* Remove pagination styles */
</style>
