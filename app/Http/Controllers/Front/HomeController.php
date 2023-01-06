<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class   HomeController extends Controller
{
    public function index()
    {

        /*
            //    WITH RECURSIVE hierarchy AS (
            //             SELECT id, name, parent_id, name AS grandparent
            //             FROM categories
            //             WHERE parent_id is null
            //             UNION ALL
            //             SELECT c.id, c.name, c.parent_id, h.grandparent AS grandparent
            //             FROM categories c
            //             INNER JOIN hierarchy h ON h.id = c.parent_id
            //             )
            // SELECT grandparent, GROUP_CONCAT(
            // IF(parent_id is not null,
            // JSON_OBJECT('id', id, 'name', name, 'parent_id', parent_id), 		NULL)
            //             ) AS categories
            //             FROM hierarchy
            //             GROUP BY grandparent;
            //*************************************************************** /
            // SELECT id,name, parent_id, grandparent,
            //        JSON_ARRAYAGG(JSON_OBJECT('id', id, 'name', name, 'parent_id', parent_id)) AS categories
            // FROM hierarchy
            // GROUP BY grandparent;
            //*************************************************************** /
            // SELECT grandparent,
            // JSON_ARRAY(GROUP_CONCAT(
            //     IF(parent_id is not null,
            //        JSON_OBJECT('id', id, 'name', name, 'parent_id', parent_id), 		NULL)
            //   )) AS categories
            //         FROM hierarchy
            //         GROUP BY grandparent;
            //*************************************************************** /
            // $e = DB::select("

            // ");

        */

        $parents = DB::select("SELECT id, name FROM categories WHERE parent_id IS NULL");
        $tree_parents = [];
        foreach ($parents as $key => $value) {
            $children = DB::select("
                WITH RECURSIVE hierarchy (id, name, parent_id) AS (
                    SELECT id, name, parent_id
                    FROM categories
                    WHERE parent_id = {$value->id}
                    UNION ALL
                    SELECT c.id, c.name, c.parent_id
                    FROM categories c
                    INNER JOIN hierarchy h ON h.id = c.parent_id
                )
                SELECT * FROM hierarchy;
            ");
            $tree_parents[] = [
                'id' => $value->id,
                'name' => $value->name,
                'children' => $children
            ];
        }
        $latest_posts= Post::latest()->limit(10)->get();
        // dd(($latest_posts));


        return view('front.home', compact('tree_parents','latest_posts'));
    }
}
