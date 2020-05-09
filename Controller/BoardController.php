<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
	public function boardindex(Request $request)
	{
		$items = Board::all();
		return view('ookawa1.boardindex',['items'=>$items]);
	}

	public function boardadd(Request $request)
	{
		return view('ookawa1.boardadd');
	}

	public function  boardcreate(Request $request)
	{
		$this->validate($request, Board::$rules);
		$board = new Board;
		$form = $request->all();
		unset($form['_token']);
		$board->fill($form)->save();
		return redirect('/ookawa1/boardadd');
	}
}
