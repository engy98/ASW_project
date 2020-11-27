


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>


<div class="span3">
    <h2>Sign Up</h2>
    <form method="post" action="{{route('register')}}">

        @csrf
        <label>Username</label>
        <input type="text" name="username" class="span3">
        <label>Email Address</label>
        <input type="email" name="email" class="span3">

        <label>Password</label>
        <input type="password" name="password" class="span3">

        <label>Phone</label>
        <input type="text" name="phone" class="span3">

        <input type="submit" value="Sign up" class="btn btn-primary pull-right">
        <div class="clearfix"></div>
    </form>
</div>
</body>
</html>