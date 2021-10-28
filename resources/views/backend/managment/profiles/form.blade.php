<form class="settings-form" action="{{ isset($profile) ? route('managment.profiles.edit',$profile->id) : route('managment.profiles.store')}}" method="post">
    @csrf
    {{isset($profile) ? method_field('PUT') : ''}}
    <div class="mb-3">
        <label for="category-name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="category-name" placeholder="Name..." required="" name="show_name" value="{{isset($profile->show_name) ? $profile->show_name : ''}}">
        @error('name')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category-name" class="form-label">Job : </label>
        <input type="text" class="form-control" id="category-name" placeholder="Job..." required="" name="job" value="{{isset($profile->job) ? $profile->job : ''}}">
        @error('job')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category-name" class="form-label">Facebook Url: </label>
        <input type="url" class="form-control" id="category-name" placeholder="Facebook Url..." required="" name="facebook" value="{{isset($profile->facebook) ? $profile->facebook : ''}}">
        @error('facebook')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category-name" class="form-label">Twitter Url: </label>
        <input type="url" class="form-control" id="category-name" placeholder="Twitter Url..." required="" name="twitter" value="{{isset($profile->twitter) ? $profile->twitter : ''}}">
        @error('twitter')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category-name" class="form-label">Instagram Url: </label>
        <input type="url" class="form-control" id="category-name" placeholder="Twitter Url..." required="" name="instagram" value="{{isset($profile->instagram) ? $profile->instagram : ''}}">
        @error('instagram')
        <span class="alert-danger d-block mt-2 p-2">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category-name" class="form-label">Image : </label>
        <input type="file" name="image">
    </div>
    <div class="mb-3">
        <label for="category-name" class="form-label">Users : </label>
        <select class="form-select ">
            <option selected="" value="option-1">All</option>
            <option value="option-2">This week</option>
            <option value="option-3">This month</option>
            <option value="option-4">Last 3 months</option>

        </select>
    </div>
    
    <div class="form-check form-switch mb-3 mt-5">
        <input class="form-check-input" type="checkbox" id="status" name="status" {{isset($profile->status) ? 'checked' : ''}}>
        <label class="form-check-label" for="status">Status</label>
    </div>
    <button type="submit" class="btn app-btn-primary">{{isset($profile) ? 'Update' : 'Save'}}</button>
</form>