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

        <script src = "flexSizeSetter.js"></script>
        <script src = "scrollLeftRight.js"></script>
        <script src="audioChanger.js"></script>
       
    </body>
</html>
