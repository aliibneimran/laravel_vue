<script setup>
import { Link, useForm, usePage } from '@inertiajs/vue3';
import Layout from '../../Layouts/Layout.vue'

const {students} = usePage().props;
// const props = defineProps({
//     students: {
//         type: Object,
//         default: () => ({}),
//     },
// });
console.log(students);

const form = useForm({});

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route("students.destroy", id));
    }
}
</script>


<template>
<Layout>
    <div class="container mt-4">
        <Link :href="route('students.create')" class="btn btn-primary">Add Student</Link>
    <table class="table table-dark mt-4">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(student, no) in students" :key="student.id">
            <th scope="row">{{ no + 1 }}</th>
            <td>{{ student.name }}</td>
            <td>{{ student.phone }}</td>
            <td>{{ student.email }}</td>
            <td>
                <Link :href="route('students.edit', student.id)" class="mr-2"><i class="bi bi-pencil-square"></i></Link>
                <button @click="destroy(student.id)"><i class="bi bi-trash"></i></button>
            </td>
            </tr>
        </tbody>
    </table>
    </div>
</Layout>
</template>

<style>

</style>

