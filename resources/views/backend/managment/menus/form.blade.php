<form class="settings-form" action="{{ isset($menu) ? route('managment.menus.update',$menu) : route('managment.menus.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{isset($category) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="menu-name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="menu-name" placeholder="Name..."  name="name" value="{{isset($menu->name) ? $menu->name : ''}}">
        @error('name')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-price" class="form-label">Price : </label>
        <input type="number" step="0.01" class="form-control" id="menu-name" placeholder="Price..." name="price" value="{{isset($menu->price) ? $menu->price : ''}}">
        @error('price')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-discount" class="form-label">Discount : </label>
        <input type="text" class="form-control" id="menu-discount" placeholder="Discount..." name="discount" value="{{isset($menu->discount) ? $menu->discount : ''}}">
        @error('discount')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-content" class="form-label">content : </label>
        
        @trix(\App\Models\Menu::class, 'content')
        @error('content')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    @if(isset($categories) && ($categories->count() > 0))
    <div class="mb-5">
        <label for="category-name" class="form-label">Categories : </label>
        <select class="form-select" name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if(isset($images) && $images->count() > 0)
    <div class="mb-5">
        <label for="image_id" class="form-label">Menu Image : </label>
        <select class="form-select" name="image_id">
            <option value="">No Image</option>
            @foreach($images as $image)
            <option value="{{$image->id}}">{{$image->name}}</option>
            @endforeach
        </select>
    </div>
    @endif

    <div class="mb-3">
    
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($menu->status) ? 'checked' : ''}}>
                <label class="form-check-label" for="status">Status</label>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="specail" name="special" {{isset($menu->special) ? 'checked' : ''}}>
                <label class="form-check-label" for="special">Special</label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn app-btn-primary">{{isset($menu) ? 'Update' : 'Save'}}</button>
</form>