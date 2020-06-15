function required()
{
    var empt = document.forms["tick"]["quantity"].value;
    var field = document.forms["tick"]["date"].value;
    if(empt == "")
    {
        alert("Please choose amount");
        return false;
    }
    else if(field == "Select Date")
    {
        alert("Please select a date ");
        return false;
    }
    else
    {
        return true;
    }    
} 
function mandatory()
{
    var firstName = document.forms["details"]["firstname"].value;
    var lastName = document.forms["details"]["lastname"].value;
    var emailAddress = document.forms["details"]["email_address"].value;
    var paymentMethod = document.forms["details"]["payment"].value;
    if((firstName && lastName && emailAddress && paymentMethod) == "")
    {
        alert("Please fill all fields");
        return false;
    }
    return true
}