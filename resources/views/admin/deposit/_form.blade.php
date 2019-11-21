<div class="row form-group">
    <div class="col col-md-3">
        <label for="select" class=" form-control-label">Select Member</label>
    </div>
    <div class="col-12 col-md-9">
        <select name="member_id" id="select" class="form-control">
            <option value="">Please select</option>
            @foreach($members as $member)
                <option @if(old('member_id',isset($deposit->member_id) ? $deposit->member_id : null ) == $member->id)  selected @endif value="{{ $member->id }}">{{ $member->name }}</option>
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
                <option @if(old('user_id',isset($deposit->user_id) ? $deposit->user_id : null ) == $user->id)  selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        @error('user_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="expense-date" class=" form-control-label">Select Deposit Date</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="date" id="deposit_date" value="{{ old('deposit_date',isset($deposit) ? $deposit->deposit_date : null ) }}" name="deposit_date" class="form-control">
        @error('deposit_date')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label for="expensedate" class=" form-control-label">Amount</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="amount" value="{{ old('amount',isset($deposit) ? $deposit->amount : null)}}" name="amount" class="form-control">
        @error('amount')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

