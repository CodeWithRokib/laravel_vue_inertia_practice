<template>
    <div>
        <h1>Questions</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Question</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="question in questions" :key="question.id">
                    <td>{{ question.name }}</td>
                    <td>{{ question.email }}</td>
                    <td>{{ question.subject }}</td>
                    <td>{{ question.question }}</td>
                    <td>
                        <inertia-link :href="route('questions.edit', question.id)" class="btn btn-sm btn-primary">Edit</inertia-link>
                        <button @click="deleteQuestion(question.id)" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';

export default {
    props: {
        questions: Array,
    },
    methods: {
        deleteQuestion(id) {
            if (confirm("Are you sure you want to delete this question?")) {
                Inertia.delete(route('questions.destroy', id));
            }
        }
    }
}
</script>
