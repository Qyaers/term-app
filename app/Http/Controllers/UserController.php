<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
public function index()
{
	$dat = User::paginate(10);
	return view("admin.user");
}

public function edit(Request $request)
{
		$data = $request->toArray();
		$update = [
			'name' => $data["name"],
			'email' => $data["email"][0],
			"password" => $data["password"][0]
		];
		$changeElem = User::query()->where("id",$data["id"])->update($update);
		if ($changeElem) {
			$result = User::query()->where("id",$data["id"])->get()->toArray();
			$result["prem_id"] = User::find($data["id"])->prem()->get()->toArray();
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
			if(User::find($id)->delete()) {
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
			'firstName' => $data["firstName"],
			'name' => $data["name"],
			'secondName' => $data["secondName"],
			'role' => $data["role"][0],
			"group_id" => $data["group"][0]
		];
		if ($newElem = Student::firstOrCreate($newData)) {
//            Student::find($newElem["id"])->group()->sync($data["group"]);
			return \response(json_encode($newElem));
		}
		else{

		}
}
}
