<template>
  <div>
    <div class="overlay" v-if="isOpen" @click="toggleSidebar"></div>
    <div class="topbar" :class="{ 'scrolled': isScrolled, 'topbarshadow': isScrolled }">
      <div class="header exchange-logo">
        <div class="container po-relative">
          <nav class="navbar navbar-expand-lg header-nav-bar justify-content-between">
            <div class="navbar-brand d-flex">
              <a href="#" :style="{ color: facebookColor }"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" :style="{ color: instagramColor }"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" :style="{ color: linkedinColor }"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" :style="{ color: youtubeColor }"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="act-buttons d-flex">
              <a href="#" class="laung"  title="French">
                <img :src="frenchImage" width="30" height="30" alt="French" class="img-fluid">
                <span :style="{ color: laungColor }">French</span>
              </a>
              <a href="#" class="laung"  title="Spanish">
                <img :src="spanishImage" width="30" height="30" alt="Spanish" class="img-fluid">
                <span :style="{ color: laungColor }">Spanish</span>
              </a>
              <a href="#" class="laung"  title="Chinese">
                <img :src="chineseImage" width="30" height="30" alt="Chinese" class="img-fluid">
                <span :style="{ color: laungColor }">Chinese</span>
              </a>
              <a href="#" class="laung"  title="Russian">
                <img :src="russianImage" width="30" height="30" alt="Russian" class="img-fluid">
                <span :style="{ color: laungColor }">Russian</span>
              </a>
              <a id="whatsappenId" target="_blank" class="login p-1 pr-2 whatsapp ml-5 mr-5" :style="{ color: whatsappColor }" href="#">
                <span class="d-md-none d-lg-none d-xl-none mr-1 whatsapp">
                  <i class="lni lni-whatsapp font-20 pr-2"></i>
                </span>
                <span class="d-none d-md-block whatsappicon">
                  <i class="fa-brands fa-whatsapp font-16 pr-2"></i>WhatsApp
                </span>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <aside class="sidebar" :class="{ open: isOpen }">
      <div class="toggle">
        <a href="#" class="js-menu-toggle" :style="{ color: toggleColor }" @click.prevent="toggleSidebar">
          <span v-if="!isOpen"><i class="fa-solid fa-bars"></i></span>
          <span v-else><i class="fa-solid fa-xmark cross"></i></span>
        </a>
      </div>
      <div class="side-inner">
        <div class="nav-menu">
          <ul>
            <li><router-link to="/">
                <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Home
              </router-link></li>
            <li><router-link to="/projects">
                <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Projects
              </router-link></li>
            <li><router-link to="/developer">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Developers
            </router-link></li>
            <li><router-link to="/communities">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Communities
            </router-link></li>
            <li><router-link to="/cities">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Cities
            </router-link></li>
            <li><router-link to="/location">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Location
            </router-link></li>
            <li><router-link to="/foreign-investors">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Foreign Investors
            </router-link></li>
            <li><router-link to="/property-investment-offers">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Investment Offers
            </router-link></li>
            <li><router-link to="/news-articles">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>News & Articles
            </router-link></li>
            <li><router-link to="/mortgage-offers">
                <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Mortgage
              </router-link></li>
            <li><router-link to="/about">
                <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>About
              </router-link></li>
            <li><router-link to="/contact">
              <span class="fa-solid fa-right-to-bracket mr-3 icon_side_menu"></span>Contact Us
            </router-link></li>
          </ul>
        </div>
      </div>
    </aside>
  </div>
</template>

<script>
import { ref, onMounted, onUnmounted, computed } from 'vue';
import Section360 from '../home/Section360.vue';
import frenchImagePath from '@/assets/img/fr.webp';
import spanishImagePath from '@/assets/img/sp.webp';
import chineseImagePath from '@/assets/img/cn.webp';
import russianImagePath from '@/assets/img/ru.webp';

