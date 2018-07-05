@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <h1>命令内容</h1>
        <p>難易度</p>
        <h1><a href="写真"><img src="images_kitchen/logo.png" alt="写真"></a></h1>
        <p>アドバイス、ティップス</p>
        <p>矛盾した一言</p>
        
<div id="map" style="width:400px; height:300px"></div>

<script type="text/javascript" charset="utf-8" src="https://map.yahooapis.jp/js/V1/jsapi?appid=dj00aiZpPUVUWnNBcEZlcWxPOSZzPWNvbnN1bWVyc2VjcmV0Jng9ZDE-"></script>
<script type="text/javascript">
window.onload = function(){
    var ymap = new Y.Map("map");
    ymap.drawMap(new Y.LatLng(36.66572, 139.73100), 17, Y.LayerSetId.NORMAL);
};

</script>
</div>
@endsection