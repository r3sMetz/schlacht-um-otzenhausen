const main = (() => {
	function setup(){
		console.log("main.js");

		// FadeOverlay
		fadeOverlay.setClickEvents();

		// Navbar
		if(document.querySelector('.navbar')) navbar.setup();

		// FrontPage
		if(document.querySelector('.fp-content')) frontPage.setup();

		// Reframe Iframes
		reframe('iframe');

		// Page Tickets
		if(document.querySelector('.page-tickets-content')) pageTickets.setup();

		// Text Animation
		//if($('.tlt').length) textAnimation.setup();
	}

	return {
		setup: setup
	}
})();
document.addEventListener('DOMContentLoaded',main.setup);

window.onpageshow = fadeOverlay.pageShow;