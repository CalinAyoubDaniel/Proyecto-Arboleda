
<div id="pie" class="container">
    
    <div class="row fila">
        <div class="col-md-4">
            <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
            <img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
            <br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><br>
            Licencia Creative Commons Atribución-CompartirIgual 4.0 Internacional</a>.
        </div>
        <div class="col-md-4">
            <?php
                $cosa = $_SERVER['REQUEST_URI'];
                if($cosa == "/componentes_pc/index.php" || $cosa == "/" || $cosa == "/index.php"){
            ?>
            <ul class="list-inline">
                <li>
                    <a href="javascript:void(0);" onclick="window.open('./aviso.php', 'popup', 'left=390, top=200, width=512, height=341, toolbar=0, resizable=1')">Aviso Legal</a>
                </li>
                <li><span style="color:#FFFFFF;">|</span></li>
                <li>
                    <a href="javascript:void(0);" onclick="window.open('./politica.php', 'popup', 'left=390, top=200, width=512, height=341, toolbar=0, resizable=1')">Política de privacidad</a>
                </li>
            </ul>
            <?php
                }else{
                   echo "<p>Somos una tienda de tecnología que ofrece los mejores productos del sector y a los mejores precios</p>" ;
                }

            ?>
            <ul class="list-inline">
                <li>
                    <a href="">&#169;COMPONENTES PC Madrid, España.</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 rede">
            <ul class="list-inline">
                <li><ul id="facebook">
                    <a href="https://www.facebook.com/profile.php?id=100012400539500" target="_blank" ><li></li></a>
                </ul></li>
                <li><ul id="twitter">
                    <a href="https://twitter.com/1smr1Pc"target="_blank"><li></li></a>
                </ul></li>
                <li><ul id="linkedin">
                    <a href="https://es.linkedin.com/in/componentes-pc-b355b2122"target="_blank"><li></li></a>
                </ul></li>
            </ul>
        </div>
        
    </div>
     
        
   
</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../jquery/panel.js"></script>
    <script src="../jquery/script.js"></script>
    <script src="../jquery/registro.js"></script>
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