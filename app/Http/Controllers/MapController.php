<?php

namespace App\Http\Controllers;

use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class MapController extends Controller
{

    protected $gmap;

    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
    }


    public function index()
    {
        $config['center'] = 'Sydney Airport,Sydney';
        $config['zoom'] = '14';
        $config['map_height'] = '400px';
        $marker['position'] = 'Sydney Airport,Sydney';
        $marker['infowindow_content'] = 'Sydney Airport,Sydney';

        $gmap = new GMaps();

        $gmap->initialize($config);
        $gmap->add_marker($marker);
        $map = $gmap->create_map();
        return view('map',compact('map'));
    }



//    public function index(){
//
//        /******** Custom Map Controls ********/
//
//        $leftTopControls = ['document.getElementById("leftTopControl")']; // values must be html or javascript element
//        $this->gmap->injectControlsInLeftTop = $leftTopControls; // inject into map
//        $leftCenterControls = ['document.getElementById("leftCenterControl")'];
//        $this->gmap->injectControlsInLeftCenter = $leftCenterControls;
//        $leftBottomControls = ['document.getElementById("leftBottomControl")'];
//        $this->gmap->injectControlsInLeftBottom = $leftBottomControls;
//
//        $bottomLeftControls = ['document.getElementById("bottomLeftControl")'];
//        $this->gmap->injectControlsInBottomLeft = $bottomLeftControls;
//        $bottomCenterControls = ['document.getElementById("bottomCenterControl")'];
//        $this->gmap->injectControlsInBottomCenter = $bottomCenterControls;
//        $bottomRightControls = ['document.getElementById("bottomRightControl")'];
//        $this->gmap->injectControlsInBottomRight = $bottomRightControls;
//
//        $rightTopControls = ['document.getElementById("rightTopControl")'];
//        $this->gmap->injectControlsInRightTop = $rightTopControls;
//        $rightCenterControls = ['document.getElementById("rightCenterControl")'];
//        $this->gmap->injectControlsInRightCenter = $rightCenterControls;
//        $rightBottomControls = ['document.getElementById("rightBottomControl")'];
//        $this->gmap->injectControlsInRightBottom = $rightBottomControls;
//
//        $topLeftControls = ['document.getElementById("topLeftControl")'];
//        $this->gmap->injectControlsInTopLeft = $topLeftControls;
//        $topCenterControls = ['document.getElementById("topCenterControl")'];
//        $this->gmap->injectControlsInTopCenter = $topCenterControls;
//        $topRightControls = ['document.getElementById("topRightControl")'];
//        $this->gmap->injectControlsInTopRight = $topRightControls;
//
//        /******** End Controls ********/
//
//        $config = array();
//        $config['map_height'] = "100%";
//        $config['zoom'] = '18';
//        $config['center'] = 'lat: 46.87916, lng: -3.32910';
//        $config['onboundschanged'] = 'if (!centreGot) {
//            var mapCentre = map.getCenter();
//            marker_0.setOptions({
//                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
//            });
//        }
//        centreGot = true;';
//
//        $this->gmap->initialize($config); // Initialize Map with custom configuration
//
//        //  set up the marker ready for positioning
//        $marker = array();
//        $marker['position'] = 'lat: 46.87916, lng: -3.32910';
//        $marker['infowindow_content'] = 'Clifton, Karachi';
//        $marker['draggable'] =false;
//        $marker['ondragend'] = '
//        iw_'. $this->gmap->map_name .'.close();
//        reverseGeocode(event.latLng, function(status, result, mark){
//            if(status == 200){
//                iw_'. $this->gmap->map_name .'.setContent(result);
//                iw_'. $this->gmap->map_name .'.open('. $this->gmap->map_name .', mark);
//            }
//        }, this);
//        ';
//        $this->gmap->add_marker($marker);
//
//        // $marker['position'] = 'Clifron, Karachi';
//        // $marker['infowindow_content'] = 'Clifton, Karachi';
//        // GMaps::add_marker($marker);
//
//        $map = $this->gmap->create_map(); // This object will render javascript files and map view; you can call JS by $map['js'] and map view by $map['html']
//
//        return view('map', ['map' => $map]);
//    }

    public function gmaps()
    {
        $locations = DB::table('locations')->get();
        return view('gmaps',compact('locations'));
    }
}
