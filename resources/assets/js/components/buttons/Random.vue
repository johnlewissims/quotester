<template>
  <button class="random btn btn-info" v-on:click="getRandomQuote">Random Quote</button>
</template>

<script>
export default {
  methods: {
    getRandomQuote() {
      this.$store.dispatch("getRandomQuote")
    }
  }
};
</script>

<style scoped>
</style> 
