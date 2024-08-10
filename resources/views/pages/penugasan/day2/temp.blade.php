@extends('pages.penugasan.layout.main')
@section('content')
    <div class="cardBox">
        <a href="/penugasan/catatan2">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/expresscreativity">
            <div class="card">
                <div>
                    <div class="cardName">Express Creativity</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/vlog">
            <div class="card">
                <div>
                    <div class="cardName">Vlog</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
