<template>
  <div class="mb-10">
    <h1 class="text-5xl font-bold text-gray-800">
      Ibu<span class="text-yellow-500">sun.</span>
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
            <Checkbox label="Remeber Me" checked />
            <div class="text-sm">
              <UILink label="Forgot password?" href="/password/reset" />
            </div>
          </div>
        </div>

        <Button block background="yellow" label="Sign in" />

        <div v-if="allowRegister" class="text-center text-sm">
          Don't have an account?
          <UILink label="Register here" href="/vendor/register" />
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
});
</script>

<style lang="scss" scoped></style>
