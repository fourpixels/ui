<template>
  <kirby-field v-bind="$props">
    <kirby-time-input v-bind="$props" />
  </kirby-field>
</template>

<script>

import Props from '../TextField/TextField.props.js';

export default {
  mixins: [Props],
  props: {
    label: {
      default: 'Time'
    },
    name: {
      default: 'time'
    },
    icon: {
      default: 'time'
    }
  }
}

</script>
