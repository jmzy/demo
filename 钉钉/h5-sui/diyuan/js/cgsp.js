var form_data = new FormData();
var index = 0;
var img_arr = new Array();

var file_index = 0;
var file_name_arr = new Array();
var file_arr = new Array();

var app = new Vue({
	el: '#app',
	data: {
		tus: [],
		files: []
	}
});

function tu_btn() {
	$("#img_jz").trigger("click");
}

function file_btn() {
	$("#files_jz").trigger("click");
}

//图片区域
function getImg(file) {

	let suffix = ["jpg", "png", "heif", "jpeg"];

	for(let i = 0; i < file.value.length; i++) {
		const name = file.files[i].name;
		let pos = name.lastIndexOf(".");
		let hz = name.substring(pos + 1);
		for(let s of suffix) {
			if(hz.toLowerCase() == s.toLowerCase()) {
				if(file.files && file.files[i]) {
					let reader = new FileReader();
					reader.readAsDataURL(file.files[i]);
					reader.onload = function(e) {
						let img_jsonObj = new Object();
						index = "img_" + img_arr.length;
						img_jsonObj = {
							"img_path": e.target.result,
							'id': index
						};
						img_arr.push(img_jsonObj);
						app.tus = img_arr;
					}
				}
			}
		}
	}
}

function detect_img(e) {
	let id = e.id;
	let index = id.indexOf("_");
	let delect_id = id.substring(index + 1);
	app.tus.splice(delect_id, 1);
	for(let i = 0; i < app.tus.length; i++) {
		app.tus[i].id = "img_" + i;
	}
	$('#img_jz').val('');
}

//文件区域
function getFile(file) {

	let suffixs = ["txt", "doc", "xls", "ppt", "docx", "xlsx", "pptx"];

	for(let i = 0; i < file.value.length; i++) {
		let hz = file.files[i].name.substring(file.files[i].name.lastIndexOf(".") + 1);
		for(let s of suffixs) {
			if(hz.toLowerCase() == s.toLowerCase()) {
				if(file.files && file.files[i]) {
					let reader = new FileReader();
					reader.readAsArrayBuffer(file.files[i]);
					reader.onload = function(e) {
						let blob = new Blob([reader.result]);
						let file_Obj = new Object();
						let name = file.files[i].name;
						file_Obj = {
							"name": name,
							"blob": blob,
						};
						file_arr.push(file_Obj);
						let file_josnObj = new Object();
						file_index = "file_" + file_name_arr.length;
						file_josnObj = {
							"name": name,
							"id": file_index,
						};
						file_name_arr.push(file_josnObj);
						app.files = file_name_arr;
					}
				}
			}
		}
	}
}

function detect_file(e) {
	let id = e.id;
	let index = id.indexOf("_");
	let delect_id = id.substring(index + 1);
	app.files.splice(delect_id, 1);
	file_arr.splice(delect_id, 1);
	console.log(file_arr);
	for(let i = 0; i < app.files.length; i++) {
		app.files[i].id = "file_" + i;
	}
	$('#files_jz').val('');
}

function mx() {
	$("#ding").before(`
		<li>
			<div class='item-content'>
				<div class='item-inner' style='padding: 0px;'>
					<div class='item-input srk_bz q_padding' style='width:48%;'>
						<input id='zb_srk' placeholder='请输入' type='text' />
					</div>
					<div class='item-input' style='margin-top: 2px;margin-left: 5px;'>
						<input id='yb_srk' placeholder='请输入' type='text' />
					</div>
				</div>
			</div>
		</li>
	`);
}

$(function() {
	$("#submit_btn").click(function() {
		form_data.add(file_arr);
		console.log(form_data);
//		$("#form_bd").submit();
	});
});