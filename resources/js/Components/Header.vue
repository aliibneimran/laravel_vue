<template>
    <div>
        <!-- Pre-loader Start -->
        <!-- <div class="loader-content">
            <div class="d-table">
                <div class="d-table-cell">
					<div class="sk-circle">
						<div class="sk-circle1 sk-child"></div>
						<div class="sk-circle2 sk-child"></div>
						<div class="sk-circle3 sk-child"></div>
						<div class="sk-circle4 sk-child"></div>
						<div class="sk-circle5 sk-child"></div>
						<div class="sk-circle6 sk-child"></div>
						<div class="sk-circle7 sk-child"></div>
						<div class="sk-circle8 sk-child"></div>
						<div class="sk-circle9 sk-child"></div>
						<div class="sk-circle10 sk-child"></div>
						<div class="sk-circle11 sk-child"></div>
						<div class="sk-circle12 sk-child"></div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Pre-loader End -->
        <div class="navbar-area">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<Link href="/" class="logo">
					<img src="/assets/img/logo.png" alt="logo">
				</Link>
			</div>
		
			<!-- Menu For Desktop Device -->
			<div class="main-nav">
				<div class="container">
					<nav v-if="user" class="navbar navbar-expand-lg navbar-light">
						<Link class="navbar-brand" href="/">
							<img src="/assets/img/logo.png" alt="logo">
						</Link>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item"><Link href="/" class="nav-link active">Home</Link></li>                                            
								<li class="nav-item"><Link :href="route('all_job')" class="nav-link">Jobs</Link></li>                
								<li class="nav-item"><Link :href="route('about_us')" class="nav-link">About</Link></li>                
								<li class="nav-item"><Link :href="route('contact_us')" class="nav-link">Contact</Link></li>  

								<li class="nav-item"><Link :href="route('job_details')" class="nav-link">JobDetail</Link></li>                               
								<li class="nav-item"><Link :href="route('candidate_profile')" class="nav-link">Profile</Link></li>                               
								            
							</ul>

							<div class="other-option">
								<Link :href="route('candidate_logout')" class="signin-btn">Logout</Link>
							</div>
						</div>
					</nav>
					<nav v-else class="navbar navbar-expand-lg navbar-light">
						<Link class="navbar-brand" href="/">
							<img src="/assets/img/logo.png" alt="logo">
						</Link>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item"><Link href="/" class="nav-link active">Home</Link></li>                                            
								<li class="nav-item"><Link href="job" class="nav-link">Jobs</Link></li>                
								<li class="nav-item"><Link href="about" class="nav-link">About</Link></li>                
								<li class="nav-item"><Link href="contact" class="nav-link">Contact</Link></li>  

								<li class="nav-item"><Link href="job-details" class="nav-link">JobDetail</Link></li>                               				            
							</ul>
							<div class="other-option">
								<Link :href="route('candidate_register')" class="signup-btn">Sign Up</Link>
								<Link :href="route('candidate_login_form')" class="signin-btn">Sign In</Link>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
    </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
const { user } = usePage().props;
console.log(user)
</script>

<style lang="scss" scoped>

</style>