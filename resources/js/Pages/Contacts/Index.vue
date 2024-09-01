<template>
  <div>
    <h1>Contacts List</h1>
    <inertia-link href="{{ route('contacts.create') }}" class="btn btn-primary">Create New Contact</inertia-link>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="contact in contacts" :key="contact.id">
          <td>{{ contact.name }}</td>
          <td>{{ contact.email }}</td>
          <td>{{ contact.subject }}</td>
          <td>{{ contact.description }}</td>
          <td>
            <inertia-link :href="route('contacts.edit', contact.id)" class="btn btn-warning">Edit</inertia-link>
            <button @click="deleteContact(contact.id)" class="btn btn-danger">Delete</button>
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
    contacts: Array,
  },
  methods: {
    deleteContact(id) {
      if (confirm("Are you sure you want to delete this contact?")) {
        Inertia.delete(route('contacts.destroy', id));
      }
    }
  }
}
</script>
