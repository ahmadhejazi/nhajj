<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pathcreation
 *
 * @author hejazi-ubrand
 */
require_once './vendors/Graph.php';
class pathcreation {
    public $pathgraph; 
    
    
    public function _construct(){
        $pathgraph = new Graph(); 
        $graph->createVertex('Rome');
        $graph->createVertex('mina');
        $graph->createVertex('Rome');
        $graph->createVertex('Rome');
        
    }
    
    
    
}
