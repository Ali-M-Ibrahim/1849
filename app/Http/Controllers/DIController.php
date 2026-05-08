<?php

namespace App\Http\Controllers;

use App\Services\Service;
use Illuminate\Http\Request;

class DIController extends Controller
{

    private $Controllerservice;
    public function __construct(Service $service){
        $this->Controllerservice= $service;
    }

    public function index(){
        $service = new Service();
        $service->helper1("Hello class from index function");
        return "ok";
    }

    public function index2(Service  $service){
        $service->helper1("Hello class from index2 function");
        return "ok";
    }

    public function index3(Service $service){
        $service->helper1("Hello class from index3 function");
        return "ok";
    }

    public function index4(){
        $this->Controllerservice->helper1("Hello class from index4 function");
        return "ok";
    }

    public function index5(){
        $this->Controllerservice->helper1("Hello class from index4 function");
        return "ok";
    }


}
