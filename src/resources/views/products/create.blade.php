@extends('layouts.app')

<div>
   <h2>商品登録</h2>
</div>
<div>
   <a href="{{ route('products.index') }}"> Back</a>
</div>

<form action="{{ route('products.store') }}" method="POST">
   @csrf

   <div>
       <strong>Name:</strong>
       <input type="text" name="name" placeholder="Name">
   </div>
   <div>
       <strong>Price:</strong>
       <input type="number" name="price" placeholder="Price">
   </div>
   <div>
       <strong>Image</strong>
       <input type="image" name="image" placeholder="Image">
   </div>
   <div>
       <strong>Description:</strong>
       <textarea style="height:150px" name="description" placeholder="Description"></textarea>
   </div>
   <div>
       <button type="submit">登録</button>
   </div>

</form>