@extends('templates.app')

@section('content')
   @include('templates.partials.menu')

   <div class="v-center">
      <div class="container__show">

         <div class="container__show__card">
            <div>
               <figure class="show__box">
                  <img src="{{ asset('./storage/images/'. $image->image) }}" class="show__box--image" >
               </figure>
            </div>
   
            <div class="container__show__card--text">
               <h1>{{ $image->title }}</h1>
               <p>{{ $image->description }}</p>
            </div>
   
            <div class="container__show__card__author">
               <div>
                  <p>Uploaded by:</p>
               </div>
               <div class="container__show__card__author--avatar">
                  <figure>
                     <img src="{{ asset('./storage/images/'. $author->avatar) }}" alt="Avatar User">
                  </figure>
               </div>
      
               <div class="container__show__author--name">
                  <p>{{$author->name}}</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   

  
@endsection