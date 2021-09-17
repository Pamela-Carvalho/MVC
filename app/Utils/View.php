<?php

namespace App\Utils;

class View{

    /**
     * Médoto responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view){

        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';

    }

    /**
     * Médoto responsável por retornar o conteúdo rederizado de uma view
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string
     */
    public static function render($view, $vars = []){

        // CONTEÚDO DA VIEW
        $contentView = self::getContentView($view);

        // CHAVES DO ARRAY DE VARIÁVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        // echo "<pre>";
        // print_r($keys);
        // echo "</pre>";exit;

        // RETORNA O CONTEÚDO RENDERIZADO
        return str_replace($keys, array_values($vars), $contentView);;

    }

}