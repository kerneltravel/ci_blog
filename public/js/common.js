$(function () {
    if (!is_index()) {  // 非首页禁止IE浏览器访问
        if (is_ie()) {
            alert('本站不支持IE访问，请使用Chrome或Firefox');
            window.location.href = '/';
        }
    }
});

//----------------------------------------------------------------------

/**
 * 判断当前访问地址是否为首页
 */
function is_index () {
    var url = window.location.href;
    var ret = url.split('/');
    var end = ret[ret.length-1];
    if (!end || end === 'index.php') {
        return true;
    }
    return false;
}



/**
 * 判断是否是IE浏览器
 */
function is_ie () {
    var info = navigator.userAgent.toLowerCase();
    if (info.indexOf('msie') > 0) {
        return true;
    }
    return false;
}
