<template>
    <div class="hero">
        <div class="hero-slide">
            <div v-for="(image, index) in images" :key="index" class="img"
                :style="{ backgroundImage: `url(${image})`, display: currentSlide === index ? 'block' : 'none' }"></div>
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-lg-9" style="margin-top: 100px;">
                        <div class="logo-inshaa">
                            <img :src="Image" width="400" height="500" alt="French" class="img-fluid">
                        </div>
                        <h1 class="heading">LET'S BUILD A LEGACY</h1>
                        <form action="#" class="narrow-w form-search d-flex mb-3">
                            <input type="text" class="form-control px-4" placeholder="Explore Top Selling Properties..." />
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { ref, onMounted, onUnmounted } from 'vue';
    import ImagePath from '@/assets/img/logo-insha.png';
    export default {
        name: 'HeroSlider',
        setup() {
            const Image = ref(ImagePath);
            const images = ref([
                new URL('@/assets/img/last-banner.jpg', import.meta.url).href,
                new URL('@/assets/img/2nd-Banner.jpg', import.meta.url).href,
                new URL('@/assets/img/last-banner.jpg', import.meta.url).href,
                new URL('@/assets/img/last-banner.jpg', import.meta.url).href,
            ]);
            const currentSlide = ref(0);

            const nextSlide = () => {
                currentSlide.value = (currentSlide.value + 1) % images.value.length;
            };

            let slideInterval;

            onMounted(() => {
                slideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
            });

            onUnmounted(() => {
                clearInterval(slideInterval);
            });

            return {
                images,
                currentSlide,
                Image,
            };
        },
        
    };
</script>

<style scoped>
    .hero {
        position: relative;
        z-index: -1;
        margin-top: -70px;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-slide .img {
        height: 105%;
        background-size: cover;
        background-position: center;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .hero-content {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        z-index: 1; /* Ensure content is above the slider images */
        color: #fff; /* Text color to stand out against the background */
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow for better readability */
    }

    .heading {
        font-size: 52px;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
    }

    .form-search {
        max-width: 600px;
        width: 100%;
        margin: 0 auto; /* Center the form */
    }

    .form-control {
        border-radius: 0;
        padding: 30px;
        font-size: 1rem;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .btn-primary {
        padding: 15px 30px;
        font-size: 1rem;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #9C3133;
        border: #9C3133;
    }

</style>
