<template>
    <Layout>
        <section class="page-title title-bg13">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Sign Up</h2>
                    <ul>
                        <li>
                            <Link href="/">Home</Link>
                        </li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Sign up Section Start -->
        <div class="signup-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                        <form class="signup-form" @submit.prevent="submit">
                            <div class="form-group">
                                <label>Enter Your Name</label>
                                <input type="text" id="name" v-model="form.name" class="form-control" placeholder="Enter Your Name" required>
                            </div>

                            <div class="form-group">
                                <label>Enter Email</label>
                                <input type="email" id="email" v-model="form.email" class="form-control" placeholder="Enter Your Email" required>
                            </div>

                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" id="password" v-model="form.password" class="form-control" placeholder="Enter Your Password" required>
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" id="password_confirmation" v-model="form.password_confirmation" class="form-control" placeholder="Enter Your Password" required>
                            </div>

                            <div class="signup-btn text-center">
                                <button type="submit">Sign Up</button>
                            </div>

                            <div class="other-signup text-center">
                                <span>Or sign up with</span>
                                <ul>
                                    <li><a href="#"><i class='bx bxl-google'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>

                            <div class="create-btn text-center">
                                <p>Have an Account?<Link :href="route('candidate_login_form')">Sign In<i class='bx bx-chevrons-right bx-fade-right'></i></Link></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up Section End -->

        <!-- Subscribe Section Start -->
        <section class="subscribe-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Get New Job Notifications</h2>
                            <p>Subscribe & get all related jobs notification</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL"
                                required autocomplete="off">

                            <button class="default-btn sub-btn" type="submit">
                                Subscribe
                            </button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Section End -->
    </Layout>
</template>

<script setup>
import Layout from '../Layouts/Layout.vue'
import { Link, useForm, usePage } from '@inertiajs/vue3';
const { candidate } = usePage().props;
const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("candidate.register.create"));
};
</script>

<style lang="scss" scoped></style>