<script setup>
   import Layout from '../Layouts/Layout.vue'
//    import Jobs from '../Components/HomeJob.vue'
   import Job from '../Components/Job.vue'
   import Candidates from '../Components/Candidate.vue'
   import Pricing from '../Components/Pricing.vue'
   import Testimonial from '../Components/Testimonial.vue'
   import Blogs from '../Components/Blog.vue'
   import Company from '../Components/Company.vue'
   import Info from '../Components/JobInfo.vue'
   import Category from '../Components/Category.vue'
</script>
<template>
	<Layout>
		<!-- Banner Section Start -->
		<div class="banner-section">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container"> 
						<div class="banner-content text-center">
							<p>Find Jobs, Employment & Career Opportunities</p>
							<h1>Drop Resume & Get Your Desire Job!</h1>

							<form class="banner-form">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Keyword:</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job Title">
										</div>
									</div>
				
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail2">Location:</label>
											<input type="text" class="form-control" id="exampleInputEmail2" placeholder="City or State">
										</div>
									</div>
				
									<div class="col-md-4">
										<button type="submit" class="find-btn">
											Find A Job
											<i class='bx bx-search'></i>
										</button>
									</div>
								</div>
							</form>

							<ul class="keyword">
								<li>Trending Keywords:</li>
								<li><a href="#">Automotive,</a></li>
								<li><a href="#">Education,</a></li>
								<li><a href="#">Health</a></li>
								<li>and</li>
								<li><a href="#">Care Engineering</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Category Section Start -->
		<Category></Category>
		<!-- Jobs Section Start -->
		<Job></Job>
		<!-- Way To Use Section Start -->
		<section class="use-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Easiest Way To Use</h2>
				</div>

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="use-text">
							<span>1</span>
							<i class='flaticon-website'></i>
							<h3>Browse Job</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
						</div>
					</div>

					<div class="col-md-4 col-sm-6">
						<div class="use-text">
							<span>2</span>
							<i class='flaticon-recruitment'></i>
							<h3>Find Your Vaccancy</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
						<div class="use-text">
							<span>3</span>
							<i class='flaticon-login'></i>
							<h3>Submit Resume</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Companies Section Start -->
		<Company></Company>
		<!-- Why Choose Section Start -->
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
										<h2><span>127</span></h2>
										<p>Job Posted</p>
									</div>
								</div>

								<div class="col-md-3 col-6">
									<div class="counter-text">
										<h2><span>137</span></h2>
										<p>Job Filed</p>
									</div>
								</div>

								<div class="col-md-3 col-6">
									<div class="counter-text">
										<h2><span>180</span></h2>
										<p>Company</p>
									</div>
								</div>

								<div class="col-md-3 col-6">
									<div class="counter-text">
										<h2><span>144</span></h2>
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
		<!-- Why Choose Section End -->

		<!-- Job Info Section Start -->
		<Info></Info>
		<!-- Job Info Section End -->

		<!-- Pricing Section Start -->
		<Pricing></Pricing>
		<!-- Candidate Section Start -->
		<Candidates></Candidates>
		<!-- Testimonial Section Start -->
		<Testimonial></Testimonial>
		<!-- Blog Section Start -->
		<Blogs></Blogs>
	</Layout>
</template>



<style lang="scss" scoped>

</style>





