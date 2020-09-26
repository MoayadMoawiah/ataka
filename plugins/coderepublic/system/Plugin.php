<?php namespace Coderepublic\System;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function setCustomer()
    {
    	$this->validate([
    		'name'=>'Moayad',
    		'email'=>'Moayad@gmail.com',
    		'address'=>'Khartoum',
    		'phone'=>'0987654321' 
    		'balance'=>'100' 
    		'notes'=>'New Customer' 
    	]);
    	
    	// Create Customer
    	$customer = new Customer ;
    	
    	$customer->name = $request->input('name');
    	$customer->email = $request->input('email');
    	$customer->address = $request->input('address');
    	$customer->phone = $request->input('phone');
    	$customer->balance = $request->input('balance');
    	$customer->notes = $request->input('notes');
    	$customer->save();



    	return[
    		'name'=>'Moayad',
    		'email'=>'Moayad@gmail.com',
    		'address'=>'Khartoum',
    		'phone'=>'0987654321'
    	];
    }
}
