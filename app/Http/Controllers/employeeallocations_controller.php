<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employeeallocations as allocation;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;

class employeeallocations_controller extends Controller
{
    public function assign(Request $request){
    	if ($request->isMethod('post')) {
    		$department=$request->departmentName;
    		$employee=$request->employeeName;
    		//$allocate=new allocation();

    		foreach ($employee as  $value) {
    			
    			$insert[]=array('employeeId'=>$value,'departmentId'=>$department);
    			
    			
    		}
    		
    		allocation::insert($insert);

    		return redirect()->back()->with('message','Employee allocated successfully');
    		
		}else{
			return redirect()->back()->with('message','Employee allocated failed');

		}
    }
    public function getAllocationData(){
    	//DB::enableQueryLog(); // Enable query log
    	$data=DB::table('employeeallocations as ea')
    		->join('employees as e' ,'e.id', '=','ea.employeeId')
    		->join ('department as d','d.id','=','ea.departmentId')
    		->select('employeeName','email','mobile','dateofjoin','departmentName','salary')
    		->paginate(10);
    	
    	
//dd(DB::getQueryLog()); // Show results of log

          return view('allocationReport',['data'=>$data]);
    }
    public function search(){
    	$search=request('search_text');
    	$data=DB::table('employeeallocations as ea')
    		->where('employeeName','LIKE','%'.$search.'%')
    		->join('employees as e' ,'e.id', '=','ea.employeeId')
    		->join ('department as d','d.id','=','ea.departmentId')
    		->select('employeeName','email','mobile','dateofjoin','departmentName','salary')
    		->paginate(10)
    		->setPath('');

    	$data->appends(array('search_text'=>INPUT::get('search_text'),));
    	if(count($data)>0){
    		return view('searchresult',['data'=>$data]);
        
    	}

    	return view('searchresult',['message'=>'Data Not Found']);
        
 
    }
    public function monthlyReport(){
    	$month=request('month');
    	$year=date('Y');
    	if(!isset($month)){
    		$month=date('m');

    		 

    	}
    	//DB::enableQueryLog(); 
    	$data=DB::table('employeeallocations as ea')
    		->whereMonth('ea.created_at','=',$month)
    		->whereYear('ea.created_at','=',$year)
    		->join('employees as e' ,'e.id', '=','ea.employeeId')
    		->join ('department as d','d.id','=','ea.departmentId')
    		->groupBy('ea.employeeId','e.employeeName')
    		->select(DB::raw('ea.employeeId,employeeName as employeeName,GROUP_CONCAT(departmentName) as department,SUM(salary) as salary'))
    		->paginate(5);
    	//dd(DB::getQueryLog());
    	if(count($data)>0){	
    		$month_name = date("F", mktime(0, 0, 0, $month, 10)).$year;
    		return view('monthly',['data'=>$data,'monthName'=>$month_name]);
    	}
    	return view('monthly',['message'=>'Data Not Found']);
    }

}
