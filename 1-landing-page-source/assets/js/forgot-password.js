window.onload = function(){

	const urlParams = new URLSearchParams(window.location.search);
	const pageType = urlParams.get('pagetype');
    const ServerMessage = urlParams.get('ServerMessage');

	const serverMessage = "";

    if(pageType == "page1"){

        document.getElementById('page2').classList.remove('is-active');
		document.getElementById('page1').classList.add('is-active');
    }else if(pageType == "page2"){

        document.getElementById('page1').classList.remove('is-active');
		document.getElementById('page2').classList.add('is-active');
    }

    if(ServerMessage == "NOTFOUND"){

        document.getElementById("headerText").innerText = "Failed to Recover!!!";
        document.getElementById("bodyText").innerText = "This email address is not registered in our platform.";
    
    }else if(ServerMessage == "FOUND"){

        document.getElementById("headerText").innerText = "Sent Successfully!!!";
        document.getElementById("bodyText").innerHTML = "The password was sent to your email, <br> please check it out!!!";
    
        document.getElementById("headerText").style.color = "green";
        document.getElementById("bodyText").style.color = "green";
    }

}