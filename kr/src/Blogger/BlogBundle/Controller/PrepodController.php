<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 15.05.2017
 * Time: 9:11
 */

namespace Blogger\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrepodController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
}