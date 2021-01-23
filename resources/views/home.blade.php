@extends('templates.app')


@section('content')
  

    <div class="container__grid">
        @foreach ($gallery as $item)

            <article>
                <a class="pepe" href="{{route('pepe', $item->id) }}">
                    <figure>
                        <img src="{{ asset('/storage/images/'.$item->image)}}" width="300"   height="auto" alt="images-Stock">
                    </figure>
                </a>
            </article>
        @endforeach
    </div>

@endsection