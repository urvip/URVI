function formvalidation (){
	var fname = document.request.fistname;
	var lname = document.request.lastname;
	var email = document.request.eaddress;
	var address = document.request.address;
	var pickup = document.request.pickup;
	var vtype = document.request.vtype;
	var vri = document.request.VRinfo;
	var duration = document.request.duration;
	//var sdate = document.request.;
	var tos = document.request.tosaggrement;



if(fname_validation(fname)) {  
	if(lname_validation(lname)) {  
		if(email_validation(email)) {  
			if(address_validation(address)) {   
				if(pickup_validation(pickup)) {  
					if(vtype_validation(vtype)) {  
						if(vri_validation(vri)) {  
							if(duration_validation(duration)) {  
								if (sdate_validation (sdate)){
									if (tos_validation (tos)){
										
									}
								}
							}  
						}   
					}  
				}   
			}  
		}  
	}  
}  
return false; 

}

function fname_validation(fname) {  
	var letters = /^[A-Za-z]+$/;
	var name_length = fname.value.length;  
	if (name_length > 0 && fname.value.match(letters)) {  
 
		return true;  
	}  
	
	alert("Please enter your First Name in alphabet ONLY.");  
	fname.focus();  
	return false;  
}  

function lname_validation(lname) {  
	var letters = /^[A-Za-z]+$/;
	var name_length = lname.value.length;  
	if (name_length > 0 && lname.value.match(letters)) {  
 
		return true;  
	}  
	
	alert("Please enter your Last Name in alphabet ONLY.");  
	lname.focus();  
	return false;  
}  

function email_validation(email) {  
	var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var mail_length = email.value.length;  
	if (mail_length > 0 && email.value.match(format)) {  
 
		return true;  
	}  
	
	alert("Invalid E-mail address");  
	email.focus();  
	return false;  
}  

function address_validation(address) { 
	var address_length = address.value.length;  
	if (address_length > 0 ) {  
 
		return true;  
	}  
	
	alert("Please enter your mailing address");  
	fname.focus();  
	return false;  
} 

function pickup_validation(pickup) {  
	if(pickup.value == "Default") {  
		alert('Select your pickup');  
		pickup.focus();  
		return false;  
	}  
	else {  
		return true;  
	}
}  

function vtype_validation (vtype){
	
    var radios = document.getElementsByName("vtype");
    var vehical_type = false;

    var i = 0;
    while (!vehical_type && i < radios.length) {
        if (radios[i].checked) {
			vehical_type = true;
			i++;        
		}
    }

    if (!vehical_type) {
		alert("Must check some option!");
	}
	
    return vehical_type;
}

function vri_validation(vri) { 
 
	var vehical_id = vri.value.length;  
	
	if (vehical_id != 6 ) {  
		alert("Please enter your Vehical Registration Information");  
		vri.focus();  
		return false;  
	}  
	
	return true;  
}  

function duration_validation(duration) {  
	if(duration.value == "Default") {  
		alert('Select the duration of your permit');  
		duration.focus();  
		return false;  
	}  
	else {  
		return true;  
	}
}

function sdate_validation (sdate){
	return true;
}

function tos_validation (tos){
	if (tos.checked){
		return true;
	}
	
	alert('You have to agree with the ToS to proceed your Booking');
	return false;
}



