<x-slot name="title">
    <h1 class="m-0 text-dark">کاربران</h1>
</x-slot>

<!-- Main row -->
    <div class="container">
        <div class="col-sm-12 mb-2">
            <button class="btn btn-info " target="__blank">افزودن کاربر</button>
        </div>
        <div class="row">
            <div class="col-md-8 mb-3">
                <input type="text" class="form-control" id="search" placeholder="جستجو...">
            </div>
            <div class="col-md-4 mb-3">
                <select class="form-control" id="filter-category">
                    <option value="">همه</option>
                    <option value="fruit">Fruit</option>
                    <option value="vegetable">Vegetable</option>
                </select>
            </div>
        </div>
        <div wire:loading.remove>
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
        </div>
{{--        <div class="d-flex">--}}
{{--            {!! $users->links() !!}--}}
{{--        </div>--}}
        <div class="center" wire:loading>
            Loading...
        </div>
    </div>
<!-- /.row (main row) -->
