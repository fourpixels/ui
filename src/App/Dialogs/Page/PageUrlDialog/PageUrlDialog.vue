<template>
  <kirby-dialog ref="dialog" headline="Change URL" state="positive" button="Change" @submit="submit">
    <kirby-fieldset :fields="[
      {
        name: 'slug',
        label: 'URL appendix',
        type: 'text',
        required: true,
        icon: 'chain',
        help: '/' + page.id
      },
    ]" :values="{slug: page.slug}" @input="sluggify($event.slug)" />
  </kirby-dialog>
</template>

<script>

import DialogMixin from 'Ui/Dialog/Dialog.mixin.js';
import PageQuery from 'App/Api/PageQuery.js';

export default {
  mixins: [DialogMixin],
  data () {
    return {
      page: {
        id: null,
        slug: null,
        parent: {
          id: null
        }
      }
    };
  },
  methods: {
    sluggify (slug) {
      if (this.page.parent) {
        this.page.id = this.page.parent.id + '/' + slug;
      } else {
        this.page.id = slug;
      }
    },
    open (id) {
      PageQuery(id).then(function(page) {
        this.page = page;
        this.sluggify(this.page.slug);
        this.$refs.dialog.open();
      }.bind(this));
    },
    submit () {
      this.$store.dispatch('success', 'The URL has been changed to: /' + this.page.id);
    }
  }
}

</script>
