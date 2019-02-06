const lazyLoading = (function(){
	function setup() {
		const myLazyLoad = new LazyLoad({
    		elements_selector: ".iam-lazy",
		});
	}

	return {
		setup : setup
	}
})();