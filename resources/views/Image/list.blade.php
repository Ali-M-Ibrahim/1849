<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>List Images   <a href="{{Route('uploadImage')}}">Create</a> </h2>

<table>
    <tr>
        <th>Name</th>
        <th>Image</th>
    </tr>

    @foreach($images as $row)
        <tr>
            <td>{{$row->name}}</td>
            <td><img width="200" src="{{asset($row->path)}}" /></td>
        </tr>
    @endforeach

</table>

</body>
</html>

