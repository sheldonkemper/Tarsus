<?php
// src/Controller/AccountController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountController extends AbstractController
{
  /**
   *@Route("/account")
   */
  public function account():Response
  {
    $text = 'This is the account page';

    return $this->render('account.html.twig',[
      'about'=>$text,
    ]);
  }
}
