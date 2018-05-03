const frontPage = (() => {
	function setup(){
		$('.fp-content-square').on('click',function(){
			const self = $(this);
			if(!self.hasClass('off')){
				fadeOverlay.show(true,()=>{
					window.location.href = self.data('link');
				});
			}
		});

		const orientationRef = device.isMobile ? 'orientationchange' : 'resize';
		$(window).on(orientationRef,()=>{
			$(body).css('height',device.height());
		})
	}

	return {
		setup : setup
	}
})();

window.onpageshow = fadeOverlay.pageShow;