@extends('pages.penugasan.layout.main')
@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h3>Pengumuman: Membawa Snack confess dan air dugem</h3>
            </div>
        </div>
    </div>
    <div class="cardBox">
        <a href="/penugasan/catatan2">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="pencil-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/expresscreativity">
            <div class="card">
                <div>
                    <div class="cardName">Express Creativity</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="image-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/vlog">
            <div class="card">
                <div>
                    <div class="cardName">Vlog</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="videocam-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
