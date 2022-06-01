<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
   function Home(){
       return view('HomePage');
   }

   function Index(){
      return view('pages.index');
  }
   function MedicineDonate(){
      return view('pages.medicineDonate');
  }
  function Deshboard(){
   return view('pages.dashboard');
  }

//   function MedicineDonate(){
//    return view('pages.medicineDonate');
//   }

   function Donate(){
      return view('DonatePage');
   }

}
