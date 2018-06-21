const textAnimation = (function(){
	function setup(){
		$('.tlt').textillate({
			selector: '.tlt-texts',
			minDisplayTime : 4000,
			loop: true,
			in: {
				effect: 'fadeInLeft',

			},
			out:{
				effect: 'fadeOutRight',
				reverse: true
			}

		});
	}

	return {
		setup : setup
	}
})();