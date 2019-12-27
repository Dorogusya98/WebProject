<template>
	<article class="article">
		<h1>{{model.title}}</h1>
		<div v-html="model.description"></div>
	</article>
</template>

<script>
	import HTTP from "../components/http";

	export default {
		name: "Article",
		data() {
			return {
				model: {}
			};
		},
		created() {
			var id = this.$route.params.id;
			HTTP.get('/watch/' + id)
				.then(response => (this.model = response.data));
		}
	}
</script>
