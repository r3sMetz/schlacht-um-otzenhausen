const main = (function(){
	function setup(){
		console.log("main.js");
	}

	return {
		setup: setup
	}
})();
document.addEventListener('DOMContentLoaded',main.setup);