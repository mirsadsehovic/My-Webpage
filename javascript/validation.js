function validateFormBas() 
				{
				    var userName = document.forms['myForm']['fromName'].value;
				    var userMail = document.forms['myForm']['fromMail'].value;
				    var userCV = document.forms['myForm']['userCV'].value;
				    var userBrev = document.forms['myForm']['userBrev'].value;
				    var selectedCV = document.forms['myForm']['selectedCV'].value;
				  
				    if (userName == null || userName == '') {
				        alert('Du m�ste fylla i namn');
				        return false;
				    }
				    
				    if (userMail == null || userMail == '') {
				    	userName.addValidation("Please enter email");
				        alert('Du m�ste fylla din e-post');
				        return false;
				    }
				    
				     if (customerMail == null || customerMail == '') {
				        
				        alert('Du m�ste fylla din e-post');
				        return false;
				    }
				    if (userCV == null || userCV == '') {
				        alert('Du har inte bifogat CV');
				        return false;
				    }
					if (userBrev == null || userBrev == '' ) {
				        alert('Du har bifogat personligt brev');
				        return false;
				    }
				
				}
				
				function validateUnikForm() 
				{
				    var custName = document.forms['unikForm']['custumerName'].value;
				    var custMail = document.forms['unikForm']['customerMail'].value;
				    var custCV = document.forms['unikForm']['customerCV'].value;
				    var custBrev = document.forms['unikForm']['customerLetter'].value;
			        var custWish = document.forms['unikForm']['customerWish'].value;
				   
				    if (custName == null || custName == '') {
				        alert('Du m�ste fylla i namn');
				        return false;
				    }
	
				    if (custMail == null || custMail == '') {
				        alert('Du m�ste fylla din e-post');
				        return false;
				    }
				    if (custCV == null || custCV == '') {
				        alert('Du har inte bifogat CV');
				        return false;
				    }
					if (custBrev == null || custBrev == '' ) {
				        alert('Du har inte bifogat personligt brev');
				        return false;
				    }
				    if (custWish == null || custWish == '' ) {
				        alert('Ange �nskem�l alternativt inget �nskem�l');
				        return false;
				    }
				
				}
				
			function validateContactForm() 
				{
				  
				    var contMail = document.forms['contForm']['name'].value;
				    var contContent = document.forms['contForm']['content'].value;
				    var contSubj = document.forms['contForm']['subject'].value;
				   
				    if (contMail == null || contMail == '') {
				        alert('Du m�ste ange din e-post');
				        return false;
				    }
				    
				    
				    if (contContent == null || contContent == '') {
				        alert('Du m�ste skriva ett meddelande');
				        return false;
				    }
				    
				    if (contSubj == null || contSubj == '') {
				        alert('Du m�ste ange ett �mne');
				        return false;
				    }
				
				}
