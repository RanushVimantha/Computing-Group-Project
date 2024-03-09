<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr-care</title>
    <link rel="stylesheet" href="styles/new_style.css">
    
</head>
<body>
<?php include('header.html');?>
<script type="text/javascript" src="js/light-dark.js"></script>


<div class="login-page">
  <div class="form">
    <img src="imgs/logo.png" style="width: 80%; height: auto; margin-bottom: 1.2rem;">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script>
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

<?php include('footer.html');?>
</body>
</html>