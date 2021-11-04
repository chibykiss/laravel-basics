<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','Vibeapp')}}</title>
    <style>
        nav{
            width: 50%;
            height: 30px;
            margin: 0 auto;
            background-color: rgb(43, 43, 43);
            display: flex;
            justify-content: center;
        }
        ul{
            display: flex;
            align-items: center;
            justify-content: center;
           
        }
        ul li{
            text-align: center;
            display: inline;
            margin-right: 20px;
            color: #fff;
            border-right: 2px solid red;
            padding: 0px 5px 0px 5px;
        }
        ul li:hover{
           color: red; 
        }
        h1,h3{
            text-align: center;
        }

        ul li a{
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{url('/')}}" >Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a><li>
            </ul>
        </nav>
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
    </footer>
</body>
</html>