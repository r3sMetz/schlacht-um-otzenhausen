const frontPage = (() => {
	function setup(){
		$('.fp-content-square').on('click',(event)=>{
			const self = $(event.currentTarget);
			if(!self.hasClass('off')){
				fadeOverlay.show(true,()=>{
					window.location.href = `${defaults.base_url}/${self.data('link')}`;
				});
			}
		})
	}

	return {
		setup : setup
	}
})();

window.onpageshow = fadeOverlay.pageShow;