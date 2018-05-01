const main = (() => {
	function setup(){
		console.log("main.js");

		// FadeOverlay
		fadeOverlay.setClickEvents();

		// FrontPage
		if($('.fp-content')) frontPage.setup();

		// Reframe Iframes
		$('iframe').reframe();
	}

	return {
		setup: setup
	}
})();
$(document).ready(main.setup);