<template>
    <div v-if="user" class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="success" v-if="application">
                        <h1>Apply Successful</h1>
                    </div>
                    <form v-else class="job-post-from" @submit.prevent="submit">
                        <h2>For Application</h2>
                        <input type="hidden" id="job_id" v-model="form.jobs_id"/>
                        <input type="hidden" id="company_id" v-model="form.company_id"/>
                        <input type="hidden" id="candidate_id" v-model="candidate_id"/>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name"  v-model="form.name" class="form-control" :placeholder="candidate.name" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" v-model="form.email" class="form-control" :placeholder="candidate.email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" id="phone"  v-model="form.contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="bio"  v-model="form.bio" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload CV</label>
                            <input type="file" ref="cv" id="cv" @change="onFileChange" class="form-control">
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
import {useForm, usePage,} from '@inertiajs/vue3';
const{jobs,companies,application,user,candidate,canDetails} = usePage().props

const form = useForm({
    job_id: jobs.id,
    company_id: jobs.company_id,
    candidate_id: candidate.id,
    name: candidate.name,
    email: candidate.email,
    contact: '',
    bio: '',
    cv: '',
});

const submit = () => {
    form.post(route("apply.job"));
};

const onFileChange = (e) => {
  form.cv = e.target.files[0];
};


console.log()
</script>

<style lang="scss" scoped></style>