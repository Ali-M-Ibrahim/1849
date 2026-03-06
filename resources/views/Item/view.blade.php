<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>

<h1>{{$title}}</h1>

<ul>
    <li>Item id: {{$item->id}}</li>
    <li>Item title: {{$item->title}}</li>
    <li>Item description: {{$item->description}}</li>
    <li>Item price: {{$item->price}}</li>
    <li>Item created at: {{$item->created_at}}</li>
    <li>Item updated at: {{$item->updated_at}}</li>
</ul>

{{$obj1_custom}}

@isset($obj_custom)
    <h1>obj is: {{$obj_custom}}</h1>
@endisset


@isset($obj2_custom)
    <h1>obj is: {{$obj2_custom}}</h1>
@endisset


</body>
</html>

