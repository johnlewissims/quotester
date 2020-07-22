<template>
  <section class="content">
    <div class="container-fluid">
        <div class="form-group">
            <label>Select</label>
            <select>
                <option value="">Select Category</option>
                <option v-for="category in getAllCategory" :value="category">
                    {{ category }}
                </option>
            </select>
        </div>
    </div>
  </section>
</template>

<script>
export default {
      mounted() {
        this.$store.dispatch("allCategoryFromDatabase")
      },
      computed: {
        getAllCategory(){
            return this.$store.getters.getCategoryFormGetters
        }
      },

};
</script>

<style scoped>
</style> 
