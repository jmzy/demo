var app = new Vue({
	el: "#app",
	data: {
		bt:'广汽荻原',
		bt_xz:'欢迎来到广汽荻原的时代',
		todos: [{
			path: 'cgsp.html',
			ys: '#CDCEC9',
			name: '采购审批'
		}, {
			path: 'cgpjb.html',
			ys: '#95958D',
			name: '采购评价表'
		}, {
			path: 'htsp.html',
			ys: '#95958D',
			name: '合同评审'
		}, {
			path: 'splc.html',
			ys: '#95958D',
			name: '审批流程设置'
		}, {
			path: 'statistics.html',
			ys: '#95958D',
			name: '统计'
		}
		]
	}
});