<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="{{ asset('frontend/js/vendors.js')}}"></script>
<script src="{{ asset('frontend/js/main.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var imageUrl = $('.page-masthead').find('.bg-image').attr('data-originalbg');
        var aboutImageUrl = $('.section-bg-image').find('.bg-image').attr('data-originalbg');
        setTimeout(function(){
            $('.page-masthead .bg-image').css('background-image', 'url("'+imageUrl+'")');
            $('.section-bg-image .bg-image').css('background-image', 'url("'+aboutImageUrl+'")');
        }, 500);
    });
</script>

<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/65e81bd28d261e1b5f693ac5/1ho9apbhs';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
