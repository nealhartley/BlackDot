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
            
            <div class = "link_flex_item ShortFilms">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "ShortFilms">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>SHORT FILMS</h2>
                        <P>collection of scores</P>
                        <p class = "big_dot">.</p>
                    </div>
            </div>
            
            <div class = "link_flex_item Misc">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "Misc">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>MISCELLANEOUS</h2>
                        <P>collection of projects</P>
                        <p class = "big_dot">.</p>
                    </div>
            </div>
            
            <div class = "White_Transition">
                
                <p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>dhdaslkfhgalsfhasd</p>
                
            </div>
 
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
                    top_bar_open = false
                }
            }
    });
        
        </script>
        
        <!--script for opening vimeo viewing box-->
        <script>
      //when they click on the flex item it needs to open the overlay "white_transition" and switch its class to "transitioning"
        $(".Black_overlay_flexItem").click(function(){
            
            console.log("clicked");
        
            $(".White_Transition").toggleClass("transitioning");
            
        });       
        
        $(".White_Transition").click(function(){
            
            console.log("clicked");
        
            $(".White_Transition").toggleClass("transitioning");
            
        });  
        
        </script>
    </body>
</html>
