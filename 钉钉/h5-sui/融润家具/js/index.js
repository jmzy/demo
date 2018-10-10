$("#picker").picker({
    toolbarTemplate: '<header class="bar bar-nav">\
    <button class="button button-link pull-left"></button>\
    <button class="button button-link pull-right close-picker">确定</button>\
    <h1 class="title">请输入</h1>\
    </header>',
    cols: [{
        textAlign: 'center',
        values: ['QQ', '微信', '谷歌', 'WHATSAPP', 'SKYPE', '电话', '拜访', '邮件', '阿里', '展会']
    }]
});

$("#datetime-picker").datetimePicker({
});