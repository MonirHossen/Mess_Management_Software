<div class="row form-group">
    <div class="col col-md-3">
        <label for="name" class=" form-control-label">Name</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="name" value="{{ old('name',isset($mess_member->name) ? $mess_member->name : null) }}" name="name" placeholder="Member Name" class="form-control">
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
        <input type="email" id="email"  value="{{ old('email',isset($mess_member->email) ? $mess_member->email : null) }}" name="email" placeholder="Enter Email" class="form-control">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="phone" class=" form-control-label">Phone Number</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="phone" name="phone" value="{{ old('phone',isset($mess_member) ? $mess_member->phone : null) }}" placeholder="Phone Number" class="form-control">
        @error('phone')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="image" class=" form-control-label">Image</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="file" onchange="document.getElementById('mess_member_image').src = window.URL.createObjectURL(this.files[0])" id="image" value="{{ old('image',isset($mess_member->image) ? $mess_member->image : null) }}" name="image" class="form-control-file">
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        @if(isset($mess_member->image))
            <img id="mess_member_image" src="{{ asset($mess_member->image) }}" width="20%" alt="">
        @endif
    </div>
    <div>
    </div>
</div><?php
