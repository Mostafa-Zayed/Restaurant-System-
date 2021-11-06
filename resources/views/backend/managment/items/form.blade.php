<form class="settings-form" action="{{ isset($item) ? route('managment.items.update',$item) : route('managment.items.store')}}" method="post">
    @csrf
    {{isset($item) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="item-name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="item-name" placeholder="Name..." required="" name="name" value="{{isset($item->name) ? $item->name : ''}}">
        @error('name')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="menu-discription" class="form-label">Discription : </label>
        <!-- <input type="text" class="form-control" id="menu-discount" placeholder="Discription..." required="" name="discription" value="{{isset($menu->discription) ? $menu->discription : ''}}"> -->
        <textarea class="form-control" rows="20" cols="40" id="menu-discription" placeholder="Discription..." required="" name="description">{{isset($item->description) ? $item->description : ''}}</textarea>
        @error('discription')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="item-price" class="form-label">Price : </label>
        <input type="number" step="0.01" class="form-control" id="item-name" placeholder="Price..." required="" name="price" value="{{isset($item->price) ? $item->price : ''}}">
        @error('price')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    @if(isset($images))
    <div class="mb-5">
        <label for="image_id" class="form-label">Item Image : </label>
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
        <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($item->status) ? 'checked' : ''}}>
        <label class="form-check-label" for="status">Status</label>
    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="special" name="special" {{isset($item->special) ? 'checked' : ''}}>
        <label class="form-check-label" for="special">Status</label>
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($item) ? 'Update' : 'Save'}}</button>
</form>