<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
                    <li> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login
</button></li>
                  </ul>
    </div>
  </div>
</nav>

<!-- body content -->

  <div class="jumbotron" id="myContainer">
          <h1>Welcome to the website</h1>
          <p>You will definatly learn many things from here.</p>
          <p>To learn please signup</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Signup
</button>
      </div>
<form method="post" id="loginform">
        <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <h4 id="myModalLabel">Login: </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Login message from PHP file-->
                  <div id="loginmessage"></div>
                  

                  <div class="form-group">
                      <label for="loginemail" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="loginpassword" class="sr-only">Password</label>
                      <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
                  </div>
                
                  </div>
                  
             
              <div class="modal-footer">
                  <input class="btn btn-primary " name="login" type="submit" value="Login">
                  <button type="button" class="btn" data-bs-dismiss="modal" >Cancel</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Signup
</button>
</div>
              </div>
          </div>
      </div>
      </div>
</form>
      
      
      
      
      <!--Sign up form--> 
      <form method="post" id="signupform">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <h4 id="myModalLabel">
                    Sign up today and Start using our website 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Sign up message from PHP file-->
                  <div id="signupmessage" ></div>
                  <div class="form-group">
                      <label for="username" class="sr-only">Name:</label>
                      <input class="form-control" type="text" name="name" id="name" placeholder="Enter Your Name" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="username" class="sr-only">Username:</label>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="email" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
                  </div>
                  <div class="form-group" require>
                 Gender <br>
                 <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>
                  </div>

                  <div class="form-group">
                    which programing laguage you know?
                  <br><input type="checkbox" name="language[]" value="Python">
  <label for="python"> Python</label><br>
  <input type="checkbox" name="language[]" value="Java">
  <label for="java">Java</label><br>
  <input type="checkbox" name="language[]" value="C++" >
  <label for="cpp"> C++</label><br>
  <input type="checkbox" name="language[]" value="C" >
  <label for="c"> C</label>
                  </div>

                  <div class="form-group">
                      <label for="password" class="sr-only">Choose a password:</label>
                      <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="password2" class="sr-only">Confirm password</label>
                      <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                  </div>
              </div>
              <div class="modal-footer">
               <button type="submit" class="btn btn-primary">signup</button>
               <button type="button" class="btn" data-bs-dismiss="modal" >Cancel</button>
              </div>
          </div>
      </div>
      </div>
      </form>


      <link href="style.css" rel="stylesheet">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>