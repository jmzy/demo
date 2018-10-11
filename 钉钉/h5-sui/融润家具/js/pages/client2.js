$("#picker").picker({
    toolbarTemplate: '<header class="bar bar-nav">\
    <button class="button button-link pull-left"></button>\
    <button class="button button-link pull-right close-picker">确定</button>\
    <h1 class="title">请输入</h1>\
    </header>',
    cols: [{
        textAlign: 'center',
        values: ['直接客户','中间商','同行','其他']
    }]
});

$("#picker2").picker({
    toolbarTemplate: '<header class="bar bar-nav">\
    <button class="button button-link pull-left"></button>\
    <button class="button button-link pull-right close-picker">确定</button>\
    <h1 class="title">请输入</h1>\
    </header>',
    cols: [{
        textAlign: 'center',
        values: ['请选择（必填）','高','中','低']
    }]
});

$("#picker3").picker({
    toolbarTemplate: '<header class="bar bar-nav">\
    <button class="button button-link pull-left"></button>\
    <button class="button button-link pull-right close-picker">确定</button>\
    <h1 class="title">请输入</h1>\
    </header>',
    cols: [{
        textAlign: 'center',
        values: ['请选择','个体户','公司','集团','机关单位']
    }]
});


$("#picker4").picker({
    toolbarTemplate: '<header class="bar bar-nav">\
    <button class="button button-link pull-left"></button>\
    <button class="button button-link pull-right close-picker">确定</button>\
    <h1 class="title">请输入</h1>\
    </header>',
    cols: [{
        textAlign: 'center',
        values: ['请选择','生产商','代理商','批发商','零售商','中间商','其他']
    }]
});


$("#datetime-picker").datetimePicker({
});