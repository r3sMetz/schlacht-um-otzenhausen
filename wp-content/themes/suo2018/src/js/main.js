const main = (() => {
	function setup(){
		console.log("main.js");

		// FadeOverlay
		fadeOverlay.setClickEvents();

		// FrontPage
		if($('.fp-content')) frontPage.setup();

		// Reframe Iframes
		$('iframe').reframe();

		// Page Tickets
		if($('.page-tickets-content').length) pageTickets.setup();
	}

	return {
		setup: setup
	}
})();
$(document).ready(main.setup);