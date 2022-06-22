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


@auth
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/62973d4db0d10b6f3e751b75/1g4fceube';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
@endauth





