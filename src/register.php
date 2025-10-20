<?php

require_once("url.php");

?>


<main>

<div class="word_capture">

<div class="logo">


</div>

<p class="word1">

<p>Get Started with Us</p>
<span>complete these easy steps to register your account</span>

</p>


</div>

<!--formulario-->

<div class="form_content">

<h2>Sign Up Account</h2>
<span>Enter your personal data to create your account</span>

<div class="connect_links">

<ul class="links_social" id="links_social">

   <a href="#"><li><i><img src="assets\icons\google.svg" alt=""></i><span>Google</span></li></a>
   <a href="#"><li><i><img src="assets\icons\github.svg" alt=""></i><span>Github</span></li></a>

</ul>

</div>

<p class="or">Or</p>

<form action="user_verify.php" method="post" class="form_origun" id="form_origin">

<div class="name_informations">

<div>
<label for="first_name"></label>
<input type="text" class="first_name" autofocus tabeindex="1" required placeholder="eg.Ritson" name="first_name">
</div>

<div>
<label for="last_name"></label>
<input type="text" class="last_name" autofocus tabeindex="2" required placeholder="eg.Dev" name="last_name">
</div>

</div>

<label for="email">Email</label>
<input type="email" class="email" autofocus tabeindex="3" required placeholder="eg.Ritsondev@gmail.com" name="email">

<label for="password">Password</label>
<input type="password" class="password" autofocus tabeindex="4" required placeholder="Enter your password" name="password">

<label for="confirm_password">Confirm Password</label>
<input type="password" class="confirm_password" autofocus tabeindex="5" required placeholder="Confirm your password" name="confirm_password">

<input type="hidden" name="type" value="register">
<button class="sign_up" id="sign_up">
    Sign Up
</button>

<span>Already have an account?<a href="login.php">Login</a></span>

</form>

</div>

</main>


</body>
</html>