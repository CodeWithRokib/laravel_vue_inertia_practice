<template>
    <div>
        <h1>Edit Question</h1>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label>Name</label>
                <input v-model="form.name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input v-model="form.email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input v-model="form.subject" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Question</label>
                <textarea v-model="form.question" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';

export default {
    props: {
        question: Object,
    },
    data() {
        return {
            form: {
                name: this.question.name,
                email: this.question.email,
                subject: this.question.subject,
                question: this.question.question,
            }
        }
    },
    methods: {
        submit() {
            Inertia.put(route('questions.update', this.question.id), this.form);
        }
    }
}
</script>
