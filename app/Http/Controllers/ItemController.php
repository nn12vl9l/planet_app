<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function index()
    {
        // モデル名::テーブル全件取得
        $items = Item::all();

        // Itemディレクトリの中のindexページを指定しitemsの連想配列を代入
        return view('items.index', compact('items'));
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', compact('item'));
    }

    public function create ()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request)
    {
        $item = new Item;

        $item->name = $request->name;
        $item->englishname = $request->englishname;
        $item->radius = $request->radius;
        $item->weight = $request->weight;

        $item->save();

        return redirect('/items');
    }

    public function edit($id)
    {
        $item = Item::find($id);

        return view('items.edit', compact('item'));
    }

    public function update(ItemRequest $request, $id)
    {
        $item = Item::find($id);

        $item->name = $request->name;
        $item->englishname = $request->englishname;
        $item->radius = $request->radius;
        $item->weight = $request->weight;

        $item->save();

        return redirect('/items');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/items');
    }
}
