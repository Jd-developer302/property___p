<template>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card o-hidden border-0 shadow-lg my-5" style="max-width: 600px;">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form @submit.prevent="register">
                        <div class="row gx-3">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="name">Name</label>
                                    <input class="form-control form-control-solid" v-model="name"
                                        placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="email">Email</label>
                                    <input class="form-control form-control-solid" v-model="email" type="email"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="password">Password</label>
                                    <input class="form-control form-control-solid" v-model="password"
                                        type="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="password_confirmation">Confirm Password</label>
                                    <input class="form-control form-control-solid"
                                        v-model="password_confirmation" type="password"
                                        placeholder="Confirm Password" />
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
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
        const name = ref('');
        const email = ref('');
        const password = ref('');
        const password_confirmation = ref('');

        const register = () => {
            axios.post('/api/register', {
                name: name.value,
                email: email.value,
                password: password.value,
                password_confirmation: password_confirmation.value,
            })
                .then(response => {
                    console.log('Registration successful:', response.data);
                    router.push('/login');
                })
                .catch(error => {
                    console.log('Registration error:', error.response.data);
                });
        };

        return { name, email, password, password_confirmation, register };
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
