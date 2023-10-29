<template>
  <RegistrationCard
    login-uri="/seller/login"
    seller
    register-uri="/seller/register"
  />
</template>

<script setup lang="ts">
import RegistrationCard from "@/Components/Auth/RegistrationCard.vue";
</script>

<script lang="ts">
import AppLayout from "@/Layouts/AuthLayout.vue";
export default {
  layout: AppLayout,
};
</script>
