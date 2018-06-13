function validateForm() {
	
	
	
	var a = document.forms["myForm"]["name"].value;
	var b = document.forms["myForm"]["surname"].value;
	var c = document.forms["myForm"]["age"].value;
	var d = document.forms["myForm"]["userName"].value;
	var e = document.forms["myForm"]["password"].value;
	
    if (a == "") {
		
		// alert("Name must be filled out");
		
		//creat element to be added after vallidation
		var txt1 = document.createElement("p");  
		txt1.innerHTML = "You left some fields blank.";
		txt1.style.color = 'red';
		
		
		//Add element to page to indicate something wasn't filled out
		document.getElementById('info').before(txt1);
		
		//change color of form boxes to indicate missing fields
		document.getElementById('name').style.borderColor = 'red';
		
       
        //return false;
    }
	
	if (b == "") {
		
		//change color of form boxes to indicate missing fields
		document.getElementById('surname').style.borderColor = 'red';
		
       
        //return false;
    }
	
	if (c == "") {
		
		//change color of form boxes to indicate missing fields
		document.getElementById('age').style.borderColor = 'red';
		
       
        //return false;
    }
	
	if (d == "") {
		
		//change color of form boxes to indicate missing fields
		document.getElementById('userName').style.borderColor = 'red';
		
       
       // return false;
    }
	
	if (e == "") {
		
		//change color of form boxes to indicate missing fields
		document.getElementById('password').style.borderColor = 'red';
		
       
        return false;
    }
}

function DisplayFormValues(){
	
	var elem = document.getElementById('myForm').elements;
	
	for(var i = 0; i < elem.length; i++)
	{
		if (elem[i].type === "text" &&  elem[i].value === "")
		//alert("You left one field blank");
		document.getElementById(elem[i].name).style.borderColor = 'red';
		console.log(elem[i].name)
	    //return false;
	}
	
	for(var i = 0; i < elem.length; i++)
	{
		if (elem[i].type === "text" &&  elem[i].value === ""){
			
			var myEle = document.getElementById("validate_text");
			
			if(!myEle){
		
				//alert("You left one field blank");
				
				//creat element to be added after vallidation
				var txt1 = document.createElement("p");  
				txt1.setAttribute("id", "validate_text");
				txt1.innerHTML = "You left some fields blank.";
				txt1.style.color = 'red';
				
				
				//Add element to page to indicate something wasn't filled out
				document.getElementById('info').before(txt1);
				
			}
			
			return false;
		}
	}
	
	
	
	
}
