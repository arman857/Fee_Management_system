<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<style>
    .divup{
        border:1px solid #fff;
        border-radius: 20px;
        box-shadow:-10px -10px 15px #fff;
    }
    .divdown{
        border-top:1px solid #fff;
        border-radius: 20px;
        background-color: #dde0d7;
        box-shadow: 5px 9px 15px #888888;
        margin-left: -17px;
        margin-right: -18px;
    }

    .text{
        border-color: transparent;
        border-bottom: 1px solid black;
         background-color:#dde0d7
    }

    .forbutton{
        border-right: 1px solid #dde0d7;
        border-bottom: 1px solid #dde0d7;
        box-shadow: 5px 5px 5px #888888;
        border-radius: 40px;
        width:89%;
    }
    </style>
</head>
<body style="background-color: #dde0d7;">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-4 divup">
          <div height="40px" width="100px" class="divdown">
            <br>
       <i> <h2 class="text-center text-dark font-bold">Welcome</h2></i>
        <br><br>
          <div class="container text-center">
            <input type="text" class="form-control text" placeholder="User Name">
            <br><br>
            <input type="password" class="form-control text" placeholder="Password">
            <br><br>
            <button class="btn btn-success bt-lg forbutton">Login</button>
            <br><br><br>
           <i> <p> Dont 't Have An Account?&nbsp;<a href="#" class="text-dark font-weight-bold">Sing Up</a></p></i>
            <br><br><br>
          </div>
          </div>
            </div>
        </div>
    </div>
</body>
</html>