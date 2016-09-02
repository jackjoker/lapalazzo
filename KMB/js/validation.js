function partnership(){
	
	
if(document.formname.name.value == ""){
alert("Please Enter Your Name!");
document.formname.name.focus();
return false;
}

else if(document.formname.company.value == ""){
alert("Please Enter Your Company Name!");
document.formname.company.focus();
return false;
}

else if(document.formname.email.value == ""){
alert("Please enter the Email!");
document.formname.email.focus();
return false;
}
else if(document.formname.email.value.search(/^[a-zA-Z0-9_\.]+@[a-zA-Z0-9_\.]+\.[a-zA-Z0-9_\.]+$/i) == -1){
alert("Please enter the valid Email!");
document.formname.email.focus();
return false;
}

else if(document.formname.information.value == ""){
alert("Please Enter Your Information!");
document.formname.information.focus();
return false;
}

else if(document.formname.uploaded_file.value == ""){
alert("Please Upload!");
document.formname.uploaded_file.focus();
return false;
}


return true;
}