<?php
class Error
{
    public function ErrorView(){
      
          $html = "  
             
                <div class ='largeImageContainer3'>
                </div>
                
                <div class='instructionHeader'>
				    <h1>OJ OJ OJ! Något har gått snett!</h1>
		    	</div>	
                
                <div class = 'info'>
                    <p>
                       Något har gått snett med din behandling av din beställning.<br>
                       
                    </p>
             </div>
         ";
        echo $html;
        
    }
    
}
?>