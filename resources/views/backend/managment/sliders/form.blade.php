<form class="settings-form" action="{{ isset($slider) ? route('managment.sliders.update',$slider) : route('managment.sliders.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{isset($category) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="title" class="form-label">Title : </label>
        <input type="text" class="form-control" id="title" placeholder="Title..." required="" name="title" value="{{isset($slider->title) ? $slider->title : ''}}">
        @error('title')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="order" class="form-label">Order : </label>
        <input type="number" class="form-control" id="order" placeholder="Order..." required="" name="order" value="{{isset($slider->order) ? $slider->order : ''}}">
        @error('order')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="link1" class="form-label">Link1 : </label>
        <input type="url" class="form-control" id="link1" placeholder="Link1..." required="" name="link1" value="{{isset($slider->link1) ? $slider->link1 : ''}}">
        @error('link1')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="link2" class="form-label">Link2 : </label>
        <input type="url" class="form-control" id="link2" placeholder="Link2..." required="" name="link2" value="{{isset($slider->link2) ? $slider->link2 : ''}}">
        @error('link2')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-discription" class="form-label">Discription : </label>
        <!-- <input type="text" class="form-control" id="menu-discount" placeholder="Discription..." required="" name="discription" value="{{isset($menu->discription) ? $menu->discription : ''}}"> -->
        <textarea class="form-control" rows="20" cols="40" id="menu-discount" placeholder="Discription..." required="" name="description">{{isset($slider->description) ? $slider->description : ''}}</textarea>
        @error('discription')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    @if(isset($images))
    <div class="mb-5">
        <label for="image_id" class="form-label">Slider Image : </label>
        <select class="form-select" name="image_id">
            @foreach($images as $image)
            <option value="{{$image->id}}">{{$image->name}}</option>
            @endforeach
        </select>
    </div>
    @endif
    <div class="mb-3">

    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($title->status) ? 'checked' : ''}}>
        <label class="form-check-label" for="status">Status</label>
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($slider) ? 'Update' : 'Save'}}</button>
</form>