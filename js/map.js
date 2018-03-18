var map;
        $(document).ready(function(){
            map = new GMaps({
                div: '#map',
                lat: <?=$latitude?>,
                lng: <?=$longitude?>,
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.HYBRID
            });

            map.addMarker({
                lat: <?=$latitude?>,
                lng: <?=$longitude?>,
                title: '<?=$formatted_address?>',
                infoWindow: {
                    content: '<?=$formatted_address?>'
                }
            });
        });
