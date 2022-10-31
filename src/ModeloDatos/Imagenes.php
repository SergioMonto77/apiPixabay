<?php

    namespace Src\ModeloDatos;

    class Imagenes{

        private string $imagen;
        private string $autor;
        private int $likes;

        //constructor vacío por defecto

        //getter && setter
       
        public function getImagen()
        {
                return $this->imagen;
        }

        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        
        public function getAutor()
        {
                return $this->autor;
        }

        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

         
        public function getLikes()
        {
                return $this->likes;
        }

        public function setLikes($likes)
        {
                $this->likes = $likes;

                return $this;
        }
    }