<template>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card o-hidden border-0 shadow-lg my-5" style="max-width: 600px;">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Please Login</h1>
                    </div>
                    <form @submit.prevent="login">
                        <div class="row gx-3">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="email">Email</label>
                                    <input class="form-control form-control-solid" v-model="email" type="email"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="password">Password</label>
                                    <input class="form-control form-control-solid" v-model="password"
                                        type="password" placeholder="Password" />
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { useRouter } from 'vue-router';
import { ref } from 'vue';

export default {
    setup() {
        const router = useRouter();
        const email = ref('');
        const password = ref('');

        const login = () => {
    axios.post('/api/login', {
        email: email.value,
        password: password.value,
    })
    .then(response => {
        console.log('Login successful:', response.data);
        // Save token to localStorage or a state management store if necessary
        localStorage.setItem('user-token', response.data.token); // Store token if needed
        router.push('/admin/home'); // Redirect to the admin home page
    })
    .catch(error => {
        console.log('Login error:', error.response.data);
        // Handle login error, e.g., show a notification or error message
    });
};

        return { email, password, login };
    }
};
</script>

<style scoped>
.bg-gradient-primary {
    background-color: #4e73df;
    background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
    background-size: cover;
}

.form-control,
.datatable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control-solid {
    background-color: #eef2f8;
    border-color: #eef2f8;
}

.text-gray-600 {
    color: #4b5563;
}

.min-vh-100 {
    min-height: 100vh;
}
</style>
