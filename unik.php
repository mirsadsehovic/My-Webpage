<?php
class Unik
{
	public $name = "custumerName";
	public $custMail = "customerMail";
	public $wishContent = "customerWish";
	public $customerCV = 'customerCV';
	public $customerLetter = 'customerLetter';
	public $customerPhoto = "customerPhoto";	 
	public $sendUnikCVOrder = "sendUnikCVOrder";
	public $pageID = "page";
	
	public function UnikView()
	{
		
		echo 
		" 
			<div class ='largeImageContainer7'>
					
			</div>
			
			<div class='instructionHeader'>
				<h1>CVsmedjans UNIK CV</h1>
			</div>	
			
			<div class = 'info'>
				
				<section>
				<p>CVsmedjan erbjuder dig en hel del variation när du beställer ett UNIKT CV. Och inget jobb är för stort för CVsmedjan.
				När du beställer UNIK CV så har du möjligheten att påverka utseendet på ditt nya CV. Det är viktigt för oss att du ska vara nöjd, och att
				vem du är reflekteras i ditt nya CV.<br><br>
				
				En beställning gör du genom att fylla i formuläret i slutet på sidan.<br><br><br>
				<b>Pris: 500kr<br>
			   Donation: 30kr</b></p>	
			    </section>
			</div>
			
			<br><br><br>
		
			
			<div class='instructionHeader'>
				<h1>Exempel på symboler</h1>
			</div>	
			
			<div class = 'info'>
			    <section>
				<p>Vill du ha symboler som matchar din expertis? Vill du presenter din kunskapsnivå genom snygga pajdiagram? Eller vill du kanske bara ha ett stilrent CV?
				Du kan vid beställning beskriva vad du önskar att ditt cv ska innehålla</p>
				</section>
			
			</div>
			
			<div class ='largeImageContainer6'></div>
			
			<div class='instructionHeader'>
				<h1>Hur kan ett UNIKT CV se ut</h1>
			</div>	
			
			
		
			
			<div class ='unikCVcontainer'>
    			<div class = 'imagesHolder2'>
        			
        			<div class = 'box2'>
        				<div class ='imageBox'>	
        					<img class = 'fancybox' src='pictures/UnikCV.png' alt='Bas1'/>
        				</div>		
        			</div>
        			
        			<div class = 'box2'>
        				<div class ='imageBox'>	
        					<img class = 'fancybox' src='pictures/UnikCV3_Stor.png' alt='Bas1'/>
        								
        				</div>		
        			</div>
        			
        			<div class = 'box2'>
        				<div class ='imageBox'>	
        					<img class = 'fancybox' src='pictures/UnikCV4_Stor.png' alt='Bas1'/>
        								
        				</div>		
        			</div>
    		    
    		    </div>
			</div>
		";
		
	}
	
	public function UnikCVForm()
	{
	    echo "
	    
	    	<div class='instructionHeader'>
				<h1>Beställ UNIK CV</h1>
			</div>	
					
					<div class = 'colorContainer'>
					<div class = 'orderContainer'>
					<div class ='formContainer'>
						
						<form id ='unikCVform' enctype='multipart/form-data' method='post' name = 'unikForm' onsubmit='return validateUnikForm()' >
							
							
								<p class='name'><label for='name'>Namn (Obligatoriskt)</label> </p>
									<input type ='text' name='$this->name' id ='name' placeholder='Namn'/ >
									
							
								<p class='email'><label for='email'>E-post (Obligatoriskt)</label></p>
									<input type ='text' name='$this->custMail' id ='email' placeholder='example@email.com'/>
									
								<p>Ladda upp ditt CV (Obligatoriskt)
								<div class ='fileUpload'>
									<input type ='file' name = '$this->customerCV'>
								</div>
								</p>
								
								<p>Ladda upp ditt personliga brev (Obligatoriskt)
								<div class ='fileUpload'>
									<input type ='file' name = '$this->customerLetter'>
								</div>
								</p>
									<p>Skriv dina önskemål(Frivilligt)
								<div class = 'textUpload'>
									<textarea name= '$this->wishContent' type = 'text' placeholder ='Dina önskemål'></textarea>
								</div>
								
								<p>Ladda upp ditt fotografi (Frivilligt)
								<div class ='fileUpload'>
									<input type ='file' name = '$this->customerPhoto'>
								</div>
								</p>
								
								<div class='submit bounce'>
									<input type='submit' value='Beställ' name ='$this->sendUnikCVOrder' />
								</div>
							     <i>När du beställer går du med på CVsmedjans allmäna <a href='?$this->pageID=terms'>Villkor<a/></i>
						</form>
					</div>
					</div>
					</div>
			
	    ";
	}
	
	public function attachment()
	{
		if(isset($_FILES[$this->customerCV])==true)
		{
			return $_FILES[$this->customerCV];
		}
	}
	
	public function attachment2()
	{
		if(isset($_FILES[$this->customerLetter])==true)
		{
			return $_FILES[$this->customerLetter];
		}
	}
	
	public function getCustomerName()
	{
		if(isset($_REQUEST[$this->name])==true)
		{
			return $_REQUEST[$this->name];
		}
	}

	public function getCustomerMail()
	{
		if(isset($_REQUEST[$this->custMail])==true)
		{
			return $_REQUEST[$this->custMail];
		}
	}
	
	public function getCustomerPhoto()
	{
		if(isset($_REQUEST[$this->customerPhoto])==true)
		{
			return $_REQUEST[$this->customerPhoto];
		}
	}
	
	public function getCustomerWish()
	{
	    if(isset($_REQUEST[$this->wishContent])==true)
	    {
	        return $_REQUEST[$this->wishContent];
	    }
	}
	
	public function isUnikSubmitPressed()
	{
		if(isset($_REQUEST[$this->sendUnikCVOrder])==true)
		{
			return true;
		}
	}

}
?>