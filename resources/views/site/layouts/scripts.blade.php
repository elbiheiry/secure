<!-- Javascript Files -->
<script src="{{ surl('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ surl('js/bootstrap.min.js') }}"></script>
<!-- Swiper Slider -->
<script src="{{ surl('js/swiper.min.js') }}"></script>
<!-- OWL Carousel -->
<script src="{{ surl('js/owl.carousel.min.js') }}"></script>
<!-- SLY Carousel -->
<script src="{{ surl('js/sly.min.js') }}"></script>
<script src="{{ surl('js/sly.vendor.min.js') }}"></script>
<!-- Waypoint -->
<script src="{{ surl('js/jquery.waypoints.min.js') }}"></script>
<!-- Easy Waypoint -->
<script src="{{ surl('js/easy-waypoint-animate.js') }}"></script>
<!-- Magnific -->
<script src="{{ surl('js/jquery.magnific-popup.min.jss') }}"></script>
<!-- Scripts -->
<script src="{{ surl('js/scripts.js') }}"></script>
<!-- Sly Our Portfolio -->
<script src="{{ surl('js/sly-ourportfolio.js') }}"></script>
<!-- REVOLUTION SLIDER -->
<!-- ADD-ONS JS FILES -->
<script src="{{ surl('revslider2/js/revolution.addon.particles.min.js') }}"></script>
<script src="{{ surl('revslider2/js/revolution.addon.snow.min.js') }}"></script>
<script src="{{ surl('revslider2/js/revolution.addon.polyfold.min.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ surl('revslider2/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ surl('revslider2/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ surl('revslider2/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ surl('revslider2/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ surl('revslider2/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ surl('revslider2/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ surl('revslider2/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ surl('revslider2/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ surl('revslider2/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ surl('revslider2/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ Surl('revslider2/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- Inline JS -->
<script src="{{ surl('revslider2/js/inline-revslider2.js') }}"></script>
<script src="{{ aurl('vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ aurl('js/admin.js') }}"></script>
<script>
    //submit form using ajax
    $(document).on('submit', '.contact-form', function() {
        var form = $(this);
        var url = form.attr('action');
        var formData = new FormData(form[0]);
        form.find(":submit").attr('disabled', true).html(
            "{{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }}");

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        $('.progress-bar').width(percentComplete + '%');
                        $('.progress-bar').html(percentComplete + '%');

                    }
                }, false);

                return xhr;
            },
            url: url,
            method: 'POST',
            dataType: 'json',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                notification("success", response.message, "fas fa-check");
                setTimeout(function() {
                    window.location.href = response.url;
                }, 2000);
            },
            error: function(jqXHR) {
                var response = $.parseJSON(jqXHR.responseText);
                notification("danger", response, "fas fa-times");
                form.find(":submit").attr('disabled', false).html(
                    "{{ locale() == 'en' ? 'Submit' : 'تأكيد' }}");
            }
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        return false;
    });
    $(document).on('submit', '.subscribe-form', function() {
        var form = $(this);
        var url = form.attr('action');
        var formData = new FormData(form[0]);
        form.find(":submit").attr('disabled', true).html(
            "{{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }}");

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        $('.progress-bar').width(percentComplete + '%');
                        $('.progress-bar').html(percentComplete + '%');

                    }
                }, false);

                return xhr;
            },
            url: url,
            method: 'POST',
            dataType: 'json',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                notification("success", response.message, "fas fa-check");
                setTimeout(function() {
                    window.location.href = response.url;
                }, 2000);
            },
            error: function(jqXHR) {
                var response = $.parseJSON(jqXHR.responseText);
                notification("danger", response, "fas fa-times");
                form.find(":submit").attr('disabled', false).html(
                    "{{ locale() == 'en' ? 'Subscribe' : 'إشترك الان' }}");
            }
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        return false;
    });
</script>

@stack('js')
