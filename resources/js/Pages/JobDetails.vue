<template>
    <Layout>
        <!-- Page Title Start -->
        <section class="page-title title-bg6">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Job Details</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Job Details</li>
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

        <!-- Job Details Section Start -->
        <section class="job-details ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="job-details-text">
                                    <div class="job-card">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="company-logo">
                                                    <img :src="'/uploads/' + CompanyImage(jobs.company_id)" alt="logo">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="job-info">
                                                    <h3>{{ jobs.title }}</h3>
                                                    <ul>
                                                        <li>
                                                            <i class='bx bx-location-plus'></i>
                                                            {{ LocationName(jobs.location_id) }}
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-filter-alt'></i>
                                                            {{ jobs.position }}
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-briefcase'></i>
                                                            {{ CategoryName(jobs.category_id) }}
                                                        </li>
                                                    </ul>

                                                    <span>
                                                        <i class='bx bx-paper-plane'></i>
                                                        Apply Before: {{ myDate(jobs.end_date) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="details-text">
                                        <div v-html="jobs.description"></div>
                                    </div>


                                    <div class="details-text">
                                        <h3>Job Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Company : </span></td>
                                                            <td>{{ CompanyName(jobs.company_id) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Location :</span></td>
                                                            <td>{{ LocationName(jobs.location_id) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Job Type :</span></td>
                                                            <td>{{ CategoryName(jobs.category_id) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Email :</span></td>
                                                            <td><a
                                                                    href="mailto:hello@company.com">{{ CompanyEmail(jobs.company_id) }}</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Experince :</span></td>
                                                            <td>2 Years</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Language :</span></td>
                                                            <td>English</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Salary :</span></td>
                                                            <td>${{ jobs.salary }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Website :</span></td>
                                                            <td><a href="#">www.company.com</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="theme-btn">
                                        <button type="button" class="default-btn" data-bs-toggle="modal" data-bs-target="#myModal">Apply Now</button>
                                        <Modal></Modal>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="job-sidebar">
                            <h3>Posted By</h3>
                            <div class="posted-by">
                                <img :src="'/uploads/' + CompanyImage(jobs.company_id)" alt="client image" width="70"
                                    height="70">
                                <h4>John Doe</h4>
                                <span>CEO of {{ CompanyName(jobs.company_id) }}</span>
                            </div>
                        </div>

                        <div class="job-sidebar">
                            <h3>Location</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27991517034!2d-74.25987556253516!3d40.697670063539654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1588772651198!5m2!1sen!2sbd"
                                frameborder="0"></iframe>
                        </div>

                        <div class="job-sidebar">
                            <h3>Keywords</h3>
                            <ul>
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">Data Sceince</a>
                                </li>
                                <li>
                                    <a href="#">SEO</a>
                                </li>
                                <li>
                                    <a href="#">Content Writter</a>
                                </li>
                                <li>
                                    <a href="#">Finance</a>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Education</a>
                                </li>
                                <li>
                                    <a href="#">Graphics</a>
                                </li>
                                <li>
                                    <a href="#">Video</a>
                                </li>
                            </ul>
                        </div>

                        <div class="job-sidebar social-share">
                            <h3>Share In</h3>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Job Details Section End -->

        <!-- Job Section End -->
        <section class="job-style-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Jobs You May Be Interested In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.html">
                                            <img src="/assets/img/company-logo/1.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Web Designer, Graphic Designer, UI/UX Designer </a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                Graphics Designer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $35000-$38000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Wellesley Rd, London
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch'></i>
                                                9 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.html">
                                            <img src="/assets/img/company-logo/2.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Website Developer & Software Developer</a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                Web Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $3000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Garden Road, UK
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch'></i>
                                                5 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.html">
                                            <img src="/assets/img/company-logo/3.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Application Developer & Web Designer</a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                App Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $3000-$4000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                State City, USA
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch'></i>
                                                8 days ago
                                            </li>
                                        </ul>

                                        <span>Part-Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.html">
                                            <img src="/assets/img/company-logo/4.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">Frontend & Backend Developer</a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                Web Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $5000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Drive Post NY 676
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch'></i>
                                                1 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.html">
                                            <img src="/assets/img/company-logo/5.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="#">IT Department & Manager</a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                Manager
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $35000-$38000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Wellesley Rd, London
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch'></i>
                                                7 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="#" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Job Section End -->
    </Layout>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import { format } from 'date-fns';
import Layout from '../Layouts/Layout.vue'
import Modal from '../Components/Modal.vue'
const { jobs, categories, locations, industries, companies, comDetails, application, user, candidate, token } = usePage().props
const CategoryName = (id) => {
    const category = categories.find(cat => cat.id === id);
    return category ? category.name : 'Unknown Category';
};
const LocationName = (id) => {
    const location = locations.find(loc => loc.id === id);
    return location ? location.name : 'Unknown Location';
};
const IndustryName = (id) => {
    const industry = industries.find(ind => ind.id === id);
    return industry ? industry.name : 'Unknown Industry';
};
const CompanyName = (id) => {
    const company = companies.find(com => com.id === id);
    return company ? company.name : 'Unknown Company';
};
const CompanyEmail = (id) => {
    const company = companies.find(com => com.id === id);
    return company ? company.email : 'Unknown Company';
};
const CompanyImage = (id) => {
    const company = comDetails.find(com => com.id === id);
    return company ? company.image : 'Unknown Company';
};
const myDate = (createdAt) => {
    const formattedDay = format(new Date(createdAt), 'dd-MM-yyyy');
    return formattedDay;
};
</script>

<style lang="scss" scoped></style>