<template>
    <Layout>
        <!-- Page Title Start -->
        <section class="page-title title-bg12">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Sign In</h2>
                    <ul>
                        <li>
                            <Link href="/">Home</Link>
                        </li>
                        <li>Sign In</li>
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

        <!-- Sign In Section Start -->
        <div class="signin-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                        <form class="signin-form" @submit.prevent="submit">
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input type="email" name="email" v-model="form.email" class="form-control" placeholder="Enter Your Email" required>
                            </div>

                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="password" v-model="form.password" class="form-control" placeholder="Enter Your Password" required>
                            </div>

                            <div class="signin-btn text-center">
                                <button type="submit">Sign In</button>
                            </div>

                            <div class="other-signin text-center">
                                <span>Or sign in with</span>
                                <ul>
                                    <li><a href="#"><i class='bx bxl-google'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>

                            <div class="create-btn text-center">
                                <p>Not have an account?
                                    <Link :href="route('candidate_register')">
                                    Create an account
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                    </Link>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In Section End -->

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
    email: "",
    password: "",
});

const submit = () => {
    form.post(route("candidate_login"));
};
</script>

<style lang="scss" scoped></style>