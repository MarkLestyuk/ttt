<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
	use Illuminate\Http\Request; // подключаем класс Request

	class tom extends Controller
	{
		public function form(Request $request)
		{
			$request->session()->put('arr', ['a', 'b', 'c']);
			return view('test.form', ['arr' => $request]);
		} 
		public function show(Request $request) 
		{
			$request->session()->push('arr', ['d']);
			return view('test.update', ['arr' => $request]);
		} 
	

	}





/*






namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	class tom extends Controller
	{
		public function form()
		{
			return view('test.form');
		}
		
		public function result(Request $request)
		{
				$url = $request->fullUrl();
				return view('test.update', ['param' => $url]);
		}
	}
*/
/*
class tom extends Controller
{
	public function form($id)
		{
			return view('test.form',["id"=>$id]);
		}
  /**
  
   * @param  Request  $request
   
   * @param  string  $id
   
   * @return Response
   */
  /*public function update(Request $request, $id)
  {
    $result=$request->all();

	return view('test.update', ["name"=>$result, "id"=>$id]);
  }
}*/
/*
namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	class tom extends Controller
	{
		public function form()
		{
			return view('test.form');
		}
		
		public function result(Request $request)
		{
			if ($request->isMethod('get')) 
			{
				$name = $request->input('user.name');
				$name = $request->input('user.surname');
				return view('test.result', ['name' => $name]);
			}
		}

	}
*/
/*
namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class tom extends Controller
	{
		public function form(Request $request)
		{
			// Выполнится при первом заходе:
			if ($request->isMethod('get')) {
				return view('test.form'); // представление с формой
			}
			
			// Выполнится после отправки формы:
			if ($request->isMethod('post')) {
				$text = $request->input('text');
				return view('test.result', ['text', $text]); // представление с результатом
			}
		}
	}
		public function form()
		{
			return view('test.form');
		}
		
		public function result(Request $request)
		{
			if ($request->isMethod('get')) 
			{
			$data = $request->only('name','age');
				return view('test.result', ['data' => $data]);
			}
		}

	}
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tom extends Controller
{
	public function form()
	{
		return view('test.form');
	}

	public function result(Request $request)
	{

		if ($request->isMethod('get')) {
			$text = $request->input('text');
			return view('test.result' ,['text' => $text]);
		}
	}
}

	class tom extends Controller
	{
		public function form()
		{
			return view('test.form');
		}
		
		public function result(Request $request)
		{
			$text = $request->input('text');
			$text1 = $request->input('text1');
			$text2 = $request->input('text2');
			return view('test.result', ['text' => $text,
										'text1' => $text1,
										'text2' => $text2

		]);
		}
	}
*/
	/*
	class tom extends Controller
	{
		public function form(Request $request)
		{
			// Если форма была отправлена и есть поле text:
			if ($request->has('num')) 
			{
				$text = $request->input('num') * $request->input('num');
				return view('test.form' , ['text' => $text]);
			}
			return view('test.form', ['text' => '']);
			
		}
	}
	*/
	?>

