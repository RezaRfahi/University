<div>
    <x-slot name="title">
        <h1 class="m-0 text-dark">افزودن کاربر</h1>
    </x-slot>
    <div class="container">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label for="name">نام :</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name">
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email">ایمیل :</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="password">رمز عبور :</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="level">سطح :</label>
                <select class="form-control @error('level') is-invalid @enderror" id="level" wire:model="level">
                    <option value="">-- انتخاب سطح --</option>
                    <option value="administrator">ادمین</option>
                    <option value="controller">ناظر</option>
                    <option value="user">کاربر</option>
                    <option value="reader">فقط خواننده</option>
                </select>
                @error('level') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="position">سمت:</label>
                <select class="form-control @error('position') is-invalid @enderror" id="position" wire:model="position">
                    <option value="">-- Select position --</option>
                    <option value="manager">مدیر</option>
                    <option value="assistant">معاون</option>
                    <option value="warden">سرپرست</option>
                    <option value="impresario">منشی</option>
                    <option value="employee">کارمند</option>
                </select>
                @error('position') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="phone_number">شماره موبایل :</label>
                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" wire:model="phone_number">
                @error('phone_number') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    @push('scripts')
        <script>
            Livewire.on('validated', function (fieldName, isValid, validationMessage) {
                let field = $('[wire\\:model="'+fieldName+'"]');

                if (isValid) {
                    field.removeClass('is-invalid');
                    field.addClass('is-valid');
                    field.siblings('.invalid-feedback').remove();
                } else {
                    field.removeClass('is-valid');
                    field.addClass('is-invalid');

                    if (field.siblings('.invalid-feedback').length > 0) {
                        field.siblings('.invalid-feedback').text(validationMessage);
                    } else {
                        field.after('<span class="invalid-feedback">'+validationMessage+'</span>');
                    }
                }
            });
        </script>
    @endpush
</div>
