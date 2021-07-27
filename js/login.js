function checkpassword(){

	if(document.getElementById("regPass").value == document.getElementById("regPass2").value)
	{
		return true;
	}
	
	else
	{
		alert("passwords are missmatched");
		return false;
	}
}
