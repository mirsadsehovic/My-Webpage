<?php
class Menu
{
	
	private $pageID = "page";
	
	public function showMenu()
	{
		echo"<div class='headerContainer'>
				<a href='?$this->pageID=main'> <img src='pictures/Logo5.png' alt ='logo' /> </a>	
				
			</div>";
		
	echo "<nav class ='menuBox'>
					<ul class ='menu'>
						<li class ='menu-item'><a href='?$this->pageID=price'>Tjänster</a></li>						
						<li class ='menu-item'><a href='?$this->pageID=blog'>CVbloggen</a></li>
						<li class ='menu-item'><a href='?$this->pageID=contact'>Kontakt</a></li>
						<li class ='menu-item'><a href='?$this->pageID=about'>Om Oss</a></li>	
					</ul>
				</nav>";
	}

	public function GetPageID()
	{
		if(isset($_REQUEST[$this->pageID])==true)
		return $_REQUEST[$this->pageID];
	}
}
?>