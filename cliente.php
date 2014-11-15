<?php require_once('head.html'); ?>
    
    
    <body>


        <?php require_once('barrasuperior.html'); ?>

        <div id="menuvert"> </div>
          <?php require_once('menuvert.html'); ?>

                    
            <?php
if (!isset($_GET['haction']))
{
//se o controle action não foi enviado 
//mostrar o formulario
?>
  
        <div id ="form">
        <div id="container,form">
	
    <?php require_once('formcliente.html'); ?>
    
        </div>
      
<?php 
}
else
{
//se o controle action foi enviado mostrar os dados
?>
<div id="container">
<h1> Saida da função</h1>
<span><?php echo strtolower( $_GET['tnome']);?></span><br>
</div>
<?php
}
?>
                    <br>
                    <br>
        
        
        
        
    	<?php require_once('rodape.html'); ?>
        
       
    </body>
</html>
