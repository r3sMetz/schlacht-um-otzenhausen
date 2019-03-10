const navbar = (function(){

	function setup(){
		const theNavbar = document.querySelector('.navbar .navbar-collapse');
		const navbarToggler = document.querySelector('.navbar-toggler');

		navbarToggler.addEventListener('click', () => {
			theNavbar.classList.toggle('show');
		})
	}

	return {
		setup: setup
	}
})();