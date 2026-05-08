<?php

namespace App\Services;


class Service
{
   public function helper1($content)
   {
       error_log("this is my description from helper "  . $content );

   }
}
