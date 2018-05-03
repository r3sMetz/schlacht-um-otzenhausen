var device = (function () {

    /**
     * @Desc Mobile Check with Regular Expression
     */
    function isMobile() {
        var mobileExp = new RegExp('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/');
        return mobileExp.test(navigator.userAgent);
    }

    function isPhone(){
        return getDeviceWidth() < screen.sm && isMobile()
    }

    function isTablet(){
        return getDeviceWidth() < screen.lg && getDeviceWidth() >= screen.sm &&  isMobile()
    }

    function isDesktop(){
        return getDeviceWidth() >= screen.lg && isMobile === false;
    }

    /**
     * @Desc Disables/Enables Mobile Touch Scrolling
     */
    function toggleScrollability(control) {
        //Disable
        if (control === 0) {
            document.ontouchmove = function (e) {
                e.preventDefault();
            };
        }

        //Enable
        else if (control === 1) {
            document.ontouchmove = function (e) {
                return true;
            };
        }
    }


    /**
     * @Desc Get the Browser of Device
     */
    function getBrowser() {
        if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
            return('Opera');
        }
        else if (navigator.userAgent.indexOf("Chrome") != -1) {
            return('Chrome');
        }
        else if (navigator.userAgent.indexOf("Safari") != -1) {
            if(isMobile())
                return('Safari iOS');
            else
                return ('Safari');
        }
        else if (navigator.userAgent.indexOf("Firefox") != -1) {
            return('Firefox');
        }
        else if ((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
        {
            return('IE');
        }
        else {
            return('unknown');
        }
    }


    /**
     * @Desc Get (current) Device Width
     */
     function getDeviceWidth(){
        return window.innerWidth;
     }

     /**
     * @Desc Get (current) Device Height
     */
     function getDeviceHeight(){
        return window.innerHeight;
     }

     /**
     * @Desc Get (current) Device Height
     */
     function deviceIsRetina(){
        return window.devicePixelRatio > 1;
     }


    /**
     * @Desc Checks if Browsers JS supports FileAPI
     */
     function fileAPI(){
        return 'File'       in window &&
               'FileReader' in window &&
               'FileList'   in window &&
               'Blob'       in window;
     }


    /**
     * @Desc: Object for Bootstrap(Version) Screen-Sizes
     */
    var screen = {
        sm: 768,
        md: 992,
        lg: 1200,
        xl: 1450
    };




    return {
        screen              : screen,
        isMobile            : isMobile(),
        isPhone             : isPhone(),
        isTablet            : isTablet(),
        isDesktop           : isDesktop(),
        toggleScrollability : toggleScrollability,
        browser             : getBrowser(),
        height              : getDeviceHeight,
        width               : getDeviceWidth,
        supportsFileAPI     : fileAPI(),
        isRetina            : deviceIsRetina()
    }
})();
