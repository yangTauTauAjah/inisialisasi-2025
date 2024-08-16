@extends('pages.penugasan.layout.main')
@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h3>Pengumuman: Membawa Snack coklat jerawat dan minuman band (coklat jerawat dan teh kotak)</h3>
            </div>
        </div>
    </div>
    <div class="cardBox">
        <a href="/penugasan/idcard">
            <div class="card">
                <div>
                    <div class="cardName">ID Card</div>
                </div>
            </div>
        </a>

        <a href="/penugasan/angkatan">
            <div class="card">
                <div>
                    <div class="cardName">Nama & Logo Angkatan</div>
                </div>
            </div>
        </a>

        <a href="/penugasan/booklet">
            <div class="card">
                <div>
                    <div class="cardName">Booklet</div>
                </div>
            </div>
        </a>

        <a href="/penugasan/dbangkatan">
            <div class="card">
                <div>
                    <div class="cardName">Database Angkatan</div>
                </div>
            </div>
        </a>
    </div>
@endsection
