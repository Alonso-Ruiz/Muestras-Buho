<?php 
  // fila 1
  $Sql1 = "SELECT * FROM articulos WHERE idArticulo = '1'";
  $resultado1 = $conn->query($Sql1);
  $Fila = $resultado1->fetch_assoc();

  // fila 2
  $Sql2 = "SELECT * FROM articulos WHERE idArticulo = '2'";
  $resultado2 = $conn->query($Sql2);
  $Fila2 = $resultado2->fetch_assoc();

  // fila 3
  $Sql3 = "SELECT * FROM articulos WHERE idArticulo = '3'";
  $resultado3 = $conn->query($Sql3);
  $Fila3 = $resultado3->fetch_assoc();

  // fila 4
  $Sql4 = "SELECT * FROM articulos WHERE idArticulo = '4'";
  $resultado4 = $conn->query($Sql4);
  $Fila4 = $resultado4->fetch_assoc();

  // fila 5
  $Sql5 = "SELECT * FROM articulos WHERE idArticulo = '5'";
  $resultado5 = $conn->query($Sql5);
  $Fila5 = $resultado5->fetch_assoc();

  // fila 6
  $Sql6 = "SELECT * FROM articulos WHERE idArticulo = '6'";
  $resultado6 = $conn->query($Sql6);
  $Fila6 = $resultado6->fetch_assoc();

  // fila 7
  $Sql7 = "SELECT * FROM articulos WHERE idArticulo = '7'";
  $resultado7 = $conn->query($Sql7);
  $Fila7 = $resultado7->fetch_assoc();

  // fila 8
  $Sql8 = "SELECT * FROM articulos WHERE idArticulo = '8'";
  $resultado8 = $conn->query($Sql8);
  $Fila8 = $resultado8->fetch_assoc();