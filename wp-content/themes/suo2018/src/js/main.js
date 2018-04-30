const main = (() => {
	function setup(){
		console.log("main.js");

		//FrontPage
		if($('.fp-content')) frontPage.setup();
	}

	return {
		setup: setup
	}
})();
$(document).ready(main.setup);