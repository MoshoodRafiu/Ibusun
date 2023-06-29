<template>
  <div>
    <label
      v-if="label"
      :for="componentId"
      class="block text-sm font-medium leading-6"
    >
      {{ label }}
    </label>
    <div class="mt-2">
      <input
        :id="componentId"
        :type="type"
        :placeholder="placeholder"
        :class="`block w-full rounded-md border-0 px-3 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6`"
      />
    </div>
  </div>
</template>

<script setup>
import { uniqueID } from '@/Composables/HasUniqueID.js';

defineProps({
  type: {
    type: String,
    default: "text",
  },
  label: {
    type: String,
    default: "",
  },
  placeholder: {
    type: String,
    default: "",
  },
});

const componentId = uniqueID;
</script>
