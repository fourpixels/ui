<template>
  <kirby-field v-bind="$props">
    <input
      :id="name"
      :name="name"
      :type="type"
      :value="value"
      :placeholder="placeholder"
      :required="required"
      :readonly="readonly"
      :autocomplete="autocomplete"
      :autofocus="autofocus"
      @input="$emit('input', $event.target.value)">
  </kirby-field>
</template>

<script>

import Props from './TextField.props.js';

export default {
  mixins: [Props]
}

</script>
