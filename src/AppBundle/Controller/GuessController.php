<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GuessController extends Controller
{
	/**
	 * @Route("/guess", name="Guess number")
	 */
	public function guessAction()
	{
		return $this->render("guess.html.twig", array());
	}
}