import Vue from 'vue'

import CheckboxInput from './CheckboxInput/CheckboxInput.vue'
import DateInput from './DateInput/DateInput.vue'
import SelectInput from './SelectInput/SelectInput.vue'
import TextareaInput from './TextareaInput/TextareaInput.vue'
import TagsInput from './TagsInput/TagsInput.vue'
import NumberInput from './NumberInput/NumberInput.vue'
import TimeInput from './TimeInput/TimeInput.vue'
import FancyInput from './FancyInput/FancyInput.vue'

Vue.component('kirby-checkbox-input', CheckboxInput);
Vue.component('kirby-date-input', DateInput);
Vue.component('kirby-select-input', SelectInput);
Vue.component('kirby-textarea-input', TextareaInput);
Vue.component('kirby-tags-input', TagsInput);
Vue.component('kirby-number-input', NumberInput);
Vue.component('kirby-time-input', TimeInput);
Vue.component('kirby-fancy-input', FancyInput);
