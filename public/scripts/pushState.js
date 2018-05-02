var slideshow =
'<link id="ss1" rel="stylesheet" href="public/slideshow/css/responsiveslides.css">'
+ '<link  id="set2" rel="stylesheet" type="text/css" href="public/css/set2.css" />'
+'<link id="ss2" rel="stylesheet" href="public/slideshow/css/slideshow.css">'
+ '<script id ="ss3" src="public/vendor/jquery/jquery.min.js"></script>'
+ '<script id ="ss4" src="public/slideshow/js/responsiveslides.min.js"></script>'
+ `<script id="ss5">  $(function () {
            $("#slider4").responsiveSlides({
              auto: false,
              pager: false,
              nav: true,
              speed: 500,
              namespace: "callbacks",
            });
          });
        </script>`;
var map =
        '<script id="mapi" src="public/js/map.js" > </script>'
        + '<script id="mapi" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1zPG01N5oNIdVfKZR9SGAB12E6xRqxh0&callback=initMap" ></script>';

function loadContent(url){
console.log("done");
    $.get(url).done(function (data) {
        $("#contentHolder").html(data);
    })
}
function loadScript(file){
$.ajax({
dataType: "script",
url: file,
cache: true,
}).done(function(){
    $('#scripts').append('<script id="temp"  href="'+file+'"/></script>');
}).fail( function(){
    location.reload();
});
}

function deleteScript(route){
$('script[src="'+route+'"]').remove();
}

function loadCSS(filename){
    $.ajax({
        type: "GET",
        async: true,
        url: "public/css/"+filename+".css"
    }).done(function(){
        $('head').append('<link id="otros" rel="stylesheet" type="text/css" href="public/css/'+filename+'.css"/>');
        console.log("found");
    }).fail(function () {
        console.log("not found");
    })
}

function deleteCSS(id){
$(id).remove();
}

$(function () {
var load = function (url) {
    $.get(url).done(function (data) {
        //$("#contentHolder").html(data);
        console.log(url);
        if( url != 'index.php'){
            deleteCSS("#ss1");
            deleteCSS("#ss2");
            deleteCSS("#ss3");
            deleteCSS("#ss4");
            deleteCSS("#ss5");
            deleteCSS("#otros");
            deleteCSS("#set2");
            var filename = url.substr(0, url.lastIndexOf('.')) || url;
            if( !($('head').has("#otros").length > 0) ){
                console.log(filename+" file name!");
                loadCSS(filename);
            }else{
                console.log(filename+" file doesn't exist!");
            }
        }else{
            $('#otros').remove();
            $('#temp').remove();
        }
        url = url + ' #contentHolder';
        console.log(url);
       $('#contentHolder').load(url);
        url = url.substr(0,url.lastIndexOf('.'));
        if(  url == 'index' ){
            console.log("true");
            deleteCSS("#ss1");
            deleteCSS("#ss2");
            deleteCSS("#ss3");
            deleteCSS("#ss4");
            deleteCSS("#ss5");
            deleteCSS("#otros");
            deleteCSS("#temp");
            $('head').append(slideshow);
        }
        if(  url == 'map' ){
            console.log("map url");
            $('#ss1').remove();
            $('#ss2').remove();
            $('#ss3').remove();
            $('#ss4').remove();
            $('#ss5').remove();
            $('#otros').remove();
            loadScript("public/scripts/map.js");
            loadScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyA1zPG01N5oNIdVfKZR9SGAB12E6xRqxh0&callback=initMap");
        }
    })
};

$(document).on('click', '#navBtn', function (e) {
    e.preventDefault();

    var $this = $(this),
        url = $this.attr("href"),
        url = url.substr(0,url.lastIndexOf('?')),
        title = $this.text();
        console.log("url que se envio:" + url ),

    history.pushState({
        url: url,
        title: title
    }, title, url);

    document.title = title;

    load(url);
});

$(window).on('popstate', function (e) {
    var state = e.originalEvent.state;
    if (state !== null) {
        document.title = state.title;
        load(state.url);
    } else {
        document.title = '??';
        $("#contentHolder").empty();
    }
});
});
