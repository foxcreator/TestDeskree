@extends('layouts.app')
@section('content')
<div class="container w-75">
    <div class="row justify-content-center align-items-center mt-3">
        <div class="col-md-5 ">
            <h1 class="fw-bold">Кращий сервис щоб заощадити на покупках!</h1>
            <h6>Повернемо частину витрат з маркетплейсів, доставок продуктів, онлайн курсів, аптек</h6>
            <form action="/" class="col-md-6 mt-5">
                <div class="input-group mb-2">
                    <input type="text" class="form-control singup-input" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <button class="btn btn-success w-100">Зареєструватися</button>
            </form>
        </div>
        <div class="col-md-5">
            <img class="img-fluid" src="https://c8.alamy.com/comp/TWFC9X/cashback-offer-money-refund-concept-TWFC9X.jpg" alt="noimage =(">
        </div>
    </div>
</div>
@endsection
