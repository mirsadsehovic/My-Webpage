<?php
class Gallery
{   
    private  $pageID="page";
	public function GalleryView()
	{
		echo "
			<div class ='largeImageContainer4'>
				
			</div>
			
			<div class='instructionHeader'>
					<h1>CVsmedjans BAS CV</h1>
			</div>	
		
		<div id='infoContainer'>
		
				<div class='info'>
				
				    <section>
					<p>Här nedan kan du bläddra bland CVsmedjans BAS CV utbud. Hittar du något CV som du tror passar dig, så tveka inte att beställa. En beställning gör du genom att fylla i formuläret i slutet på sidan.<br>
					<br><b>CVsmedjan ANPASSAR</b> det valda CV:t utefter ert nuvarande CV.<br><br
					<br>
					CVsmedjan kommer även att uppdatera BAS CV utbudet med tiden, så hittar du inget som du tycker passar dig, då kan du beställa ett UNIKT CV eller bläddra i BAS CV sortimentet                      vid ett senare                      tillfälle.
					<br>
					<br>
		
					<b> Pris:200kr</b><br>
					<b> Donation:20kr</b><br></p>
					</section>
					
			</div>
		</div>
		<div class = 'emptyContainer'>
		</div>
		
		<div class='imageContainer'>	
		
		<div class = 'imagesHolder'>
			
			<div class = 'box'>
				<div class ='imageBox'>	
					<img class = 'fancybox' src='pictures/BasCV1_stor.png' alt='Bas1'/>
					<div class='titleBox'>CV BAS 1</div>				
				</div>		
			</div>
			
			<div class = 'box'>	
				<div class ='imageBox'>		
					<img class ='fancybox' src='pictures/BasCV2_stor.png' alt='Bas2' />
					<div class='titleBox'>CV BAS 2</div>
				</div>
			</div>
			
			<div class = 'box'>
				<div class ='imageBox'>
					<img class='fancybox' src='pictures/BasCV3_stor.png' alt='Bas3'/>
					<div class='titleBox'>CV BAS 3</div>
				</div>
			</div>
			
			<div class = 'box'>
				<div class ='imageBox'>
					<img class ='fancybox' src='pictures/BasCV4_stor.png' alt='Bas4'/>
					<div class='titleBox'>CV BAS 4</div>
				</div>
			
			</div>
			
			<div class = 'box'>
				<div class ='imageBox'>
					<img class ='fancybox' src='pictures/BasCV6_stor.png' alt='Bas5'/>
					<div class='titleBox'>CV BAS 5</div>
				</div>
			
			</div>
			
			<div class = 'box'>
				<div class ='imageBox'>
					<img class ='fancybox' src='pictures/BasCV7_stor.png' alt='Bas6'/>
					<div class='titleBox'>CV BAS 6</div>
				
				</div>
			
			</div>
			
			<div class = 'box'>
				<div class ='imageBox'>
					<img class ='fancybox' src='pictures/BasCV8_stor.png' alt='Bas7'/>
					<div class='titleBox'>CV BAS 7</div>
				</div>
			</div>
			
			<div class = 'box'>
				<div class ='imageBox'>
					
					<img class ='fancybox' src='pictures/BasCV9_stor.png'  alt='Bas8'/>
					<div class='titleBox'>CV BAS 8</div>
					Text	
				</div>
			</div>
			<div class = 'box'>
				<div class ='imageBox'>
					
					<img class ='fancybox' src='pictures/BasCV13_Stor.png'  alt='Bas9'/>
					<div class='titleBox'>CV BAS 9</div>
					Text	
				</div>
			</div>
			
			<div class = 'box'>
				<div class ='imageBox'>
					
					<img class ='fancybox' src='pictures/BasCV14_Stor.png'  alt='Bas10'/>
					<div class='titleBox'>CV BAS 10</div>
					Text	
				</div>
			</div>
				<div class = 'box'>
				<div class ='imageBox'>
					
					<img class ='fancybox' src='pictures/BasPaket16_Stor.png'  alt='Bas11'/>
					<div class='titleBox'>CV BAS 11</div>
					Text	
				</div>
			</div>
				
		</div>
		</div>
		";
	}
	
