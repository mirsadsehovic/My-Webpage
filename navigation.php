<?php
class Navigation
{
		
	public function navigate($page)
	{
		switch ($page) {
			case 'price':
				
				$price = new Price();
				$price->priceView();
				$pageTwo = $price-> getCVID();
				break;
				
			case 'gallery':
				$gallery = new Gallery();
				$gallery->galleryView();
				$gallery->GalleryOrderForm();
				break;
				
			case 'unik':
				$unik = new Unik();
				$unik->UnikView();
				$unik->UnikCVForm();
				break;
				
			case 'premium':
				$unik = new Premium();
				$unik->PremiumView();
				break;
				
			case 'thankyou':
				$unik = new ThankYou();
				$unik->ThankYouView();
				break;		
			case 'error':
			    $error = new Error();
			    $error->ErrorView();
			    break;
			case 'contact':
				$contact = new Contact();
				$contact->contactView();
				break;
				
			case 'about':
				$about = new About();
				$about->AboutView();
				break;
			case 'blog':
				$blog = new Blog();
				$blog->BlogView();
			break;
			case 'terms':
			    $terms = new Terms();
			    $terms->TermsView();
	        break;
	        
			default:	
				$main = new Main();
				$main->mainView();
				break;
		}
	}
}
?>