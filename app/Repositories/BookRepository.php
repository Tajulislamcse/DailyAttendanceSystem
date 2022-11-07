<?php
namespace App\Repositories;
class BookRepository extends BaseRepository
{  
	public function __construct()
	{
		$bookModel=resolve('App\Models\Book');
		parent::setModel($bookModel);


	}
	public function store($data)
	{
      //$this->book->create($data);
		parent::store($data);
	}

}