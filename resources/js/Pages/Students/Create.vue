<script setup>
import { useForm, usePage } from '@inertiajs/vue3';

const {students} = usePage().props;
// const props = defineProps({
//     blogs: {
//         type: Object,
//         default: () => ({}),
//     }, 
// });

const form = useForm({
    name: "",
    phone: "",
    email: "",
});

const submit = () => {
    form.post(route("students.store"));
};
</script>

<template>
    <div class="container m-10">
    <form @submit.prevent="submit">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" v-model="form.name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" v-model="form.phone" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" v-model="form.email" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</template>

<style lang="scss" scoped>

</style>