<?php
// src/Controller/AboutController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
  /**
   *@Route("/about")
   */
  public function about():Response
  {
    $text = 'This is about the project';

    return $this->render('about.html.twig',[
      'about'=>$text,
    ]);
  }
}
