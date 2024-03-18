<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestBd</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript">
        function validateForm() {
            var login = document.forms["loginForm"]["Login"].value;
            var password = document.forms["loginForm"]["Parol"].value;

            if (login == "" || password == "") {
                alert("Пожалуйста, заполните все поля логина и пароля.");
                return false;
            }
        }
    </script>
</head>
<body class="main-bg">
<?php
$host='localhost';
$db='testbde';
$user='root';
$password='';
$log1="";
$pass1="";

$link=mysqli_connect($host,$user,$password,$db) or die("Ошибка".mysqli_error($link));
if(isset($_POST['Login']) && isset ($_POST['Parol'])){
    $Log = $_POST['Login'];
    $passwor = $_POST['Parol'];
    if(($Log=="")||($passwor==""))
			{
				
			}
            else{
$query = "select * from polzovatel where Login='$Log' and Parol='$passwor'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		if($result) 
    while ($row = mysqli_fetch_assoc($result)) {
		
		$log1=$row['Login'];
		$pass1=$row['Parol'];
				
	}
	if(($log1!=$Log)&&($pass1!=$passwor))
	{
        echo "<script>alert(\"Данного аккаунта - не существует, либо неправильно введены данные\");</script>"; 
	}
    else{
		    header("Location: index1.html");
		}
		
		}
    }
?>
<div class="login-container text-c animated flipInX">
    <div>
        <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
    </div>
    <h1 class="text-whitesmoke">Авторизация</h1>
    <div class="container-content">
        <form class="margin-t" method="POST" name="loginForm" onsubmit="return validateForm()">
            <div class="form-group">
                <input type="text" class="form-control" name="Login" placeholder="Login" pattern=".*@gmail.com.*" title="Пожалуйста, указывайте @gmail.com в адресе электронной почты" minlength="3" maxlength="50" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Parol" placeholder="Password" minlength="3" maxlength="12" required="">
            </div>
            <button type="submit" class="form-button button-l margin-b texta"><b>Вход</b></button>
            <p class="text-whitesmoke text-center"><small>У вас есть аккаунт?</small></p>
            <a class="text-darkyellow" href="Reg.php"><small>Зарегистрируйтесь</small></a>
        </form>
    </div>
</div>
</body>
</html>