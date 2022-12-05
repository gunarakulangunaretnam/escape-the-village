window.onload = function(){

    const urlParams = new URLSearchParams(window.location.search);
	const emailID = urlParams.get('emailid');

    const serverMessage = urlParams.get('ServerMessage');

    document.getElementById("emailPlaceHolder").innerHTML = "("+emailID+")";
    document.getElementById("emailbox").value = emailID;


    if(serverMessage == "OTPWrong"){

		document.getElementById("ServerMessage").style.display = 'block';
		document.getElementById("serverMessageHolder").innerHTML = "The OTP was wrong!!!";
		$("#ServerMessage").delay(6000).slideUp("slow");

	}
	

}