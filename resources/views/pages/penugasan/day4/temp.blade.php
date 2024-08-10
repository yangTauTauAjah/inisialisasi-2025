@extends('pages.penugasan.layout.main')
@section('content')
    <div class="cardBox">
        <a href="/penugasan/catatan4">
            <div class="card">
                <div>
                    <div class="cardName">Catatan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/dbkating2">
            <div class="card">
                <div>
                    <div class="cardName">Database Kating 2</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/ethicalleader">
            <div class="card">
                <div>
                    <div class="cardName">Ethical Leader</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
