<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function index2()
    {
        return view("student.index");
    }
    public function listItems(){
        // select * from items;
        $list= Item::all();
        $total = Item::sum('price');
        $singleRow = Student::findOrFail(1);

        // first method to send data to view
//        return view('item.index')
//            ->with('items',$list)
//            ->with('my_student',$singleRow)
//            ->with('flag',false)
//            ->with('total',$total)
//            ->with('title_custom','List Items');

        // second method to send data to view
        return view('item.index',
                ['items'=>$list,
                'total'=>$total,
                'my_student'=>$singleRow,
                'flag'=>true,
                "title_custom"=>"List Items",
                ]);
    }

    public function ViewItem($id){
        // third method
        $item = Item::findOrFail($id);
        $student = Student::findOrFail(1);
        $title = "Item Details";
        $this->prepareData();
        return view('item.view',compact('item','student','title'));
    }

    public function prepareData(){
        $obj = "row 1 from prepare data";
        $obj2 = "row 2 from prepare data";
        View::share(["obj1_custom"=>$obj,"obj2_custom"=>$obj2]);
    }

}
