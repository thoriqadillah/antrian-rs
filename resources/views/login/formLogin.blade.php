
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <!----css custom file link-->
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <!---Fontawesome CDN link----->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container">
      <div class="img">
        <img src="https://i.ibb.co/RCNtghn/medical-g0c04e1ecf-1280.png">
      </div>
      <div class="login-content">
        <form action="index.html">
          <img src="https://svgshare.com/i/Jcf.svg">
          <h2 class="title">Welcome Admin</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Email</h5>
              <input type="text" class="input">
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
              <input type="password" class="input">
            </div>
          </div>
          <a href="#">Forgot Password?</a>
          <input type="submit" class="btn" value="Login">
        </form>
      </div>
    </div>

</body>
</html>