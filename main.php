<?php
class Main
{
	public function mainView()
	{
			//Start bild
			echo"
			
			<div class ='largeImageContainer'>
				<div class ='title'>
    				 <b> Mer än bara ett CV!</b><br>
    				  CVsmedjan hjälper dig att sticka ut i mängden
				</div>
			</div>
			";
			
			//Start Text
			echo 
			"
			
			<div class='instructionHeader'>
				<h1>Vässa dina chanser att nå drömjobbet!</h1>
			</div>
			
			<div id='infoContainer'>
				<div class='info'>
				<section>
				<p>
					Ditt <b>CV </b> och personliga brev ger rekryteraren ett första intryck av dig. Låt detta intryck bli så bra det bara går. 
					Kanske har du redan både CV och personligt brev som du är nöjd med, men känner att du behöver det där lilla extra för att få rekryteraren att stanna till på just dig? 
					Eller så har du tittat alldeles för länge på ett dokument och undrat hur du ska få ihop det snyggt? Oavsett vilket, nu har du hittat rätt!
					<br>
					<br>
					CVSmedjan hjälper dig att få ett unikt CV och personligt brev som grafiskt skiljer sig från mängden. 
					<br><br>
					Visste du att en rekryterare tittar i snitt sex sekunder på ett CV? Låt CVsmedjan hjälpa dig att använda sekunderna väl!
				</section>
				</p>
				</div>
			</div>
			";
				
			//CV EXMEPEL
			echo "
		
			<div class='instructionHeader'>
				<h1>Mest omtyckta CV</h1>
			</div>
			
			<div class='exampelContainer'>
			
			<div class ='unikCVcontainer'>
    			<div class = 'imagesHolder2'>
        			
        			<div class = 'box2'>
        				<div class ='imageBox'>	
        					<img class = 'fancybox' src='pictures/BasCV14_Stor.png' alt='Bas1'/>
        									
        				</div>		
        			</div>
        			
        			<div class = 'box2'>
        				<div class ='imageBox'>	
        					<img class = 'fancybox' src='pictures/BasCV13_Stor.png' alt='Bas1'/>
        								
        				</div>		
        			</div>
        			
        			<div class = 'box2'>
        				<div class ='imageBox'>	
        					<img class = 'fancybox' src='pictures/BasCV9_stor.png' alt='Bas1'/>
        								
        				</div>		
        			</div>
    		    
    		    </div>
			</div>
			</div>
		
			";
	}
}
?>