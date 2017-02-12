<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$dados}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 	
	   <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    </head>

    <body>
        <div class="container-fluid">
            <div class="col-md-6">
                <div class="form-group">
                
                	{{ Form::open(array('action' => 'Acesso@cadastro', 'role' => 'form')) }}
                    
                    {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}
                    {{ Form::text('nome', null, array('placeholder'=>'Seu nome...', 'class'=>'form-control', 'required')) }}

                    {{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}
                    {{ Form::email('email', null, array('placeholder'=>'Seu e-mail...', 'class'=>'form-control', 'required', 'type'=>'email')) }}

                    {{ Form::label('password', 'Senha', array('class'=>'control-label')) }}
                    {{ Form::password('password', null, array('placeholder'=>'*******', 'class'=>'form-control', 'required')) }}

                    {{ Form::submit('Enviar Cadastro', array('class' => 'btn btn-default')) }}

                    {{ Form::close() }}
                

                </div>
            </div>
        </div>
    </body>

</html>

<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>