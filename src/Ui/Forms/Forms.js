import Vue from 'vue'

import Autocomplete from './Autocomplete/Autocomplete.vue'
import Calendar from './Calendar/Calendar.vue'
import Field from './Field/Field.vue'
import Fieldset from './Fieldset/Fieldset.vue'
import Input from './Input/Input.vue'
import Blocks from './Blocks/Blocks.vue'

import './Inputs/Inputs.js';
import './Fields/Fields.js';

Vue.component('kirby-autocomplete', Autocomplete);
Vue.component('kirby-calendar', Calendar);
Vue.component('kirby-field', Field);
Vue.component('kirby-fieldset', Fieldset);
Vue.component('kirby-input', Input);
Vue.component('kirby-blocks', Blocks);

