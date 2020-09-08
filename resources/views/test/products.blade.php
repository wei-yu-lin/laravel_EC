@extends('layouts.master')

@section('商店后台', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/test/product/new"><button class="btn btn-success">新增商品</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>名稱</td>
                    <td>價格</td>
                    <td>圖片</td>
                    <td>操作</td>
                    </thead>
                    <tbody>

                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>${{$product->price}}</td>
                            <td>{{$product->file->original_filename}}</td>
                            <td><a href="/test/product/destroy/{{$product->id}}"><button class="btn btn-danger">删除</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection