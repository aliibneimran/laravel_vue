<template>
    <div class="counter-section pt-100 pb-70">
        <div class="container">
            <div class="row counter-area">
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <i class="flaticon-resume"></i>
                        <h2><span>{{total_jobs}}</span></h2>
                        <p>Job Posted</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <i class="flaticon-recruitment"></i>
                        <h2><span>{{total_industry}}</span></h2>
                        <p>Job Filed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <i class="flaticon-portfolio"></i>
                        <h2><span>{{total_company}}</span></h2>
                        <p>Company</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <i class="flaticon-employee"></i>
                        <h2><span>{{total_candidate}}</span></h2>
                        <p>Members</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
const {total_jobs,total_industry,total_company,total_candidate} = usePage().props;
</script>

<style lang="scss" scoped></style>