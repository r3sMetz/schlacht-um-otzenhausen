const cowsAppFrontend = (function () {
	function setup() {
		const responseContainer = document.querySelector('#user_response');
		const submitButton = document.querySelector('#cwos_submit_btn');
		const theForm = document.querySelector('#cwos_form');

		theForm.addEventListener('submit', function (e) {
			// 1. Prevent Form from Submitting and set declare formData{}
			e.preventDefault();
			let formData = {};

			Array.from(theForm.elements).forEach(element => element.name ? formData[element.name] = element.value : null);

			formData.action = 'cwosHandleForm';

			const xhr = new XMLHttpRequest();
			xhr.open('POST', defaults.ajaxurl);
			xhr.setRequestHeader('Content-Type', 'application/json');
			xhr.onload = function () {
				if (xhr.status === 200) {
					console.log("Heyy")
				}
			};
			xhr.send(JSON.stringify(formData));
		});
	}

	return setup;
})();
document.addEventListener('DOMContentLoaded', cowsAppFrontend);