export default {
  name: 'HomePropertiesIndex',
  components: {
    Section360,
  },
  setup() {
    const isOpen = ref(false);
    const isScrolled = ref(false);
    const frenchImage = ref(frenchImagePath);
    const spanishImage = ref(spanishImagePath);
    const chineseImage = ref(chineseImagePath);
    const russianImage = ref(russianImagePath);

    const handleScroll = () => {
      isScrolled.value = window.scrollY > 50;
    };

    const toggleSidebar = () => {
      isOpen.value = !isOpen.value;
    };

    // Dynamic colors based on scroll
    const toggleColor = computed(() => isScrolled.value ? '#000' : '#fff');
    const whatsappColor = computed(() => isScrolled.value ? '#25D366' : '#fff');
    const laungColor = computed(() => isScrolled.value ? '#000' : '#fff'); // Black when scrolled
    const facebookColor = computed(() => isScrolled.value ? '#3b5998' : '#fff');
    const instagramColor = computed(() => isScrolled.value ? '#e4405f' : '#fff');
    const linkedinColor = computed(() => isScrolled.value ? '#0077b5' : '#fff');
    const youtubeColor = computed(() => isScrolled.value ? '#ff0000' : '#fff');

    onMounted(() => {
      window.addEventListener('scroll', handleScroll);
    });

    onUnmounted(() => {
      window.removeEventListener('scroll', handleScroll);
    });

    return {
      isOpen,
      isScrolled,
      frenchImage,
      spanishImage,
      chineseImage,
      russianImage,
      toggleSidebar,
      toggleColor,
      whatsappColor,
      laungColor,
      facebookColor,
      instagramColor,
      linkedinColor,
      youtubeColor
    };
  },
};
</script>

  <style scoped>
  body {
    background: #fff;
    font-family: Montserrat, sans-serif;
    margin: 0;
    font-size: 14px;
    overflow-x: hidden;
    color: #404244;
    font-weight: 400;
    line-height: 1.8;
  }

  a {
    transition: .3s all ease;
  }

  a,
  a:hover {
    text-decoration: none !important;
  }
  .sidebar.open ~ .overlay {
  display: block; /* Show the overlay when sidebar is open */
}

.overlay {
  display: none; /* Hide the overlay by default */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Shadow effect */
  z-index: 999; /* Make sure it’s on top of the content */
  transition: opacity 0.3s ease-in-out;
}
  /* Sidebar styles */
  aside,
  main {
    height: 100vh;
    min-height: 580px;
  }

  aside {
    width: 300px;
    right: 0;
    top: 5px;
    z-index: 1001;
    position: fixed;
    transform: translateX(100%);
    background-color: #fff;
    border-left: 3px solid #9C3133;
    border-top: 3px solid #9C3133;
    transition: 1s transform cubic-bezier(0.23, 1, 0.32, 1);
  }

  aside.open {
    transform: translateX(0%);
  }

  aside .toggle {
    padding-right: 30px;
    padding-top: 20px;
    position: absolute;
    left: 0;
    transform: translateX(-100%);
  }

  aside .side-inner {
    padding: 5px 0;
    height: 100vh;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
  }

  aside .side-inner .nav-menu ul,
  aside .side-inner .nav-menu ul li {
    padding: 0;
    margin: 0px;
    list-style: none;
  }

  aside .side-inner .nav-menu ul li a {
    display: block;
    padding-left: 10px;
    padding-right: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #8b8b8b;
    position: relative;
    transition: .3s padding-left ease;
  }

  .icon_side_menu {
    font-size: 12px;
    color: #9C3133;
  }

  aside .side-inner .nav-menu ul li a:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0px;
    opacity: 0;
    visibility: hidden;
    transition: .3s opacity ease, .3s visibility ease, .3s width ease;
  }

  aside .side-inner .nav-menu ul li a:hover {
    color: #9C3133;
  }

  aside .side-inner .nav-menu ul li a:hover:before {
    width: 4px;
    opacity: 1;
    visibility: visible;
  }

  aside .side-inner .nav-menu ul li.active a {
    background: #fcfcfc;
    color: #000;
  }

  aside .side-inner .nav-menu ul li.active a:before {
    opacity: 1;
    visibility: visible;
    width: 4px;
  }

  .topbar {
  padding: 0;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  background-color: transparent;
  z-index: 20;
  transition: background-color 0.3s;
  transition: box-shadow 0.3s ease-in-out;
 
}
.topbarshadow {
  box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
}
.topbar.scrolled {
  background-color: #fff;
}

.topbar .navbar-brand a {
  color: #fff; /* Default color for icons when navbar is transparent */
}

.topbar.scrolled .navbar-brand a {
  color: inherit; /* Inherit color from parent when scrolled */
}

.navbar {
  transition: background-color 0.3s;
}

.navbar.bg-white {
  background-color: #fff;
  color: #000;
  font-size: 20px;

}
.js-menu-toggle {
  transition: color 0.3s;
}
.js-menu-toggle .cross{
  font-size: 28px;
  margin-right: -25px;
  color: #fff;
}
.whatsapp {
  transition: color 0.3s;
}

