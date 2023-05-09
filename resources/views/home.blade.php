<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

      
    </head>
    <body>
        <header>
            <nav>
                <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('dowload')}}">Dowload</a></li>
                </ul>
            </nav>
        </header>

        <main>
                <h1>Hello World</h1>
            <ul>
                Verdura:
                @foreach($listaverdura as $verdura)
                    <li>{{$verdura}}</li>
                @endforeach
            </ul>
            <ul>
                Frutta:
                @foreach($listafrutta as $frutta)
                    <li>{{$frutta}}</li>
                @endforeach
            </ul> 
        </main>
        
                 
          
    </body>
</html>
