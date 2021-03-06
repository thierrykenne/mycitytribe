<?php

namespace City\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

use City\BlogBundle\Entity\Article;
use City\BlogBundle\Form\ArticleType;

// /!\ Attention, nouvel objet à charger !
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function listeAction($page)
    {
        // On ne sait pas combien de pages il y a, mais on sait qu'une page
        // doit être supérieure ou égale à 1.
        if( $page < 1 )
        {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // la page d'erreur 404 (on pourra personnaliser cette page plus tard, d'ailleurs).
            throw new NotFoundHttpException('Page inexistante (page = '.$page.')');
        }

        // Ici, on récupérera la liste des articles, puis on la passera au template.

        // Mais pour l'instant, on ne fait qu'appeler le template.
        // Ce template n'existe pas encore, on va le créer dans le prochain chapitre.
        return $this->render('CityBlogBundle:Blog:liste.html.twig',array('articles' => array()));
    }

    public function voirAction($slug)
    {
        // Ici, on récupérera l'article correspondant au $slug.
        return $this->render('CityBlogBundle:Blog:voir.html.twig',array('article' => $slug));
    }

    public function ajouterAction()
    {
    $article = new Article();
    $article->setDate(new \Datetime());    
    $form = $this->createForm(new ArticleType());

    // On récupère la requête.
    $request = $this->get('request');

    // On vérifie qu'elle est de type « POST ».
    if( $request->getMethod() == 'POST' )
    {
        // On fait le lien Requête <-> Formulaire.
        $form->bindRequest($request);

        // On vérifie que les valeurs entrées sont correctes.
        // (Nous verrons la validation des objets en détail plus bas dans ce chapitre.)
        if( $form->isValid() )
        {
            // On récupère notre objet.
            $article = $form->getData();

            // On l'enregistre dans la base de données.
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($article);
            $em->flush();

            // On redirige vers la page d'accueil, par exemple.
            return $this->redirect($this->generateUrl('cityblog'));
        }
    }

    // À ce stade :
    // - soit la requête est de type « GET », donc le visiteur vient d'arriver et veut voir le formulaire ;
    // - soit la requête est de type « POST », mais le formulaire n'est pas valide, donc on l'affiche de nouveau.

    return $this->render('CityBlogBundle:Blog:ajouter.html.twig', array(
        'form' => $form->createView(),
    ));
    }

    public function modifierAction($id)
    {
        // Ici, on récupérera l'article correspondant à l'$id.

        // Ici, on s'occupera de la création et de la gestion du formulaire (via un service).

        return $this->render('CityBlogBundle:Blog:modifier.html.twig');
    }

    public function supprimerAction($id)
    {
        // Ici, on récupérera l'article correspondant à l'$id.

        // Ici, on gérera la suppression de l'article en question.

        return $this->render('CityBlogBundle:Blog:supprimer.html.twig');
    }
}