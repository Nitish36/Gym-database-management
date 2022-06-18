function validateForm() {

  //Filling Fields
  let x = document.forms["mygymForm"]["GymId"].value;
  let y = document.forms["mygymForm"]["FullName"].value;
  let z = document.forms["mygymForm"]["Age"].value;
  let a = document.forms["mygymForm"]["DateOfJoining"].value;
  let b = document.forms["mygymForm"]["Email"].value;
  let c = document.forms["mygymForm"]["PhoneNumber"].value;
  let d = document.forms["mygymForm"]["Gender"].value;
  if ((x == "") || (y == "") || (z == "") || (a == "") || (b == "") || (c == "") || (d == ""))
   {
    alert(" All Fields must be filled out");
    return false;
  }

  let name = document.forms["mygymForm"]["FullName"].value;
  if(name>=0 || name<=9)
  {
  	alert("Expected letters in FullName section");
  	return false;
  }

}