<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

use App\Models\FileManager;
use App\Models\SubTask;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class TaskTable extends DataTableComponent
{
    protected $model = FileManager::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchPlaceholder('Search...');
    }

    public function filters(): array
    {
        return [
            MultiSelectFilter::make('Nama Kelompok')
                ->options(
                    User::query()
                        ->orderBy('name')
                        ->get()
                        ->keyBy('id')
                        ->map(fn($tag) => $tag->name)
                        ->toArray()
                )
                ->filter(function (Builder $builder, string $value) {
                    if ($value === 'rupert') {
                        $builder->where('rupert', true);
                    } elseif ($value === '@example.com') {

                        $builder->where('@example.com', false);
                    }
                }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nama Tugas", "subTask.task_name")
                ->searchable()
                ->sortable(),
            Column::make("Nama Mahasiswa", "user.name")
                ->searchable()
                ->sortable(),
            Column::make("Nama Kelompok", "user.email")
                ->searchable()
                ->sortable(),
            DateColumn::make("Batas Pengumpulan", "subTask.task_due")
                ->outputFormat('d M Y')
                ->sortable(),
            DateColumn::make("Dikumpulkan pada", "created_at")
                ->outputFormat('d M Y')
                ->sortable(),
            // LinkColumn::make("Tugas", "file_path")
            //     ->title(fn($row) => 'Edit')
            //     ->location(fn($row) => asset('dwddd.jpg', $row))
            //     ->sortable(),
        ];
    }
}
