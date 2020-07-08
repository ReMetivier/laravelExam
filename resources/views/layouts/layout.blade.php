<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
      <header>
          <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/listing">Listing</a></li>
            <li><a href="/ajout">ajout d'animal</a></li>
          </ul>
      </header>
      <main class="center">
        @yield('content')
      </main>
      <footer></footer>
  </body>
</html>
