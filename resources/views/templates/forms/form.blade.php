<div class="container-forms">
  <div class="title-forms">
    <h3>Add Image</h3>
  </div>
  <form action="/create" method="POST"  enctype="multipart/form-data" class="forms">
    {{ csrf_field() }}
    <div class="forms__box">
      <label for="">Choice Image:</label>
      <input type="file" name="image">
    </div>
    <div class="forms__btn">
      <input type="submit" class="button" name="add" value="UpLoad">
    </div>
  </form>
</div>