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
   import Count from '../Components/Count.vue'
   import Banner from '../Components/Banner.vue'
</script>
<template>
	<Layout>
		<!-- Banner Section Start -->
		<Banner></Banner>
		<!-- Category Section Start -->
		<Category></Category>
		<!-- Jobs Section Start -->
		<Job></Job>
		<!-- Way To Use Section Start -->
		<Count></Count>
		<!-- Companies Section Start -->
		<Company></Company>
		<!-- Job Info Section Start -->
		<Info></Info>
		<!-- Pricing Section Start -->
		<Pricing></Pricing>
		<!-- Candidate Section Start -->
		<Candidates></Candidates>
		<!-- Testimonial Section Start -->
		<Testimonial></Testimonial>
		<!-- Blog Section Start -->
		<!-- <Blogs></Blogs> -->
	</Layout>
</template>



<style lang="scss" scoped>

</style>





