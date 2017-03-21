@extends('layouts.app')

@section('content')
    @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#">{{ $product->title }}</a>
                    </h4>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <tr>
                            <td>Количество</td>
                            <td>{{ $product->count }}</td>
                        </tr>
                        <tr>
                            <td>Размер</td>
                            <td>{{ $product->size }}</td>
                        </tr>
                        <tr>
                            <td>Лейбл</td>
                            <td>{{ $product->label }}</td>
                        </tr>
                        <tr>
                            <td>Страна</td>
                            <td>{{ $product->country }}</td>
                        </tr>
                        <tr>
                            <td>Год</td>
                            <td>{{ $product->yeat }}</td>
                        </tr>
                        <tr>
                            <td>Состояние</td>
                            <td>{{ $product->condition }}</td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-link" type="button">Изменить</button>
                </div>
            </div>
        </div>
    @endforeach
@endsection