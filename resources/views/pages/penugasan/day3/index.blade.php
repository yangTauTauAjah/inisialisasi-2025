@extends('pages.penugasan.layout.main')
@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h3>Pengumuman: Membawa Ciki simpan dulu dan air lumpur</h3>
            </div>
        </div>
    </div>
    <div class="cardBox">
        <a href="/penugasan/catatan3">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="pencil-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/essay">
            <div class="card">
                <div>
                    <div class="cardName">Essay</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="create-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/expresscreativity2">
            <div class="card">
                <div>
                    <div class="cardName">Express Creativity 2</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="image-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
