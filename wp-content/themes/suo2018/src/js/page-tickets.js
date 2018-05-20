const pageTickets = (function(){
	/** Private **/
	const options = {
		initial_time: 5,
		current_time: null,
		secondInterface: $('#ticket_secs'),
		currentInterval: null,
		shopLink: 'https://www.eventim-light.com/de/shop/5ade289e082b0004ef9a0274/de/index'
	};

	function abort(){
		// Break Current Interval
		if(options.currentInterval)
			window.clearInterval(options.currentInterval);


		const lastPage = 'https://suo-festival.de/';
		fadeOverlay.show(true,()=>{window.location.href=lastPage});
	}

	/** Public **/
	function setup(){
		// Initialize Seconds + Set CurrentTime
		options.current_time = options.initial_time;
		options.secondInterface.html(options.initial_time);

		// Click Event
		$('#abort_ticket').on('click',abort);

		// Start Interval
		options.currentInterval = setInterval(()=>{
			// Show Seconds - Decrement Seconds
			options.current_time--;
			options.secondInterface.html(options.current_time);

			// On End go To Ticketing
			if(options.current_time <= 0){
				window.clearInterval(options.currentInterval);
				fadeOverlay.show(true,()=>{window.location.href=options.shopLink});
			}

		},1000)
	}

	return {
		setup:setup
	}
})();