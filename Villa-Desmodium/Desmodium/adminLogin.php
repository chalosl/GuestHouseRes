<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Villa Desmodium</title>
    <link href="dist/images/dynamic-logo-letter-d-logo-design-template-vector-8933479.jpg" rel="icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dist/css/normalizecss.css" type="text/css">
    <link rel="stylesheet" href="dist/css/homestyle.css" type="text/css">
</head>
<body>

<form action="adminLogin.php" method="post">
    <div class="jumbotron" style="right: 0;left: 0;top: 0;bottom: 0;margin: auto;margin-left: 10%;margin-right: 10%;margin-top: 7%">
        <h3 style="margin-left: 38%">Admin Login</h3>
        <div class="form-group">
            <label for="userName">Admin UserName</label>
            <input type="text" class="form-control" id="userName"  placeholder="User Name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your User Name with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <!--<input type="checkbox" class="form-check-input" id="exampleCheck1">-->
            <!--<label class="form-check-label" for="exampleCheck1">Check me out</label>-->
        </div>
        <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
    </div>

</form>




<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
    // $user = $("#userName").val();
    // $pass = $("#password").val();
    // $("#btnSubmit").click(function () {
    //     if($user=="user" && $pass=="user"){
    //         window.location="admin.php";
    //     }else{
    //         // alert("User Name Or Password Incorrect");
    //     }
    // })



</script>
</body>
</html>