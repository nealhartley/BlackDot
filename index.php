<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <link type="text/css" rel="stylesheet" href="flexOnEmKenyon.css">
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
        <title></title>
    </head>
    <body>
        
        <div class = "top_Bar">
            <h1>BLACK DOT</h1>
        </div>
        <div class = "top_Bar_Static">
            <h1>BLACK DOT</h1>
        </div>
        
        <!--<div class = "open_on_item_click close">
            the div that contains all the info and will have the video player
            <div class = "interior_onCLick">
                
            </div>
            
        </div>-->
        
        <div class = "image_links_flexed">

            
            <div class = "link_flex_item Gyro ">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "Gyro">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>GYRO</h2>
                        <P>video game score</P>
                        <p class = "big_dot">.</p>
                </div>
            </div>

            <div class = "link_flex_item Anxiety"> <!--Also known as Depictions!-->
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "Anxiety">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>ANXIETY</h2>
                        <P>depictions of mental illness</P>
                        <p class = "big_dot">.</p>
                    </div>
            </div>

             <div class = "link_flex_item ShortFilms">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "ShortFilms">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>THE TENDER GRACE</h2>
                        <P>short film</P>
                        <p class = "big_dot">.</p>
                    </div>
            </div>

            <div class = "link_flex_item OpalHouse">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "OpalHouse">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>OPAL HOUSE</h2>
                        <P>indie-pop</P>
                        <p class = "big_dot">.</p>
                    </div>
            </div>
            
            
              <div class = "link_flex_item NoRoomForSaints">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "NoRoomForSaints">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>NO ROOM FOR SAINTS</h2>
                        <P>feature film</P>
                        <p class = "big_dot">.</p>
                    </div>
            </div>
            
            
            
            <div class = "link_flex_item Misc">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "GGFF">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>GGFF</h2>
                        <P>governor gary's fatal function</P>
                        <p class = "big_dot">.</p>
                    </div>
            </div>
            
            <div class = "White_Transition">
                
                <p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>dhdaslkfhgalsfhasd</p>
                
            </div>
 
        </div>
        
        <div class = audio_bottom_bar>
            
            <div class = "song_title"><p>GYRO</p></div>
            
            <audio controls="controls" id="audio_player">
                <source src="audio/Gyro.mp3" type="audio/mpeg" />
                 Your browser does not support the audio element.
            </audio>
            
        </div>

        <!--gonna need script to ensure flexed images always take up whole page-->
        <!--will need to be dependant on screen size/ratio how big i want them-->

        <script>//script for setting heights and widths of flex objects
            
            var window_width = $(window).width();//this will be used multiple times to check screen width for responsivity
            var window_height = $(window).height();
    
            //set height on first viewing 
            
            if(window_width > 500){//ie desktop
                
                var height = $(".link_flex_item").width();
                $(".link_flex_item").height(height);
            
            }
            
            else{
                $(".link_flex_item").height(window_height);
            }
            
            
            
            $(window).resize(function () {
                
                window_width = $(window).width();
                window_height = $(window).height();
                
                if(window_width > 500){//ie desktop
                                              
                    height = $(".link_flex_item").width();
                    $(".link_flex_item").height(height);
                
                }
                
                else{//for phone
                
                   $(".link_flex_item").height(window_height); 
                }
                
            });
            //set heights for resize


        </script>
        
        <script>//script for doing mouse scroll in order to hide top help bar
            
            
            var turnOn = false;
            
            if(turnOn){
            
                var top_bar_open = true;

                $( window ).bind('mousewheel DOMMouseScroll' , function(event){
                //if they scroll up

                //if they scroll up we need to show top bar
                    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                        //up

                        if(top_bar_open === false){
                            $(".top_Bar").slideToggle();
                            top_bar_open = true;
                        }
                    }

                //if they scroll down. we hide the tool bar at top of page.
                    else {
                        //down
                        if(top_bar_open === true){
                            $(".top_Bar").slideToggle();
                            top_bar_open = false;
                        }
                    }
                
                });
        
            }
        
        </script>
        
            
        
        <script>//script for scrolling left and right inside the flexbox
            
            $( window ).bind('mousewheel DOMMouseScroll' , function(event){
                //if they scroll up

                //if they scroll up we need to show top bar
                    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                        //up
                        $(".image_links_flexed").animate({'margin-left' : '+=100px'}, 10);
                        
                        //need to add some sort of limiter
                        //also need to work out dist of each elem and animate scroll to that
                        
                    }

                //if they scroll down. we hide the tool bar at top of page.
                    else {
                        //down
                        $(".image_links_flexed").animate({'margin-left' : '-=100px'}, 10);
                        
                        //need to add some sort of limiter
                        //also need to work out dist of each elem and animate scroll to that
                    }
                
                });

        </script>
        
        <!--This is the script that scrolls to each div when on phone-->
        <script>
        
        var scrollPos = 0; //this is which div the scroll is currently positioned at.
        var distToScroll = $(".link_flex_item").height();
        console.log("dis to scroll: " + distToScroll);
        
        
        var scroll_snap_active = false; //this is for a later release potentially. <-----hawly shit this is hard
        
        if(scroll_snap_active === true){
        console.log("can scroll: dev mdoe enabled");
            //intial timer states
            
            var current_time = new Date();
            console.log(current_time);
            
            var time_since_scroll = current_time.valueOf()/1000; //should give us current time in milliseconds
            var timer_between_scrolls = time_since_scroll; //should then be current time plus 2 seconds = initial state.
            
           console.log("time since: " + time_since_scroll + " time between: " + timer_between_scrolls);
           
            
        
                timer_between_scrolls = time_since_scroll; //reset it to 0 so wont be fired again
        
                $( window ).bind('mousewheel DOMMouseScroll' , function(event){
                    //we need to stop defaults
                    event.preventDefault();
                    event.stopPropagation();
                    
                    
                    //we need to scroll to the top of next flex item with each scroll
                    console.log("NO EVENT pos is: "+ scrollPos);
                    
                    if(canScroll( time_since_scroll, timer_between_scrolls )){
                        
                        current_time = new Date();
                        
                        time_since_scroll = current_time.valueOf()/1000;
                        timer_between_scrolls = time_since_scroll + 1;
                    
                        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                            //up

                                scrollPos = scrollPos - 1;//scrollPos needs ot have 1 subtracted from it
                                if(scrollPos <= 0){scrollPos = 0;}

                                console.log("scrolled UP and new pos is: "+ scrollPos);

                                $(document).scrollTop(distToScroll * scrollPos);//set scroll to new position
                              
                        }
                        else{
                            //down
                                scrollPos = scrollPos + 1;//scrollPos needs to have 1 added to it;

                                console.log("scrolled DOWN and new pos is: "+ scrollPos);
                                if(scrollPos >= 4){scrollPos = 0;}

                                $(document).scrollTop(distToScroll * scrollPos);//set scroll to new position
                        }
                    }
                    
                    else{
                        current_time = new Date();
                        time_since_scroll = current_time.valueOf()/1000;
                    }

                });
            
                        
            
        }
        
        function canScroll( current_time, time_can_snap ){
                
            if(current_time < time_can_snap){
              
                console.log("we can not scroll at the mo. current_time: " + current_time + " time_can_snap: " + time_can_snap);
                                
                return false;
            }
                   
            console.log("we CAN scroll at the mo. current_time: " + current_time + " time_can_snap: " + time_can_snap);
            return true;
        }
        
        </script>
        
        <!--script for touch swipe up and down function-->
        <script>
            var position = 0; //position that the page is currently on - for mobile this can be 0-5 1 for each element
            var height_of_each_component = $("window").height();
            
            $("window").on("scrollstop", function(event){
                
                var scrollTop = document.documentElement.scrollTop;
                console.log("scrollTop: " + scrollTop);
                               
                
            });
            
        </script>
        
        <!--script for opening vimeo viewing box-->
        <script>
            
         var active = false;
         
         if(active === true){//for this release we need to turn this off
      //when they click on the flex item it needs to open the overlay "white_transition" and switch its class to "transitioning"
            $(".Black_overlay_flexItem").click(function(){

                console.log("clicked");

                $(".White_Transition").toggleClass("transitioning");

            });       

            $(".White_Transition").click(function(){

                console.log("clicked");

                $(".White_Transition").toggleClass("transitioning");

            });  
         }
         
         //from here we are going to do the script for changing audio files.
         //audio filename format is going to be the data tag from each div follows by .mp3
         
         $(".Black_overlay_flexItem").click(function(){
             
                var overlay_data = $(this).data('piece');

                console.log( "audio/" + overlay_data + ".mp3");
                
                var audio = document.getElementById('audio_player');
                audio.src = "audio/" + overlay_data + ".mp3";
                audio.load();
                audio.play();
                
                $(".song_title").empty();
                $(".song_title").append("<p>" + overlay_data + "</p>");
                    
                
                
                
                
            });   
         
         
        </script>
    </body>
</html>
