<html>
	<head>
		<title>
			Войти в систему
		</title>
		<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />	
		<link rel = "stylesheet" href = "css/styles.css" />
		<script type="text/javascript">
		    function otherLanguage(curLang) {
				if(curLang) {
				    document.getElementById("loginByUser").placeholder = "Your login ...";
				    document.getElementById("passByUser").placeholder = "Your password ...";
				    document.getElementById("textByUser").innerHTML = "Enter to system:";
				    document.getElementById("addUser").innerHTML = "Enter";
					document.getElementById("regUser").innerHTML = "Registration";
					document.getElementById("reg").innerHTML = "You have successfully registered!";
					document.getElementById("err").innerHTML = "Check entered data!";
					document.title = "Enter to system";
				}
				else { 
				    document.getElementById("loginByUser").placeholder = "Ваш логин ...";
				    document.getElementById("passByUser").placeholder = "Ваш пароль ...";
				    document.getElementById("textByUser").innerHTML = "Войти в систему:";
				    document.getElementById("addUser").innerHTML = "Войти";
					document.getElementById("regUser").innerHTML = "Регистрация";
					document.getElementById("reg").innerHTML = "Вы успешно зарегистрировались!";
					document.getElementById("err").innerHTML = "Проверьте введенные данные!";
					document.title = "Войти в систему";
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
			    if(isset($_GET['reg'])) {
			?>
		            <p id = "reg" class = "newInformation" >			
				        Вы успешно зарегистрировались!
			        </p>
			<?php
			    }
				if(isset($_GET['err'])) {
			?>
			        <p id = "err" class = "errorInformation" >			
				        Проверьте введенные данные!
			        </p>
			<?php
				}
			?>
			<form action = "validate.php" class="formOfAuth" method = "POST" >
				<p id = "textByUser">
				    Войти в систему:
				</p>
				<input type = "text" id = "loginByUser" onkeyup = "if(/[^a-zA-Z0-9_]/.test(this.value))this.value=this.value.replace(/[^a-zA-Z0-9_]+/g,'')" placeholder = "Ваш логин ..." name = "loginByUser" required />
				<br /><br />
				<input type = "password" id = "passByUser"  placeholder = "Ваш пароль ..." name = "passByUser" required />
				<br /><br />
				<a href = "registration.php" id = "regUser" class = "buttonOfRegistration">
					Регистрация
				</a>
				<button type = "submit" id = "addUser" class = "buttonOfAuth">
					Войти
				</button>
			</form>
		</div>
	</body>
</html>