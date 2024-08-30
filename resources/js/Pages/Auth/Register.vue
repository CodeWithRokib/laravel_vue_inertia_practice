<template>
    <div>
        <h2>Register</h2>
        <form @submit.prevent="submit">
            <div>
                <label for="name">Name</label>
                <input v-model="form.name" type="text" id="name" required />
            </div>
            <div>
                <label for="email">Email</label>
                <input v-model="form.email" type="email" id="email" required />
            </div>
            <div>
                <label for="password">Password</label>
                <input
                    v-model="form.password"
                    type="password"
                    id="password"
                    required
                />
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input
                    v-model="form.password_confirmation"
                    type="password"
                    id="password_confirmation"
                    required
                />
            </div>
            <div v-if="errors.email">
                <p>{{ errors.email }}</p>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    data() {
        return {
            form: {
                name: "",
                email: "",
                password: "",
                password_confirmation: "",
            },
            errors: {},
        };
    },
    methods: {
        submit() {
            Inertia.post("/register", this.form).catch((err) => {
                if (err.response.status === 422) {
                    this.errors = err.response.data.errors;
                }
            });
        },
    },
};
</script>
