
$(window).on('load', function(){

    function collision($div1, $div2) {
        var x1 = $div1.offset().left;
        var y1 = $div1.offset().top;
        var h1 = $div1.outerHeight(true);
        var w1 = $div1.outerWidth(true);
        var b1 = y1 + h1;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var y2 = $div2.offset().top;
        var h2 = $div2.outerHeight(true);
        var w2 = $div2.outerWidth(true);
        var b2 = y2 + h2;
        var r2 = x2 + w2;

        if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) {
            return false;

        } else {

          
            dieplayer();
            return true;
        }

    }

    function DoorLogic($div1, $div2, doortype, TimeDuration) {
        
        var x1 = $div1.offset().left;
        var y1 = $div1.offset().top;
        var h1 = $div1.outerHeight(true);
        var w1 = $div1.outerWidth(true);
        var b1 = y1 + h1;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var y2 = $div2.offset().top;
        var h2 = $div2.outerHeight(true);
        var w2 = $div2.outerWidth(true);
        var b2 = y2 + h2;
        var r2 = x2 + w2;

        if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) {
            
            return false;
           

        } else {

          
            if (isPuzzleMode == false) {

                DoorOpenPuzzleFunction($div1, doortype, TimeDuration);
            }

            return true;
        }

    }


    function LevelUp($div1, $div2) {
       
       
        var x1 = $div1.offset().left;
        var y1 = $div1.offset().top;
        var h1 = $div1.outerHeight(true);
        var w1 = $div1.outerWidth(true);
        var b1 = y1 + h1;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var y2 = $div2.offset().top;
        var h2 = $div2.outerHeight(true);
        var w2 = $div2.outerWidth(true);
        var b2 = y2 + h2;
        var r2 = x2 + w2;

        if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) {
            return false;

        } else {

        
            LevelUpSoundEffect();
            return true;
        }
       
    }


    function DoorOpenSound(){

        // Door open Sound
        var doorOpen = new Audio("music/other-musics/door-open-sound.wav");
        doorOpen.volume = 1;
        doorOpen.play();

    }


    function PauseTheObjectMover() {

        $(".MovingObjects").stop(); // Stop moving objects
        PlayerStop();               // Stop the player
        

    }

    function MCQAnswersSetter(btnClass, PuzzleAnswerFromAPI) {

        $(btnClass).each(function (i, obj) {

            var randonValue = Math.round(Math.random() * (11 - 0)) + 0;

            if (parseInt(PuzzleAnswerFromAPI) != parseInt(randonValue)) {

                obj.innerHTML = randonValue;

            } else {

                var randonValue2 = Math.round(Math.random() * (11 - 0)) + 0;

                obj.innerHTML = randonValue2;
            }

        });

        var randonAnswerPlaceHolder = Math.round(Math.random() * (3 - 0)) + 0;

        $(btnClass).each(function (i, obj) {

            if (i == randonAnswerPlaceHolder) {

                obj.innerHTML = PuzzleAnswerFromAPI;
            }

        });

    }

    function PuzzleBoxType(door, puzzleImageBase64, doortype, PuzzleAnswerFromAPI, TimeDuration) {

        if (doortype == "door-open-box-1" && TimeDuration == 0) {

            // Place question image | Slide down the puzzle viwer div
            $("#door-open-box-1-puzzle-image").attr('src', "data:image/png;base64," + puzzleImageBase64);
            $("#door-open-box-1").slideDown("slow").trigger("focus")


            MCQAnswersSetter(".DoorOpenBox1AnswerBTN", PuzzleAnswerFromAPI); // Set random MCQ answers and API answer

            $(".DoorOpenBox1AnswerBTN").unbind("click").click(function () {

                var PuzzleAnswerFromUser = $(this).text();

                if (PuzzleAnswerFromUser == PuzzleAnswerFromAPI) {

                    $("#door-open-box-1").slideUp("slow") // Slide up current window
                    door.remove(); // Remove the door

                    DoorOpenSound()
                    ObjectsMover();
                    isPuzzleMode = false;
                    movingTrue = false;


                } else {
                    
                    $("#door-open-box-1").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window

                    stage1Audio.pause();
                    GameOverSound.play();
                    
                }

            });

        }else if(doortype == "door-open-box-2" && TimeDuration != 0){

            // Place question image | Slide down the puzzle viwer div
            $("#door-open-box-2-puzzle-image").attr('src', "data:image/png;base64," + puzzleImageBase64);
            $("#door-open-box-2").slideDown("slow").trigger("focus");

            MCQAnswersSetter(".DoorOpenBox2AnswerBTN", PuzzleAnswerFromAPI); // Set random MCQ answers and API answer

            TimerFunctionForDoorOpenBox2(TimeDuration);

            $(".DoorOpenBox2AnswerBTN").unbind("click").click(function () {

                var PuzzleAnswerFromUser = $(this).text();

                if (PuzzleAnswerFromUser == PuzzleAnswerFromAPI) {

                    $("#door-open-box-2").slideUp("slow") // Slide up current window
                    door.remove(); // Remove the door

              
                    timerTicker.pause();
                    DoorOpenSound()
                  
                    ObjectsMover();
                    isPuzzleMode = false;
                    movingTrue = false;


                } else {
                    
                    $("#door-open-box-2").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
                 
                    stage1Audio.pause();
                    timerTicker.pause();
                    GameOverSound.play();

                }


            });


        }else if(doortype == "door-open-box-3" && TimeDuration == 0){

             // Place question image | Slide down the puzzle viwer div
             $("#door-open-box-3-puzzle-image").attr('src', "data:image/png;base64," + puzzleImageBase64);
             $("#door-open-box-3").slideDown("slow").trigger("focus");

             $("#DoorOpenBox3AnswerBTN").unbind("click").click(function(){

                var PuzzleAnswerFromUser = $("#DoorOpenBox3AnswerTEXTBOX").val();
             
                if (PuzzleAnswerFromUser == PuzzleAnswerFromAPI) {

                    $("#door-open-box-3").slideUp("slow") // Slide up current window
                    door.remove(); // Remove the door

                   
                    timerTicker.pause();
                    DoorOpenSound()
                    
                    ObjectsMover();

                    isPuzzleMode = false;
                    movingTrue = false;
                   

                }else{

                    $("#door-open-box-3").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
                   
                    stage1Audio.pause();
                    timerTicker.pause();
                    GameOverSound.play();
                    
                }

                $("#DoorOpenBox3AnswerTEXTBOX").val("");

            });

        }else if(doortype == "door-open-box-4" && TimeDuration != 0){

            
             // Place question image | Slide down the puzzle viwer div
             $("#door-open-box-4-puzzle-image").attr('src', "data:image/png;base64," + puzzleImageBase64);
             $("#door-open-box-4").slideDown("slow").trigger("focus");

             TimerFunctionForDoorOpenBox4(TimeDuration);

             $("#DoorOpenBox4AnswerBTN").unbind("click").click(function(){

                var PuzzleAnswerFromUser = $("#DoorOpenBox4AnswerTEXTBOX").val();

                if (PuzzleAnswerFromUser == PuzzleAnswerFromAPI) {

                    $("#door-open-box-4").slideUp("slow") // Slide up current window
                    door.remove(); // Remove the door

                  
                    timerTicker.pause();
                    DoorOpenSound()
                  
                    
                    ObjectsMover();

                    isPuzzleMode = false;
                    movingTrue = false;

                }else{

                    $("#door-open-box-4").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
                  
                    stage1Audio.pause();
                    timerTicker.pause();
                    GameOverSound.play();
                }

                $("#DoorOpenBox4AnswerTEXTBOX").val("");
            });
        }

    }


    const SmileApiRequest = async (door, doortype, TimeDuration) => {

        const response = await fetch('https://marcconrad.com/uob/smile/api.php?out=csv&base64=yes');
        const responseData = await response.text(); //extract JSON from the http response
        var responseDataArray = responseData.split(",");

        var puzzleImageBase64 = responseDataArray[0];
        var PuzzleAnswerFromAPI = responseDataArray[1];
        console.log(PuzzleAnswerFromAPI)

        PuzzleBoxType(door, puzzleImageBase64, doortype, PuzzleAnswerFromAPI, TimeDuration)

    }


    const DoorOpenPuzzleFunction = async (door, doortype, TimeDuration) => {

        isPuzzleMode = true; // Turn on puzzle mode

        PauseTheObjectMover();
        SmileApiRequest(door, doortype, TimeDuration);

    }

    window.setInterval(function () {

        //Flying Birds on High
        //$('.result').text(collision($('#skybirds-enm1'), $('#div2')));

        $('.result').text(collision($('#croco1'), $('#div2')));
        $('.result').text(collision($('#croco2'), $('#div2')));
        $('.result').text(collision($('#croco3'), $('#div2')));

        $('.result').text(collision($('#enm13'), $('#div2')));
        $('.result').text(collision($('#enm14'), $('#div2')));

        $('.result').text(collision($('#enm15'), $('#div2')));
        $('.result').text(collision($('#enm16'), $('#div2')));

        $('.result').text(collision($('#enm17'), $('#div2')));
        $('.result').text(collision($('#enm18'), $('#div2')));


        LevelUp($('#flag'), $('#div2'));


         //Doors
         if( $('#door1').length)
         {         
             DoorLogic($('#door1'), $('#div2'), "door-open-box-1", 0);
         }

         if( $('#door2').length)
         {  
             DoorLogic($('#door2'), $('#div2'), "door-open-box-2", 300);
         }

         if( $('#door3').length)
         {
             DoorLogic($('#door3'), $('#div2'), "door-open-box-3", 0);
         }

         if( $('#door4').length)
         {
             DoorLogic($('#door4'), $('#div2'), "door-open-box-4", 240);
         }

         if( $('#door5').length)
         {
             DoorLogic($('#door5'), $('#div2'), "door-open-box-3", 0);
         }

         if( $('#door6').length)
         {
             DoorLogic($('#door6'), $('#div2'), "door-open-box-2", 120);
         }

         if( $('#door7').length)
         {
             DoorLogic($('#door7'), $('#div2'), "door-open-box-4", 360);
         }

         if( $('#door8').length)
         {
             DoorLogic($('#door8'), $('#div2'), "door-open-box-3", 0);
         }

         if( $('#door9').length)
         {
             DoorLogic($('#door9'), $('#div2'), "door-open-box-2", 180);
         }

         if( $('#door10').length)
         {
             DoorLogic($('#door10'), $('#div2'), "door-open-box-2", 240);
         }

         if( $('#door11').length)
         {
             DoorLogic($('#door11'), $('#div2'), "door-open-box-4", 90);
         }
        

    }, 200);
});


