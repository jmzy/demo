$(function() {
	var qan = $("input[id^='picker']");
	$("#tjlc").click(function() {
		$("#ding").before("<div class='lck'><div id='row'><div class='txk'><a href='#'><div id='' class='tj_tbk xg_jhk'><i class='icon icon-add tj_tb_jh xg_jh'></i></div></a></div><div class='mz_zw'><span class='mz'></span><span class='zwmz'></span></div><div class='wbk'><span class='srk_wzdx'>用时</span><input class='tsk srk_wzdx' type='text' id='picker' /><span class='srk_wzdx'>天</span></div></div></div><div class='row bianju jtk' style='margin-top: 15px;'><i class='icon icon-todown'></i></div>");
		qan = $("input[id^='picker']");
		console.log(qan);
		rqtk();
	});

	$("#tjlc_2").click(function() {
		$("#ding_2").before("<div class='lck'><div id='row'><div class='txk'><a href='#'><div id='' class='tj_tbk xg_jhk'><i class='icon icon-add tj_tb_jh xg_jh'></i></div></a></div><div class='mz_zw'><span class='mz'></span><span class='zwmz'></span></div><div class='wbk'><span class='srk_wzdx'>用时</span><input class='tsk srk_wzdx' type='text' id='picker' /><span class='srk_wzdx'>天</span></div></div></div><div class='row bianju jtk' style='margin-top: 15px;'><i class='icon icon-todown'></i></div>");
		qan = $("input[id^='picker']");
		rqtk();
	});

	rqtk();

	function rqtk() {
		qan.picker({
			toolbarTemplate: '<header class="bar bar-nav">\
  		<button class="button button-link pull-right close-picker">确定</button>\
  		<h1 class="title">选择所用的时间</h1>\
  		</header>',
			cols: [{
				textAlign: 'center',
				values: ['1', '2', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']
			}]
		});
	}

});