<template>
  <LoginCard title="Login to your seller account" allow-register/>
</template>

<script setup>
import LoginCard from '@/Components/Auth/LoginCard.vue';
</script>

<style lang="scss" scoped>

</style>

<script>
import AppLayout from '@/Layouts/AuthLayout.vue';
export default {
  layout: AppLayout
}
</script>