<?php
namespace App\Services;
class BookService
{
	public function testService($data)
	{
		$bookRepostory=resolve('App\Repositories\BookRepository');
		$bookRepostory->store($data);
	}
}