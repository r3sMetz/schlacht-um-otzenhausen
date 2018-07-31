const cowsAppFrontend = (function(){
	function setup(){
		const responseContainer = $('#user_response');
		const submitButton = $('#cwos_submit_btn');

		$('#cwos_form').on('submit',function(e){
			// 1. Prevent Form from Submitting and set Form Constant
			e.preventDefault();
			const theForm = $(this);


			// 2. Send Data
			const formData = {
				'action': 'cwosHandleForm',
				'formdata' : theForm.serializeArray()
			};
			$.post(defaults.ajaxurl, formData, response => {

				responseContainer.html(response.message);

				if(response.success) {
					responseContainer.addClass('text-success');
					submitButton.addClass('d-none');
				}
				else
					responseContainer.addClass('text-danger');

				responseContainer.removeClass('d-none');

				// 3. Clear Form on success
				if(response.success)
					theForm[0].reset();
			});
		})
	}

	return setup;
})();
document.addEventListener('DOMContentLoaded',cowsAppFrontend);