<?php
class Footer
{
	private  $pageID="page";

	public function ShowFooter()
	{
		echo "
				<div class='footer'>
				<div class = 'footerContainer'> 
						
						<div class='morph'>
									<a href = 'http://www.facebook.com/cvsmedjan' target='_blank'><img src='pictures/FB-f-Logo__blue_100.png' alt ='facebook'/></a>
						</div>
						
						<div class='morph'>
								<a href = 'http://www.twitter.com/CVsmedjan' target='_blank'><img src='pictures/twitterlogo.png' alt ='twitter'/></a>
						</div>
						
						<div class='morph'>
								<a href = 'https://instagram.com/cvsmedjan' target='_blank'><img src='pictures/Instagram_Icon_Large.png' alt ='twitter'/></a>
						</div>
				</div>
				
				<p>Alla rättigheter reserverade © 2015 CVsmedjan
				
				
				<div class = 'footerLinks'>
				    <a href='?$this->pageID=terms'>Villkor</a>
				</div>";	
	
	}

}
?>