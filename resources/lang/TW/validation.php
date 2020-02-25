<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'             => ':attribute 是被接受的',
    'active_url'           => ':attribute 必須是一個合法的 URL',
    'after'                => ':attribute 必須是 :date 之後的一個日期',
    'alpha'                => ':attribute 必須全部由字母字符構成。',
    'alpha_dash'           => ':attribute 必須全部由字母、数字、中划线或下划线字符构成',
    'alpha_num'            => ':attribute 必須全部由字母和数字構成',
    'array'                => ':attribute 必須是個数组',
    'before'               => ':attribute 必須是 :date 之前的一個日期',
    'between'              => [
        'numeric' => ':attribute 必須在 :min 到 :max 之间',
        'file'    => ':attribute 必須在 :min 到 :max KB之间',
        'string'  => ':attribute 必須在 :min 到 :max 個字符之间',
        'array'   => ':attribute 必須在 :min 到 :max 项之间',
    ],
    'boolean'              => ':attribute 字符必須是 true 或 false',
    'confirmed'            => ':attribute 二次確認不匹配',
    'date'                 => ':attribute 必須是一個合法的日期',
    'date_format'          => ':attribute 與给定的格式 :format 不符合',
    'different'            => ':attribute 必須不同於:other',
    'digits'               => ':attribute 必須是 :digits 位',
    'digits_between'       => ':attribute 必須在 :min and :max 位之间',
    'dimensions'           => ':attribute 圖像尺寸不合法',
    'distinct'             => ':attribute 字段值不能重複.',
    'email'                => ':attribute 必須是一個合法的電子郵件地址。',
    'exists'               => '選定的 :attribute 是無效的',
    'file'                 => ':attribute 必須是文件',
    'filled'               => ':attribute 的字段是必填的',
    'image'                => ':attribute 必須是一個圖片 (jpeg, png, bmp 或者 gif)',
    'in'                   => '選定的 :attribute 是無效的',
    'in_array'             => ':attribute 不在 :other 中',
    'integer'              => ':attribute 必須是個整数',
    'ip'                   => ':attribute 必須是一個合法的 IP 地址。',
    'json'                 => ':attribute 必須是一個合法的 JSON 字符串',
    'max'                  => [
        'numeric' => ':attribute 的最大長度為 :max 位',
        'file'    => ':attribute 的最大為 :max',
        'string'  => ':attribute 的最大長度為 :max 字符',
        'array'   => ':attribute 的最大長度為 :max 个',
    ],
    'mimes'                => ':attribute 的文件類型必須是:values',
    'mimetypes'            => ':attribute 的文件類型必須是:values',
    'min'                  => [
        'numeric' => ':attribute 的最小長度為 :min 位',
        'file'    => ':attribute 大小至少為:min KB',
        'string'  => ':attribute 的最小長度為 :min 字符',
        'array'   => ':attribute 至少有 :min 项',
    ],
    'not_in'               => '選定的 :attribute 是無效的',
    'numeric'              => ':attribute 必須是数字',
    'present'              => ':attribute 字段必須存在',
    'regex'                => ':attribute 格式是無效的',
    'required'             => ':attribute 字段必須填寫',
    'required_if'          => ':attribute 字段是必須的當 :other 是 :value',
    'required_unless'      => ':attribute 字段是必須的除非 :other 在 :values 中',
    'required_with'        => ':attribute 字段是必須的當 :values 是存在的',
    'required_with_all'    => ':attribute 字段是必須的當 :values 是存在的',
    'required_without'     => ':attribute 字段是必須的當 :values 是不存在的',
    'required_without_all' => ':attribute 字段是必須的當 没有一個 :values 是存在的',
    'same'                 => ':attribute 和 :other 不匹配',
    'size'                 => [
        'numeric' => ':attribute 必須是 :size 位',
        'file'    => ':attribute 必須是 :size KB',
        'string'  => ':attribute 必須是 :size 個字符',
        'array'   => ':attribute 必須包括 :size 项',
    ],
    'string'               => ':attribute 必須是字符串',
    'timezone'             => ':attribute 必須是有效的時區',
    'unique'               => ':attribute 已存在',
    'uploaded'             => ':attribute 上傳失败',
    'url'                  => ':attribute 無效的格式',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'user_account' => '帳號',
        'user_password' => '密碼',
        'user_password_confirmation' => '二次密碼',

        'vendor_name' => '店名',
        'vendor_email' => '信箱',
        'vendor_address' => '地址',
        'vendor_telephone' => '電話',
        'vendor_bank_account' => '銀行帳號',
        'vendor_self_photo' => '個人圖片',
        'vendor_shop_photo' => '店家圖片',
        'vendor_introduce_content' => '介紹詞',
        'vendor_product_category' => '店家分類',

        'name' => '名稱',
        'username' => '使用者名稱',
        'email' => '郵箱',
        'first_name' => '名',
        'last_name' => '姓',
        'password' => '密碼',
        'password_confirmation' => '確認密碼',
        'city' => '城市',
        'country' => '國家',
        'address' => '地址',
        'phone' => '電話',
        'mobile' => '手機',
        'age' => '年齡',
        'sex' => '性別',
        'gender' => '性別',
        'day' => '天',
        'month' => '月',
        'year' => '年',
        'hour' => '時',
        'minute' => '分',
        'second' => '秒',
        'title' => '標題',
        'content' => '內容',
        'description' => '描述',
        'excerpt' => '摘要',
        'date' => '日期',
        'time' => '時間',
        'available' => '可用的',
        'size' => '大小',
        ##以下是自定義的！
        'telephone' => '手機號',
        'type' => '型別',
        'area_phone_number' => '手機區號',
        'student_info_id' => '學生ID',
        'lesson_appointment_id' => '預約課程ID',
        'version' => '版本',
        'interface_type' => '裝置型別',
        'parent_id' => '家長ID',
        'old_password' => '舊密碼',
        'new_password' => '新密碼',
        'confirm_password' => '確認密碼',
        'auth_code' => '驗證碼',
        'country_id' => '國家ID',
        'wechat' => '微信',
        'chinese_name' => '中文名',
        'english_name' => '英文名',
        'province_id' => '省份ID',
        'city_id' => '城市ID',
        'customer_id' => '使用者ID',
        'birthday' => '生日',
        'course_id' => '課程ID',
        'page' => '頁',
        'perPage' => '每頁',
        'feedback_type' => '反饋型別',
        'content' => '內容',
        'room_id' => '房間ID',
        'token' => 'Token憑證',
    ],

];

