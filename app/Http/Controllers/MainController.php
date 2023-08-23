<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {      
        $memoryUsage = memory_get_usage();
        if ($memoryUsage < 1024) {
            $memori = $memoryUsage . " Bytes";
        } elseif ($memoryUsage < 1048576) {
            $memori = round($memoryUsage/1024,2) . " Kb";
        } else {
            $memori = round($memoryUsage/1048576,2) . " Mb";
        }
        $data = Product::latest()->paginate(3);
        return view('content.home', [
            'data' => $data,
            'memory' => $memori,
        ]);
    }

    public function about()
    {
        return view('content.about');
    }

    public function product()
    {   
        $data = Product::latest()->get();
        return view('content.product', [
            'data' => $data,
        ]);
    }
}
