<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script>
    $(document).ready (function(){
            $("#success-alert").hide();
            $("#myWish").click(function showAlert() {
                $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                    $("#success-alert").slideUp(500);
                });   
            });
    });
</script>
<!-- TABLES -->
<script>
	$(document).ready(function(){
		$('#userList').dataTable();
		$('#userHistory').dataTable();
		$('#adminList').dataTable();
		$('#adminHistory').dataTable();
		$('#users').dataTable();
		$('#users').dataTable();
		$('#admins').dataTable();
	});
</script>

<!-- AdRoll -->
<script type="text/javascript">
    adroll_adv_id = "C2ZGWIHYUFBPHMIOXOTR2E";
    adroll_pix_id = "E2J32DY4KNCY3HZXP6CV6O";
    /* OPTIONAL: provide email to improve user identification */
    /* adroll_email = "username@example.com"; */
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-text">
                    <p>setup correctly your time</p>
                </div>
            </div>
        </div>
    </div>
</footer>