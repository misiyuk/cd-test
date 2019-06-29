<?php

namespace App\Controller;

use App\Core\Controller\BaseController;
use App\Core\Request\Request;
use App\DTO\AlbumFormDTO;
use App\Form\AlbumFormType;
use App\UseCase\AlbumModifier;
use function mysqli_init;

class AlbumController extends BaseController
{
    private $albumModifier;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->albumModifier = new AlbumModifier();
    }

    /**
     * @throws \Exception
     */
    public function index()
    {
        return $this->render('album/index', [
            'message' => 'Hello World!',
            'title' => 'Главная страница!',
        ]);
    }

    /**
     * @throws \App\Core\Form\Exceptions\NotValidFormDataObjectException
     */
    public function new()
    {
        $albumDTO = new AlbumFormDTO();
        $request = $this->getRequest();
        $form = $this->createForm(AlbumFormType::class, $albumDTO);
        $form->handleRequest($request);
        if ($form->isSubmit() && $form->isValid()) {
            $this->albumModifier->new($albumDTO);
        }

        return $this->render('album/index', [
            'title' => 'Главная страница!',
        ]);
    }

    /**
     * @throws \App\Core\Form\Exceptions\NotValidFormDataObjectException
     */
    public function edit()
    {
        $albumDTO = new AlbumFormDTO();
        $request = $this->getRequest();
        $form = $this->createForm(AlbumFormType::class, $albumDTO);
        $form->handleRequest($request);
        if ($form->isSubmit() && $form->isValid()) {
            $this->albumModifier->edit($albumDTO, $request->get('id'));
        }

        return $this->render('album/index', [
            'title' => 'Главная страница!',
        ]);
    }

    public function delete()
    {
        $request = $this->getRequest();
        if ($request->server('REQUEST_METHOD') === 'DELETE') {
            $this->albumModifier->delete($request->get('id'));
        }

        return $this->render('album/index', [
            'title' => 'Главная страница!',
        ]);
    }
}
