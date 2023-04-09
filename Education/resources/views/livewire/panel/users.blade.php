<div>
<x-slot name="title">
    <h1 class="m-0 text-dark">کاربران</h1>
</x-slot>

<!-- Main row -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mb-2">
                <button class="btn btn-info " target="__blank">افزودن کاربر</button>
            </div>

            <div class="col-md-8 mb-3">
                <input wire:model.debounce.500ms="search" name="search"  type="text" class="form-control" id="search"
                       placeholder="جستجو..." value="{{old('search')}}">
            </div>

{{--            <div class="col-md-4 mb-3">--}}
{{--                <select wire.model.debounce.500ms="" class="form-control" id="filter-category">--}}
{{--                    <option value="">بالا به پایین</option>--}}
{{--                    <option value=""></option>--}}
{{--                </select>--}}
{{--            </div>--}}
        </div>
        <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>پروفایل</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره تلفن</th>
                <th>سمت</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
            <tr>
                <td><img src="{{ $user->profile_photo_url }}" alt="profile image" class="profile-img"></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->position}}</td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm">حذف</button>
                    <button type="button" class="btn btn-secondary btn-sm">ویرایش</button>
                </td>
            </tr>
            @empty
                <tr>
                    <td> هیچ موردی یافت نشد</td>
                </tr>
            @endforelse
            </tbody>
        </table>
            <div class="align-content-center" wire:loading>
                <h3>Loading...</h3>
            </div>
        </div>
        <div class="d-flex">
            {!! $users->links() !!}
        </div>

    </div>
<!-- /.row (main row) -->
</div>
