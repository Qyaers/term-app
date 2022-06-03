<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;
use App\Models\Term;

class ExampleController extends Controller
{
	public function index()
	{
		$data = Example::paginate(10);
		$terms = Term::all()->toArray();
		return view("admin.example",compact("data",'terms'));
	}

	public function edit(Request $request)
	{
		$data = $request->toArray();
		$update = [
			"text" => $data["text"],
			"term_id" => $data["term_id"][0],
		];
		$changeElem = Example::query()->where("id",$data["id"])->update($update);
		if ($changeElem || $changeLink) {
			$result = Example::query()->where("id",$data["id"])->get()->toArray();
			$result["term_id"] = Example::find($data["id"])->term()->get()->toArray();
		} else {
			$result = ["error"=>"Ошибка изменения базы."];
		}
		return \response(json_encode($result));
	}

	public function delete(Request $request)
	{
		$deleteId = $request->toArray();
		$deleted = $error = false;
		foreach ($deleteId as $id) {
			if(Example::find($id)->delete()) {
				$deleted = true;
			} else {
				$error = true;
				break;
			}
		}
		if ($deleted && !$error) {
			$res = [
				"message" => "Selected element was terminated",
				"status" => "ok"
			];
		} else {
			$res = [
				"message" => "Error in query.",
				"status" => "error"
			];
		}
		return \response(json_encode($res));
	}

	public function add(Request $request)
	{
		$data = $request->toArray();
		$newData = [
			"text" => $data["text"],
			"term_id" => $data["term_id"][0]
		];
		if (Example::query()->where("text","=",$newData["text"])->get()->count()) {
			return \response(json_encode([
				"status" => "error",
				"message" => "Такое описание уже существует"
			]));
		}
		if ($newElem = Example::firstOrCreate($newData)) {
			Example::find($newElem["id"]);
			return \response(json_encode($newElem));
		}
		else{}
	}
}
