<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body class="page container">

<div class="popup">
<div class="popup__content">

{!! Form::open(['route'=>['store']]) !!}
<h1 class="popup__title">Добавить продукт</h1>
<p class="popup__subtitle">Артикул</p>
<input type="text" class="popup__input form-control" placeholder="Артикул" name="article"  value="{{old('article')}}">
<p class="popup__subtitle">Название</p>
<input type="text" class="popup__input form-control" placeholder="Название" name="name"  value="{{old('name')}}">
<p class="popup__subtitle">Статус</p>
<select id="disabledSelect" class="popup__input form-select ">
        <option name="option"  value="{{old('option')}}" >available</option>
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

<div class="navigation">
    <p class="navigation__text">
Продукты
</p>
</div>
<div class="content">
<header class="header">
    <p class="header__text">Продукты</p>
</header>
  <div class="list">
  




  <div class="table">
       <div class="table__header">
            <div>Артикул</div>
            <div>Название</div>
            <div>Статус</div>
            <div>Атрибуты</div>
       </div>
        @foreach (
    $tasks as $task)
    <a href="{{url('card/'.$task->article)}}">
    <div class="table__header">
    <div>{{ $task->article }}</div>
      <div>{{ $task->name }}</div>
      <div>{{ $task->status }}</div>
      <div>{{ $task->data }}</div>
     
    </div>
    </a>

    @endforeach
    </div>

      <button class="button__add btn btn-primary">Добавить</button>
      </div>
    </div>
 </div>

 


   
</div>
<script  type="module" src="../js/app.js"></script>
</body>
<html>