<template>
  <div v-if="options.length" class="kirby-select-input">
    <select ref="select" :id="id" :required="required" :value="value" @input="input($event.target.value)" @focus="$emit('focus')" @blur="$emit('blur')" :autofocus="autofocus">
      <option v-for="option in options" :value="option.value" :disabled="option.disabled">{{ option.text }}</option>
    </select>
    <label :for="id">{{ label }}</label>
  </div>
</template>

<script>

export default {
  props: {
    id: {},
    required: {},
    autofocus: {},
    options: {
      default: function() {
        return [];
      }
    },
    value: {}
  },
  data: function() {

    var label = this.text(this.value);

    if(label == false && this.options[0]) {
      label = this.options[0].text;
    }

    return {
      label: label
    }

  },
  watch: {
    value: function(value) {
      this.label = this.text(value);
    }
  },
  methods: {
    focus: function() {
      this.$refs.select.focus();
    },
    blur: function() {
      this.$refs.select.blur();
    },
    text: function(value) {
      var text = '';
      this.options.forEach(function(option) {
        if(option.value == value) {
          text = option.text;
        }
      }.bind(this));
      return text;
    },
    input: function(value) {
      this.$emit('input', value);
    }
  }
}

</script>

<style lang="scss">

.kirby-select-input {
  position: relative;
  cursor: pointer;
}
.kirby-select-input select {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  opacity: 0;
  width: 100%;
  font: inherit;
  cursor: pointer;
}
.kirby-select-input label {
  cursor: pointer;
}
.kirby-select-input select:focus + label {
  color: $color-focus;
}

</style>
