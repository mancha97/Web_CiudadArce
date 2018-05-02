var map;
// var marker;
// var infowindow;
var a;
var b;
function initMap() {

    //Los parametros del mapa estilizado
    var styledMapType = new google.maps.StyledMapType(
        [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ],
        { name: 'Styled Map' });

    //creando el mapa estilizado
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 13.829595, lng: -89.4257127},
        zoom: 12,
        mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                'styled_map']
        }
    });

    //seteando y asignando el mapa estilizado
    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');

    //Creando el poligono rojo que encierra el area de ciudad arce
    var tempObject = {
        "type": "FeatureCollection",
        "features": [
          {
            "type": "Feature",
            "properties": {
              "stroke": "#ff0d0d",
              "stroke-width": 2,
              "stroke-opacity": 1,
              "fill": "#ffff80",
              "fill-opacity": 0.1
            },
            "geometry": {
              "type": "Polygon",
              "coordinates": [
                [
                  [
                    -89.46033954620358,
                    13.865038700730087
                  ],
                  [
                    -89.4621419906616,
                    13.865080365641287
                  ],
                  [
                    -89.46310758590697,
                    13.863122106730886
                  ],
                  [
                    -89.45999622344968,
                    13.858622215162132
                  ],
                  [
                    -89.45647716522214,
                    13.851872214332976
                  ],
                  [
                    -89.45802211761472,
                    13.851038867296625
                  ],
                  [
                    -89.45905208587644,
                    13.850372187515758
                  ],
                  [
                    -89.45991039276122,
                    13.849372164258234
                  ],
                  [
                    -89.46042537689206,
                    13.84803879322126
                  ],
                  [
                    -89.46076869964597,
                    13.84670541453495
                  ],
                  [
                    -89.46111202239987,
                    13.845205354370496
                  ],
                  [
                    -89.4610261917114,
                    13.84403863421729
                  ],
                  [
                    -89.45991039276122,
                    13.842705232587209
                  ],
                  [
                    -89.45793628692626,
                    13.840705115804969
                  ],
                  [
                    -89.45707798004148,
                    13.83962171203175
                  ],
                  [
                    -89.45656299591063,
                    13.837204870043829
                  ],
                  [
                    -89.45724964141846,
                    13.836288130306901
                  ],
                  [
                    -89.45793628692626,
                    13.83470466225225
                  ],
                  [
                    -89.45827960968016,
                    13.833371207110368
                  ],
                  [
                    -89.45948123931883,
                    13.832287769180653
                  ],
                  [
                    -89.45991039276122,
                    13.83062093174651
                  ],
                  [
                    -89.4610261917114,
                    13.829037425126323
                  ],
                  [
                    -89.4610261917114,
                    13.828037310131272
                  ],
                  [
                    -89.46094036102292,
                    13.826703816786985
                  ],
                  [
                    -89.46033954620358,
                    13.825620347820347
                  ],
                  [
                    -89.45982456207274,
                    13.824370185054933
                  ],
                  [
                    -89.45982456207274,
                    13.820994712061353
                  ],
                  [
                    -89.45973873138425,
                    13.818827715958951
                  ],
                  [
                    -89.46008205413816,
                    13.818556840028595
                  ],
                  [
                    -89.46154117584227,
                    13.818160943871503
                  ],
                  [
                    -89.46257114410398,
                    13.817806720423809
                  ],
                  [
                    -89.46411609649657,
                    13.8174316597156
                  ],
                  [
                    -89.46720600128171,
                    13.816452331686317
                  ],
                  [
                    -89.47072505950928,
                    13.815577184006893
                  ],
                  [
                    -89.47149753570554,
                    13.815243793550033
                  ],
                  [
                    -89.472119808197,
                    13.81457701120531
                  ],
                  [
                    -89.47278499603269,
                    13.81397273805723
                  ],
                  [
                    -89.47338581085204,
                    13.813201766593311
                  ],
                  [
                    -89.47424411773679,
                    13.812201583595952
                  ],
                  [
                    -89.47510242462155,
                    13.811201396306156
                  ],
                  [
                    -89.47681903839108,
                    13.810117855231942
                  ],
                  [
                    -89.47716236114499,
                    13.808867609271944
                  ],
                  [
                    -89.47776317596433,
                    13.807534006190366
                  ],
                  [
                    -89.4778490066528,
                    13.805866991610664
                  ],
                  [
                    -89.4778490066528,
                    13.80411661347467
                  ],
                  [
                    -89.4778490066528,
                    13.802532926697028
                  ],
                  [
                    -89.47776317596433,
                    13.80069917067739
                  ],
                  [
                    -89.47733402252196,
                    13.799865640448036
                  ],
                  [
                    -89.47673320770261,
                    13.799032107240247
                  ],
                  [
                    -89.47578907012937,
                    13.798198571054249
                  ],
                  [
                    -89.4746732711792,
                    13.797198323699906
                  ],
                  [
                    -89.47441577911374,
                    13.795864653890378
                  ],
                  [
                    -89.47432994842528,
                    13.79453097645813
                  ],
                  [
                    -89.47432994842528,
                    13.79286386894935
                  ],
                  [
                    -89.47407245635983,
                    13.791446818204053
                  ],
                  [
                    -89.47407245635983,
                    13.789863045425903
                  ],
                  [
                    -89.47424411773679,
                    13.788862762345559
                  ],
                  [
                    -89.47432994842528,
                    13.787862474979406
                  ],
                  [
                    -89.47544574737546,
                    13.787028898900678
                  ],
                  [
                    -89.47647571563718,
                    13.78619531984602
                  ],
                  [
                    -89.4778490066528,
                    13.784861587169202
                  ],
                  [
                    -89.48093891143797,
                    13.782360817870071
                  ],
                  [
                    -89.46857929229733,
                    13.782360817870071
                  ],
                  [
                    -89.45484638214108,
                    13.785028304170353
                  ],
                  [
                    -89.44386005401608,
                    13.777025753884612
                  ],
                  [
                    -89.4328737258911,
                    13.777025753884612
                  ],
                  [
                    -89.42188739776608,
                    13.777025753884612
                  ],
                  [
                    -89.4109010696411,
                    13.779693301106345
                  ],
                  [
                    -89.39991474151608,
                    13.782360817870071
                  ],
                  [
                    -89.38789844512938,
                    13.7944476213655
                  ],
                  [
                    -89.38433647155762,
                    13.803866558382685
                  ],
                  [
                    -89.39558029174805,
                    13.814827054808205
                  ],
                  [
                    -89.3942928314209,
                    13.81574387905639
                  ],
                  [
                    -89.3906021118164,
                    13.814660359102763
                  ],
                  [
                    -89.38871383666992,
                    13.818327637072297
                  ],
                  [
                    -89.38433647155759,
                    13.817910903846695
                  ],
                  [
                    -89.38399314880368,
                    13.824286840631894
                  ],
                  [
                    -89.3870401382446,
                    13.826162082933976
                  ],
                  [
                    -89.38618183135986,
                    13.833162854054148
                  ],
                  [
                    -89.39167499542233,
                    13.835704748593367
                  ],
                  [
                    -89.39034461975095,
                    13.851288871721358
                  ],
                  [
                    -89.38892841339108,
                    13.86770523996958
                  ],
                  [
                    -89.39326286315915,
                    13.868371869992592
                  ],
                  [
                    -89.3944215774536,
                    13.865038700730087
                  ],
                  [
                    -89.39991474151608,
                    13.857038899242788
                  ],
                  [
                    -89.40815448760983,
                    13.855705572202414
                  ],
                  [
                    -89.4109010696411,
                    13.862372130858851
                  ],
                  [
                    -89.41502094268796,
                    13.86770523996958
                  ],
                  [
                    -89.41502094268796,
                    13.87703788600436
                  ],
                  [
                    -89.42188739776608,
                    13.882370658001737
                  ],
                  [
                    -89.43150043487546,
                    13.883703831835884
                  ],
                  [
                    -89.43562030792233,
                    13.87837109050146
                  ],
                  [
                    -89.43699359893796,
                    13.86770523996958
                  ],
                  [
                    -89.44248676300047,
                    13.862372130858851
                  ],
                  [
                    -89.44935321807861,
                    13.859705530361266
                  ],
                  [
                    -89.46033954620358,
                    13.865038700730087
                  ]
                ]
              ]
            }
          }
        ]
      };

    //agregando el poligono

    map.data.addGeoJson(tempObject);
    //seteando estilo al poligono
    map.data.setStyle({
        fillColor: '#f70000',
        strokeWeight: 1,
        strokeColor: "#f70000",
        fillOpacity: 0.1,
    });
    //marcador ruina de san andres
    var image = 'public/img/m.png';
    var marker = new google.maps.Marker({
     position: {lat: 13.800850,lng:  -89.389333},
     map: map,
     animation: google.maps.Animation.DROP,
     title:'Ruinas de San Andres',
     icon: image
   });
   //marcador termos del rio
   var image2 = 'public/img/water.png';
   var marker2 = new google.maps.Marker({
    position: {lat: 13.814712, lng:  -89.448919},
    map: map, 
    animation: google.maps.Animation.DROP,
    title:'Termos del rio',
    icon: image2
    
  });
  //marcador cascadas de san pedro
  var image3 = 'public/img/water.png';
  var marker3 = new google.maps.Marker({
   position: {lat: 13.820299, lng:  -89.446886},
   map: map,  
   animation: google.maps.Animation.DROP,
   title:'Cascadas de San Pedro',
   icon: image3
 });
 //marcador curva de cojute
 var image4 = 'public/img/resta.png';
 var marker4 = new google.maps.Marker({
  position: {lat: 13.806719, lng:  -89.452132},
  map: map,    
  animation: google.maps.Animation.DROP,
  title:'La Curva de Cojutepeque',
  icon: image4
});


   //contenido de ruina de san andres
   var content = '<div id="content">'+
   '<div id="siteNotice">'+
   '</div>'+
   '<h1 id="firstHeading" class="firstHeading">Ruinas de San Andres</h1>'+
   '<div id="bodyContent">'+
   '<p>San Andrés es un sitio maya prehispánico de El Salvador, cuya larga ocupación se inició alrededor del año 900 a. C. '+
   'como un pueblo agrícola en el valle de Zapotitán del departamento de La Libertad. </p>'+
   '<p >Fuente: Ruinas de San Andres, <a href="https://es.wikipedia.org/wiki/San_Andr%C3%A9s_(sitio_arqueol%C3%B3gico)">'+
   'https://es.wikipedia.org/wiki/San_Andr%C3%A9s_(sitio_arqueol%C)3%B3gico</a></p> '+

   '</div>'+
   '</div>';
   var content2 = '<div id="content">'+
   '<div id="siteNotice">'+
   '</div>'+
   '<h1 id="firstHeading" class="firstHeading">Termos del rio</h1>'+
   '<div id="bodyContent">'+
   '<p>Termos del río un centro turístico que nació en 1999, que se ha vuelto muy popular entre todos los Salvadoreños, cuando las personas visitan por primera vez termos del río quedan encantado visitarlo una segunda vez.</p>'+
   '<p >Fuente: Termos del rio, <a href="http://www.elsv.info/termos-del-rio-parque-acuatico">'+
   '   http://www.elsv.info/termos-del-rio-parque-acuatico</a></p>'+

   '</div>'+
   '</div>';
   var content3 = '<div id="content">'+
   '<div id="siteNotice">'+
   '</div>'+
   '<h1 id="firstHeading" class="firstHeading">Cascadas de San Pedro</h1>'+
   '<div id="bodyContent">'+
   '<p>Este es lugar es muy creativo ya que tiene tres áreas muy importantes, cuenta con dos piscinas: una para niños y otra para adultos.  A la misma vez, y lo que es más llamativo de esto, es su restaurante, en donde la comida es muy exquisita y puede aprovechar variedad de mariscos, y cualquier comida casera muy deliciosa.</p>'+
   '<p >Fuente: Cascadas de San Pedro, <a href="http://tourfamiliares.blogspot.com/2012/09/restaurante-las-cascadas-de-san-pedro.html">'+
   '  http://tourfamiliares.blogspot.com/2012/09/restaurante-las-cascadas-de-san-pedro.html</a></p>'+

   '</div>'+
   '</div>';
   var content4 = '<div id="content">'+
   '<div id="siteNotice">'+
   '</div>'+
   '<h1 id="firstHeading" class="firstHeading">La Curva de Cojutepeque</h1>'+
   '<div id="bodyContent">'+
   '<p>Restaurante la Curva de Cojutepeque. Se encuentra en Ciudad Arce en la entrada a Termos del Rio. Sus instalaciones son amplías para el público. Está rodeado con la naturaleza para vivir grandes experiencias.</p>'+
   '<p >Fuente: La Curva de Cojutepeque, <a href="http://elsalvador.publiboda.com/empresas/datos/salones-banquetes/restaurante-la-curva-de-cojutepeque-ciudad-arce/1868538/">'+
   '  http://elsalvador.publiboda.com/empresas/datos/salones-banquetes/restaurante-la-curva-de-cojutepeque-ciudad-arce/1868538/</a></p>'+

   '</div>'+
   '</div>';

 var infowindow = new google.maps.InfoWindow({
 
});

   //listeners de los marcadores
   marker.addListener('click', function() {
        //dos variables para pasar como "parametro el marker y la info"
        
        a= marker;
        infowindow.setContent(content);
        b=infowindow;
        toggleBounce();
    
       
  });
  marker2.addListener('click', function() {
   
     a= marker2;
     infowindow.setContent(content2);
     b=infowindow;
     toggleBounce();
    
});
marker3.addListener('click', function() {
    
      a= marker3;
      infowindow.setContent(content3);
      b=infowindow;
      toggleBounce();
     
 });
 marker4.addListener('click', function() {
    
      a= marker4;
      infowindow.setContent(content4);
      b=infowindow;
      toggleBounce();
     
 });
 
}
//funcion para animacion y que aparezca informacion del mapa

function toggleBounce() {
    
   
    if (a.getAnimation() !== null) {
        
        b.close();
        a.setAnimation(null);
        
        
        
    } else {
      a.setAnimation(google.maps.Animation.BOUNCE);
      b.open(map, a);
     
      //Un tiempo para quitar de forma smooth la animacion
      
     
    }
  };



