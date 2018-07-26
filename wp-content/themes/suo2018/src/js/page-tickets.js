const pageTickets = (function(){
	/** Private **/
	const options = {
		initial_time: cwoPoly.poly_includes(document.referrer,defaults.home_url) ? 10 : 5,
		current_time: null,
		secondInterface: $('#ticket_secs'),
		currentInterval: null,
		shopLink: 'https://www.eventim-light.com/de/shop/5ade289e082b0004ef9a0274/de/index',
		eventTim: 'https://www.eventim.de/tickets.html?affiliate=EVE&doc=artistPages%2Ftickets&fun=artist&action=tickets&erid=2198273&includeOnlybookable=true&x10=1&x11=Schlacht%20um%20Otze'
	};

	function abort(){
		// Break Current Interval
		if(options.currentInterval)
			window.clearInterval(options.currentInterval);


		let lastPage = cwoPoly.poly_includes(document.referrer,defaults.home_url) ? document.referrer : defaults.home_url;

		fadeOverlay.show(true,()=>{window.location.href=lastPage});
	}

	function goToPage(direct=false) {
		window.clearInterval(options.currentInterval);
		fadeOverlay.show(true, () => {
			window.location.href = direct ? options.eventTim : options.shopLink
		});
	}

	/** Public **/
	function setup(){
		// Initialize Seconds + Set CurrentTime
		options.current_time = options.initial_time;
		options.secondInterface.html(options.initial_time);

		// Click Events
		$('#abort_ticket').on('click',abort);
		$('#catchUp').on('click',goToPage);
		$('#catchUpDirect').on('click',()=>goToPage(true));

		// Start Interval
		options.currentInterval = setInterval(()=>{
			// Show Seconds - Decrement Seconds
			options.current_time--;
			options.secondInterface.html(options.current_time);

			// On End go To Ticketing
			if(options.current_time <= 0)
				goToPage()

		},1000)
	}

	return {
		setup:setup
	}
})();