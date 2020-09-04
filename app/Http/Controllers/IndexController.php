<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

use App\Employee;
use App\Page;
use App\Portfolio;
use App\Service;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        $pages = Page::all();
        $portfolios = Portfolio::get(['name', 'filter', 'images']);
        $services = Service::all();
        $employees = Employee::all();

        $menu = $data = [];
        foreach ($pages as $page) {
            $item = ['title' => $page->name, 'alias' => $page->alias];
            array_push($menu, $item);
        }

        array_push($menu, ['title' => 'Services', 'alias' => 'service']);
        array_push($menu, ['title' => 'Portfolio', 'alias' => 'Portfolio']);
        array_push($menu, ['title' => 'Team', 'alias' => 'team']);
        array_push($menu, ['title' => 'Contact', 'alias' => 'contact']);

        $data = [
            'menu' => $menu,
            'pages' => $pages
        ];

        return view('index', $data);
    }
}
