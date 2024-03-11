<template>
    <section class="company-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Companies</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
            </div>

            <div class="row">
                <div v-for="company in companies" :key="company.id" class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img :src="'/uploads/' + CompanyImage(company.id)" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>{{company.name}}</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                {{CompanyLocation(company.id)}}
                            </p>
                            <a  href="job-grid.html" class="company-btn">
                                {{ CompanyJob(company.id) }} Jobs
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
const {companies,comDetails,jobs} = usePage().props;

const CompanyLocation = (id) => {
    const location = comDetails.find(cat => cat.id === id);
     return location ? location.address : 'Unknown Address';
};
const CompanyImage = (id) => {
    const image = comDetails.find(item => item.id === id);
     return image ? image.image : 'No Image';
};
const CompanyJob = (id) => {
    const totalJobs = jobs.filter(item => item.company_id === id).length;
     return totalJobs;
};


// console.log(CompanyJob(id))
</script>

<style lang="scss" scoped></style>