<template>
  <div class="flex items-center">
    <input
      :checked="checked"
      :id="componentId"
      type="checkbox"
      value=""
      :class="`w-4 h-4 bg-${color}-100 accent-${color}-600 border-${color}-300 rounded focus:ring-${color}-500 focus:ring-2`"
    />
    <label v-if="label" :for="componentId" class="ml-2 text-sm font-medium">{{
      label
    }}</label>
  </div>
</template>

<script setup lang="ts">
import { uniqueID } from "@/Composables/HasUniqueID";

withDefaults(
  defineProps<{
    color?: string;
    checked?: boolean;
    label?: string;
  }>(),
  {
    color: "yellow",
    checked: false,
  }
);

const componentId: string = uniqueID();
</script>
