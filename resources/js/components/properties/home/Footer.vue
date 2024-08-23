<template>
    <footer class="footer">
      <div class="p-4">
        <div class="row my-4">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <div class="footer_logo align-items-center justify-content-center" >
              <img :src="Image"  alt="" loading="lazy" />
             
            </div>
            <div class="footer_logo align-items-center justify-content-center" >
              <img :src="Image1"  alt="" loading="lazy" />
             
            </div>
            
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">QUICK LINKS</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><router-link class="text-white" to="/">
                <i class="fa-solid fa-arrow-right pe-3"></i>Home
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/projects">
                <i class="fa-solid fa-arrow-right pe-3"></i>Projects
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/developer">
                <i class="fa-solid fa-arrow-right pe-3"></i>Developers
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/communities">
                <i class="fa-solid fa-arrow-right pe-3"></i>Communities
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/cities">
                <i class="fa-solid fa-arrow-right pe-3"></i>Cities
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/location">
                <i class="fa-solid fa-arrow-right pe-3"></i>Locations
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/contact">
                <i class="fa-solid fa-arrow-right pe-3"></i>Contact Us
              </router-link></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">USE FULL LINKS</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><router-link class="text-white" to="/about">
                <i class="fa-solid fa-arrow-right pe-3"></i>About
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/foreign-investors">
                <i class="fa-solid fa-arrow-right pe-3"></i>Foreign Investors
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/news-articles">
                <i class="fa-solid fa-arrow-right pe-3"></i>News & Articles
              </router-link></li>
              <li class="mb-2"><router-link class="text-white" to="/mortgage-offers">
                <i class="fa-solid fa-arrow-right pe-3"></i>Mortgage & Home Loan
              </router-link></li>
              <li class="mb-2"><a href="#!" class="text-white"><i class="fa-solid fa-arrow-right pe-3"></i>Investment Offers</a></li>
              <li class="mb-2"><a href="#!" class="text-white"><i class="fa-solid fa-arrow-right pe-3"></i>Careers</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">CONTACT INFO</h5>
            <ul class="list-unstyled">
              <li><p><i class="fas fa-map-marker-alt pe-2"></i>Warsaw, 57 Street, Poland</p></li>
              <li><p><i class="fas fa-phone pe-2"></i>+01 234 567 89</p></li>
              <li><p><i class="fas fa-envelope pe-2 mb-0"></i>contact@example.com</p></li>
            </ul>
            <ul class="d-flex flex-row" style="list-style: none;float: left;">
              <li><a class="text-white1 px-2" href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a class="text-white1 px-2" href="#!"><i class="fab fa-instagram"></i></a></li>
              <li><a class="text-white1 px-2" href="#!"><i class="fa-brands fa-linkedin-in"></i></a></li>
              <li><a class="text-white1 ps-2" href="#!"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </template>
 <script>
 import { ref } from 'vue';
 import ImagePath from '@/assets/img/logo-insha.png';
 import Image1Path from '@/assets/img/world-gate-property-2.png';

 export default {
   name: 'HomePropertiesIndex',
   setup() {
     const Image = ref(ImagePath);
     const Image1 = ref(Image1Path);
     return {
        Image,
        Image1,
     };
   },
 };
</script>
<style scoped>
.footer {
  background-image: url('@/assets/img/last-banner.jpg'); 
  background-size: cover;
  background-position: center;
  color: #ffffff;
  padding: 30px 0;
}
.footer_logo {
  align-items: center;
  justify-content: center;
  text-align: center;
}
.footer_logo img{
  width: 150px;
  height: 150px;
}
.footer .p-4 {
  padding: 0 1.5rem; 
}

.footer .text-center {
  color: #ffffff; 
}

.footer .list-unstyled a {
  color: #ffffff; 
  text-decoration: none;
  border-bottom: 1px dotted #ffffff; 
  display: block; 
  width: 100%; 
  padding-bottom: 2px; 
}



.footer .rounded-circle {
  background-color: rgba(255, 255, 255, 0.8); 
}

.footer .list-unstyled li {
  margin-bottom: 10px;
}

.footer .text-uppercase {
  text-transform: uppercase;
  position: relative;
  padding-bottom: 10px;
}

.footer .text-uppercase::before,
.footer .text-uppercase::after {
  content: "";
  position: absolute;
  bottom: 0;
  height: 2px;
  background-color: #9C3133;
}

.footer .text-uppercase::before {
  left: 0;
  width: 25%;
  height: 5px;
}

.footer .text-uppercase::after {
  right: 175px;
  width: 25%;
  height: 2px;
  
}
.footer .mb-4 {
  margin-bottom: 1.5rem;
}

.footer .mb-md-0 {
  margin-bottom: 0;
}

.footer i {
  font-size: 1.2rem; 
}
.text-white i{
    font-size: 12px;
    color: #9C3133;
}
.text-white1 i{
    color: #fff;
    float: left;
}

@media (max-width: 1200px) {
  
  .footer_logo img{
   width: 230px; 
  }
  .footer .text-uppercase::after {
    right: 115px;
  }
}

@media (max-width: 992px) {
  .footer .text-uppercase::after {
    right: 225px;
  }
  
}
@media (max-width: 768px){
  .footer .text-uppercase::after{
    right: 195px;
  }
}

@media (max-width: 576px) {
  
  .footer .text-uppercase::after{
    right: 195px;
  }
  .footer_logo img{
   width: 230px; 
   height: 200px;
  }
}
</style>
  