<?php

return [

    /*
    |--------------------------------------------------------------------------
    | أسطر لغة التحقق
    |--------------------------------------------------------------------------
    |
    | تحتوي أسطر اللغة التالية على رسائل الخطأ الافتراضية المستخدمة من قبل
    | فئة المدقق. تحتوي بعض هذه القواعد على عدة إصدارات
    | مثل قواعد الحجم. لا تتردد في تعديل كل من هذه الرسائل هنا.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other هو :value.',
    'active_url' => 'الرابط :attribute غير صالح.',
    'after' => 'يجب أن يكون تاريخ :attribute بعد :date.',
    'after_or_equal' => 'يجب أن يكون تاريخ :attribute بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على أحرف وأرقام وشرطات فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون تاريخ :attribute قبل :date.',
    'before_or_equal' => 'يجب أن يكون تاريخ :attribute قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute بين :min و :max حرف.',
        'array' => 'يجب أن يحتوي :attribute بين :min و :max عنصر.',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false.',
    'confirmed' => 'تأكيد :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'تاريخ :attribute غير صالح.',
    'date_equals' => 'يجب أن يكون تاريخ :attribute مساوياً ل :date.',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقم.',
    'digits_between' => 'يجب أن يكون :attribute بين :min و :max رقم.',
    'dimensions' => 'أبعاد الصورة :attribute غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute بريداً إلكترونياً صالحاً.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
    'exists' => ':attribute المحدد غير صالح.',
    'file' => 'يجب أن يكون :attribute ملفاً.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute أكبر من :value حرف.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من أو تساوي :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute أكبر من أو يساوي :value حرف.',
        'array' => 'يجب أن يحتوي :attribute على :value عنصر أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عدداً صحيحاً.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالحاً.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحاً.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحاً.',
    'json' => 'يجب أن يكون :attribute نص JSON صالحاً.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أقل من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أقل من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute أقل من :value حرف.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أقل من أو تساوي :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أقل من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute أقل من أو يساوي :value حرف.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب أن لا تكون قيمة :attribute أكبر من :max.',
        'file' => 'يجب أن لا يكون حجم الملف :attribute أكبر من :max كيلوبايت.',
        'string' => 'يجب أن لا يكون طول النص :attribute أكبر من :max حرف.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عنصر.',
    ],
    'mimes' => 'يجب أن يكون ملف :attribute من نوع: :values.',
    'mimetypes' => 'يجب أن يكون ملف :attribute من نوع: :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute على الأقل :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حرف.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عنصر.',
    ],
    'multiple_of' => 'يجب أن تكون قيمة :attribute مضاعفاً ل :value.',
    'not_in' => ':attribute المحدد غير صالح.',
    'not_regex' => 'صيغة :attribute غير صالحة.',
    'numeric' => 'يجب أن يكون :attribute رقماً.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن يكون حقل :attribute موجوداً.',
    'regex' => 'صيغة :attribute غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attribute مطلوب عندما لا تكون :values موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other في :values.',
    'prohibits' => 'حقل :attribute يمنع :other من التواجد.',
    'same' => 'يجب أن يتطابق :attribute و :other.',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute تساوي :size.',
        'file' => 'يجب أن يكون حجم الملف :attribute يساوي :size كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute يساوي :size حرف.',
        'array' => 'يجب أن يحتوي :attribute على :size عنصر.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute نصاً.',
    'timezone' => 'يجب أن يكون :attribute منطقة زمنية صالحة.',
    'unique' => ':attribute موجود بالفعل.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'url' => 'يجب أن يكون :attribute رابطاً صالحاً.',
    'uuid' => 'يجب أن يكون :attribute UUID صالحاً.',

    /*
    |--------------------------------------------------------------------------
    | أسطر التحقق المخصصة
    |--------------------------------------------------------------------------
    |
    | هنا يمكنك تحديد رسائل التحقق المخصصة للصفات باستخدام
    | الاتفاقية "attribute.rule" لتسمية الأسطر. هذا يجعل من السهل
    | تحديد رسالة لغة مخصصة لقاعدة تحقق معينة.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
   
    ],

    /*
    |--------------------------------------------------------------------------
    | سمات التحقق المخصصة
    |--------------------------------------------------------------------------
    |
    | الأسطر التالية تُستخدم لتبديل العنصر النائب للصفة بشيء أكثر
    | قابلية للقراءة مثل "عنوان البريد الإلكتروني" بدلاً من "email".
    | هذا يساعدنا فقط على جعل رسالتنا أكثر تعبيراً.
    |
    */

    'attributes' => [],

];
