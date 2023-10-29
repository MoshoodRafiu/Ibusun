<template>
  <LoginCard
    title="Login to your seller account"
    register-uri="/seller/register"
    login-uri="/seller/login"
  />
</template>

<script setup lang="ts">
import LoginCard from "@/Components/Auth/LoginCard.vue";
</script>

<script lang="ts">
import AppLayout from "@/Layouts/AuthLayout.vue";
export default {
  layout: AppLayout,
};
</script>
