<template>
    <div>
        <h1>Create Contact</h1>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label>Name</label>
                <input v-model="form.name" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input v-model="form.email" type="email" class="form-control" />
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input
                    v-model="form.subject"
                    type="text"
                    class="form-control"
                />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea
                    v-model="form.description"
                    class="form-control"
                ></textarea>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import AppLayout from '@Layouts/AppLayout.vue';

export default {
   layout: AppLayout,
    data() {
        return {
            form: {
                name: "",
                email: "",
                subject: "",
                description: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post(route("contacts.store"), this.form);
        },
    },
};
</script>
