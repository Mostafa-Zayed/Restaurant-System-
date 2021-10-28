<form class="settings-form" action="{{ isset($category) ? route('managment.categories.update',$category) : route('managment.categories.store')}}" method="post">
    @csrf
    {{isset($category) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="category-name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="category-name" placeholder="Name..." required="" name="name" value="{{isset($category->name) ? $category->name : ''}}">
        @error('name')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">

    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($category->status) ? 'checked' : ''}}>
        <label class="form-check-label" for="status">Status</label>
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($category) ? 'Update' : 'Save'}}</button>
</form>