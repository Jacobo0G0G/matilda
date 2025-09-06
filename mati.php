<?php
if($_GET["user"] == "MATILDA"){
?>
<html>
    <body>
        <h1>Razones de porque mi novia es la mejor</h1>
        <?php echo "<h2>HOLA: ". $_GET["user"] ."</h2>"; 
        $a = 10;
        $b = 5;
        $c = $a + $b;
        echo $c;
        ?>
    </body>
</html>
<?php
}else{
    echo "<h2>NO ESTAS AUTORIZADO MALANDRO";
}
?>
<form action="inicio.html">
    <button>Regresar</button>
</form>
