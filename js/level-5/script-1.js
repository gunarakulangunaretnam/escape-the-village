
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

          
            //console.log($div1.attr("id"))
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

                //console.log($div1.attr("id"))
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
        const responseData = await response.text(); 
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

        // if( $("#door1").length)  DoorLogic($("#door1"), $("#div2"), "door-open-box-2", 120); 
        // if( $("#door2").length)  DoorLogic($("#door2"), $("#div2"), "door-open-box-1", 0); 
        // if( $("#door3").length)  DoorLogic($("#door3"), $("#div2"), "door-open-box-3", 0); 
        // if( $("#door4").length)  DoorLogic($("#door4"), $("#div2"), "door-open-box-2", 180); 
        // if( $("#door5").length)  DoorLogic($("#door5"), $("#div2"), "door-open-box-4", 240); 
        // if( $("#door6").length)  DoorLogic($("#door6"), $("#div2"), "door-open-box-3", 0); 
        // if( $("#door7").length)  DoorLogic($("#door7"), $("#div2"), "door-open-box-1", 0); 
        // if( $("#door8").length)  DoorLogic($("#door8"), $("#div2"), "door-open-box-2", 240); 
        // if( $("#door9").length)  DoorLogic($("#door9"), $("#div2"), "door-open-box-1", 0); 
        // if( $("#door10").length)  DoorLogic($("#door10"), $("#div2"), "door-open-box-1", 0); 
        // if( $("#door11").length)  DoorLogic($("#door11"), $("#div2"), "door-open-box-3", 0); 
        // if( $("#door12").length)  DoorLogic($("#door12"), $("#div2"), "door-open-box-4", 120); 
        // if( $("#door13").length)  DoorLogic($("#door13"), $("#div2"), "door-open-box-4", 80); 
        // if( $("#door14").length)  DoorLogic($("#door14"), $("#div2"), "door-open-box-3", 0); 
        // if( $("#door15").length)  DoorLogic($("#door15"), $("#div2"), "door-open-box-2", 60); 


        LevelUp($('#flag'), $('#div2'));

        $('.result').text(collision($('#enm1'), $('#div2'))) 
        $('.result').text(collision($('#enm2'), $('#div2'))) 
        $('.result').text(collision($('#enm3'), $('#div2'))) 
        $('.result').text(collision($('#enm4'), $('#div2'))) 
        $('.result').text(collision($('#enm5'), $('#div2'))) 
        $('.result').text(collision($('#enm6'), $('#div2'))) 
        $('.result').text(collision($('#enm7'), $('#div2'))) 
        $('.result').text(collision($('#enm8'), $('#div2'))) 
        $('.result').text(collision($('#enm9'), $('#div2'))) 
        $('.result').text(collision($('#enm10'), $('#div2'))) 
        $('.result').text(collision($('#enm11'), $('#div2'))) 
        $('.result').text(collision($('#enm12'), $('#div2'))) 
        $('.result').text(collision($('#enm13'), $('#div2'))) 
        $('.result').text(collision($('#enm14'), $('#div2'))) 
        $('.result').text(collision($('#enm15'), $('#div2'))) 
        $('.result').text(collision($('#enm16'), $('#div2'))) 
        $('.result').text(collision($('#enm17'), $('#div2'))) 
        $('.result').text(collision($('#enm18'), $('#div2'))) 
        $('.result').text(collision($('#enm19'), $('#div2'))) 
        $('.result').text(collision($('#enm20'), $('#div2'))) 

        


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
        $('.result').text(getpointscoin($('#coin46'), $('#div2'), '#coin46', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin47'), $('#div2'), '#coin47', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin48'), $('#div2'), '#coin48', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin49'), $('#div2'), '#coin49', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin50'), $('#div2'), '#coin50', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin51'), $('#div2'), '#coin51', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin52'), $('#div2'), '#coin52', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin53'), $('#div2'), '#coin53', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin54'), $('#div2'), '#coin54', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin55'), $('#div2'), '#coin55', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin56'), $('#div2'), '#coin56', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin57'), $('#div2'), '#coin57', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin58'), $('#div2'), '#coin58', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin59'), $('#div2'), '#coin59', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin60'), $('#div2'), '#coin60', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin61'), $('#div2'), '#coin61', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin62'), $('#div2'), '#coin62', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin63'), $('#div2'), '#coin63', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin64'), $('#div2'), '#coin64', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin65'), $('#div2'), '#coin65', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin66'), $('#div2'), '#coin66', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin67'), $('#div2'), '#coin67', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin68'), $('#div2'), '#coin68', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin69'), $('#div2'), '#coin69', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin70'), $('#div2'), '#coin70', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin71'), $('#div2'), '#coin71', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin72'), $('#div2'), '#coin72', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin73'), $('#div2'), '#coin73', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin74'), $('#div2'), '#coin74', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin75'), $('#div2'), '#coin75', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin76'), $('#div2'), '#coin76', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin77'), $('#div2'), '#coin77', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin78'), $('#div2'), '#coin78', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin79'), $('#div2'), '#coin79', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin80'), $('#div2'), '#coin80', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin81'), $('#div2'), '#coin81', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin82'), $('#div2'), '#coin82', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin83'), $('#div2'), '#coin83', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin84'), $('#div2'), '#coin84', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin85'), $('#div2'), '#coin85', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin86'), $('#div2'), '#coin86', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin87'), $('#div2'), '#coin87', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin88'), $('#div2'), '#coin88', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin89'), $('#div2'), '#coin89', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin90'), $('#div2'), '#coin90', 'CoinType'));  
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
        $('.result').text(getpointscoin($('#coin191'), $('#div2'), '#coin191', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin192'), $('#div2'), '#coin192', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin193'), $('#div2'), '#coin193', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin194'), $('#div2'), '#coin194', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin195'), $('#div2'), '#coin195', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin196'), $('#div2'), '#coin196', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin197'), $('#div2'), '#coin197', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin198'), $('#div2'), '#coin198', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin199'), $('#div2'), '#coin199', 'CoinType'));  
        $('.result').text(getpointscoin($('#coin200'), $('#div2'), '#coin200', 'CoinType'));  
        
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
        $('.result').text(getpointscoin($('#diamond53'), $('#div2'), '#diamond53', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond54'), $('#div2'), '#diamond54', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond55'), $('#div2'), '#diamond55', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond56'), $('#div2'), '#diamond56', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond57'), $('#div2'), '#diamond57', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond58'), $('#div2'), '#diamond58', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond59'), $('#div2'), '#diamond59', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond60'), $('#div2'), '#diamond60', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond61'), $('#div2'), '#diamond61', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond62'), $('#div2'), '#diamond62', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond63'), $('#div2'), '#diamond63', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond64'), $('#div2'), '#diamond64', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond65'), $('#div2'), '#diamond65', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond66'), $('#div2'), '#diamond66', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond67'), $('#div2'), '#diamond67', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond68'), $('#div2'), '#diamond68', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond69'), $('#div2'), '#diamond69', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond70'), $('#div2'), '#diamond70', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond71'), $('#div2'), '#diamond71', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond72'), $('#div2'), '#diamond72', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond73'), $('#div2'), '#diamond73', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond74'), $('#div2'), '#diamond74', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond75'), $('#div2'), '#diamond75', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond76'), $('#div2'), '#diamond76', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond77'), $('#div2'), '#diamond77', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond78'), $('#div2'), '#diamond78', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond79'), $('#div2'), '#diamond79', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond80'), $('#div2'), '#diamond80', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond81'), $('#div2'), '#diamond81', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond82'), $('#div2'), '#diamond82', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond83'), $('#div2'), '#diamond83', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond84'), $('#div2'), '#diamond84', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond85'), $('#div2'), '#diamond85', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond86'), $('#div2'), '#diamond86', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond87'), $('#div2'), '#diamond87', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond88'), $('#div2'), '#diamond88', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond89'), $('#div2'), '#diamond89', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond90'), $('#div2'), '#diamond90', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond91'), $('#div2'), '#diamond91', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond92'), $('#div2'), '#diamond92', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond93'), $('#div2'), '#diamond93', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond94'), $('#div2'), '#diamond94', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond95'), $('#div2'), '#diamond95', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond96'), $('#div2'), '#diamond96', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond97'), $('#div2'), '#diamond97', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond98'), $('#div2'), '#diamond98', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond99'), $('#div2'), '#diamond99', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond100'), $('#div2'), '#diamond100', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond101'), $('#div2'), '#diamond101', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond102'), $('#div2'), '#diamond102', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond103'), $('#div2'), '#diamond103', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond104'), $('#div2'), '#diamond104', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond105'), $('#div2'), '#diamond105', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond106'), $('#div2'), '#diamond106', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond107'), $('#div2'), '#diamond107', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond108'), $('#div2'), '#diamond108', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond109'), $('#div2'), '#diamond109', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond110'), $('#div2'), '#diamond110', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond111'), $('#div2'), '#diamond111', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond112'), $('#div2'), '#diamond112', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond113'), $('#div2'), '#diamond113', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond114'), $('#div2'), '#diamond114', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond115'), $('#div2'), '#diamond115', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond116'), $('#div2'), '#diamond116', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond117'), $('#div2'), '#diamond117', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond118'), $('#div2'), '#diamond118', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond119'), $('#div2'), '#diamond119', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond120'), $('#div2'), '#diamond120', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond121'), $('#div2'), '#diamond121', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond122'), $('#div2'), '#diamond122', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond123'), $('#div2'), '#diamond123', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond124'), $('#div2'), '#diamond124', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond125'), $('#div2'), '#diamond125', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond126'), $('#div2'), '#diamond126', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond127'), $('#div2'), '#diamond127', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond128'), $('#div2'), '#diamond128', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond129'), $('#div2'), '#diamond129', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond130'), $('#div2'), '#diamond130', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond131'), $('#div2'), '#diamond131', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond132'), $('#div2'), '#diamond132', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond133'), $('#div2'), '#diamond133', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond134'), $('#div2'), '#diamond134', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond135'), $('#div2'), '#diamond135', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond136'), $('#div2'), '#diamond136', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond137'), $('#div2'), '#diamond137', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond138'), $('#div2'), '#diamond138', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond139'), $('#div2'), '#diamond139', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond140'), $('#div2'), '#diamond140', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond141'), $('#div2'), '#diamond141', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond142'), $('#div2'), '#diamond142', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond143'), $('#div2'), '#diamond143', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond144'), $('#div2'), '#diamond144', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond145'), $('#div2'), '#diamond145', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond146'), $('#div2'), '#diamond146', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond147'), $('#div2'), '#diamond147', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond148'), $('#div2'), '#diamond148', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond149'), $('#div2'), '#diamond149', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond150'), $('#div2'), '#diamond150', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond151'), $('#div2'), '#diamond151', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond152'), $('#div2'), '#diamond152', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond153'), $('#div2'), '#diamond153', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond154'), $('#div2'), '#diamond154', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond155'), $('#div2'), '#diamond155', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond156'), $('#div2'), '#diamond156', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond157'), $('#div2'), '#diamond157', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond158'), $('#div2'), '#diamond158', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond159'), $('#div2'), '#diamond159', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond160'), $('#div2'), '#diamond160', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond161'), $('#div2'), '#diamond161', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond162'), $('#div2'), '#diamond162', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond163'), $('#div2'), '#diamond163', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond164'), $('#div2'), '#diamond164', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond165'), $('#div2'), '#diamond165', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond166'), $('#div2'), '#diamond166', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond167'), $('#div2'), '#diamond167', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond168'), $('#div2'), '#diamond168', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond169'), $('#div2'), '#diamond169', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond170'), $('#div2'), '#diamond170', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond171'), $('#div2'), '#diamond171', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond172'), $('#div2'), '#diamond172', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond173'), $('#div2'), '#diamond173', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond174'), $('#div2'), '#diamond174', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond175'), $('#div2'), '#diamond175', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond176'), $('#div2'), '#diamond176', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond177'), $('#div2'), '#diamond177', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond178'), $('#div2'), '#diamond178', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond179'), $('#div2'), '#diamond179', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond180'), $('#div2'), '#diamond180', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond181'), $('#div2'), '#diamond181', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond182'), $('#div2'), '#diamond182', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond183'), $('#div2'), '#diamond183', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond184'), $('#div2'), '#diamond184', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond185'), $('#div2'), '#diamond185', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond186'), $('#div2'), '#diamond186', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond187'), $('#div2'), '#diamond187', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond188'), $('#div2'), '#diamond188', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond189'), $('#div2'), '#diamond189', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond190'), $('#div2'), '#diamond190', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond191'), $('#div2'), '#diamond191', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond192'), $('#div2'), '#diamond192', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond193'), $('#div2'), '#diamond193', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond194'), $('#div2'), '#diamond194', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond195'), $('#div2'), '#diamond195', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond196'), $('#div2'), '#diamond196', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond197'), $('#div2'), '#diamond197', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond198'), $('#div2'), '#diamond198', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond199'), $('#div2'), '#diamond199', 'DiamondType')); 
        $('.result').text(getpointscoin($('#diamond200'), $('#div2'), '#diamond200', 'DiamondType')); 
        
        

    }, 200);
});

