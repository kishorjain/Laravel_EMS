@extends('layout.mainlayout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
         <h1>Employee Allocation</h1>
         {{ Form::open(array('url' => 'main/assign','method' => 'post')) }}
    		<select name="employeeName[]" id="employeeName" multiple="multiple" class="form-control">
    		   <option value="0" diabled="true" selected="true">-Select-</option>
    		   @foreach($employeeName as $employee)

    		       <option value="{{$employee->id}}">{{$employee->employeeName}}</option>
    		   @endforeach

    		 </select>

    		 <select name="departmentName" id="departmentName" class="form-control">
    		    <option value="0" diabled="true" selected="true">-Select-</option>
    		    @foreach($departmentName as $department)
    		       <option value="{{$department->id}}">{{$department->departmentName}}</option>
    		    @endforeach
    		  </select>

    		  <input type="submit" name="submit" value="submit">

    		  <div class="alert alert-success">
    		          {{ session()->get('message') }}
    		      </div>

		 {{ Form::close() }}



         @endsection
<b></b>