<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categoria;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CategoriasController extends AbstractController
{
    /**
     * @Route("/categorias", name="categorias")
     */
    public function index()
    {
        return $this->render('categorias/index.html.twig', [
            'controller_name' => 'CategoriasController',
        ]);
    }
    public function insertupdate($id)
    {
        $categoria = new Categoria();

        $getId = isset($id) && !empty($id);
        if($getId){
            $categoria = $this->getDoctrine()->getRepository(Categoria::class)->find($id);
        }
        return $this->render('categorias/insertupdate.html.twig', [
            'categoria' => $categoria,
            'mensaje'=> null,

        ]);
    }
    public function insertupdatepost(Request $request)
    {
        $categoria = new Categoria();
        $categoria->setNombre($request->request->get('nombre'));
        $categoria->setFechacreacion(new \DateTime);
        $categoriaRepositoryManager=$this->getDoctrine()->getRepository(Categoria::class)->guardar($categoria);
        return $this->render('categorias/insertupdate.html.twig', [
            'categoria' => $categoria,
            'mensaje'=> "Guardado Satisfatoriamente",
        ]);

    }
    public function delete()
    {
        return $this->render('', [
            'controller_name' => 'CategoriasController',
        ]);
    }
}
