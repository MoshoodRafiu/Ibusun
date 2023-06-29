<template>
  <component
    :is="traditional ? 'a' : Link"
    :class="`font-semibold text-${color}-600 hover:text-${color}-500`"
    :href="href"
    :method="method"
  >
    <span>{{ label }}</span>
  </component>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  traditional: {
    type: Boolean,
    default: false,
  },
  color: {
    type: String,
    default: "yellow",
  },
  href: {
    type: String,
    default: "#",
  },
  label: {
    type: String,
    default: "",
  },
  method: {
    type: String,
    default: "get",
  },
});
</script>
