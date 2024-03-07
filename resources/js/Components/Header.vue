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
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<Link class="navbar-brand" href="/">
					<img src="/assets/img/logo.png" alt="logo">
					</Link>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
					<div class="container">
						<nav v-if="user" class="navbar navbar-expand-lg navbar-light">
							<Link class="navbar-brand" href="/">
							<img src="/assets/img/logo.png" alt="logo">
							</Link>
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<Link href="/" class="nav-link active">Home</Link>
									</li>
									<li class="nav-item">
										<Link :href="route('all_job')" class="nav-link">Jobs</Link>
									</li>
									<li class="nav-item">
										<Link :href="route('about_us')" class="nav-link">About</Link>
									</li>
									<li class="nav-item">
										<Link :href="route('contact_us')" class="nav-link">Contact</Link>
									</li>
									<li class="nav-item">
										<Link :href="route('candidate_profile')" class="nav-link">Profile</Link>
									</li>
									<li class="nav-item">
										<Link :href="route('candidate_logout')" class="nav-link">Logout</Link>
									</li>

								</ul>
							</div>
						</nav>
						<nav v-else class="navbar navbar-expand-lg navbar-light">
							<Link class="navbar-brand" href="/">
							<img src="/assets/img/logo.png" alt="logo">
							</Link>
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<Link href="/" class="nav-link active">Home</Link>
									</li>
									<li class="nav-item">
										<Link href="job" class="nav-link">Jobs</Link>
									</li>
									<li class="nav-item">
										<Link href="about" class="nav-link">About</Link>
									</li>
									<li class="nav-item">
										<Link href="contact" class="nav-link">Contact</Link>
									</li>
									<li class="nav-item"><a :href="route('company_login_form')" class="nav-link">For Company</a></li>
									<li class="nav-item">
										<Link :href="route('candidate_register')" class="nav-link">Sign Up</Link>
									</li>
									<li class="nav-item">
										<Link :href="route('candidate_login_form')" class="nav-link">Sign In</Link>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					</div>
				</nav>
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
								<li class="nav-item">
									<Link href="/" class="nav-link active">Home</Link>
								</li>
								<li class="nav-item">
									<Link :href="route('all_job')" class="nav-link">Jobs</Link>
								</li>
								<li class="nav-item">
									<Link :href="route('about_us')" class="nav-link">About</Link>
								</li>
								<li class="nav-item">
									<Link :href="route('contact_us')" class="nav-link">Contact</Link>
								</li>
								<li class="nav-item">
									<Link :href="route('candidate_profile')" class="nav-link">Profile</Link>
								</li>

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
								<li class="nav-item">
									<Link href="/" class="nav-link active">Home</Link>
								</li>
								<li class="nav-item">
									<Link href="job" class="nav-link">Jobs</Link>
								</li>
								<li class="nav-item">
									<Link href="about" class="nav-link">About</Link>
								</li>
								<li class="nav-item">
									<Link href="contact" class="nav-link">Contact</Link>
								</li>
								<li class="nav-item"><a :href="route('company_login_form')" class="nav-link">For
										Company</a></li>
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

<style lang="scss" scoped></style>