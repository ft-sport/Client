@extends('layout.app')

@section('content')
	<!-- 搜尋框 -->
	<!-- <div id='searchArea' style="height: 5.5rem;">
		<div class="w-100" style='display: inline-flex'>
			<div id="series_id" style="width: 35%;margin-left: 1%" data-filter="off" data-filterpage="1">
				<p class="mb-0 fw-600 fs-09">{{ trans('match.main.series') }}</p>
				<select name="series_id" class="ui dropdown searchSelect seriesOption" onchange="filterSeiries()">
					<option value="">{{ trans('common.search_area.series') }}</option>
					<option value="0">{{ trans('common.search_area.all') }}</option>
					@foreach ($series_list as $key => $list)
						@if ($key == intval($search['sport']))
							@foreach ($list as $key2 => $v)
								<option series="{{ $v }}" value="{{ $key2 }}">{{ $v }}</option>
							@endforeach
						@endif
					@endforeach
				</select>
			</div>
			<div class="ui form" style="width:45%;margin-left: 1%">
				<div class="two fields">
					<div class="field">
						<p class="mb-0 fw-600 fs-09">{{ trans('common.search_area.start_time') }}</p>
						<div class="ui calendar" id="rangestart">
							<div class="ui input left icon">
								<i class="fa-solid fa-calendar-days"></i>
								<input autocomplete="off" name="start_time" type="text" placeholder="{{ trans('common.search_area.start_time') }}">
							</div>
						</div>
					</div>
					<div class="field">
						<p class="mb-0 fw-600 fs-09">{{ trans('common.search_area.end_time') }}</p>
						<div class="ui calendar" id="rangeend">
							<div class="ui input left icon">
								<i class="fa-solid fa-calendar-days"></i>
								<input autocomplete="off" name="end_time" type="text" placeholder="{{ trans('common.search_area.end_time') }}">
							</div>
						</div>
					</div>
				</div>
			</div>
			<button style="width: 20%;" id='searchBtn' class="ui button active" onclick="searchResult()">{{ trans('common.search_area.search') }}
				<i class="fa-solid fa-magnifying-glass ml-1"></i>
			</button>
		</div>
	</div> -->
	
	<!-- Table -->
	<div id="tblMatchResult">
		<div id="tblbodyMatch">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th>{{ trans('match.main.date') }}</th>
					<th>{{ trans('match.main.series') }}</th>
					<th>{{ trans('match.main.homeaway') }}</th>
					<th>{{ trans('match.baseball.fulltimescore') }}</th>
					<th>{{ trans('match.baseball.firstround') }}</th>
					<th>{{ trans('match.baseball.secondgame') }}</th>
					<th>{{ trans('match.baseball.thirdinning') }}</th>
					<th>{{ trans('match.baseball.fourthinning') }}</th>
					<th>{{ trans('match.baseball.fifthinning') }}</th>
					<th>{{ trans('match.baseball.sixthinning') }}</th>
					<th>{{ trans('match.baseball.seventhinning') }}</th>
					<th>{{ trans('match.baseball.eighthinning') }}</th>
					<th>{{ trans('match.baseball.ninthinning') }}</th>
					<th>{{ trans('match.baseball.tenthinning') }}</th>
					<th>{{ trans('match.baseball.eleventhinning') }}</th>
					<th>{{ trans('match.baseball.twelfthinning') }}</th>
					<th>{{ trans('match.baseball.overtime') }}</th>
					<th>{{ trans('match.baseball.hitscore') }}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="nowrap" rowspan="2">time</td>
						<td class="nowrap" rowspan="2">
							series_name
						</td>
						<td class="nowrap">
							home_team_name
						</td>
						<td>point</td>
					</tr>
					<tr>
						<td class="nowrap">
						home_team_name
						</td>
						<td>point</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div id="noMoreData" style="display: none">
		<td colspan="16"><p class="mb-0">{{ trans('match.main.nomoredata') }}</p></td>
	</div>
	<div id="loader" style="display: none">
		<div colspan="29" class="loading loading04">
			<span>L</span>
			<span>O</span>
			<span>A</span>
			<span>D</span>
			<span>I</span>
			<span>N</span>
			<span>G</span>
			<span>.</span>
			<span>.</span>
			<span>.</span>
		</div>
	</div>  
