<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penugasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="">
    <style>
        .header {
            background-color: #0048ff;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Penugasan</h1>
    </div>
    <div class="container mt-4">
        <div data-v-373b54c8=""
            class="col-12 d-flex justify-content-between align-items-center gap-3 flex-wrap flex-sm-nowrap mb-0">
            <h2 data-v-373b54c8="" class="font-semibold text-limit limit-1 ">
                Inisialisasi 2024
            </h2>
        </div>
        {{-- <div class="accordion" id="accordionExample">
            @foreach ($allTask as $taskGroup)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                            aria-controls="collapse{{ $loop->iteration }}">
                            {{ $taskGroup->task_group_name }}
                        </button>
                    </h2>
                    <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @if ($taskGroup->subTasks->isEmpty())
                                <p style="color: gray">Belum Ada Tugas</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Nama Tugas</th>
                                                {{-- <th>Deskripsi singkat</th> --}}
                                                <th>Batas Pengumpulan</th>
                                                <th>Tanggal Pengumpulan</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($taskGroup->subTasks as $subTask)
                                                <tr>
                                                    <td>{{ $subTask->task_name }}</td>
                                                    {{-- <td>{{ $subTask->task_description }}</td> --}}
                                                    <td>{{ $subTask->task_due }}</td>
                                                    <td>
                                                        Belum mengumpulkan
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('task.detail', $subTask->id) }}"
                                                            class="btn btn-sm btn-success">View</a>
                                                        <a href="" class="btn btn-sm btn-primary">Detail</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>
</body>

</html>
