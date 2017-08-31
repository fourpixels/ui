<template>
  <div class="kirby-time-input">
    <div class="kirby-time-input-selects">
      <kirby-select-input @input="setHour" ref="hour" :value="hour" :options="hours"></kirby-select-input>
      <kirby-select-input @input="setMinute" :value="minute" :options="minuteOptions"></kirby-select-input>

      <input type="checkbox" :id="_uid + '-use12Format'" v-model="use12Format">
      <label :for="_uid + '-use12Format'">12 hours format</label>

      <label :for="_uid + '-useAM'" v-if="use12Format">
        <input type="checkbox" :id="_uid + '-useAM'" v-model="useAM">
        AM
      </label>
    </div>
  </div>
</template>

<script>

export default {
  props: {
    'value': String,
    'minutes': {
      type: [Number, Function],
      /*default: () => function() { // not sure if this is needed but it might be helpful to be able to set a function with custom props?
        return [{
          value: 3,
          text: '03 minutes'
        }, {
          value: 5,
          text: '05 minutes'
        }, {
          value: 16,
          text: '16 minutes'
        }, {
          value: 29,
          text: '29 minutes'
        }];
      },*/
      default: 5
    }
  },
  data() {
    return {
      use12Format: false,
      useAM: false,
      open: false,
      hour: '00',
      minute: '00'
    }
  },
  mounted() { // FIXME: is this needed?
    /*document.addEventListener('click', () => {
      this.open = false;
    });*/
  },
  methods: {
    focus() { // FIXME: is this needed?

    },
    select(date) { // FIXME: is this needed?
    },

    setHour(hour) {
      this.hour = hour;
      // this.$emit('input', this.date()); // TODO: construct proper Time Object (or String?) - ask Bastian
    },
    setMinute(minute) {
      this.minute = minute;
      // this.$emit('input', this.date()); // TODO: construct proper Time Object (or String?) - ask Bastian
    }
  },
  computed: {
    hours() {
      let start = this.use12Format ? 1 : 0,
          max = this.use12Format ? 12 : 23,
          options = [];

      for (var i = start; i <= max; i++)
        options.push({
          value: i,
          text: i < 10 ? '0' + i : i
        });

      return options;
    },
    minuteOptions() {
      let options = [];

      if (typeof this.minutes === 'function') {
        options = this.minutes();
      } else { // it is a number
        let skip = this.minutes || 1; // not less than 1 :)
        for (let i = 0; i < 60; i += skip)
        options.push({
          value: i,
          text: i < 10 ? '0' + i : i // TODO: do we need this? maybe add it as prop?
        });
      }

      return options;
    }
  }
}

</script>

<style lang="scss">

// FIXME: this is basically copy-pasted from the DateInput (except :after selector, which acts like separator) - merge them in a shared place
// TODO: move separator to js so it can be dynamically set? Will help in internationalizations

.kirby-time-input {
  position: relative;
  background: $color-white;
  display: flex;
}
.kirby-time-input-selects {
  display: flex;
  align-items: center;
  flex-grow: 1;

  .kirby-select-input {
    padding: .65rem 0 .65rem;
    min-height: 2.5rem;

    &:first-child:after {
      content: ':';
      padding: 0 .1rem;
    }

    &:first-child {
      padding-left: .5rem;
    }

  }
}

</style>
