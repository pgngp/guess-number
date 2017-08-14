<?php

namespace AppBundle\Controller;

require_once(__DIR__ . '/../../../src/NumberPicker.php');

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use GuessNumber\NumberPicker;

class GuessController extends Controller
{
	/**
	 * @Route("/guess", name="Guess number")
	 */
	public function guessAction()
	{
		return $this->render("guess.html.twig", array());
	}
	
	/**
	 * @Route("/pick")
	 */
	public function pickNumberAction()
	{
	    $numberPicker = new NumberPicker();
	    
	    return new Response($numberPicker->pickNumber());
	}
}