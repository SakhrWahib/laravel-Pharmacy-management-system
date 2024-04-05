<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Helpers\ApiResponse;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع جميع المنتجات
        $products = Product::all();

        // التحقق مما إذا كانت هناك منتجات متاحة
        if ($products->isNotEmpty()) {
            // إرسال استجابة بجميع المنتجات
            return ApiResponse::sendResponse(200, 'تم استرجاع المنتجات بنجاح', $products);
        }

        // إرسال استجابة بأن المنتجات فارغة
        return ApiResponse::sendResponse(200, 'لا توجد منتجات', []);
    }
}
