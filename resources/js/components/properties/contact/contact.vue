<template>
    <div class="background-container">
        <Header />
        <div class="container text-center section-title-1">
            <h2>Contact</h2>
        </div>
      </div>
    <section id="contact" class="contact section mb-5 mt-5">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div class="mb-3">
                                <h3 class="mb-3" style="font-size: 18px;"><i class="fa-solid fa-location-dot mr-3"></i>Location</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div class="mb-3">
                                <h3 class="mb-3" style="font-size: 18px;"><i class="fa-solid fa-phone-volume mr-3"></i>Call Us 7/24</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div class="mb-3">
                                <h3 class="mb-3" style="font-size: 18px;"><i class="fa-solid fa-envelope mr-3" style="font-size: 18px;"></i>Email Us</h3>
                                <p ><a href="#" style="text-decoration: none; color: #000;">contact@example.com</a></p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                            frameborder="0" style="border:0; width: 100%; height: 470px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form @submit.prevent="submitForm" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="name-field" class="label pb-2">Your Name</label>
                                <input v-model="form.name" type="text" id="name" class="form-control" />
                                <span v-if="errors.name">{{ errors.name }}</span>
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="label pb-2">Your Email</label>
                                <input v-model="form.email" type="email" id="email" class="form-control" />
                                <span v-if="errors.email">{{ errors.email }}</span>
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="label pb-2">I am:</label>
                                <select v-model="form.type" id="type" class="form-control">
                                    <option value="individual">Individual</option>
                                    <option value="agent">Agent</option>
                                    <option value="investor">Investor</option>
                                </select>
                                <span v-if="errors.type">{{ errors.type }}</span>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="message-field" class="label pb-2">Country Code:</label>
                                <input v-model="form.country_code" type="text" id="country_code" class="form-control"/>
                            <span v-if="errors.country_code">{{ errors.country_code }}</span>
                            </div>
                            <div class="col-md-6">
                                <label for="message-field" class="label pb-2">Phone</label>
                                <input v-model="form.phone" type="text" id="phone" class="form-control"/>
                                <span v-if="errors.phone">{{ errors.phone }}</span>
                            </div>
                            <div class="col-md-12">
                                <label for="message-field" class="label pb-2">Message:</label>
                                <textarea v-model="form.message" id="message" rows="10" class="form-control"></textarea>
                            <span v-if="errors.message">{{ errors.message }}</span>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Send Message</button>
                                <p v-if="responseMessage">{{ responseMessage }}</p>
                            </div>

                        </div>
                    </form>
                    
                </div>
                <!-- End Contact Form -->

            </div>

        </div>

    </section>
    
   <Footer/>
</template>

<script>
import axios from 'axios';
import Footer from '../home/Footer.vue';
import Header from '../home/Header.vue';

export default {
    name: 'HomePropertiesIndex',
    components: {
        Header,
        Footer,
    },
    data() {
        return {
            form: {
                name: '',
                email: '',
                type: 'individual',
                country_code: '',
                phone: '',
                message: '',
            },
            errors: {},
            responseMessage: '',
        };
    },
    methods: {
        async submitForm() {
            try {
                this.errors = {};
                this.responseMessage = '';

                const response = await axios.post('/api/contact', this.form);

                // Display the response message
                this.responseMessage = response.data.message;

                // Clear the form fields
                this.form = {
                    name: '',
                    email: '',
                    type: 'individual',
                    country_code: '',
                    phone: '',
                    message: '',
                };

                // Clear the response message after 5 seconds
                setTimeout(() => {
                    this.responseMessage = '';
                }, 5000);

            } catch (error) {
                if (error.response && error.response.status === 422) {
                    this.errors = error.response.data.errors;
                } else {
                    this.responseMessage = 'An error occurred while sending your message.';
                }
            }
        },
    },
};
</script>



<style scoped>
    .section-title-1{
        padding-top: 200px;
        padding-bottom: 150px;
        color: #fff;
    }
    .background-container {
    background-image: url('@/assets/img/last-banner.jpg'); 
    background-size: cover;
    background-position: center;
    height: 60vh; 
    position: relative;
}

header {
    position: relative;
    z-index: 2; 
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
    .section-title {
        text-align: center;
        padding-bottom: 60px;
        position: relative;
    }

    .section-title h2 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        padding-bottom: 20px;
        position: relative;
        color: #000;
    }

    .section-title h2:after {
        content: "";
        position: absolute;
        display: block;
        width: 50px;
        height: 3px;
        background: #9C3133;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    .section-title p {
        margin-bottom: 0;
        color: #000;
    }

    .contact .info-wrap {
        background-color: var(--surface-color);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .contact .php-email-form {
        background-color: var(--surface-color);
        height: 100%;
        padding: 30px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .contact .info-item h3 {
        padding: 0;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #000;
    }

    .contact .info-item p {
        padding: 0;
        margin-bottom: 0;
        font-size: 14px;
        color: #000;
    }

    .label {
        color: #000;
        font-size: 14px;
    }
    .contact .php-email-form button[type=submit] {
    color: #fff;
    background-color: #9C3133;
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 50px;
}
</style>