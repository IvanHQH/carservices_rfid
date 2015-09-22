<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OperatorController
 *
 * @author Arellano
 */
class ServiceOrderController extends BaseController{
    //put your code here
	 
    public function records_list()
    {
        $array = array();
        return View::make('cars.record_list',['version'=>'record','records'=>$array]);         
    }                      
    
}
