const fadeOverlay = (function(window,document){

    //@Desc: NormalCase: ShowFade Overlay->Go to href; Special Case for e.g. ShowFadeOverlay, submitForm on Same Page...
    function showFadeOverlay(aimAnchor,callback){
    	const theOverlay = document.getElementById('fadeOverlay');
    	theOverlay.classList.remove('hidden');

    	theOverlay.addEventListener('transitionend',()=>{
    		if(typeof aimAnchor === 'string')
                    window.location.href = aimAnchor;
                else if(typeof aimAnchor === 'boolean')
                    callback();
    	});
    }

    function hideFadeOverlay(){
    	document.getElementById('fadeOverlay').classList.add('hidden');
    }

    //onpageshow Event
    function setOnPageShowEvent(){
		fadeOverlay.hide();
		// LazyLoading
		if(document.querySelector('.iam-lazy')) lazyLoading.setup();
    }

    //Click Elements
    function setFadeLinkClickEvents() {
    	Array.from(document.querySelectorAll('.fadeLink')).forEach(link => link.addEventListener('click', event => {
    		event.preventDefault();
            const aimAnchor = event.currentTarget.getAttribute('href');

            fadeOverlay.show(aimAnchor);
    	}));
    }


    //API
    return {
        show           : showFadeOverlay,
        hide           : hideFadeOverlay,
        pageShow       : setOnPageShowEvent,
        setClickEvents : setFadeLinkClickEvents
    }
})(window,document);