//script for setting heights and widths of flex objects
            
    console.log("setting size");   
    
    var window_width = $(window).width();//this will be used multiple times to check screen width for responsivity
    var window_height = $(window).height();
    

    //set height on first viewing 

    if(window_width > 500){//ie desktop

        var height = $(".link_flex_item").width();
        $(".link_flex_item").height(window_height);

    }

    else{
        $(".link_flex_item").height(window_height);
    }



    $(window).resize(function () {

        window_width = $(window).width();
        window_height = $(window).height();
        
        console.log("window width: " + window_width + " - window height: " + window_height);
        
        if(window_width > 600){//ie desktop

            height = $(".link_flex_item").width();
            $(".link_flex_item").height(window_height);
                
        }

        else{//for phone

           $(".link_flex_item").height(window_height); 
           $(".link_flex_item").width(window_width); 
        }

    });
    //set heights for resize

