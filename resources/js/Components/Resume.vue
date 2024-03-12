<template>
    <Layout>
         <!-- Page Title Start -->
         <section class="page-title title-bg10">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Account</h2>
                    <ul>
                        <li>
                            <Link href="/">Home</Link>
                        </li>
                        <li>Account</li>
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

        <!-- Account Area Start -->
        <section class="account-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="account-information">
                            <div class="profile-thumb">
                                <img src="/assets/img/account.jpg" alt="account holder image">
                                <h3>John Smith</h3>
                                <p>Web Developer</p>
                            </div>

                            <ul>
                                <li><a href="#" class="active"><i class='bx bx-user'></i>My Profile</a></li>
                                <li><Link :href="route('resume')"><i class='bx bxs-file-doc'></i>My Resume</Link></li>
                                <li><a href="#"><i class='bx bx-briefcase'></i>Applied Job</a></li>
                                <li><a href="#"><i class='bx bx-envelope'></i>Messages</a></li>
                                <li><a href="#"><i class='bx bx-heart'></i>Saved Jobs</a></li>
                                <li><a href="#"><i class='bx bx-lock-alt'></i>Change Password</a></li>
                                <li><a href="#"><i class='bx bx-coffee-togo'></i>Delete Account</a></li>
                                <li><a href="#"><i class='bx bx-log-out'></i>Log Out</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Area End -->
    </Layout>
</template>

<script setup>
import Layout from '../Layouts/Layout.vue'
import { Link} from '@inertiajs/vue3';
</script>

<style lang="scss" scoped>

</style>