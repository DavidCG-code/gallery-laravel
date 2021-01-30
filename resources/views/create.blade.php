@extends('templates.app')

@section('content')
  @include('templates.partials.menu')
    <div class="form-title">
      <h1>Gallery Laravel</h1>
    </div>

    <div id="viewAvatar">

    </div>

    <div class="container-forms">
        <form action="/create" method="POST"  enctype="multipart/form-data" class="forms">
         @csrf
          <div class="forms__box">
            <label for="avatar" class="button__avatar">Select Image</label>
            <input type="file" id="avatar" name="avatar" class="none">
          </div>
        
          <div class="forms__btn">
            <input type="submit" class="button button--login" name="add" value="Upload">
          </div>
        </form>
      </div>
      
@endsection