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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController extends AbstractController
{
    /**
     * Definimos la ruta inicial de symfony '127.0.0.1/'
     * como ruta inicial. Al acceder a ella se ejecuta la función
     * definida justo debajo suyo.
     */
    #[Route('/')]
    public function homepage()
    {
        $lenguajes = [
          ['idioma' => 'Python', 'uso' => 'Backend'],
          ['idioma' => 'C', 'uso' => 'Backend'],
          ['idioma' => 'Java', 'uso' => 'Backend'],
          ['idioma' => 'C++', 'uso' => 'Backend'],
          ['idioma' => 'C#', 'uso' => 'Backend'],
          ['idioma' => 'Visual Basic', 'uso' => 'Backend'],
          ['idioma' => 'JavaScript', 'uso' => 'Backend/Frontend'],
          ['idioma' => 'Asssembly Language',  'uso' => 'Backend'],
          ['idioma' => 'SQL', 'uso' => 'BBDD'],
        ];

        return $this->render('webpages/homepage.html.twig', [
            'titulo' => 'Página Principal',
            'descripcion' => 'Página de pruebas para aprender Symfony.',
            'lenguajesProgram' => $lenguajes
        ]);
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