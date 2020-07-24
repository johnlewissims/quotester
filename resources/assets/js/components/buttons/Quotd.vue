<template>
  <button class="quotd btn btn-info" v-on:click="getQuoteOfTheDay">Quote of the Day</button>
</template>

<script>
export default {
  methods: {
    getQuoteOfTheDay() {
      this.$store.dispatch("getQuoteOfTheDay")
    }
  }
};
</script>

<style scoped>
</style> 
