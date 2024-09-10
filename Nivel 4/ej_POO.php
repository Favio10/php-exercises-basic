<?php
#POO Básico:
#Crea una clase Vehiculo con las propiedades marca, modelo y año. Define un método imprimirDatos() que imprima estas propiedades. 
#Crea un par de instancias de la clase y utiliza el método.
##Bonus: Añade un método que calcule la antigüedad del vehículo.

class Vehiculo {
 public function __construct(
    public string $marca,
    public string $modelo,
    public int $año
 )
 {
 }
 public function printDatos(){
    echo "Los datos del vehiculo son: Marca -> $this->marca, Modelo -> $this->modelo y Año -> $this->año\n";
 }   

 public function antigüedad(){
    $antig = 2024 - $this->año; 
    echo "La antiguedad del vehiculo es $antig años\n";
 }
}

$peugeot = new Vehiculo("Peugeot", "208", 2024 );


$peugeot->printDatos();
$peugeot->antigüedad();