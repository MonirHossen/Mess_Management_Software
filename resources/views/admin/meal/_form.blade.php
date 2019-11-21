<div class="row form-group">
    <div class="col col-md-3">
        <label for="select" class=" form-control-label">Select Member</label>
    </div>
    <div class="col-12 col-md-9">
        <select name="member_id" id="select" class="form-control">
            <option value="">Please select</option>
            @foreach($members as $member)
                <option @if(old('member_id',isset($meal->member_id) ? $meal->member_id : null ) == $member->id)  selected @endif value="{{ $member->id }}">{{ $member->name }}</option>
            @endforeach
        </select>
        @error('member_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="select" class=" form-control-label">Select Admin</label>
    </div>
    <div class="col-12 col-md-9">
        <select name="user_id" id="select" class="form-control">
            <option value="">Please select</option>
            @foreach($users as $user)
                <option @if(old('user_id',isset($meal->user_id) ? $meal->user_id : null ) == $user->id)  selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        @error('user_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="name" class=" form-control-label">Slect Date</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="date" id="meal_date" value="{{ old('meal_date',isset($meal) ? $meal->meal_date : null) }}" name="meal_date" class="form-control">
        @error('meal_date')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label class=" form-control-label">Select Meals</label>
    </div>
    <div class="col col-md-9">
        <div class="form-check">
            <div class="checkbox">
                <label for="break_fast" class="form-check-label ">
                    <input type="checkbox" @if(isset($meal) ? $meal->break_fast : null ) checked @endif id="break_fast" name="break_fast" value="0.5" class="form-check-input">Break Fast
                </label>
            </div>
            <div class="checkbox">
                <label for="launch" class="form-check-label ">
                    <input type="checkbox"  @if(isset($meal) ? $meal->launch : null ) checked @endif id="launch" name="launch" value="1" class="form-check-input"> Launch
                </label>
            </div>
            <div class="checkbox">
                <label for="dinner" class="form-check-label ">
                    <input type="checkbox" @if(isset($meal) ? $meal->dinner : null ) checked @endif id="dinner" name="dinner" value="1" class="form-check-input"> Dinner
                </label>
            </div>
        </div>
    </div>
</div>

