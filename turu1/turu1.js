const showBalloon_Atou1F = () => {
var ele = $('#Atou1F_fukidasi');
    if (ele.css('visibility') == 'hidden'){
        ele.css('visibility', 'visible');
    } else {
        ele.css('visibility', 'hidden');
    }
/*他の吹き出しを非表示*/
var ele = $('#library_fukidasi');
ele.css('visibility', 'hidden');
}
const showBalloon_library = () => {
    var ele = $('#library_fukidasi');
        if (ele.css('visibility') == 'hidden'){
            ele.css('visibility', 'visible');
        } else {
            ele.css('visibility', 'hidden');
        }
    /*他の吹き出しを非表示*/
    var ele = $('#Atou1F_fukidasi');
    ele.css('visibility', 'hidden');
    }