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
        $array = User::where('type',1)->get();
        return View::make('operators.operators_list',['operators'=>$array]);         
    }         
    
    public function store($operatorId)
    {
        $input = Input::All();        
        $operator = null;                 
        
        if($operatorId == 0)
            $operator = new User();    
        else{
            $operator = User::find($operatorId); 
            if($operator == null){
                return Response::json(
                        array('success'=>false,'errors'=>'operator not found')
                );                
            }                
        }        
        
        $operator->first_name = $input['first_name'];                                   
        $operator->last_name = $input['last_name'];                 
        if (isset($input['mother_maiden_name']))
            $operator->mother_maiden_name = $input['mother_maiden_name'];                  
        $operator->username = $input['username'];                 
        
        $operator->password = $input['password'];      
        $operator->type = 1;// 1 = Ooperator type   
        $operator->workshop_id = 1;                  
        
        try {
            $operator->town_id = $input['town'];//$input['town'];   
        } catch (Exception $e) {}        
        
        $operator->sex = $input['sex'];  
        if (isset($input['birthdate']))
            $operator->birthdate = $input['birthdate'];//'2015-08-22 13:10:35';//          
        if (isset($input['address']))
            $operator->address = $input['address']; 
        if (isset($input['neighborhood']))
            $operator->neighborhood = $input['neighborhood'];         
        $operator->city = $input['city'];         
        if (isset($input['postal_code']))
            $operator->postal_code = $input['postal_code'];
        if (isset($input['home_phone']))
            $operator->home_phone = $input['home_phone']; 
        if (isset($input['cell_phone']))        
            $operator->cell_phone = $input['cell_phone'];   
        if (isset($input['email']))        
            $operator->email = $input['email'];    
        
        $operator->save();
                                     
        return Response::json(
                array('success'=>true)
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
        $operator = User::find($operatorId);
        
        try {
            $operator->town_id = State::find($operator->town_id)->state;//$input['town'];   
        } catch (Exception $e) {}         
                
        if( count( $operator) > 0 ){
            
            return Response::json(array(
                    'success' => true,
                    'operator' => $operator
            ));             
        }   
        return Response::json(array(
                'success' => false,
                'errors' => 'Opera no encontrado'
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
