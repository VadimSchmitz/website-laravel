<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/style.css">
</head>

<div class="container">
    <a name="top"></a>
    <div class="navbar">
        <ul>
            <ul>
                <li><a class="{{Request::path() === '/' ? 'current' : ''}}" href="/">Landingspagina</a></li>
                <li><a class="{{Request::path() === 'introductie' ? 'current' : ''}}" href="/introductie">Introductie</a></li>
                <li><a class="{{Request::path() === 'dashboard' ? 'current' : ''}}" href="/dashboard">Dashboard</a></li>
                <li><a class="{{Request::path() === 'motivatie' ? 'current' : ''}}" href="/motivatie">Motivatie</a></li>
                <li><a class="{{Request::path() === 'beroepsbeeld' ? 'current' : ''}}" href="/beroepsbeeld">Beroepsbeeld</a>
                <li><a class="{{Request::path() === 'articles' ? 'current' : ''}}" href="/articles">Article</a>

                </li>
            </ul>
        </ul>
    </div>

<body>
@yield('content')
</div>
</body>

</html>
