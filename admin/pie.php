
<div id="pie" class="container">
    askfyuasduhyfbkasuhdbfhuabsdfhuasbdfhbashdfbujhsabfdashdfb
</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./jquery/panel.js"></script>
    <script type="text/javascript">//<![CDATA[
        $(function(){
            $('#slider div:gt(0)').hide();
            setInterval(function(){
                $('#slider div:first-child').fadeOut(0)
                .next('div').fadeIn(1000)
                .end().appendTo('#slider');}, 4000);
        });
            //]]>
        </script>﻿