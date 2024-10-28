<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}


    <form method="post" wire:submit.prevent="changePassword()">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Current Password</label>
                <input type="password" class="form-control" name="current_password" placeholder="Enter Current Password"
                    wire:model="current_password">
                <span class="text-danger">
                    @error('current_password'){{ $message }} @enderror
                </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">New Password</label>
                <input type="password" class="form-control" name="new_password" placeholder="Enter New Password"
                    wire:model="new_password">
                <span class="text-danger">
                    @error('new_password'){{ $message }} @enderror
                </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" name="confirm_new_password"
                    placeholder="Retype New Password" wire:model="confirm_new_password">
                <span class="text-danger">
                    @error('confirm_new_password'){{ $message }} @enderror
                </span>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
</div>
