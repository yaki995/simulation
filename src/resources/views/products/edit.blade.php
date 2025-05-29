@extends('layouts.app')

<div>
   <a href="{{ route('products.index') }}"> Back</a>
</div>

<form action="{{ route('products.update',$product->id) }}" method="POST">
   @csrf
   @method('PUT')

   <div>
       <strong>商品名</strong>
       <input type="text" name="name" value="{{ $product->name }}" placeholder="Name">
   </div>
   <div>
       <strong>値段</strong>
       <input type="number" name="price"  value="{{ $product->price }}">
   </div>
   <div>
       <input type="image" name="image"  value="{{ $product->image }}">
   </div>
   <div>
       <strong>季節</strong>
   </div>
   <div>
       <strong>商品説明</strong>
       <textarea style="height:150px" name="description" placeholder="description">{{ $product->description }}</textarea>
   </div>
   <div>
       <button type="submit">変更保存</button>
   </div>

</form>
