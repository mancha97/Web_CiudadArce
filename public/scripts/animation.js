$('#hideMe').css("display", "none");
var welcomeAnim  = document.createElement("link");
welcomeAnim.rel = "stylesheet";
welcomeAnim.type = "text/css";
welcomeAnim.href = "public/css/welcome.css";


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var anim = getCookie("welcome");
    console.log(anim);
    if ( anim == "welcome" ) {
        console.log("desaparece");
        $('#hideMe').css("display", "none");
        $('#mainNav').hide(0).show(0);
        $('#slides').hide(0).show(0);
        $('#btns').hide(0).show(0);
        $('footer').hide(0).show(0);
    } else {
        setCookie("welcome", "welcome", 100);
        document.getElementsByTagName("head")[0].appendChild(welcomeAnim);
        $('#hideMe').show();
        console.log("aparece");
        $('#mainNav').hide(0).delay(8700).addClass("animated fadeInDown").show(0);
        $('#wrapper').hide(0).delay(9800).addClass("animated fadeInLeft").show(0);
        $('#btns').hide(0).delay(10100).addClass("animated fadeInUp").show(0);
        $('footer').hide(0).delay(1100).show(0);
        $('#hideMe').delay(6000).hide(0);
    }
}


