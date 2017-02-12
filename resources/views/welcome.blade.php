
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $titulo }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- bootsrap -->
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="jumbotron text-center">
          <h1>Seja Bem Vindo</h1>
          <p>Prova Tecnica Laravel 5 | MySql | Bootstrap | Composer | Git </p> 
        </div>

        <div class="container">
          <div class="row">
            
            <div class="col-sm-4">
              <h3>Fernando Grasselli</h3>
              <p>Programador e Desenvolvedor de Sistemas</p>
              <p>saiba mais, clicando <a target="_black" href="https://www.linkedin.com/in/fernando-grasselli-79b62497/">aqui</a>!</p>

            </div>
            
            <div class="col-sm-4">
              
              @if($user)
                  <h3>Noticias</h3> 
                  
                    @foreach($feeds->get_items(0,9) as $item)
                    
                    <div class="alert alert-success"> {{ $item->get_title() }} </div>
                    </br>
                    
                    @endforeach
              @endif

                  <h3>Noticias</h3> 
                  <p> Faça seu Login para ver as noticias! </p>
                  <p> Clique <a href="\cadastro">aqui</a> para se cadastrar! </p>
            </div>
          
              <div class="col-sm-4">
                @if($user)
                     <h3> <a href="/acesso/logout">Logout</a> </h3>
                @else

                  <h3>Login</h3>
                    <form class="form-group" action="/login" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="txtEmail" class="label-control">Email:</label>
                        <input type="email" name="txtEmail" id="txtEmai" class="form-control">

                        <label for="txtPsw" class="label-copntrol">Senha:</label>
                        <input type="password" name="txtPsw" id="txtPsw" class="form-control">

                        <input type="submit" class="btn btn-primary">
                    </form>
                @endif
                </div>
          </div>
        </div>
    </body>

    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</html>
