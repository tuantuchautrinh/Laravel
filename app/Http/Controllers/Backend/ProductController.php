<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
/**
 * Symfony\Component\Debug\Exception\FatalThrowableError
 * Class 'App\Http\Controllers\Backend\Product' not found
 *
 * use App\Models\Product;
 *
 * Stack trace
 *
 * App\Http\Controllers\Backend\ProductController::store:100
 * app/Http/Controllers/Backend/ProductController.php:100
 */

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * khi return view sẽ dẫn đến folder LaravelProject/public
         */
        // return view('backend.master');

        return view('backend.modules.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        echo 'Dữ liệu được thêm';
        // Phải đóng tất cả dd($request) để code chạy xuống dưới

        /**
         * Hiển thị tất cả dữ liệu được điền vào
         */
        // dd($request->all());

        /**
         * Hiển thị tất cả dữ liệu ngoại trừ "_token" và "add"
         */
        // dd($request->except('_token', 'add'));

        /**
         * Lấy một số trường nhất định
         */
        // dd($request->only('_token','add'));

        /**
         * Chỉ lấy trường name ra
         */
        // dd($request->name)

        // Để insert dữ liệu ta có 2 cách như bên dưới

            /**
             * Cách 1
             */
            // #Eloquent ORM - Getting Started #Inserting & Updating Models #Inserts

            // // Validate the request...

            // $flight = new Flight;

            // $flight->name = $request->name;

            // $flight->save();

            /**
             * Cách 2 (nhanh hơn cách 1)
            */
            // #Eloquent ORM - Getting Started #Inserting & Updating Models #Mass Assignment
            // Example: $flight = App\Flight::create(['name' => 'Flight 10']);
            // (LaravelProject/app/Models/tên Model)::create(rồi truyền dữ liệu vô)
            $data = $request->except('_token', 'add');
            Product::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.modules.product.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
