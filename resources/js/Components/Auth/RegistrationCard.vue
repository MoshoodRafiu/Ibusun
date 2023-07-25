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
        <div class="grid md:grid-cols-2 gap-x-2">
          <Input
            v-model="form.first_name"
            :error="form.errors.first_name"
            label="First Name"
            placeholder="First Name"
          />
          <Input
            class="md:mt-0 mt-5"
            v-model="form.last_name"
            :error="form.errors.last_name"
            label="Last Name"
            placeholder="Last Name"
          />
        </div>

        <Input
          v-if="seller"
          v-model="form.business_name"
          :error="form.errors.business_name"
          label="Business Name (Optional)"
          placeholder="Business Name"
        />

        <Input
          v-model="form.email"
          :error="form.errors.email"
          type="email"
          label="Email Address"
          placeholder="Email Address"
        />

        <Input
          v-model="form.password"
          :error="form.errors.password"
          type="password"
          label="Password"
          placeholder="Password"
        />

        <Input
          v-model="form.password_confirmation"
          type="password"
          label="Confirm Password"
          placeholder="Confirm Password"
        />

        <Button
          block
          @click="submit"
          :disabled="form.processing"
          :loading="form.processing"
          :background="primaryColor"
          label="Register"
        />

        <div class="text-center text-sm">
          Already have an account?
          <UILink
            label="Login"
            :color="primaryColor"
            :href="loginUri"
          />
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
  title: {
    type: String,
    default: "Create your free account",
  },
  registerUri: {
    type: String,
    default: "",
  },
  loginUri: {
    type: String,
    required: true,
  },
  seller: {
    type: Boolean,
    default: false,
  },
  primaryColor: {
    type: String,
    default: "yellow",
  },
});

const form = useForm({
  first_name: null,
  last_name: null,
  business_name: null,
  email: null,
  password: null,
  password_confirmation: null,
  type: (props.seller ? 'seller' : 'user')
});

const submit = () => {
  form.post(props.registerUri);
};
</script>
