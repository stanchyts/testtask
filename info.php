<html>
	<head>
		<title>
			Ваша информация
		</title>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />	
		<link rel = "stylesheet" href = "css/styles.css" />
		<script type="text/javascript">
		    function otherLanguage(curLang) {
				if(curLang) {
				    document.getElementById("exitButton").innerHTML = "Exit";
					document.title = "Your information";
				}
				else { 
				    document.getElementById("exitButton").innerHTML = "Выйти";
					document.title = "Ваша информация";
				}
			}
		</script>
	</head>
	<body>
	    <div class = "mainMenu">
			<ul class = "blocksOfMainMenu">
				<li>
					<button onclick = "otherLanguage(0)"  class = "buttonOfAuth">
					    Русский
				    </button>
				</li>
				<li>
					<button onclick = "otherLanguage(1)"  class = "buttonOfAuth">
					    English
				    </button>
				</li>
				<li>
					<a id = "exitButton" href = "exit.php">
					    Выйти
				    </a>
				</li>
			</ul>
		</div>
		<div class = "rowsOfBlocksItem">
		    <?php
			    include "lib.php";
				session_start();
            ?>				
			<div class = "itemOfProduct" style = "margin-left:35%;">
				<img src = "<?php echo $_SESSION["curUser"]->getPathByImage();?>" />
				<div class = "mainOfProduct" >
					<h3>
						<?php echo $_SESSION["curUser"]->getLogin();?>
					</h3>
				</div>
			</div>
		</div>		
	</body>
</html>