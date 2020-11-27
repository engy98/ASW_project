<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        .custab{
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
        }
        .custab:hover{
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
            <a href="{{route('templates.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Template</a>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>English Content</th>
                <th>Arabic Content</th>
                <th class="text-center">Actions</th>
            </tr>
            @foreach(\App\Models\Template::all() as $temp)
                <tr>
                    <td>{{$temp->id}}</td>
                    <td>{{$temp->name}}</td>
                    <td>{{$temp->english_content}}</td>

                    <td>{{$temp->arabic_content}}</td>
                    <td class="text-center">
                        <a class='btn btn-info btn-xs' href="{{route('templates.edit',['template'=>$temp])}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a class='btn btn-info btn-xs' href="{{route('templates.show',['template'=>$temp])}}"><span class="glyphicon glyphicon-eye"></span> Show</a>
{{--
                        <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
--}}

                    <form action="{{route('templates.destroy',['template'=>$temp])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-remove"></span> Del</a></button>
                    </form>
                </tr>
                @endforeach
            </thead>
        </table>
    </div>
</div>
</body>
</html>