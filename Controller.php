<?php
include_once 'menu.php';
include 'navigation.php';
include_once 'contact.php';
include_once 'gallery.php';
include_once 'price.php';
include_once 'main.php';
include_once 'footer.php';
include_once 'about.php';
require  'PHPMailer-master/PHPMailerAutoload.php';
include_once 'ordermodel.php';
include_once 'unik.php';
include_once 'premium.php';
include_once 'thankyou.php';
include_once 'error.php';
include_once 'terms.php';
include_once 'blog.php';
ob_start(); 
class Controller
{
	public function DoControll()
	{
		$contact = new Contact();
    	$gallery = new Gallery();
    	$unik = new Unik();
        $premium = new Premium();
        $email = new PHPMailer;
	   
		$xhtml="";
		$menu = new menu();
		
		$xhtml.= $menu->showMenu();
		$page = $menu->GetPageID();		
		
		$nav = new Navigation();
		$nav->navigate($page);	
	
		$allowed_extensions = array("png", "doc", "docx");
		$allowed_ext = false;
		
		//Validerings sker med hjälp av javascript
		$xhtml.= $xhtml.= "<script src = 'javascript/validation.js'></script>";
				
			 
    	//Order BAS CV
    	if($gallery->isSubmitPressed()==true  && $gallery->getCustomerName() != "" && $gallery->getCustomerMail() != "" &&  $gallery->attachment() != null && $gallery->attachment2() != null  )
		{	
		    
		    $file= $gallery->attachment();
	        $file2 = $gallery->attachment2();
		    $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name']));
		    $uploadfile2 = tempnam(sys_get_temp_dir(), sha1($file2['name']));
		 
    		if(move_uploaded_file( $file['tmp_name'], $uploadfile) && move_uploaded_file($file2['tmp_name'], $uploadfile2 )) {
    	
				$email->IsSMTP();  // telling the class to use SMTP
				$email->Host     = "mailout.one.com"; // SMTP server	
		 		$fromName = $gallery->getCustomerName();
		        $fromMail = $gallery->getCustomerMail();
		        $selectedCV = $gallery->getChosenCv();
				$email->From = 	$fromMail;
				$email->FromName = $fromName;
				$email->Subject = 'BAS CV';
				$email->Body = "Hej jag skulle vilja beställa ".$selectedCV;
				$email->addAddress('order@cvsmedjan.se');
				$email->addAttachment($uploadfile, $file['name']);
				$email->addAttachment($uploadfile2, $file2['name']);
				$email->isHTML(true);
				
				//Meddela användaren om en beställning har gjort eller om något har gått fel.
			    if(!$email->send()){
			    	 	
			    	 header("Location:index.php?page=error");
			    	 exit;	   			    
				}
    			else{
    			     	
    			     header("Location:index.php?page=thankyou");
    			     exit;
				}
		    }
		}

	    
	    //Order UNIK CV
        if($unik->isUnikSubmitPressed() == true && $unik->getCustomerName() != "" && $unik->getCustomerMail() != "" &&  $unik->attachment() != null && $unik->attachment2() != null 
        && $unik->getCustomerWish() != "" )
        {
    	        $file= $unik->attachment();
    	        $file2 = $unik->attachment2();
    	       
    	         
    		    $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name']));//
    		    $uploadfile2 = tempnam(sys_get_temp_dir(), sha1($file2['name']));
    		 
        		if(move_uploaded_file( $file['tmp_name'], $uploadfile) && move_uploaded_file($file2['tmp_name'], $uploadfile2 )) {
        	
    			
    				$email->IsSMTP();  // telling the class to use SMTP
    				$email->Host     = "mailout.one.com"; // SMTP server	
    		 		$fromName = $unik->getCustomerName();
    		        $fromMail = $unik->getCustomerMail();
    		        $customerWish = $unik->getCustomerWish();
    				$email->From = 	$fromMail;
    				$email->FromName = $fromName;
    				$email->Subject = 'Unik CV';
    				$email->Body = "Hej jag skulle vilja beställa ".$customerWish;
    				$email->addAddress('order@cvsmedjan.se');
    				$email->addAttachment($uploadfile, $file['name']);
    				$email->addAttachment($uploadfile2, $file2['name']);
    				$email->isHTML(true);
    			
    			    	if(!$email->send()){
    			    	     header("Location:index.php?page=error");
    			    	     exit;
    	   			      
    				    }
        				else{
        			        header("Location:index.php?page=thankyou");
        			        exit;
    				        }
    		    	}
    				else {
                         
    				}
    				header("Location:index.php?page=thankyou");
    		}
    	
    	    
	    
	   
    	//Contact 
      	if($contact->isSubmitPressed() ==true && $contact->addNewSubject() != "" && $contact->addNewContent() != "")
    	{    	    
    	            $email->IsSMTP();  // telling the class to use SMTP
    				$email->Host     = "mailout.one.com"; // SMTP server	
    		 		$fromName = $contact->addNewName();
    		        $fromMail = $contact->addNewMail();
	                $subject = $contact->addNewSubject();
	                $message = $contact->addNewContent();
	                $email->From = 	$fromMail;
    				$email->FromName = $fromName;
    				$email->Subject =  $subject;
    				$email->Body =  $message;
    				$email->addAddress('info@cvsmedjan.se');
					$email->isHTML(true);
    			
			    	if(!$email->send()){
    	   			       // echo 'Message could not be sent.';
    	  			       // echo 'Mailer Error: ' . $email->ErrorInfo . $uploadfile;
    	  			       // echo 'Mailer Error: ' . $email->ErrorInfo . $uploadfile2;
    				}
    				else{
    			        
    			        header("Location:index.php?page=thankyou");
    			        exit;
				    }
    	 
    	}
    
    	$blog = new Blog();
		$blogID = $blog->GetBlogID();
	
    	$footer = new Footer();
    	$xhtml.= $footer->showFooter();
	
	    echo $xhtml;
	}
}
?>