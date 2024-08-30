<template>
    <div>
        <h2>Login</h2>
        <form @submit.prevent="submit">
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
            <div v-if="errors.email">
                <p>{{ errors.email }}</p>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    data() {
        return {
            form: {
                email: "",
                password: "",
            },
            errors: {},
        };
    },
    methods: {
        submit() {
            Inertia.post("/login", this.form).catch((err) => {
                if (err.response.status === 422) {
                    this.errors = err.response.data.errors;
                }
            });
        },
    },
};
</script>
