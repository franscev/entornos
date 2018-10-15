<?php

class Controller_Testeo extends Controller_Rest
{

    public function get_list()
    {
        return $this->response(array(

            'id' => 1,

            'title' => "Samadhi",
           
            'description' => "Primer lanzamiento de jazz en nuestro sello.",
           
            'id_album' => 3
           
        ));
    }
}