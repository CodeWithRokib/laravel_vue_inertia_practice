<template>
    <div>
        <h1>Create Question</h1>
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
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';

export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                subject: '',
                question: '',
            }
        }
    },
   methods: {
    submit() {
        Inertia.post(route('questions.store'), this.form, {
            onError: (errors) => {
                console.log(errors);
            }
        });
    }
}
}
</script>
