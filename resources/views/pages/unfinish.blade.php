<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.success')
    @section('tittle')
    Unfinish Checkout
    @endsection
    @section('content')
</head>
<body>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
        <img src="{{url('frontend/images/success.png')}}" width="360" alt="">
        <h1>Ooops your payment has Unfinish</h1>
        <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">
            Home Page
        </a>
        </div>
    </div>
</body>
@endsection
</html>