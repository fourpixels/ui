<template>
  <kirby-text-block
    class="kirby-quote-block"
    @append="$emit('append', $event)"
    @remove="$emit('remove')"
    @input="$emit('input', $event)"
    :multiline="false"
    :value="value" />
</template>

<script>

export default {
  props: ['value']
}

</script>

<style lang="scss">

.kirby-quote-block .kirby-fancy-input {
  padding: 0 1.5rem;
  border-left: 5px solid $color-background;
  margin-bottom: 1.5rem;
  font-family: serif;
  font-style: italic;
  font-size: 1.5em;
}

</style>
