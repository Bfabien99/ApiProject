<?php
require 'model/apiModel.php';

class apiController{
    
    public function testConnection() 
    {
        $initModel = new apiModel();
        $connectModel = $initModel->dbConnect();
        return $connectModel; 
    }

    public function save($name, $tel, $location, $area, $details, $price){
        $initModel = new apiModel();
        $callModel = $initModel->set($name, $tel, $location, $area, $details, $price);
        header('Content-Type: text/html;charset= UTF-8');
        header("Location:/site/index.html") ;
        return $callModel;
    }

    public function update($id,$name, $tel, $location, $area, $details, $price){
        $initModel = new apiModel();
        $callModel = $initModel->update($id, $name, $tel, $location, $area, $details, $price);
        header('Content-Type: text/html;charset= UTF-8');
        header("Location:/site/index.html") ;
        
        return $callModel;
    }

    public function obtainAll(){
        $initModel = new apiModel();
        $callModel = $initModel->getAll();
        echo $callModel;
    }

    public function obtainLimit($limite){
        $initModel = new apiModel();
        $callModel = $initModel->getLimite($limite);
        return $callModel;
    }

    public function cibleId($id){
        $initModel = new apiModel();
        $callModel = $initModel->cible($id);
        $callModel = json_decode($callModel,true);
        header('Content-Type: text/html;charset= UTF-8');
        require "view/home.php";
        return $callModel;
    }

    public function cibleId2($id){
        $initModel = new apiModel();
        $callModel = $initModel->cible($id);
        $callModel = json_decode($callModel,true);
        header('Content-Type: text/html;charset= UTF-8');
        require "view/update.php";
        return $callModel;
    }

    public function unset($id){
        $initModel = new apiModel();
        $callModel = $initModel->unset($id);
        header('Content-Type: text/html;charset= UTF-8');
        require "view/delete.php";
        return $callModel;
    }

    public function search($key){
        $initModel = new apiModel();
        $callModel = $initModel->search($key);
        return $callModel;
    }

    public function searchAdmin($key){
        $initModel = new apiModel();
        $callModel = $initModel->searchAdmin($key);
        return $callModel;
    }
    

}