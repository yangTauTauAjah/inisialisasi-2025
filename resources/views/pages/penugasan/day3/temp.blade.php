@extends('pages.penugasan.layout.main')
@section('content')
    <div class="cardBox">
        <a href="/penugasan/catatan3">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/essay">
            <div class="card">
                <div>
                    <div class="cardName">Essay</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/expresscreativity2">
            <div class="card">
                <div>
                    <div class="cardName">Express Creativity 2</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
