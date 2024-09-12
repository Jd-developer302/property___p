<template>
    <div class="background-card">
      <div class="content">
        <h1 class="heading">Project Offers</h1>
        <p class="paragraph">
            Looking for best buy - here is the well compiled information out of several developers and locations for you.
        </p>
        <a class="view-more-button" href="/projects">VIEW MORE</a>
        
        
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'BackgroundCard',
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
  .background-card {
  background-image: url('@/assets/img/last-banner.jpg'); 
  background-size: cover;
  background-position: center;
  color: #ffffff;
  padding: 30px 0;
  text-align: center;
  position: relative;
 overflow: hidden;
}
  
  
  .content {
    max-width: 500px;
    margin: 0 auto;
    padding-top: 50px;
    padding-bottom: 50px;
  }
  
  .heading {
    font-size: 2rem;
    margin-bottom: 20px;
    text-transform: uppercase;
    color: #9C3133;
    font-family: 'Montserrat', sans-serif;
  }
  
  .paragraph {
    font-size: 1rem;
    line-height: 1.2;
    margin-bottom: 30px;
    font-family: 'Montserrat', sans-serif;
  }
  
  .view-more-button {
    background-color: #9C3133;
    color: #fff;
    border: none;
    padding: 5px 30px;
    font-size: 1.7rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;

  }
  
  .view-more-button:hover {
    background-color: #7a2526;
    text-decoration: none;
  }
  </style>
  