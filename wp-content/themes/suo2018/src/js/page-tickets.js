const pageTickets = (function(){
	/** Private **/
	const options = {
		initial_time: cwoPoly.poly_includes(document.referrer,defaults.home_url) ? 10 : 5,
		current_time: null,
		secondInterface: document.querySelector('#ticket_secs'),
		currentInterval: null,
		shopLink: 'https://www.ticket-regional.de/events_info.php?eventID=159858',
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
			window.location.href = options.shopLink;
		});
	}

	/** Public **/
	function setup(){
		console.log("Setup");
		// Initialize Seconds + Set CurrentTime
		options.current_time = options.initial_time;
		options.secondInterface.innerHTML = options.initial_time;

		// Click Events
		document.getElementById('abort_ticket').addEventListener('click',abort);
		document.getElementById('catchUp').addEventListener('click',goToPage);

		// Start Interval
		options.currentInterval = setInterval(()=>{
			// Show Seconds - Decrement Seconds
			options.current_time--;
			options.secondInterface.innerHTML = options.current_time;

			// On End go To Ticketing
			if(options.current_time <= 0)
				goToPage()

		},1000)
	}

	return {
		setup:setup
	}
})();