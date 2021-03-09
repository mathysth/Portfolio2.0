<?php
namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;
use App\Utils\TranslationsUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController{

    /**
     * @Route(path="/",name="home_redirect")
     */
    public function redirectToHomePage(): RedirectResponse
    {
        return $this->redirectToRoute('home',['lang' => "FR"]);
    }

    /**
     * @Route(path="/{lang}",name="home")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $translation = new TranslationsUtils($request->get('lang'),$request);
        if(!$translation->verifyIsLangSupported()){
            return $this->redirectToRoute('home_redirect');
        }

        return $this->render('pages/home.html.twig');
    }
}
