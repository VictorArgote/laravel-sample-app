<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
    <title>Laravel 5.5 &amp; Bootstrap 4 starter kit</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/zoadilack">Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <style>
        .dbsettings li {
            list-style-type: none;
            padding: 0;
        }

        .dbsettings li {
            list-style-type: none;
            width: 50%;
        }

        .dbsettings li:nth-child(odd) {
            float: left;
            font-weight: bold;
            text-align: left;
        }

        .dbsettings li:nth-child(even) {
            float: right;
            text-align: left;
        }

        @media only screen and (max-width: 480px) {
            .dbsettings li {
                float: none;
                width: 100%;
                text-align: left;
            }
        }
    </style>

    <div class="container">
        @if (!empty($registration))
        <div class="alert alert-success" role="alert">
          <strong>Well done!</strong> You successfully registered to the site.
        </div>
        @endif

        @if (!empty($validator))
        <div class="alert alert-danger" role="alert">
          <strong>Error: </strong> {{$validator}}
        </div>
        @endif
        
        <div class="starter-template">
            <h1 id="title_">Database Settings</h1>
            <p class="lead">Use the following settings to access application multiple database connections.</p>
        </div>
        
        <h3 class="text-center">Database One</h3>
        <br>
        <div class="row text-center">
            <div class="">
                <ul class="dbsettings">
                    <li>DB_CONNECTION</li>
                    <li>{{ env('DB_CONNECTION') }}</li>
                    <li>DB_HOST</li>
                    <li>{{ env('DB_HOST') }}</li>
                    <li>DB_PORT</li>
                    <li>{{ env('DB_PORT') }}</li>
                    <li>DB_DATABASE</li>
                    <li>{{ env('DB_DATABASE') }}</li>
                    <li>DB_USERNAME</li>
                    <li>{{ env('DB_USERNAME') }}</li>
                    <li>DB_PASSWORD</li>
                    <li>{{ env('DB_PASSWORD') }}</li>
                </ul>
            </div>
        </div>

        <hr>
        <br><br>
        <h3 class="text-center">Database Two</h3>
        <br>
        <div class="row text-center">
            <div class="">
                <ul class="dbsettings">
                    <li>DB_CONNECTION_2</li>
                    <li>{{ env('DB_CONNECTION_2') }}</li>
                    <li>DB_HOST_2</li>
                    <li>{{ env('DB_HOST_2') }}</li>
                    <li>DB_PORT_2</li>
                    <li>{{ env('DB_PORT_2') }}</li>
                    <li>DB_DATABASE_2</li>
                    <li>{{ env('DB_DATABASE_2') }}</li>
                    <li>DB_USERNAME_2</li>
                    <li>{{ env('DB_USERNAME_2') }}</li>
                    <li>DB_PASSWORD_2</li>
                    <li>{{ env('DB_PASSWORD_2') }}</li>
                </ul>
            </div>
        </div>

        <br><br>
        <form class="form-signin" style="max-width: 480px;" action="/zoadilack/notify" method="post">
            <h3 class="form-signin-heading">Register</h3>
            <br>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email">
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>

    <script src="{{ mix("js/app.js") }}"></script>
</body>
</html>
