<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
	private $posts;
	private $categories;

	public function __construct()
	{
		$this->posts = [
			1 => [
				'title'  => 'Тайтл страницы 1',
				'author' => 'Автор страницы 1',
				'date'   => 'Дата публикации страницы 1',
				'teaser' => 'Короткое описание страницы 1',
				'text'   => 'Полный текст страницы 1',
				],
			2 => [
				'title'  => 'Тайтл страницы 2',
				'author' => 'Автор страницы 2',
				'date'   => 'Дата публикации страницы 2',
				'teaser' => 'Короткое описание страницы 2',
				'text'   => 'Полный текст страницы 2',
				],
			3 => [
				'title'  => 'Тайтл страницы 3',
				'author' => 'Автор страницы 3',
				'date'   => 'Дата публикации страницы 3',
				'teaser' => 'Короткое описание страницы 3',
				'text'   => 'Полный текст страницы 3',
				 ],
			4 => [
				'title'  => 'Тайтл страницы 4',
				'author' => 'Автор страницы 4',
				'date'   => 'Дата публикации страницы 4',
				'teaser' => 'Короткое описание страницы 4',
				'text'   => 'Полный текст страницы 4',
				],
			5 => [
				'title'  => 'Тайтл страницы 5',
				'author' => 'Автор страницы 5',
				'date'   => 'Дата публикации страницы 5',
				'teaser' => 'Короткое описание страницы 5',
				'text'   => 'Полный текст страницы 5',
			 	 ],
		];
			
	}
public function showProduct()
{
$this->categories = [
	1 => [
		'name' => 'Категория 1',
		'products' => [
			1 => [
				'name'    => 'Продукт 1',
				'cost'    => '300',
				'inStock' => true,
				'desc'    => 'Описание продукта 1'
			],
			2 => [
				'name'    => 'Продукт 2',
				'cost'    => '400',
				'inStock' => true,
				'desc'    => 'Описание продукта 2'
			],
			3 => [
				'name'    => 'Продукт 3',
				'cost'    => '500',
				'inStock' => false,
				'desc'    => 'Описание продукта 3'
			],
		],
	],
	2 => [
		'name' => 'Категория 2',
		'products' => [
			1 => [
				'name'    => 'Продукт 1',
				'cost'    => '700',
				'inStock' => true,
				'desc'    => 'Описание продукта 1'
			],
			2 => [
				'name'    => 'Продукт 2',
				'cost'    => '800',
				'inStock' => false,
				'desc'    => 'Описание продукта 2'
			],
			3 => [
				'name'    => 'Продукт 3',
				'cost'    => '900',
				'inStock' => false,
				'desc'    => 'Описание продукта 3'
			],
		],
	],
];

}
	public function show($id) 
	{ 

		$arUser = 
		[['id'=> 1,'name' => 'user1','age' => 21,],
		['id'=> 2,'name' => 'user2','age' => 22,],
		['id'=> 3,'name' => 'user3','age' => 23,],
	];
	$arUsee = [[1,2,3,4,5],[5,6,7,8,9,10],[11,12,13,14,15],[16,17,18,19,20],[21,22,23,24,25]];
	$arEmployees = 
	[['name' => 'user1','surname' => 'surname1','salary' => 1000,],
	['name' => 'user2','surname' => 'surname2','salary' => 2000,],
	['name' => 'user3','surname' => 'surname3','salary' => 3000,],
];
$links = [
	[
		'text' => 'text1',
		'href' => 'href1',
	],
	[
		'text' => 'text2',
		'href' => 'href2',
	],
	[	'text' => 'text3',
	'href' => 'href3',
],
];
$employees = [
	[
		'name' => 'user1',
		'surname' => 'surname1',
		'salary' => 1000,
	],
	[
		'name' => 'user2',
		'surname' => 'surname2',
		'salary' => 2000,
	],
	[
		'name' => 'user3',
		'surname' => 'surname3',
		'salary' => 3000,
	],
	[
		'name' => 'user4',
		'surname' => 'surname4',
		'salary' => 4000,
	],
	[
		'name' => 'user5',
		'surname' => 'surname5',
		'salary' => 5000,
	],
];

$this->showProduct();
return view('test.child', 
	[
		'var1' => 'zaadaadaadax', 
		'col' => 'color:red;', 
		'var2' => 'da',
		'var3' => 'gh',
		'text' => 'PEREHOD',
		'href' => 'tom.php', 
		'arr' => [1,2,3], 
		'name'=>'Alex',
		'surname'=>'Alexen', 
		'salary'=> 3333  ,
		'city'=>'Москва', 
		'country'=>'', 
		'location'=>'', 
		'str'=>'строка', 
		'age'=>'18',
		'num'=>'7', 
		'num1'=>'7',
		'month'=>'4', 
		'age1'=>'17',
		'arr1'=>[4,6,8,5], 
		'arr2'=> [2,3,8,9], 
		'data'=> 12225, 
		'users' =>$arUser,
		'usee' => $arUsee,
		'employees' => $arEmployees,
		'title' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
		'aside' => 'Бок. Сторона',
		'link' => $links,
		'emplo' => $employees,
		'posts' => $this->posts,
		'post' => $this->posts[$id],
		'products' => $this->categories,
		'product' => $this->categories[$id],
		
	]); 
} 
}
?>