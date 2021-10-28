<form class="settings-form" action="{{ isset($image) ? route('managment.images.update',$image) : route('managment.images.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{isset($image) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="image-name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="image-name" placeholder="Name..." required="" name="name" value="{{isset($image->name) ? $image->name : ''}}">
        @error('name')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image-width" class="form-label">Width : </label>
        <input type="text" class="form-control" id="image-width" placeholder="Width..."  name="width" value="{{isset($image->width) ? $image->width : ''}}">
        @error('width')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image-heigth" class="form-label">Heigth : </label>
        <input type="text" class="form-control" id="image-heigth" placeholder="Heigth..."  name="heigth" value="{{isset($image->heigth) ? $image->heigth : ''}}">
        @error('heigth')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image-alt" class="form-label">Alt : </label>
        <input type="text" class="form-control" id="image-heigth" placeholder="Alt..." required="" name="alt" value="{{isset($image->alt) ? $image->alt : ''}}">
        @error('alt')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image-class" class="form-label">Class : </label>
        <input type="text" class="form-control" id="image-class" placeholder="Class..."  name="class" value="{{isset($image->class) ? $image->class : ''}}">
        @error('class')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image-id" class="form-label">Id : </label>
        <input type="text" class="form-control" id="image-id" placeholder="Id..." name="img_id" value="{{isset($image->img_id) ? $image->img_id : ''}}">
        @error('img_id')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-5">

    </div>
    <div class="mb-3">
        <label for="image_id" class="form-label">Image : </label>
        <input type="file" name="image" id="image_id">
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($image) ? 'Update' : 'Save'}}</button>
</form>