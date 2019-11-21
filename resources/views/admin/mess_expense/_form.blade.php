<div class="row form-group">
    <div class="col col-md-3">
        <label for="select" class=" form-control-label">Select Member</label>
    </div>
    <div class="col-12 col-md-9">
        <select name="member_id" id="select" class="form-control">
            <option value="">Please select</option>
            @foreach($members as $member)
                <option @if(old('member_id',isset($mess_expense->member_id) ? $mess_expense->member_id : null ) == $member->id)  selected @endif value="{{ $member->id }}">{{ $member->name }}</option>
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
                <option @if(old('user_id',isset($mess_expense->user_id) ? $mess_expense->user_id : null ) == $user->id)  selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        @error('user_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="expense-date" class=" form-control-label">Select Expense Date</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="date" id="expense_date" value="{{ old('expense_date',isset($mess_expense) ? $mess_expense->expense_date : null ) }}" name="expense_date" class="form-control">
        @error('expense_date')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label for="expensedate" class=" form-control-label">Amount</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="amount" value="{{ old('amount',isset($mess_expense) ? $mess_expense->amount : null)}}" name="amount" class="form-control">
        @error('amount')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

