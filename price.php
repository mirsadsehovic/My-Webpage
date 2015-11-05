<?php
class Price
{
	private  $pageID="page";
	
	public function getCVID()
	{
		if(isset($_REQUEST[$this->pageID])=="contact")
		return $_REQUEST[$this->pageID];
	}
	
	public function priceView()
	{
	
			echo "
		
			<div class ='largeImageContainer2'>
			<div class ='title2'>
				<p>STICK UT<p>
				</div>
			</div>	
		
			<div class='instructionHeader'>
				<h1>Vad erbjuder CVsmedjan</h1>
			</div>		
			
			<div class='priceInfoContainer'>
				
				<div class ='priceInfoHolder'>	
					<div class ='priceBox'>
						<div class ='priceInfo1'>
						
						
							<img src='pictures/tjansterBas.png' align='middle' onmouseover='this.src='pictures/BasCVAfter''  />
							<h2>Bas CV</h2>
							
									
					<div class ='priceHolder'>
							
						<b>PRIS 200kr </b><br>
						<b>Donation: 20kr</b><br><br>
							
							<div class='button bounce'>
								<a href='?$this->pageID=gallery'><input type ='button' value = 'Bläddra i vårt sortiment'/></a>	
							</div>	
					</div>
						<section>
							
							<p>	
								Med CVsmedjans produkt BAS CV får du välja en mall från ett befintliga sortiment. Ditt CV 
								och personliga brev levereras till dig med den layout du valt!<br>
							</p>	
							<ul>
								<li>Grafiskt tilltalande layout för både CV och personligt brev.</li>
								<li>CVsmedjan gör en snabb granskning av ditt CV.</li>
								<li>CVsmedjan fixar allt, du bara väljer layoutmall och skickar in dina ansökningshandlingar.</li>
								<li>CVsmedjan skänker 20 kronor till Barncancerfonden.</li>
							</ul>
							
						</section>	
					</div>
				
						
					
				</div>
				
			<div class ='priceBox'>
					
					<div class ='priceInfo1'>
						<img src='pictures/overraskamig2.png' align='middle'/>
						<h2>Unik CV</h2>
						
							<div class ='priceHolder'>
							
							<b>PRIS 500kr </b><br>
							<b>Donation: 30kr</b><br><br>
							
								<div class='button bounce'>
									<a href='?$this->pageID=unik'><input type ='button' value = 'Läs mer om Unik CV'/></a>	
								</div>	
					</div>
						
					<section>
						<p>
							UNIK CV är produkten för dig som vill vara unik! CVsmedjan tar fram en helt ny grafisk
							layout för ditt CV och personligt brev, du väljer själv färg och eventuella symboler som 
							passar för din bransch. Eller så ger du CVsmedjan fria händer att skapa ditt unika CV! 
							<br>                                      	 
						</p>
		
						<ul>
							<li> Unik grafisk layout för både CV och personligt brev.</li>
							<li> Du väljer layout enligt egna önskemål.</li>
							<li> Du får en produkt som du är garanterat ensam om i konkurrensen på arbetsmarknaden.</li>
					        <li>CVsmedjan gör en snabb granskning av ditt CV.</li>
							<li> CVsmedjan skänker 30 kronor till Barncancerfonden.</li>
						</ul>
					
					</section>
						
					</div>
						
			</div>

				<div class='clear'>
				</div>
				
			</div>
			
			</div>";
		
		echo "
			<div class='instructionHeader'>
				<h1>Hur går en beställning till?</h1>
			</div>
	
			<div class='insctructionInfoContainer'>
			
			<div class ='instructionInfoHolder'>
			
			<div class ='infoBox'>
			<div class='Info1'>
				<img src='pictures/steg1.2.png'>
				<p>
				    Du gör din beställning av tjänst genom förmuläret som finns under respektive tjänst.
				</p>
			</div>
			</div>
			
			<div class ='infoBox'>
			<div class ='Info1'>
				
				<img src='pictures/steg2.2.png' align='middle'>
				<p>
				    När CVsmedjan mottagit din beställning börjar skapandet av ditt nya CV. 
				    
				</p>
			</div>
			</div>
			
				<div class ='infoBox'>
				<div class ='Info1'>
				
				<img src='pictures/steg3.2.png' align='middle'>
				<p>
				 När ditt CV är klart skickar CVsmedjan en förhandsgranskning. Du granskar ditt nya CV och är du nöjd så skickar CVsmedjan den färdiga produkten till dig.
				 Det är viktigt att du är nöjd, därför får du alltid chansen att granska ditt nya CV innan du får den färdiga produkten. 
				</p>
			</div>
			 </div>
			
			
			<div class='clear'>
			</div>		
		</div>			
		</div>";
		
	
	}
	
}
?>