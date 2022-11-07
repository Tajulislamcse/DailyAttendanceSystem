<?php
namespace App\Repositories;
use App\Factories\ProductFactory;
class ProductRepository extends BaseRepository implements IProductRepository
{
	public function __construct()
	{
		$productModel=resolve('App\Models\Product');
		parent::setModel($productModel);
	}
	public function store($product)
	{
		$productArray=[
			'name'=>$product->getName(),
			'price'=>$product->getPrice()
		];
		parent::store($productArray);
    }
    public function getAll()
    {
    	$productArrays=parent::getAll();
    	$productObjects=ProductFactory::convertIntoObjects($productArrays);
    	return $productObjects;


    }
    public function delete($id)
    {
    	parent::delete($id);
    }
    public function get($id)
    {
    	$productArray=parent::get($id);
    	$productObject=ProductFactory::convertIntoObject($productArray);
    	return $productObject;
    }
    public function update($product,$id)
	{
		$productArray=[
			'name'=>$product->getName(),
			'price'=>$product->getPrice()
		];
		parent::update($productArray,$id);
    }
}