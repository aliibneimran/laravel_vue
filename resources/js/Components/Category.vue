<template>
    <section class="categories-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Choose Your Category</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
				</div>

				<div class="row">

					<div v-for="category in categories" :key="category.id" class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.html" >
							<div class="category-card">
								<i class='flaticon-accounting'></i>
								<h3>{{category.name}}</h3>
								<p>{{ TotalJob(category.id)}} Jobs</p>
							</div>
						</a>
					</div>

				</div>
			</div>
		</section>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { format } from 'date-fns';
const {categories,jobs} = usePage().props;

const TotalJob = (id) => {
    const totalJobs = jobs.filter(item => item.category_id === id).length;
     return totalJobs;
};


// console.log(category.job_count)
</script>

<style lang="scss" scoped>

</style>