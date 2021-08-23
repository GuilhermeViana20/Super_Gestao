<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super Gestão - @yield('titulo')</title>
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
        <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon"/>
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon"/>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>

    <body>

        @include('site.layouts._partials.topo')
        
            <div class="container">
                @yield('conteudo')
            </div>

        @include('site.layouts._partials.rodape')

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        <script type="text/javascript">
            jQuery("#telefone")
                .mask("(99) 99999-999?9")
                .focusout(function (event) {  
                    var target, phone, element;  
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                    phone = target.value.replace(/\D/g, '');
                    element = $(target);  
                    element.unmask();
                    if(phone.length > 10) {  
                        element.mask("(99) 99999-999?9");
                    } else {  
                        element.mask("(99) 9999-9999?9");
                    }
                });
        </script>
    </body>
</html>