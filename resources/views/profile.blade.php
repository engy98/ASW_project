<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>
<body>

<br><br>
<div class="container-fluid well span6">
    <div class="row-fluid">
        <div class="span8">
            <h3>{{$user->username}}</h3>
            <h6>Email: {{$user->email}}</h6>
            <h6>phone: {{$user->phone}}</h6>

            <h3>Notifications</h3>
            @foreach($user->getNotifications() as $notification)
                <p>{{$notification}}</p>
            @endforeach
        </div>

    </div>
</div>
</body>
</html>