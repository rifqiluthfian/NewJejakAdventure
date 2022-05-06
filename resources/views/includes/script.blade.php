<script src="{{url('frontend/libraries/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{url('frontend/libraries/retina/retina.min.js')}}"></script>
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script src="{{url('frontend/libraries/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
        zoomwidth:400,
        tittle:false,
        tint:'#333',
        xoffset:150
        });
    });
    </script>



