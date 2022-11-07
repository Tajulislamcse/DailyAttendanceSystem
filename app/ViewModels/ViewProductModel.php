<?php
namespace App\ViewModels;
use App\Services\IProductService;
class ViewProductModel implements IViewProductModel
{
	private $_productService;
	public function __construct(IProductService $productService)
	{
		$this->_productService=$productService;
	}
	public function getAll()
	{
        return $this->_productService->getAll();
	}
	public function delete($id)
	{
		$this->_productService->delete($id);
	}
	public function get($id)
	{
		return $this->_productService->get($id);
	}

}