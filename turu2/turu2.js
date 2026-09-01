const showBalloon_library = () => {
var ele = $('#library_fukidasi');
    if (ele.css('visibility') == 'hidden'){
        ele.css('visibility', 'visible');
    } else {
        ele.css('visibility', 'hidden');
    }
var ele = $('#lcA_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcF_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcB_fukidasi');
ele.css('visibility', 'hidden');
}

const showBalloon_lcA = () => {
var ele = $('#lcA_fukidasi');
    if (ele.css('visibility') == 'hidden'){
        ele.css('visibility', 'visible');
    } else {
        ele.css('visibility', 'hidden');
    }
var ele = $('#library_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcF_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcB_fukidasi');
ele.css('visibility', 'hidden');
}

const showBalloon_lcF = () => {
var ele = $('#lcF_fukidasi');
    if (ele.css('visibility') == 'hidden'){
        ele.css('visibility', 'visible');
    } else {
        ele.css('visibility', 'hidden');
    }
var ele = $('#library_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcA_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcB_fukidasi');
ele.css('visibility', 'hidden');
}

const showBalloon_lcB = () => {
var ele = $('#lcB_fukidasi');
    if (ele.css('visibility') == 'hidden'){
        ele.css('visibility', 'visible');
    } else {
        ele.css('visibility', 'hidden');
    }
var ele = $('#library_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcA_fukidasi');
ele.css('visibility', 'hidden');
var ele = $('#lcF_fukidasi');
ele.css('visibility', 'hidden');
}