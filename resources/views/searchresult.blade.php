@extends('layout.mainlayout')
@section('content')
<body>
      <form action="{{url('main/search')}}" method="get">
          {{ csrf_field() }}
          <input  name="search_text" type="text"/>
          <input type="submit"/>
      </form>
      @if(isset($data))
      <table border = 1 id="example" class="display" width="100%" >
         <tr>
            
            <th>EmployeeName</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>DepartmentName</th>
            <th>DateOfJoin</th>
            <th>Salary</th>
         </tr>
         @if(count($data)>0)
         	@foreach ($data as $val)
         		<tr>
            		
            		<td>{{ $val->employeeName }}</td>
                  <td>{{ $val->email }}</td>
                  <td>{{ $val->mobile }}</td>
                  <td>{{ $val->departmentName }}</td>
                  <td>{{ $val->dateofjoin }}</td>
                  <td>{{ $val->salary }}</td>
            		
         		</tr>
         	@endforeach
         @else
         	<p>No Employee</p>
         @endif
         

      </table>
      {{!!$data->render() !!}}
      @else
      	<div class="alert alert-danger">
    		          {{ $message }}
    		      </div>
      @endif
   </body>
@endsection
<br><br>