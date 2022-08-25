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
    #[Route('/', name: 'app_homepage')]
    public function homepage()
    {
        $versiones = [
          ['versionSymfony' => '1.0 Symfony', 'versionPHP' => '>=5.0', 'ano' => '2007'],
          ['versionSymfony' => '1.1 Symfony', 'versionPHP' => '>=5.1', 'ano' => '2008'],
          ['versionSymfony' => '1.2 Symfony', 'versionPHP' => '>=5.2', 'ano' => '2008'],
          ['versionSymfony' => '1.3 Symfony', 'versionPHP' => '>=5.2.4', 'ano' => '2009'],
          ['versionSymfony' => '1.4 Symfony', 'versionPHP' => '>=5.2.4', 'ano' => '2009'],
          ['versionSymfony' => '2.0 Symfony', 'versionPHP' => '>=5.3.2', 'ano' => '2011'],
          ['versionSymfony' => '2.1 Symfony', 'versionPHP' => '>=5.3.3', 'ano' => '2012'],
          ['versionSymfony' => '2.2 Symfony', 'versionPHP' => '>=5.3.3', 'ano' => '2013'],
          ['versionSymfony' => '2.3 Symfony', 'versionPHP' => '>=5.3.3', 'ano' => '2013'],
          ['versionSymfony' => '2.4 Symfony', 'versionPHP' => '>=5.3.3', 'ano' => '2013'],
          ['versionSymfony' => '2.5 Symfony', 'versionPHP' => '>=5.3.3', 'ano' => '2014'],
          ['versionSymfony' => '2.6 Symfony', 'versionPHP' => '>=5.3.3', 'ano' => '2014'],
          ['versionSymfony' => '2.7 Symfony', 'versionPHP' => '>=5.3.3', 'ano' => '2014'],
          ['versionSymfony' => '2.8 Symfony', 'versionPHP' => '>=5.3.9', 'ano' => '2015'],
          ['versionSymfony' => '3.0 Symfony', 'versionPHP' => '>=5.3.9', 'ano' => '2015'],
          ['versionSymfony' => '3.1 Symfony', 'versionPHP' => '>=5.5.9', 'ano' => '2016'],
          ['versionSymfony' => '3.2 Symfony', 'versionPHP' => '>=5.5.9', 'ano' => '2016'],
          ['versionSymfony' => '3.3 Symfony', 'versionPHP' => '>=5.5.9', 'ano' => '2017'],
          ['versionSymfony' => '3.4 Symfony', 'versionPHP' => '>=5.5.9', 'ano' => '2017'],
          ['versionSymfony' => '4.0 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2017'],
          ['versionSymfony' => '4.1 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2018'],
          ['versionSymfony' => '4.2 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2018'],
          ['versionSymfony' => '4.3 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2019'],
          ['versionSymfony' => '4.4 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2019'],
          ['versionSymfony' => '5.0 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2019'],
          ['versionSymfony' => '5.1 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2020'],
          ['versionSymfony' => '5.2 Symfony', 'versionPHP' => '>=7.1.3', 'ano' => '2020'],
        ];
        /**
         * Renderizamos la vista que hemos creado, y le pasamos como parámetros
         * el título, la descripción y el array generado.
         */
        return $this->render('webpages/homepage.html.twig', [
            'versionado' => $versiones
        ]);
    }

    #[Route('/lenguajes', name: 'app_lenguajes')]
    public function verInfoArray()
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

        return $this->render('webpages/programlanguajes.html.twig',[
            'lenguajesProgram' => $lenguajes
        ]);

        /**
         * Mediante la función dd se podrá observar el tipo de datos
         * que le pasamos, en este caso detecta que es un array,
         * detecta las posiciones y la clave valor.

        dd($lenguajes);
         * */
    }

}