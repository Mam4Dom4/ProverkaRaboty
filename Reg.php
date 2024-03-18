<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestBd</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="main-bg">
<?php
$host='localhost';
$db='testbde';
$user='root';
$password='';
$link=mysqli_connect($host,$user,$password,$db) or die("Ошибка".mysqli_error($link));
    if(isset ($_POST['Familia']) && isset ($_POST['Ima']) && isset($_POST['Otchestvo']) && isset ($_POST['Login']) && isset ($_POST['Parol'])){
    $Fam=$_POST['Familia'];
    $Ima=$_POST['Ima'];
    $Otchestvo=$_POST['Otchestvo'];
    $Log=$_POST['Login'];
    $password = $_POST['Parol'];
    if($Fam && $Ima && $Otchestvo && $Log && $password){
        $query = "insert into polzovatel(Familia,Ima,Otchestvo,Login,Parol) values('$Fam', '$Ima', '$Otchestvo','$Log', '$password')";
        $result = mysqli_query($link, $query) or die ("Ошибка".mysqli_error($link));
        
        }
        }
?>
<div class="login-container text-c animated flipInX">
    <div>
        <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
    </div>
    <h1 class="text-whitesmoke">Регистрация</h1>
    <div class="container-content">
        <form class="margin-t" method="POST">
            <div class="form-group">
            <input type="text" class="form-control texta" name="Familia" placeholder="Фамилия" pattern="[А-Яа-яЁё\s]+" minlength="3"  maxlength="150" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control texta" name="Ima" placeholder="Имя" pattern="[А-Яа-яЁё\s]+" minlength="3" maxlength="150"  required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control texta" name="Otchestvo" placeholder="Отчество" pattern="[А-Яа-яЁё\s]+" minlength="3" maxlength="150" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Login" placeholder="Login" pattern=".*@gmail.com.*" title="Пожалуйста, указывайте @gmail.com в адресе электронной почты" minlength="3" maxlength="50" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Parol" placeholder="Parol" minlength="6" maxlength="12" required="">
            </div>
            <button type="submit" class="form-button button-l margin-b texta" href="Avtori.php"><b>Зарегистрироваться</b></button>
            </form>
    </div>
</div>
</body>
</html>

