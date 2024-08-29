<template>
    <Header />
    <div class="breadcrumb__area">
        <div class="breadcrumb__thumb" :style="{ backgroundImage: `url(${thumb1})` }"></div>
        <div class="breadcrumb__content">
            <h2 class="breadcrumb__title">Foreign Investors</h2>
            <div class="breadcrumb__menu">
                <nav>
                    <NameSlug/>
                </nav>
            </div>
           
        </div>
        
    </div>
    <InvestSlug/>
    <Footer />
</template>

<script setup>
    import Footer from '../home/Footer.vue';
    import Header from '../home/Header.vue';
    import InvestSlug from '../foreigninvestors/InvestSlug.vue'
    import thumb1 from '@/assets/img/bnn1.jpg';
import NameSlug from './NameSlug.vue';
</script>

<style scoped>
    .breadcrumb__area {
        position: relative;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .breadcrumb__thumb {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.breadcrumb__thumb::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Black color with 50% opacity */
}


    .breadcrumb__content {
        z-index: 2;
        color: #fff;
    }

    .breadcrumb__title {
        font-size: 36px;
        color: inherit;
        margin-bottom: 15px;
    }

    .breadcrumb__menu {
        display: flex;
        justify-content: center;
    }

    .breadcrumb__menu ul {
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 500;
    }

    .breadcrumb__menu ul li {
        list-style: none;
        font-size: 16px;
        text-transform: capitalize;
        font-weight: 700;
        color: #9C3133;
    }

    .breadcrumb__menu ul li span a {
        color: #fff;
        text-decoration: none;
    }

    .breadcrumb__menu ul li span i {
        margin-right: 10px;
    }

    /* Search input and button styles */
    .search-wrapper {
        position: relative;
    }
    .no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.ui-helper-hidden-accessible {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}
    .search-wrapper input{
        border: none;
        width: 100%;
    }

    @media only screen and (max-width: 1024px) {
        .breadcrumb__area {
            padding: 80px 0;
        }

    }
</style>
