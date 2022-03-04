<?php
if(isset($_GET['nome'])){
echo $_GET['nome']."<h1> </h1>" . "<br>";
echo $_GET['duvida']."<h3> </h3>" . "<br>";
echo '<style> body{ background-color:' .$_GET['color'].';} </style>';
}
?>
