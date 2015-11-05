<?php
class Contact
{
	
	private $name ="name";
	private $subject ="subject";
	private $content ="content";
	private $sendermail = "mail";
	private $send ="send";
	
	public function contactView()
	{
		echo
		"
		<div class ='largeImageContainer3'>	
		</div>
		
		<div class='instructionHeader'>
				
				<h1>Kontakta CVsmedjan</h1>
	
		</div>	
		
		<div class ='info'>
		
			<p>Har du några frågor kring CVsmedjans tjänster eller bara vill ha mer information, tveka inte att kontakta oss via formuläret. CVsmedjan strävar efter att svara inom 24 timmar. Vill du                   beställa någon av CVsmedjans
			produkter så kan du göra det under våra erbjudanden.</p>
			<br> <br>
		
		</div>
	
	
			<div class='orderContainer'>
    			
    			<div class = 'formContainer'>	
    			    
    			    <form class='form' id ='contactForm' name = 'contForm' onsubmit='return validateContactForm()'>
    
    					    <p class = 'name'><label for='name'>Ditt namn</label></p>
    						<input type ='text' name='$this->name' id ='name' placeholder='Namn'/>
    				
    						<p class = 'email'><label for='email'>Din epost(obligatorisk)</label></p>
    						<input type ='text' name='$this->sendermail' id ='email' placeholder='example@email.com'/>
    	
    				        <p class ='subject'><label for='subject'>Ämne</label></p>
    						<input type ='text' name='subject' id ='$this->subject' placeholder='Ämne'/>
    				        
    				        <p class ='subject'><label for='subject'>Meddelande</label></p>
    						<textarea name='$this->content' placeholder='Meddelande'></textarea>
    			
    					<div class='submit bounce'>
    						<input type='submit' value='Kontakta CVsmedjan idag' name ='$this->send' />
    					</div>
    				
    				</form>
		    </div>
			</div>		
				
		";
	}
	
	public function addNewName()
	{
		if(isset($_GET[$this->name]) == true && $this->name != " ")
		{
			return $_GET[$this->name];
		}
	}
	
	public function addNewSubject()
	{
		if(isset($_GET[$this->subject])==true && $this->subject != "")
		{
		    
			return $_GET[$this->subject];
		}
	}
	
	public function addNewContent()
	{
		if(isset($_GET[$this->content])==true && $this->content != "")
		{
			return $_GET[$this->content];
		}
	}
	
	 public function addNewMail()
	 {
	 	if(isset($_GET[$this->sendermail])==true && $this->sendermail != "")
		{
			return $_GET[$this->sendermail];
		}
	 }
	
	public function isSubmitPressed()
	{
		if(isset($_REQUEST[$this->send]) == true)
		{
			return true;
		}
	}
	
}
?>