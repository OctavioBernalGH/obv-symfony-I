<?php
/**
 * Created by PhpStorm.
 * User: Octavio
 * Date: 24/08/2022
 * Time: 17:01
 */

namespace App\Controller;

/**
 * Utilizamos los componentes de enrutado de Symfony
 * mediante anotaciones.
 */
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController
{
    /**
     * Definimos la ruta inicial de symfony '127.0.0.1/'
     * como ruta inicial. Al acceder a ella se ejecuta la función
     * definida justo debajo suyo.
     */
    #[Route('/')]
    public function homepage()
    {
        return new Response('Titulo de la página web');
    }

    #[Route('/browse/{name}')]
    public function nombre($name = null)
    {
        if($name)
             {
                 return new Response('Hola '.$name);
             }
             else
             {
                 return new Response("No has introducido un nombre en la URL");
             }

    }

}