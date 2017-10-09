<!-- prefooter.tpl --> 

    <?php $pages = category_pages('4')?>
    <?php if(is_true_array($pages)){ foreach ($pages as $item){ ?>
    <?php $item = $CI->load->module('cfcm')->connect_fields($item, 'page')?>
        <?php if($category['id']  == '1' or  $category['id']  == '10'): ?>
        <?php if(strip_tags( $item['field_foter'] ) == 'Map'): ?>
          <article>
                <div class="page-section map-section style-2 map" data-background-color="#ffffff">
                        <div id="map-canvas" data-map-lon="<?php echo $item['field_lon']; ?>" data-map-lat="<?php echo $item['field_lat']; ?>" data-map-marker-lon="<?php echo $item['field_lon']; ?>" data-map-marker-lat="<?php echo $item['field_lat']; ?>" data-map-marker-title="Psychologue"></div>
                </div><!-- .page-section -->
            </article>
<script type="text/javascript">

function mapInit() {
    if ( $( "#map-canvas" ).length > 0 ) {

        mapInitialize();

        $(window).resize( mapInitialize );
    }
}

function mapInitialize() {

    var mapLon = $( "#map-canvas" ).data( "map-lon" );  // Longitude
    var mapLat = $( "#map-canvas" ).data( "map-lat" );  // Latitude

    // Marker
    var mapMarkerLon = $( "#map-canvas" ).data( "map-marker-lon" );  // Longitude
    var mapMarkerLat = $( "#map-canvas" ).data( "map-marker-lat" );  // Latitude
    var mapMarkerTitle = $( "#map-canvas" ).data( "map-marker-title" );  // Latitude

    //Default
    if ( mapLon === undefined ) { mapLon = -34.697; }
    if ( mapLat === undefined ) { mapLat = 151.22; }

    if ( mapMarkerLon === undefined ) { mapMarkerLon = ""; }
    if ( mapMarkerLat === undefined ) { mapMarkerLat = ""; }
    if ( mapMarkerTitle === undefined ) { mapMarkerTitle = ""; }

    if ( $( "#map-canvas" ).length > 0 ) {
        var center = new google.maps.LatLng( mapLon, mapLat );
    }

    var roadAtlasStyles = [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]}];

    var mapOptions = {
        zoom: 13,
        center: center,
        draggable: true,
        disableDefaultUI: false,
        disableDoubleClickZoom: true,
        scrollwheel: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
        }
    };

    var map = new google.maps.Map(document.getElementById( 'map-canvas' ), mapOptions);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng( mapMarkerLon, mapMarkerLat ),
        map: map,
        title: mapMarkerTitle
    });

    var styledMapOptions = {
        name: 'US Road Atlas'
    };

    var usRoadMapType = new google.maps.StyledMapType( roadAtlasStyles, styledMapOptions );

    map.mapTypes.set( 'usroadatlas', usRoadMapType );
    map.setMapTypeId( 'usroadatlas' );
}

</script>

            <?php endif; ?>
            <?php else:?>
   <!--  Подвал на Two columns -->
                <?php if(strip_tags( $item['field_foter'] ) == 'Two columns'): ?>
                            <article class="prefoot">
                <div class="page-section map-section style-2 foot-two-col<?php if(strip_tags( $item['field_textcolor'] ) == 'Black'): ?> text-black<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'White'): ?> text-white<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Gray'): ?> text-gray<?php endif; ?>" style="<?php if($item['field_bgcolor']): ?>background-color:<?php echo $item['field_bgcolor']; ?>;<?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Color 1'): ?>color:<?php echo siteinfo('siteinfo_color')?><?php endif; ?><?php if(strip_tags( $item['field_textcolor'] ) == 'Color 2'): ?>color:<?php echo siteinfo('siteinfo_color2')?><?php endif; ?>">
                    <div class="col-sm-6 col-sm-offset-6 map-block">
                        <div id="map-canvas" data-map-lon="<?php echo $item['field_lon']; ?>" data-map-lat="<?php echo $item['field_lat']; ?>" data-map-marker-lon="<?php echo $item['field_lon']; ?>" data-map-marker-lat="<?php echo $item['field_lat']; ?>" data-map-marker-title="Hello :)"></div>
                    </div>
                    <div class="container" style="padding: <?php if($item['field_martop']): ?><?php echo $item['field_martop']; ?>px<?php else:?>30px<?php endif; ?> 15px<?php if($item['field_marbot']): ?> <?php echo $item['field_marbot']; ?>px<?php else:?> 10px<?php endif; ?>">
                        <div class="col-sm-6">
                        <?php echo $item['prev_text']; ?>
                        </div>
                    </div>
                </div>
                <!-- .page-section -->
            </article>
<script type="text/javascript">

function mapInit() {
    if ( $( "#map-canvas" ).length > 0 ) {

        mapInitialize();

        $(window).resize( mapInitialize );
    }
}

function mapInitialize() {

    var mapLon = $( "#map-canvas" ).data( "map-lon" );  // Longitude
    var mapLat = $( "#map-canvas" ).data( "map-lat" );  // Latitude

    // Marker
    var mapMarkerLon = $( "#map-canvas" ).data( "map-marker-lon" );  // Longitude
    var mapMarkerLat = $( "#map-canvas" ).data( "map-marker-lat" );  // Latitude
    var mapMarkerTitle = $( "#map-canvas" ).data( "map-marker-title" );  // Latitude

    //Default
    if ( mapLon === undefined ) { mapLon = -34.697; }
    if ( mapLat === undefined ) { mapLat = 151.22; }

    if ( mapMarkerLon === undefined ) { mapMarkerLon = ""; }
    if ( mapMarkerLat === undefined ) { mapMarkerLat = ""; }
    if ( mapMarkerTitle === undefined ) { mapMarkerTitle = ""; }

    if ( $( "#map-canvas" ).length > 0 ) {
        var center = new google.maps.LatLng( mapLon, mapLat );
    }

    var roadAtlasStyles = [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#fcfcfc"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#dddddd"}]}];

    var mapOptions = {
        zoom: 17,
        center: center,
        draggable: true,
        disableDefaultUI: true,
        disableDoubleClickZoom: true,
        scrollwheel: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
        }
    };

    var map = new google.maps.Map(document.getElementById( 'map-canvas' ), mapOptions);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng( mapMarkerLon, mapMarkerLat ),
        map: map,
        title: mapMarkerTitle
    });

    var styledMapOptions = {
        name: 'US Road Atlas'
    };

    var usRoadMapType = new google.maps.StyledMapType( roadAtlasStyles, styledMapOptions );

    map.mapTypes.set( 'usroadatlas', usRoadMapType );
    map.setMapTypeId( 'usroadatlas' );
}
</script>

     
               <?php endif; ?><!--/ Подвал на Two columns -->
          
           <?php endif; ?>
       <?php }} ?>
  
<!--/site-footer --><?php $mabilis_ttl=1507625144; $mabilis_last_modified=1507531801; ///var/www/admin/data/www/platforme411.naddaka.com/templates/brainwave/prefooter.tpl ?>