@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="d-flex align-items-center justify-content-between card-header">
                    <h5 class="m-0 p-0">Nama Sub Tugas</h5>
                    <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#SubTugas">+</a>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach ($taskGroups as $taskGroup)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="panelsStayOpen-{{ $loop->iteration }}">
                                        {{ $taskGroup->task_group_name }}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-{{ $loop->iteration }}" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <ol>
                                            @if ($taskGroup->subTasks->isEmpty())
                                                <p class="">Belum Ada Tugas </p>
                                            @endif
                                            @foreach ($taskGroup->subTasks as $subTask)
                                                <div class="d-flex justify-content-between">
                                                    <li class="fw-bold" style="color: black">{{ $subTask->task_name }}</li>
                                                    <div class="control">
                                                        <a href="{{ route('task.show', $subTask->id) }}" class="text-secondary">view</a>
                                                        <a href="" class="text-secondary">delete</a>
                                                    </div>
                                                </div>
                                                <ol style="color: gray">{{ $subTask->task_description }}</ol>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="d-flex align-items-center justify-content-between card-header">
                    <h5 class="p-0 m-0">Nama Tugas</h5>
                    <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Tugas">+</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($taskGroups as $item)
                                <tr>
                                    <td>{{ $item->task_group_name }}</td>
                                    <td class="text-end">
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <h5 class="card-title">Pengumpulan Tugas <span>| Terbaru</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="#">#2457</a></th>
                                <td>Brandon Jacob</td>
                                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                <td>$64</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">#2147</a></th>
                                <td>Bridie Kessler</td>
                                <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a>
                                </td>
                                <td>$47</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">#2049</a></th>
                                <td>Ashleigh Langosh</td>
                                <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                                <td>$147</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">#2644</a></th>
                                <td>Angus Grady</td>
                                <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                                <td>$67</td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">#2644</a></th>
                                <td>Raheem Lehner</td>
                                <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                                <td>$165</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="Tugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SubTugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('task.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Group</label>
                            <select name="task_group_id" id="task_group_id" class="form-select">
                                <option value="">Pilih</option>
                                @foreach ($taskGroups as $item)
                                    <option value="{{ $item->id }}">{{ $item->task_group_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Tugas</label>
                            <input type="text" class="form-control" name="task_name"
                                placeholder="membawa snack minuman">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control" name="task_description"
                                placeholder="aawidjawidjaiwjiajdiajwi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Batas Pengumpulan</label>
                            <input type="date" class="form-control" name="task_due" placeholder="INISIALISASI Day 4">
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
