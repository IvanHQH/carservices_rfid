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
class OperatorController extends BaseController{
    //put your code here
	 
    public function operators_list()
    {
        $array = array();
        return View::make('operators.operators_list',['operators'=>$array]);         
    }         
    
    public function store($operatorId)
    {
        $input = Input::All();
        
        $operator = null;    
        
        if($operatorId == 0)
            $operator = new Member();    
        else{
            $operator = Member::find($operatorId); 
            if($operator == null){
                return Response::json(
                        array('succes'=>false,'errors'=>'operator not found')
                );                
            }                
        }        
        
        $operator->first_name = $input['first_name'];        
        $operator->last_name = $input['last_name']; 
        if (isset($input['second_last_name']))
            $operator->second_last_name = $input['second_last_name'];  
        $operator->nickname = $input['nickname'];    
        $operator->sex = $input['sex'];  
        if (isset($input['date_birth']))
            $operator->date_birth = $input['date_birth'];                                       
        $operator->operator_since = $input['operator_since'];
        if (isset($input['address']))
            $operator->address = $input['address']; 
        if (isset($input['neighborhood']))
            $operator->neighborhood = $input['neighborhood'];  
        $operator->town = $input['town'];          
        $operator->city = $input['city'];         
        if (isset($input['postal_code']))
            $operator->postal_code = $input['postal_code'];
        if (isset($input['home_phone']))
            $operator->home_phone = $input['home_phone']; 
        if (isset($input['cell_phone']))        
            $operator->cell_phone = $input['cell_phone'];   
        if (isset($input['email']))        
            $operator->email = $input['email']; 
        if (isset($input['company']))        
            $operator->company = $input['company'];
        if (isset($input['job']))        
            $operator->job = $input['job'];                              
        $operator->save();
                     
        return Response::json(
                array('succes'=>true)
        );
    }
    
    public function delete($operatorId)
    {
        $operator = Member::find($operatorId);
        if( count( $operator) > 0 ){
            $operator->delete();
            return Response::json(array(
                    'success' => true
            ));             
        }   
        return Response::json(array(
                'success' => false,
                'errors' => 'Socio no eliminado'
        ));           
    }
    
    public function get($operatorId)
    {
        $operator = Member::find($operatorId);
        if( count( $operator) > 0 ){
            
            return Response::json(array(
                    'success' => true,
                    'operator' => $operator
            ));             
        }   
        return Response::json(array(
                'success' => false,
                'errors' => 'Socio no encontrado'
        ));        
    }
    
    /*
     * Found operator for id or part of the full name
     */
    private function foundMember($ident)
    {
        $ident = "Herandez";
        $operator = Member::find($ident);
        if( $operator == null ){            
            $operator = Member::whereIn('first_name', [$ident])->first();
            if( $operator == null ){  
                $operator = Member::whereIn('last_name', [$ident])->first();
                if( $operator == null )
                    $operator = Member::whereIn('second_last_name', [$ident])->first();
            }
        }        
        return $operator;       
    }
    
    
}
