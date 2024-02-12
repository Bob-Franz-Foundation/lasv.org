
(function() {
var f = document.getElementById('cse-search-box');
if (!f) {
f = document.getElementById('searchbox_demo');
}
if (f && f.q) {
var q = f.q;
var n = navigator;
var l = location;
if (n.platform == 'Win32') {
q.style.cssText = 'border: 1px solid #666666; padding: 2px;';
}
var b = function() {
if (q.value == '') {
q.style.background = '#FFFFFF url(\x2Ftemplates_v10\x2Fimages\x2F\mainheader\x2Fsearch_watermark.jpg) left no-repeat';
}
};
var f = function() {
q.style.background = '#ffffff';
};
q.onfocus = f;
q.onblur = b;
if (!/[&?]q=[^&]/.test(l.search)) {
b();
}
}
})();
