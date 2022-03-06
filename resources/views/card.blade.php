<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body class="page">

<div class="popup popup_is-opened">

<div class="popup__content">
<div class="popup__link-group">
<a class="link" href="{{url('update/'.$tasks->id)}}">
<i class="bi bi-pen"></i>
</a>
<a class="link" href="{{url('/')}}">
<i class="bi bi-trash"></i>
</a>
<a class="link" href="{{url('/')}}">
<i class="bi bi-x-lg"></i>
</a>
</div>
<h1 class="popup__title">
{{ $tasks->article }}
</h1>
<div class="popup__card-container">
<h2 class="popup__subtitle">
Артикул
</h2>
<h2 class="popup__subtitle">
{{ $tasks->article }}
</h2>
</div>


<div class="popup__card-container">
<h2 class="popup__subtitle">
Название
</h2>
<h2 class="popup__subtitle">
{{ $tasks->name }}
</h2>
</div>

<div class="popup__card-container">
<h2 class="popup__subtitle">
Статус
</h2>
<h2 class="popup__subtitle">
{{ $tasks->status }}
</h2>
</div>

<div class="popup__card-container">
<h2 class="popup__subtitle">
Статус
</h2>
<h2 class="popup__subtitle">
{{ $tasks->data }}
</h2>
</div>

</div>
</div>
</body>

</html>