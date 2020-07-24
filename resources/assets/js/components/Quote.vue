<template>
  <div class="wrapper">
    <div class="quote">
      <h3>{{selectedQuote.text}}</h3>
      <h5>{{selectedQuote.author}}</h5>
    </div>
    <RandomButton></RandomButton>
    <QuotdButton></QuotdButton>
  </div>
</template>

<script>
import RandomButton from './buttons/Random';
import QuotdButton from './buttons/Quotd';

export default {
  components: {
    RandomButton, QuotdButton
  },
  mounted() {
    this.$store.dispatch("getQuoteOfTheDay")
  },
  computed: {
    selectedQuote(){
      return this.$store.getters.getSelectedQuote
    }
  },
};
</script>

<style scoped>
</style> 
