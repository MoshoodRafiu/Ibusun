<template>
  <button
    :type="type"
    :class="`flex ${block ? 'w-full p-3 rounded-md' : 'px-4 py-1.5 rounded'} justify-center bg-${background}-600 text-sm font-semibold leading-6 text-${color} shadow-sm hover:bg-${background}-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-${background}-600`"
  >
    <span v-if="label" v-text="label" />
    <slot />
  </button>
</template>

<script setup>
  defineProps({
    type: {
      type: String,
      default: 'button'
    },
    background: {
      type: String,
      default: 'yellow'
    },
    color: {
      type: String,
      default: 'white'
    },
    block: {
      type: Boolean,
      default: false
    },
    label: {
      type: String,
      default: ''
    },
  })
</script>
