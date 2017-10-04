function formCheck (){
  var passWord = document.forms["myOrder"]["passWord"].value
  var shirtNum = document.forms["myOrder"]["shirtNum"].value
  var sweatNum = document.forms["myOrder"]["sweatNum"].value
  var hatNum = document.forms["myOrder"]["hatNum"].value
  var tShirt = document.forms["myOrder"]["tShirt"].checked
  var sweatShirt = document.forms["myOrder"]["sweatShirt"].checked
  var hat = document.forms["myOrder"]["hat"].checked
  if (passWord == ""){
    alert("Passwod must be filled out")
    return false
  }

  else if (tShirt == true && shirtNum <= 0){
    alert ("must enter quantity of shirts")
    return false
  }

  else if (sweatShirt == true && sweatNum <= 0){
    alert ("must enter quantity of sweat shirts")
    return false
  }

  else if (hat == true && hatNum <= 0){
    alert ("must enter quantity of hats")
    return false
  } 
  else if ( document.forms["myOrder"]["7-day"].checked == false &&  document.forms["myOrder"]["3-day"].checked == false &&  document.forms["myOrder"]["overnight"].checked == false){
    alert ("must pick a shipping option")
    return false
  }


}
