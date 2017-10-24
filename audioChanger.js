 //from here we are going to do the script for changing audio files.
    //audio filename format is going to be the data tag from each div follows by .mp3
    console.log("audiochanger loaded");
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
