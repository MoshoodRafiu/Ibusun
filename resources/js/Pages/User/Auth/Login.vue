<template>
  <LoginCard
    register-uri="/register"
    login-uri="/login"
    primary-color="orange"
  />
</template>

<script lang="ts" setup>
import LoginCard from "@/Components/Auth/LoginCard.vue";
</script>

<script lang="ts">
import AppLayout from "@/Layouts/AuthLayout.vue";
export default {
  layout: AppLayout,
};
</script>
