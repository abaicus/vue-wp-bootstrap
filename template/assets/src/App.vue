/* jshint esversion: 6 */
<template>
	<div>
		<h1>\{{this.strings.title}}</h1>
		<p>\{{this.strings.description}}</p>
	</div>
</template>

<script>
  /* global {{abbreviate name}} */
  export default {
    data () {
      return {
        strings: {{abbreviate name}}.strings
      }
    },
    name: 'App.vue'
  }
</script>

<style scoped>

</style>
