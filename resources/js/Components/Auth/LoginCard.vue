<template>
  <div class="mb-10">
    <h1 class="text-5xl font-bold text-gray-800">
      Ibu<span :class="`text-${primaryColor}-600`">sun.</span>
    </h1>
  </div>
  <div class="sm:mx-auto sm:w-full sm:max-w-md bg-white p-10 rounded-lg">
    <div class="w-full">
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight">
        {{ title }}
      </h2>
    </div>

    <div class="mt-10 w-full">
      <form class="space-y-6" action="#" method="POST">
        <Input type="email" label="Email Address" placeholder="Email Address" />

        <Input label="Password" placeholder="Password" />

        <div>
          <div class="flex items-center justify-between">
            <Checkbox label="Remeber Me" :color="primaryColor" checked />
            <div class="text-sm">
              <UILink label="Forgot password?" :color="primaryColor" href="/password/reset" />
            </div>
          </div>
        </div>

        <Button block :background="primaryColor" label="Sign in" />

        <div v-if="allowRegister" class="text-center text-sm">
          Don't have an account?
          <UILink label="Register here" :color="primaryColor" href="/vendor/register" />
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
defineProps({
  title: {
    type: String,
    default: "Login to your account",
  },
  allowRegister: {
    type: Boolean,
    default: false,
  },
  primaryColor: {
    type: String,
    default: 'yellow'
  }
});
</script>

<style lang="scss" scoped></style>
