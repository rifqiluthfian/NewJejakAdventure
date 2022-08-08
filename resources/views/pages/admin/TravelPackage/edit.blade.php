@extends('layouts.admin')
@section('title')
Edit Travel Package
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Edit Package Travel {{$item->title}}
            </h1>
        </div>
    </div>


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('travelpackageadmin.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="title" value="{{$item->title}}" class="form-control">
                </div>
         
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" placeholder="Location" value="{{$item->location}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Departure_date">Departure Date</label>
                    <input type="date" name="departure_date" id="departure_date" placeholder="Departure Date" value="{{$item->departure_date}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Duration">Duration</label>
                    <input type="text" name="duration" id="duration" placeholder="duration" value="{{$item->duration}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="type">type</label>
                    <input type="text" name="type" id="type" placeholder="type" value="{{$item->type}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="rupiah" placeholder="price" value="{{$item->price}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="About">Detail</label>
                    <textarea type="text" name="about" id="detail" placeholder="Detail your trip" value="{{$item->about}}" rows = "4"  class="form-control">{{$item->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="Itinerary">Itinerary</label>
                    <textarea type="text" name="itinerary" id="itinerary" placeholder="Detail your trip" value="{{$item->itinerary}}" rows = "4"  class="form-control">{{$item->itinerary}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection

<script type="text/javascript">
		
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
