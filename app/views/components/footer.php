<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 center-on-small">
                    <span>info@kodadevelopment.com
                        <span class="red-circle"></span>
                        <span>+447472330050</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 row social center-on-small">
                <div class="pull-right">
                    <a target="_blank" href="http://instagram.com/kodadevelopment"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" href="http://facebook.com/kodadevelopment"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="http://twitter.com/kodadevelopment"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Library functions -->
<script src="/public/lib/phone-control.js"></script>
<script src="/public/lib/functions.js"></script>
<?php
if(strtolower($view) === "services")
    echo '<script src="/public/lib/circles.js"></script>';
?>


</body>
</html>