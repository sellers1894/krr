<?php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Bidd;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Bidd controller.
 *
 */
class BiddController extends Controller
{
    /**
     * Lists all Bidd entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bidds = $em->getRepository('BloggerBlogBundle:Bidd')->findAll();

        return $this->render('@BloggerBlog/Bidd/index.html.twig', array(
            'bidds' => $bidds,
        ));
    }

    /**
     * Creates a new Bidd entity.
     *
     */
    public function newAction(Request $request)
    {
        $bidd = new Bidd();
        $form = $this->createForm('Blogger\BlogBundle\Form\BiddType', $bidd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bidd);
            $em->flush();

            return $this->redirectToRoute('bidd_show', array('id' => $bidd->getId()));
        }

        return $this->render('Bidd/new.html.twig', array(
            'Bidd' => $bidd,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bidd entity.
     *
     */
    public function showAction(Bidd $bidd)
    {
        $deleteForm = $this->createDeleteForm($bidd);

        return $this->render('Bidd/show.html.twig', array(
            'Bidd' => $bidd,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bidd entity.
     *
     */
    public function editAction(Request $request, Bidd $bidd)
    {
        $deleteForm = $this->createDeleteForm($bidd);
        $editForm = $this->createForm('Blogger\BlogBundle\Form\BiddType', $bidd);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bidd_edit', array('id' => $bidd->getId()));
        }

        return $this->render('Bidd/edit.html.twig', array(
            'Bidd' => $bidd,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bidd entity.
     *
     */
    public function deleteAction(Request $request, Bidd $bidd)
    {
        $form = $this->createDeleteForm($bidd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bidd);
            $em->flush();
        }

        return $this->redirectToRoute('bidd_index');
    }

    /**
     * Creates a form to delete a Bidd entity.
     *
     * @param Bidd $bidd The Bidd entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bidd $bidd)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bidd_delete', array('id' => $bidd->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
