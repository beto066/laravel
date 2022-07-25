<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Posts</title>
    @vite(['resources/css/index.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <div class="afastamento"></div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Página {{ $posts->currentPage() }}</th>
            <th scope="col">Usuario</th>
            <th scope="col">Titulo</th>
            <th scope="col">publicado</th>
            <th scope="col">data</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ (($post->published)? 'Sim': 'Não') }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>

        @endforeach
        </tbody>

    </table>

    @yield('pagination', View::make('layouts.pagination', compact(['posts'])))

    <div class="card">
        <div class="card-header text-center">
            Criar Novo Post
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('new_post') }}">

            @csrf
            @method('post')
{{--                <fieldset>--}}
                    <div class="row">
                        <div class="col-md-2">
                            <label for="user">Usuário:</label>
                        </div>
                        <div class="col-md-10">
                            <select name="user_id" class="form-control" id="user">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="title">Título:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Título"/>
                        </div>

                        <div class="col-md-2">
                            <label for="content">Conteúdo:</label>
                        </div>
                        <div class="col-md-10">
                            <textarea name="content" class="form-control" id="content" placeholder="Conteúdo"></textarea>
                        </div>
                        <div class="centralizado">
                            <label for="published">Publicado: </label>
                            <input type="checkbox" name="published" id="published"/>
                        </div>
                        <div class="col-12"></div>

                        <input class="btn btn-primary text-center centralizado" type="submit" name="enviar"/>
                    </div>
{{--                </fieldset>--}}
            </form>

        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</div>
</body>
</html>
