<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;

class TermController extends Controller
{
	public function index()
	{
		$data = Term::paginate(10); 
		return view("admin.term",compact("data"));
	}

	public function edit(Request $request)
	{
		$data = $request->toArray();
		$update = [
			"nameTerm" => $data["nameTerm"],
			"discription" => $data["discription"],
		];
		$changeElem = Term::query()->where("id",$data["id"])->update($update);
		if ($changeElem || $changeLink) {
			$result = Term::query()->where("id",$data["id"])->get()->toArray();
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
			if(Term::find($id)->delete()) {
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
			"nameTerm" => $data["nameTerm"],
			"discription" => $data["discription"],
		];
		if (Term::query()->where("nameTerm","=",$newData["nameTerm"])->get()->count()) {
			return \response(json_encode([
				"status" => "error",
				"message" => "Такой термин уже существует"
			]));
		}
		if ($newElem = Term::firstOrCreate($newData)) {
			Term::find($newElem["id"]);
			return \response(json_encode($newElem));
		}
		else{}
	}
}
