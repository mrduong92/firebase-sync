<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        {{ Html::style(asset('css/app.css')) }}
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            <example-component></example-component>
        </div>

        <script type="text/javascript">
            // Initialize Firebase
            window.firebaseConfig = {
                apiKey: "{{ config('services.firebase.api_key') }}",
                authDomain: "{{ config('services.firebase.auth_domain') }}",
                databaseURL: "{{ config('services.firebase.database_url') }}",
                storageBucket: "{{ config('services.firebase.storage_bucket') }}",
            };
        </script>
        {{ Html::script(asset('js/app.js')) }}
    </body>
</html>
