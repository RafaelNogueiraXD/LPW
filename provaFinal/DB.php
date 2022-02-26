<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author Radaelli
 */
class DB {
    public function conectar(){
        $c = new PDO("mysql:host=localhost;dbname=prova", "root", "");

        return $c;
    }
}
