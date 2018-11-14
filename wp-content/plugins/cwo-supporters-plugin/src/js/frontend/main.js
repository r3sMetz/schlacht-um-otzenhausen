const cowsAppFrontend = (function () {
	function setup() {
		const responseContainer = document.querySelector('#user_response');
		const submitButton = document.querySelector('#cwos_submit_btn');
		const theForm = document.querySelector('#cwos_form');

		theForm.addEventListener('submit', function (e) {
			// 1. Prevent Form from Submitting and set declare formData{}
			e.preventDefault();
			let formData={};

			Array.from(theForm.elements).forEach(element => element.name ? formData[element.name] = element.value : null);

			fetch(defaults.ajaxurl, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				action: 'cwosHandleForm',
				body: JSON.stringify(formData)
			})
				.then(response => response.json())
				.then(response => {
					console.log(response);
					responseContainer.innerHTML = response.message;

					if (response.success) {
						responseContainer.classList.add('text-success');
						submitButton.classList.add('d-none');
					}
					else
						responseContainer.classList.add('text-danger');

					responseContainer.classList.remove('d-none');

					// 3. Clear Form on success
					if (response.success)
						theForm[0].reset();
				})
				.catch(error => console.log(error));
		})
	}

	return setup;
})();
document.addEventListener('DOMContentLoaded', cowsAppFrontend);