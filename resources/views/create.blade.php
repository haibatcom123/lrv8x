<!doctype html>
<html>
<head>
    <title>Login Form</title>
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

    <form action="{{router('create')}}" method="post">
        @csrf
        <p>Name<br>
            <input type="text" name="name" value=""></p>
        <p>Address<br>
            <input type="text" name="address" value=""></p>
        <p>Email<br>
            <input type="text" name="email" value=""></p>
        <p>Content<br>
            <input type="text" name="content" value=""></p>

        <p><button type="submit">Submit</button></p>
    </form>
</body>
</html> 