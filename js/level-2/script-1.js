
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


    function PuzzleSolvingMusicOn() {

        stage1Audio.pause()
        PuzzleAudio.play()

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
        PuzzleSolvingMusicOn();

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

                    PuzzleAudio.pause();
                    DoorOpenSound()
                    stage1Audio.play();
                    ObjectsMover();
                    isPuzzleMode = false;
                    movingTrue = false;


                } else {
                    
                    $("#door-open-box-1").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
                    PuzzleAudio.pause();
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

                    PuzzleAudio.pause();
                    timerTicker.pause();
                    DoorOpenSound()
                    stage1Audio.play();    
                    ObjectsMover();
                    isPuzzleMode = false;
                    movingTrue = false;


                } else {
                    
                    $("#door-open-box-2").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
                    PuzzleAudio.pause();
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

                    PuzzleAudio.pause();
                    timerTicker.pause();
                    DoorOpenSound()
                    stage1Audio.play();
                    
                    ObjectsMover();

                    isPuzzleMode = false;
                    movingTrue = false;
                   

                }else{

                    $("#door-open-box-3").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
                    PuzzleAudio.pause();
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

                    PuzzleAudio.pause();
                    timerTicker.pause();
                    DoorOpenSound()
                    stage1Audio.play();
                    
                    ObjectsMover();

                    isPuzzleMode = false;
                    movingTrue = false;

                }else{

                    $("#door-open-box-4").slideUp("slow").trigger("focus"); // Slide up current window
                    $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
                    PuzzleAudio.pause();
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


        //  //Doors
        //  if( $('#door1').length)
        //  {         
        //      DoorLogic($('#door1'), $('#div2'), "door-open-box-1", 0);
        //  }

        //  if( $('#door2').length)
        //  {  
        //      DoorLogic($('#door2'), $('#div2'), "door-open-box-2", 300);
        //  }

        //  if( $('#door3').length)
        //  {
        //      DoorLogic($('#door3'), $('#div2'), "door-open-box-3", 0);
        //  }

        //  if( $('#door4').length)
        //  {
        //      DoorLogic($('#door4'), $('#div2'), "door-open-box-4", 240);
        //  }

        //  if( $('#door5').length)
        //  {
        //      DoorLogic($('#door5'), $('#div2'), "door-open-box-3", 0);
        //  }

        //  if( $('#door6').length)
        //  {
        //      DoorLogic($('#door6'), $('#div2'), "door-open-box-2", 120);
        //  }

        //  if( $('#door7').length)
        //  {
        //      DoorLogic($('#door7'), $('#div2'), "door-open-box-4", 360);
        //  }

        //  if( $('#door8').length)
        //  {
        //      DoorLogic($('#door8'), $('#div2'), "door-open-box-3", 0);
        //  }

        //  if( $('#door9').length)
        //  {
        //      DoorLogic($('#door9'), $('#div2'), "door-open-box-2", 180);
        //  }

        //  if( $('#door10').length)
        //  {
        //      DoorLogic($('#door10'), $('#div2'), "door-open-box-2", 240);
        //  }

        //  if( $('#door11').length)
        //  {
        //      DoorLogic($('#door11'), $('#div2'), "door-open-box-4", 90);
        //  }
        

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

            if (type == "CoinType") {

                AddCoinPoint(ci);

            } else if (type == "DiamondType") {

                AddDiamondPoint(ci);
            }


            return true;

        }

    }

    window.setInterval(function () {

        $('.result').text(getpointscoin($('#diamond1'), $('#div2'), '#diamond1', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond2'), $('#div2'), '#diamond2', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond3'), $('#div2'), '#diamond3', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond4'), $('#div2'), '#diamond4', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond5'), $('#div2'), '#diamond5', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond6'), $('#div2'), '#diamond6', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond7'), $('#div2'), '#diamond7', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond8'), $('#div2'), '#diamond8', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond9'), $('#div2'), '#diamond9', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond10'), $('#div2'), '#diamond10', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond11'), $('#div2'), '#diamond11', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond12'), $('#div2'), '#diamond12', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond13'), $('#div2'), '#diamond13', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond14'), $('#div2'), '#diamond14', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond15'), $('#div2'), '#diamond15', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond16'), $('#div2'), '#diamond16', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond17'), $('#div2'), '#diamond17', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond18'), $('#div2'), '#diamond18', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond19'), $('#div2'), '#diamond19', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond20'), $('#div2'), '#diamond20', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond21'), $('#div2'), '#diamond21', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond22'), $('#div2'), '#diamond22', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond23'), $('#div2'), '#diamond23', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond24'), $('#div2'), '#diamond24', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond25'), $('#div2'), '#diamond25', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond26'), $('#div2'), '#diamond26', 'DiamondType'));



        $('.result').text(getpointscoin($('#diamond27'), $('#div2'), '#diamond27', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond27'), $('#div2'), '#diamond27', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond28'), $('#div2'), '#diamond28', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond29'), $('#div2'), '#diamond29', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond30'), $('#div2'), '#diamond30', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond31'), $('#div2'), '#diamond31', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond32'), $('#div2'), '#diamond32', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond33'), $('#div2'), '#diamond33', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond34'), $('#div2'), '#diamond34', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond35'), $('#div2'), '#diamond35', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond36'), $('#div2'), '#diamond36', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond37'), $('#div2'), '#diamond37', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond38'), $('#div2'), '#diamond38', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond39'), $('#div2'), '#diamond39', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond40'), $('#div2'), '#diamond40', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond41'), $('#div2'), '#diamond41', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond42'), $('#div2'), '#diamond42', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond43'), $('#div2'), '#diamond43', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond44'), $('#div2'), '#diamond44', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond45'), $('#div2'), '#diamond45', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond46'), $('#div2'), '#diamond46', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond47'), $('#div2'), '#diamond47', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond48'), $('#div2'), '#diamond48', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond49'), $('#div2'), '#diamond49', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond50'), $('#div2'), '#diamond50', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond51'), $('#div2'), '#diamond51', 'DiamondType'));
        $('.result').text(getpointscoin($('#diamond52'), $('#div2'), '#diamond52', 'DiamondType'));


        $('.result').text(getpointscoin($('#coin1'), $('#div2'), '#coin1', 'CoinType'));
        $('.result').text(getpointscoin($('#coin2'), $('#div2'), '#coin2', 'CoinType'));
        $('.result').text(getpointscoin($('#coin3'), $('#div2'), '#coin3', 'CoinType'));
        $('.result').text(getpointscoin($('#coin4'), $('#div2'), '#coin4', 'CoinType'));
        $('.result').text(getpointscoin($('#coin5'), $('#div2'), '#coin5', 'CoinType'));
        $('.result').text(getpointscoin($('#coin6'), $('#div2'), '#coin6', 'CoinType'));
        $('.result').text(getpointscoin($('#coin7'), $('#div2'), '#coin7', 'CoinType'));
        $('.result').text(getpointscoin($('#coin8'), $('#div2'), '#coin8', 'CoinType'));
        $('.result').text(getpointscoin($('#coin9'), $('#div2'), '#coin9', 'CoinType'));
        $('.result').text(getpointscoin($('#coin10'), $('#div2'), '#coin10', 'CoinType'));
        $('.result').text(getpointscoin($('#coin11'), $('#div2'), '#coin11', 'CoinType'));
        $('.result').text(getpointscoin($('#coin12'), $('#div2'), '#coin12', 'CoinType'));
        $('.result').text(getpointscoin($('#coin13'), $('#div2'), '#coin13', 'CoinType'));
        $('.result').text(getpointscoin($('#coin14'), $('#div2'), '#coin14', 'CoinType'));
        $('.result').text(getpointscoin($('#coin15'), $('#div2'), '#coin15', 'CoinType'));
        $('.result').text(getpointscoin($('#coin16'), $('#div2'), '#coin16', 'CoinType'));
        $('.result').text(getpointscoin($('#coin17'), $('#div2'), '#coin17', 'CoinType'));
        $('.result').text(getpointscoin($('#coin18'), $('#div2'), '#coin18', 'CoinType'));
        $('.result').text(getpointscoin($('#coin19'), $('#div2'), '#coin19', 'CoinType'));
        $('.result').text(getpointscoin($('#coin20'), $('#div2'), '#coin20', 'CoinType'));
        $('.result').text(getpointscoin($('#coin21'), $('#div2'), '#coin21', 'CoinType'));
        $('.result').text(getpointscoin($('#coin22'), $('#div2'), '#coin22', 'CoinType'));
        $('.result').text(getpointscoin($('#coin23'), $('#div2'), '#coin23', 'CoinType'));
        $('.result').text(getpointscoin($('#coin24'), $('#div2'), '#coin24', 'CoinType'));
        $('.result').text(getpointscoin($('#coin25'), $('#div2'), '#coin25', 'CoinType'));
        $('.result').text(getpointscoin($('#coin26'), $('#div2'), '#coin26', 'CoinType'));
        $('.result').text(getpointscoin($('#coin27'), $('#div2'), '#coin27', 'CoinType'));
        $('.result').text(getpointscoin($('#coin28'), $('#div2'), '#coin28', 'CoinType'));
        $('.result').text(getpointscoin($('#coin29'), $('#div2'), '#coin29', 'CoinType'));
        $('.result').text(getpointscoin($('#coin30'), $('#div2'), '#coin30', 'CoinType'));
        $('.result').text(getpointscoin($('#coin31'), $('#div2'), '#coin31', 'CoinType'));
        $('.result').text(getpointscoin($('#coin32'), $('#div2'), '#coin32', 'CoinType'));
        $('.result').text(getpointscoin($('#coin33'), $('#div2'), '#coin33', 'CoinType'));
        $('.result').text(getpointscoin($('#coin34'), $('#div2'), '#coin34', 'CoinType'));
        $('.result').text(getpointscoin($('#coin35'), $('#div2'), '#coin35', 'CoinType'));
        $('.result').text(getpointscoin($('#coin36'), $('#div2'), '#coin36', 'CoinType'));
        $('.result').text(getpointscoin($('#coin37'), $('#div2'), '#coin37', 'CoinType'));
        $('.result').text(getpointscoin($('#coin38'), $('#div2'), '#coin38', 'CoinType'));
        $('.result').text(getpointscoin($('#coin39'), $('#div2'), '#coin39', 'CoinType'));
        $('.result').text(getpointscoin($('#coin40'), $('#div2'), '#coin40', 'CoinType'));
        $('.result').text(getpointscoin($('#coin41'), $('#div2'), '#coin41', 'CoinType'));
        $('.result').text(getpointscoin($('#coin42'), $('#div2'), '#coin42', 'CoinType'));
        $('.result').text(getpointscoin($('#coin43'), $('#div2'), '#coin43', 'CoinType'));
        $('.result').text(getpointscoin($('#coin44'), $('#div2'), '#coin44', 'CoinType'));
        $('.result').text(getpointscoin($('#coin45'), $('#div2'), '#coin45', 'CoinType'));


        $('.result').text(getpointscoin($('#coin91'), $('#div2'), '#coin91', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin92'), $('#div2'), '#coin92', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin93'), $('#div2'), '#coin93', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin94'), $('#div2'), '#coin94', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin95'), $('#div2'), '#coin95', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin96'), $('#div2'), '#coin96', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin97'), $('#div2'), '#coin97', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin98'), $('#div2'), '#coin98', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin99'), $('#div2'), '#coin99', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin100'), $('#div2'), '#coin100', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin101'), $('#div2'), '#coin101', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin102'), $('#div2'), '#coin102', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin103'), $('#div2'), '#coin103', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin104'), $('#div2'), '#coin104', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin105'), $('#div2'), '#coin105', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin106'), $('#div2'), '#coin106', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin107'), $('#div2'), '#coin107', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin108'), $('#div2'), '#coin108', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin109'), $('#div2'), '#coin109', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin110'), $('#div2'), '#coin110', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin111'), $('#div2'), '#coin111', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin112'), $('#div2'), '#coin112', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin113'), $('#div2'), '#coin113', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin114'), $('#div2'), '#coin114', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin115'), $('#div2'), '#coin115', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin116'), $('#div2'), '#coin116', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin117'), $('#div2'), '#coin117', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin118'), $('#div2'), '#coin118', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin119'), $('#div2'), '#coin119', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin120'), $('#div2'), '#coin120', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin121'), $('#div2'), '#coin121', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin122'), $('#div2'), '#coin122', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin123'), $('#div2'), '#coin123', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin124'), $('#div2'), '#coin124', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin125'), $('#div2'), '#coin125', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin126'), $('#div2'), '#coin126', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin127'), $('#div2'), '#coin127', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin128'), $('#div2'), '#coin128', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin129'), $('#div2'), '#coin129', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin130'), $('#div2'), '#coin130', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin131'), $('#div2'), '#coin131', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin132'), $('#div2'), '#coin132', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin133'), $('#div2'), '#coin133', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin134'), $('#div2'), '#coin134', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin135'), $('#div2'), '#coin135', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin136'), $('#div2'), '#coin136', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin137'), $('#div2'), '#coin137', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin138'), $('#div2'), '#coin138', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin139'), $('#div2'), '#coin139', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin140'), $('#div2'), '#coin140', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin141'), $('#div2'), '#coin141', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin142'), $('#div2'), '#coin142', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin143'), $('#div2'), '#coin143', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin144'), $('#div2'), '#coin144', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin145'), $('#div2'), '#coin145', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin146'), $('#div2'), '#coin146', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin147'), $('#div2'), '#coin147', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin148'), $('#div2'), '#coin148', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin149'), $('#div2'), '#coin149', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin150'), $('#div2'), '#coin150', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin151'), $('#div2'), '#coin151', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin152'), $('#div2'), '#coin152', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin153'), $('#div2'), '#coin153', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin154'), $('#div2'), '#coin154', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin155'), $('#div2'), '#coin155', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin156'), $('#div2'), '#coin156', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin157'), $('#div2'), '#coin157', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin158'), $('#div2'), '#coin158', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin159'), $('#div2'), '#coin159', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin160'), $('#div2'), '#coin160', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin161'), $('#div2'), '#coin161', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin162'), $('#div2'), '#coin162', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin163'), $('#div2'), '#coin163', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin164'), $('#div2'), '#coin164', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin165'), $('#div2'), '#coin165', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin166'), $('#div2'), '#coin166', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin167'), $('#div2'), '#coin167', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin168'), $('#div2'), '#coin168', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin169'), $('#div2'), '#coin169', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin170'), $('#div2'), '#coin170', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin171'), $('#div2'), '#coin171', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin172'), $('#div2'), '#coin172', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin173'), $('#div2'), '#coin173', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin174'), $('#div2'), '#coin174', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin175'), $('#div2'), '#coin175', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin176'), $('#div2'), '#coin176', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin177'), $('#div2'), '#coin177', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin178'), $('#div2'), '#coin178', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin179'), $('#div2'), '#coin179', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin180'), $('#div2'), '#coin180', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin181'), $('#div2'), '#coin181', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin182'), $('#div2'), '#coin182', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin183'), $('#div2'), '#coin183', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin184'), $('#div2'), '#coin184', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin185'), $('#div2'), '#coin185', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin186'), $('#div2'), '#coin186', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin187'), $('#div2'), '#coin187', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin188'), $('#div2'), '#coin188', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin189'), $('#div2'), '#coin189', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin190'), $('#div2'), '#coin190', 'CoinType')); 


    }, 200);
});

