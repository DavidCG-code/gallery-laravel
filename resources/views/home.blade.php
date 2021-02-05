@extends('templates.app')


@section('content')
    @include('templates.partials.menu')
    <div id="searchInput" class="container__search none">
        <form action="">
            <input type="search" class="container__search__input" name="search" placeholder="Search...">
        </form>
    </div>
    <div class="container__grid">
        @foreach ($gallery as $item)

            <article>
                <a href="{{route('show', $item->id) }}">
                    <figure>
                        <img src="{{ asset('/storage/images/'.$item->image)}}"  alt="images-Stock">
                    </figure>
                </a>
            </article>
        @endforeach
    </div>

    

@endsection