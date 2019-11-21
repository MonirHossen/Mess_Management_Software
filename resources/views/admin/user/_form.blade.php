<div class="row form-group">
    <div class="col col-md-3">
        <label for="name" class=" form-control-label">Name</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="name" value="{{ old('name',isset($user->name) ? $user->name : null) }}" name="name" placeholder="Admin Name" class="form-control">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label for="email" class=" form-control-label">Email</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="email" id="email" @if(isset($user)) disabled @endif value="{{ old('email',isset($user->email) ? $user->email : null) }}" name="email" placeholder="Enter Email" class="form-control">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

@if(!isset($user))
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="password" class=" form-control-label">Password</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="password" value="{{ old('password') }}" id="password" name="password" placeholder="Password" class="form-control">
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="password" class=" form-control-label">Confirm Password</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="password" id="password" name="password_confirmation" placeholder="Password Confirmation" class="form-control">
        </div>
    </div>
@endif

<div class="row form-group">
    <div class="col col-md-3">
        <label for="image" class=" form-control-label">Image</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="file" onchange="document.getElementById('user_image').src = window.URL.createObjectURL(this.files[0])" id="image" value="{{ old('image',isset($user->image) ? $user->image : null) }}" name="image" class="form-control-file">
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        @if(isset($user->image))
            <img id="user_image" src="{{ asset($user->image) }}" width="20%" alt="">
        @endif
    </div>
    <div>
    </div>
</div><?php
