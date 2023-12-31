<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.success')
    @section('tittle')
    Success Checkout
    @endsection
    @section('content')
</head>
<body>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
        <img src="{{url('frontend/images/success.png')}}" width="360" alt="">
        <h1>Yeayy!!! Success</h1>
        <p>We've sent you email for trip instruction<br>
        Please read as well
        </p>
        <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">
            Home Page
        </a>
        </div>
    </div>
</body>
@endsection
</html>