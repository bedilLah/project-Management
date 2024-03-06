<!DOCTYPE html>
<html>
<head>
    <style>
        #project_definition {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #project_definition td, #project_definition th {
            border: 1px solid #ddd;
<<<<<<< HEAD
            padding: 6px;
        }

        #project_definition tr:nth-child(even) {
            background-color: #D37676;
        }

        #project_definition tr:hover {
            background-color: #D37676;
=======
            padding: 8px;
        }

        #project_definition tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #project_definition tr:hover {
            background-color: #ddd;
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
        }

        #project_definition th {
            padding-top: 0px;
            padding-bottom: 0px;
<<<<<<< HEAD
            text-align: center;
            background-color: #B80000;
=======
            text-align: left;
            background-color: #04AA6D;
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
            color: white;
        }
    </style>
</head>
<body>

<center><h1>Data Project</h1></center>

<table id="project_definition">
    <thead>
        <tr>
<<<<<<< HEAD
            <th><small>No</small></th>
            <th><small>Name Project</small></th>
            <th><small>Code Project</small></th>
            <th><small>Contract Value</small></th>
            <th><small>Business Line</small></th>
            <th><small>Date</small></th>
            <th><small>Status</small></th>
            <th><small>Source of Funds</small></th>
            <th><small>Business Schema</small></th>
            <th><small>Contract Duration</small></th>
            <th><small>Warranty Period</small></th>
=======
          <th>No</th>
          <th>Name Project</th>
          <th>Code Project</th>
          <th>Contract Value</th>
          <th>Business Line</th>
          <th>Date</th>
          <th>Status</th>
          <th>Source of Funds</th>
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
        </tr>
        @php 
        $no=1;
        @endphp
    </thead>
    <tbody>
        @foreach ($projectDefinition as $u)
            <tr>
            <td>{{ $no++ }}</td>
<<<<<<< HEAD
            <td><small>{{$u->name_project}}</small></td>
            <td><small>{{$u->code_project}}</small></td>
            <td><small>{{$u->contract_value}}</small></td>
            <td><small>{{$u->bussines_line}}</small></td>
            <td><small>{{$u->date}}</small></td>
            <td><small>{{$u->status}}</small></td>
            <td><small>{{$u->source_ofFunds}}</small></td>
            <td><small>{{$u->schema_bussines}}</small></td>
            <td><small>{{$u->contract_duration}}</small></td>
            <td><small>{{$u->warranty_period}}</small></td>
=======
                <td>{{ $u->name_project }}</td>
                <td>{{ $u->code_project }}</td>
                <td>{{ $u->contract_value }}</td>
                <td>{{ $u->bussines_line }}</td>
                <td>{{ $u->date }}</td>
                <td>{{ $u->status }}</td>
                <td>{{ $u->source_ofFunds }}</td>
>>>>>>> 1992e0e52e48761aef8d4c681f20198965ac2e69
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
