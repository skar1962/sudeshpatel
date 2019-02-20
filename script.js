window.onload = function() {
// $(function() {
	// start up code goes here
   	// alert("We are in the jQuery function!");  
	$('.alert').alert()
	// myPlatform = platformInfo() ;
}

function displayForPlatform() {
	if (myPlatform == "iPad") 
		{
			myWindow=window.open("mailto:"+myMailRecepient+"?subject="+mySubject+"&body="+myMailBody,"mailWindow");
			myWindow.close();
			
		}
	else if (myPlatform == "iPhone") 
		{
			alert("On an iPhone, please open your email app and send a mail to "+myMailRecepient);
		}
	else
		{ 
			myWindow=window.open("mailto:"+myMailRecepient+"?subject="+mySubject+"&body="+myMailBody,"_self");
		}
}


function platformInfo() {
	
	var myPlatform = navigator.platform;

	alert("here");
	var txt = "";
	txt += "Browser CodeName: " + navigator.appCodeName + "-----";
	txt += "Browser Name: " + navigator.appName + "-----";
	txt += "Browser Version: " + navigator.appVersion + "-----";
	txt += "Cookies Enabled: " + navigator.cookieEnabled + "-----";
	txt += "Browser Language: " + navigator.language + "-----";
	txt += "Browser Online: " + navigator.onLine + "-----";
	txt += "Platform: " + navigator.platform + "-----";
	txt += "User-agent header: " + navigator.userAgent + "-----";
	alert(txt);
	
	return myPlatform;
}