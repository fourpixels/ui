<template>
  <div class="kirby-box">
    <slot />
  </div>
</template>

<style lang="scss">

.kirby-box {
  background: rgba(0,0,0, .075);
  border-radius: $border-radius;
  padding: .75rem 1rem;
}
.kirby-box .kirby-button {
  border: 1px solid transparent;
  line-height: 1;
  display: block;
  width: 100%;
  text-align: left;
}

</style>
