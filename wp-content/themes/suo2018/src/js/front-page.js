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

		setBodyHeight();

		const orientationRef = device.isMobile ? 'orientationchange' : 'resize';
		$(window).on(orientationRef,setBodyHeight);
	}

	function setBodyHeight(){
		$('body').css('height',device.height());
	}

	return {
		setup : setup
	}
})();

window.onpageshow = fadeOverlay.pageShow;