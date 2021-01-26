<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Classe principal da API
 */
class Api
{
    private $data;
    private $response;
    private $request;
    private $arguments;

    /**
     * Executa pagina index
     *
     * @param [type] $request
     * @param [type] $response
     * @return void
     */
    public function home(Request $request, Response $response, array $args)
    {
        $payload = "API para consulta de informações sobre raças de cachorro extraídas do American Kennel Club - https://www.akc.org";
        $response->getBody()->write($payload);
        return $response;
    }

    /**
     * Consulta uma raça
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return void
     */
    public function raca(Request $request, Response $response, array $args)
    {       

        $arr2 = [
            "breed_id" => "",
            "breed_name" => "",
            "breed_name_pt" => "",
            "breed_history" => "",
            "breed_about" => "",
            "breed_group_akc" => "",
            "breed_group_akc_pt" => "",
            "breed_group_fci" => "",
            "breed_height" => "",
            "breed_weight"    => "",
            "breed_size" => "",
            "breed_lifetime"    => "",
            "breed_img" => "",
            "breed_temperament" => "",
            "breed_color" => "",
            "breed_brand_color" => "",
            "breed_head" => "",          
            "breed_body" => ""
        ];

        $arr3 = [
            "breed_info" => [
                "id"            =>  1, # id
                "name"          => "", # nome inglês
                "name_pt"       => "", # nome em português
                "history"       => "", # história
                "about"         => "", # sobre
                "group_akc"     => "", # grupo conforme AKC
                "group_akc_pt"  => "", # grupo conforme AKC em português  
                "group_fci"     =>  1, # grupo conforme FCI
                "height"        => "", # altura em cm
                "weight"        => "", # peso em kg
                "size"          => "", # porte
                "lifetime"      => "", # tempo de vida
                "temperament"   => "", # temperamento do animal
                "color"         => "", # cor em geral predominante
                "brand_color"   => "", # cor das marcas
                "head"          => "", # descrição da cabeça
                "body"          => "",  # descrição do corpo
            ],
            "breed_imgs" => [
                1 => CONFIG_DEFAULT['home'] . "/api-raca-dog/public/img-raca/affenpinscher/1.jpg",
                2 => CONFIG_DEFAULT['home'] . "/api-raca-dog/public/img-raca/affenpinscher/3.jpg",
                3 => CONFIG_DEFAULT['home'] . "/api-raca-dog/public/img-raca/affenpinscher/3.jpg",
            ],
        ];


        $payload = json_encode($arr3);
        $response->getBody()->write($payload);
        return  $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * Lista todas as raças
     *
     * @param Request $request
     * @param Response $response
     * @return void
     */
    public function listAll(Request $request, Response $response)
    {

        $arr = [
            "teste" =>  "todos"
        ];

        $payload = json_encode($arr);
        $response->getBody()->write($payload);
        return  $response->withHeader('Content-Type', 'application/json');
    }

    /**
     * Procura por uma raça
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return void
     */
    public function search(Request $request, Response $response, array $args)
    {

        $arr = [
            "teste" =>  $args['text']
        ];

        $payload = json_encode($arr);
        $response->getBody()->write($payload);
        return  $response->withHeader('Content-Type', 'application/json');
    }
}
