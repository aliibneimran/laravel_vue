<template>
	<section class="job-section pb-70">
		<div class="container">
			<div class="section-title text-center">
				<h2>Jobs You May Be Interested In</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
			</div>

			<div class="row">
				<div v-for="job in jobs" :key="job.id" class="col-sm-6">
					<div class="job-card">
						<div class="row align-items-center">
							<div class="col-lg-3">
								<div class="thumb-img">
									<a href="job-details.html">
										<img :src="'/uploads/' + CompanyImage(job.company_id)" alt="company logo">
									</a>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="job-info">
									<h3>
										<Link :href="route('job.details', { id: job.id })">{{job.title}}</Link>
									</h3>
									<ul>
										<li>Via <a href="#">{{CompanyName(job.company_id)}}</a></li>
										<li>
											<i class='bx bx-location-plus'></i>
											{{LocationName(job.location_id)}}
										</li>
										<li>
											<i class='bx bx-filter-alt'></i>
											{{job.position}}
										</li>
										<li>
											<i class='bx bx-briefcase'></i>
											{{CategoryName(job.category_id)}}
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="job-save">
									<span>{{CategoryName(job.category_id)}}</span>
									<a href="#">
										<i class='bx bx-heart'></i>
									</a>
									<p>
										<i class='bx bx-stopwatch'></i>
										{{myDate(job.created_at)}}
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { format } from 'date-fns';
const {jobs,industries,locations,categories,companies,comDetails} = usePage().props;
console.log(jobs)
	const CategoryName = (id) => {
        const category = categories.find(cat => cat.id === id);
        return category ? category.name : 'Unknown Category';
    };
    const LocationName = (id) => {
        const location = locations.find(loc => loc.id === id);
        return location ? location.name : 'Unknown Location';
    };
    const CompanyName = (id) => {
        const company = companies.find(com => com.id === id);
        return company ? company.name : 'Unknown Company';
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