<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MembersController
 *
 * @author Arellano
 */
class MethodsConstantsController extends BaseController{
    //put your code here
    public function login()
    {
        /*$user = User::where('nick_name',Input::get('nick_name'))->first();
        if($user == null)
            return Redirect::to('login');
        else
        {
            if($user->password == Input::get('password')){
                if(BranchOffice::where('name', Input::get('name_client'))->count() > 0 ){
                    Auth::loginUsingId($user->id);
                    $turn = TurnUser::turnUserOpen($user->branch_office_id);
                    $turnNew = null;
                    if($turn == null)
                    {
                        $turnNew = $this->createTurnUser(Auth::User()->id,Auth::User()->branch_office_id);
                    }
                    return Redirect::to('quick_search')->with('turn',$turnNew);                    
                }else
                    return Redirect::to('login');
            }
            else return Redirect::to('login');
        }   */
        return Redirect::to('operators_list');
    }
    
    public function towns_list()
    {
        return Town::All();
    }
    
    public function states_list()
    {
        $states = array();
        $states['states'] = State::All();
        return $states;
    }    
    
}
