<template>
  <LoginCard
    title="Login to your seller account"
    register-uri="seller/register"
    login-uri="/seller/login"
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
