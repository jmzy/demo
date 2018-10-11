var app = new Vue({
	el: '#app',
	data: {
		yss: [{
				bgc: '#5DB2FF',
				relPath: 'assets/css/skins/blue.min.css'
			},
			{
				bgc: '#2dc3e8',
				relPath: 'assets/css/skins/azure.min.css'
			},
			{
				bgc: '#03B3B2',
				relPath: 'assets/css/skins/teal.min.css'
			},
			{
				bgc: '#53a93f',
				relPath: 'assets/css/skins/green.min.css'
			},
			{
				bgc: '#FF8F32',
				relPath: 'assets/css/skins/orange.min.css'
			},
			{
				bgc: '#cc324b',
				relPath: 'assets/css/skins/pink.min.css'
			},
			{
				bgc: '#AC193D',
				relPath: 'assets/css/skins/darkred.min.css'
			},
			{
				bgc: '#8C0095',
				relPath: 'assets/css/skins/purple.min.css'
			},
			{
				bgc: '#0072C6',
				relPath: 'assets/css/skins/darkblue.min.css'
			},
			{
				bgc: '#585858',
				relPath: 'assets/css/skins/gray.min.css'
			},
			{
				bgc: '#474544',
				relPath: 'assets/css/skins/black.min.css'
			},
			{
				bgc: '#001940',
				relPath: 'assets/css/skins/deepblue.min.css'
			}
		],
		ths: [{
				colspan: '4',
				name: '项目'
			},
			{
				colspan: '4',
				name: '采购申请进度'
			},
			{
				colspan: '4',
				name: '采购评审进度'
			},
			{
				colspan: '4',
				name: '货物购入进度'
			},
			{
				colspan: '1',
				name: '付款进度'
			},
			{
				colspan: '1',
				name: '结束'
			}
		],
		ztrs: [{
			name1: '项目',
			name2: '发起时间',
			name3: '发起人',
			name4: '发起部门',
			name5: '科长审批',
			name6: '部长审批',
			name7: '副总审批',
			name8: '总经理审批',
			name9: '采购科确认',
			name10: '采购部长审批',
			name11: '采购副总审批',
			name12: '采购评价会通过',
			name13: '订单发出',
			name14: '货物到货',
			name15: '付款开始',
			name16: '货物验收',
			name17: '付款结束',
			name18: '1'
		}, ],
		trs: [{
				name1: '项目1',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			},
			{
				name1: '项目11111111111111111111',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			},
			{
				name1: '项目11111111111',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			},
			{
				name1: '项目1',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			},
			{
				name1: '项目1',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			},
			{
				name1: '项目1',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			},
			{
				name1: '项目1',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			},
			{
				name1: '项目1',
				name2: '2018-6-29',
				name3: '景天',
				name4: '生产部',
				name5: '2018-07-08',
				name6: '2018-07-08',
				name7: '2018-07-08',
				name8: '2018-07-08',
				name9: '2018-07-08',
				name10: '2018-07-08',
				name11: '2018-07-08',
				name12: '2018-07-08',
				name13: '2018-07-08',
				name14: '2018-07-08',
				name15: '2018-07-08',
				name16: '2018-07-08',
				name17: '付款结束',
				name18: '1'
			}
		]
	}
});

$(function() {
	$("#btnPrint").click(function() {
		$("#printPage").print();
	});
	$('.date-picker').datepicker();

	$("#excel_btn").click(function() {
		$("#printPage").table2excel({
			exclude: ".noExl",
			name: "Excel Document Name",
			filename: "采购评价表",
			exclude_img: true,
			exclude_links: true,
			exclude_inputs: true
		});
	});
});