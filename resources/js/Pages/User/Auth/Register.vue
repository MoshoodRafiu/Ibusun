<template>
  <RegistrationCard primary-color="orange" login-uri="/login" register-uri="/register"/>
</template>

<script setup>
import RegistrationCard from "@/Components/Auth/RegistrationCard.vue";
</script>

<script>
import AppLayout from "@/Layouts/AuthLayout.vue";
export default {
  layout: AppLayout,
};
</script>
