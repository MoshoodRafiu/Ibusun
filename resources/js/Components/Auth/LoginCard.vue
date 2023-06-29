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
        <Input v-model="form.email" :error="form.errors.email" type="email" label="Email Address" placeholder="Email Address" />

        <Input v-model="form.password" type="password" label="Password" placeholder="Password" />

        <div>
          <div class="flex items-center justify-between">
            <Checkbox label="Remeber Me" :color="primaryColor" checked />
            <div class="text-sm">
              <UILink label="Forgot password?" :color="primaryColor" href="/password/reset" />
            </div>
          </div>
        </div>

        <Button block @click="submit" :disabled="form.processing" :loading="form.processing" :background="primaryColor" label="Sign in" />

        <div v-if="registerUri" class="text-center text-sm">
          Don't have an account?
          <UILink label="Register here" :color="primaryColor" :href="registerUri" />
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
  title: {
    type: String,
    default: "Login to your account",
  },
  registerUri: {
    type: String,
    default: '',
  },
  loginUri: {
    type: String,
    required: true,
  },
  primaryColor: {
    type: String,
    default: 'yellow'
  }
});

const form = useForm({
  email: null,
  password: null,
})

const submit = () => {
  form.post(props.loginUri);
}
</script>
