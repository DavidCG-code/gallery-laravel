@extends('templates.app')


@section('content')
    <div class="container__options">
        <a href="{{route('upImage')}}">
            <button class="btn">New Image</button>
        </a>
    </div>

    <div class="container__grid">
        @foreach ($gallery as $item)

            <article>
                <a class="pepe" href="/{{$item->id}}">
                    <figure>
                        <img src="{{ asset('/storage/images/'.$item->image)}}" width="300"   height="auto" alt="images-Stock">
                    </figure>
                </a>
            </article>
        @endforeach
    </div>


@endsection