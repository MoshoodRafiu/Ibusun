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
      <form class="space-y-5" action="#" @submit.prevent="submit" method="POST">
        <Input
          v-model="form.email"
          :error="form.errors.email"
          type="email"
          label="Email Address"
          placeholder="Email Address"
        />

        <Input
          v-model="form.password"
          type="password"
          label="Password"
          placeholder="Password"
        />

        <div>
          <div class="flex items-center justify-between">
            <Checkbox label="Remeber Me" :color="primaryColor" checked />
            <div class="text-sm">
              <UILink
                label="Forgot password?"
                :color="primaryColor"
                href="/password/reset"
              />
            </div>
          </div>
        </div>

        <Button
          block
          @click="submit"
          :disabled="form.processing"
          :loading="form.processing"
          :background="primaryColor"
          label="Sign in"
        />

        <div v-if="registerUri" class="text-center text-sm">
          Don't have an account?
          <UILink
            label="Register here"
            :color="primaryColor"
            :href="registerUri"
          />
        </div>
      </form>
    </div>
  </div>
</template>

<script setup lang="ts">
import { LoginForm } from "@/types/forms/auth.d";
import { InertiaForm, useForm } from "@inertiajs/vue3";

const props = withDefaults(
  defineProps<{
    title?: string;
    loginUri: string;
    registerUri?: string;
    primaryColor?: string;
  }>(),
  {
    primaryColor: "yellow",
    title: "Login to your account",
  }
);

const form: InertiaForm<LoginForm> = useForm({
  email: "",
  password: "",
});

const submit = () => {
  form.post(props.loginUri);
};
</script>
