const showBalloon_rakomo = () => {
var ele = $('#rakomo_fukidasi');
    if (ele.css('visibility') == 'hidden'){
        ele.css('visibility', 'visible');
    } else {
        ele.css('visibility', 'hidden');
    }
/*他の吹き出しを非表示*/
var ele = $('#tosyokan_fukidasi');
ele.css('visibility', 'hidden');
}

const showBalloon_tosyokan = () => {
    var ele = $('#tosyokan_fukidasi');
        if (ele.css('visibility') == 'hidden'){
            ele.css('visibility', 'visible');
        } else {
            ele.css('visibility', 'hidden');
        }
    /*他の吹き出しを非表示*/
    var ele = $('#rakomo_fukidasi');
    ele.css('visibility', 'hidden');
    }