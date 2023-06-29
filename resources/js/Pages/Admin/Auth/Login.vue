<template>
  <LoginCard title="Administrator Login" primary-color="sky" login-uri="/admin/login" />
</template>

<script setup>
import LoginCard from "@/Components/Auth/LoginCard.vue";
</script>

<script>
import AppLayout from "@/Layouts/AuthLayout.vue";
export default {
  layout: AppLayout,
};
</script>
