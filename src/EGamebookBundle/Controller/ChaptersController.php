<?php

namespace EGamebookBundle\Controller;

use EGamebookBundle\Entity\Chapters;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chapter controller.
 *
 */
class ChaptersController extends Controller
{
    /**
     * Lists all chapter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chapters = $em->getRepository('EGamebookBundle:Chapters')->findAll();

        return $this->render('@EGamebook/chapters/index.html.twig', array(
            'chapters' => $chapters,
        ));
    }

    /**
     * Creates a new chapter entity.
     *
     */
    public function newAction(Request $request)
    {
        $chapter = new Chapters();
        $form = $this->createForm('EGamebookBundle\Form\ChaptersType', $chapter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapter);
            $em->flush();

            return $this->redirectToRoute('chapters_show', array('id' => $chapter->getId()));
        }

        return $this->render('@EGamebook/chapters/new.html.twig', array(
            'chapter' => $chapter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chapter entity.
     *
     */
    public function showAction(Chapters $chapter)
    {
        $deleteForm = $this->createDeleteForm($chapter);

        return $this->render('@EGamebook/chapters/show.html.twig', array(
            'chapter' => $chapter,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chapter entity.
     *
     */
    public function editAction(Request $request, Chapters $chapter)
    {
        $deleteForm = $this->createDeleteForm($chapter);
        $editForm = $this->createForm('EGamebookBundle\Form\ChaptersType', $chapter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapters_edit', array('id' => $chapter->getId()));
        }

        return $this->render('@EGamebook/chapters/edit.html.twig', array(
            'chapter' => $chapter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chapter entity.
     *
     */
    public function deleteAction(Request $request, Chapters $chapter)
    {
        $form = $this->createDeleteForm($chapter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chapter);
            $em->flush();
        }

        return $this->redirectToRoute('chapters_index');
    }

    /**
     * Creates a form to delete a chapter entity.
     *
     * @param Chapters $chapter The chapter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chapters $chapter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chapters_delete', array('id' => $chapter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Creates a new relation between Chapters by first selecting a page.
     *
     */
    public function newRelationsAction (Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT * FROM chapters where chapters.number = ?;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();

        $result = $statement->fetchAll();
    }

}
