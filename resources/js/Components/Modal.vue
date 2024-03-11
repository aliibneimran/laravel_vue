<template>
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="job-post-from" @submit.prevent="submit">
                        <h2>For Application</h2>
                        <input type="text" name="job_id" v-model="form.jobs.id" :placeholder="jobs.id" />
                        <input type="text" name="company_id" v-model="jobs.company_id" :placeholder="jobs.company_id"/>
                        <input type="text" name="candidate_id" v-model="candidate.id" :placeholder="candidate.id"/>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name"  v-model="form.name" class="form-control" :placeholder="candidate.name"  required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" v-model="form.email" class="form-control" :placeholder="candidate.email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone"  v-model="form.phone" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="bio"  v-model="form.bio" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload CV</label>
                            <input type="file" ref="cv" name="cv" @change="onFileChange" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="post-btn">
                                Apply Job
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- Additional buttons or actions can be added here -->
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useForm, usePage } from '@inertiajs/vue3';
const{jobs,companies,application,user,candidate} = usePage().props
const form = useForm({
    job_id: '',
    company_id: '',
    candidate_id: '',
    name: '',
    email: '',
    phone: '',
    bio: '',
    cv: '',
    jobs: jobs,
});

const submit = () => {
    form.post(route("apply.job"));
};
const onFileChange = (e) => {
  form.cv = e.target.files[0];
};
</script>

<style lang="scss" scoped></style>