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
use function Symfony\Config\assets;

class UsuarioController extends AbstractController
{
    /**
     * Definimos la ruta inicial de symfony '127.0.0.1/'
     * como ruta inicial. Al acceder a ella se ejecuta la función
     * definida justo debajo suyo.
     */

    /**
     * PÁGINA WEB INICIAL
     */
    #[Route('/', name: 'app_homepage')]
    public function homepage()
    {
        $titulo = 'Octavio Bernal - Portfolio';
        return $this->render('webpages/homepage.html.twig', [
            'titulo' => $titulo
        ]);
    }

    /**
     * PÁGINA WEB DE TECNOLOGÍAS
     */

    #[Route('/tecnologias', name: 'app_tecnologias')]
    public function tecnologias()
    {

        $lenguajes = [
          ['nombre' => 'html'       , 'imagen' => '/img/html.png'],
          ['nombre' => 'css'        , 'imagen' => '/img/css.png'],
          ['nombre' => 'php'        , 'imagen' => '/img/php.png'],
          ['nombre' => 'java'       , 'imagen' => '/img/java.png'],
          ['nombre' => 'python'     , 'imagen' => '/img/python.png'],
        ];

        $frameworks = [
          ['nombre' => 'bootstrap'  , 'imagen' => '/img/bootstrap.png'],
          ['nombre' => 'symfony'    , 'imagen' => '/img/symfony.png'],
          ['nombre' => 'angular'    , 'imagen' => '/img/angular.png'],
          ['nombre' => 'springboot' , 'imagen' => '/img/springboot.png'],
        ];

        return $this->render('webpages/programlanguajes.html.twig',[
            'lenguaje' => $lenguajes,
            'frameworks' => $frameworks
        ]);

        /**
         * Mediante la función dd se podrá observar el tipo de datos
         * que le pasamos, en este caso detecta que es un array,
         * detecta las posiciones y la clave valor.

        dd($lenguajes);
         * */

    }

    /**
     * PÁGINA TRABAJOS REALIZADOS
     */

    #[Route('/trabajos', name: 'app_trabajos')]
    public function trabajos()
    {
        return $this->render('webpages/trabajos.html.twig',[

        ]);
    }

}