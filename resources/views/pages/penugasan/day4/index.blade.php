@extends('pages.penugasan.layout.main')
@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h3>Pengumuman: Membawa Snack pipa berlumpur dan minuman bukan milikku</h3>
            </div>
        </div>
    </div>
    <div class="cardBox">
        <a href="/penugasan/catatan4">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="pencil-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/dbkating2">
            <div class="card">
                <div>
                    <div class="cardName">Database Kating 2</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/ethicalleader">
            <div class="card">
                <div>
                    <div class="cardName">Ethical Leader</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="people-circle-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
