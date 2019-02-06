const lazyLoading = (function(){
	function setup() {
		const myLazyLoad = new LazyLoad({
    		elements_selector: ".iam-lazy",
    		callback_finish: () => {
    			document.body.classList.add('all-lazy-loaded')
    		}
		});
	}

	return {
		setup : setup
	}
})();