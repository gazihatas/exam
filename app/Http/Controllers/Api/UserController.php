<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mockery\Exception;

class UserController extends Controller
{

    public function index()
    {
        try      {

        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }


    public function store(Request $request)
    {
        try {

        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }


    public function show(string $id)
    {
        try {

        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }


    public function update(Request $request, string $id)
    {
        try {

        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }


    public function destroy(string $id)
    {
        try {

        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }
}
