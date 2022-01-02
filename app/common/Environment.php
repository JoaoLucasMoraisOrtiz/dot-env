<?php

namespace your_WebApp_namespace_for_this;

use Exception;

class Environment{

    /**
     * Método responsável por carregar o arquivo .env
     * @param string $dir Caminho absoluto até o arquivo .env
     */
    public static function load($dir){

        //$file recebe o arquivo que pegamos com o caminho fornecido em $dir
        $file = file($dir);

        //se o arquivo não existir
        if(!isset($file)){

            //exibe um erro 
            throw new Exception(500, 'Não foi possível obter o arquivo com as variáveis de ambiente');     
        }

        //caso o arquivo exista, ele retira todos os espaços que existem nele
        $file = str_replace(' ', '', $file);

        //inicializa a variável $vars que é um array
        $vars = [];

        //para cada linha no arquivo
        foreach ($file as $line) {

            //ele adiciona a linha na variável $vars
            array_push($vars, $line);
        }

        //para cada ítem em $vars, executa um putenv($item) com ele
        foreach($vars as $item){
            putenv($item);
        }

    }
}