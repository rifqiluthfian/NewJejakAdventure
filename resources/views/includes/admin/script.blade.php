<!-- Bootstrap core JavaScript-->
<script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url('backend/vendor/jquery-easing/jquery.easing.min.js')}} "></script>

<!-- Custom scripts for all pages-->
<script src="{{(url('backend/js/sb-admin-2.min.js'))}} "></script>

<!-- Page level plugins -->
<script src="{{url('backend/vendor/chart.js/Chart.min.js')}} "></script>

<!-- Page level custom scripts -->
<script src="{{url('backend/js/demo/chart-area-demo.js')}} "></script>
<script src="{{url('backend/js/demo/chart-pie-demo.js')}} "></script>


{{-- DataTables --}}
<script type="text/javascript" src="{{ url('frontend/scripts/jquery-3.5.1.js') }}"></script>
<script type="text/javascript" src="{{ url('frontend/libraries/DataTables/js/dataTables.bootstrap5.min') }}"></script>
<script type="text/javascript" src="{{ url('frontend/libraries/DataTables/js/jquery.dataTables.min.js') }}"></script>

{{-- Ck editor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#detail' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#itinerary' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#contents' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<script>
    $(document).ready(function() {
    $('#table_id').DataTable();
} );

</script>

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
        return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
    }
</script>


