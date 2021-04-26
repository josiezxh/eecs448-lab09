function CheckOut(event){
    var emailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(!(document.getElementById("frogC").valueAsNumber >= 0)|| !(document.getElementById("glueC").valueAsNumber >= 0) || !(document.getElementById("jarC").valueAsNumber >= 0))
    {
        event.preventDefault();
        alert('quantity inputs are negative or blank, please fix');
    }
    else if(!document.getElementById("username").value.match(emailFormat))
    {
        event.preventDefault();
        alert('username needs to be in correct format of name@domain.com');
    }
    else if(document.getElementById("pw").value == "")
    {
        event.preventDefault();
        alert('please submit a password');
    }
    else if(document.querySelector('input[type=radio]:checked') == null)
    {
        event.preventDefault();
        alert('please select a shipping option');
    }

}

