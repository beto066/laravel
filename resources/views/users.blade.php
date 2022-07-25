<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{ $username }}

@foreach($args as $arg)

    {{ $arg }}

@endforeach

@if($username == 'beto')
    <h1>Werbeth eh foda</h1>
@elseif($username == 'beto2')
    <h1>Beto eh foda</h1>
@else
    <h1>Ola mundo</h1>
@endif

@unless($username == 'beto')
    <h2>{{$username}} é foda</h2>
@endunless

@isset($args[1])
    <p>deu certo</p>
@endisset

<table>

    @for($i = 0; $i < 10; $i++)
        <tr>
            <td>{{ $i }}</td>
        </tr>
    @endfor

</table>

@while($whilezada == 'aaaaa')

    {{$whilezada .= 'a' }}
    <p>{{ $whilezada }}</p>

@endwhile

<table>
    @foreach($trens as $key=>$trem)
        <tr>
            <td>{{$key}}</td>
            <td>{{$trem}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>

