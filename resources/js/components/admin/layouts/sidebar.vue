<template>
  <ul
    :class="['navbar-nav bg-gradient-primary sidebar sidebar-dark accordion', { toggled: isToggled }]"
    id="accordionSidebar"
  >
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon rotate-n-15">
        <img :src="image1" alt="Brand Image" class="image" />
      </div>
      <div class="sidebar-brand-text">Inshaa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <router-link class="nav-link" to="/admin/home">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </router-link>
    </li>
     <!-- Dropdown Menu - Components -->
     <li class="nav-item">
      <a
        class="nav-link collapsed"
        href="#"
        @click.prevent="toggleDropdown"
        aria-expanded="true"
      >
        <i class="fas fa-fw fa-cog"></i>
        <span>Project Components</span>
      </a>
      <div
        :class="['collapse', { show: isDropdownOpen }]"
        aria-labelledby="headingTwo"
        data-parent="#accordionSidebar"
      >
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Components:</h6>
          <router-link class="collapse-item" to="/admin/projects"><i class="fa-solid fa-address-card"></i> <span>Projects</span></router-link>
          <router-link class="collapse-item" to="/admin/overviews"><i class="fa-solid fa-street-view"></i> <span>Overview</span></router-link>
          <router-link class="collapse-item" to="/admin/features">
        <i class="fa-solid fa-feather"></i>
        <span>Feature</span>
      </router-link>
      <router-link class="collapse-item" to="/admin/floorplans">
        <i class="fa-solid fa-feather"></i>
        <span>Floor Plans</span>
      </router-link>
      <router-link class="collapse-item" to="/admin/masterplans">
        <i class="fa-solid fa-feather"></i>
        <span>Master Plans</span>
      </router-link>
      <router-link class="collapse-item" to="/admin/projectlocation">
        <i class="fa-solid fa-feather"></i>
        <span>Project Location</span>
      </router-link>
      <router-link class="collapse-item" to="/admin/specialoffers">
        <i class="fa-solid fa-feather"></i>
        <span>Special Offers</span>
      </router-link>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <router-link class="nav-link" to="/admin/developers">
        <i class="fa-solid fa-code"></i>
        <span>Developers</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/communities">
        <i class="fa-solid fa-person"></i>
        <span>Communities</span>
      </router-link>
    </li>
    <hr class="sidebar-divider" />
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/country">
        <i class="fa-regular fa-flag"></i>
        <span>Countries</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/state">
        <i class="fa-solid fa-house"></i>
        <span>States</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/city">
        <i class="fa-solid fa-city"></i>
        <span>Cities</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/location">
        <i class="fa-solid fa-location-dot"></i>
        <span>Location</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/foreign-investors">
        <i class="fa-solid fa-money-bill"></i>
        <span>Foreign Investors</span>
      </router-link>
    </li>
    <hr class="sidebar-divider" />
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/category">
        <i class="fas fa-th-list"></i>
        <span>Category</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/article">
        <i class="fas fa-th-list"></i>
        <span>Article</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/mortgage-loan">
        <i class="fa-solid fa-bag-shopping"></i>
        <span>Mortgage & Home Loan</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/admin/about">
        <i class="fa-solid fa-address-card"></i>
        <span>About</span>
      </router-link>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Interface</div>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle" @click="toggleSidebar"></button>
    </div>
  </ul>
</template>

<script setup>
import { ref } from 'vue';
import image1Path from '@/assets/img/Insha-icon.png'; 

const image1 = ref(image1Path);
const isToggled = ref(false);
const isDropdownOpen = ref(false);

const toggleSidebar = () => {
  isToggled.value = !isToggled.value;
};

const toggleDropdown = () => {
  isDropdownOpen.value = !isDropdownOpen.value;
};
</script>

<style scoped>
/* Add your custom styles here */
</style>
