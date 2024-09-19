<template>
    <section>
    <div class="container-xxl">
      <div class="row">
        <div class="col">
          <div class="sec-heading mx-auto">
            <h1>NEW LAUNCH PROJECTS</h1>
            <p>Upcoming & Recent Launches by Reputed Developers</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="image-container">
            <Imagegroup/>
      
            <div class="extra-images">
              <ExtraImage1/>
              <ExtraImage2/>
            </div>
          </div>
          <div class="btn-container">
            <div class="btn btn-primary">
              <a href="/Projects">VIEW MORE</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
</template>
<script>
  import { ref } from 'vue';
  import extraImage1Path from '@/assets/img/1.jpg';
  import extraImage2Path from '@/assets/img/6.jpg';
  import image1Path from '@/assets/img/2.jpg';
  import image2Path from '@/assets/img/5.jpg';
  import image3Path from '@/assets/img/3.jpg';
  import image4Path from '@/assets/img/4.jpg';
import ExtraImage1 from './newlounch/extraImage1.vue';
import ExtraImage2 from './newlounch/extraImage2.vue';
import Imagegroup from './newlounch/imagegroup.vue';

  export default {
    components: {
      ExtraImage1,
      ExtraImage2,
      Imagegroup
        },
    name: 'SectionNew',
    setup() {
      const extraImage1 = ref(extraImage1Path);
      const extraImage2 = ref(extraImage2Path);
      const image1 = ref(image1Path);
      const image2 = ref(image2Path);
      const image3 = ref(image3Path);
      const image4 = ref(image4Path);
      return {
        extraImage1,
        extraImage2,
        image1,
        image2,
        image3,
        image4
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
  section{
    padding-left: 40px;
    padding-right: 40px;
  }

  /* Sidebar styles */
  
  /* Topbar styles */

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
    font-family: 'Montserrat', sans-serif;
  }

  .sec-heading p {
    color: #000;
    font-size: 20px;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
  }

  

  .image-container {
    position: relative;
    display: flex;
    width: 100%;
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
    width: 300px;
    height: 150px;
    border-radius: 8px;
    margin-left: -10px;
    border-radius: 25px
  }

  .extra-images {
    position: absolute;
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-top: -30%;
    transform: translateY(-50%);
    max-width: 600px;
  }
  .extra-images a {
    display: block;
  }

  .extra-image {
    width: 330px;
    height: 330px;
    border-radius: 8px;
    
  }

  .extra-images img:first-of-type {
    position: absolute;
    left: -365px;
    margin-top: 30px;
  }

  .extra-images img:last-of-type {
    position: absolute;
    right: -365px;
    margin-top: 30px;
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
.overlay-text1{
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
@media (max-width:1400px){
  .sec-heading h1{
    margin-left: 20px;
  }
  .sec-heading p{
    margin-left: 20px;
  }
}


  /* Responsive Styles */
  @media (max-width: 1280px) {
  
  }

  @media (max-width: 1200px) {
  

    .image-group {
      margin-left: -50px;
      max-width: 500px;
      grid-template-columns: repeat(2, 1fr);
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
      grid-template-columns: 1fr; /* Single column layout for medium screens */
    max-width: 100%; /* Full width */
      gap: 10px;
      margin-left: 0px;
    }

    .image {
      width: 100%;
      height: auto;
    }
  }
</style>