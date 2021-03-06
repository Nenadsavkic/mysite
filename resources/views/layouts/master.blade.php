<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts.partials.navbar')

     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 @yield('main')
             </div>
         </div>
     </div>
     @include('layouts.partials.footer')
</body>
</html>
