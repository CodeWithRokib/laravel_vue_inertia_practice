<template>
  <div>
    <h1>Edit Contact</h1>
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
        <label>Description</label>
        <textarea v-model="form.description" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';

export default {
  props: {
    contact: Object,
  },
  data() {
    return {
      form: {
        name: this.contact.name,
        email: this.contact.email,
        subject: this.contact.subject,
        description: this.contact.description,
      }
    }
  },
  methods: {
    submit() {
      Inertia.put(route('contacts.update', this.contact.id), this.form);
    }
  }
}
</script>