.laung {
  transition: color 0.3s;
}

  .sec-heading {
    margin-top: 30px;
    margin-bottom: 20px;
  }

  .sec-heading h1 {
    text-transform: uppercase;
    margin-bottom: 2px;
    line-height: 36px;
    font-size: 24px;
    font-weight: 600;
    color: #9C3133;
  }

  .sec-heading p {
    color: #000;
    font-size: 20px;
    font-weight: 500;
  }

  .header .navbar-brand {
    line-height: 55px;
    padding-top: 3px;
    padding-bottom: 2px;
    margin-left: -120px;
  }

  .header .navbar-brand a {
    padding-left: 15px;
    color: #fff;
    font-size: 24px;
  }


  .act-buttons {
    margin-right: -120px;
    margin-top: -5px;
  }

  .act-buttons a.laung {
    width: 38px;
    display: inline-block;
    text-align: center;
    line-height: 1;
    margin-bottom: -10px;
    position: initial;
    height: 35px;
    margin-right: 10px;
  }

  .act-buttons a.laung img {
    width: 20px;
  }

  .act-buttons a.laung span {
    display: inline-block;
    font-size: 8px;
    color: #fff;
    letter-spacing: .5px;
  }

  .image-container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
  }

  .image-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 600px;
  }



  .image {
    width: 270px;
    height: 150px;
    border-radius: 8px;
  }

  .extra-images {
    position: absolute;
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-top: -30%;
    transform: translateY(-50%);
    max-width: 600px;
    /* Same as .image-group max-width */
  }

  .extra-image {
    width: 250px;
    height: 330px;
    border-radius: 8px;

  }

  .extra-images img:first-of-type {
    position: absolute;
    left: -270px;
  }

  .extra-images img:last-of-type {
    position: absolute;
    right: -270px;
  }

  .image-wrapper {
    position: relative;
  }

  .overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    border-radius: 8px;

  }


  .overlay-text {
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 0px;
    margin-top: 15px;
  }

  .overlay-text1 {
    font-size: 18px;
    font-weight: 500;
  }

  .overlay-button {
    padding: 7px 20px;
    background-color: #9C3133;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 10px;
    transition: background-color 0.3s ease;
  }

  .btn-container {
    text-align: center;
    margin-top: 20px;
  }

  .btn-container .btn-primary {
    display: inline-block;
    background-color: #9C3133;
    border: #9C3133;
    padding: 10px 30px;
  }

  .btn-container .btn-primary a {
    color: #fff;
    font-size: 22px;
    text-decoration: none;

  }


  /* Responsive Styles */
  @media (max-width: 1280px) {
    .header .navbar-brand {
      margin-left: 0px;
    }

    .act-buttons {
      margin-right: 0px;
    }
  }

  @media (max-width: 1200px) {
    .header .navbar-brand {
      margin-left: 0px;
    }

    .act-buttons {
      margin-right: 0px;
    }

    .image-group {
      margin-left: -50px;
      max-width: 500px;
    }

    .extra-image {
      width: 200px;
      height: 330px;
      border-radius: 8px;

    }

    .extra-images img:first-of-type {
      position: absolute;
      left: -200px;
    }

    .extra-images img:last-of-type {
      position: absolute;
      right: -200px;
    }
  }

  @media (max-width: 992px) {
    .header .navbar-brand {
      margin-left: -70px;
    }

    .act-buttons {
      margin-right: -40px;
    }

    .extra-images {
      display: none;
    }

    .image-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      max-width: 600px;
    }

    .image {
      width: 300px;
      height: 220px;
      border-radius: 8px;
    }


  }

  @media (max-width: 768px) {
    .header .navbar-brand {
      margin-left: -60px;
    }

    .act-buttons {
      margin-right: -10px;
    }

    .image-group {
      grid-template-columns: 1fr;
      max-width: 100%;
    }

    .extra-images {
      display: none;
    }

    .image-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      max-width: 600px;
    }

    .image {
      width: 300px;
      height: 220px;
      border-radius: 8px;
    }
  }

  @media (max-width: 576px) {
    .header .navbar-brand a {
      display: none;
      margin-right: 0px;
    }

    .act-buttons {
      margin-right: 20px;
      margin-top: 10px;
    }

    aside {
      top: 0px;
    }

    .whatsapp {
      margin-top: -5px;
    }

    .lni-whatsapp::before {
      content: "\f232";
      font-family: 'FontAwesome';
      color: #fff;
      font-size: 24px;
    }

    .sec-heading h1 {
      font-size: 20px;
      font-weight: 600;
    }

    .sec-heading p {
      font-size: 18px;
      font-weight: 400;
    }

    .image-group {
      grid-template-columns: 1fr;
      /* Single column layout for medium screens */
      max-width: 100%;
      /* Full width */
      gap: 10px;
      margin-left: 0px;
    }

    .image {
      width: 100%;
      height: auto;
    }
  }
</style>
  