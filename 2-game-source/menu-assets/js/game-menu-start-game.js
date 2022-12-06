window.onload = function(){

    document.getElementById("level-1-box").onclick = function(){

        var classVal = document.getElementById("level-1-subbox").className;
       
        if(classVal == "itemunlocked"){

            window.location.href = "level-1.php";
        }

        
    }

    document.getElementById("level-2-box").onclick = function(){

        var classVal = document.getElementById("level-2-subbox").className;
       
        if(classVal == "itemunlocked"){

            window.location.href = "level-2.php";
        }

    }

    document.getElementById("level-3-box").onclick = function(){

        var classVal = document.getElementById("level-3-subbox").className;
       
        if(classVal == "itemunlocked"){

            window.location.href = "level-3.php";
        }

    }

    document.getElementById("level-4-box").onclick = function(){
       
        var classVal = document.getElementById("level-4-subbox").className;
       
        if(classVal == "itemunlocked"){

            window.location.href = "level-4.php";
        }

    }

    document.getElementById("level-5-box").onclick = function(){
        
        var classVal = document.getElementById("level-5-subbox").className;
       
        if(classVal == "itemunlocked"){

            window.location.href = "level-5.php";
        }

    }

    document.getElementById("level-6-box").onclick = function(){
        
        var classVal = document.getElementById("level-6-subbox").className;
       
        if(classVal == "itemunlocked"){

            window.location.href = "level-6.php";
        }

    }

}