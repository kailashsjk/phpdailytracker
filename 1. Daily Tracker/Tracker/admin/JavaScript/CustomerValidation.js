/*GroupName Validation*/

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	 
	
	
	if(document.getElementById("letters").value==""){
		document.getElementById("msg1").innerHTML="Please enter your GroupName";
        
        document.getElementById("submit").disabled=true;
    } 
	else if(elem.value.match(alphaExp)){
		document.getElementById("msg1").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}
	
	else  if(!(elem.value.match(alphaExp))){
		document.getElementById("msg1").innerHTML="Group Name must contain only Alphabets";
		document.getElementById("submit").disabled=true;
		elem.focus();
		return false;
	}
	
}


/*TaskName Validation*/
function taskName(){
	
	var alphaExp = /^[a-zA-Z]+$/;
	var elem=	document.getElementById('tlname');
	
	if(document.getElementById("tlname").value==""){
		document.getElementById("msg2").innerHTML="Please enter your TaskName";
        document.getElementById("submit").disabled=true;
    } 
	else if(elem.value.match(alphaExp)){
		document.getElementById("msg2").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}
	
	else  if(!(elem.value.match(alphaExp))){
		document.getElementById("msg2").innerHTML="Task Name must contain only Alphabets";
		document.getElementById("submit").disabled=true;
		elem.focus();
		return false;
	}
	
}
/*TaskDate Validation*/
function taskDate(){
	
	
	
	if(document.getElementById("demo1").value==""){
		document.getElementById("msg3").innerHTML="Please select or enter TaskDate";        
        document.getElementById("submit").disabled=true;
    } 

	
	else{
		document.getElementById("msg3").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}	
	
}

/*TaskStartTime Validation*/
function startTime(){
	
	
	var elem=	document.getElementById('taskStartTime');
	
	if(document.getElementById("taskStartTime").value==""){
		document.getElementById("msg4").innerHTML="Please select your StartTime";
        document.getElementById("submit").disabled=true;
    } 
	else {
		//document.getElementById("msg4").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}
	
	
}
/*TaskEndTime Validation*/
function endTime(){
	
	
	var elem=	document.getElementById('taskEndTime');
	
	if(document.getElementById("taskEndTime").value==""){
		document.getElementById("msg5").innerHTML="Please select your EndTime";
        document.getElementById("submit").disabled=true;
    } 
	else {
		document.getElementById("msg5").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}
	
	
}



/*MiddleName Validation*/




/*Name validation*/

function validateName(name) 
{
    var maintainplus = '';
    var numval = name.value
  if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\0-9!"£$%^&\-\)\(*_={};:'@#~,.Š\/<>+\""\?|`¬\]\[]/,'');
    name.value = maintainplus + curphonevar;
    var maintainplus = '';
    name.focus;
}









/*PhoneNumber*/


function validatephone(mobileno) 
{
    var maintainplus = '';
    var numval = mobileno.value
  if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\-\)\(*_={};:'@#~,.Š\/<>\" "\?|`¬\]\[]/,'');
    mobileno.value = maintainplus + curphonevar;
    var maintainplus = '';
    mobileno.focus;
}

function stdNum(){
	if(document.getElementById("tstdnum").value==""){
      alert("Please enter your StdNumber");
        
        document.getElementById("submit").disabled=true;
    } 

	else{
		document.getElementById("msg6").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}	
	
}

function phNum(){
	 if(document.getElementById("tpnum").value==""){
	       alert("Please enter your Phone Number");
	        
	        document.getElementById("submit").disabled=true;
	    } 
	
	else{
		document.getElementById("msg6").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}	
	
}




/* Mobile Number validation*/
function IsMobileNumber(txtMobId) {
	 
    var mob = /^[1-9]{1}[0-9]{9}$/;
 
    var txtMobile = document.getElementById(txtMobId);
    if(document.getElementById("txtMobId").value==""){
    	alert("Please enter your mobile number.");
    	document.getElementById("submit").disabled=true;
 
    }
 
    else if (mob.test(txtMobile.value) == false) {
 
    	document.getElementById("msg7").innerHTML="Please enter valid mobile number.(Not start with 0)";
    	document.getElementById("submit").disabled=true;
 
        txtMobile.focus();
 
        return false;
 
    }else{
    	document.getElementById("msg7").innerHTML="";
		document.getElementById("submit").disabled=false;		
    	 return true;
    	 
    	
    }
 
   
}


 
/*Current address validation*/
function curAddress(){
	if(document.getElementById("txtadd1").value==""){
       alert("Please enter your Current Address");
        
        document.getElementById("submit").disabled=true;
    } 
	
	else{
		document.getElementById("msg8").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}
	
	
}

/*Permanent address validation*/
function perAddress(){
	if(document.getElementById("txtcadd1").value==""){
       alert("Please enter your Permanent Address");
        
        document.getElementById("submit").disabled=true;
    } 
	
	else{
		document.getElementById("msg9").innerHTML="";
		document.getElementById("submit").disabled=false;		
		return true;
	}
	
	
}

 /*Address copy validation*/
 
 function copyIt() {
	 document.getElementById("txtcadd1").value = "";  // clear all fields in Current Address
	 document.getElementById("txtcadd2").value = "";
	 document.getElementById("txtcadd3").value = "";
	 if (document.getElementById("chk1").checked) {  // if the checkbox is checked
	 document.getElementById("txtcadd1").value = document.getElementById("txtadd1").value;  // copy Permanent Address fields to Current Address
	 document.getElementById("txtcadd2").value = document.getElementById("txtadd2").value;
	 document.getElementById("txtcadd3").value = document.getElementById("txtadd3").value;
	 }
	 }

 /*Pincode validation*/
 function pin(){
		
		
		if(document.getElementById("tpin").value==""){
	        alert("Please enter your Pincode");
	        
	        document.getElementById("submit").disabled=true;
	    } 
		else{
			document.getElementById("msg12").innerHTML="";
			document.getElementById("submit").disabled=false;		
			return true;
		}
		
		
		
	}
 
 /*Mail ID Validation*/
 function validateForm() {
		
	    var x = document.userRegFrm.txtEmailID.value;
	    var atpos = x.indexOf("@");
	    var dotpos = x.lastIndexOf(".");
	    
	    if(document.getElementById("temail").value==""){
	        alert("Please enter your email-ID");
	        
	        document.getElementById("submit").disabled=true;
	    } 
		
	    else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	    	 document.getElementById("msg13").innerHTML="Please enter valid email-ID as xyz@gmail.com";
	         
	         document.getElementById("submit").disabled=true;
	        return false;
	    }
	    else{
			document.getElementById("msg13").innerHTML="";
			document.getElementById("submit").disabled=false;		
			return true;
		}
	}
 
 /* Customer Income Validation*/
 function custIncome(){
		if(document.getElementById("tcustincome").value==""){
	       alert("Please enter your Income");
	        
	        document.getElementById("submit").disabled=true;
	    } 
		else if(document.getElementById("tcustincome").value>2500000){
			
			 document.getElementById("msg14").innerHTML="Your Income should not be more than 2500000";
		        
		     document.getElementById("submit").disabled=true;
			
		}
		else{
			document.getElementById("msg14").innerHTML="";
			document.getElementById("submit").disabled=false;		
			return true;
		}
		
		
	}
 
