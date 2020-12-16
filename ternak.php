<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        #map {
            width: 900px;
            height: 580px;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map" class="ml-4 mt-2">
        </div>
        <!-- Tampil Data
        <div class="mt-4 ml-4">
           
        <a href="tampil-data.php" class="btn btn-primary">Tampil Data</a>
        </div>
         -->
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/multi-style-layer.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/Yogyakarta_0.js"></script>
        <script src="data/GunungKidul_1.js"></script>
        <script src="data/Bantul_2.js"></script>
        <script src="data/KulonProgo_3.js"></script>
        <script src="data/Sleman_4.js"></script>
        <script src="data/farm_point_5.php"></script>
        <script>
         L.ImageOverlay.include({
        getBounds: function()
        {
            return  this._bounds;
        }
        });
        var map = L.map('map', {
            zoomControl:true, maxZoom:16, minZoom:8
        })
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            if (bounds_group.getLayers().length) {
                map.fitBounds(bounds_group.getBounds());
            }
        }
        function pop_Yogyakarta_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kab/Kota</th>\
                        <td>' + (feature.properties['Kab/Kota'] !== null ? autolinker.link(feature.properties['Kab/Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2016</th>\
                        <td>' + (feature.properties['kuda2016'] !== null ? autolinker.link(feature.properties['kuda2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2016</th>\
                        <td>' + (feature.properties['sapi2016'] !== null ? autolinker.link(feature.properties['sapi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapiP2016</th>\
                        <td>' + (feature.properties['sapiP2016'] !== null ? autolinker.link(feature.properties['sapiP2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbau2016</th>\
                        <td>' + (feature.properties['kbau2016'] !== null ? autolinker.link(feature.properties['kbau2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kmbing2016</th>\
                        <td>' + (feature.properties['kmbing2016'] !== null ? autolinker.link(feature.properties['kmbing2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2016</th>\
                        <td>' + (feature.properties['dmba2016'] !== null ? autolinker.link(feature.properties['dmba2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2016</th>\
                        <td>' + (feature.properties['bbi2016'] !== null ? autolinker.link(feature.properties['bbi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2015</th>\
                        <td>' + (feature.properties['kuda2015'] !== null ? autolinker.link(feature.properties['kuda2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2015</th>\
                        <td>' + (feature.properties['sapi2015'] !== null ? autolinker.link(feature.properties['sapi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapiP2015</th>\
                        <td>' + (feature.properties['sapiP2015'] !== null ? autolinker.link(feature.properties['sapiP2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbau2015</th>\
                        <td>' + (feature.properties['kbau2015'] !== null ? autolinker.link(feature.properties['kbau2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kmbing2015</th>\
                        <td>' + (feature.properties['kmbing2015'] !== null ? autolinker.link(feature.properties['kmbing2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2015</th>\
                        <td>' + (feature.properties['dmba2015'] !== null ? autolinker.link(feature.properties['dmba2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2015</th>\
                        <td>' + (feature.properties['bbi2015'] !== null ? autolinker.link(feature.properties['bbi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Yogyakarta_0_0() {
            return {
                pane: 'pane_Yogyakarta_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,206,227,1.0)',
                interactive: true,
            }
        }
        function style_Yogyakarta_0_1() {
            return {
                pane: 'pane_Yogyakarta_0',
                opacity: 1,
                color: 'rgba(166,206,227,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_Yogyakarta_0');
        map.getPane('pane_Yogyakarta_0').style.zIndex = 400;
        map.getPane('pane_Yogyakarta_0').style['mix-blend-mode'] = 'normal';
        var layer_Yogyakarta_0 = new L.geoJson.multiStyle(json_Yogyakarta_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Yogyakarta_0',
            layerName: 'layer_Yogyakarta_0',
            pane: 'pane_Yogyakarta_0',
            onEachFeature: pop_Yogyakarta_0,
            styles: [style_Yogyakarta_0_0,style_Yogyakarta_0_1,]
        });
        bounds_group.addLayer(layer_Yogyakarta_0);
        map.addLayer(layer_Yogyakarta_0);
        function pop_GunungKidul_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kab/Kota</th>\
                        <td>' + (feature.properties['Kab/Kota'] !== null ? autolinker.link(feature.properties['Kab/Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2016</th>\
                        <td>' + (feature.properties['kuda2016'] !== null ? autolinker.link(feature.properties['kuda2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2016</th>\
                        <td>' + (feature.properties['sapi2016'] !== null ? autolinker.link(feature.properties['sapi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapiP2016</th>\
                        <td>' + (feature.properties['sapiP2016'] !== null ? autolinker.link(feature.properties['sapiP2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbau2016</th>\
                        <td>' + (feature.properties['kbau2016'] !== null ? autolinker.link(feature.properties['kbau2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kmbing2016</th>\
                        <td>' + (feature.properties['kmbing2016'] !== null ? autolinker.link(feature.properties['kmbing2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2016</th>\
                        <td>' + (feature.properties['dmba2016'] !== null ? autolinker.link(feature.properties['dmba2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2016</th>\
                        <td>' + (feature.properties['bbi2016'] !== null ? autolinker.link(feature.properties['bbi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2015</th>\
                        <td>' + (feature.properties['kuda2015'] !== null ? autolinker.link(feature.properties['kuda2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2015</th>\
                        <td>' + (feature.properties['sapi2015'] !== null ? autolinker.link(feature.properties['sapi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapiP2015</th>\
                        <td>' + (feature.properties['sapiP2015'] !== null ? autolinker.link(feature.properties['sapiP2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbau2015</th>\
                        <td>' + (feature.properties['kbau2015'] !== null ? autolinker.link(feature.properties['kbau2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kmbing2015</th>\
                        <td>' + (feature.properties['kmbing2015'] !== null ? autolinker.link(feature.properties['kmbing2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2015</th>\
                        <td>' + (feature.properties['dmba2015'] !== null ? autolinker.link(feature.properties['dmba2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2015</th>\
                        <td>' + (feature.properties['bbi2015'] !== null ? autolinker.link(feature.properties['bbi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_GunungKidul_1_0() {
            return {
                pane: 'pane_GunungKidul_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(251,154,153,1.0)',
                interactive: true,
            }
        }
        function style_GunungKidul_1_1() {
            return {
                pane: 'pane_GunungKidul_1',
                opacity: 1,
                color: 'rgba(251,154,153,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_GunungKidul_1');
        map.getPane('pane_GunungKidul_1').style.zIndex = 401;
        map.getPane('pane_GunungKidul_1').style['mix-blend-mode'] = 'normal';
        var layer_GunungKidul_1 = new L.geoJson.multiStyle(json_GunungKidul_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_GunungKidul_1',
            layerName: 'layer_GunungKidul_1',
            pane: 'pane_GunungKidul_1',
            onEachFeature: pop_GunungKidul_1,
            styles: [style_GunungKidul_1_0,style_GunungKidul_1_1,]
        });
        bounds_group.addLayer(layer_GunungKidul_1);
        map.addLayer(layer_GunungKidul_1);
        function pop_Bantul_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kab/Kota</th>\
                        <td>' + (feature.properties['Kab/Kota'] !== null ? autolinker.link(feature.properties['Kab/Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2016</th>\
                        <td>' + (feature.properties['kuda2016'] !== null ? autolinker.link(feature.properties['kuda2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2016</th>\
                        <td>' + (feature.properties['sapi2016'] !== null ? autolinker.link(feature.properties['sapi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbau2016</th>\
                        <td>' + (feature.properties['kbau2016'] !== null ? autolinker.link(feature.properties['kbau2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kmbing2016</th>\
                        <td>' + (feature.properties['kmbing2016'] !== null ? autolinker.link(feature.properties['kmbing2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2016</th>\
                        <td>' + (feature.properties['dmba2016'] !== null ? autolinker.link(feature.properties['dmba2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2016</th>\
                        <td>' + (feature.properties['bbi2016'] !== null ? autolinker.link(feature.properties['bbi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2015</th>\
                        <td>' + (feature.properties['kuda2015'] !== null ? autolinker.link(feature.properties['kuda2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2015</th>\
                        <td>' + (feature.properties['sapi2015'] !== null ? autolinker.link(feature.properties['sapi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapiP2016</th>\
                        <td>' + (feature.properties['sapiP2016'] !== null ? autolinker.link(feature.properties['sapiP2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapiP2015</th>\
                        <td>' + (feature.properties['sapiP2015'] !== null ? autolinker.link(feature.properties['sapiP2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbau2015</th>\
                        <td>' + (feature.properties['kbau2015'] !== null ? autolinker.link(feature.properties['kbau2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kmbing2015</th>\
                        <td>' + (feature.properties['kmbing2015'] !== null ? autolinker.link(feature.properties['kmbing2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2015</th>\
                        <td>' + (feature.properties['dmba2015'] !== null ? autolinker.link(feature.properties['dmba2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2015</th>\
                        <td>' + (feature.properties['bbi2015'] !== null ? autolinker.link(feature.properties['bbi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Bantul_2_0() {
            return {
                pane: 'pane_Bantul_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(37,28,131,1.0)',
                interactive: true,
            }
        }
        function style_Bantul_2_1() {
            return {
                pane: 'pane_Bantul_2',
                opacity: 1,
                color: 'rgba(37,28,131,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_Bantul_2');
        map.getPane('pane_Bantul_2').style.zIndex = 402;
        map.getPane('pane_Bantul_2').style['mix-blend-mode'] = 'normal';
        var layer_Bantul_2 = new L.geoJson.multiStyle(json_Bantul_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Bantul_2',
            layerName: 'layer_Bantul_2',
            pane: 'pane_Bantul_2',
            onEachFeature: pop_Bantul_2,
            styles: [style_Bantul_2_0,style_Bantul_2_1,]
        });
        bounds_group.addLayer(layer_Bantul_2);
        map.addLayer(layer_Bantul_2);
        function pop_KulonProgo_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kab/Kota</th>\
                        <td>' + (feature.properties['Kab/Kota'] !== null ? autolinker.link(feature.properties['Kab/Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2016</th>\
                        <td>' + (feature.properties['sapi2016'] !== null ? autolinker.link(feature.properties['sapi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2016</th>\
                        <td>' + (feature.properties['kuda2016'] !== null ? autolinker.link(feature.properties['kuda2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapiP2016</th>\
                        <td>' + (feature.properties['sapiP2016'] !== null ? autolinker.link(feature.properties['sapiP2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbau2016</th>\
                        <td>' + (feature.properties['kbau2016'] !== null ? autolinker.link(feature.properties['kbau2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbing2016</th>\
                        <td>' + (feature.properties['kbing2016'] !== null ? autolinker.link(feature.properties['kbing2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2016</th>\
                        <td>' + (feature.properties['dmba2016'] !== null ? autolinker.link(feature.properties['dmba2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2016</th>\
                        <td>' + (feature.properties['bbi2016'] !== null ? autolinker.link(feature.properties['bbi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2015</th>\
                        <td>' + (feature.properties['kuda2015'] !== null ? autolinker.link(feature.properties['kuda2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2015</th>\
                        <td>' + (feature.properties['sapi2015'] !== null ? autolinker.link(feature.properties['sapi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapip2015</th>\
                        <td>' + (feature.properties['sapip2015'] !== null ? autolinker.link(feature.properties['sapip2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kerbau2015</th>\
                        <td>' + (feature.properties['kerbau2015'] !== null ? autolinker.link(feature.properties['kerbau2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbing2015</th>\
                        <td>' + (feature.properties['kbing2015'] !== null ? autolinker.link(feature.properties['kbing2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">dmba2015</th>\
                        <td>' + (feature.properties['dmba2015'] !== null ? autolinker.link(feature.properties['dmba2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">bbi2015</th>\
                        <td>' + (feature.properties['bbi2015'] !== null ? autolinker.link(feature.properties['bbi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KulonProgo_3_0() {
            return {
                pane: 'pane_KulonProgo_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(36,176,214,1.0)',
                interactive: true,
            }
        }
        function style_KulonProgo_3_1() {
            return {
                pane: 'pane_KulonProgo_3',
                opacity: 1,
                color: 'rgba(36,176,214,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_KulonProgo_3');
        map.getPane('pane_KulonProgo_3').style.zIndex = 403;
        map.getPane('pane_KulonProgo_3').style['mix-blend-mode'] = 'normal';
        var layer_KulonProgo_3 = new L.geoJson.multiStyle(json_KulonProgo_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KulonProgo_3',
            layerName: 'layer_KulonProgo_3',
            pane: 'pane_KulonProgo_3',
            onEachFeature: pop_KulonProgo_3,
            styles: [style_KulonProgo_3_0,style_KulonProgo_3_1,]
        });
        bounds_group.addLayer(layer_KulonProgo_3);
        map.addLayer(layer_KulonProgo_3);
        function pop_Sleman_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kab/Kota</th>\
                        <td>' + (feature.properties['Kab/Kota'] !== null ? autolinker.link(feature.properties['Kab/Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sapi2016</th>\
                        <td>' + (feature.properties['Sapi2016'] !== null ? autolinker.link(feature.properties['Sapi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kuda2016</th>\
                        <td>' + (feature.properties['Kuda2016'] !== null ? autolinker.link(feature.properties['Kuda2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SapiP2016</th>\
                        <td>' + (feature.properties['SapiP2016'] !== null ? autolinker.link(feature.properties['SapiP2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kerbau</th>\
                        <td>' + (feature.properties['Kerbau'] !== null ? autolinker.link(feature.properties['Kerbau'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kbing2016</th>\
                        <td>' + (feature.properties['Kbing2016'] !== null ? autolinker.link(feature.properties['Kbing2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>Dmba2016</strong><br />' + (feature.properties['Dmba2016'] !== null ? autolinker.link(feature.properties['Dmba2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>Bbi2016</strong><br />' + (feature.properties['Bbi2016'] !== null ? autolinker.link(feature.properties['Bbi2016'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kuda2015</th>\
                        <td>' + (feature.properties['kuda2015'] !== null ? autolinker.link(feature.properties['kuda2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapi2015</th>\
                        <td>' + (feature.properties['sapi2015'] !== null ? autolinker.link(feature.properties['sapi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sapip2015</th>\
                        <td>' + (feature.properties['sapip2015'] !== null ? autolinker.link(feature.properties['sapip2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kerbau2015</th>\
                        <td>' + (feature.properties['kerbau2015'] !== null ? autolinker.link(feature.properties['kerbau2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kbing2015</th>\
                        <td>' + (feature.properties['kbing2015'] !== null ? autolinker.link(feature.properties['kbing2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">domba2015</th>\
                        <td>' + (feature.properties['domba2015'] !== null ? autolinker.link(feature.properties['domba2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">babi2015</th>\
                        <td>' + (feature.properties['babi2015'] !== null ? autolinker.link(feature.properties['babi2015'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Sleman_4_0() {
            return {
                pane: 'pane_Sleman_4',
                opacity: 1,
                color: 'rgba(255,255,255,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        function style_Sleman_4_1() {
            return {
                pane: 'pane_Sleman_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,165,24,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Sleman_4');
        map.getPane('pane_Sleman_4').style.zIndex = 404;
        map.getPane('pane_Sleman_4').style['mix-blend-mode'] = 'normal';
        var layer_Sleman_4 = new L.geoJson.multiStyle(json_Sleman_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Sleman_4',
            layerName: 'layer_Sleman_4',
            pane: 'pane_Sleman_4',
            onEachFeature: pop_Sleman_4,
            styles: [style_Sleman_4_0,style_Sleman_4_1,]
        });
        bounds_group.addLayer(layer_Sleman_4);
        map.addLayer(layer_Sleman_4);
        function pop_farm_point_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nama</th>\
                        <td>' + (feature.properties['nama'] !== null ? autolinker.link(feature.properties['nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">alamat</th>\
                        <td>' + (feature.properties['alamat'] !== null ? autolinker.link(feature.properties['alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">telp</th>\
                        <td>' + (feature.properties['telp'] !== null ? autolinker.link(feature.properties['telp'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_farm_point_5_0() {
            return {
                pane: 'pane_farm_point_5',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(231,113,72,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_farm_point_5');
        map.getPane('pane_farm_point_5').style.zIndex = 405;
        map.getPane('pane_farm_point_5').style['mix-blend-mode'] = 'normal';
        var layer_farm_point_5 = new L.geoJson(json_farm_point_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_farm_point_5',
            layerName: 'layer_farm_point_5',
            pane: 'pane_farm_point_5',
            onEachFeature: pop_farm_point_5,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_farm_point_5_0(feature));
            },
        });
        bounds_group.addLayer(layer_farm_point_5);
        map.addLayer(layer_farm_point_5);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/farm_point_5.png" /> farm_point': layer_farm_point_5,'<img src="legend/Sleman_4.png" /> Sleman': layer_Sleman_4,'<img src="legend/KulonProgo_3.png" /> KulonProgo': layer_KulonProgo_3,'<img src="legend/Bantul_2.png" /> Bantul': layer_Bantul_2,'<img src="legend/GunungKidul_1.png" /> Gunung Kidul': layer_GunungKidul_1,'<img src="legend/Yogyakarta_0.png" /> Yogyakarta': layer_Yogyakarta_0,}).addTo(map);
        setBounds();
        var i = 0;
        layer_Yogyakarta_0.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Kab/Kota'] !== null?String('<div style="color: #ffffff; font-size: 18pt; font-weight: bold; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Kab/Kota']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Yogyakarta_0'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_GunungKidul_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Kab/Kota'] !== null?String('<div style="color: #ffffff; font-size: 18pt; font-weight: bold; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Kab/Kota']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_GunungKidul_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_Bantul_2.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Kab/Kota'] !== null?String('<div style="color: #ffffff; font-size: 18pt; font-weight: bold; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Kab/Kota']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Bantul_2'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_KulonProgo_3.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Kab/Kota'] !== null?String('<div style="color: #ffffff; font-size: 18pt; font-weight: bold; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Kab/Kota']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_KulonProgo_3'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_Sleman_4.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Kab/Kota'] !== null?String('<div style="color: #ffffff; font-size: 18pt; font-weight: bold; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Kab/Kota']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Sleman_4'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_farm_point_5.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['nama'] !== null?String('<div style="color: #ffffff; font-size: 10pt; font-weight: bold; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['nama']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_farm_point_5'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_Yogyakarta_0,layer_GunungKidul_1,layer_Bantul_2,layer_KulonProgo_3,layer_Sleman_4,layer_farm_point_5]);
        map.on("zoomend", function(){
            resetLabels([layer_Yogyakarta_0,layer_GunungKidul_1,layer_Bantul_2,layer_KulonProgo_3,layer_Sleman_4,layer_farm_point_5]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Yogyakarta_0,layer_GunungKidul_1,layer_Bantul_2,layer_KulonProgo_3,layer_Sleman_4,layer_farm_point_5]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Yogyakarta_0,layer_GunungKidul_1,layer_Bantul_2,layer_KulonProgo_3,layer_Sleman_4,layer_farm_point_5]);
        });
        </script>
    </body>
</html>
