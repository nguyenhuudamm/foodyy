var Pulstate = function () {

//    pulstate
    if(jQuery('#pulsate-regular').length != 0){
        jQuery('#pulsate-regular').pulsate({
            color: "#E74955"
        });
    }
    if(jQuery('#pulsate-once').length != 0){
        jQuery('#pulsate-once').click(function () {
            $(this).pulsate({
                color: "#A5D16C",
                repeat: false
            });
        });
    }
    if(jQuery('#pulsate-hover').length != 0){
        jQuery('#pulsate-hover').pulsate({
            color: "#4A8BC2",
            repeat: false,
            onHover: true
        });
    }   
    if(jQuery('#pulsate-crazy').length != 0){
        jQuery('#pulsate-crazy').click(function () {
            $(this).pulsate({
                color: "#FCB322",
                reach: 50,
                repeat: 10,
                speed: 100,
                glow: true
            });
        });
    }

}();