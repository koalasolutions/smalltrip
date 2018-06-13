<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{
    public function index(){
        $str = "Hello Worlderino Aaaay !";
        return $this->render('home/index.html.twig', array('str' => $str));
    }
}