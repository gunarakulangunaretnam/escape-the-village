
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

                //console.log($div1.attr("id"))
                //DoorOpenPuzzleFunction($div1, doortype, TimeDuration);
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

        LevelUp($('#flag'), $('#div2'));

        $('.result').text(collision($('#water-whole-1'), $('#div2'))) 
        $('.result').text(collision($('#water-whole-2'), $('#div2'))) 
        $('.result').text(collision($('#water-whole-3'), $('#div2'))) 
        $('.result').text(collision($('#water-whole-4'), $('#div2'))) 
        $('.result').text(collision($('#water-whole-5'), $('#div2'))) 


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

