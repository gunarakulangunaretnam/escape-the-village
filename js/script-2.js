$(window).on('load', function(){

    $('form').submit(false); //Disabled Form Submission

    document.body.onkeyup = function (e) {
            
        if(e.key== " "){
            
            jumper();

        }
       
    }

    $("#level-play-btn").hover(function(){

        this.src = "images/ui-assets/play-btn-2.png";

    }, function(){

        this.src = "images/ui-assets/play-btn-1.png";
    });

    $("#level-play-btn").click(function(){

        InitialObjectsMover();
        $("#level-1-cover-box").hide();

    });

});



