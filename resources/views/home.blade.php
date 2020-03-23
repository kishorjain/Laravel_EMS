@extends('layout.mainlayout')
@section('content')
<body>
   <div class="album text-muted">
     <div class="container">
       <div class="row">
   <h1>Employees available</h1>
      <table border = 1 width="100%" class="table-bordered">
         <tr>
            <th>EmployeeID</th>
            <th>EmployeeName</th>
            <th>MobileNo</th>
            <th>EmployeeJoining Date</th>
         </tr>
         @if(count($emp)>0)
         	@foreach ($emp as $empl)
         		<tr>
            		<td>{{ $empl->id }}</td>
            		<td>{{ $empl->employeeName }}</td>
            		<td>{{ $empl->mobile }}</td>
            		<td>{{ $empl->dateofjoin }}</td>
         		</tr>
         	@endforeach
         @else
         	<p>No Employee</p>
         @endif
         

      </table>
   </body>
@endsection
