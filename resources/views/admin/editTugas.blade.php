@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('task.update', $data->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Group</label>
                            <select name="task_group_id" id="task_group_id" class="form-select">
                                <option value="">Pilih</option>
                                @foreach ($taskGroups as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $data->task_group_id ? 'selected' : '' }}>
                                    {{ $item->task_group_name }}
                                </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Tugas</label>
                            <input type="text" class="form-control" name="task_name" placeholder="membawa snack minuman" value="{{ $data->task_name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Batas Pengumpulan</label>
                            <input type="datetime-local" class="form-control" name="task_due"
                                placeholder="INISIALISASI Day 4" value="{{ $data->task_due }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi singkat</label>
                            <textarea id="summernote" name="task_description">
                                {!! $data->task_description !!}
                            </textarea>
                        </div>
                </div>

                <input type="submit" class="btn btn-success" value="Submit">

                </form>
            </div>
        </div>
    </div>

@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-lite.min.css') }}">
@endsection
@section('page-script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/summernote/summernote-lite.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview']],
                ],
                popover: {
                    image: [
                        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    table: [
                        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                        ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                }


            });
        });
    </script>
@endsection

@endsection
