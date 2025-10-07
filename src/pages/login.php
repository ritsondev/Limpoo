<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login | Limpoo</title>
</head>
<body>
    

<header>

<a href="../index.php"><img src="" alt="comeback to initial"></a>

</header>

<main>

<div class="information_words" id="information_words">

<p>

<span id="info1" class="info1">Connect</span>
<span id="info2" class="info2">With Us</span>
<div class="create_element">


<span>Again</span>

<a href=""><button>Create</button></a>


</div>

</p>

</div>

<div class="form_login" id="form_login">

<form action="../utils/user_verify.php" method="post">

<label for="email">Email</label>
<input type="email" placeholder="email" name="email" class="email" id="email" required tabeindex="1" autofocus>

<label for="password">Password</label>
<input type="password" placeholder="password" name="password" class="password" id="password" required tabeindex="2">

<input type="hidden" value="login">

<button type="submit">Login</button>

</form>

</div>

</main>


</body>
</html>