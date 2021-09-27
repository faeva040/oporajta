function valid()
{
    i=document.getElementById('uid').value;
    id=/^[a-z]{1}([a-z]|[A-Z]){2,20}[0-9]{1,11}$/;
    iflag=id.test(i);
    
    
    p=document.getElementById("pass").value;
    pass=/^([A-Z]|[a-z]|[@|*|!]|[0-9]){5,13}([@|*|!]|[0-9]){1,11}$/;
    pflag=pass.test(p);
    
    
    
    
    if(!iflag){
		  alert("Invalid ID.first letter must be small letter and must contain one number in the end");
        return false;
    
    }
    
    
    
    
    if(!pflag){
		  alert("Invalid Password");
        return false;
    
    }
    
    else{
        return true;
    }
    
}