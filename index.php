<?php
require_once 'modelo/Mascota.php';
require_once 'modelo/DueñoMascota.php';

//instanciamos un producto
$d = new DueñoMascota();
$d-> Id=1;
$d->Nombre = 'Juan';
$d->Apellido =  'Perez';
$d->Documento = 35200200;
$d->Celular = 152010101;
$d->Direccion = 'Brown 231';


//instanciamos un producto
$m = new Mascota();
$m->Id=1;
$m->Nombre = 'Felipe';
$m->Raza = 'Golden';
$m->DueñoMascota= $d;
$m->MostrarPropiedades();


