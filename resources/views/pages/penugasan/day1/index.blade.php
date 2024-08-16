@extends('pages.penugasan.layout.main')
@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h3>Pengumuman: Membawa Snack bantal coklat dan minuman bisa tambah</h3>
            </div>
        </div>
    </div>
    <div class="cardBox">
        <a href="/penugasan/catatan1">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="pencil-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/boundaries">
            <div class="card">
                <div>
                    <div class="cardName">Beyond Boundaries</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="film-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/dbkating">
            <div class="card">
                <div>
                    <div class="cardName">Database Kating</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
