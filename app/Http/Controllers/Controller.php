<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getPrefecture()
    {
        return [
            "北海道","青森県","岩手県","秋田県","宮城県","山形県","福島県","新潟県",
            "茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","長野県","山梨県",
            "静岡県","岐阜県","愛知県","富山県","石川県","福井県","滋賀県","三重県","京都府",
            "奈良県","和歌山県","大阪府","兵庫県","岡山県","鳥取県","島根県","広島県","山口県",
            "香川県","愛媛県","徳島県","高知県","福岡県","佐賀県","大分県","長崎県","熊本県",
            "宮崎県","鹿児島県","沖縄県","海外"
        ];
    }
}
