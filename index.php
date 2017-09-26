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
        
 
        
        <div class = "image_links_flexed">
            <div class = "link_flex_item Kenyon_one ">
            </div>
        
            <div class = "link_flex_item Kenyon_two ">
                
                <h3>Kenyon the Shank-Meister</h3>
                
                <h2>.</h2>
                
                <p>kenyonshankie@gmail.com</p>
                
                <p>Scroll to view my work ></p>
                
            </div>            

            <div class = "Introduction">
                <!--different image in each of these as background-->
                <div class = "Black_overlay_flexItem" data-piece = "Introduction">
                    <!--the black overlay inside the flex item that switches transparency on hover-->
                    
                </div>
                <div class = "title_text">
                        <h2>Hi!, I am Kenyon</h2>
                        <P>I make music</P>
                        <p class = "big_dot">.</p>
                </div>
            </div>            
            
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
        
        <!--lets make a div thats gonna sit behind everything and remain black the whole time-->
        <div class = "black_backer"></div>

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
        
        
        
        <script>//script for scrolling left and right inside the flexbox
            var screenWidth = $(window).width();
            var canScroll = true;
            
            $( window ).bind('mousewheel DOMMouseScroll' , function(event){
                
               console.log("can scroll = " + canScroll);
                
                //if they scroll up we need to scroll left
                    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                        //up
                       
                       var marginLeft = $(".image_links_flexed").css("margin-left");
                       
                       marginLeftInt = parseInt(marginLeft);
                       
                       //make sure there is room left to scroll.
                       if(marginLeftInt + screenWidth/2 <= 0 /*&& canScroll*/&& !$(".image_links_flexed").is(':animated')){
                           //make it so they cant induce scriolling until this is done
                           
                           console.log("canScroll current status: " + canScroll);
                           canScroll = false;
                            console.log("canScroll should be false: " + canScroll);
                           //scroll
                            $(".image_links_flexed").animate({'margin-left' : '+='+screenWidth/2}, 500,
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
                            $(".image_links_flexed").animate({'margin-left' : '-='+screenWidth/2}, 500,
                            'swing', $(".image_links_flexed").stop(true, true));
                         
                            
                        }
                        //need to add some sort of limiter
                        //also need to work out dist of each elem and animate scroll to that
                    }
                
                });
                
                function canScrollAgain(){
                    
                    console.log("we are inside the can scroll function call");
                    canScroll = true;
                    console.log("can scroll again");
                }

        </script>
        
        
        <script>
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
