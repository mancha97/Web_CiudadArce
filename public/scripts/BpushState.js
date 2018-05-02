var slideshow =
    '<link id="ss1" rel="stylesheet" href="public/slideshow/css/responsiveslides.css">'
    + '<link id="ss2" rel="stylesheet" href="public/slideshow/css/slideshow.css">'
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

function loadContent(url){
    console.log("done");
        $.get(url).done(function (data) {
            $("#contentHolder").html(data);
        })
}

$(function () {
    var load = function (url) {
        $.get(url).done(function (data) {
            //$("#contentHolder").html(data);
            console.log(url);
            if( url != 'index.php'){
                var filename = url.substr(0, url.lastIndexOf('.')) || url;
                if( !($('head').has("#otros").length > 0) ){
                    console.log(filename+" file name!");
                        $(function(){
                            $.ajax({
                                type: "GET",
                                async: true,
                                url: "http://localhost/guancora/public/css/"+filename+".css"
                            }).done(function(){
                                $('head').append('<link id="otros" rel="stylesheet" type="text/css" href="public/css/'+filename+'.css"/>');
                                console.log("found");
                            }).fail(function () {
                                console.log("not found");
                            })
                        })
                    }else{
                        console.log(filename+" file doesn't exist!");
                }

            }else{
                $('#otros').remove();
            }
            url = url + ' #contentHolder';
            console.log(url);
           $('#contentHolder').load(url);
            url = url.substr(0,url.lastIndexOf('.'));
            if(  url == 'index'  /* !($("#contentHolder").has("#slider4").length > 0)
                /*!( $('head').has("#ss1").length > 0 &&
                $('head').has("#ss2").length  > 0 &&
                $('head').has("#ss3").length > 0 &&
                $('head').has("#ss4").length > 0 &&
                $('head').has("#ss5").length > 0 ) */
            ){
                console.log("true");
                $('#ss1').remove();
                $('#ss2').remove();
                $('#ss3').remove();
                $('#ss4').remove();
                $('#ss5').remove();
                $('#otros').remove();
                $('head').append(slideshow);
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
