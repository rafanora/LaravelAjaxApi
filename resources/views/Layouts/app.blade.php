<html>
    <head>
        {{-- ESTA META DEVE ESTAR NA PRINCIPAL PARA USAR O X-CSRF-TOKEN --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{-- BOOTSTRAP = JQUERY --}}
        <link href="{{ asset('css/app.css') }}" ref="stylesheet">

        {{-- AJAX FUNÇÕES --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de produtos</title>
    </head>
    <body>
        <div class="container">
            <main role="main">
                @hasSection('body')@yield('body') @endif
            </main>
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/javascript">
    </body>
</html>








