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
        :value="modelValue"
        @input="
          $emit('update:modelValue', ($event.target as HTMLInputElement).value)
        "
        :id="componentId"
        :type="type"
        :placeholder="placeholder"
        :class="`block w-full rounded-md border-0 px-3 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6`"
      />
    </div>
    <div class="text-xs mt-1 text-red-500">{{ error }}</div>
  </div>
</template>

<script setup lang="ts">
import { uniqueID } from "@/Composables/HasUniqueID";

withDefaults(
  defineProps<{
    type?: string;
    label?: string;
    placeholder?: string;
    modelValue?: string;
    error?: string;
  }>(),
  {
    type: "text",
  }
);

defineEmits<{
  (e: "update:modelValue", value: string): void;
}>();

const componentId: string = uniqueID();
</script>
