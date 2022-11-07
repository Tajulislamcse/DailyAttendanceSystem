<?php
namespace App\BusinessObjects;
interface IProduct
{   
	public function setId($id);
	public function getId();
	public function setName($name);
	public function getName();
	public function setPrice($price);
	public function getPrice();
}