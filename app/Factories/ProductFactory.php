<?php
namespace App\Factories;
class ProductFactory
{
	public static function setProperty($product)
	{
		$productObject=resolve('App\BusinessObjects\IProduct');
		$productObject->setName($product->name);
		$productObject->setPrice($product->price);
		return $productObject;
	}
	public static function convertIntoObjects($products)
	{
		$productObjects=[];
		foreach($products as $product)
		{
		  $productObject=resolve('App\BusinessObjects\IProduct');
		  $productObject->setId($product->id);
		  $productObject->setName($product->name);
		  $productObject->setPrice($product->price);
		  $productObjects[]=$productObject;
        }
        return $productObjects;
	}
	public static function convertIntoObject($productArr)
	{
		$productObject=resolve('App\BusinessObjects\IProduct');
		$productObject->setId($productArr['id']);
		$productObject->setName($productArr['name']);
		$productObject->setPrice($productArr['price']);
		return $productObject;


	}
}