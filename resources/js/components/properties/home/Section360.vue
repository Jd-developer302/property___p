<template>
    <section>
      <div class="container-xxl mb-3">
        <div class="row">
          <div class="col">
            <div class="sec-heading mx-auto">
              <h1>360° View Walkthrough</h1>
              <p>Get a better perspective of the properties with our 360 degree views</p>
            </div>
          </div>
        </div>
        <div class="row images-row">
          <div class="col" v-for="(image, index) in images" :key="index">
            <div class="image-container">
              <img :src="image.src" :alt="image.alt" class="img-fluid" />
              <p>{{ image.caption }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import image1 from '@/assets/img/55.jpg';
  import image2 from '@/assets/img/44.jpg';
  import image3 from '@/assets/img/22.jpg';
  import image4 from '@/assets/img/11.jpg';
  
  export default {
    name: 'Section360',
    data() {
      return {
        images: [
          { src: image1, alt: 'Image 1', caption: 'Villanova La Rosa' },
          { src: image2, alt: 'Image 2', caption: 'Madinat Jumeirah Living' },
          { src: image3, alt: 'Image 3', caption: 'Sunrise Bay' },
          { src: image4, alt: 'Image 4', caption: 'BLVD Heights' },
        ],
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

a, a:hover {
  text-decoration: none !important;
}



.sec-heading {
    margin-bottom: 20px;
  }
  
  .sec-heading h1 {
    text-transform: uppercase;
    margin-bottom: 10px;
    line-height: 36px;
    font-size: 24px;
    margin-left: 15px;
    font-weight: 600;
    color: #9c3133;
    font-family: 'Montserrat', sans-serif;
  }
  
  .sec-heading p {
    color: #000;
    font-size: 17px;
    margin-left: 15px;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif;
  }

.images-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.image-container {
  text-align: center;
  margin-bottom: 20px;
}

.image-container img {
  width: 100%;
  max-width: 300px;
  margin-bottom: 10px;
}

.image-container p {
  font-size: 18px;
  font-weight: 600;
  color: #404244;
}

/* Responsive Styles */
@media (max-width: 992px) {
  .images-row {
    flex-direction: row;
    justify-content: space-between;
  }

  .col {
    flex: 0 0 48%;
    max-width: 48%;
  }

  .image-container img {
    max-width: 100%;
  }
}

@media (max-width: 576px) {
  .col {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .images-row {
    flex-direction: column;
    align-items: center;
  }
}
</style>
