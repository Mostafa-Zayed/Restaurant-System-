<form class="settings-form" action="{{ isset($about) ? route('managment.abouts.update',$about) : route('managment.abouts.store')}}" method="post">
    @csrf
    {{isset($about) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="category-name" class="form-label">Title : </label>
        <input type="text" class="form-control" id="category-name" placeholder="Title..." required="" name="title" value="{{isset($about->title) ? $about->title : ''}}">
        @error('title')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-discription" class="form-label">Content : </label>
        <!-- <input type="text" class="form-control" id="menu-discount" placeholder="Discription..." required="" name="discription" value="{{isset($menu->discription) ? $menu->discription : ''}}"> -->
        <textarea class="form-control" rows="20" cols="40" id="menu-discount" placeholder="Content..." required="" name="content">{{isset($about->content) ? $about->content : ''}}</textarea>
        @error('content')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    @if(isset($images) && $images->count() > 0)
    <div class="mb-5">
        <label for="image_id" class="form-label">About Image : </label>
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
        <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($category->status) ? 'checked' : ''}}>
        <label class="form-check-label" for="status">Status</label>
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($about) ? 'Update' : 'Save'}}</button>
</form>