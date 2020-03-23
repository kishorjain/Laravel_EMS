<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees as employees;
use App\department as departments;
class EmployeesController extends Controller
{
    public function getEmployees(){
    	$employees=employees::all();
    	return view('home',['emp'=>$employees]);
    }
    public function getEmployeeName(){
    	$employeesName=employees::all('employeeName');
    	return view('allocation',['employeeName'=>$employeesName]);
    }
    public function getEmployeeDepartmentName(){
    	$employeesName=employees::all('id','employeeName');
    	$departmentName=departments::all('id','departmentName');
    	//return $employeesName;
    	return view('allocation',['employeeName'=>$employeesName,'departmentName'=>$departmentName]);
    }
    public function assign(Request $request){
    	if ($request->isMethod('post')) {
    		$department=$request->departmentName;
    		$employee=$request->employeeName;
    		print_r($employee);
		}


    }
}
