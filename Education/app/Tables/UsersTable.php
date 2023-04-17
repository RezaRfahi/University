<?php

namespace App\Tables;

use App\Models\User;
use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Filters\ValueFilter;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\DestroyRowAction;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\Table;

class UsersTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        return Table::make()->model(User::class)
            ->rowActions(fn(User $user) => [
//                new EditRowAction(route('user.edit', $user)),
                new DestroyRowAction(),
            ])->filters([
                new ValueFilter('سمت','position', User::pluck('position', 'position')->toArray())
            ]);
    }

    protected function columns(): array
    {
        return [
            Column::make('id')->title('id')->sortable(),
            Column::make('name')->title('نام')->sortable()->searchable(),
            Column::make('email')->title('ایمیل')->sortable()->searchable(),
            Column::make('phone_number')->title('شماره موبایل'),
            Column::make('position')->title('سمت')->sortable(),
        ];
    }

    protected function results(): array
    {
        return [
            // The table results configuration.
            // As results are optional on tables, you may delete this method if you do not use it.
        ];
    }
}
