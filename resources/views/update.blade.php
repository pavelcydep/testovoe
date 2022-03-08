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
        <a class="link" href="{{url('/')}}">
          <i class="bi bi-x-lg popup__close"></i>
        </a>
      </div>

      <form action="{{ url('storeUpdate/'.$tasks->id) }}" method="POST">

        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <h1 class="popup__title">Редактировать {{$tasks->name}}</h1>
        <p class="popup__subtitle">Артикул</p>
        <input type="text" class="popup__input form-control" placeholder="Артикул" name="article" value="{{$tasks->article}}">
        <p class="popup__subtitle">Название</p>
        <input type="text" class="popup__input form-control" placeholder="Название" name="name" value="{{$tasks->name}}">
        <p class="popup__subtitle">Статус</p>
        <select class="popup__input form-select" name="status" value="{{$tasks->status}}">
          <option selected value="{{$tasks->status}}">{{$tasks->status}}</option>
          <option>свободен</option>
          <option>занят</option>
        </select>


        <button class="btn btn-primary">Изменить</button>
      </form>

    </div>
  </div>
  <script type="module" src="../js/app.js"></script>
</body>