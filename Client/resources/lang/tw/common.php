<?php
/****************
 * 
 * 	通用類 語系檔
 * 
 */
return [
	// 前端
	'order'=> [6046, 48242, 154914, 35232, 131506],
	"left_menu" => [
		"sport_bet" => "賽事投注",
		"m_bet" => "串關投注",
		"record" => "注單紀錄",
		"all" => "全部",
		"settled" => "已結算",
		"unsettled" => "未結算",
		"match" => "賽事結果",
		"rule" => "競猜規則",
		"logs" => "帳變紀錄",
		"calculator" => "串關算法",
		"notice" => "公告",
		"logout" => "登出",
	],
	'sport_menu' => [
		'today' => '今日',
		'living' => '滾球',
		'early' => '早盤',
	],
	"search_area" => [
		'sport' => '體育種類',
		'order_id' => '訂單編號',
		'logs_id' => '交易編號',
		'logsType' => '類型',
		'gamestatus' => '比賽狀態',
		'status' => '狀態',
		'series' => '聯賽名稱',
		'start_time' => '開始時間',
		'end_time' => '結束時間',
		'search' => '搜尋',
		'total' => '共',
		'game' => '場',
		'all' => '全部',
		"last_month" => "上月",
		"last_week" => "上週",
		"yesterday" => "昨日",
		"today" => "今日",
		"this_week" => "本週", 
		"this_month" => "本月",
	],
	'js' => [
		'loginFirst' => '請先登入!',
		'sun' => '日',
		'mon' => '一',
		'tue' => '二',
		'wed' => '三',
		'thu' => '四',
		'fri' => '五',
		'sat' => '六',
		'jan' => '一月',
		'feb' => '二月',
		'mar' => '三月',
		'apr' => '四月',
		'may' => '五月',
		'jun' => '六月',
		'jul' => '七月',
		'aug' => '八月',
		'sep' => '九月',
		'oct' => '十月',
		'nov' => '十一月',
		'dec' => '十二月',
		'today' => '今天',
	],
	'stageArr' => [
		154914 => [
			1 => '1局',
			2 => '2局',
			3 => '3局',
			4 => '4局',
			5 => '5局',
			6 => '6局',
			7 => '7局',
			8 => '8局',
			9 => '9局',
			40 => '加時賽',
			62 => '錯誤',
			80 => '中場休息',
			100 => '比賽結束',
			101 => '加時賽結束',
		],
		48242 => [
			'common' => [
				1 => '第 1 節',
				2 => '第 2 節',
				3 => '第 3 節',
				4 => '第 4 節',
				40 => '加時賽',
				80 => '中場休息',
				100 => '比賽結束',
				101 => '加時賽結束',
			],
			4045 => [
				10 => '上半場',
				20 => '下半場',
				40 => '加時賽',
				80 => '中場休息',
				100 => '比賽結束',
				101 => '加時賽結束',
			]
		],
		131506 => [
			1 => '第 1 節',
			2 => '第 2 節',
			3 => '第 3 節',
			4 => '第 4 節',
			40 => '加時賽',
			80 => '中場休息',
			100 => '比賽結束',
			101 => '加時賽結束',
		],
		6046 => [
			10 => '上半場',
			20 => '下半場',
			25 => '第三半場',
			30 => '加時賽 上半場',
			35 => '加時賽 下半場',
			50 => '點球',
			80 => '中場休息',
			100 => '比賽結束',
			101 => '加時賽結束',
			102 => '點球結束'
		],
		35232 => [
			1 => '第1局',
			2 => '第2局',
			3 => '第3局',
			40 => '加時賽',
			50 => '點球',
			80 => '中場休息',
			100 => '比賽結束',
			101 => '加時賽結束',
			102 => '點球結束'
		]
	],
	'priorityArr' => [
		'allwin' => [1, 2, 9, 101, 102, 109, 113, 117, 121, 201, 202, 301, 305, 401, 402],
		'hcap' => [3, 4, 103, 104, 110, 114, 118, 122, 203 , 204, 302, 306, 403, 404],
		'size' => [5, 6, 205, 206, 105, 106, 111, 115, 119, 123, 303, 307, 405, 406],
		'bd' => [8]
	],
	// 後端
	'ajax.ERROR_login_01' => '登入驗證失敗,請重試',
];