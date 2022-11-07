<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
class TestService
{
	private $_response;
	public function __construct(ProductRequest $request)
	{
		if (isset($request->validator) && $request->validator->fails()) 
		{
			$this->_response=$request->validator->messages();
		}
		else
		{
      $this->_response=$request->validated();

		}
	}
	public function validatedRequest()
	{
		return $this->_response;
	}
        // else
        // {
        //     $validatedData=$request->validated();
        //     if($validatedData['price']==null)

        //     return response()->json(['data'=>$validatedData]);
        // }
	

}