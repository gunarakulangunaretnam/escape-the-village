$(window).on('load', function(){

    $('form').submit(false); //Disabled Form Submission

    document.body.onkeyup = function (e) {
            
        if(e.key== " "){
            
            jumper();

        }
       
    }

    $("#level-play-btn").on('hover', function(){

        this.src = "images/ui-assets/play-btn-2.png";

    }, function(){

        this.src = "images/ui-assets/play-btn-1.png";
    });

    $("#level-play-btn").on('click', function(){
    
        InitialObjectsMover();
        $("#level-1-cover-box").hide();

    });

});



