<?php

include_once("../utils/header.php");

?>


<main>

<!--login-->

<div class="form_login" id="form_login">

<p>Register</p>

<form action="../utils/user_verify.php" method="post">


<label for="email">Email</label>
<input type="email" placeholder="Limpoo2025@gmail.com" name="email" class="email" id="email" required tabeindex="3" autofocus>

<label for="password">Password</label>
<input type="password" placeholder="password" name="password" class="password" id="password" required tabeindex="4">

<label for="confirm_password">Confirm Password</label>
<input type="password" placeholder="Confirm password" name="password" class="password" id="password" required tabeindex="5">

<input type="hidden" value="register">

<button type="submit">Register</button>

</form>

</div>

<!--login-->

<div class="form_login" id="form_login">

<p>Login</p>

<form action="../utils/user_verify.php" method="post">

<label for="email">Email</label>
<input type="email" placeholder="email" name="email" class="email" id="email" required tabeindex="1" autofocus>

<label for="password">Password</label>
<input type="password" placeholder="password" name="password" class="password" id="password" required tabeindex="2">

<input type="hidden" value="login">

<button type="submit">Login</button>

</form>

<div class="links_connect">
    
</div>

</div>

</main>


</body>
</html>