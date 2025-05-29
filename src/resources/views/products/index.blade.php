@extends('layouts.app')

@section('content')
<a href="{{ route('products.create') }}"> Create New 商品登録</a>

    <table>
        <tr>
            <th>商品名</th>
            <th>値段</th>
            <th>商品登録</th>
            <th>商品画像</th>
            <th >季節</th>
            <th >商品説明</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->image}}</td>
            <td>{{ $product->description }}</td>

            <td>
                <a href="{{ route('products.show',$product->id) }}">登録</a>
                <a href="{{ route('products.edit',$product->id) }}">戻る</a>
            </td>
        </tr>
         @endforeach
    </table>
@endsection