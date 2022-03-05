!DOCTYPE html>
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



<div class="popup">
<div class="popup__content">
<div class="popup__link-group">
<i class="bi bi-x-lg popup__close"></i>
</div>
{!! Form::open(['route'=>['store']]) !!}
<h1 class="popup__title">Добавить продукт</h1>
<p class="popup__subtitle">Артикул</p>
<input type="text" class="popup__input form-control" placeholder="Артикул" name="article"  value="{{old('article')}}">
<p class="popup__subtitle">Название</p>
<input type="text" class="popup__input form-control" placeholder="Название" name="name"  value="{{old('name')}}">
<p class="popup__subtitle">Статус</p>
<select  class="popup__input form-select" name="status"  value="{{old('status')}}">
        <option >available</option>
        <option>unavailable</option>
      </select>
      <h1 class="popup__title">Атрибуты</h1>
<div class="poput__atribut">

     </div>
    <p class="popup__btn popup__subtitle">+ Добавить атрибут</p>
 <button  class="btn btn-primary">Добавить</button>
 {!! Form::close() !!}

</div>
</div>
</body>