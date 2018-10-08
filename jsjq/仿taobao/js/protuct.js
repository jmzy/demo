window.onload = function(){
    function idDom(id){
        return document.getElementById(id);
    };

    Element.prototype.siblings = function(callback){
        var siblingElement = [];
        var parentAllElement = [];
        if( ! this.parentNode ){
            return siblingElement;
        };
        parentAllElement = this.parentNode.getElementsByTagName(this.tagName);
        for( var i = 0; i < parentAllElement.length ; i++ ){
            if( parentAllElement[i] != this ){
                siblingElement.push(parentAllElement[i]);
                typeof callback == "function" && callback.call(parentAllElement[i]);
            }
        }
        return siblingElement;
    };

    //protuctMagnifier
    var sImgArr = idDom("smallPhoto").children;
    var mImgDom = idDom("mImg");
    var maxImgWrapDom = idDom("maxImg-wrap");
    var coverDom = idDom("cover");
    var coverWrapDom = idDom("cover-wrap");
    for(let i=0;i<sImgArr.length;i++){
        sImgArr[i].onmouseover = function(){
            var sImgSrc = this.children[0].src;
            var mImgSrc = sImgSrc.replace("miniPhoto","middlePhoto");
            var maxImgSrc = sImgSrc.replace("miniPhoto","maxPhoto");
            mImgDom.src = mImgSrc;
            maxImgWrapDom.style.backgroundImage = "url(" + maxImgSrc +")";
        };
    };

    coverWrapDom.onmouseenter = function(){
        coverDom.style.display = "block";
        maxImgWrapDom.style.display = "block";
    }
    coverWrapDom.onmouseleave = function(){
        coverDom.style.display = "none";
        maxImgWrapDom.style.display = "none";
    }

    coverWrapDom.onmousemove = function(e){
        var e = e || window.event;
        var Left = document.body.scrollLeft || document.documentElement.scrollLeft;
        var Top = document.body.scrollTop || document.documentElement.scrollTop;
        var x = e.pageX ? e.pageX : e.clientX + Left;
        var y = e.pageY ? e.pageY : e.clientY + Top;
        var currentX = x - this.offsetLeft - coverDom.offsetWidth/2;
        var currentY = y - this.offsetTop - coverDom.offsetHeight*2;
        var maxWidth = this.offsetWidth - coverDom.offsetWidth;
        var maxHeight = this.offsetHeight - coverDom.offsetHeight;

        currentX = currentX < 0 ? currentX = 0 : currentX >= maxWidth ? maxWidth : currentX;
        currentY = currentY < 0 ? currentY = 0 : currentY >= maxHeight ? maxHeight : currentY;
        coverDom.style.left = currentX + "px";
        coverDom.style.top = currentY + "px";

        //计算比率
        var maxX = currentX / (this.offsetWidth/2) * 100+"%";
        var maxY = currentY / (this.offsetHeight/2) * 100+"%";
        maxImgWrapDom.style.backgroundPosition = "" + maxX + " " + maxY + "";
    }

    maxImgWrapDom.onmouseenter = function(){
        coverDom.style.display = "none";
        maxImgWrapDom.style.display = "none";
    };

    //protuctDetal
    var proprotuctSize,protuctColor,protuctValue;
    var protuctSizeArr = idDom("protuctSize").children;
    var protuctColorArr = idDom("protuctColor").children;
    function sliblings(dom,back){
        var arr = [];
        for(let i=0;i<dom.length;i++){
            arr.push(i)
        }
        for(let i=0;i<dom.length;i++){
            dom[i].onclick = function(){
                // back = this.children[0].innerText;
                this.style.border = "2px solid red";
                this.children[0].style.border = "1px solid transparent"; 
                // console.log(3+'---'+back)
                for(let o=0;o<arr.length;o++){
                    if(o != i){
                        dom[o].style.border = "2px solid transparent";
                        dom[o].children[0].style.border = "1px solid #afafaf";
                    }
                    // console.log(4+'---'+back)
                }
                return back
                // console.log(5+'---'+back)
            }
        }
        // console.log(6+'---'+back)
    }
    sliblings(protuctSizeArr,proprotuctSize);
    sliblings(protuctColorArr,protuctColor);

    var protuctNum = idDom('protuctNum');
    var fiveTop = idDom('fiveTop');
    var fiveDown = idDom('fiveDown');
    fiveTop.onclick = function(){
        protuctNum.value ++
    }
    fiveDown.onclick = function(){
        if(protuctNum.value < 1){
            return
        }else{protuctNum.value --}
    }

    confirmBuy.onclick = function(){
        alert(proprotuctSize+'--'+protuctColor)
    }

}