<template>
    <div class="card new_form border-0 bg-white d-none d-md-block mb-4">
        <div class="card-header bg-white">Register your interest</div>
        <div class="card-body">
            <form @submit.prevent="submitForm">
      
              <div class="form-group">
                <input v-model="form.name" type="text" id="name" class="form-control" placeholder="Name" />
                <span v-if="errors.name" class="text-danger">{{ errors.name[0] }}</span>
              </div>
      
              <div class="form-group">
                <input v-model="form.email" type="email" id="email" class="form-control" placeholder="Email *" />
                <span v-if="errors.email" class="text-danger">{{ errors.email[0] }}</span>
              </div>
      
              <div class="form-group">
                <select v-model="form.type" id="type" class="form-control">
                  <option value="individual">Individual</option>
                  <option value="agent">Agent</option>
                  <option value="investor">Investor</option>
                </select>
                <span v-if="errors.type" class="text-danger">{{ errors.type[0] }}</span>
              </div>
      
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <input v-model="form.country_code" type="text" id="country_code" class="form-control" placeholder="Country Code" />
                    <span v-if="errors.country_code" class="text-danger">{{ errors.country_code[0] }}</span>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <input v-model="form.phone" type="text" id="phone" class="form-control" placeholder="Contact No *" />
                    <span v-if="errors.phone" class="text-danger">{{ errors.phone[0] }}</span>
                  </div>
                </div>
              </div>
      
              <div class="form-group">
                <textarea v-model="form.message" id="message" rows="5" class="form-control" placeholder="Message"></textarea>
                <span v-if="errors.message" class="text-danger">{{ errors.message[0] }}</span>
              </div>
      
              <div class="submit-form">
                <button id="submit" type="submit" class="btn btn-block btn-danger">Send Message</button>
                <p v-if="responseMessage" class="text-success mt-2">{{ responseMessage }}</p>
              </div>
      
            </form>
          </div>
    </div>
</template>
<script>
    import axios from 'axios';

    export default {
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

                    // Show success message
                    this.responseMessage = response.data.message;

                    // Reset form fields
                    this.form = {
                        name: '',
                        email: '',
                        type: 'individual',
                        country_code: '',
                        phone: '',
                        message: '',
                    };

                    // Clear response message after 5 seconds
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