<template>
	<panel-item :field="field">
		<div slot="value">

			<img class="external-image-detail" :style="{ maxHeight, maxWidth, borderRadius }" v-if="url" :src="url">

			<span v-else>&mdash;</span>
		</div>
	</panel-item>
</template>

<script>

	export default {
		props: ['resource', 'resourceName', 'resourceId', 'field'],

		computed: {
			url() {
				if (this.field.prefix) {
					return `${this.field.prefix}${this.field.value}`;
				}

				return this.field.value;
			},

			maxWidth() {
				return this.field.maxWidth ? this.field.maxWidth + 'px' : 'auto';
			},

			maxHeight() {
				return this.field.maxHeight ? this.field.maxHeight + 'px' : 'auto';
			},

			borderRadius() {
				return this.field.borderRadius ? this.field.borderRadius + 'px' : '0';
			},
		},
	}
</script>
