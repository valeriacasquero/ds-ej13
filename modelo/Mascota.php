<?php
class Mascota {

public $Id;
public $Nombre;
public $Raza;
public $DueñoMascota;
public function MostrarPropiedades(){

    echo 'Id: '.$this->DueñoMascota->Id.'<br>';
    echo 'Nombre: '.$this->DueñoMascota->Nombre. '<br>';
    echo 'Apellido: '.$this->DueñoMascota->Apellido.'<br>';
    echo 'Documento: '.$this->DueñoMascota->Documento. '<br>';
    echo 'Direccion: '.$this->DueñoMascota->Direccion. '<br>';
    echo 'Celular: '.$this->DueñoMascota->Celular.'<br>';

    echo 'Id: '.$this->Id. '<br>';
    echo 'Nombre: '.$this->Nombre. '<br>';
    echo 'Raza: '.$this->Raza. '<br>';

} 

}