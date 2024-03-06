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
				<Link :href="route('home')" class="logo">
					<img src="assets/img/logo.png" alt="logo">
				</Link>
			</div>
		
			<!-- Menu For Desktop Device -->
			<div class="main-nav">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
						<Link class="navbar-brand" :href="route('home')">
							<img src="assets/img/logo.png" alt="logo">
						</Link>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item"><Link :href="route('home')" class="nav-link active">Home</Link></li>                                            
								<li class="nav-item"><Link :href="route('about.index')" class="nav-link">About</Link></li>                
								<li class="nav-item"><Link :href="route('contact.index')" class="nav-link">Contact</Link></li>                
								<li class="nav-item"><Link :href="route('students.index')" class="nav-link">Student</Link></li>                
								            
							</ul>

							<div class="other-option">
								<Link :href="route('signin.index')" class="signup-btn">Sign Up</Link>
								<Link :href="route('signup.index')" class="signin-btn">Sign In</Link>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style lang="scss" scoped>

</style>