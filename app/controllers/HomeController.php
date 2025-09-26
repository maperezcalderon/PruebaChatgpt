<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function inicioAction(): void
    {
        $this->render('home/inicio', [
            'titulo' => 'Bienvenido',
            'descripcion' => 'Selecciona una opción del menú para descubrir más contenido.'
        ]);
    }

    public function serviciosAction(): void
    {
        $this->render('home/servicios', [
            'titulo' => 'Servicios',
            'servicios' => [
                'Desarrollo web a medida',
                'Consultoría tecnológica',
                'Mantenimiento y soporte continuo'
            ]
        ]);
    }

    public function contactoAction(): void
    {
        $this->render('home/contacto', [
            'titulo' => 'Contacto',
            'correo' => 'contacto@empresa.com',
            'telefono' => '+34 600 123 456'
        ]);
    }
}
