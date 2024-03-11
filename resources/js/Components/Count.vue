<template>
    <section class="why-choose">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-7 p-0">
						<div class="why-choose-text pt-100 pb-70">
							<div class="section-title text-center">
								<h2>Why You Choose Jovie?</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorei.</p>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="media">
										<i class="flaticon-group align-self-center mr-3"></i>
										<div class="media-body">
											<h5 class="mt-0">Best Talented People</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="media">
										<i class="flaticon-research align-self-center mr-3"></i>
										<div class="media-body">
											<h5 class="mt-0">Easy To Find Canditate</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="media">
										<i class="flaticon-discussion align-self-center mr-3"></i>
										<div class="media-body">
											<h5 class="mt-0">Easy To Communicate</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="media">
										<i class="flaticon-recruitment align-self-center mr-3"></i>
										<div class="media-body">
											<h5 class="mt-0">Global Recruitment Option</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row counter-area">
								<div class="col-md-3 col-6">
										<div class="counter-text">
										<h2><span>{{total_jobs}}</span></h2>
										<p>Job Posted</p>
									</div>
								</div>

								<div class="col-md-3 col-6">
									<div class="counter-text">
										<h2><span>{{total_industry}}</span></h2>
										<p>Job Filed</p>
									</div>
								</div>

								<div class="col-md-3 col-6">
									<div class="counter-text">
										<h2><span>{{total_company}}</span></h2>
										<p>Company</p>
									</div>
								</div>

								<div class="col-md-3 col-6">
									<div class="counter-text">
										<h2><span>{{total_candidate}}</span></h2>
										<p>Members</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-5 p-0">
						<div class="why-choose-img">
						</div>
					</div>
				</div>
			</div>
		</section>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
const {total_jobs,total_industry,total_company,total_candidate} = usePage().props;
</script>

<style lang="scss" scoped>

</style>