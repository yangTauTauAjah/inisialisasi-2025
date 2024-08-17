@extends('layout.main')
@section('page-heading', 'Penugasan | Task Manager')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card px-3 py-3">
                <livewire:Task-table theme="bootstrap-5" />
            </div>
        </div>
    </div>

    <!-- Images Modal -->
    @foreach ($images as $item)
        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">

                        @if (Str::endsWith($item->file_path, '.jpg') ||
                                Str::endsWith($item->file_path, '.jpeg') ||
                                Str::endsWith($item->file_path, '.png'))
                            <img src="{{ Storage::url($item->file_path) }}" alt="{{ $item->file_path }}" class="img-fluid"
                                loading="lazy">
                        @elseif (Str::endsWith($item->file_path, '.mp4'))
                            <video width="500" height="500" controls>
                                <source src="{{ Storage::url($item->file_path) }}" type="video/mp4"
                                    alt="{{ $item->file_path }}" loading="lazy" class="img-fluid">
                                Your browser does not support the video tag.
                            </video>
                        @elseif (!empty($item->file_links))
                            <a href="{{ $item->file_links }}" target="_blank">Lihat</a>
                        @else
                            <p>Tipe File tidak didukung</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
