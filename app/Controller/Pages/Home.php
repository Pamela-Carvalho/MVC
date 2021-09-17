<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

    /**
     * Método resposável por retornar o conteúdo (view) da home
     * @return string
     */
    public static function getHome(){
        $obOrganization = new Organization;

        // VIEW DA HOME
        $content = View::render('pages/home', [
            'name'          => $obOrganization->name,
            'description'   => $obOrganization->description
        ]);

        // RETORNA A VIEW DA PÁGINA
        return parent::getPage('Pams Dev | Home', $content);
    }

}