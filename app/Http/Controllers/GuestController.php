<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class GuestController extends Controller
{
    public $Menu;
    public $Title;
    public $Content;


    public function __construct()
    {
        $this->Menu = $this->getMenu();
        $this->Title = env('APP_TITLE','Koperasi');
    }

    private function getMenu($parentId = null){
        $menuItems = Menu::where('isPublic',1)->orderBy('sort_order','asc')->get();
        return $this->buildMenuTree($menuItems);
    }


    public function buildMenuTree($menus, $parentId = null)
    {
        $result = [];

        foreach ($menus as $menu) {
            if ($menu->menu_id == $parentId) {
                $children = $this->buildMenuTree($menus, $menu->id);
                $item = [
                    'id' => $menu->id,
                    'label' => $menu->label,
                    'mod_name' => $menu->mod_name,
                    'icon' => $menu->icon,
                ];
                if (!empty($children)) {
                    $item['children'] = $children;
                }
                $result[] = $item;
            }
        }

        return $result;
    }



}
