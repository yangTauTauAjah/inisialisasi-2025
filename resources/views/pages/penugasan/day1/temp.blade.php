@extends('pages.penugasan.layout.main')
@section('content')
    <div class="cardBox">
        <a href="/penugasan/catatan1">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/boundaries">
            <div class="card">
                <div>
                    <div class="cardName">Beyond Boundaries</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/dbkating">
            <div class="card">
                <div>
                    <div class="cardName">Database Kating</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
