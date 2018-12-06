function getCookie(w){
    cName = "";
    pCOOKIES = new Array();
    pCOOKIES = document.cookie.split('; ');
    for(i = 0; i < pCOOKIES.length; i++) {
        NmeVal  = new Array();
        NmeVal  = pCOOKIES[i].split('=');
        if(NmeVal[0] == w) {
            cName = decodeURIComponent(NmeVal[1]);
        }
    }
    return cName;
}
// 
// Modify the setCookie function to suit your needs
// see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie
//
function setCookie(name, value, expires, path, domain) {
    var cookieVal = name + "=" + encodeURIComponent(value) + "; ";
    if (expires) {
        cookieVal += "expires=" + expires.toUTCString() + "; ";
    }
    if (path) {
        cookieVal += "path=" + path + "; ";
    }
    if (domain) {
        cookieVal += "domain=" + domain + "; ";
      }
    cookieVal += "secure";
    document.cookie = cookieVal;
}
function setTimeOut() {
    setTimeout(function() {
        $("#cookiePolicy").fadeOut("slow", function() {
            $("#cookiePolicy").remove();
        });
    // Set timeout below if you want notification to fade out (default 30 s)
    }, 30000);
}
function removeDivs() {
    $("#cookiePolicy").fadeOut("slow", function() {
        $("#cookiePolicy").remove();
    });
}
$(document).ready(function() {
    cookieValue = getCookie('harGodtatt');
    if (cookieValue == "") {
        $("#cookiePolicy").fadeIn("slow");
        // Uncomment function call below if you want the notification to fade out
        //setTimeOut();
    }
    // Use below ID if you want notification to be removed on priv policy link
    $('#linkPrivacyPolicy').bind('click', function() {
        removeDivs();
    });
    $('#cookiePolicyAccept').bind('click', function() {
        removeDivs();
        var expiryDate = new Date();
        // Set time to expiration of cookie here (default 365 days)
        expiryDate.setDate(expiryDate.getDate() + 365);
        // Set your cookie variables below
        setCookie('harGodtatt', '1', expiryDate, '/', '.fokep.no');
    });
});
