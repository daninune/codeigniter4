<?php

namespace App\Controllers;

//
class Home extends BaseController
{
    public function index(): string
    {
    
        return view('welcome_message');
    }
    
    public function dani(): string {
        
		
        return view("dani");
    }
    
    /*
id int auto_increment primary key,
nombre varchar(100),
ap1 varchar(100),
ap2 varchar(100))

     * 
     *      */
    function register() {
        helper(['form', 'url']);
     $employeemodel = new \App\Models\EmployeeModel();
                $employeemodel->save([
                    'nombre' => $this->request->getVar('name'),
                    'ap1'=> $this->request->getVar('ap1'),
                    'ap2' => $this->request->getVar('ap2')
                ]);
                $employeemodel->save($employeemodel);
     echo var_dump($data);
    }
}
