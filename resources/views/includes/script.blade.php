<script src="{{url('frontend/libraries/jquery/jquery-3.3.1.slim.min.js')}}"></script>
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

<script>
    var acc = document.getElementsByClassName('subask');
    var i;
    var len = acc.length;
    for (i = 0 ; i < len; i++) {
        acc[i].addEventListener('click',function(){
            this.classList.toggle('active');
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            }
            else{
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }
        })
    }   
</script>





