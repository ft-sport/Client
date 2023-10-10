<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class LsportMarketBet extends CacheModel
{
	use HasFactory;
	
	public $timestamps = false;
	protected $table = "lsport_market_bet";

    public static function getName($data) {

        // 緩存時間
        $cacheAliveTime = 3600;

        // 緩存Key
        $cacheKey = (new static)->getCacheKey($data , __FUNCTION__);

        return Cache::remember($cacheKey, $cacheAliveTime, function () use ($data) {
			$bet_id = $data['bet_id'];
			$api_lang = $data['api_lang'];
			
            $data = self::where('bet_id', $bet_id)->first();
            
			// 預設值
            $name = $data['name_en'];
            if (isset($data['name_' . $api_lang]) && !empty($data['name_' . $api_lang])) {
                $name = $data['name_' . $api_lang];
            }
            return $name;
        });
    }
    
    public static function getStatus($data) {

        // 緩存時間
        $cacheAliveTime = 3600;

        // 緩存Key
        $cacheKey = (new static)->getCacheKey($data , __FUNCTION__);

        return Cache::remember($cacheKey, $cacheAliveTime, function () use ($data) {
			$bet_id = $data['bet_id'];

            $data = self::where('bet_id', $bet_id)->select('status')->first();
            $return = $data;

            return $return;
        });
    }
    public static function getData(
        array $data,  // data=參數, 
        string $id_col = 'bet_id'  // id_col=主鍵或是搜尋的欄位名
    ) {

        // 緩存時間
        $cacheAliveTime = 0.1;

        // 緩存Key
        $cacheKey = (new static)->getCacheKey($data , __FUNCTION__);

        return Cache::remember($cacheKey, $cacheAliveTime, function () use ($data, $id_col) {
            $id = $data[$id_col];

            $data = self::where($id_col, $id)->first();
            $return = $data;

            return $return;
        });
    }
}
