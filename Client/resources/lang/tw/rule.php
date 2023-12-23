<?php
/****************
 * 
 * 	Rule 語系檔
 * 
 */
return [
	// 前端
	"ruleTitles" => [
		"sportName" => [
			"1" => "棒球",
			"2" => "籃球",
			"3" => "足球",
			"4" => "冰球",
			"5" => "美式足球",
		],
		"general_rule" => "一般規則",
		"betting_type" => "投注類型",
		"moneyline" => "獨贏盤",
		"get_the_ball" => "讓球",
		"inplay_handicap" => "滾球讓球",
		"total_score" => "總得分: 大 / 小",
		"rolling_total_score" => "滾球總得分: 大 / 小",
		"rolling_ball_total" => "滾球總分： 大 / 小",
		"total_score_sd" => "總得分: 單 / 雙",
		"total_points" => "總分: 單 / 雙",
		"solo_win" => "獨贏 - 前5局",
		"team_scores" => "球隊得分 - 大/小盤",
		"overtime" => "加時賽",
		"handicap" => "讓球盤",
		"fulltime_handicap_result" => "全場讓球賽果",
		"handicap_1stHalf" => "讓球 - 上半場",
		"ot_handicap" => "加時賽 - 讓球",
		"ot_let_1stHalf" => "加時賽 - 讓球-上半場",
		"betting_sizes" => "大小盤 ",
		"goal_largeSmall" => "進球: 大 / 小",
		"goal_overUnder_1stHalf" => "進球: 大 / 小 - 上半場",
		"rolling_ball_overUnder" => "滾球大小盤",
		"ot_goal_overUnder" => "加時賽 - 進球: 大 / 小",
		"ot_goals_overUnder_1stHalf" => "加時賽 - 進球: 大 / 小 - 上半場",
		"team_goals_overUnder" => "球隊進球數 - 大 / 小",
		"win_alone" => "獨贏",
		"win_alone_1stHalf" => "獨贏 - 上半場",
		"score_goal" => "滾球獨贏",
		"example_1" => "範例1：在賽事比分為阿森納1-0曼聯時，會員投注滾球獨贏盤 – 阿森納贏",
		"example_2" => "範例2：在賽事比分為阿森納1-0曼聯時，會員投注滾球獨贏盤 –曼聯贏：",
		"ot_win_alone" => "加時賽 - 獨贏",
		"ot_winAlone_1stHalf" => "加時賽 - 獨贏 - 上半場",
		"crts" => "波膽",
		"crts_1stHalf" => "波膽 - 上半場",
		"overUnder" => "大/小",
		"inPlay_overUnder" => " 滾球大/小",
		"totalPoints" => "總比分",
		"ball" => "球",
	],
	"generalRulesBaseball" => [
		"gr_baseball_1" => "如果主客場變更，所有注單將被取消。",
		"gr_baseball_2" => "國際棒球比賽規則:如果比賽最少進行七局後有一隊領先10分，或最少進行五局後有一隊領先15分，賽事將會提早結束。如果遇此情況，所有的投注將繼續保持有效，包括獨贏盤，單/雙盤，讓分盤（讓壘盤）和大/小盤（總比分）。",
		"gr_baseball_3" => "若投注讓分盤和大/小盤（總比分），比賽結果以9局後為準（如果主隊領先，結果便以9局上半結束時為準）。如果賽事在加時賽時被保留或中斷，比分將以最後一局的結果為準，除非主隊打成平局，或在加局賽的上半局結束時，客隊保持領先，比分將以比賽被保留時的結果為準。",
		"gr_baseball_4" => "未特別註明的情況下，所有全場玩法均包含加時賽。",
		"gr_baseball_5" => "上半場投注是按照第1局到第5局的結果為準。",
		"gr_baseball_6" => "下半場投注是按照第6局到第9局的結果為準。為了便於結算，下半場將包含加時賽",
		"gr_baseball_7" => "如遇賽事臨時更換先發投手的情況，所有注單將保持有效。",
		"gr_baseball_8" => "如果賽事是在下半場中斷所有上半場的投注保持有效，除已有明確賽果的玩法外，所有下半場和全場的注單將被取消。",
		"gr_baseball_9" => "如果比賽在規定時間前開賽，則實際開賽時間前的賽前盤投注全部有效，在實際開賽時間後的所有賽前盤投注均視為無效。",
		"gr_baseball_10" => "棒球賽事，如遇比00賽尚未開賽，官方已給出賽事延期訊息，則該場賽事的所有注單將會全部取消，串關以“1“計算 ; 但遇賽事已在進行中，中途因雨或其他因素暫停比賽時，36小時內官方如有公告該場賽事將保留場上狀況、且會在7天內繼續進行，則該場賽事所有註單將會保留並正常結算。",
		"gr_baseball_11" => "除國際棒球以外的棒球聯盟裁定規則（美國職棒，日本職棒，韓國職棒，台灣職棒，墨西哥棒球，澳洲棒球...等）：",
		"gr_baseball_11_1" => "如遇賽事因比分懸殊（落差達7分或以上，且賽事已進行至5局），經由聯盟裁定勝負的場次，該場賽事所有注單（除單雙玩法外）皆視為有效注單。",
		"gr_baseball_11_2" => "若因天氣因素（下雨.下雪...等）或其他突發因素，賽事未進行至9局提前結束，經由聯盟裁定最終賽果時，結算規則如下：",
		"gr_baseball_11_2_1" => "＊ 賽事已進行至5局上半結束（含5局後），或五局下半進行中，為主場領先，則該場賽事的（全場獨贏盤、半場所有玩法以及已有明確賽果的玩法）將會正常結算。",
		"gr_baseball_11_2_2" => "＊ 若賽事未進行至5局，經由聯盟裁定提前結束，則該場賽事的（半場獨贏盤、全場獨贏盤以及已有明確賽果的玩法）將會正常結算，其餘尚未有明確賽果的玩法（如全場讓分、全場大小、全場單雙、全場主客隊總分、半場讓分、半場大小，4-6局區間玩法、7-9局區間玩法）注單一律取消，串關以“1“計算。",
	],
	"ruleContentsBaseBall" => [
		"moneyline_1" => "預測哪一支球隊將在比賽勝出。",
		"moneyline_2" => "結算時, 加時(局)賽將計算在內。",
		
		"getTheBall_1" => "預測哪一支球隊在盤口指定的讓分數贏得某個時節或全場比賽。",
		"getTheBall_2" => "結算時, 加時(局)賽將計算在內。",

		"inplayHandicap_1" => "預測哪一支球隊在盤口指定的讓分數贏得某個時節或全場比賽。",
		"inplayHandicap_2" => "結算時, 加時(局)賽將計算在內。",

		"totalScore_1" => "預測賽事總比分將大於或小於在盤口指定的大/小盤分數。",
		"totalScore_2" => "結算時, 加時(局)賽將計算在內。",
		"totalScore_3" => "如果賽事中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況，大/小盤注單才會被結算。若遇到任何其他情況，注單將一律被取消。",
		"totalScore_4" => "如果賽事在上半場中斷，所有注單將被取消，除非中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況注單才會被結算。",
		"totalScore_5" => "如果賽事在下半場取消或中斷，所有上半場注單保持有效。",
		"totalScore_6" => "如果賽事在下半場取消或中斷，所有下半場和全場注單將被取消，除非中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況注單才會被結算。",

		"rollingTotalScore_1" => "預測賽事總比分將大於或小於在盤口指定的大/小盤分數。",
		"rollingTotalScore_2" => "結算是以0-0的比分按盤口開出的大小盤讓分數做裁決",
		"rollingTotalScore_3" => "結算時, 加時(局)賽將計算在內。",

		"totalScoreSd_1" => "預測賽事的總比分是單數或雙數。",
		"totalScoreSd_2" => "結算時, 加時(局)賽將計算在內。",

		"soloWin_1" => "預測哪支球隊將在前5局結束時獲勝或者打平",
		"soloWin_2" => "只提供於此時間段，不適用於賽事結束時的最終比分。",

		"teamScores_1" => "預測指定的球隊總跑壘得分將大於或小於盤口指定的大/小盤分數。",
		"teamScores_2" => "結算包括加時賽局。",

		"overtime_1" => "結算包括加時賽局。",
		"overtime_2" => "預測賽事是否超出常規9局時間（除非另有說明）。",
		"overtime_3" => "出於結算的目的，任何常規的比賽延長到第10局或更多，將被視為進入“加時賽”。",
	],
	"generalRulesBasketball" => [
		"gr_basketball_1" => "籃球所有比賽的賽果認定皆以本公司所定的規則為準。",
		"gr_basketball_2" => "賽節、半場的投注，如果賽節、半場因故中斷或者取消，導致賽節或半場並未完成，則除已經有明確賽果的投注正常結算，其余投注將被視為無效且取消。",
		"gr_basketball_3" => "籃球所有比賽，指示的“主場“、“客場“和“中立場“信息僅供參考，如遇主客場異動，不影響比賽結果，所有註單將被視為有效。",
		"gr_basketball_4" => "如比賽在法定時間提前進行，在比賽開始前的投注依然有效，在比賽開始後的所有投注均視為無效(滾球投注另作別論)。",
		"gr_basketball_5" => "全場玩法、下半場玩法的所有投注都包括加時賽，除非另有說明。注：單節玩法裡的第四節投注不包括加時賽賽果。",
		"gr_basketball_6" => "如果比賽開始，但在原定時間的36小時內暫停或者中止，若比賽剩餘時間小於等於5分鐘，則全場所有註單被視為有效；如果比賽剩餘時間大於5分鐘，則除中斷前已有明確賽果的投注正常結算以外，其餘所有註單視為無效。",
		"gr_basketball_7" => "對於3x3籃球，結算將基於官方比賽規則。",
		"gr_basketball_8" => "籃球某些特定賽事，如友誼賽、積分制賽事等，遵循以下規則：",
		"gr_basketball_8_1" => "若遇到平局結束，所有註單將被視為有效，以平局結束比分進行結算。",
		"gr_basketball_8_2" => "若常規時間結束後已有勝負，同場隊伍因積分制原因再加時賽事，所有註單將被視為有效，加時比分不計入到第2回合，所有註單以第2回合常規時間結束的比分進行結算。",
		"gr_basketball_8_3" => "若常規時間結束後為平局，同場隊伍因積分制原因再加時賽事，所有註單將被視為有效，加時比分計入第2回合，所有註單以第2回包含加時的比分進行結算。",
	],
	"ruleContentsBasketball" => [
		"moneyline_1" => "預測哪一支球隊將在比賽勝出。盤口提供兩支球隊為投注選項。",
		"moneyline_2" => "賽事盤口包括全場、半場或單節投注。",

		"getTheBall_1" => "預測哪一支球隊在盤口指定的讓分球數在半場/全場/賽事單節贏得比賽。",
		"getTheBall_2" => "如果賽事在下半場取消或中斷，所有上半場注單保持有效。",
		"getTheBall_3" => "如果賽事在下半場取消或中斷，所有下半場注單將被視為無效。",
		"getTheBall_4" => "賽事盤口包括全場、半場或單節投注。",

		"inplayHandicap_1" => "預測哪一支球隊在盤口指定的讓分數裏贏得半場/全場/賽事單節的比賽。",
		"inplayHandicap_2" => "賽事盤口包括全場、半場或單節投注。",

		"totalScore_1" => "預測賽事總比分將大於或小於在盤口指定的大/小盤分數。",
		"totalScore_2" => "賽事盤口包括全場、半場或單節投注。",
		"totalScore_3" => "如果賽事中斷，大/小盤將僅會結算任何將來的得分不會影響到賽果的注單。若遇到任何其它情況，注單將一律被視為無效。",
		"totalScore_4" => "如果賽事在上半場中斷，所有上半場注單將被取消，除非中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況注單才會被結算。",
		"totalScore_5" => "如果賽事在下半場取消或中斷，所有上半場注單保持有效。",
		"totalScore_6" => "如果賽事在下半場取消或中斷，所有下半場注單將被取消，除非中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況注單才會被結算。",
		"totalScore_7" => "如果賽事中斷, 所有時節的注單將被取消除非遇到以下其中一個情況：",
		"totalScore_7_1" => "投注的時節是在比賽中斷前。",
		"totalScore_7_2" => "比賽中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況。",

		"rollingTotalScore_1" => "預測賽事總比分將大於或小於在盤口指定的大/小盤分數。",
		"rollingTotalScore_2" => "結算是以0-0的比分在比賽/時節結束後按盤口開出的讓分數做裁決。",
		"rollingTotalScore_3" => "如果賽事中斷，大/小盤將僅會結算任何將來的得分不會影響到賽果的注單。若遇到任何其它情況，注單將一律被視為無效。",

		"teamScores_1" => "預測賽事主隊/客隊的總分數將大於或小於在盤口指定的大/小盤分數。",
		"teamScores_2" => "如果賽事取消，所有的注單將會被認為無效，除非注單在中斷前已經結算或者在中斷前已有明確的結果並且之後沒有任何顯著會影響賽事結果的情況注單才會被結算。",
		"teamScores_3" => "所有注單的結算都是依據相關體育機構的官方統計數據為準。",

		"totalPoints_1" => "預測賽事的總比分是單數或雙數。",
		"totalPoints_2" => "賽事盤口包括全場、半場或單節投注。",
	],
	"generalRulesSoccor" => [
		"gr_soccor_1" => "除非另有注明，所有足球投注的結算皆以球賽所規定的完場時間90分鐘為準。",
		"gr_soccor_2" => "完場時間90分鐘包括球員傷停補時。加時賽、淘汰賽、點球，以及賽事後如果裁判或相關管理機構更改任何賽果則不計算在內。",
		"gr_soccor_3" => "除非在個別玩法規則另有注明，所有滾球投注的結算將以90分鐘的賽果為準。",
		"gr_soccor_4" => "完場時間45分鐘是指賽事上半場，其中包含傷停補時。加時賽、淘汰賽、點球，以及賽事後如果裁判或相關管理機構更改任何賽果則不計算在內。",
		"gr_soccor_5" => "若青少年賽、友誼賽的完場時間為70分鐘（2x35分鐘）或更少，本公司將在開賽前做出公布，否則該場賽事的注單一律作廢。",
		"gr_soccor_6" => "對於某些以全場完場時間為80分鐘（2x40分鐘）的特定賽事或者友誼賽，所有投注的結算皆以完場時間為準。",
		"gr_soccor_7" => "沙灘足球賽事，盤口僅限進行36分鐘(3x12)的賽事;室內五人足球賽事，盤口僅限進行40分鐘(2x20)的賽事。",
		"gr_soccor_8" => "如果賽事取消，中斷或延遲並且沒有在官方指定開球時間的36小時內重新開始，該賽事投注均被視為無效且取消 ( 已經有明確賽果的投注會正常結算，或在其它體育規則裡另有指定說明除外 )",
		"gr_soccor_9" => "如果賽事確認取消，所有該場賽事的投注即被視為無效且取消，除非在個別投注類型規則裏另有指定注明。如果賽事是在上半場中斷，所有上半場的注單將被取消。如果賽事是在下半場中斷所有上半場的投注保持有效，但所有下半場的注單將被取消，除非在個別玩法規則另有注明。",
		"gr_soccor_10" => "除非在個別玩法規則另有注明，烏龍球將予以計算在內。",
		"gr_soccor_11" => "如果比賽場地有變更（主客隊調換），所有此注單將被取消。",
		"gr_soccor_12" => "對於國際賽事，只要變更的場地仍在同一個國家內，所有注單將保持有效。",
		"gr_soccor_13" => "對於國際賽事，只要變更的場地仍在聯賽原定舉辦的國家內，所有注單將保持有效。",
		"gr_soccor_14" => "本公司保留權利取消任何因更換場地而可能對賽事結果有影響的注單。",
		"gr_soccor_15" => "若賽事的確切開賽時間不明（比如，由於電視直播時間安排的問題），要是在原本開賽時間的72小時之內，本平臺保留調整該開賽時間的權利。",
		"gr_soccor_16" => "除非另有註明，對於特定的15分鐘玩法，進球時間以確定得分的時間，即足球超過球門線的時間為準，角球時間以開出角球的時間為準，罰牌時間以官方裁判掏牌的時間為準。",
	],
	"ruleContentsSoccor" => [
		"handicap_1" => "預測哪一支球隊在盤口指定的讓球數在全場/半場/賽事某個時節贏得比賽。",
		"handicap_2" => "“讓球盤”則定義為在比賽正式開始前，一方球隊已得到另一方讓的虛擬分數，以領先的情況下開始比賽。",
		"handicap_3" => "所有注單將按盤口開出的讓球數在玩法的時節結束後結算。",
		"handicap_4" => "讓球隊（優勢球隊）將給出讓球，讓球數將顯示在賠率的左側，讓球隊在盤面上也會以粗型字體顯示",
		"handicap_5" => "讓球盤的玩法分為以下幾種：",
		"handicap_5_1" => "整數讓球也或稱為讓‘一球’（如：-1，-2，-3，等）",
		"handicap_5_2" => "非整數讓球也或稱為‘半球’（如：-0.5，-1.5，-2.5，等）",
		"handicap_5_3" => "混合以上讓‘半球/一球’的方式（如：-0/0.5，-0.5/1，-1/1.5，等）",
		"handicap_6" => "根據盤口讓球信息預測最終獲得勝利的球隊。",
		"handicap_7" => "投注的結算皆以球賽所規定的完場時間90分鐘為準。",
		"handicap_8" => "如果賽事在90分鐘結束前取消或中斷，所有注單將會被視為無效。",

		"fulltimeHandicapResult_1" => "投注一場球賽經讓球調整後的全場賽果是主勝、客勝或和局。",
		"fulltimeHandicapResult_2" => "全場讓球賽果是根據法定比賽時間的全場賽果為準，不包括加時賽或點球大戰賽果。",
		"fulltimeHandicapResult_3" => "全場讓球賽果是根據法定比賽時間的全場賽果為準，不包括加時賽或點球大戰賽果。",
		"fulltimeHandicapResult_4" => "較強球隊會讓球予較弱球隊，勝負由正式賽果加上讓球作調整決定， 讓球數目為整數，例如一球，兩球，三球等等。您可依照調整後的賽果，預測主隊勝、和局或客隊勝。",
		"fulltimeHandicapResult_4" => "讓球主隊和客隊在隊名後有（-）或（+）符號。",
		"fulltimeHandicapResult_4_1" => "例子: 雲達不萊梅 (-1)   平局 (-1)      拜仁慕尼黑 (+1)",
		"fulltimeHandicapResult_4_2" => "(-) 表示讓球的球隊，而隨後的數字表示讓球數目，例如-1即讓1球",
		"fulltimeHandicapResult_4_3" => "(-) 表示主隊讓球，而隨後的數字表示讓球數目，例如-1即讓1球",
		"fulltimeHandicapResult_4_4" => "(+) 表示受讓的球隊，而隨後的數字表示受讓數目，例如+1即受讓1球",
		"fulltimeHandicapResult_4_5" => "據計算讓球以後的賽果來判斷勝平負，例如上圖【雲達不萊梅】讓 1 球予【拜仁慕尼黑】， 全場賽果為 1:1，經過讓球調整後的賽果只需將【拜仁慕尼黑】隊加上一球，而【雲達不萊梅】隊贏的一球維持不變， 因此調整後賽果為1:2，故下注【拜仁慕尼黑】+1的投注為贏。",
		"fulltimeHandicapResult_5" => "我的註單記錄頁面，賽事隊伍信息處比分（非投注項比分），為投注時的比賽實時比分。",

		"handicap1stHalf_1" => "所有上半場的投注將以上半場45分鐘其中包含傷停補時後的賽果結算。",
		"handicap1stHalf_2" => "如果賽事在上半場時節因任何理由取消或中斷，所有上半場注單將被取消。",
		"handicap1stHalf_3" => "如果賽事在下半場或加時賽因任何理由取消或中斷，所有上半場注單保持有效。",

		"inplayHandicap_1" => "所有注單將按照盤口開出讓球信息，在相應投注類型結束後結算。",
		"inplayHandicap_2" => "結算是以投注時到比賽/時節結束後的賽果做裁決。即是以賽事完場比分減去投注當時的比分。 上半場的滾球讓球投注將以上半場結束後的賽果結算。",

		"otHandicap_1" => "所有注單將按照盤口開出讓球信息，在30分鐘加時賽結束後計算，包含補時。",
		"otHandicap_2" => "如果賽事在加時賽結束前取消或中斷，所有注單將會被視為無效。",

		"otLet1stHalf_1" => "所有注單將按照盤口開出讓球信息，在15分鐘加時賽結束後計算，包含補時。",
		"otLet1stHalf_2" => "加時賽中如果賽事在上半場取消或中斷，所有上半場注單將會被視為無效。",
		"otLet1stHalf_3" => "加時賽中如果賽事在下半場或補時階段取消或中斷，所有上半場注單將會被視為有效。",
		
		"bettingSizes_1" => "預測賽事總入球數將大於或小於在盤口指定的大/小盤球數。",
		"bettingSizes_2" => "如果賽事的總入球數多於盤口的大/小盤球數，則為大盤。如果少於盤口的大/小盤球數，則為小盤。",
		"bettingSizes_3" => "所有注單將按盤口開出的大/小盤球數在玩法的時節結束後結算。",
		"bettingSizes_4" => "大/小盤的玩法分為以下幾種：",
		"bettingSizes_4_1" => "大/小於‘一球’（如：2，3，4，等）",
		"bettingSizes_4_2" => "大/小於‘半球’（如：1.5，2.5，3.5，等）",
		"bettingSizes_4_3" => "混合以上‘半球/一球’的方式（如：1.5/2，2.5/3，3.5/4，等）",
		"bettingSizes_5" => "如果賽事中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況，大/小盤注單才會被結算。若遇到任何其他情況，注單將一律被取消。請參考以上範例：",
		"bettingSizes_5_1" => "範例1：會員投注大於2.5球：",
		"bettingSizes_5_1_1" => "賽事在比分2-1時中斷。",
		"bettingSizes_5_1_2" => "盡管賽事中斷，但因結果已經明確並且若之後有任何潛在進球將對盤口結算裁決沒有影響，所有此會員注單結算為贏。",
		"bettingSizes_5_2" => "範例2：會員投注小於2.5球：",
		"bettingSizes_5_2_1" => "賽事在比分2-1時中斷。",
		"bettingSizes_5_2_2" => "盡管賽事中斷，但因結果已經明確並且若之後有任何潛在進球將對盤口結算裁決沒有影響，所有此會員注單結算為輸。",
		"bettingSizes_5_3" => "範例3：會員投注大於3.5球：",
		"bettingSizes_5_3_1" => "賽事在比分2-1時中斷。",
		"bettingSizes_5_3_2" => "由於賽事在未有明確的結果能裁決會員的注單前中斷，此會員的注單將被取消。",

		"goalLargeSmall_1" => "所有的投注將以全場90分鐘的賽果結算。",
		"goalLargeSmall_2" => "如果比賽停止，取消或中斷，所有投注將被視為無效，除非在賽事取消或中斷前，結果已經明確。",

		"goalOverUnder1stHalf_1" => "所有上半場的投注將以上半場45分鐘的賽果結算。",
		"goalOverUnder1stHalf_2" => "如果賽事在上半場時節因任何理由取消或中斷，所有上半場注單將被取消。除非在賽事取消或中斷前，結果已經明確。",
		"goalOverUnder1stHalf_3" => "如果賽事在下半場或加時時段因任何理由取消或中斷，所有上半場注單保持有效。",
		
		"rollingBallOverUnder_1" => "結算是以雙方球隊在90分鐘內的總進球數為依據。",
		
		"otGoalOverUnder_1" => "兩支球隊開始加時賽的比分為0-0，之前賽果屬於常規時間內入球不會計算在內。",
		"otGoalOverUnder_2" => "所有的投注將以30分鐘加時賽後結果結算，包括補時。",
		"otGoalOverUnder_3" => "在加時賽結束前如果比賽停止，取消或中斷，所有投注將被視為無效，除非在賽事取消或中斷前，結果已經明確。",
		
		"otGoalsOverUnder1stHalf_1" => "所有投注將會按照15分鐘賽事結束後賽果為準，包含補時。",
		"otGoalsOverUnder1stHalf_2" => "如果比賽在上半場停止，取消或者中斷，所有上半場注單將被視為無效。",
		"otGoalsOverUnder1stHalf_3" => "如果比賽在下半場或補時期間停止，取消或者中斷，所有上半場注單將被視為有效。",
		
		"teamGoalsOverUnder_1" => "預測在特定的比賽有關期間內，其中一支球隊的總入球數將大於或小於在盤口指定的大/小盤球數。",
		"teamGoalsOverUnder_2" => "如果賽事的總入球數多於盤口的大/小盤球數，則為大盤。如果少於盤口的大/小盤球數，則為小盤。",
		"teamGoalsOverUnder_3" => "如果賽事中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況，注單才會被結算。若遇到任何其他情況，注單將一律被取消。",
		"teamGoalsOverUnder_4" => "點球大戰與烏龍球將不予計算。",
		
		"moneyline_1" => "預測哪一支球隊將在比賽勝出。盤口提供兩支球隊和平局為投注選項。",
		"moneyline_2" => "投注將以0-0的比分作為計算基礎（讓球並不計算在內）。",
		
		"winAlone_1" => "預測哪一支球隊將在90分鐘比賽勝出或賽事和局。",
		
		"winAlone1stHalf_1" => "所有上半場的投注將以上半場45分鐘賽果結算。",
		
		"scoreGoal_1" => "預測滾球時，哪一支球隊勝出。",
		"scoreGoal_2" => "投注的結算將以90分鐘完場賽果為準。",
		"scoreGoal_3" => "以下為滾球獨贏盤範例。",
		"scoreGoal_3_1" => "阿森納（主） vs 曼聯 ",
		"scoreGoal_3_2" => "目前得分 1-0",
		"scoreGoal_3_3" => "赔率：阿森纳 1.61 平局 3.8 曼联 6.0",
		"scoreGoal_3_1_1" => "完場賽果為阿森納2-1曼聯。",
		"scoreGoal_3_1_2" => "因阿森納在完場時勝出，所有投注阿森納的注單結算為贏。",
		"scoreGoal_3_1_3" => "所有在比分1-0時投注曼聯或平局的注單將結算為輸。",
		"scoreGoal_3_2_1" => "完場賽果為阿森納1-1曼聯。",
		"scoreGoal_3_2_2" => "因完場賽果為平局，所有投注曼聯以及阿森納的注單將結算為輸。",
		"scoreGoal_3_2_3" => "所有投注平局的注單將結算為贏。",

		"otWinAlone_1" => "加時賽則視為一場新的賽事並且會開出加時賽盤口。投注將按加時賽時節的結果做結算。",
		"otWinAlone_2" => "預測哪一支球隊將會在30分鐘內勝出，或賽事平局，包含補時。",
		
		"otWinAlone1stHalf_1" => "如果比賽在加時賽結束前暫停，取消或中止，所有投注將被視為無效。",
		"otWinAlone1stHalf_2" => "預測哪一支球隊將會在15分鐘內勝出，或賽事平局，包含補時。",
		"otWinAlone1stHalf_3" => "如果賽事在加時賽上半場取消或中斷，所有上半場注單將會被取消。",
		
		"crts_1" => "如果賽事在加時賽下半場取消或中斷，所有上半場注單將被會視為有效。",
		"crts_2" => "預測一場特定賽事的全場準確比分。",
		"crts_3" => "全場波膽投注的結算根據90分鐘完場比分做出裁決。",
		
		"crts1stHalf_1" => "如果賽事取消，已有明確賽果或全場波膽投注在“其它比分”為僅有可能獲勝的選項，投注將被視為有效；其餘的投注則被視為無效，此是由於賽事無條件決定後面的進球不會影響賽事的結果。",
		"crts1stHalf_2" => "預測一場特定賽事半場的準確比分。",
		"crts1stHalf_3" => "半場波膽投注是指投注上半場的比賽，投注的結算根據半場“45分鐘”結束後的比分做出裁決。",
		"crts1stHalf_4" => "如果賽事在上半場取消，已有明確賽果或所有半場波膽投注在“其它比分”為僅有可能獲勝的選項，投注將被視為有效；其餘的投注則被視為無效，此是由於賽事無條件決定後面的進球不會影響賽事的結果。",
		"crts1stHalf_5" => "如果賽事在下半場取消，所有半場波膽的投注被視為有效。",
	],
	"generalRulesIceHockey" => [
		"gr_IceHockey_1" => "如果原定比賽場地更改，所有的投注將被視為無效。",
		"gr_IceHockey_2" => "在罰球中，獲勝方會在賽事結束後的最終比分上加一分。",
		"gr_IceHockey_3" => "在賽節投注中，特殊的賽節必須全部完成則注單才被視為有效，除非有明確說明或者個別投注規則。其他情況下，注單將一律取消。",
		"gr_IceHockey_4" => "第三節賽節投注不包括加時賽和罰球賽。",
		"gr_IceHockey_5" => "如果比賽提前開賽，只有在開賽之前投注的注單被視為有效投注。在開賽後投注的注單將被視為無效投注，滾球投注類型不包括在內。",
		"gr_IceHockey_6" => "加時賽與點球大戰將包括在內。",
	],
	"rulesContentsIceHockey" => [
		"moneyline_1" => "預測哪支球隊將贏得比賽。",
		"getTheBall_1" => "預測哪一支球隊在盤口指定的讓分數贏得某個時節或全場比賽。",
		"inplayHandicap_1" => "預測哪一支球隊在盤口指定的讓分數贏得某個時節或全場比賽。",

		"overUnder_1" => "預測賽事/賽節總進球數將大於或小於盤口分數。",
		"overUnder_2" => "如果賽事中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況，大小球投注的注單才會被結算。若遇到任何其他情況，注單將一律被取消。",
		
		"inPlayOverUnder_1" => "預測賽事/賽節總進球數將大於或小於盤口分數。",
		"inPlayOverUnder_2" => "如果賽事中斷前已有明確結果並且之後沒有任何顯著會影響賽事結果的情況，大小球投注的注單才會被結算。若遇到任何其他情況，注單將一律被取消。",
	],
	"generalRulesAmericanFootball" => [
		"gr_AmericanFootball_1" => "最終賽果是以全場四個時節後的比分為準（包括加時賽）。",
		"gr_AmericanFootball_2" => "單節/半場的投注，必須在比賽賽節完成後注單才被視為有效。",
		"gr_AmericanFootball_3" => "第四節投注不包括加時賽。",
		"gr_AmericanFootball_4" => "美國大學美式足球聯賽場地規則：盤口指示的“主場“和“客場“信息僅供參考。無論原定場地是否更改為“主場“，“客場“或“中立場“，所有注單將保持有效。",
		"gr_AmericanFootball_5" => "除非個別玩法規則另有注明，賽事完場時間將包括加時賽。",
		"gr_AmericanFootball_6" => "如比賽在法定時間提前進行，在比賽開始前的投注依然有效，在比賽開始後的所有投注均視為無效(滾球投注另作別論)。",
	],
	"rulesContentsAmericanFootball" => [
		"moneyline_1" => "預測哪一支球隊將在比賽勝出。盤口提供兩支球隊為投注選項。",
		"moneyline_2" => "賽事盤口包括全場、半場投注。",

		"getTheBall_1" => "預測哪一支球隊在盤口指定的讓分數贏得某個時節或全場比賽。",
		"getTheBall_2" => "如果賽事在下半場取消或中斷，所有上半場注單保持有效。",
		"getTheBall_3" => "如果賽事在下半場取消或中斷，所有下半場注單將被視為無效。",
		"getTheBall_4" => "賽事盤口包括全場、半場投注。",

		"inplayHandicap_1" => "預測哪一支球隊在盤口指定的讓分數贏得某個時節或全場比賽。",
		"inplayHandicap_2" => "結算是以0-0的比分在比賽結束後按盤口開出的讓分數做裁決。投注當時的比分對結算沒有影響。",
		"inplayHandicap_3" => "賽事盤口包括全場、半場投注。",

		"overUnder_1" => "預測賽事總比分將大於或小於在盤口指定的大/小盤分數。",
		"overUnder_2" => "賽事盤口包括全場、半場投注。",
		
		"inPlayOverUnder_1" => "預測賽事總比分將大於或小於在盤口指定的大/小盤分數。",
		"inPlayOverUnder_2" => "結算是以0-0的比分在比賽結束後按盤口開出的讓分數做裁決。",
		"inPlayOverUnder_3" => "賽事盤口包括全場、半場投注。",
	],
	// 後端
];


