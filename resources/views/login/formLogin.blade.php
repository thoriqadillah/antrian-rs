
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <!----css custom file link-->
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <!---Fontawesome CDN link----->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="img">
        <img src="https://i.ibb.co/RCNtghn/medical-g0c04e1ecf-1280.png">
      </div>
      <div class="login-content">
          
        <form action="index.html" class="form-login" method="post">
            @csrf
          
          <h2 class="title">Welcome Admin</h2>
          
            <label style="color: #696F79;font-style: normal;font-weight: 500; font-size: 16px; " class="l-email">Email</label><br><br>
            <input type="text" class="t-input" name="email" placeholder="Enter Email" id="email"required><br>
            <label style="color: #696F79;font-style: normal;font-weight: 500; font-size: 16px;">Password</label><br><br>
            <input type="Password" class="t-input" placeholder="Enter Password" name="password" required><br>
            
          <a href="#">Forgot Password?</a>
          <button type="submit" class="btn" name="submit-btn">Login</button>
        </form>
      </div>
    </div>

</body>
</html>