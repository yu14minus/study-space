const showBalloon_keieikeizai = () => {
var ele = $('#keieikeizai_fukidasi');
    if (ele.css('visibility') == 'hidden'){
        ele.css('visibility', 'visible');
    } else {
        ele.css('visibility', 'hidden');
    }
/*他の吹き出しを非表示*/
var ele = $('#syakaikagaku_fukidasi');
ele.css('visibility', 'hidden');
}

const showBalloon_syakaikagaku = () => {
    var ele = $('#syakaikagaku_fukidasi');
        if (ele.css('visibility') == 'hidden'){
            ele.css('visibility', 'visible');
        } else {
            ele.css('visibility', 'hidden');
        }
    /*他の吹き出しを非表示*/
    var ele = $('#keieikeizai_fukidasi');
    ele.css('visibility', 'hidden');
    }