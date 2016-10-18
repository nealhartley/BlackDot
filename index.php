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
        
        <div class = "image_links_flexed">


            <div class = "link_flex_item Anxiety">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>ANXIETY</h2>
                    </div>
            </div>

            <div class = "link_flex_item Brontide">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>BRONTIDE</h2>
                    </div>
            </div>

            <div class = "link_flex_item ChangingTheTide">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>CHANGING THE TIDE</h2>
                    </div>
            </div>

            <div class = "link_flex_item Echoes">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>ECHOES</h2>
                    </div>
            </div>

            <div class = "link_flex_item EveryMinute">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>EVERY MINUTE</h2>
                    </div>
            </div>

            <div class = "link_flex_item GovernorGary">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>GOVERNOR GARY</h2>
                    </div>
            </div>

            <div class = "link_flex_item Gyro ">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>GYRO</h2>
                    </div>
            </div>

            <div class = "link_flex_item LorenaVera">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>LORENA VERA</h2>
                    </div>
            </div>

            <div class = "link_flex_item NoRoomForSaints">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>NO ROOM FOR SAINTS</h2>
                    </div>
            </div>

            <div class = "link_flex_item PartyPooper">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>PARTY POOPER</h2>
                    </div>
            </div>

            <div class = "link_flex_item PeoplesCoffee">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>PEOPLE'S COFFEE</h2>
                    </div>
            </div>

            <div class = "link_flex_item TellMeYouLoveMe">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
  <div class = "title_text">
                        <h2>TELL ME YOU LOVE ME</h2>
                    </div>
            </div>

            <div class = "link_flex_item TheTenderGrace">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>THE TENDER GRACE</h2>
                    </div>
            </div>

            <div class = "link_flex_item YoureAWizard">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>YOU'RE A WIZARD</h2>
                    </div>
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
    </body>
</html>
