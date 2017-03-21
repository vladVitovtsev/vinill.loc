@extends('layouts.app')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Информация о пластинки
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" class="col-lg-2 col-md-2 col-xs-12 control-label">Название</label>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Название">
                    </div>
                </div>
                <div class="form-group">
                    <label for="count" class="col-lg-2 col-md-2 col-xs-12 control-label">Количество</label>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <input type="number" class="form-control" id="count" name="count" min="0" placeholder="Количество">
                    </div>
                </div>
                <div class="form-group">
                    <label for="size" class="col-lg-2 col-md-2 col-xs-12 control-label">Размер пластинок</label>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <input type="number" class="form-control" id="size" name="size" min="0" placeholder="Количество пластинок">
                    </div>
                </div>
                <div class="form-group">
                    <label for="label" class="col-lg-2 col-md-2 col-xs-12 control-label">Лейбл</label>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <input type="text" class="form-control" id="label" name="label" placeholder="Лейбл">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-lg-2 col-md-2 col-xs-12 control-label">Страна</label>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <input type="text" class="form-control" id="country" name="country" placeholder="Страна">
                    </div>
                </div>
                <div class="form-group">
                    <label for="year" class="col-lg-2 col-md-2 col-xs-12 control-label">Год издания</label>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <input type="text" class="form-control" id="year" name="year" placeholder="Год издания">
                    </div>
                </div>
                <div class="form-group">
                    <label for="condition" class="col-lg-2 col-md-2 col-xs-12 control-label">Состояние</label>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <select name="condition" id="condition" class="form-control">
                            <option value="" disabled selected>Состояние</option>
                            <option value="5">Отлично</option>
                            <option value="4">Хорошо</option>
                            <option value="3">Удовлетворительно</option>
                            <option value="2">Плохо</option>
                            <option value="1">Ужасно</option>
                        </select>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="exampleInputFile">File input</label>--}}
                    {{--<input type="file" id="exampleInputFile">--}}
                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                {{--</div>--}}
                {{--<div class="checkbox">--}}
                    {{--<label>--}}
                        {{--<input type="checkbox"> Проверить меня--}}
                    {{--</label>--}}
                {{--</div>--}}
                <div class="col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-xs-12 text-center">
                    <button type="submit" class="btn btn-default">Добавить</button>
                </div>
            </form>
        </div>
    </div>
@endsection