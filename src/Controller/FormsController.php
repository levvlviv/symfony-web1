<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormsController extends AbstractController
{
    /**
     * @Route("/forms", name="forms")
     */
    public function index()
    {
    	$form = $this->createForm(ContactType::class);
        return $this->render('forms/index.html.twig', [
        	"our_form" => $form->createView()
        ]);
    }
}
