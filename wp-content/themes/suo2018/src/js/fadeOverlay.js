var fadeOverlay = (function(window,document){

    //@Desc: NormalCase: ShowFade Overlay->Go to href; Special Case for e.g. ShowFadeOverlay, submitForm on Same Page...
    function showFadeOverlay(aimAnchor,callback){
        $('#fadeOverlay')
            .css('display','block')
            .animate({'opacity' : 1},500,function(){
                if(typeof aimAnchor === 'string')
                    window.location.href = aimAnchor;
                else if(typeof aimAnchor === 'boolean')
                    callback();
            });

    }

    function hideFadeOverlay(){
        $('#fadeOverlay').animate({'opacity' : 0},500,function(){
            $(this).css('display','none');
        })
    }

    //onpageshow Event
    function setOnPageShowEvent(){
        if(($('.globalHeaderImage').length)){
            if(headImage.status.headImageInit) {
                fadeOverlay.hide();
            }
            else
                setTimeout(setOnPageShowEvent,100);
        }
        else {
            fadeOverlay.hide();
        }
    }

    //Click Elements
    function setFadeLinkClickEvents() {
        $('.fadeLink').on('click', function (event) {
            event.preventDefault();
            var aimAnchor = $(this).attr('href');

            fadeOverlay.show(aimAnchor);
        });
    }


    //API
    return {
        show           : showFadeOverlay,
        hide           : hideFadeOverlay,
        pageShow       : setOnPageShowEvent,
        setClickEvents : setFadeLinkClickEvents
    }
})(window,document);