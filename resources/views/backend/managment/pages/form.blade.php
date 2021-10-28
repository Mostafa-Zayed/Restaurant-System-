<form class="settings-form" action="{{ isset($page) ? route('managment.pages.update',$page) : route('managment.pages.store')}}" method="post">
    @csrf
    {{isset($page) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="category-name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="category-name" placeholder="Name..." required="" name="name" value="{{isset($page->name) ? $page->name : ''}}">
        @error('name')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="order" class="form-label">Order : </label>
        <input type="number" class="form-control" id="order" placeholder="Order..." required="" name="order" value="{{isset($page->order) ? $page->order : ''}}">
        @error('order')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">

    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($page->status) ? 'checked' : ''}}>
        <label class="form-check-label" for="status">Status</label>
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($page) ? 'Update' : 'Save'}}</button>
</form>