@endsection
@section('styles')
<link href="{{ asset('css/match.css?v=' . $system_config['version']) }}" rel="stylesheet">
<style>	
/* 寫入頁面限定CSS */
</style>
@endSection
@push('main_js')
<script>
    var isLastPage = false; // infinite scroll -> detect if it's last page
	var fetchMoreLock = false; // infinite scroll lock -> to prevent infinite loop
	var langTrans = @json(trans('match')); // lang file

	// detect ini ajax
    var isReadyResultInt = null
    var isReadyResult = false
	var isReadySportInt = null
	
	// result list data
    var resultListD = {}
    var callResultListData = { token: token, player: player, sport: sport, page: 1 }
    const resultList_api = 'https://sportc.asgame.net/api/v2/result_index'

	function renderView( isIni = 0 ) {
		if( isIni === 1 ) { // initial will only do once
			// loop seriesListD here to generate the search select then append into the page





			// loop seriesListD here to generate the search select then append into the page
		}
		

		/* loop resultListD.data here to generate the html element then append into the page

		loop resultListD.data to generate the html element
		then use insertRow() to insert
		note that insertRow() may need to be edited



		loop resultListD.data here to generate the html element then append into the page */

		// detect if it's last page
		if( resultListD.data.length !== 20 || resultListD.data.length === 0 ) isLastPage = true
		isLastPage && $('#noMoreData').show()
	}

	$(document).ready(function() {

		// detest is sport List is ready
        isReadySportInt = setInterval(() => {
            if( isReadyCommon ) {
                callResultListData.sport_id = sport // default sport
				caller(resultList_api, callResultListData, resultListD) // resultListD
                clearInterval(isReadySportInt)
            }
        }, 100);

		// check if api are all loaded every 500 ms 
        isReadyResultInt = setInterval(() => {
            if (resultListD.status === 1) { isReadyResult = true; }
            // if( isReadyResult && isReadyCommon ) {
            if( isReadyCommon && isReadyResult ) {
                $('#dimmer').dimmer('hide'); // hide loading
                $('#wrap').css('opacity', 1); // show the main content
				renderView(1)
                clearInterval(isReadyResultInt); // stop checking
            }
        }, 500);
	});


	// 下拉更多資料
	function fetchMore() {
		console.log('fetchMore')
		$('#loader').show() // loading transition

		callResultListData.page = parseInt(searchData.page) + 1

		$.ajax({
			url: resultList_api,
			type: 'POST',
			headers: {
				'X-CSRF-TOKEN': csrfToken
			},
			data: callResultListData,
			success: function(response) {
				var data = JSON.parse(response).data
				data = resultListD
				renderView() // render the new data
				$('#loader').hide()
                fetchMoreLock = false // reset the infinite scroll lock
			},
			error: function(xhr, status, error) {
				console.error('error');
				console.error(xhr,status,error);
			}
		});
	}

	// scroll to bottom
	var matchContainer = document.getElementById('tblbodyMatch');
	matchContainer.addEventListener('scroll', function() {
		var noDataDiv = document.getElementById("noDataF");
		var noDataDivL = noDataDiv ? noDataDiv.length : 0;
		var seriesElement = document.getElementById("series_id");
		var filterStatData = seriesElement.getAttribute("data-filter");
		var scrollHeight = matchContainer.scrollHeight;
		var scrollTop = matchContainer.scrollTop;
		var clientHeight = matchContainer.clientHeight;
		if (scrollTop + clientHeight + 1 >= scrollHeight && isLastPage === false && fetchMoreLock === false && noDataDivL < 1) {
			fetchMoreLock = true // lock
			fetchMore()
		}
	});

	function insertRow(e, n) {
		//start time
		let insertStr = '<tr><td class="nowrap" rowspan="2">'+formatDateTime(e.start_time)+'</td>'
		//series logo
		insertStr += '<td class="nowrap" rowspan="2"><img src="' + e.series_logo + '" class="serieslogo" onerror="this.src=\'https://sporta.asgame.net/uploads/default.png?v=' + version + '\'" >'+e.series_name+'</td>'
		//home logo and name
		insertStr += '<td class="nowrap"><img src="'+e.home_team_logo+'" alt="homelogo" class="teamlogo" onerror="this.src=\'https://sporta.asgame.net/uploads/default.png?v=' + version + '\'" >'+e.home_team_name+'</td>'
		//need to loop e.stat to get home_stat
		if (e.stat.home_stat && Array.isArray(e.stat.home_stat)) {
			let homeStat = e.stat.home_stat;
			for (let i = 0; i < n; i++) {
				insertStr += '<td>' + (homeStat[i] ? homeStat[i] : '-') + '</td>';
			}
		} else {
			insertStr += '<td>-</td>'.repeat(n); // Repeat '<td>-</td>' 
		}
		insertStr += '</tr><tr>'
		insertStr += '<td class="nowrap"><img src="'+e.away_team_logo+'" alt="awaylogo" class="teamlogo" onerror="this.src=\'https://sporta.asgame.net/uploads/default.png?v=' + version + '\'" >'+e.away_team_name+'</td>'
		//need to loop e.stat to get away_stat
		if (e.stat.away_stat && Array.isArray(e.stat.away_stat)) {
			let awayStat = e.stat.away_stat;
			for (let i = 0; i < n; i++) {
				insertStr += '<td>' + (awayStat[i] ? awayStat[i] : '-') + '</td>';
			}
		} else {
			insertStr += '<td>-</td>'.repeat(n); // Repeat '<td>-</td>' 
		}
		insertStr += '</tr>'
		$('#tblbodyMatch tbody').append(insertStr)
	}

	// search area series filter
	function filterSeiries() {
		let val = $('select[name="sport"]').val()
		setTimeout(() => {
			$('#series_id select option').each(function() {
				let id = $(this).val()
				if ($(this).attr('sport') === val) {
					$('#series_id div[data-value="'+id+'"]').show()
				} else {
					$('#series_id div[data-value="'+id+'"]').hide()
				}
			});
		}, 100);
	}
	
	// reesult search
	function searchResult() {
		let queryData = {}
		queryData.page = 1
		let sSeriesId = parseInt($('select[name="series_id"]').val())
		let sStartTime = $('input[name="start_time"]').val()
		let sEndTime = $('input[name="end_time"]').val()
		if(sSeriesId && sSeriesId !== 0) queryData.series_id = sSeriesId
		if(sStartTime) queryData.start_time = sStartTime
		if(sEndTime) queryData.end_time = sEndTime
		var queryString = new URLSearchParams(queryData).toString();
		window.location.href = '/match?' + queryString;
	}


  	// for test
    console.log("menu_count");
    console.log(@json($menu_count));

    console.log("sport_list");
    console.log(@json($sport_list));

    console.log("series_list");
    console.log(@json($series_list));

    console.log("status_list");
    console.log(@json($status_list));
    
    console.log("match_list");
    console.log(@json($data));
	
    console.log("search");
    console.log(@json($search));
    
</script>
@endpush

