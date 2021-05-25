<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Charm|Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="./public/css/login.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Result</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">

                            <head>
    <h1>{{__('create.Creat a new contract')}}</h1>
    <style type="text/css">
        .error-message { color: red; }
    </style>
</head>
<body>
@if (count($errors) > 0)
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('create') }}" method="post" >
@csrf
<div class="container">            
       <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">{{__('create.Language Option')}}
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="language/en">English</a></li>
          <li><a href="language/vi">Tiếng Việt</a></li>
          <li><a href="language/ja">ジャパニーズ</a></li>
        </ul>
      </div>
    </div>
    
    <div class="form-label-group">
        <label for="inputName">{{__('create.Name')}}</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="{{__('create.Name_placeholder')}}" autofocus>                                    
    </div>
    <div class="form-label-group">
        <label for="inputAddress">{{__('create.Address')}}</label>
        <input type="text" id="address" class="form-control" name="address" placeholder="{{__('create.Address_placeholder')}}" >             
    </div>
    <div class="form-label-group">
        <label for="inputEmail">{{__('create.Email')}}</label>
        <input type="text" id="email" class="form-control" name="email" placeholder="{{__('create.Email_placeholder')}}" >                                    
    </div>
    <div class="form-label-group">
        <label for="inputContent">{{__('create.Content')}}</label>
        <input type="text" id="content" class="form-control" name="content" placeholder="{{__('create.Content_placeholder')}}" >             
    </div>
    <br>
        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="create" name="create">{{__('create.Create')}}</button>

</form>
</body>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</html>