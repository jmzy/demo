$("#picker").picker({
    toolbarTemplate: '<header class="bar bar-nav">\
    <button class="button button-link pull-left"></button>\
    <button class="button button-link pull-right close-picker">确定</button>\
    <h1 class="title">请输入</h1>\
    </header>',
    cols: [{
        textAlign: 'center',
        values: ['请选择','直接客户','中间商','同行','其他']
    }]
});