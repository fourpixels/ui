<template>
  <kirby-text-field v-bind="$props"></kirby-text-field>
</template>

<script>

import Props from '../TextField/TextField.props.js';

export default {
  mixins: [Props],
  props: {
    label: {
      default: 'URL'
    },
    icon: {
      default: 'chain'
    },
    name: {
      default: 'url'
    },
    placeholder: {
      default: 'https://'
    },
    type: {
      default: 'url'
    }
  }
}

</script>
