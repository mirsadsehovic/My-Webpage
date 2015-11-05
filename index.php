<?php
include_once 'Controller.php';
$controller = new Controller();
$body = '';
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
	<link rel ="stylesheet" type="text/css" href="style.css" media="screen" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>CVsmedjan | Hjälper dig att få ett unikt CV och personligt brev!</title>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script>
	</script>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    	
    <link rel="icon" type="image/png" sizes="196x196" href="pictures/faviconit/favicon-192.png">
    	
    <link rel="icon" type="image/png" sizes="160x160" href="pictures/faviconit/favicon-160.png">
    	
    <link rel="icon" type="image/png" sizes="96x96" href="pictures/faviconit/favicon-96.png">
    	
    <link rel="icon" type="image/png" sizes="64x64" href="pictures/faviconit/favicon-64.png">
    	
    <link rel="icon" type="image/png" sizes="32x32" href="pictures/faviconit/favicon-32.png">
    	
    <link rel="icon" type="image/png" sizes="16x16" href="pictures/faviconit/favicon-16.png">
    	
    <link rel="apple-touch-icon" href="pictures/faviconit/favicon-57.png">
    	
    <link rel="apple-touch-icon" sizes="114x114" href="pictures/faviconit/favicon-114.png">
    	
    <link rel="apple-touch-icon" sizes="72x72" href="pictures/faviconit/favicon-72.png">
    	
    <link rel="apple-touch-icon" sizes="144x144" href="pictures/faviconit/favicon-144.png">
    	
    <link rel="apple-touch-icon" sizes="60x60" href="pictures/faviconit/favicon-60.png">
    	
    <link rel="apple-touch-icon" sizes="120x120" href="pictures/faviconit/favicon-120.png">
    	
    <link rel="apple-touch-icon" sizes="76x76" href="pictures/faviconit/favicon-76.png">
    	
    <link rel="apple-touch-icon" sizes="152x152" href="pictures/faviconit/favicon-152.png">
    	
    <link rel="apple-touch-icon" sizes="180x180" href="pictures/faviconit/favicon-180.png">
    	
    <meta name="msapplication-TileColor" content="#FFFFFF">
    	
    <meta name="msapplication-TileImage" content="pictures/faviconit/favicon-144.png">
    	
    <meta name="msapplication-config" content="/browserconfig.xml">
	
	</head>
	<body>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
		<script type="text/javascript">
	    $(function($){
	        var addToAll = false;
	        var gallery = true;
	        var titlePosition = 'inside';
	        $(addToAll ? 'img' : 'img.fancybox').each(function(){
	            var $this = $(this);
	            var title = $this.attr('title');
	            var src = $this.attr('data-big') || $this.attr('src');
	            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
	            $this.wrap(a);
	        });
	        if (gallery)
	            $('a.fancybox').attr('rel', 'fancyboxgallery');
	        $('a.fancybox').fancybox({
	            titlePosition: titlePosition
	        });
	    });
	    $.noConflict();
		</script>
    </script>
    	
		<?php	
			$body = $controller->DoControll();
		?>
	
	
	</body>
</style>
</html>