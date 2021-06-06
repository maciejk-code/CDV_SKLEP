@extends('layouts.app')

@section('content')

    <div class="product p-4">
        <div class="image">
            <h2>Galeria</h2>
            <img src="data:image/jpg;base64,{{$product->image}}" width="100%" height="300px"/>
        </div>
        <div class="product-info">
            <h2 class="product-name-single">{{$product->name}}</h2>
            <h2 class="product-price-single">{{$product->prize}} PLN</h2>
            <h4 class="p-4">Krótki opis produktu:</h4>
            <p class="product-description p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae dictum nibh. Aenean non vehicula sem. Aliquam dignissim sit amet neque euismod semper. Mauris dignissim dui ut vulputate aliquet. Proin aliquet dui vel urna semper dignissim. Nullam facilisis mauris ut augue pretium sollicitudin. Pellentesque at finibus enim. Mauris vitae quam eu metus pellentesque euismod in et eros. In tristique magna sit amet urna ultrices, at accumsan ex consequat. Proin suscipit, orci molestie lobortis vestibulum, justo velit finibus metus, vitae hendrerit ex nibh et orci. In quis tortor elementum, tristique nulla in, porttitor leo. Maecenas maximus varius pulvinar. Donec risus augue, fermentum pulvinar ante at, lobortis pulvinar felis. Nunc vitae libero aliquam, blandit mauris id, semper nibh.</p>
        </div>
    </div>

@endsection

<style>
    .image{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        width: 50%;
    }

    .product-info{
        width: 50%;
        text-align: center;
    }

    .product{
        display: flex;
    }

</style>
