<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>

<h2>{{ $title_custom }}</h2>


@include('item.nav');

<ul>
    <li>Items of student: {{$my_student->first_name}} {{$my_student->last_name}}</li>
    <li>dob: {{$my_student->dob}}</li>
</ul>

<table style="width:100%">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>

    @foreach($items as $row)
        <tr>
            <td>{{ $row->id  }}</td>
            <td>{{ $row->title  }}</td>
            <td>{{ $row->description  }}</td>
            <td>{{ $row->price  }}</td>
            <td>{{ $row->created_at  }}</td>
            <td>
                <a href="/view-item/{{$row->id}}">View</a>
                <a href="{{route('viewItemCustom',['id'=>$row->id])}}"> View recommended</a>
            </td>
        </tr>
    @endforeach


</table>

<p>To understand the example better, we have added borders to the table.</p>

        @if($flag)
            <h1>the value of the flag is true</h1>
        @else
        <h1>the value of the flag is false</h1>
        @endif

@php
    $i=0;
@endphp
        @while($i < 10)
            <li>{{$i}}</li>
            @php
                $i++;
            @endphp
        @endwhile


@for($i=0;$i<10;$i++)
    @if($i==5)
        @break;
    @endif

    @if($i==0)
        @continue;
    @endif

    <p>the value is: {{$i}}</p>


    @isset($total)
    <p>the total is: {{$total}}</p>
    @endisset

@endfor
</body>
</html>

