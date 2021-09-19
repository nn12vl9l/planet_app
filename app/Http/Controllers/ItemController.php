<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        // モデル名::テーブル全件取得
        $items = Item::all();
        $data = ['items' => $items];
        // Itemディレクトリの中のindexページを指定しitemsの連想配列を代入
        return view('items.index', $data);
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', ['item' => $item]);
    }
}
