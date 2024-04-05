<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; // تم تصحيح اسم النموذج إلى Category
use App\Helpers\ApiResponse;
use App\Http\Resources\CategoryResource; // تم تصحيح الاستدعاء إلى CategoryResource

class CategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $categories = Category::all(); // تم تصحيح اسم النموذج إلى Category
        if (count($categories) > 0) {
            return ApiResponse::sendResponse(200, 'Categories Retrieved Successfully', CategoryResource::collection($categories)); // تم تصحيح الرسالة إلى 'Categories Retrieved Successfully'
        }
        return ApiResponse::sendResponse(200, 'Categories is empty', null); // تم تصحيح الرسالة إلى 'Categories is empty'
    }
}
