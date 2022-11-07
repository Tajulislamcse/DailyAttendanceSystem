<?php
namespace App\ViewModels;
use Illuminate\Http\Request;
use App\Factories\ProductFactory;
use App\Services\IProductService;
class StoreProductModel implements IStoreProductModel
{
    public $name;
    public $price;
    private $_productService;
    public function __construct(IProductService $productService,Request $request)
    {
    	$this->_productService=$productService;
    	$this->loadFields($request);
    }

	public function store()
	{
		$object=ProductFactory::setProperty($this);
		$this->_productService->store($object);
	}
	public function update($id)
	{
		$object=ProductFactory::setProperty($this);
		$this->_productService->update($object,$id);
	}
	public function loadFields(Request $request)
	{
		$this->name=$request->name;
		$this->price=$request->price;
	}
	
	
}