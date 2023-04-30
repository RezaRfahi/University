<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Morilog\Jalali\Jalalian;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            ImageColumn::make('پروفایل')->location(
                fn($row) => $row->getProfilePhotoUrlAttribute())
                ->attributes(fn($row) => [
                    'class' => 'rounded-full',
                    'alt' => 'none',
                ]),
                Column::make("نام", "name")
                ->sortable()->searchable(),
            Column::make("ایمیل", "email")
                ->sortable()->searchable(),
            Column::make("سمت", "position")->format(
                fn($v) => match($v) {
                    'manager' => 'مدیریت',
                    'assistant' => 'معاون',
                    'warden' => 'سرپرست',
                    'impresario' => 'مدیر ساختمان',
                    'employee' => 'کارمند',
                }),
            Column::make("سطح", "level")
                ->format(
                    fn($v) => match($v) {
                        'administrator' => 'مدیر',
                        'controller' => 'کنترل کننده',
                        'user' => 'کاربرعادی',
                        'reader' => 'ناظر',
                    }),
            Column::make("ثبت", "created_at")
                ->sortable()->format(function ($value, $row) {
                    return Jalalian::fromDateTime($value)->format('Y/m/d H:i:s'); // Convert the DateTime object to a Jalali date string
                }),
            Column::make("آخرین تغییرات", "updated_at")
                ->sortable()->format(function ($value, $row) {
                    return Jalalian::fromDateTime($value)->format('Y/m/d H:i:s'); // Convert the DateTime object to a Jalali date string
                }),
        ];
    }
}
