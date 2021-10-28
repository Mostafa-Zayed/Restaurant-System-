<form class="settings-form" action="{{ isset($menu) ? route('managment.menus.update',$menu) : route('managment.menus.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{isset($category) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="menu-name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="menu-name" placeholder="Name..." required="" name="name" value="{{isset($menu->name) ? $menu->name : ''}}">
        @error('name')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-price" class="form-label">Price : </label>
        <input type="number" step="0.01" class="form-control" id="menu-name" placeholder="Price..." required="" name="price" value="{{isset($menu->price) ? $menu->price : ''}}">
        @error('price')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-discount" class="form-label">Discount : </label>
        <input type="text" class="form-control" id="menu-discount" placeholder="Discount..."  name="discount" value="{{isset($menu->discount) ? $menu->discount : ''}}">
        @error('discount')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-discription" class="form-label">Discription : </label>
        <!-- <input type="text" class="form-control" id="menu-discount" placeholder="Discription..." required="" name="discription" value="{{isset($menu->discription) ? $menu->discription : ''}}"> -->
        <textarea class="form-control" rows="20" cols="40" id="menu-discount" placeholder="Discription..." required="" name="description">{{isset($menu->description) ? $menu->description : ''}}</textarea>
        @error('discription')
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
    <div class="mb-3">
        <label for="image_id" class="form-label">Image : </label>
        <input type="file" name="image_id" id="image_id">
    </div>
    <div class="mb-3">

    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($menu->status) ? 'checked' : ''}}>
        <label class="form-check-label" for="status">Status</label>
    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="specail" name="special" {{isset($menu->special) ? 'checked' : ''}}>
        <label class="form-check-label" for="special">Special</label>
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($menu) ? 'Update' : 'Save'}}</button>
</form>