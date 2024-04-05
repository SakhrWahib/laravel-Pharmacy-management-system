<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase; // استيراد النموذج Purchase
use App\Helpers\ApiResponse; // استيراد مساعد ApiResponse

class PurchasesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // استرجاع جميع عمليات الشراء من قاعدة البيانات
        $purchases = Purchase::all();

        // تحضير بيانات الشراء للإرجاع
        $formattedPurchases = $purchases->map(function ($purchase) {
            return [
                'id' => $purchase->id,
                'product_id' => $purchase->product_id,
                'quantity' => $purchase->quantity,
                'total_price' => $purchase->total_price,
                // يمكنك تنسيق المزيد من البيانات حسب احتياجاتك
            ];
        });

        // إرجاع استجابة ناجحة تحتوي على بيانات عمليات الشراء
        return ApiResponse::sendResponse(200, 'تم استرجاع بيانات عمليات الشراء بنجاح', $formattedPurchases);
    }
}
