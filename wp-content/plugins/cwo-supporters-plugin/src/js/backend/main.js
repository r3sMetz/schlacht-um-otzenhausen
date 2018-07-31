const cowsApp = (function () {
	function setup() {
		const cwosVue = new Vue({
			el: '#cwosVue',
			data: {
				opensAreInView: true,
				// processingSupporter: null,
				done: [],
				open: [],
			},
			methods: {
				moveSupporter: function (index, isDone, from, to, supporter) {
					from.splice(index, 1);
					supporter.done = isDone ? "true" : "false";
					to.push(supporter);
					this.sendSupportersToDB();
				},
				deleteSupporterFrom: function (index, arrayToDeleteFrom) {
					if(window.confirm('Supporter löschen?')) {
						arrayToDeleteFrom.splice(index, 1);
						this.sendSupportersToDB();
					}
				},
				sendSupportersToDB: function () {
					const data = {
						action: 'cwosSet',
						supporters: [...this.done, ...this.open]
					};
					jQuery.post(ajaxurl, data, response => {
						console.log(response);
					})
				},
			},

			created: function () {
				jQuery.post(ajaxurl, {'action': 'cwosGet'}, response => {
					this.done = response.done;
					this.open = response.open;
				})
			}
		})
	}

	return setup
})();
jQuery(document).ready(cowsApp);

