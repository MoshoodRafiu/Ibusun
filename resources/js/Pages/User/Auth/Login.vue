<template>
  <LoginCard
    title="Login to your account"
    register-uri="/register"
    login-uri="/login"
    primary-color="orange"
  />
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
