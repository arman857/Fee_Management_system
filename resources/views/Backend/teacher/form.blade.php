<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>From</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('CSS/bootstarp.css')}}">
    <!-- JavaScript Bundle with Popper -->
<body>
 
     <div class="container">
      <div class="row col-md-6 offset-3">
        <h2 class="text-center text-primary">Ragistration Form</h2>
      
        <form method="" onsubmit="return myfun()">
          <div class="form-group">
            <label for="userName">User Name</label>
            <input type="text" placeholder="Name" class="form-control" id="userName">
      </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" placeholder="Password" class="form-control" id="password">
    </div>

    <div class="form-group">
      <label for="password">Confirm Password</label>
      <input type="text" placeholder="Password" class="form-control" id="cofirmPasswordn">
</div>

<div class="form-group">
  <label for="emailId">Email Id</label>
  <input type="text" placeholder="Email Id" class="form-control" id="imailId"><br>
</div>
<div class="text-center">
  <input type="Submit" class="btn btn-primary">
</div>
    </form>
     </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script type="text/javascript">
       function myfun(){
    var UserName=document.getElementById('UserName').value;
     var password=document.getElementById('password').value;
     var confirmpassword=document.getElementById('confirmpassword').value;
     var email=document.getElementById('email').value;

     if(UserName==""){
        document.getElementById('userName').innerHTML="<br>**please fill the name field";
        return false;
    }

    if(password==""){
        document.getElementById('password').innerHTML="<br>**please fill the password field";
        return false;
    }

    if(confirmpassword==""){
        document.getElementById('cofirmPasswordn').innerHTML="<br>**please fill the Confirm password field";
        return false;
    }
    if(email==""){
        document.getElementById('imailId').innerHTML="<br>**please fill the Email Id field";
        return false;
    }
  }
    </script>
</body>
</html>
