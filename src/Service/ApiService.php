<?php

    namespace Src\Service;

    use Src\ModeloDatos;

    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__."/../../");//le indico donde está el .env
    //le pongo '\' ya que está en vendor (no en src)
    $dotenv->load();

    define("URL", $_ENV['URL_BASE'].$_ENV['API_KEY']."&q=".$_ENV['BUSQUEDA']);

    class ApiService{

        public function devolverImagenes():array{
            $imagenes=[];

            $datosUrl= file_get_contents(URL);
            $datosJson= json_decode($datosUrl);

            $datosImg= $datosJson->hits;

            foreach($datosImg as $img){
                $imagenes[]= (new ModeloDatos\Imagenes)->setImagen($img->webformatURL)
                ->setAutor($img->user)
                ->setLikes($img->likes);
            }

            return $imagenes;
        }


    }