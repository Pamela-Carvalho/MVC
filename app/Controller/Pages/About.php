<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class About extends Page{

    /**
     * Método resposável por retornar o conteúdo (view) de sobre
     * @return string
     */
    public static function getAbout(){
        $obOrganization = new Organization;

        // VIEW DA HOME
        $content = View::render('pages/about', [
            'name'          => $obOrganization->name,
            'description'   => $obOrganization->description
        ]);

        // RETORNA A VIEW DA PÁGINA
        return parent::getPage('SOBRE > PAMS DEV', $content);
    }

}