<html>
	<head>
		<title>
			Создать нового пользователя
		</title>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />	
		<link rel = "stylesheet" href = "css/styles.css" />
		<script type="text/javascript">
		    function otherLanguage(curLang) {
				if(curLang) {
				    document.getElementById("loginByUser").placeholder = "Pick a login ...";
				    document.getElementById("passByUser").placeholder = "Pick a password ...";
				    document.getElementById("textByUser").innerHTML = "Registration user:";
				    document.getElementById("addUser").innerHTML = "Create";
					document.getElementById("err").innerHTML = "Such a user already exists, create new login!";
					document.getElementById("errType").innerHTML = "Choose, please, photo .jpeg, .gif or .png!";
					document.title = "Create new user";
				}
				else { 
				    document.getElementById("loginByUser").placeholder = "Придумайте логин ...";
				    document.getElementById("passByUser").placeholder = "Придумайте пароль ...";
				    document.getElementById("textByUser").innerHTML = "Регистрация пользователя:";
				    document.getElementById("addUser").innerHTML = "Создать";
					document.getElementById("err").innerHTML = "Такой пользователь уже существует, придумайте другой логин!";
					document.getElementById("errType").innerHTML = "Добавить, пожлауйста, фото с расширением .jpeg, .gif или .png!";
					document.title = "Добавить нового пользователя";
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
			</ul>
		</div>
		<div class = "textAuth">
		    <?php
			    if(isset($_GET['err'])) {
			?>
		            <p id = "err" class = "errorInformation" >			
			            Такой пользователь уже существует, придумайте другой логин!
			        </p>
			<?php
			    }
			    if(isset($_GET['errType'])) {
			?>
		            <p id = "errType" class = "errorInformation" >			
			            Добавьте, пожалуйста, фото с расширением .jpeg, .gif или .png!
			        </p>
			<?php
			    }
			?>
			<form action = "regNewUser.php" class="formOfAuth" method = "POST" enctype="multipart/form-data">  
				<p id = "textByUser">
				    Регистрация пользователя:
				</p>
				<input type = "text" id = "loginByUser" value = "<?php if(isset($_GET["login"])) echo $_GET["login"]; ?>" onkeyup = "if(/[^a-zA-Z0-9_]/.test(this.value))this.value=this.value.replace(/[^a-zA-Z0-9_]+/g,'')" placeholder = "Придумайте логин ..." name = "loginByUser" required />
				<br /><br />
				<input type = "password" id = "passByUser"  placeholder = "Придумайте пароль ..." name = "passByUser" required />
				<br /><br />
				<input type="file" style = "border:none;" accept = "image/jpeg, image/gif, image/png" name = "photoByUser" required />
				<br /><br />
				<button type = "submit" id = "addUser" class = "buttonOfAuth">
					Создать
				</button>
			</form>
		</div>
	</body>
</html>