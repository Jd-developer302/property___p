<template>
    <div id="wrapper">
      <!-- Start of Sidebar -->
      <SideBar/>
      <!-- End of Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <Header/>
          <div class="container-fluid">
            <slot/> <!-- Content will be injected here -->
          </div>
          <Footer/>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import Header from './Header.vue'
  import SideBar from './SideBar.vue'
  import Footer from './Footer.vue'
  </script>
  