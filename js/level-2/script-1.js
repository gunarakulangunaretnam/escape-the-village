
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

        //Flying Birds on High
        //$('.result').text(collision($('#skybirds-enm1'), $('#div2')));
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
        


        LevelUp($('#flag'), $('#div2'));

        if( $("#door1").length)  DoorLogic($("#door1"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door2").length)  DoorLogic($("#door2"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door3").length)  DoorLogic($("#door3"), $("#div2"), "door-open-box-3", 0); 
        if( $("#door4").length)  DoorLogic($("#door4"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door5").length)  DoorLogic($("#door5"), $("#div2"), "door-open-box-4", 120); 
        if( $("#door6").length)  DoorLogic($("#door6"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door7").length)  DoorLogic($("#door7"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door8").length)  DoorLogic($("#door8"), $("#div2"), "door-open-box-4", 340); 
        if( $("#door9").length)  DoorLogic($("#door9"), $("#div2"), "door-open-box-4", 240); 
        if( $("#door10").length)  DoorLogic($("#door10"), $("#div2"), "door-open-box-4", 300); 
        if( $("#door11").length)  DoorLogic($("#door11"), $("#div2"), "door-open-box-2", 120); 
        if( $("#door12").length)  DoorLogic($("#door12"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door13").length)  DoorLogic($("#door13"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door14").length)  DoorLogic($("#door14"), $("#div2"), "door-open-box-2", 120); 
        if( $("#door15").length)  DoorLogic($("#door15"), $("#div2"), "door-open-box-4", 240); 
        if( $("#door16").length)  DoorLogic($("#door16"), $("#div2"), "door-open-box-4", 300); 
        if( $("#door17").length)  DoorLogic($("#door17"), $("#div2"), "door-open-box-2", 120); 
        if( $("#door18").length)  DoorLogic($("#door18"), $("#div2"), "door-open-box-1", 0); 
        if( $("#door19").length)  DoorLogic($("#door19"), $("#div2"), "door-open-box-2", 120); 
        if( $("#door20").length)  DoorLogic($("#door20"), $("#div2"), "door-open-box-4", 360); 
        if( $("#door21").length)  DoorLogic($("#door21"), $("#div2"), "door-open-box-3", 0); 
        if( $("#door22").length)  DoorLogic($("#door22"), $("#div2"), "door-open-box-2", 120); 
        if( $("#door23").length)  DoorLogic($("#door23"), $("#div2"), "door-open-box-4", 120); 
        if( $("#door24").length)  DoorLogic($("#door24"), $("#div2"), "door-open-box-2", 180); 
        if( $("#door25").length)  DoorLogic($("#door25"), $("#div2"), "door-open-box-2", 240); 
        
        

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
        $('.result').text(getpointscoin($('#coin201'), $('#div2'), '#coin201', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin202'), $('#div2'), '#coin202', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin203'), $('#div2'), '#coin203', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin204'), $('#div2'), '#coin204', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin205'), $('#div2'), '#coin205', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin206'), $('#div2'), '#coin206', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin207'), $('#div2'), '#coin207', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin208'), $('#div2'), '#coin208', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin209'), $('#div2'), '#coin209', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin210'), $('#div2'), '#coin210', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin211'), $('#div2'), '#coin211', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin212'), $('#div2'), '#coin212', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin213'), $('#div2'), '#coin213', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin214'), $('#div2'), '#coin214', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin215'), $('#div2'), '#coin215', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin216'), $('#div2'), '#coin216', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin217'), $('#div2'), '#coin217', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin218'), $('#div2'), '#coin218', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin219'), $('#div2'), '#coin219', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin220'), $('#div2'), '#coin220', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin221'), $('#div2'), '#coin221', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin222'), $('#div2'), '#coin222', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin223'), $('#div2'), '#coin223', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin224'), $('#div2'), '#coin224', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin225'), $('#div2'), '#coin225', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin226'), $('#div2'), '#coin226', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin227'), $('#div2'), '#coin227', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin228'), $('#div2'), '#coin228', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin229'), $('#div2'), '#coin229', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin230'), $('#div2'), '#coin230', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin231'), $('#div2'), '#coin231', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin232'), $('#div2'), '#coin232', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin233'), $('#div2'), '#coin233', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin234'), $('#div2'), '#coin234', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin235'), $('#div2'), '#coin235', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin236'), $('#div2'), '#coin236', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin237'), $('#div2'), '#coin237', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin238'), $('#div2'), '#coin238', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin239'), $('#div2'), '#coin239', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin240'), $('#div2'), '#coin240', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin241'), $('#div2'), '#coin241', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin242'), $('#div2'), '#coin242', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin243'), $('#div2'), '#coin243', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin244'), $('#div2'), '#coin244', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin245'), $('#div2'), '#coin245', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin246'), $('#div2'), '#coin246', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin247'), $('#div2'), '#coin247', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin248'), $('#div2'), '#coin248', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin249'), $('#div2'), '#coin249', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin250'), $('#div2'), '#coin250', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin251'), $('#div2'), '#coin251', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin252'), $('#div2'), '#coin252', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin253'), $('#div2'), '#coin253', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin254'), $('#div2'), '#coin254', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin255'), $('#div2'), '#coin255', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin256'), $('#div2'), '#coin256', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin257'), $('#div2'), '#coin257', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin258'), $('#div2'), '#coin258', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin259'), $('#div2'), '#coin259', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin260'), $('#div2'), '#coin260', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin261'), $('#div2'), '#coin261', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin262'), $('#div2'), '#coin262', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin263'), $('#div2'), '#coin263', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin264'), $('#div2'), '#coin264', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin265'), $('#div2'), '#coin265', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin266'), $('#div2'), '#coin266', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin267'), $('#div2'), '#coin267', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin268'), $('#div2'), '#coin268', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin269'), $('#div2'), '#coin269', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin270'), $('#div2'), '#coin270', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin271'), $('#div2'), '#coin271', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin272'), $('#div2'), '#coin272', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin273'), $('#div2'), '#coin273', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin274'), $('#div2'), '#coin274', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin275'), $('#div2'), '#coin275', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin276'), $('#div2'), '#coin276', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin277'), $('#div2'), '#coin277', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin278'), $('#div2'), '#coin278', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin279'), $('#div2'), '#coin279', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin280'), $('#div2'), '#coin280', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin281'), $('#div2'), '#coin281', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin282'), $('#div2'), '#coin282', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin283'), $('#div2'), '#coin283', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin284'), $('#div2'), '#coin284', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin285'), $('#div2'), '#coin285', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin286'), $('#div2'), '#coin286', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin287'), $('#div2'), '#coin287', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin288'), $('#div2'), '#coin288', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin289'), $('#div2'), '#coin289', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin290'), $('#div2'), '#coin290', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin291'), $('#div2'), '#coin291', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin292'), $('#div2'), '#coin292', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin293'), $('#div2'), '#coin293', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin294'), $('#div2'), '#coin294', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin295'), $('#div2'), '#coin295', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin296'), $('#div2'), '#coin296', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin297'), $('#div2'), '#coin297', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin298'), $('#div2'), '#coin298', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin299'), $('#div2'), '#coin299', 'CoinType')); 
        $('.result').text(getpointscoin($('#coin300'), $('#div2'), '#coin300', 'CoinType')); 
        

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

    }, 200);
});

