<?php
namespace App\Services;
use App\BusinessObjects\IProduct;
use App\Repositories\IProductRepository;
class ProductService implements IProductService
{
	private $_productRepository;
	public function __construct(IProductRepository $productRepository)
	{
		$this->_productRepository=$productRepository;
	}
	public function store(IProduct $product)
	{
      $this->_productRepository->store($product);
	}
	public function getAll()
	{
		return $this->_productRepository->getAll();
	}
	public function delete($id)
	{
		$this->_productRepository->delete($id);
	}
	public function update(IProduct $product,$id)
	{
      $this->_productRepository->update($product,$id);

	}
	public function get($id)
	{
		return $this->_productRepository->get($id);
	}
}