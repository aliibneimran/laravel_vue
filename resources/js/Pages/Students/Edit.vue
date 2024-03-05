<script setup>
import { useForm, usePage } from '@inertiajs/vue3';

const {student} = usePage().props;

const form = useForm({
    id: student.id,
    name: student.name,
    phone: student.phone,
    email: student.email,
});


const submit = () => {
    form.put(route("students.update", student.id));
};
console.log(student)
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