<template>
    <header class="header">
      <!-- Top Bar Section -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <!-- Top Links for Larger Screens -->
            <div class="col-lg-5 d-none d-lg-block menu-left">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="/">Home</a></li>
                <li class="list-inline-item"><a href="/about">About Us</a></li>
                <li class="list-inline-item"><a href="/projects">Projects</a></li>
                <li class="list-inline-item"><a href="/contact">Contact Us</a></li>
              </ul>
            </div>
  
            <!-- WhatsApp and Font Controls -->
            <div id="multilangId" class="col-lg-7 text-right menu-right">
              <ul class="list-inline">
                <li class="list-inline-item m-home float-left">
                  <a href="/" aria-label="Home">
                    <i class="fa fa-home fa-2x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <div id="font-setting-buttons">
                    <button type="button" class="btn decrease-me">-A</button>
                    <button type="button" class="btn reset-me">A</button>
                    <button type="button" class="btn increase-me">A+</button>
                  </div>
                </li>
                <li class="list-inline-item">
                  <a href="https://api.whatsapp.com/send?phone=971551623236&text=I want more information on Ellington Art Bay East" target="_blank">
                    <i class="fa fa-whatsapp"></i> WhatsApp
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Responsive Navbar Section -->
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="/" class="navbar-brand">
            <img :src="overview.logo1 ? overview.logo1 : '/default/logo.png'" width="208" height="80" alt="Ellington Art Bay East" class="logo" />
          </a>
  
          <!-- Mobile Menu Button -->
          <button class="navbar-toggler" type="button" @click="toggleMobileMenu">
            <span></span><span></span><span></span>
          </button>
  
          <!-- Mobile and Desktop Menu -->
          <div :class="['navbar-collapse', { collapse: !isMobileMenuOpen }]">
            <ul class="navbar-nav mx-auto mr-0" style="margin-right: 0 !important;">
              <li class="nav-item">
                <a :href="`/projects/project/${project.slug}`" class="nav-link">Overview</a>
              </li>
              <li class="nav-item">
                <a :href="`/Feature/${project.slug}`" class="nav-link">Features</a>
              </li>
              <li class="nav-item">
                <a :href="`/FloorPlan/project/${project.slug}`" class="nav-link">Floor Plan</a>
              </li>
              <li class="nav-item">
                <a :href="`/MasterPlan/project/${project.slug}`" class="nav-link">Master Plan</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Location</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Special Offer</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  const project = ref({ slug: '' });
  const overview = ref({});
  
  onMounted(() => {
    axios.get('/api/overviews')
      .then(response => {
        console.log('API response:', response.data);
        if (response.data.length > 0) {
          overview.value = response.data[0];
          project.value.slug = overview.value.slug || ''; // Ensure slug is assigned
        }
      })
      .catch(error => {
        console.error('Error fetching overview:', error);
      });
  });
  
  const isMobileMenuOpen = ref(false);
  
  const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
  };
  
  const closeMobileMenu = () => {
    isMobileMenuOpen.value = false;
  };
  </script>
  
  
  
  
  
  
  <style scoped>

  
  .fa {
      font: 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased
  }
  
  button,hr,input {
      overflow: visible
  }
  
  address,dl,hr,ol,ul {
      margin-bottom: 1rem
  }
  
  .form-inline,.navbar-nav {
      -webkit-box-direction: normal
  }
  
  .btn,.btn-group,.navbar-toggler-icon,img {
      vertical-align: middle
  }
  
  .text-right {
      text-align: right!important
  }
  
  .locttt,.text-center {
      text-align: center!important
  }
  
  .card-img-overlay,.modal {
      top: 0;
      left: 0;
      right: 0;
      bottom: 0
  }
  
  .modal,.modal-open,svg:not(:root) {
      overflow: hidden
  }
  
  .btn:not(:disabled):not(.disabled),.close:not(:disabled):not(.disabled),.navbar-toggler:not(:disabled):not(.disabled),.page-link:not(:disabled):not(.disabled),.pro-info .pro-info-warp p i,.pro-summary .price h3 i,button,summary {
      cursor: pointer
  }
  
  .input-group-text input[type="checkbox"],.input-group-text input[type="radio"],.pro-summary .pro-info,.pro-summary header,dl,h1,h2,h3,h4,h5,h6,ol,p,ul {
      margin-top: 0
  }
  
  .figure-img,dd,label {
      margin-bottom: .5rem
  }
  
  .btn,.input-group-text,.navbar-brand {
      white-space: nowrap
  }
  
  .collapse-map,.no-anchor-style {
      text-decoration: none!important
  }
  
  #OverviewContent p,body {
      text-align: left
  }
  
  .fa,.icon:after,.icon:before,.lg-icon,[data-icon]:before {
      -moz-osx-font-smoothing: grayscale
  }
  
  *,::after,::before {
      box-sizing: border-box
  }
  
  html {
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      -ms-overflow-style: scrollbar;
      -webkit-tap-highlight-color: #fff0
  }
  
  .carousel-item-next,.carousel-item.active,.collapse.show,.tab-content>.active,dialog,figure,footer,header,main,nav,section {
      display: block
  }
  
  body {
      margin: 0;
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"
  }
  
  [tabindex="-1"]:focus {
      outline: 0!important
  }
  
  #Priceinfo .modal-content table,.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn,.card-text:last-child,.form-group .bootstrap-select.btn-group,.form-inline .bootstrap-select.btn-group,.top-bar ul,ol ol,ol ul,ul ol,ul ul {
      margin-bottom: 0
  }
  
  #Priceinfo .modal-content button:focus,.btn-select:focus,a:not([href]):not([tabindex]):focus,nav.navbar .navbar-toggler {
      outline: 0
  }
  
  figure {
      margin: 0 0 1rem
  }
  
  img {
      border-style: none
  }
  
  table {
      border-collapse: collapse
  }
  
  button {
      border-radius: 0
  }
  
  button:focus {
      outline: dotted 1px;
      outline: -webkit-focus-ring-color auto 5px
  }
  
  button,input,select,textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
  }
  
  button,select {
      text-transform: none
  }
  
  [type="reset"],[type="submit"],button,html [type="button"] {
      -webkit-appearance: button
  }
  
  .pro-summary .pro-info .table td,.table-dark.table-bordered,hr {
      border: 0
  }
  
  .pro-summary .price div.sp {
      margin: 0;
      color: #fff;
      letter-spacing: 1px;
      font-size: 12px;
      font-weight: 400;
      padding-left: 0
  }
  
  textarea {
      overflow: auto;
      resize: vertical;
      min-height: 150px
  }
  
  .d-none,[hidden] {
      display: none!important
  }
  
  .h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
      font-family: inherit;
      color: inherit
  }
  
  .list-inline,.list-unstyled {
      padding-left: 0;
      list-style: none
  }
  
  .figure,.list-inline-item,a,button,i,small,span {
      display: inline-block
  }
  
  .form-row,.row {
      display: -webkit-box;
      display: -ms-flexbox
  }
  
  .img-fluid {
      max-width: 100%;
      height: auto
  }
  
  .table,p {
      margin-bottom: 1rem
  }
  
  .container,.container-fluid {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
  }
  
  @media (min-width: 576px) {
      .container {
          max-width:540px
      }
  }
  
  @media (min-width: 768px) {
      .container {
          max-width:720px
      }
  }
  
  @media (min-width: 992px) {
      .container {
          max-width:960px
      }
      nav.navbar {
          box-shadow:  rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
  
  }
  
  .row {
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px
  }
  
  .card>hr,.no-gutters {
      margin-right: 0;
      margin-left: 0
  }
  
  .navbar-nav .nav-link,.no-gutters>.col,.no-gutters>[class*="col-"] {
      padding-right: 0;
      padding-left: 0
  }
  
  .col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
  }
  
  .col-6,.col-7 {
      -webkit-box-flex: 0
  }
  
  .col-6 {
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      max-width: 50%
  }
  
  .col-12 {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%
  }
  
  .bootstrap-select.form-control:not([class*="col-"]),.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn),.btn-block,.form-inline .bootstrap-select.btn-group .form-control,.input-group,.table,input[type="button"].btn-block,input[type="reset"].btn-block,input[type="submit"].btn-block {
      width: 100%
  }
  
  .table {
      max-width: 100%;
      background-color: #fff0
  }
  
  .table td {
      vertical-align: top;
      border-top: 1px solid #dee2e6
  }
  
  .table-bordered,.table-bordered td {
      border: 1px solid #dee2e6
  }
  
  .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgb(0 0 0 / .05)
  }
  
  .form-control {
      display: block;
      width: 100%;
      font-size: 1rem;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out
  }
  
  .btn:focus,.form-control:focus {
      box-shadow: 0 0 0 .2rem rgb(0 123 255 / .25)
  }
  
  .form-control::-webkit-input-placeholder {
      opacity: 1
  }
  
  .form-control::placeholder {
      opacity: 1
  }
  
  .fade.show,.form-control:disabled,.form-control[readonly],.property:hover .overlay {
      opacity: 1
  }
  
  .btn-group-sm>.btn,.btn-sm,.form-control-sm,.input-group-sm>.form-control,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text {
      padding: .25rem .5rem;
      font-size: .875rem;
      line-height: 1.5;
      border-radius: .2rem
  }
  
  .form-inline,.input-group {
      display: -webkit-box;
      display: -ms-flexbox
  }
  
  .btn {
      display: inline-block;
      text-align: center;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
  }
  
  .breadcrumb-item+.breadcrumb-item:hover::before,.btn:focus,.btn:hover,.card-link:hover,.floor a:hover,.nav-link:focus,.nav-link:hover,.navbar-brand:focus,.navbar-brand:hover,.navbar-toggler:focus,.navbar-toggler:hover {
      text-decoration: none
  }
  
  .btn:not(:disabled):not(.disabled).active,.btn:not(:disabled):not(.disabled):active,.btn:not([disabled]):not(.disabled).active,.btn:not([disabled]):not(.disabled):active {
      background-image: none
  }
  
  .btn-danger,.btn-danger:disabled,.btn-danger:hover,.btn-dark,.btn-dark:disabled,.btn-dark:hover,.btn-info,.btn-info:disabled,.btn-info:hover,.btn-primary,.btn-primary:disabled,.btn-primary:hover,.btn-secondary,.btn-secondary:disabled,.btn-secondary:hover,.navbar-dark .navbar-brand,.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover,.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link,.navbar-dark .navbar-text a,.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover,.property-single-author .text {
      color: #fff
  }
  
  .btn-outline-primary:focus,.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.btn-primary:focus,.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus {
      box-shadow: 0 0 0 .2rem rgb(0 123 255 / .5)
  }
  
  .btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active {
      color: #fff;
      background-color: #0062cc;
      border-color: #005cbf
  }
  
  .btn-light,.btn-light:disabled,.btn-light:hover,.btn-warning,.btn-warning:disabled,.btn-warning:hover {
      color: #212529
  }
  
  .breadcrumb-item.active,.btn-link:disabled {
      color: #6c757d
  }
  
  .btn-block {
      display: block
  }
  
  .btn-block+.btn-block {
      margin-top: .5rem
  }
  
  .fade {
      opacity: 0;
      transition: opacity 0.15s linear
  }
  
  .call-pont,.collapse,.navbar-expand .navbar-toggler,.property-gallery .gallery .row [class*="col-"]:nth-child(n+6),.vodiapicker {
      display: none
  }
  
  .btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child),.input-group>.form-control:not(:first-child),.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0
  }
  
  .input-group {
      position: relative;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: stretch;
      -ms-flex-align: stretch;
      align-items: stretch
  }
  
  .input-group-prepend,.input-group-text {
      display: -webkit-box;
      display: -ms-flexbox
  }
  
  .input-group>.form-control {
      position: relative;
      -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      width: 1%;
      margin-bottom: 0
  }
  
  .input-group>.form-control:focus {
      z-index: 3
  }
  
  .input-group-prepend {
      display: flex;
      margin-right: -1px
  }
  
  .download .container,.input-group-prepend .btn {
      position: relative;
      z-index: 2
  }
  
  .nav,.navbar {
      display: -webkit-box;
      display: -ms-flexbox;
      -ms-flex-wrap: wrap
  }
  
  .navbar-toggler,a,button.close {
      background-color: #fff0
  }
  
  .nav {
      display: flex;
      flex-wrap: wrap;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
  }
  
  .nav-link {
      display: block;
      padding: .5rem 1rem
  }
  
  .nav-tabs {
      border-bottom: 1px solid #dee2e6
  }
  
  .navbar {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between
  }
  
  .navbar>.container,.navbar>.container-fluid {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between
  }
  
  .navbar-brand {
      line-height: inherit
  }
  
  .navbar-nav {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -ms-flex-direction: column;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none
  }
  
  .navbar-collapse {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center
  }
  
  .card,.card-group {
      display: -webkit-box;
      display: -ms-flexbox;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal
  }
  
  .card {
      position: relative;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgb(0 0 0 / .125);
      border-radius: .25rem
  }
  
  .card-body {
      -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1.25rem
  }
  
  .card-footer,.card-header {
      padding: .75rem 1.25rem;
      background-color: rgb(0 0 0 / .03)
  }
  
  .card-header {
      margin-bottom: 0;
      border-bottom: 1px solid rgb(0 0 0 / .125)
  }
  
  .card-header:first-child {
      border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
  }
  
  .card-header+.list-group .list-group-item:first-child,.download-new ul li:first-child {
      border-top: 0
  }
  
  .breadcrumb,.media {
      display: -webkit-box;
      display: -ms-flexbox
  }
  
  .list-group,.modal-content {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal
  }
  
  .breadcrumb {
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      list-style: none;
      border-radius: .25rem
  }
  
  .breadcrumb-item+.breadcrumb-item::before {
      display: inline-block;
      padding-right: .5rem;
      padding-left: .5rem;
      color: #6c757d;
      content: "/"
  }
  
  .list-group,.modal-dialog-centered {
      display: -webkit-box;
      display: -ms-flexbox
  }
  
  .close {
      float: right;
      font-size: 1.5rem;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      opacity: .5
  }
  
  .close:focus,.close:hover {
      color: #000;
      text-decoration: none;
      opacity: .75
  }
  
  button.close {
      padding: 0;
      border: 0;
      -webkit-appearance: none
  }
  
  .modal {
      position: fixed;
      display: none;
      outline: 0
  }
  
  .carousel,.carousel-item,.fa-ul>li,.map,.modal-body,.modal-content,.modal-dialog,footer.footer .newsletter-form .form-group {
      position: relative
  }
  
  .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto
  }
  
  .modal-dialog {
      width: auto;
      margin: .5rem;
      pointer-events: none
  }
  
  .modal.fade .modal-dialog {
      transition: transform 0.3s ease-out;
      transition: transform 0.3s ease-out,-webkit-transform 0.3s ease-out;
      -webkit-transform: translate(0,-25%);
      transform: translate(0,-25%)
  }
  
  .modal.show .modal-dialog {
      -webkit-transform: translate(0,0);
      transform: translate(0,0)
  }
  
  .modal-dialog-centered {
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      min-height: calc(100% - (0.5rem * 2))
  }
  
  .modal-content,.modal-header {
      display: -webkit-box;
      display: -ms-flexbox
  }
  
  .modal-content {
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgb(0 0 0 / .2);
      border-radius: .3rem;
      outline: 0
  }
  
  .modal-body {
      -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1rem
  }
  
  .bg-white {
      background-color: #fff!important
  }
  
  .border {
      border: 1px solid #dee2e6!important
  }
  
  .border-0 {
      border: 0!important
  }
  
  .rounded-0 {
      border-radius: 0!important
  }
  
  .d-block,.open {
      display: block!important
  }
  
  .d-flex {
      display: -webkit-box!important;
      display: -ms-flexbox!important;
      display: flex!important
  }
  
  .justify-content-center {
      -webkit-box-pack: center!important;
      -ms-flex-pack: center!important;
      justify-content: center!important
  }
  
  .align-items-center {
      -webkit-box-align: center!important;
      -ms-flex-align: center!important;
      align-items: center!important
  }
  
  .mr-0,.mx-0 {
      margin-right: 0!important
  }
  
  .mb-1,.my-1 {
      margin-bottom: 0.25rem!important
  }
  
  .mt-2,.my-2 {
      margin-top: 0.5rem!important
  }
  
  .mr-2,.mx-2 {
      margin-right: 0.5rem!important
  }
  
  .mb-2,.my-2 {
      margin-bottom: 0.5rem!important
  }
  
  .mb-3,.my-3 {
      margin-bottom: 1rem!important
  }
  
  .mt-4,.my-4 {
      margin-top: 1.5rem!important
  }
  
  .mb-4,.my-4 {
      margin-bottom: 1.5rem!important
  }
  
  .p-0 {
      padding: 0!important
  }
  
  .pb-0,.py-0 {
      padding-bottom: 0!important
  }
  
  .p-2 {
      padding: 0.5rem!important
  }
  
  .p-3 {
      padding: 1rem!important
  }
  
  .pb-3,.py-3 {
      padding-bottom: 1rem!important
  }
  
  .p-4 {
      padding: 1.5rem!important
  }
  
  .pb-4,.py-4 {
      padding-bottom: 1.5rem!important
  }
  
  .py-5 {
      padding-top: 3rem!important
  }
  
  .pb-5,.py-5 {
      padding-bottom: 3rem!important
  }
  
  .mr-auto,.mx-auto {
      margin-right: auto!important
  }
  
  .mx-auto {
      margin-left: auto!important
  }
  
  .mx-auto {
      margin-left: auto!important
  }
  
  @media (min-width: 576px) {
      .modal-dialog {
          max-width:500px;
          margin: 1.75rem auto
      }
  
      .modal-dialog-centered {
          min-height: calc(100% - (1.75rem * 2))
      }
  
      .modal-sm {
          max-width: 300px
      }
  }
  
  @media (min-width: 1200px) {
      .container {
          max-width:1140px
      }
  
      .d-xl-block {
          display: block!important
      }
  }
  
  .fa-li,.loader,.send,.top-bar .menu-right .laung {
      text-align: center
  }
  
  .text-uppercase {
      text-transform: uppercase!important
  }
  
  .fa,label {
      display: inline-block
  }
  
  .fa {
      font: 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased
  }
  
  .fa-2x {
      font-size: 2em
  }
  
  .fa-envelope-o:before {
      content: "\f003"
  }
  
  .fa-home:before {
      content: "\f015"
  }
  
  .fa-map-marker:before {
      content: "\f041"
  }
  
  .fa-info-circle:before {
      content: "\f05a"
  }
  
  .fa-twitter:before {
      content: "\f099"
  }
  
  .fa-facebook-f:before,.fa-facebook:before {
      content: "\f09a"
  }
  
  .fa-linkedin:before {
      content: "\f0e1"
  }
  
  .fa-youtube:before {
      content: "\f167"
  }
  
  .fa-instagram:before {
      content: "\f16d"
  }
  
  .fa-long-arrow-right:before,span.nav-next:before {
      content: "\f178"
  }
  
  .fa-whatsapp:before {
      content: "\f232"
  }
  
  .btn,.download-new ul li a,.enq_top .text,.g-type .nav-item,.new_form .card-header,.p-summary label,.top-bar .menu-right a,nav.navbar .nav-link,section header label {
      text-transform: uppercase
  }
  
  .fadeInUp {
      -webkit-animation-name: fadeInUp;
      animation-name: fadeInUp
  }
  
  .animated {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both
  }
  
  .error {
      display: block;
      position: absolute;
      left: 0;
      bottom: -16px;
      font-size: 11px;
      color: #fb0303;
      font-weight: 500;
      letter-spacing: .5px
  }
  
  .property-gallery,.quick_enq {
      padding: 4rem 0
  }
  
  .text-small,footer.footer p {
      font-size: .9rem
  }
  
  .bg-black-5 {
      background: #444!important
  }
  
  .bg-black-6 {
      background: #1c1c1c!important
  }
  
  a {
      -webkit-text-decoration-skip: objects;
      -webkit-transition: 0.4s;
      transition: 0.4s;
      color: #644b02;
      text-decoration: none
  }
  
  .table td {
      padding: .55rem
  }
  
  h1 span,h2 span,h3 span {
      margin-right: 15px
  }
  
  section {
      padding: 2rem 0
  }
  
  section header {
      margin-bottom: 30px
  }
  
  section header label {
      margin-top: 0;
      font-size: 12px
  }
  
  p {
      color: #444
  }
  
  #font-setting-buttons .btn {
      margin: 0;
      padding: 0 8px;
      font-weight: 600;
      vertical-align: baseline;
      background: 0;
      color: #fff
  }
  
  #font-setting-buttons .btn:first-child {
      font-size: 12px
  }
  
  #font-setting-buttons .btn:last-child,.payment-plan h4 {
      font-size: 16px
  }
  
  #font-setting-buttons .btn:focus {
      outline: 0;
      box-shadow: none
  }
  
  .text-thin {
      font-weight: 400!important
  }
  
  .btn {
      -webkit-transition: 0.3s!important;
      transition: 0.3s!important
  }
  
  .btn-outline-light:hover,.text-primary {
      color: #f3c84b!important
  }
  
  .no-anchor-style {
      color: inherit!important
  }
  
  .has-line::after,.quick_enq .has-line::after {
      content: "";
      width: 50px;
      height: 3px;
      display: block;
      margin-top: 5px;
      background: #f3c84b
  }
  
  .amenities .has-line::after,.property-gallery .has-line::after,.quick_enq .has-line::after,.videos-sec .has-line::after {
      margin: 10px auto
  }
  
  .form-group {
      position: relative;
      margin-bottom: 25px
  }
  
  .form-control {
      border-radius: 0;
      padding: .245rem .75rem;
      font-weight: 300
  }
  
  .form-control::-webkit-input-placeholder {
      font-size: .9rem;
      font-weight: 300;
      font-family: Poppins,sans-serif;
      color: #999!important
  }
  
  label {
      color: #ccc;
      padding-left: 15px;
      margin-top: 15px
  }
  
  .breadcrumb {
      background: 0;
      padding: 0 0 0 20px;
      font-size: .8rem;
      position: relative;
      margin-bottom: 0
  }
  
  .breadcrumb::before {
      content: "\f015";
      display: block;
      position: absolute;
      top: 50%;
      left: 0;
      color: #f3c84b;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      font-family: FontAwesome
  }
  
  .breadcrumb a {
      text-decoration: none;
      color: #ececec
  }
  
  .breadcrumb a:focus,.breadcrumb a:hover,.toggle-features:focus,.toggle-features:hover,footer.footer a:focus,footer.footer a:hover {
      color: #f3c84b;
      text-decoration: none
  }
  
  .top-bar {
      background: #0e0e0e;
      color: #fff;
      padding: 7px 0;
      border-bottom: 1px solid #4e4e4e
  }
  
  .enq a:focus,.enq a:hover,.top-bar a {
      color: inherit
  }
  
  .top-bar a:focus,.top-bar a:hover {
      color: #fff;
      text-decoration: none
  }
  
  .top-bar .menu-left {
      color: #cbcbcb;
      font-size: .8rem;
      font-weight: 300;
      line-height: 2.5
  }
  
  .top-bar .menu-right {
      color: #fff;
      font-size: .75rem
  }
  
  .top-bar .menu-right li {
      margin: 0
  }
  
  .top-bar .menu-right li a:hover {
      color: #fff
  }
  
  .top-bar .menu-right a {
      padding: 0 10px;
      border-right: 0;
      font-weight: 500
  }
  
  .top-bar .menu-right li:last-child a {
      border-right: 0
  }
  
  .about .text .price,.top-bar .menu-right a:focus,.top-bar .menu-right a:hover,nav.navbar .nav-item.active,nav.navbar .nav-link:hover {
      color: #6e4902
  }
  
  .top-bar .menu-right i {
      margin-right: 5px
  }
  
  .list-inline-item:not(:last-child) {
      margin-right: .7rem
  }
  
  nav.navbar {
      padding-top: 0;
      padding-bottom: 0;
      background: #ffffffdb;
      color: #fff;
      -webkit-box-shadow: 0 2px 6px 0 rgb(0 0 0 / .14);
      box-shadow: 0 2px 6px 0 rgb(0 0 0 / .14);
      z-index: 11;
      -webkit-transition: 0.4s;
      transition: 0.4s;
      height: 65px
  }
  
  nav.navbar .nav-link {
      font-size: .8rem;
      font-weight: 600;
      letter-spacing: 1px;
      margin-right: .7rem;
      color: #000;
      padding: 7px 15px;
      background-color:#fff;
      
  }
  
  nav.navbar .navbar-brand {
      max-width: 250px;
      min-height: 65px
  }
  
  nav.navbar .navbar-toggler span {
      width: 25px;
      margin: 5px;
      display: block;
      height: 2px;
      background: #000;
      -webkit-transition: 0.2s;
      transition: 0.2s
  }
  
  nav.navbar img.logo {
      max-height: 55px;
      max-width: 100%;
      width: auto
  }
  
  @media (min-width: 992px) {
      .col-lg-2 {
          -webkit-box-flex:0;
          -ms-flex: 0 0 16.666667%;
          flex: 0 0 16.666667%;
          max-width: 16.666667%
      }
  
      .col-lg-3 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 25%;
          flex: 0 0 25%;
          max-width: 25%
      }
  
      .col-lg-4 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 33.333333%;
          flex: 0 0 33.333333%;
          max-width: 33.333333%
      }
  
      .col-lg-5 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 41.666667%;
          flex: 0 0 41.666667%;
          max-width: 41.666667%
      }
  
      .col-lg-7 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 58.333333%;
          flex: 0 0 58.333333%;
          max-width: 58.333333%
      }
  
      .col-lg-8 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 66.666667%;
          flex: 0 0 66.666667%;
          max-width: 66.666667%
      }
  
      .navbar-expand-lg,.navbar-expand-lg .navbar-nav {
          -webkit-box-orient: horizontal;
          -webkit-box-direction: normal
      }
  
      .navbar-expand-lg {
          -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
          -webkit-box-pack: start;
          -ms-flex-pack: start;
          justify-content: flex-start
      }
  
      .navbar-expand-lg .navbar-nav {
          -ms-flex-direction: row;
          flex-direction: row
      }
  
      .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: .5rem;
          padding-left: .5rem
      }
  
      .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid {
          -ms-flex-wrap: nowrap;
          flex-wrap: nowrap
      }
  
      .navbar-expand-lg .navbar-collapse {
          display: -webkit-box!important;
          display: -ms-flexbox!important;
          display: flex!important;
          -ms-flex-preferred-size: auto;
          flex-basis: auto
      }
  
      .navbar-expand-lg .navbar-toggler {
          display: none
      }
  
      .modal-lg {
          max-width: 800px
      }
  
      .d-lg-block {
          display: block!important
      }
  
      .mb-lg-0,.my-lg-0 {
          margin-bottom: 0!important
      }
  
      .m-home {
          display: none;
          float: left
      }
  }
  
  .modal {
      z-index: 9999
  }
  
  .loader,.send {
      background: #ffffffe6;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 11111;
      padding-top: 15%
  }
  
  .main-slider {
      margin: -65px 0 0;
      padding: 0;
      min-height: calc(100vh - 65px)
  }
  
  .main-slider .img-banner {
      height: 95vh;
      object-fit: cover;
      width: 100%
  }
  
  .carousel:after,.video-banner:after {
      content: "";
      display: block;
      background: #000000a6;
      width: 100%;
      height: 65px;
      bottom: 0;
      z-index: 1;
      position: absolute
  }
  
  #Priceinfo .modal-content {
      height: 350px;
      overflow-y: scroll
  }
  
  #Priceinfo .modal-content button {
      position: absolute;
      top: 5px;
      right: 5px;
      box-shadow: 1px 2px 1px #616161;
      border-radius: 50px;
      width: 23px;
      height: 23px;
      border: 1px solid #dadada;
      background: #fff
  }
  
  #Priceinfo .modal-content table span {
      margin-left: 7px;
      font-weight: 600
  }
  
  #Priceinfo .modal-content table img {
      width: 13px;
      margin-bottom: 4px;
      margin-right: 5px
  }
  
  .pro-summary {
      margin-top: -115px;
      position: relative;
      z-index: 10
  }
  
  .pro-summary figure {
      box-shadow: 4px 3px 14px #a0a0a0;
      width: 100%;
      height: auto;
      position: relative;
      background: #fff;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 0
  }
  
  .pro-summary figure img {
      position: relative;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      margin: auto;
      padding: 10px 0
  }
  
  .pro-summary .row {
      margin-left: -10px;
      margin-right: -10px
  }
  
  .pro-summary .row [class*="col-"] {
      padding-left: 10px;
      padding-right: 10px
  }
  
  .pro-summary header h1 {
      font-size: 20px;
      margin: 8px 0 15px;
      color: #fff;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
  }
  
  .pro-summary .price p {
      color: #f3c84b;
      font-size: 18px;
      margin: 0
  }
  
  .pro-summary .price label {
      margin: 0;
      color: #fff;
      letter-spacing: 1px;
      font-size: 12px;
      font-weight: 400;
      padding-left: 0
  }
  
  .pro-summary .pro-info .table {
      border: 0;
      margin-bottom: 0
  }
  
  .pro-summary .breadcrumb a {
      text-decoration: none;
      color: #191919;
      font-weight: 600
  }
  
  .pro-summary .breadcrumb::before {
      color: #949494
  }
  
  .pro-info .pro-info-warp img {
      float: left;
      margin-right: 10px;
      margin-top: 6px
  }
  
  .pro-info .pro-info-warp span {
      display: inline-block;
      color: #ccc;
      font-size: 12px;
      letter-spacing: 1px;
      line-height: 1
  }
  
  .pro-info .pro-info-warp p {
      font-size: 14px;
      margin: 0;
      padding: 0;
      font-weight: 600;
      color: #fff;
      letter-spacing: 1px;
      margin-top: 4px
  }
  
  .property {
      border: 1px solid #e8e3e3
  }
  
  #scrollTopButton,#scrollTopButton::before {
      height: 40px;
      background-color: #f3c84b;
      background-image: -webkit-gradient(linear,left top,right top,from(#f3c84b),to(#37cfdc));
      color: #fff;
      line-height: 40px;
      cursor: pointer;
      border-radius: 40px;
      text-align: center
  }
  
  .property:hover .overlay a {
      -webkit-transform: none;
      transform: none;
      -webkit-transition-delay: 0.5s;
      transition-delay: 0.5s
  }
  
  .property:hover {
      border-color: #f3c84b
  }
  
  .floor-plan .nav-tabs,.g-type,.property-single-map .nav-tabs {
      border-bottom: 0
  }
  
  .property .image {
      max-height: 190px;
      overflow: hidden;
      position: relative
  }
  
  .property .overlay {
      width: 100%;
      height: 100%;
      background: rgb(34 34 34 / .96);
      opacity: 0;
      -webkit-transition: 0.4s;
      transition: 0.4s;
      position: absolute;
      top: 0;
      right: 0
  }
  
  .property .overlay a {
      -webkit-transform: translateY(20px);
      transform: translateY(20px)
  }
  
  .property .info {
      padding: 10px;
      background: #ffffff8c
  }
  
  .download h4,.property .info h3 {
      font-size: 18px
  }
  
  .property .info .loc {
      font-size: 12px;
      color: #9c9c9c;
      margin-bottom: 5px
  }
  
  .h4,.property .price,h4 {
      font-size: 1.1rem
  }
  
  .similar-properties {
      background: url(../../images/pattern.png) #fafafa;
      padding: 4rem 0
  }
  
  footer.footer {
      padding: 25px 0 0
  }
  
  footer.footer p {
      color: #e1e1e1;
      line-height: 1.5rem
  }
  
  .property-thumb,footer.footer .logo {
      margin-bottom: 20px
  }
  
  footer.footer a {
      color: #fff;
      font-size: .9rem
  }
  
  footer.footer .social a {
      color: #000;
      font-size: 1.2rem;
      background: #9a9999;
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 2px 5px;
      border-radius: 5px
  }
  
  footer.footer .social a:focus,footer.footer .social a:hover {
      color: #000;
      text-decoration: none;
      background: #f3c84b
  }
  
  footer.footer .get-touch {
      list-style: none;
      margin: 0;
      padding: 0;
      color: #fff;
      font-size: .8rem
  }
  
  footer.footer .get-touch li {
      line-height: 2
  }
  
  footer.footer .get-touch li .fa {
      min-width: 1.1rem
  }
  
  footer.footer h3 {
      margin-top: 10px;
      margin-bottom: 10px;
      font-size: .9rem;
      color: #ccc
  }
  
  footer.footer .copyrights {
      padding: 10px 0;
      margin-top: 25px
  }
  
  footer.footer .copyrights p {
      margin: 0;
      font-size: 12px
  }
  
  footer.footer .copyrights a {
      color: #fff;
      font-size: 12px
  }
  
  #scrollTopButton {
      width: 40px;
      position: fixed;
      right: 30px;
      bottom: 30px;
      background-image: linear-gradient(to right,#f3c84b,#37cfdc);
      z-index: 9995;
      display: none
  }
  
  .new_form,.payment-plan table tbody tr {
      background: #fff
  }
  
  .download-new,.new_form {
      box-shadow: 0 0 8px 0 rgb(0 0 0 / 15%);
      overflow: hidden
  }
  
  #OverviewContent p a:hover,.floor-plan p a:hover,.payment-plan p a:hover,.property-gallery .gallery a,.property-single-features p a:hover,.property-single-map p a:hover {
      text-decoration: none;
      color: inherit
  }
  
  .btn,.locttt p {
      line-height: 1.5;
      font-weight: 500
  }
  
  .g-type {
      margin: 0 auto 25px;
      text-align: center;
      width: 390px
  }
  
  .property-gallery .gallery .row {
      margin-right: -1px;
      margin-left: -1px
  }
  
  .new_form {
      border-radius: 5px;
      border: 1px solid #efefef
  }
  
  .new_form .card-header {
      font-size: 16px;
      font-weight: 600;
      text-align: center;
      border-color: #f1f1f1
  }
  
  .new_form .card-body {
      padding: 1.5rem
  }
  
  .new_form input,.new_form select {
      border-radius: 5px;
      padding: 7px 11px
  }
  
  .new_form select {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
      font-size: 14px;
      color: #000
  }
  
  .new_form textarea {
      min-height: 70px;
      border-radius: 5px;
      padding: 7px 11px
  }
  
  .new_form .form-group {
      position: relative;
      margin-bottom: 15px
  }
  
  .download-new {
      border-radius: 5px
  }
  
  .download-new ul {
      margin: 0 auto;
      padding: 0;
      list-style: none;
      text-align: center
  }
  
  .download-new ul li {
      padding: 13px;
      box-shadow: 0 0 8px 0 rgb(0 0 0 / 3%);
      font-size: 13px;
      font-weight: 600;
      border: 1px solid #efefef;
      border-bottom: 0;
      letter-spacing: 1px;
      text-align: left
  }
  
  .download-new ul li:last-child {
      border-bottom: 1px solid #efefef;
      margin-bottom: 0
  }
  
  .download-new ul li a {
      color: #585858;
      text-decoration: none;
      display: block
  }
  
  .download-new ul li:hover {
      background: #f7f7f7
  }
  
  .locttt figure {
      border: 10px solid #e6e5e5;
      display: inline-block;
      border-radius: 50%;
      padding: 15px;
      margin: 15px auto 0
  }
  
  .enq .collapse.show#large,.locttt p {
      margin-bottom: 10px
  }
  
  .locttt p {
      font-size: 13px;
      color: #505050;
      display: block
  }
  
  .locttt label {
      font-size: 16px;
      font-weight: 700;
      margin: 5px 0;
      color: #000;
      display: block
  }
  
  .bitcoin-modal .close {
      margin: 6px 15px;
      font-size: 24px
  }
  
  .bitcoin-modal p {
      line-height: 1.3;
      font-size: 13px
  }
  
  .bitcoin-modal .form-group {
      margin-bottom: 18px
  }
  
  .bitcoin-modal .input-group-prepend {
      max-width: 121px
  }
  
  @media (max-width: 992px) {
      .m-home {
          float:left
      }
  
      .navbar-toggler {
          position: absolute;
          left: 0;
          top: 15px
      }
  }
  
  @media (min-width: 768px) {
      .col-md-2 {
          -webkit-box-flex:0;
          -ms-flex: 0 0 16.666667%;
          flex: 0 0 16.666667%;
          max-width: 16.666667%
      }
      nav.navbar {
          box-shadow:  rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }
      
      .col-md-3 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 25%;
          flex: 0 0 25%;
          max-width: 25%
      }
  
      .col-md-4 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 33.333333%;
          flex: 0 0 33.333333%;
          max-width: 33.333333%
      }
  
      .col-md-5 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 41.666667%;
          flex: 0 0 41.666667%;
          max-width: 41.666667%
      }
  
      .col-md-6 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 50%;
          flex: 0 0 50%;
          max-width: 50%
      }
  
      .col-md-7 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 58.333333%;
          flex: 0 0 58.333333%;
          max-width: 58.333333%
      }
  
      .col-md-8 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 66.666667%;
          flex: 0 0 66.666667%;
          max-width: 66.666667%
      }
  
      .col-md-9 {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 75%;
          flex: 0 0 75%;
          max-width: 75%
      }
  
      .order-md-1 {
          -webkit-box-ordinal-group: 2;
          -ms-flex-order: 1;
          order: 1
      }
  
      .order-md-2 {
          -webkit-box-ordinal-group: 3;
          -ms-flex-order: 2;
          order: 2
      }
  
      .d-md-block {
          display: block!important
      }
  
      .mt-md-3,.my-md-3 {
          margin-top: 1rem!important
      }
  
      .text-md-right {
          text-align: right!important
      }
  }
  
  .navbar {
      padding: .5rem 1rem
  }
  
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      margin-right: 1rem;
      font-size: 1.25rem
  }
  
  .navbar-toggler {
      padding: .25rem .75rem;
      font-size: 1.25rem;
      line-height: 1;
      border: 1px solid #fff0;
      border-radius: 50px
  }
  
  .btn {
      border: 1px solid #fff0;
      padding: .625rem 1.5rem;
      font-size: .8rem;
      border-radius: 5px
  }
  
  .btn-lg,body {
      font-size: 1rem
  }
  
  .btn-lg,.btn-sm {
      border-radius: 50px;
      line-height: 1.5
  }
  
  .btn:focus {
      outline: 0;
      -webkit-box-shadow: 0 0 0 .2rem rgb(89 137 229 / .25);
      box-shadow: 0 0 0 .2rem rgb(89 137 229 / .25)
  }
  
  .btn-primary {
      color: color-yiq(#f3c84b);
      background-color: #1d6aab;
      border-color: #1d6aab
  }
  
  .btn-primary:hover {
      color: color-yiq(#3871e0);
      background-color: #3871e0;
      border-color: #2d6ade
  }
  
  .btn-outline-primary:focus,.btn-primary:focus {
      -webkit-box-shadow: 0 0 0 .2rem rgb(89 137 229 / .5);
      box-shadow: 0 0 0 .2rem rgb(89 137 229 / .5)
  }
  
  .btn-primary:not([disabled]):not(.disabled).active,.btn-primary:not([disabled]):not(.disabled):active {
      color: color-yiq(#2d6ade);
      background-color: #2d6ade;
      border-color: #2262dc;
      -webkit-box-shadow: 0 0 0 .2rem rgb(89 137 229 / .5);
      box-shadow: 0 0 0 .2rem rgb(89 137 229 / .5)
  }
  
  .btn-light {
      color: color-yiq(#f8f9fa);
      background-color: #f8f9fa;
      border-color: #f8f9fa
  }
  
  .btn-light:hover {
      color: color-yiq(#e2e6ea);
      background-color: #e2e6ea;
      border-color: #dae0e5
  }
  
  .btn-outline-secondary {
      color: #868e96;
      background-color: #fff0;
      background-image: none;
      border-color: #868e96
  }
  
  .btn-outline-secondary:hover {
      color: #fff;
      background-color: #868e96;
      border-color: #868e96
  }
  
  .page-link,body {
      background-color: #fff
  }
  
  .btn-sm {
      padding: .2rem 1rem;
      font-size: .7rem
  }
  
  body {
      font-family: "PT Sans",sans-serif;
      font-weight: 500;
      line-height: 1.5;
      color: #212529
  }
  
  a:focus,a:hover {
      color: #644b02;
      text-decoration: none
  }
  
  .h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
      margin-bottom: .5rem;
      font-family: inherit;
      font-weight: 500;
      line-height: 1.2
  }
  
  .h1,h1 {
      font-size: 2.5rem
  }
  
  .h2,h2 {
      font-size: 1.7rem
  }
  
  .h3,h3 {
      font-size: 1.4rem
  }
  
  .small,small {
      font-size: 80%;
      font-weight: 400
  }
  
  .bg-light {
      background-color: #f8f9fa!important
  }
  
  .text-danger {
      color: #dc3545!important
  }
  
  a.text-danger:focus,a.text-danger:hover {
      color: #bd2130!important
  }
  
  .text-light {
      color: #f8f9fa!important
  }
  
  a.text-light:focus,a.text-light:hover {
      color: #dae0e5!important
  }
  
  .text-dark {
      color: #343a40!important
  }
  
  a.text-dark:focus,a.text-dark:hover {
      color: #1d2124!important
  }
  
  .form-control:focus {
      color: #495057;
      background-color: #fff;
      border-color: #c7d7f6;
      outline: 0;
      -webkit-box-shadow: 0 0 0 .2rem rgb(89 137 229 / .25);
      box-shadow: 0 0 0 .2rem rgb(89 137 229 / .25)
  }
  
  .form-control::placeholder {
      color: #868e96
  }
  
  select.form-control:not([size]):not([multiple]) {
      height: calc(2rem+8px)
  }
  
  @media only screen and (min-width: 1200px) {
      .container {
          max-width:1250px
      }
  }
  
  @media (max-width: 767px) {
      .g-type {
          width:auto
      }
  
      .navbar-toggler {
          position: absolute;
          left: 0;
          top: 15px
      }
  
      .top-bar .menu-right a {
          padding: 0 7px;
          border-right: 0
      }
  
      .quick_enq,.similar-properties {
          padding: 3rem 0
      }
  
      .pro-summary .pro-info .table td {
          width: 100%;
          display: inline-block;
          padding: 5px;
          border-bottom: 1px solid #717171
      }
  
      .pro-summary .pro-info .table td:last-child {
          border-bottom: 0
      }
  
      .main-slider .img-banner {
          height: 76vh
      }
  
      .main-slider,.main-slider.h-auto {
          margin-top: 0
      }
  
      nav.navbar .navbar-brand {
          margin-left: 45px;
          height: 65px
      }
  
      nav.navbar img.logo {
          max-height: 50px;
          max-width: 130px;
          object-fit: cover;
          min-height: auto;
          width: auto;
          height: auto;
          vertical-align: -webkit-baseline-middle
      }
  
      section {
          margin-bottom: -1px
      }
  
      .carousel:after {
          background: 0
      }
  
      .pro-summary {
          background: #000000c4;
          margin-top: -54px;
          padding-top: 11px
      }
  
      .pro-summary header {
          margin-bottom: 0
      }
  
      .pro-summary header h1 {
          font-size: 16px
      }
  
      .pro-info .pro-info-warp {
          margin-bottom: 10px
      }
  }
  
  @media (max-width: 991px) {
      nav.navbar .navbar-collapse {
          max-height:350px;
          overflow-y: auto;
          background: #fff
      }
  }
  
  ::-webkit-scrollbar {
      width: 9px
  }
  
  ::-webkit-scrollbar-track {
      background-color: #eee
  }
  
  ::-webkit-scrollbar-track:hover {
      border: 1px solid #ddd;
      background-color: #ddd
  }
  
  ::-webkit-scrollbar-thumb {
      min-height: 25px;
      background-color: #bbb;
      box-shadow: inset 1px 1px 0 #aaa,inset 0 -1px 0 #aaa
  }
  
  ::-webkit-scrollbar-thumb:hover {
      background-color: #aaa;
      box-shadow: inset 1px 1px 0 #999,inset 0 -1px 0 #999
  }
  
  #walkthrough_walkthroughmainId .close {
      position: absolute;
      top: -37px;
      right: 7px;
      font-size: 38px
  }
  
  #walkthrough_walkthroughmainId .enquiry_form {
      position: absolute;
      top: 8px;
      right: 8px;
      bottom: 8px;
      left: 8px;
      z-index: 1;
      background: #000000ba
  }
  
  #walkthrough_walkthroughmainId .enquiry_form .enqry {
      max-width: 360px;
      margin: 80px auto;
      border: 1px solid #3e3e3e;
      padding: 10px;
      background: #0000004f
  }
  
  #walkthrough_walkthroughmainId .enquiry_form .enqry h4 {
      font-size: 16px;
      text-transform: uppercase;
      color: #fff;
      text-align: center;
      margin-bottom: 15px
  }
  
  .has-line {
      font-size: 22px!important;
      margin: 0 0 20px auto;
      text-transform: uppercase;
      font-weight: 600
  }
  
  .has-line span {
      display: block;
      font-size: 15px;
      font-weight: 400;
      line-height: 2;
      color: #fff
  }
  
  .download .btn,.property-gallery .gallery h4,.property-single-description h3 {
      text-transform: uppercase;
      font-weight: 600
  }
  
  .property-single-description ul {
      list-style: none;
      margin: 0;
      padding: 0
  }
  
  .property-single-description ul li {
      line-height: 1.9
  }
  
  .property-single-description ul li:before {
      font-family: FontAwesome;
      content: "\f054";
      text-decoration: inherit;
      display: inline-block;
      speak: none;
      margin-right: 10px;
      font-size: 12px;
      color: #9c9c9c
  }
  
  .property-single-description h3 {
      font-size: 16px
  }
  
  .download {
      background: fixed #8a8989;
      position: relative;
      height: auto;
      padding: 4rem 0 5rem
  }
  
  .download:before {
      content: "";
      z-index: 1;
      position: absolute;
      background: #000000a3;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0
  }
  
  .download .btn {
      font-size: 14px
  }
  
  .download .has-line::after {
      content: "";
      width: 50px;
      height: 3px;
      display: block;
      background: #f3c84b;
      margin: 15px auto
  }
  
  .download h2 {
      font-weight: 400;
      font-size: 34px
  }
  
  .download h3 {
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: .7px
  }
  
  .property-gallery .gallery .row [class*="col-"] {
      padding-left: 4px;
      padding-right: 4px
  }
  
  .property-gallery .gallery figure {
      margin-bottom: 8px;
      overflow: hidden;
      position: relative;
      max-height: 280px
  }
  
  @media (max-width: 768px) {
      .download,.property-gallery {
          padding:3rem 0
      }
  
      .call-pont {
          display: block;
          position: fixed;
          width: 100%;
          background: #000;
          z-index: 999;
          bottom: 0;
          padding: 0 25px
      }
  
      .call-pont ul {
          list-style: none;
          margin: 0;
          padding: 0
      }
  
      .call-pont ul li {
          width: 50%;
          float: left;
          text-align: center;
          list-style: none;
          padding: 9px 0
      }
  
      .call-pont .fa {
          font-size: 1.7rem;
          color: #fff
      }
  
      .call-pont li.enqr a {
          background: #0284c1;
          padding: 5px 12px;
          border-radius: 4px;
          color: #fff;
          display: block
      }
  }
  
  #lg-counter,.lg-outer .lg-video-cont {
      vertical-align: middle;
      display: inline-block
  }
  
  #lg-zoom-out,.lg-actions .lg-next.disabled,.lg-actions .lg-prev.disabled {
      opacity: .5;
      pointer-events: none
  }
  
  .lg-sub-html,.lg-toolbar {
      background-color: rgb(0 0 0 / .45)
  }
  
  @font-face {
      font-family: lg;
      src: url(/fonts/lg.eot?n1z373);
      src: url(/fonts/lg.eot?#iefixn1z373) format("embedded-opentype"),url(/fonts/lg.woff?n1z373) format("woff"),url(/fonts/lg.ttf?n1z373) format("truetype"),url(/fonts/lg.svg?n1z373#lg) format("svg");
      font-display: swap;
      font-weight: 400;
      font-style: normal
  }
  
  .lg-icon {
      font-family: lg;
      speak: none;
      font-style: normal;
      font-weight: 400;
      font-variant: normal;
      text-transform: none;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
  }
  
  .lg-actions .lg-next,.lg-actions .lg-prev {
      background-color: rgb(0 0 0 / .45);
      border-radius: 2px;
      color: #999;
      cursor: pointer;
      display: block;
      font-size: 22px;
      margin-top: -10px;
      padding: 8px 10px 9px;
      position: absolute;
      top: 50%;
      z-index: 1080;
      border: 0;
      outline: 0
  }
  
  .lg-outer .lg-toogle-thumb,.lg-toolbar .lg-icon {
      color: #999;
      font-size: 24px;
      line-height: 27px;
      text-align: center;
      cursor: pointer
  }
  
  .lg-actions .lg-next:hover,.lg-actions .lg-prev:hover,.lg-outer .lg-toogle-thumb:hover,.lg-outer.lg-dropdown-active #lg-share,.lg-toolbar .lg-icon:hover {
      color: #fff
  }
  
  .lg-actions .lg-next {
      right: 20px
  }
  
  .lg-actions .lg-next:before {
      content: "\e095"
  }
  
  .lg-actions .lg-prev {
      left: 20px
  }
  
  .lg-actions .lg-prev:after {
      content: "\e094"
  }
  
  @-webkit-keyframes lg-right-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: -30px
      }
  }
  
  @-moz-keyframes lg-right-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: -30px
      }
  }
  
  @-ms-keyframes lg-right-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: -30px
      }
  }
  
  @keyframes lg-right-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: -30px
      }
  }
  
  @-webkit-keyframes lg-left-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: 30px
      }
  }
  
  @-moz-keyframes lg-left-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: 30px
      }
  }
  
  @-ms-keyframes lg-left-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: 30px
      }
  }
  
  @keyframes lg-left-end {
      0%,100% {
          left: 0
      }
  
      50% {
          left: 30px
      }
  }
  
  .lg-outer.lg-right-end .lg-object {
      -webkit-animation: 0.3s lg-right-end;
      -o-animation: 0.3s lg-right-end;
      animation: 0.3s lg-right-end;
      position: relative
  }
  
  .lg-outer.lg-left-end .lg-object {
      -webkit-animation: 0.3s lg-left-end;
      -o-animation: 0.3s lg-left-end;
      animation: 0.3s lg-left-end;
      position: relative
  }
  
  .lg-toolbar {
      z-index: 1082;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%
  }
  
  .lg-toolbar .lg-icon {
      float: right;
      height: 47px;
      padding: 10px 0;
      width: 50px;
      text-decoration: none!important;
      outline: 0;
      -webkit-transition: color 0.2s linear;
      -o-transition: color 0.2s linear;
      transition: color 0.2s linear
  }
  
  .lg-toolbar .lg-close:after {
      content: "\e070"
  }
  
  .lg-toolbar .lg-download:after {
      content: "\e0f2"
  }
  
  .lg-sub-html {
      bottom: 0;
      color: #eee;
      font-size: 16px;
      left: 0;
      padding: 10px 40px;
      position: fixed;
      right: 0;
      text-align: center;
      z-index: 1080
  }
  
  .lg-sub-html h4 {
      margin: 0;
      font-size: 13px;
      font-weight: 700
  }
  
  .lg-sub-html p {
      font-size: 12px;
      margin: 5px 0 0
  }
  
  #lg-counter {
      color: #999;
      font-size: 16px;
      padding-left: 20px;
      padding-top: 12px
  }
  
  .lg-next,.lg-prev,.lg-toolbar {
      opacity: 1;
      -webkit-transition: -webkit-transform 0.35s cubic-bezier(0,0,.25,1),opacity 0.35s cubic-bezier(0,0,.25,1),color 0.2s linear;
      -moz-transition: -moz-transform 0.35s cubic-bezier(0,0,.25,1),opacity 0.35s cubic-bezier(0,0,.25,1),color 0.2s linear;
      -o-transition: -o-transform 0.35s cubic-bezier(0,0,.25,1),opacity 0.35s cubic-bezier(0,0,.25,1),color 0.2s linear;
      transition: transform 0.35s cubic-bezier(0,0,.25,1),opacity 0.35s cubic-bezier(0,0,.25,1),color 0.2s linear
  }
  
  .lg-hide-items .lg-prev {
      opacity: 0;
      -webkit-transform: translate3d(-10px,0,0);
      transform: translate3d(-10px,0,0)
  }
  
  .lg-hide-items .lg-next {
      opacity: 0;
      -webkit-transform: translate3d(10px,0,0);
      transform: translate3d(10px,0,0)
  }
  
  .lg-hide-items .lg-toolbar {
      opacity: 0;
      -webkit-transform: translate3d(0,-10px,0);
      transform: translate3d(0,-10px,0)
  }
  
  body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-object {
      -webkit-transform: scale3d(.5,.5,.5);
      transform: scale3d(.5,.5,.5);
      opacity: 0;
      -webkit-transition: -webkit-transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1)!important;
      -moz-transition: -moz-transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1)!important;
      -o-transition: -o-transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1)!important;
      transition: transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1)!important;
      -webkit-transform-origin: 50% 50%;
      -moz-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%
  }
  
  body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-item.lg-complete .lg-object {
      -webkit-transform: scale3d(1,1,1);
      transform: scale3d(1,1,1);
      opacity: 1
  }
  
  .lg-outer .lg-thumb-outer {
      background-color: #0d0a0a;
      bottom: 0;
      position: absolute;
      width: 100%;
      z-index: 1080;
      max-height: 350px;
      -webkit-transform: translate3d(0,100%,0);
      transform: translate3d(0,100%,0);
      -webkit-transition: -webkit-transform 0.25s cubic-bezier(0,0,.25,1) 0;
      -moz-transition: -moz-transform 0.25s cubic-bezier(0,0,.25,1) 0;
      -o-transition: -o-transform 0.25s cubic-bezier(0,0,.25,1) 0;
      transition: transform 0.25s cubic-bezier(0,0,.25,1) 0
  }
  
  .lg-outer .lg-thumb-outer.lg-grab .lg-thumb-item,.lg-outer.lg-grab img.lg-object {
      cursor: -webkit-grab;
      cursor: -moz-grab;
      cursor: -o-grab;
      cursor: -ms-grab;
      cursor: grab
  }
  
  .lg-outer .lg-thumb-outer.lg-grabbing .lg-thumb-item,.lg-outer.lg-grabbing img.lg-object {
      cursor: move;
      cursor: -webkit-grabbing;
      cursor: -moz-grabbing;
      cursor: -o-grabbing;
      cursor: -ms-grabbing;
      cursor: grabbing
  }
  
  .lg-outer .lg-thumb-outer.lg-dragging .lg-thumb {
      -webkit-transition-duration: 0!important;
      transition-duration: 0!important
  }
  
  .lg-outer.lg-thumb-open .lg-thumb-outer {
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0)
  }
  
  .lg-outer .lg-thumb {
      padding: 10px 0;
      height: 100%;
      margin-bottom: -5px
  }
  
  .lg-outer .lg-thumb-item {
      cursor: pointer;
      float: left;
      overflow: hidden;
      height: 100%;
      border: 2px solid #fff;
      border-radius: 4px;
      margin-bottom: 5px
  }
  
  @media (min-width: 1025px) {
      .lg-outer .lg-thumb-item {
          -webkit-transition:border-color 0.25s;
          -o-transition: border-color 0.25s;
          transition: border-color 0.25s
      }
  }
  
  .lg-outer .lg-thumb-item.active,.lg-outer .lg-thumb-item:hover {
      border-color: #a90707
  }
  
  .lg-outer .lg-thumb-item img {
      width: 100%;
      height: 100%;
      object-fit: cover
  }
  
  .lg-outer.lg-has-thumb .lg-item {
      padding-bottom: 120px
  }
  
  .lg-outer.lg-can-toggle .lg-item {
      padding-bottom: 0
  }
  
  .lg-outer.lg-pull-caption-up .lg-sub-html {
      -webkit-transition: bottom 0.25s;
      -o-transition: bottom 0.25s;
      transition: bottom 0.25s
  }
  
  .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html {
      bottom: 100px
  }
  
  .lg-outer .lg-toogle-thumb {
      background-color: #0d0a0a;
      border-radius: 2px 2px 0 0;
      height: 39px;
      padding: 5px 0;
      position: absolute;
      right: 20px;
      top: -39px;
      width: 50px
  }
  
  .lg-outer .lg-toogle-thumb:after {
      content: "\e1ff"
  }
  
  .lg-outer .lg-video-cont {
      max-width: 1140px;
      max-height: 100%;
      width: 100%;
      padding: 0 5px
  }
  
  .lg-outer .lg-video {
      width: 100%;
      height: 0;
      padding-bottom: 56.25%;
      overflow: hidden;
      position: relative
  }
  
  .lg-outer .lg-video .lg-object {
      display: inline-block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%!important;
      height: 100%!important
  }
  
  .lg-outer .lg-video .lg-video-play {
      width: 84px;
      height: 59px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -42px;
      margin-top: -30px;
      z-index: 1080;
      cursor: pointer
  }
  
  .lg-outer .lg-has-iframe .lg-video {
      -webkit-overflow-scrolling: touch;
      overflow: auto
  }
  
  .lg-outer .lg-has-vimeo .lg-video-play {
      background: url(../img/vimeo-play.png) no-repeat
  }
  
  .lg-outer .lg-has-vimeo:hover .lg-video-play {
      background: url(../img/vimeo-play.png) 0 -58px no-repeat
  }
  
  .lg-outer .lg-has-html5 .lg-video-play {
      background: url(../img/video-play.png) no-repeat;
      height: 64px;
      margin-left: -32px;
      margin-top: -32px;
      width: 64px;
      opacity: .8
  }
  
  .lg-backdrop.in,.lg-css3.lg-fade .lg-item.lg-current,.lg-outer .lg-has-html5:hover .lg-video-play,.lg-outer.lg-show-after-load .lg-item.lg-complete .lg-object,.lg-outer.lg-show-after-load .lg-item.lg-complete .lg-video-play,.lg-outer.lg-visible,.lg-show-autoplay .lg-progress-bar {
      opacity: 1
  }
  
  .lg-outer .lg-has-youtube .lg-video-play {
      background: url(../img/youtube-play.png) no-repeat
  }
  
  .lg-outer .lg-has-youtube:hover .lg-video-play {
      background: url(../img/youtube-play.png) 0 -60px no-repeat
  }
  
  .lg-outer .lg-video-object {
      width: 100%!important;
      height: 100%!important;
      position: absolute;
      top: 0;
      left: 0
  }
  
  .lg-outer .lg-has-video .lg-video-object {
      visibility: hidden
  }
  
  .lg-outer .lg-empty-html,.lg-outer .lg-has-video.lg-video-playing .lg-object,.lg-outer .lg-has-video.lg-video-playing .lg-video-play,.lg-outer.lg-hide-download #lg-download {
      display: none
  }
  
  .lg-outer .lg-has-video.lg-video-playing .lg-video-object {
      visibility: visible
  }
  
  .lg-progress-bar {
      background-color: #333;
      height: 5px;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 1083;
      opacity: 0;
      -webkit-transition: opacity 80ms 0;
      -moz-transition: opacity 80ms 0;
      -o-transition: opacity 80ms 0;
      transition: opacity 80ms 0
  }
  
  .lg-progress-bar .lg-progress {
      background-color: #a90707;
      height: 5px;
      width: 0
  }
  
  .lg-progress-bar.lg-start .lg-progress {
      width: 100%
  }
  
  .lg-autoplay-button:after {
      content: "\e01d"
  }
  
  .lg-show-autoplay .lg-autoplay-button:after {
      content: "\e01a"
  }
  
  .lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-image,.lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
      -webkit-transition-duration: 0;
      transition-duration: 0
  }
  
  .lg-outer.lg-use-transition-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
      -webkit-transition: -webkit-transform 0.3s cubic-bezier(0,0,.25,1) 0;
      -moz-transition: -moz-transform 0.3s cubic-bezier(0,0,.25,1) 0;
      -o-transition: -o-transform 0.3s cubic-bezier(0,0,.25,1) 0;
      transition: transform 0.3s cubic-bezier(0,0,.25,1) 0
  }
  
  .lg-outer.lg-use-left-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
      -webkit-transition: left 0.3s cubic-bezier(0,0,.25,1),top 0.3s cubic-bezier(0,0,.25,1) 0;
      -moz-transition: left 0.3s cubic-bezier(0,0,.25,1),top 0.3s cubic-bezier(0,0,.25,1) 0;
      -o-transition: left 0.3s cubic-bezier(0,0,.25,1),top 0.3s cubic-bezier(0,0,.25,1) 0;
      transition: left 0.3s cubic-bezier(0,0,.25,1),top 0.3s cubic-bezier(0,0,.25,1) 0
  }
  
  .lg-outer .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0);
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      backface-visibility: hidden
  }
  
  .lg-outer .lg-item.lg-complete.lg-zoomable .lg-image {
      -webkit-transform: scale3d(1,1,1);
      transform: scale3d(1,1,1);
      -webkit-transition: -webkit-transform 0.3s cubic-bezier(0,0,.25,1),opacity 0.15s!important;
      -moz-transition: -moz-transform 0.3s cubic-bezier(0,0,.25,1),opacity 0.15s!important;
      -o-transition: -o-transform 0.3s cubic-bezier(0,0,.25,1),opacity 0.15s!important;
      transition: transform 0.3s cubic-bezier(0,0,.25,1),opacity 0.15s!important;
      -webkit-transform-origin: 0 0;
      -moz-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
      transform-origin: 0 0;
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      backface-visibility: hidden
  }
  
  #lg-zoom-in:after {
      content: "\e311"
  }
  
  #lg-actual-size {
      font-size: 20px
  }
  
  #lg-actual-size:after {
      content: "\e033"
  }
  
  #lg-zoom-out:after {
      content: "\e312"
  }
  
  .lg-zoomed #lg-zoom-out {
      opacity: 1;
      pointer-events: auto
  }
  
  .lg-outer .lg-pager-outer {
      bottom: 60px;
      left: 0;
      position: absolute;
      right: 0;
      text-align: center;
      z-index: 1080;
      height: 10px
  }
  
  .lg-outer .lg-pager-outer.lg-pager-hover .lg-pager-cont {
      overflow: visible
  }
  
  .lg-outer .lg-pager-cont {
      cursor: pointer;
      display: inline-block;
      overflow: hidden;
      position: relative;
      vertical-align: top;
      margin: 0 5px
  }
  
  .lg-outer .lg-pager-cont:hover .lg-pager-thumb-cont {
      opacity: 1;
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0)
  }
  
  .lg-outer .lg-pager-cont.lg-pager-active .lg-pager {
      box-shadow: 0 0 0 2px #fff inset
  }
  
  .lg-outer .lg-pager-thumb-cont {
      background-color: #fff;
      color: #fff;
      bottom: 100%;
      height: 83px;
      left: 0;
      margin-bottom: 20px;
      margin-left: -60px;
      opacity: 0;
      padding: 5px;
      position: absolute;
      width: 120px;
      border-radius: 3px;
      -webkit-transition: opacity 0.15s,-webkit-transform 0.15s 0;
      -moz-transition: opacity 0.15s,-moz-transform 0.15s 0;
      -o-transition: opacity 0.15s,-o-transform 0.15s 0;
      transition: opacity 0.15s,transform 0.15s 0;
      -webkit-transform: translate3d(0,5px,0);
      transform: translate3d(0,5px,0)
  }
  
  .lg-outer,.lg-outer .lg,.lg-outer .lg-inner,.lg-outer .lg-pager-thumb-cont img {
      width: 100%;
      height: 100%
  }
  
  .lg-outer .lg-pager {
      background-color: rgb(255 255 255 / .5);
      border-radius: 50%;
      box-shadow: 0 0 0 8px rgb(255 255 255 / .7) inset;
      display: block;
      height: 12px;
      -webkit-transition: box-shadow 0.3s 0;
      -o-transition: box-shadow 0.3s 0;
      transition: box-shadow 0.3s 0;
      width: 12px
  }
  
  .lg-outer .lg-pager:focus,.lg-outer .lg-pager:hover {
      box-shadow: 0 0 0 8px #fff inset
  }
  
  .lg-outer .lg-caret {
      border-left: 10px solid #fff0;
      border-right: 10px solid #fff0;
      border-top: 10px dashed;
      bottom: -10px;
      display: inline-block;
      height: 0;
      left: 50%;
      margin-left: -5px;
      position: absolute;
      vertical-align: middle;
      width: 0
  }
  
  .lg-fullscreen:after {
      content: "\e20c"
  }
  
  .lg-fullscreen-on .lg-fullscreen:after {
      content: "\e20d"
  }
  
  .lg-outer #lg-dropdown-overlay {
      background-color: rgb(0 0 0 / .25);
      bottom: 0;
      cursor: default;
      left: 0;
      position: fixed;
      right: 0;
      top: 0;
      z-index: 1081;
      opacity: 0;
      visibility: hidden;
      -webkit-transition: visibility 0 linear 0.18s,opacity 0.18s linear 0;
      -o-transition: visibility 0 linear 0.18s,opacity 0.18s linear 0;
      transition: visibility 0 linear 0.18s,opacity 0.18s linear 0
  }
  
  .lg-outer.lg-dropdown-active #lg-dropdown-overlay,.lg-outer.lg-dropdown-active .lg-dropdown {
      -webkit-transition-delay: 0;
      transition-delay: 0;
      -moz-transform: translate3d(0,0,0);
      -o-transform: translate3d(0,0,0);
      -ms-transform: translate3d(0,0,0);
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0);
      opacity: 1;
      visibility: visible
  }
  
  .lg-outer .lg-dropdown {
      background-color: #fff;
      border-radius: 2px;
      font-size: 14px;
      list-style-type: none;
      margin: 0;
      padding: 10px 0;
      position: absolute;
      right: 0;
      text-align: left;
      top: 50px;
      opacity: 0;
      visibility: hidden;
      -moz-transform: translate3d(0,5px,0);
      -o-transform: translate3d(0,5px,0);
      -ms-transform: translate3d(0,5px,0);
      -webkit-transform: translate3d(0,5px,0);
      transform: translate3d(0,5px,0);
      -webkit-transition: -webkit-transform 0.18s linear,visibility 0 linear 0.5s,opacity 0.18s linear 0;
      -moz-transition: -moz-transform 0.18s linear,visibility 0 linear 0.5s,opacity 0.18s linear 0;
      -o-transition: -o-transform 0.18s linear,visibility 0 linear 0.5s,opacity 0.18s linear 0;
      transition: transform 0.18s linear,visibility 0 linear 0.5s,opacity 0.18s linear 0
  }
  
  .lg-outer #lg-share,.lg-outer .lg {
      position: relative
  }
  
  .lg-outer .lg-dropdown:after {
      content: "";
      display: block;
      height: 0;
      width: 0;
      position: absolute;
      border: 8px solid #fff0;
      border-bottom-color: #fff;
      right: 16px;
      top: -16px
  }
  
  .lg-outer .lg-dropdown>li:last-child {
      margin-bottom: 0
  }
  
  .lg-outer .lg-dropdown>li:hover .lg-icon,.lg-outer .lg-dropdown>li:hover a {
      color: #333
  }
  
  .lg-outer .lg-dropdown a {
      color: #333;
      display: block;
      white-space: pre;
      padding: 4px 12px;
      font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
      font-size: 12px
  }
  
  .lg-outer .lg-dropdown a:hover {
      background-color: rgb(0 0 0 / .07)
  }
  
  .lg-outer .lg-dropdown .lg-dropdown-text {
      display: inline-block;
      line-height: 1;
      margin-top: -3px;
      vertical-align: middle
  }
  
  .lg-outer .lg-dropdown .lg-icon {
      color: #333;
      display: inline-block;
      float: none;
      font-size: 20px;
      height: auto;
      line-height: 1;
      margin-right: 8px;
      padding: 0;
      vertical-align: middle;
      width: auto
  }
  
  .lg-outer #lg-share:after {
      content: "\e80d"
  }
  
  .lg-outer #lg-share-facebook .lg-icon {
      color: #3b5998
  }
  
  .lg-outer #lg-share-facebook .lg-icon:after {
      content: "\e901"
  }
  
  .lg-outer #lg-share-twitter .lg-icon {
      color: #00aced
  }
  
  .lg-outer #lg-share-twitter .lg-icon:after {
      content: "\e904"
  }
  
  .lg-outer #lg-share-googleplus .lg-icon {
      color: #dd4b39
  }
  
  .lg-outer #lg-share-googleplus .lg-icon:after {
      content: "\e902"
  }
  
  .lg-outer #lg-share-pinterest .lg-icon {
      color: #cb2027
  }
  
  .lg-outer #lg-share-pinterest .lg-icon:after {
      content: "\e903"
  }
  
  .lg-group:after {
      content: "";
      display: table;
      clear: both
  }
  
  .lg-outer {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1050;
      text-align: left;
      opacity: 0;
      -webkit-transition: opacity 0.15s 0;
      -o-transition: opacity 0.15s 0;
      transition: opacity 0.15s 0
  }
  
  .lg-outer * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
  }
  
  .lg-outer.lg-css3 .lg-item.lg-current,.lg-outer.lg-css3 .lg-item.lg-next-slide,.lg-outer.lg-css3 .lg-item.lg-prev-slide {
      -webkit-transition-duration: inherit!important;
      transition-duration: inherit!important;
      -webkit-transition-timing-function: inherit!important;
      transition-timing-function: inherit!important
  }
  
  .lg-outer.lg-css3.lg-dragging .lg-item.lg-current,.lg-outer.lg-css3.lg-dragging .lg-item.lg-next-slide,.lg-outer.lg-css3.lg-dragging .lg-item.lg-prev-slide {
      -webkit-transition-duration: 0!important;
      transition-duration: 0!important;
      opacity: 1
  }
  
  .lg-outer .lg {
      overflow: hidden;
      margin-left: auto;
      margin-right: auto;
      max-width: 100%;
      max-height: 100%
  }
  
  .lg-outer .lg-inner {
      position: absolute;
      left: 0;
      top: 0;
      white-space: nowrap
  }
  
  .lg-outer .lg-item {
      background: url(/images/loading.gif) center center no-repeat;
      display: none!important
  }
  
  .lg-outer.lg-css .lg-current,.lg-outer.lg-css3 .lg-current,.lg-outer.lg-css3 .lg-next-slide,.lg-outer.lg-css3 .lg-prev-slide {
      display: inline-block!important
  }
  
  .lg-outer .lg-img-wrap,.lg-outer .lg-item {
      display: inline-block;
      text-align: center;
      position: absolute;
      width: 100%;
      height: 100%
  }
  
  .lg-outer .lg-img-wrap:before,.lg-outer .lg-item:before {
      content: "";
      display: inline-block;
      height: 50%;
      width: 1px;
      margin-right: -1px
  }
  
  .lg-outer .lg-img-wrap {
      position: absolute;
      padding: 0 5px;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0
  }
  
  .lg-outer .lg-item.lg-complete {
      background-image: none
  }
  
  .lg-outer .lg-item.lg-current {
      z-index: 1060
  }
  
  .lg-outer .lg-image {
      display: inline-block;
      vertical-align: middle;
      max-width: 100%;
      max-height: 100%;
      width: auto!important;
      height: auto!important
  }
  
  .lg-outer.lg-show-after-load .lg-item .lg-object,.lg-outer.lg-show-after-load .lg-item .lg-video-play {
      opacity: 0;
      -webkit-transition: opacity 0.15s 0;
      -o-transition: opacity 0.15s 0;
      transition: opacity 0.15s 0
  }
  
  .lg-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1040;
      background-color: #000;
      opacity: 0;
      -webkit-transition: opacity 0.15s 0;
      -o-transition: opacity 0.15s 0;
      transition: opacity 0.15s 0
  }
  
  .lg-css3.lg-no-trans .lg-current,.lg-css3.lg-no-trans .lg-next-slide,.lg-css3.lg-no-trans .lg-prev-slide {
      -webkit-transition: none 0 0!important;
      -moz-transition: none 0 0!important;
      -o-transition: none 0 0!important;
      transition: none 0 0!important
  }
  
  .lg-css3.lg-use-css3 .lg-item,.lg-css3.lg-use-left .lg-item {
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      backface-visibility: hidden
  }
  
  .lg-css3.lg-fade .lg-item,.lg-css3.lg-slide.lg-use-css3 .lg-item {
      opacity: 0
  }
  
  .lg-css3.lg-fade .lg-item.lg-current,.lg-css3.lg-fade .lg-item.lg-next-slide,.lg-css3.lg-fade .lg-item.lg-prev-slide {
      -webkit-transition: opacity 0.1s 0;
      -moz-transition: opacity 0.1s 0;
      -o-transition: opacity 0.1s 0;
      transition: opacity 0.1s 0
  }
  
  .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
      -webkit-transform: translate3d(-100%,0,0);
      transform: translate3d(-100%,0,0)
  }
  
  .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide {
      -webkit-transform: translate3d(100%,0,0);
      transform: translate3d(100%,0,0)
  }
  
  .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0);
      opacity: 1
  }
  
  .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current,.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide,.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
      -webkit-transition: -webkit-transform 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0;
      -moz-transition: -moz-transform 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0;
      -o-transition: -o-transform 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0;
      transition: transform 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0
  }
  
  .lg-css3.lg-slide.lg-use-left .lg-item {
      opacity: 0;
      position: absolute;
      left: 0
  }
  
  .lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
      left: -100%
  }
  
  .lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide {
      left: 100%
  }
  
  .lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
      left: 0;
      opacity: 1
  }
  
  .lg-css3.lg-slide.lg-use-left .lg-item.lg-current,.lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide,.lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
      -webkit-transition: left 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0;
      -moz-transition: left 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0;
      -o-transition: left 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0;
      transition: left 1s cubic-bezier(0,0,.25,1),opacity 0.1s 0
  }
  
  .floorPlan {
      width: 360px;
      height: 340px;
      background: url(/project/images/floor-plan.webp);
      background-repeat: no-repeat;
      margin-left: 90px
  }
  
  .floorPlan .floorImg {
      position: relative;
      left: 92px;
      top: 97px;
      width: 69%
  }
  
  .floorPlan .floorImg img {
      width: 100%;
      border-radius: 20px;
      object-fit: cover;
      height: 200px
  }
  
  .floorTable {
      width: 100%;
      padding-top: 1rem
  }
  
  .floorTable table tr th {
      border: 1px solid #e6e6e6;
      padding: .6rem;
      vertical-align: middle;
      background-color: #fff
  }
  
  .floorTable table,table {
      border-collapse: collapse
  }
  
  .floorTable table tr td {
      border: 1px solid #e6e6e6;
      padding: 3px 5px 3px 10px;
      font-size: .93rem;
      line-height: 2rem;
      color: #fff
  }
  
  .floorTable .floor-plan {
      max-width: 40px;
      border-radius: 5px;
      cursor: zoom-in
  }
  
  @media only screen and (max-width: 1100px) {
      .floorTable {
          margin-bottom:50px
      }
  
      .floorPlan {
          width: 100%;
          height: 100%;
          background-repeat: no-repeat;
          margin-left: 0;
          background-size: 96%
      }
  
      .floorPlan .floorImg {
          width: 66%;
          height: 199px;
          left: 99px;
          top: 101px
      }
  }
  
  @media only screen and (max-width: 990px) {
      .floorPlan {
          width:100%;
          height: 310px;
          background-repeat: no-repeat;
          margin-left: 0;
          background-size: 100%
      }
  
      .floorPlan .floorImg {
          width: 70%;
          height: 156px;
          left: 73px;
          top: 73px
      }
  
      .floorPlan .floorImg img {
          width: 100%;
          border-radius: 20px;
          height: calc(35vh - 95px);
          object-fit: cover
      }
  }
  
  @media only screen and (max-width: 767px) {
      .floorTable {
          width:100%;
          overflow-x: auto;
          margin-bottom: 30px
      }
  
      .floorTable table tr td {
          white-space: nowrap;
          padding: 21px!important;
          line-height: .8rem
      }
  
      .floorPlan {
          width: 100%;
          height: 340px;
          background-size: 100%;
          margin-bottom: 20px;
          margin-left: 0;
          position: relative
      }
  
      .floorPlan .floorImg {
          width: 70%;
          height: 190px;
          border-radius: 20px;
          position: absolute;
          left: 27%;
          top: 29%
      }
  }
  
  </style>