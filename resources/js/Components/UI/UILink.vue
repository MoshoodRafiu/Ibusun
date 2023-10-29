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

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

withDefaults(
  defineProps<{
    traditional?: boolean;
    color?: string;
    href?: string;
    label?: string;
    method?: string;
  }>(),
  {
    traditional: false,
    color: "yellow",
    href: "#",
    label: "",
    method: "GET",
  }
);
</script>
