<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Helpers\ApiResponse;


class SalesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // قم بجلب بيانات المبيعات من قاعدة البيانات
        $sales = Sale::all();

        // قم بتنسيق البيانات وتحضيرها للاستجابة
        $formattedSales = []; // قم بتنسيق البيانات هنا حسب احتياجاتك

        // استجابة بنجاح وبيانات المبيعات
        return ApiResponse::sendResponse(200, 'تم استرجاع بيانات المبيعات بنجاح', $formattedSales);
    }

}
