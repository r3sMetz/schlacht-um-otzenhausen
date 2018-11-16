const frontPage = (() => {
	/** Private **/
	function handleSquareClick({currentTarget}){
		if (!currentTarget.classList.contains('off')) {
			fadeOverlay.show(true, () => {
				window.location.href = currentTarget.dataset.link;
			});
		}
	}

	function setBodyHeight(){
		document.querySelector('body').style.height = `${device.height}px`;
	}


	/** Public **/
	function setup(){
		// Add Click Event Listener to All Squares
		Array.from(document.querySelectorAll('.fp-content-square')).forEach(square => square.addEventListener('click',handleSquareClick));

		// Set Body Height initialy
		setBodyHeight();

		// Respond to orientationchange
		const orientationRef = device.isMobile ? 'orientationchange' : 'resize';
		window.addEventListener(orientationRef,setBodyHeight);
	}

	return {
		setup : setup
	}
})();