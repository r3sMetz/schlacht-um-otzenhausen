const cwoPoly = (function(){
	function polyfill_for_includes(object_to_search_on,search_term){
		if (!String.prototype.includes) {
			return object_to_search_on.indexOf(search_term) !== -1;
		}
		else
			return object_to_search_on.includes(search_term)
	}

	return {
		poly_includes : polyfill_for_includes
	}
})();