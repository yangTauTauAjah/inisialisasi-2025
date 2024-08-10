@extends('pages.penugasan.layout.main')
@section('content')
    <div class="cardBox">
        <a href="/penugasan/idcard">
            <div class="card">
                <div>
                    <div class="cardName">ID Card</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/angkatan">
            <div class="card">
                <div>
                    <div class="cardName">Nama & Logo Angkatan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/booklet">
            <div class="card">
                <div>
                    <div class="cardName">Booklet</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/penugasan/dbangkatan">
            <div class="card">
                <div>
                    <div class="cardName">Database Angkatan</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>
        </a>
    </div>
@endsection
