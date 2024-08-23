<template>
  <section class="dream-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="dream-img">
            <img :src="leftImage" alt="Left Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-lg-6 text-section">
          <h2>Search Your Dream</h2>
          <div class="line-container">
            <hr class="line" />
            <hr class="line1" />
            <hr class="line2" />
          </div>
          <form class="search-form">
            <div class="form-group" >
              <input type="text" id="keyword (e.g. ‘office’)" placeholder="Enter keyword"/>
            </div>
            <div class="form-group">
              <select id="location">
                <option value="" disabled selected>Location</option>
                <option value="city1">City 1</option>
                <option value="city2">City 2</option>
                <option value="city3">City 3</option>
              </select>
            </div>
            <div class="form-group">
              <select id="property-type">
                <option value="" disabled selected>Property type</option>
                <option value="house">House</option>
                <option value="apartment">Apartment</option>
                <option value="land">Land</option>
              </select>
            </div>
            <div class="form-group">
              <select id="property-status">
                <option value="" disabled selected>Property status</option>
                <option value="for-sale">For Sale</option>
                <option value="for-rent">For Rent</option>
                <option value="sold">Sold</option>
              </select>
            </div>
            <div class="form-group row">
              <div class="col">
                <select id="min-beds">
                  <option value="" disabled selected>Min beds</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <div class="col">
                <select id="min-baths">
                  <option value="" disabled selected>Min baths</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col">
                <input type="number" id="min-area" placeholder="Min area" />
              </div>
              <div class="col">
                <input type="number" id="max-area" placeholder="Max area" />
              </div>
            </div>
            <button type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import backgroundImage from '@/assets/img/background.jpg'; 
import leftImage from '@/assets/img/lady.png'; 

export default {
  name: 'SectionSearch',
  data() {
    return {
      backgroundImage,
      leftImage,
    };
  },
};
</script>

<style scoped>
.dream-section {
  background-image: url('@/assets/img/background.jpg'); 
  background-size: cover;
  background-position: center;
  padding: 50px 0;
}

.dream-img {
  height:44.6vh;
}

.text-section {
  color: #fff;
  text-transform: uppercase;
}

.text-section h2 {
  font-size: 32px;
  margin-bottom: 20px;
  font-family: 'Montserrat', sans-serif;
}

.line-container {
  margin: 20px 0;
}

.line, .line1, .line2 {
  border: none;
  border-top: 1px solid #fff;
  margin: 10px 0;
  opacity: 0.7;
}

.line {
  width: 40%;
}

.line1 {
  width: 30%;
}

.line2 {
  width: 20%;
}



.form-group {
  margin-bottom: 15px;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  background: transparent;
  color: #fff; 
  font-size: 12px;
}
.form-group select option{
  color: #000;
}

.form-group input[type="number"] {

  color: #fff;
}

.form-group input[type="number"]::-webkit-inner-spin-button,
.form-group input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none; 
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -15px;
}

.col {
  padding: 10px 15px;
  flex: 1;
}

button {
  padding: 10px 20px;
  background-color: #9C3133;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 15px;
}

button:hover {
  background-color: #7b2628;
}
@media (max-width:1400px){
  .dream-img {
  height:48.6vh;
}
}
@media (max-width: 1280px){
  .dream-img {
  height:40.8vh;
}
}
@media (max-width: 1200px){
  .dream-img {
  height:54.8vh;
}
}
@media (max-width: 992px) {
  .text-section {
    text-align: center;
  }

  .search-form {
    width: 100%;
    padding: 15px;
  }
  .dream-img{
    display: none;
  }
  .text-section h2{
    font-size: 32px;
    font-weight: 700;
    float: left;
  }
  .line-container{
    padding-top: 20px;
  }
}
@media (max-width: 576px){
  .text-section h2{
    font-size: 16px;
    float: left;
  }
  .line-container{
    padding-top: 10px;
  }
}
</style>