	public $name = "fromName";
	public $mail = "fromMail";
	public $userCV = 'userCV';
	public $userBrev = 'userBrev';
	public $userPhoto = 'userPhoto';
	public $sendBasCVOrder = "sendBasCVOrders";
	public $selectedCV = 'selectedCV';
	public function GalleryOrderForm()
	{
		echo
		"
			
		<div class='instructionHeader'>
					<h1>Beställ BAS CV</h1>
		</div>	
	
		<div class='colorContainer'>
			
			<div class='orderContainer'>
			
				<div class ='formContainer'>
			
				<form class ='form' id='basCVForm' enctype='multipart/form-data' method='post' name='myForm' onsubmit='return validateForm()' >
						
						<p class='name'>	<label for='name'>Namn (Obligatoriskt)</label>	</p>
							<input type ='text' name='$this->name' id ='name' placeholder='Namn'/>
						
					
						
						<p class='email'>	<label for='email'>E-post (Obligatoriskt)</label>	</p>
							<input type ='text' name='$this->mail' id ='email' placeholder='example@email.com'/>
						
									
						<p><label for='selectCV'>Välj BAS CV (Obligatoriskt)</label></p>
						<select class='selectCV' name = '$this->selectedCV'>
							<option value='BAS CV 1'>CV BAS 1</option>
 							<option value='BAS CV 2'>CV BAS 2</option>
  							<option value='BAS CV 3'>CV BAS 3</option>
  							<option value='BAS CV 4'>CV BAS 4</option>
  							<option value='BAS CV 5'>CV BAS 5</option>
 							<option value='BAS CV 6'>CV BAS 6</option>
  							<option value='BAS CV 7'>CV BAS 7</option>
  							<option value='BAS CV 8'>CV BAS 8</option>
  							<option value='BAS CV 9'>CV BAS 9</option>
  							<option value='BAS CV 10'>CV BAS 10</option>
  							<option value='BAS CV 11'>CV BAS 11</option>
  							
						</select>
						
						<p>Ladda upp ditt CV (PDF/DOC) (Obligatoriskt)
						<div class ='fileUpload'>
							<input type ='file' name = '$this->userCV' id='file1'>
						</div>
						
						<p>Ladda upp ditt personliga brev(PDF/DOC) (Obligatoriskt)
							<div class ='fileUpload'>
								<input type ='file' name = '$this->userBrev' id='file2'>
							</div>
						</p>
						
						<p>Ladda upp ditt fotografi (Frivilligt)
								<div class ='fileUpload'>
									<input type ='file' name = '$this->userPhoto'>
								</div>
						</p>
						
						<div class='submit bounce'>
							<input type='submit' value='Beställ' name ='$this->sendBasCVOrder'  id ='register'  />
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
		if(isset($_FILES[$this->userCV])==true)
		{
			return $_FILES[$this->userCV];
		}
	}
	
	public function attachment2()
	{
		if(isset($_FILES[$this->userBrev])==true)
		{
			return $_FILES[$this->userBrev];
		}
	}
	

	public function getattachment()
	{
		if(isset($_REQUEST[$this->file])==true)
		{
			return $_REQUEST[$this->file];
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
		if(isset($_REQUEST[$this->mail])==true)
		{
			return $_REQUEST[$this->mail];
		}
	}
	
	public function getCustomerPhoto()
	{
		if(isset($_REQUEST[$this->userPhoto])==true)
		{
			return $_REQUEST[$this->userPhoto];
		}
	}
	
	public function getChosenCv()
	{
		if(isset($_REQUEST[$this->selectedCV])==true)
		{
			return $_REQUEST[$this->selectedCV];
		}
	}
	
	public function isSubmitPressed()
	{
		if(isset($_REQUEST[$this->sendBasCVOrder])==true)
		{
			return true;
		}
	}
	
}
?>