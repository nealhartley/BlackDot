console.log("scroll loading");

var screenWidth = $(window).width();
var canScroll = true;
var screenSizeScrollControl = true;
var sizeDelimiter = 600;

window.onload = function(){
    loadandResize();
};

window.onresize = function(){
    loadandResize();   
};
    
    
    
    

$( window ).bind('mousewheel DOMMouseScroll' , function(event){
    if(screenSizeScrollControl){
       console.log("can scroll = " + canScroll);

        //if they scroll up we need to scroll left
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            //up

           var marginLeft = $(".image_links_flexed").css("margin-left");

           marginLeftInt = parseInt(marginLeft);

           //make sure there is room left to scroll.
           if(marginLeftInt + screenWidth <= 0 /*&& canScroll*/&& !$(".image_links_flexed").is(':animated')){
               //make it so they cant induce scriolling until this is done

               console.log("canScroll current status: " + canScroll);
               canScroll = false;
                console.log("canScroll should be false: " + canScroll);
               //scroll
                $(".image_links_flexed").animate({'margin-left' : '+='+screenWidth}, 500,
                'swing', $(".image_links_flexed").stop(true, true));

            }

        }

        //if they scroll down we need to scroll right.
        else {
            //down

            var imagesWidth = $(".image_links_flexed").width();

            console.log(imagesWidth);

            //we want to check scroll position.

            var marginLeft = $(".image_links_flexed").css("margin-left");
            console.log("margin left" + marginLeft);

            console.log("screen width" + $(window).width());


            //we need to combine screenwidth and imageswidth in order to make a string that will be comparable 
            //with marginLeft

            var combinedWidthsInt = (screenWidth - imagesWidth); 
            console.log("combinedWidth " + combinedWidthsInt);

            var marginLeftInt = parseInt(marginLeft);


            if(marginLeftInt - 100 >= combinedWidthsInt /*&& canScroll*/ && !$(".image_links_flexed").is(':animated')){

                //make it so they cant induce scriolling until this is done
                canScroll = false;
                //scroll
                $(".image_links_flexed").animate({'margin-left' : '-='+screenWidth}, 500,
                'swing', $(".image_links_flexed").stop(true, true));


            }
            //need to add some sort of limiter
            //also need to work out dist of each elem and animate scroll to that
        }
    }   
});

function canScrollAgain(){

    console.log("we are inside the can scroll function call");
    canScroll = true;
    console.log("can scroll again");
}

function setWidth() {
    screenWidth = $(window).width();
}

function messWithScrollSet() {
    if(screenWidth < sizeDelimiter){
    screenSizeScrollControl = false;
    console.log("setting to false");
    }
    else {
    screenSizeScrollControl = true;
    }
}

function loadandResize(){
    setWidth();
    messWithScrollSet();
}