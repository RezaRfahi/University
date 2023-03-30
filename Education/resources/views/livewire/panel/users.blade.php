<x-slot name="title">
    <h1 class="m-0 text-dark">کاربران</h1>
</x-slot>

<!-- Main row -->
    <div class="container">
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
        <table class="table table-bordered">
            <thead>
            <tr>
                <th></th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره تلفن</th>
                <th>سمت</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="https://via.placeholder.com/30x30" alt="profile image" class="profile-img"></td>
                <td>Apple</td>
                <td>Fruit</td>
                <td>$1.99</td>
                <td>admin</td>
            </tr>
            </tbody>
        </table>
    </div>

<!-- /.row (main row) -->
