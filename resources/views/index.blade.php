@extends('layouts.welcome')

@section("content")


    <div class="container">


        <h1>Форма обратной связи!</h1>


        @if( count( $errors ) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Ошибка валидации: </strong>{{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        @elseif(Session::has('success') && count( $errors ) ==0)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


    <form name="info-form" method="post">

        {{ csrf_field() }}

        <div class="info-form">
            <div class="form-group">
                <label class="form-label form-label_hidden" for="user-name">Имя</label>
                <input class="form-control {{{ $errors->first('name') ? 'error' : '' }}}" type="text"  value="{{ old('name') }}" name="name" id="user-name"  placeholder="Имя*" required>
                @if($errors->first('name'))<div class="form-validator">{{$errors->first('name')}}</div>@endif
            </div>
            <div class="form-group">
                <label class="form-label form-label_hidden" for="user-tel">Телефон</label>
                <input class="form-control  {{{ $errors->first('phone') ? 'error' : '' }}}"  pattern="^\+?[0-9]{5,16}$"  type="tel" value="{{ old('phone') }}" id="user-tel" name="phone" placeholder="Телефон*" required>
                @if($errors->first('phone'))<div class="form-validator">{{$errors->first('phone')}}</div>@endif
            </div>
            <div class="form-group">
                <label class="form-label form-label_hidden" for="user-email">Email</label>
                <input class="form-control {{{ $errors->first('email') ? 'error' : '' }}}" type="email" value="{{ old('email') }}"  id="user-email" name="email" placeholder="Email*" required>
                @if($errors->first('email'))<div class="form-validator">{{$errors->first('email')}}</div>@endif
            </div>
            <div class="form-group">
                <label class="form-label form-label_hidden" for="user-message">Комментарий</label>
                <textarea class="form-control {{{ $errors->first('comment') ? 'error' : '' }}}" id="user-message" name="comment" placeholder="Комментарий*" required>{{ old('comment') }}</textarea>
            </div>
            <button class="btn btn-dark" type="submit">Отправить</button>
        </div>
    </form>


    </div>
@endsection