$(window).on('load', function(){

    function getpointscoin($div1, $div2, coin1, type) {
        var ci = coin1;
        var x1 = $div1.offset().left;
        var y1 = $div1.offset().top;
        var h1 = $div1.outerHeight(true);
        var w1 = $div1.outerWidth(true);
        var b1 = y1 + h1;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var y2 = $div2.offset().top;
        var h2 = $div2.outerHeight(true);
        var w2 = $div2.outerWidth(true);
        var b2 = y2 + h2;
        var r2 = x2 + w2;
        if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) {

            return false;

        } else {

            $div1.remove();

            if (type == "CoinType") {

                AddCoinPoint(ci);

            } else if (type == "DiamondType") {

                AddDiamondPoint(ci);
            }


            return true;

        }

    }

    window.setInterval(function () {

     if($('#diamond1').length) getpointscoin($('#diamond1'), $('#div2'), '#diamond1', 'DiamondType');
     if($('#diamond2').length) getpointscoin($('#diamond2'), $('#div2'), '#diamond2', 'DiamondType');
     if($('#diamond3').length) getpointscoin($('#diamond3'), $('#div2'), '#diamond3', 'DiamondType');
     if($('#diamond4').length) getpointscoin($('#diamond4'), $('#div2'), '#diamond4', 'DiamondType');
     if($('#diamond5').length) getpointscoin($('#diamond5'), $('#div2'), '#diamond5', 'DiamondType');
     if($('#diamond6').length) getpointscoin($('#diamond6'), $('#div2'), '#diamond6', 'DiamondType');
     if($('#diamond7').length) getpointscoin($('#diamond7'), $('#div2'), '#diamond7', 'DiamondType');
     if($('#diamond8').length) getpointscoin($('#diamond8'), $('#div2'), '#diamond8', 'DiamondType');
     if($('#diamond9').length) getpointscoin($('#diamond9'), $('#div2'), '#diamond9', 'DiamondType');
     if($('#diamond10').length) getpointscoin($('#diamond10'), $('#div2'), '#diamond10', 'DiamondType');
     if($('#diamond11').length) getpointscoin($('#diamond11'), $('#div2'), '#diamond11', 'DiamondType');
     if($('#diamond12').length) getpointscoin($('#diamond12'), $('#div2'), '#diamond12', 'DiamondType');
     if($('#diamond13').length) getpointscoin($('#diamond13'), $('#div2'), '#diamond13', 'DiamondType');
     if($('#diamond14').length) getpointscoin($('#diamond14'), $('#div2'), '#diamond14', 'DiamondType');
     if($('#diamond15').length) getpointscoin($('#diamond15'), $('#div2'), '#diamond15', 'DiamondType');
     if($('#diamond16').length) getpointscoin($('#diamond16'), $('#div2'), '#diamond16', 'DiamondType');
     if($('#diamond17').length) getpointscoin($('#diamond17'), $('#div2'), '#diamond17', 'DiamondType');
     if($('#diamond18').length) getpointscoin($('#diamond18'), $('#div2'), '#diamond18', 'DiamondType');
     if($('#diamond19').length) getpointscoin($('#diamond19'), $('#div2'), '#diamond19', 'DiamondType');
     if($('#diamond20').length) getpointscoin($('#diamond20'), $('#div2'), '#diamond20', 'DiamondType');
     if($('#diamond21').length) getpointscoin($('#diamond21'), $('#div2'), '#diamond21', 'DiamondType');
     if($('#diamond22').length) getpointscoin($('#diamond22'), $('#div2'), '#diamond22', 'DiamondType');
     if($('#diamond23').length) getpointscoin($('#diamond23'), $('#div2'), '#diamond23', 'DiamondType');
     if($('#diamond24').length) getpointscoin($('#diamond24'), $('#div2'), '#diamond24', 'DiamondType');
     if($('#diamond25').length) getpointscoin($('#diamond25'), $('#div2'), '#diamond25', 'DiamondType');
     if($('#diamond26').length) getpointscoin($('#diamond26'), $('#div2'), '#diamond26', 'DiamondType');



      if($('#diamond27').length) getpointscoin($('#diamond27'), $('#div2'), '#diamond27', 'DiamondType');
      if($('#diamond27').length) getpointscoin($('#diamond27'), $('#div2'), '#diamond27', 'DiamondType');
      if($('#diamond28').length) getpointscoin($('#diamond28'), $('#div2'), '#diamond28', 'DiamondType');
      if($('#diamond29').length) getpointscoin($('#diamond29'), $('#div2'), '#diamond29', 'DiamondType');
      if($('#diamond30').length) getpointscoin($('#diamond30'), $('#div2'), '#diamond30', 'DiamondType');
      if($('#diamond31').length) getpointscoin($('#diamond31'), $('#div2'), '#diamond31', 'DiamondType');
      if($('#diamond32').length) getpointscoin($('#diamond32'), $('#div2'), '#diamond32', 'DiamondType');
      if($('#diamond33').length) getpointscoin($('#diamond33'), $('#div2'), '#diamond33', 'DiamondType');
      if($('#diamond34').length) getpointscoin($('#diamond34'), $('#div2'), '#diamond34', 'DiamondType');
      if($('#diamond35').length) getpointscoin($('#diamond35'), $('#div2'), '#diamond35', 'DiamondType');
      if($('#diamond36').length) getpointscoin($('#diamond36'), $('#div2'), '#diamond36', 'DiamondType');
      if($('#diamond37').length) getpointscoin($('#diamond37'), $('#div2'), '#diamond37', 'DiamondType');
      if($('#diamond38').length) getpointscoin($('#diamond38'), $('#div2'), '#diamond38', 'DiamondType');
      if($('#diamond39').length) getpointscoin($('#diamond39'), $('#div2'), '#diamond39', 'DiamondType');
      if($('#diamond40').length) getpointscoin($('#diamond40'), $('#div2'), '#diamond40', 'DiamondType');
      if($('#diamond41').length) getpointscoin($('#diamond41'), $('#div2'), '#diamond41', 'DiamondType');
      if($('#diamond42').length) getpointscoin($('#diamond42'), $('#div2'), '#diamond42', 'DiamondType');
      if($('#diamond43').length) getpointscoin($('#diamond43'), $('#div2'), '#diamond43', 'DiamondType');
      if($('#diamond44').length) getpointscoin($('#diamond44'), $('#div2'), '#diamond44', 'DiamondType');
      if($('#diamond45').length) getpointscoin($('#diamond45'), $('#div2'), '#diamond45', 'DiamondType');
      if($('#diamond46').length) getpointscoin($('#diamond46'), $('#div2'), '#diamond46', 'DiamondType');
      if($('#diamond47').length) getpointscoin($('#diamond47'), $('#div2'), '#diamond47', 'DiamondType');
      if($('#diamond48').length) getpointscoin($('#diamond48'), $('#div2'), '#diamond48', 'DiamondType');
      if($('#diamond49').length) getpointscoin($('#diamond49'), $('#div2'), '#diamond49', 'DiamondType');
      if($('#diamond50').length) getpointscoin($('#diamond50'), $('#div2'), '#diamond50', 'DiamondType');
      if($('#diamond51').length) getpointscoin($('#diamond51'), $('#div2'), '#diamond51', 'DiamondType');
      if($('#diamond52').length) getpointscoin($('#diamond52'), $('#div2'), '#diamond52', 'DiamondType');


      if($('#coin1').length) getpointscoin($('#coin1'), $('#div2'), '#coin1', 'CoinType');
      if($('#coin2').length) getpointscoin($('#coin2'), $('#div2'), '#coin2', 'CoinType');
      if($('#coin3').length) getpointscoin($('#coin3'), $('#div2'), '#coin3', 'CoinType');
      if($('#coin4').length) getpointscoin($('#coin4'), $('#div2'), '#coin4', 'CoinType');
      if($('#coin5').length) getpointscoin($('#coin5'), $('#div2'), '#coin5', 'CoinType');
      if($('#coin6').length) getpointscoin($('#coin6'), $('#div2'), '#coin6', 'CoinType');
      if($('#coin7').length) getpointscoin($('#coin7'), $('#div2'), '#coin7', 'CoinType');
      if($('#coin8').length) getpointscoin($('#coin8'), $('#div2'), '#coin8', 'CoinType');
      if($('#coin9').length) getpointscoin($('#coin9'), $('#div2'), '#coin9', 'CoinType');
      if($('#coin10').length) getpointscoin($('#coin10'), $('#div2'), '#coin10', 'CoinType');
      if($('#coin11').length) getpointscoin($('#coin11'), $('#div2'), '#coin11', 'CoinType');
      if($('#coin12').length) getpointscoin($('#coin12'), $('#div2'), '#coin12', 'CoinType');
      if($('#coin13').length) getpointscoin($('#coin13'), $('#div2'), '#coin13', 'CoinType');
      if($('#coin14').length) getpointscoin($('#coin14'), $('#div2'), '#coin14', 'CoinType');
      if($('#coin15').length) getpointscoin($('#coin15'), $('#div2'), '#coin15', 'CoinType');
      if($('#coin16').length) getpointscoin($('#coin16'), $('#div2'), '#coin16', 'CoinType');
      if($('#coin17').length) getpointscoin($('#coin17'), $('#div2'), '#coin17', 'CoinType');
      if($('#coin18').length) getpointscoin($('#coin18'), $('#div2'), '#coin18', 'CoinType');
      if($('#coin19').length) getpointscoin($('#coin19'), $('#div2'), '#coin19', 'CoinType');
      if($('#coin20').length) getpointscoin($('#coin20'), $('#div2'), '#coin20', 'CoinType');
      if($('#coin21').length) getpointscoin($('#coin21'), $('#div2'), '#coin21', 'CoinType');
      if($('#coin22').length) getpointscoin($('#coin22'), $('#div2'), '#coin22', 'CoinType');
      if($('#coin23').length) getpointscoin($('#coin23'), $('#div2'), '#coin23', 'CoinType');
      if($('#coin24').length) getpointscoin($('#coin24'), $('#div2'), '#coin24', 'CoinType');
      if($('#coin25').length) getpointscoin($('#coin25'), $('#div2'), '#coin25', 'CoinType');
      if($('#coin26').length) getpointscoin($('#coin26'), $('#div2'), '#coin26', 'CoinType');
      if($('#coin27').length) getpointscoin($('#coin27'), $('#div2'), '#coin27', 'CoinType');
      if($('#coin28').length) getpointscoin($('#coin28'), $('#div2'), '#coin28', 'CoinType');
      if($('#coin29').length) getpointscoin($('#coin29'), $('#div2'), '#coin29', 'CoinType');
      if($('#coin30').length) getpointscoin($('#coin30'), $('#div2'), '#coin30', 'CoinType');
      if($('#coin31').length) getpointscoin($('#coin31'), $('#div2'), '#coin31', 'CoinType');
      if($('#coin32').length) getpointscoin($('#coin32'), $('#div2'), '#coin32', 'CoinType');
      if($('#coin33').length) getpointscoin($('#coin33'), $('#div2'), '#coin33', 'CoinType');
      if($('#coin34').length) getpointscoin($('#coin34'), $('#div2'), '#coin34', 'CoinType');
      if($('#coin35').length) getpointscoin($('#coin35'), $('#div2'), '#coin35', 'CoinType');
      if($('#coin36').length) getpointscoin($('#coin36'), $('#div2'), '#coin36', 'CoinType');
      if($('#coin37').length) getpointscoin($('#coin37'), $('#div2'), '#coin37', 'CoinType');
      if($('#coin38').length) getpointscoin($('#coin38'), $('#div2'), '#coin38', 'CoinType');
      if($('#coin39').length) getpointscoin($('#coin39'), $('#div2'), '#coin39', 'CoinType');
      if($('#coin40').length) getpointscoin($('#coin40'), $('#div2'), '#coin40', 'CoinType');
      if($('#coin41').length) getpointscoin($('#coin41'), $('#div2'), '#coin41', 'CoinType');
      if($('#coin42').length) getpointscoin($('#coin42'), $('#div2'), '#coin42', 'CoinType');
      if($('#coin43').length) getpointscoin($('#coin43'), $('#div2'), '#coin43', 'CoinType');
      if($('#coin44').length) getpointscoin($('#coin44'), $('#div2'), '#coin44', 'CoinType');
      if($('#coin45').length) getpointscoin($('#coin45'), $('#div2'), '#coin45', 'CoinType');


       if($('#coin91').length) getpointscoin($('#coin91'), $('#div2'), '#coin91', 'CoinType'); 
       if($('#coin92').length) getpointscoin($('#coin92'), $('#div2'), '#coin92', 'CoinType'); 
       if($('#coin93').length) getpointscoin($('#coin93'), $('#div2'), '#coin93', 'CoinType'); 
       if($('#coin94').length) getpointscoin($('#coin94'), $('#div2'), '#coin94', 'CoinType'); 
       if($('#coin95').length) getpointscoin($('#coin95'), $('#div2'), '#coin95', 'CoinType'); 
       if($('#coin96').length) getpointscoin($('#coin96'), $('#div2'), '#coin96', 'CoinType'); 
       if($('#coin97').length) getpointscoin($('#coin97'), $('#div2'), '#coin97', 'CoinType'); 
       if($('#coin98').length) getpointscoin($('#coin98'), $('#div2'), '#coin98', 'CoinType'); 
       if($('#coin99').length) getpointscoin($('#coin99'), $('#div2'), '#coin99', 'CoinType'); 
       if($('#coin100').length) getpointscoin($('#coin100'), $('#div2'), '#coin100', 'CoinType'); 
       if($('#coin101').length) getpointscoin($('#coin101'), $('#div2'), '#coin101', 'CoinType'); 
       if($('#coin102').length) getpointscoin($('#coin102'), $('#div2'), '#coin102', 'CoinType'); 
       if($('#coin103').length) getpointscoin($('#coin103'), $('#div2'), '#coin103', 'CoinType'); 
       if($('#coin104').length) getpointscoin($('#coin104'), $('#div2'), '#coin104', 'CoinType'); 
       if($('#coin105').length) getpointscoin($('#coin105'), $('#div2'), '#coin105', 'CoinType'); 
       if($('#coin106').length) getpointscoin($('#coin106'), $('#div2'), '#coin106', 'CoinType'); 
       if($('#coin107').length) getpointscoin($('#coin107'), $('#div2'), '#coin107', 'CoinType'); 
       if($('#coin108').length) getpointscoin($('#coin108'), $('#div2'), '#coin108', 'CoinType'); 
       if($('#coin109').length) getpointscoin($('#coin109'), $('#div2'), '#coin109', 'CoinType'); 
       if($('#coin110').length) getpointscoin($('#coin110'), $('#div2'), '#coin110', 'CoinType'); 
       if($('#coin111').length) getpointscoin($('#coin111'), $('#div2'), '#coin111', 'CoinType'); 
       if($('#coin112').length) getpointscoin($('#coin112'), $('#div2'), '#coin112', 'CoinType'); 
       if($('#coin113').length) getpointscoin($('#coin113'), $('#div2'), '#coin113', 'CoinType'); 
       if($('#coin114').length) getpointscoin($('#coin114'), $('#div2'), '#coin114', 'CoinType'); 
       if($('#coin115').length) getpointscoin($('#coin115'), $('#div2'), '#coin115', 'CoinType'); 
       if($('#coin116').length) getpointscoin($('#coin116'), $('#div2'), '#coin116', 'CoinType'); 
       if($('#coin117').length) getpointscoin($('#coin117'), $('#div2'), '#coin117', 'CoinType'); 
       if($('#coin118').length) getpointscoin($('#coin118'), $('#div2'), '#coin118', 'CoinType'); 
       if($('#coin119').length) getpointscoin($('#coin119'), $('#div2'), '#coin119', 'CoinType'); 
       if($('#coin120').length) getpointscoin($('#coin120'), $('#div2'), '#coin120', 'CoinType'); 
       if($('#coin121').length) getpointscoin($('#coin121'), $('#div2'), '#coin121', 'CoinType'); 
       if($('#coin122').length) getpointscoin($('#coin122'), $('#div2'), '#coin122', 'CoinType'); 
       if($('#coin123').length) getpointscoin($('#coin123'), $('#div2'), '#coin123', 'CoinType'); 
       if($('#coin124').length) getpointscoin($('#coin124'), $('#div2'), '#coin124', 'CoinType'); 
       if($('#coin125').length) getpointscoin($('#coin125'), $('#div2'), '#coin125', 'CoinType'); 
       if($('#coin126').length) getpointscoin($('#coin126'), $('#div2'), '#coin126', 'CoinType'); 
       if($('#coin127').length) getpointscoin($('#coin127'), $('#div2'), '#coin127', 'CoinType'); 
       if($('#coin128').length) getpointscoin($('#coin128'), $('#div2'), '#coin128', 'CoinType'); 
       if($('#coin129').length) getpointscoin($('#coin129'), $('#div2'), '#coin129', 'CoinType'); 
       if($('#coin130').length) getpointscoin($('#coin130'), $('#div2'), '#coin130', 'CoinType'); 
       if($('#coin131').length) getpointscoin($('#coin131'), $('#div2'), '#coin131', 'CoinType'); 
       if($('#coin132').length) getpointscoin($('#coin132'), $('#div2'), '#coin132', 'CoinType'); 
       if($('#coin133').length) getpointscoin($('#coin133'), $('#div2'), '#coin133', 'CoinType'); 
       if($('#coin134').length) getpointscoin($('#coin134'), $('#div2'), '#coin134', 'CoinType'); 
       if($('#coin135').length) getpointscoin($('#coin135'), $('#div2'), '#coin135', 'CoinType'); 
       if($('#coin136').length) getpointscoin($('#coin136'), $('#div2'), '#coin136', 'CoinType'); 
       if($('#coin137').length) getpointscoin($('#coin137'), $('#div2'), '#coin137', 'CoinType'); 
       if($('#coin138').length) getpointscoin($('#coin138'), $('#div2'), '#coin138', 'CoinType'); 
       if($('#coin139').length) getpointscoin($('#coin139'), $('#div2'), '#coin139', 'CoinType'); 
       if($('#coin140').length) getpointscoin($('#coin140'), $('#div2'), '#coin140', 'CoinType'); 
       if($('#coin141').length) getpointscoin($('#coin141'), $('#div2'), '#coin141', 'CoinType'); 
       if($('#coin142').length) getpointscoin($('#coin142'), $('#div2'), '#coin142', 'CoinType'); 
       if($('#coin143').length) getpointscoin($('#coin143'), $('#div2'), '#coin143', 'CoinType'); 
       if($('#coin144').length) getpointscoin($('#coin144'), $('#div2'), '#coin144', 'CoinType'); 
       if($('#coin145').length) getpointscoin($('#coin145'), $('#div2'), '#coin145', 'CoinType'); 
       if($('#coin146').length) getpointscoin($('#coin146'), $('#div2'), '#coin146', 'CoinType'); 
       if($('#coin147').length) getpointscoin($('#coin147'), $('#div2'), '#coin147', 'CoinType'); 
       if($('#coin148').length) getpointscoin($('#coin148'), $('#div2'), '#coin148', 'CoinType'); 
       if($('#coin149').length) getpointscoin($('#coin149'), $('#div2'), '#coin149', 'CoinType'); 
       if($('#coin150').length) getpointscoin($('#coin150'), $('#div2'), '#coin150', 'CoinType'); 
       if($('#coin151').length) getpointscoin($('#coin151'), $('#div2'), '#coin151', 'CoinType'); 
       if($('#coin152').length) getpointscoin($('#coin152'), $('#div2'), '#coin152', 'CoinType'); 
       if($('#coin153').length) getpointscoin($('#coin153'), $('#div2'), '#coin153', 'CoinType'); 
       if($('#coin154').length) getpointscoin($('#coin154'), $('#div2'), '#coin154', 'CoinType'); 
       if($('#coin155').length) getpointscoin($('#coin155'), $('#div2'), '#coin155', 'CoinType'); 
       if($('#coin156').length) getpointscoin($('#coin156'), $('#div2'), '#coin156', 'CoinType'); 
       if($('#coin157').length) getpointscoin($('#coin157'), $('#div2'), '#coin157', 'CoinType'); 
       if($('#coin158').length) getpointscoin($('#coin158'), $('#div2'), '#coin158', 'CoinType'); 
       if($('#coin159').length) getpointscoin($('#coin159'), $('#div2'), '#coin159', 'CoinType'); 
       if($('#coin160').length) getpointscoin($('#coin160'), $('#div2'), '#coin160', 'CoinType'); 
       if($('#coin161').length) getpointscoin($('#coin161'), $('#div2'), '#coin161', 'CoinType'); 
       if($('#coin162').length) getpointscoin($('#coin162'), $('#div2'), '#coin162', 'CoinType'); 
       if($('#coin163').length) getpointscoin($('#coin163'), $('#div2'), '#coin163', 'CoinType'); 
       if($('#coin164').length) getpointscoin($('#coin164'), $('#div2'), '#coin164', 'CoinType'); 
       if($('#coin165').length) getpointscoin($('#coin165'), $('#div2'), '#coin165', 'CoinType'); 
       if($('#coin166').length) getpointscoin($('#coin166'), $('#div2'), '#coin166', 'CoinType'); 
       if($('#coin167').length) getpointscoin($('#coin167'), $('#div2'), '#coin167', 'CoinType'); 
       if($('#coin168').length) getpointscoin($('#coin168'), $('#div2'), '#coin168', 'CoinType'); 
       if($('#coin169').length) getpointscoin($('#coin169'), $('#div2'), '#coin169', 'CoinType'); 
       if($('#coin170').length) getpointscoin($('#coin170'), $('#div2'), '#coin170', 'CoinType'); 
       if($('#coin171').length) getpointscoin($('#coin171'), $('#div2'), '#coin171', 'CoinType'); 
       if($('#coin172').length) getpointscoin($('#coin172'), $('#div2'), '#coin172', 'CoinType'); 
       if($('#coin173').length) getpointscoin($('#coin173'), $('#div2'), '#coin173', 'CoinType'); 
       if($('#coin174').length) getpointscoin($('#coin174'), $('#div2'), '#coin174', 'CoinType'); 
       if($('#coin175').length) getpointscoin($('#coin175'), $('#div2'), '#coin175', 'CoinType'); 
       if($('#coin176').length) getpointscoin($('#coin176'), $('#div2'), '#coin176', 'CoinType'); 
       if($('#coin177').length) getpointscoin($('#coin177'), $('#div2'), '#coin177', 'CoinType'); 
       if($('#coin178').length) getpointscoin($('#coin178'), $('#div2'), '#coin178', 'CoinType'); 
       if($('#coin179').length) getpointscoin($('#coin179'), $('#div2'), '#coin179', 'CoinType'); 
       if($('#coin180').length) getpointscoin($('#coin180'), $('#div2'), '#coin180', 'CoinType'); 
       if($('#coin181').length) getpointscoin($('#coin181'), $('#div2'), '#coin181', 'CoinType'); 
       if($('#coin182').length) getpointscoin($('#coin182'), $('#div2'), '#coin182', 'CoinType'); 
       if($('#coin183').length) getpointscoin($('#coin183'), $('#div2'), '#coin183', 'CoinType'); 
       if($('#coin184').length) getpointscoin($('#coin184'), $('#div2'), '#coin184', 'CoinType'); 
       if($('#coin185').length) getpointscoin($('#coin185'), $('#div2'), '#coin185', 'CoinType'); 
       if($('#coin186').length) getpointscoin($('#coin186'), $('#div2'), '#coin186', 'CoinType'); 
       if($('#coin187').length) getpointscoin($('#coin187'), $('#div2'), '#coin187', 'CoinType'); 
       if($('#coin188').length) getpointscoin($('#coin188'), $('#div2'), '#coin188', 'CoinType'); 
       if($('#coin189').length) getpointscoin($('#coin189'), $('#div2'), '#coin189', 'CoinType'); 
       if($('#coin190').length) getpointscoin($('#coin190'), $('#div2'), '#coin190', 'CoinType'); 


    }, 200);
});

