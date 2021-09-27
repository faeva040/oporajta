function regvalid(){
    
    i=document.getElementById("uid").value;
    id=/^([a-z]){1,5}([A-Z]|[a-z]){3,12}[0-9]{1,3}$/;
    iflag=id.test(i);
    
    
     p=document.getElementById("pass").value;
    pass=/^([A-Z]|[a-z]|[@|*|!]|[0-9]){5,13}([@|*|!]|[0-9]){1,2}$/;
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


