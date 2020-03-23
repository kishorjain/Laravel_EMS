@extends('layout.mainlayout')
@section('content')
<body>
   <div class="album text-muted">
     <div class="container">
       <div class="row">
       	
   		<form action="{{url('main/MonthlyReport')}}" method="get">
          {{ csrf_field() }}
          {!! Form::selectMonth('month',null,['class' => 'form-control']) !!}
          <input type="submit"/>
      </form>
      @if(!isset($monthName))
   		<h1>Monthly Report</h1>
   		@else
   		<h1>{{$monthName}} Month Report</h1>
   		@endif
   		<table border = 1 width="100%" class="table-bordered">
   			
         <tr>
            <th>EmployeeName</th>
            <th>WorkedDepartment</th>
            <th>Salary</th>
            </tr>
         @if(isset($data))
         	@foreach ($data as $val)
         		
         		<tr>
            		
            		<td>{{ $val->employeeName }}</td>
                  	<td>{{$val->department}}       	
                  </td>		
                  <td>{{ $val->salary }}</td>
                  	
                  	
            		
         		</tr>
         	@endforeach
         	
         @else
         	<div class="alert alert-danger">
    			 {{ $message }}
    		</div>
         @endif
         

      </table>
   </body>
@endsection