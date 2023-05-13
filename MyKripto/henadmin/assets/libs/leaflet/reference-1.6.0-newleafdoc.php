<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="../docs/docs/css/normalize.css" />
	<link rel="stylesheet" href="../docs/docs/css/main.css" />
	<link rel="stylesheet" href="../docs/docs/css/reference.css" />
	<script src="../docs/docs/highlight/highlight.pack.js"></script>
	<link rel="stylesheet" href="../docs/docs/highlight/styles/github-gist.css" />
	<link rel="stylesheet" href="leaflet.css" />
	<script src="leaflet.js"></script>
</head>
<body class='api-page'>
	<div class='container'>

	<!-- CUT HERE FOR docs/reference-*.php -->

	<h2>Leaflet API reference</h2>
	<div id="toc" class="clearfix">
		<div class="toc-col map-col">
			<h4>Map</h4>
			<ul>
				<li><a href="#map-example">Usage example</a></li>
				<li><a href="#map-factory">Creation</a></li>
				<li><a href="#map-option">Options</a></li>
				<li><a href="#map-event">Events</a></li>
			</ul>
			<h4>Map Methods</h4>
			<ul>
				<li><a href="#map-methods-for-modifying-map-state">Modifying map state</a></li>
				<li><a href="#map-methods-for-getting-map-state">Getting map state</a></li>
				<li><a href="#map-methods-for-layers-and-controls">Layers and controls</a></li>
				<li><a href="#map-conversion-methods">Conversion methods</a></li>
				<li><a href="#map-other-methods">Other methods</a></li>
			</ul>
			<h4>Map Misc</h4>
			<ul>
				<li><a href="#map-property">Properties</a></li>
				<li><a href="#map-pane">Panes</a></li>
			</ul>
		</div>
		<div class="toc-col">
			<h4>UI Layers</h4>
			<ul>
				<li><a href="#marker">Marker</a></li>
				<li><a href="#popup">Popup</a></li>
				<li><a href="#tooltip">Tooltip</a></li>
			</ul>
			<h4>Raster Layers</h4>
			<ul>
				<li><a href="#tilelayer">TileLayer</a></li>
				<li><a href="#tilelayer-wms">TileLayer.WMS</a></li>
				<li><a href="#imageoverlay">ImageOverlay</a></li>
				<li><a href="#videooverlay">VideoOverlay</a></li>
			</ul>
			<h4>Vector Layers</h4>
			<ul>
				<li><a href="#path">Path</a></li>
				<li><a href="#polyline">Polyline</a></li>
				<li><a href="#polygon">Polygon</a></li>
				<li><a href="#rectangle">Rectangle</a></li>
				<li><a href="#circle">Circle</a></li>
				<li><a href="#circlemarker">CircleMarker</a></li>
				<li><a href="#svgoverlay">SVGOverlay</a></li>
				<li><a href="#svg">SVG</a></li>
				<li><a href="#canvas">Canvas</a></li>
			</ul>
		</div>
		<div class="toc-col">
			<h4>Other Layers</h4>
			<ul>
				<li><a href="#layergroup">LayerGroup</a></li>
				<li><a href="#featuregroup">FeatureGroup</a></li>
				<li><a href="#geojson">GeoJSON</a></li>
				<li><a href="#gridlayer">GridLayer</a></li>
			</ul>
			<h4>Basic Types</h4>
			<ul>
				<li><a href="#latlng">LatLng</a></li>
				<li><a href="#latlngbounds">LatLngBounds</a></li>
				<li><a href="#point">Point</a></li>
				<li><a href="#bounds">Bounds</a></li>
				<li><a href="#icon">Icon</a></li>
				<li><a href="#divicon">DivIcon</a></li>
			</ul>
			<h4>Controls</h4>
			<ul>
				<li><a href="#control-zoom">Zoom</a></li>
				<li><a href="#control-attribution">Attribution</a></li>
				<li><a href="#control-layers">Layers</a></li>
				<li><a href="#control-scale">Scale</a></li>
			</ul>
		</div>
		<div class="toc-col">
<!-- 			<h4>Shared Methods</h4> -->
<!-- 			<ul> -->
<!-- 				<li><a href="#evented">Event</a></li> -->
<!-- 				<li><a href="#layers">Layer</a></li> -->
<!-- 				<li><a href="#popup">Popup</a></li> -->
<!-- 			</ul> -->
			<h4>Utility</h4>
			<ul>
				<li><a href="#browser">Browser</a></li>
				<li><a href="#util">Util</a></li>
				<li><a href="#transformation">Transformation</a></li>
				<li><a href="#lineutil">LineUtil</a></li>
				<li><a href="#polyutil">PolyUtil</a></li>
			</ul>
			<h4>DOM Utility</h4>
			<ul>
				<li><a href="#domevent">DomEvent</a></li>
				<li><a href="#domutil">DomUtil</a></li>
				<li><a href="#posanimation">PosAnimation</a></li>
				<li><a href="#draggable">Draggable</a></li>
			</ul>
		</div>
		<div class="toc-col last-col">
			<h4>Base Classes</h4>
			<ul>
				<li><a href="#class">Class</a></li>
				<li><a href="#evented">Evented</a></li>
				<li><a href="#layer">Layer</a></li>
				<li><a href="#interactive-layer">Interactive layer</a></li>
				<li><a href="#control">Control</a></li>
				<li><a href="#handler">Handler</a></li>
				<!--<li><a class="nodocs" href="#">IFeature</a></li>-->
				<li><a href="#projection">Projection</a></li>
				<li><a href="#crs">CRS</a></li>
				<li><a href="#renderer">Renderer</a></li>
			</ul>

			<h4>Misc</h4>
			<ul>
				<li><a href="#event-objects">Event objects</a></li>
 				<li><a href="#global-switches">global switches</a></li>
				<li><a href="#noconflict">noConflict</a></li>
				<li><a href="#version">version</a></li>
			</ul>
		</div>
	</div>

	<h2 id='map'>Map</h2><p>The central class of the API — it is used to create a map on a page and manipulate it.</p>

<section>
<h3 id='map-example'>Usage example</h3>

<section >





<pre><code class="language-js">// initialize the map on the &quot;map&quot; div with a given center and zoom
var map = L.map('map', {
	center: [51.505, -0.09],
	zoom: 13
});
</code></pre>



</section>


</section><section>
<h3 id='map-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-l-map'>
		<td><code><b>L.map</b>(<nobr>&lt;String&gt;</nobr> <i>id</i>, <nobr>&lt;Map options&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates a map object given the DOM ID of a <code>&lt;div&gt;</code> element
and optionally an object literal with <code>Map options</code>.</td>
	</tr>
	<tr id='map-l-map'>
		<td><code><b>L.map</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;Map options&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates a map object given an instance of a <code>&lt;div&gt;</code> HTML element
and optionally an object literal with <code>Map options</code>.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='map-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-prefercanvas'>
		<td><code><b>preferCanvas</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether <a href="#path"><code>Path</code></a>s should be rendered on a <a href="#canvas"><code>Canvas</code></a> renderer.
By default, all <code>Path</code>s are rendered in a <a href="#svg"><code>SVG</code></a> renderer.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-control-options'>Control options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-attributioncontrol'>
		<td><code><b>attributionControl</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether a <a href="#control-attribution">attribution control</a> is added to the map by default.</td>
	</tr>
	<tr id='map-zoomcontrol'>
		<td><code><b>zoomControl</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether a <a href="#control-zoom">zoom control</a> is added to the map by default.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-interaction-options'>Interaction Options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-closepopuponclick'>
		<td><code><b>closePopupOnClick</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Set it to <code>false</code> if you don't want popups to close when user clicks the map.</td>
	</tr>
	<tr id='map-zoomsnap'>
		<td><code><b>zoomSnap</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>Forces the map's zoom level to always be a multiple of this, particularly
right after a <a href="#map-fitbounds"><code>fitBounds()</code></a> or a pinch-zoom.
By default, the zoom level snaps to the nearest integer; lower values
(e.g. <code>0.5</code> or <code>0.1</code>) allow for greater granularity. A value of <code>0</code>
means the zoom level will not be snapped after <code>fitBounds</code> or a pinch-zoom.</td>
	</tr>
	<tr id='map-zoomdelta'>
		<td><code><b>zoomDelta</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>Controls how much the map's zoom level will change after a
<a href="#map-zoomin"><code>zoomIn()</code></a>, <a href="#map-zoomout"><code>zoomOut()</code></a>, pressing <code>+</code>
or <code>-</code> on the keyboard, or using the <a href="#control-zoom">zoom controls</a>.
Values smaller than <code>1</code> (e.g. <code>0.5</code>) allow for greater granularity.</td>
	</tr>
	<tr id='map-trackresize'>
		<td><code><b>trackResize</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the map automatically handles browser window resize to update itself.</td>
	</tr>
	<tr id='map-boxzoom'>
		<td><code><b>boxZoom</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the map can be zoomed to a rectangular area specified by
dragging the mouse while pressing the shift key.</td>
	</tr>
	<tr id='map-doubleclickzoom'>
		<td><code><b>doubleClickZoom</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>true</code></td>
		<td>Whether the map can be zoomed in by double clicking on it and
zoomed out by double clicking while holding shift. If passed
<code>'center'</code>, double-click zoom will zoom to the center of the
view regardless of where the mouse was.</td>
	</tr>
	<tr id='map-dragging'>
		<td><code><b>dragging</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the map be draggable with mouse/touch or not.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-map-state-options'>Map State Options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-crs'>
		<td><code><b>crs</b></code></td>
		<td><code><a href='#crs'>CRS</a></code></td>
		<td><code>L.CRS.EPSG3857</code></td>
		<td>The <a href="#crs">Coordinate Reference System</a> to use. Don't change this if you're not
sure what it means.</td>
	</tr>
	<tr id='map-center'>
		<td><code><b>center</b></code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><code>undefined</code></td>
		<td>Initial geographic center of the map</td>
	</tr>
	<tr id='map-zoom'>
		<td><code><b>zoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>Initial map zoom level</td>
	</tr>
	<tr id='map-minzoom'>
		<td><code><b>minZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>*</code></td>
		<td>Minimum zoom level of the map.
If not specified and at least one <a href="#gridlayer"><code>GridLayer</code></a> or <a href="#tilelayer"><code>TileLayer</code></a> is in the map,
the lowest of their <code>minZoom</code> options will be used instead.</td>
	</tr>
	<tr id='map-maxzoom'>
		<td><code><b>maxZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>*</code></td>
		<td>Maximum zoom level of the map.
If not specified and at least one <a href="#gridlayer"><code>GridLayer</code></a> or <a href="#tilelayer"><code>TileLayer</code></a> is in the map,
the highest of their <code>maxZoom</code> options will be used instead.</td>
	</tr>
	<tr id='map-layers'>
		<td><code><b>layers</b></code></td>
		<td><code>Layer[]</code></td>
		<td><code>[]</code></td>
		<td>Array of layers that will be added to the map initially</td>
	</tr>
	<tr id='map-maxbounds'>
		<td><code><b>maxBounds</b></code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><code>null</code></td>
		<td>When this option is set, the map restricts the view to the given
geographical bounds, bouncing the user back if the user tries to pan
outside the view. To set the restriction dynamically, use
<a href="#map-setmaxbounds"><code>setMaxBounds</code></a> method.</td>
	</tr>
	<tr id='map-renderer'>
		<td><code><b>renderer</b></code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><code>*</code></td>
		<td>The default method for drawing vector layers on the map. <a href="#svg"><code>L.SVG</code></a>
or <a href="#canvas"><code>L.Canvas</code></a> by default depending on browser support.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-animation-options'>Animation Options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-zoomanimation'>
		<td><code><b>zoomAnimation</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the map zoom animation is enabled. By default it's enabled
in all browsers that support CSS3 Transitions except Android.</td>
	</tr>
	<tr id='map-zoomanimationthreshold'>
		<td><code><b>zoomAnimationThreshold</b></code></td>
		<td><code>Number</code></td>
		<td><code>4</code></td>
		<td>Won't animate zoom if the zoom difference exceeds this value.</td>
	</tr>
	<tr id='map-fadeanimation'>
		<td><code><b>fadeAnimation</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the tile fade animation is enabled. By default it's enabled
in all browsers that support CSS3 Transitions except Android.</td>
	</tr>
	<tr id='map-markerzoomanimation'>
		<td><code><b>markerZoomAnimation</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether markers animate their zoom with the zoom animation, if disabled
they will disappear for the length of the animation. By default it's
enabled in all browsers that support CSS3 Transitions except Android.</td>
	</tr>
	<tr id='map-transform3dlimit'>
		<td><code><b>transform3DLimit</b></code></td>
		<td><code>Number</code></td>
		<td><code>2^23</code></td>
		<td>Defines the maximum size of a CSS translation transform. The default
value should not be changed unless a web browser positions layers in
the wrong place after doing a large <code>panBy</code>.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-panning-inertia-options'>Panning Inertia Options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-inertia'>
		<td><code><b>inertia</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>*</code></td>
		<td>If enabled, panning of the map will have an inertia effect where
the map builds momentum while dragging and continues moving in
the same direction for some time. Feels especially nice on touch
devices. Enabled by default unless running on old Android devices.</td>
	</tr>
	<tr id='map-inertiadeceleration'>
		<td><code><b>inertiaDeceleration</b></code></td>
		<td><code>Number</code></td>
		<td><code>3000</code></td>
		<td>The rate with which the inertial movement slows down, in pixels/second².</td>
	</tr>
	<tr id='map-inertiamaxspeed'>
		<td><code><b>inertiaMaxSpeed</b></code></td>
		<td><code>Number</code></td>
		<td><code>Infinity</code></td>
		<td>Max speed of the inertial movement, in pixels/second.</td>
	</tr>
	<tr id='map-easelinearity'>
		<td><code><b>easeLinearity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.2</code></td>
		<td></td>
	</tr>
	<tr id='map-worldcopyjump'>
		<td><code><b>worldCopyJump</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>With this option enabled, the map tracks when you pan to another &quot;copy&quot;
of the world and seamlessly jumps to the original one so that all overlays
like markers and vector layers are still visible.</td>
	</tr>
	<tr id='map-maxboundsviscosity'>
		<td><code><b>maxBoundsViscosity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.0</code></td>
		<td>If <code>maxBounds</code> is set, this option will control how solid the bounds
are when dragging the map around. The default value of <code>0.0</code> allows the
user to drag outside the bounds at normal speed, higher values will
slow down map dragging outside bounds, and <code>1.0</code> makes the bounds fully
solid, preventing the user from dragging outside the bounds.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-keyboard-navigation-options'>Keyboard Navigation Options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-keyboard'>
		<td><code><b>keyboard</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Makes the map focusable and allows users to navigate the map with keyboard
arrows and <code>+</code>/<code>-</code> keys.</td>
	</tr>
	<tr id='map-keyboardpandelta'>
		<td><code><b>keyboardPanDelta</b></code></td>
		<td><code>Number</code></td>
		<td><code>80</code></td>
		<td>Amount of pixels to pan when pressing an arrow key.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-mouse-wheel-options'>Mouse wheel options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-scrollwheelzoom'>
		<td><code><b>scrollWheelZoom</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>true</code></td>
		<td>Whether the map can be zoomed by using the mouse wheel. If passed <code>'center'</code>,
it will zoom to the center of the view regardless of where the mouse was.</td>
	</tr>
	<tr id='map-wheeldebouncetime'>
		<td><code><b>wheelDebounceTime</b></code></td>
		<td><code>Number</code></td>
		<td><code>40</code></td>
		<td>Limits the rate at which a wheel can fire (in milliseconds). By default
user can't zoom via wheel more often than once per 40 ms.</td>
	</tr>
	<tr id='map-wheelpxperzoomlevel'>
		<td><code><b>wheelPxPerZoomLevel</b></code></td>
		<td><code>Number</code></td>
		<td><code>60</code></td>
		<td>How many scroll pixels (as reported by <a href="#domevent-getwheeldelta">L.DomEvent.getWheelDelta</a>)
mean a change of one full zoom level. Smaller values will make wheel-zooming
faster (and vice versa).</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-touch-interaction-options'>Touch interaction options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-tap'>
		<td><code><b>tap</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Enables mobile hacks for supporting instant taps (fixing 200ms click
delay on iOS/Android) and touch holds (fired as <code>contextmenu</code> events).</td>
	</tr>
	<tr id='map-taptolerance'>
		<td><code><b>tapTolerance</b></code></td>
		<td><code>Number</code></td>
		<td><code>15</code></td>
		<td>The max number of pixels a user can shift his finger during touch
for it to be considered a valid tap.</td>
	</tr>
	<tr id='map-touchzoom'>
		<td><code><b>touchZoom</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>*</code></td>
		<td>Whether the map can be zoomed by touch-dragging with two fingers. If
passed <code>'center'</code>, it will zoom to the center of the view regardless of
where the touch events (fingers) were. Enabled for touch-capable web
browsers except for old Androids.</td>
	</tr>
	<tr id='map-bounceatzoomlimits'>
		<td><code><b>bounceAtZoomLimits</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Set it to false if you don't want the map to zoom beyond min/max zoom
and then bounce back when pinch-zooming.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='map-event'>Events</h3>

<section class='collapsable'>

<h4 id='map-layer-events'>Layer events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-baselayerchange'>
		<td><code><b>baselayerchange</b></code></td>
		<td><code><a href='#layerscontrolevent'>LayersControlEvent</a></code></td>
		<td>Fired when the base layer is changed through the <a href="#control-layers">layers control</a>.</td>
	</tr>
	<tr id='map-overlayadd'>
		<td><code><b>overlayadd</b></code></td>
		<td><code><a href='#layerscontrolevent'>LayersControlEvent</a></code></td>
		<td>Fired when an overlay is selected through the <a href="#control-layers">layers control</a>.</td>
	</tr>
	<tr id='map-overlayremove'>
		<td><code><b>overlayremove</b></code></td>
		<td><code><a href='#layerscontrolevent'>LayersControlEvent</a></code></td>
		<td>Fired when an overlay is deselected through the <a href="#control-layers">layers control</a>.</td>
	</tr>
	<tr id='map-layeradd'>
		<td><code><b>layeradd</b></code></td>
		<td><code><a href='#layerevent'>LayerEvent</a></code></td>
		<td>Fired when a new layer is added to the map.</td>
	</tr>
	<tr id='map-layerremove'>
		<td><code><b>layerremove</b></code></td>
		<td><code><a href='#layerevent'>LayerEvent</a></code></td>
		<td>Fired when some layer is removed from the map</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-map-state-change-events'>Map state change events</h4>

<div class='section-comments'></div>

<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-zoomlevelschange'>
		<td><code><b>zoomlevelschange</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the number of zoomlevels on the map is changed due
to adding or removing a layer.</td>
	</tr>
	<tr id='map-resize'>
		<td><code><b>resize</b></code></td>
		<td><code><a href='#resizeevent'>ResizeEvent</a></code></td>
		<td>Fired when the map is resized.</td>
	</tr>
	<tr id='map-unload'>
		<td><code><b>unload</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the map is destroyed with <a href="#map-remove">remove</a> method.</td>
	</tr>
	<tr id='map-viewreset'>
		<td><code><b>viewreset</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the map needs to redraw its content (this usually happens
on map zoom or load). Very useful for creating custom overlays.</td>
	</tr>
	<tr id='map-load'>
		<td><code><b>load</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the map is initialized (when its center and zoom are set
for the first time).</td>
	</tr>
	<tr id='map-zoomstart'>
		<td><code><b>zoomstart</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the map zoom is about to change (e.g. before zoom animation).</td>
	</tr>
	<tr id='map-movestart'>
		<td><code><b>movestart</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the view of the map starts changing (e.g. user starts dragging the map).</td>
	</tr>
	<tr id='map-zoom'>
		<td><code><b>zoom</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired repeatedly during any change in zoom level, including zoom
and fly animations.</td>
	</tr>
	<tr id='map-move'>
		<td><code><b>move</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired repeatedly during any movement of the map, including pan and
fly animations.</td>
	</tr>
	<tr id='map-zoomend'>
		<td><code><b>zoomend</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the map has changed, after any animations.</td>
	</tr>
	<tr id='map-moveend'>
		<td><code><b>moveend</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the center of the map stops changing (e.g. user stopped
dragging the map).</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-popup-events'>Popup events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup is opened in the map</td>
	</tr>
	<tr id='map-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup in the map is closed</td>
	</tr>
	<tr id='map-autopanstart'>
		<td><code><b>autopanstart</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the map starts autopanning when opening a popup.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-tooltip-events'>Tooltip events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip is opened in the map.</td>
	</tr>
	<tr id='map-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip in the map is closed.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-location-events'>Location events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-locationerror'>
		<td><code><b>locationerror</b></code></td>
		<td><code><a href='#errorevent'>ErrorEvent</a></code></td>
		<td>Fired when geolocation (using the <a href="#map-locate"><code>locate</code></a> method) failed.</td>
	</tr>
	<tr id='map-locationfound'>
		<td><code><b>locationfound</b></code></td>
		<td><code><a href='#locationevent'>LocationEvent</a></code></td>
		<td>Fired when geolocation (using the <a href="#map-locate"><code>locate</code></a> method)
went successfully.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-interaction-events'>Interaction events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the map.</td>
	</tr>
	<tr id='map-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the map.</td>
	</tr>
	<tr id='map-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the map.</td>
	</tr>
	<tr id='map-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button on the map.</td>
	</tr>
	<tr id='map-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the map.</td>
	</tr>
	<tr id='map-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the map.</td>
	</tr>
	<tr id='map-mousemove'>
		<td><code><b>mousemove</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired while the mouse moves over the map.</td>
	</tr>
	<tr id='map-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the right mouse button on the map, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
	<tr id='map-keypress'>
		<td><code><b>keypress</b></code></td>
		<td><code><a href='#keyboardevent'>KeyboardEvent</a></code></td>
		<td>Fired when the user presses a key from the keyboard that produces a character value while the map is focused.</td>
	</tr>
	<tr id='map-keydown'>
		<td><code><b>keydown</b></code></td>
		<td><code><a href='#keyboardevent'>KeyboardEvent</a></code></td>
		<td>Fired when the user presses a key from the keyboard while the map is focused. Unlike the <code>keypress</code> event,
the <code>keydown</code> event is fired for keys that produce a character value and for keys
that do not produce a character value.</td>
	</tr>
	<tr id='map-keyup'>
		<td><code><b>keyup</b></code></td>
		<td><code><a href='#keyboardevent'>KeyboardEvent</a></code></td>
		<td>Fired when the user releases a key from the keyboard while the map is focused.</td>
	</tr>
	<tr id='map-preclick'>
		<td><code><b>preclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired before mouse click on the map (sometimes useful when you
want something to happen on click before any existing click
handlers start running).</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-other-events'>Other Events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-zoomanim'>
		<td><code><b>zoomanim</b></code></td>
		<td><code><a href='#zoomanimevent'>ZoomAnimEvent</a></code></td>
		<td>Fired at least once per zoom animation. For continuous zoom, like pinch zooming, fired once per frame during zoom.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='map-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-getrenderer'>
		<td><code><b>getRenderer</b>(<nobr>&lt;<a href='#path'>Path</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><p>Returns the instance of <a href="#renderer"><code>Renderer</code></a> that should be used to render the given
<a href="#path"><code>Path</code></a>. It will ensure that the <a href="#renderer"><code>renderer</code></a> options of the map and paths
are respected, and that the renderers do exist on the map.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-methods-for-layers-and-controls'>Methods for Layers and Controls</h4>


<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-addcontrol'>
		<td><code><b>addControl</b>(<nobr>&lt;<a href='#control'>Control</a>&gt;</nobr> <i>control</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the given control to the map</p>
</td>
	</tr>
	<tr id='map-removecontrol'>
		<td><code><b>removeControl</b>(<nobr>&lt;<a href='#control'>Control</a>&gt;</nobr> <i>control</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the given control from the map</p>
</td>
	</tr>
	<tr id='map-addlayer'>
		<td><code><b>addLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the given layer to the map</p>
</td>
	</tr>
	<tr id='map-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the given layer from the map.</p>
</td>
	</tr>
	<tr id='map-haslayer'>
		<td><code><b>hasLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given layer is currently added to the map</p>
</td>
	</tr>
	<tr id='map-eachlayer'>
		<td><code><b>eachLayer</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Iterates over the layers of the map, optionally specifying context of the iterator function.</p>
<pre><code>map.eachLayer(function(layer){
    layer.bindPopup('Hello');
});
</code></pre>
</td>
	</tr>
	<tr id='map-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#popup'>Popup</a>&gt;</nobr> <i>popup</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the specified popup while closing the previously opened (to make sure only one is opened at one time for usability).</p>
</td>
	</tr>
	<tr id='map-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;String|HTMLElement&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Creates a popup with the specified content and options and opens it in the given point on a map.</p>
</td>
	</tr>
	<tr id='map-closepopup'>
		<td><code><b>closePopup</b>(<nobr>&lt;<a href='#popup'>Popup</a>&gt;</nobr> <i>popup?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup previously opened with <a href="#map-openpopup">openPopup</a> (or the given one).</p>
</td>
	</tr>
	<tr id='map-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#tooltip'>Tooltip</a>&gt;</nobr> <i>tooltip</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the specified tooltip.</p>
</td>
	</tr>
	<tr id='map-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;String|HTMLElement&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Creates a tooltip with the specified content and options and open it.</p>
</td>
	</tr>
	<tr id='map-closetooltip'>
		<td><code><b>closeTooltip</b>(<nobr>&lt;<a href='#tooltip'>Tooltip</a>&gt;</nobr> <i>tooltip?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip given as parameter.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-methods-for-modifying-map-state'>Methods for modifying map state</h4>


<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-setview'>
		<td><code><b>setView</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>center</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom</i>, <nobr>&lt;<a href='#zoom/pan-options'>Zoom/pan options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the view of the map (geographical center and zoom) with the given
animation options.</p>
</td>
	</tr>
	<tr id='map-setzoom'>
		<td><code><b>setZoom</b>(<nobr>&lt;Number&gt;</nobr> <i>zoom</i>, <nobr>&lt;<a href='#zoom/pan-options'>Zoom/pan options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the zoom of the map.</p>
</td>
	</tr>
	<tr id='map-zoomin'>
		<td><code><b>zoomIn</b>(<nobr>&lt;Number&gt;</nobr> <i>delta?</i>, <nobr>&lt;<a href='#zoom-options'>Zoom options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Increases the zoom of the map by <code>delta</code> (<a href="#map-zoomdelta"><code>zoomDelta</code></a> by default).</p>
</td>
	</tr>
	<tr id='map-zoomout'>
		<td><code><b>zoomOut</b>(<nobr>&lt;Number&gt;</nobr> <i>delta?</i>, <nobr>&lt;<a href='#zoom-options'>Zoom options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Decreases the zoom of the map by <code>delta</code> (<a href="#map-zoomdelta"><code>zoomDelta</code></a> by default).</p>
</td>
	</tr>
	<tr id='map-setzoomaround'>
		<td><code><b>setZoomAround</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom</i>, <nobr>&lt;<a href='#zoom-options'>Zoom options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Zooms the map while keeping a specified geographical point on the map
stationary (e.g. used internally for scroll zoom and double-click zoom).</p>
</td>
	</tr>
	<tr id='map-setzoomaround'>
		<td><code><b>setZoomAround</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>offset</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom</i>, <nobr>&lt;<a href='#zoom-options'>Zoom options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Zooms the map while keeping a specified pixel on the map (relative to the top-left corner) stationary.</p>
</td>
	</tr>
	<tr id='map-fitbounds'>
		<td><code><b>fitBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;<a href='#fitbounds-options'>fitBounds options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets a map view that contains the given geographical bounds with the
maximum zoom level possible.</p>
</td>
	</tr>
	<tr id='map-fitworld'>
		<td><code><b>fitWorld</b>(<nobr>&lt;<a href='#fitbounds-options'>fitBounds options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets a map view that mostly contains the whole world with the maximum
zoom level possible.</p>
</td>
	</tr>
	<tr id='map-panto'>
		<td><code><b>panTo</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;<a href='#pan-options'>Pan options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Pans the map to a given center.</p>
</td>
	</tr>
	<tr id='map-panby'>
		<td><code><b>panBy</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>offset</i>, <nobr>&lt;<a href='#pan-options'>Pan options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Pans the map by a given number of pixels (animated).</p>
</td>
	</tr>
	<tr id='map-flyto'>
		<td><code><b>flyTo</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom?</i>, <nobr>&lt;<a href='#zoom/pan-options'>Zoom/pan options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the view of the map (geographical center and zoom) performing a smooth
pan-zoom animation.</p>
</td>
	</tr>
	<tr id='map-flytobounds'>
		<td><code><b>flyToBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;<a href='#fitbounds-options'>fitBounds options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the view of the map with a smooth animation like <a href="#map-flyto"><code>flyTo</code></a>,
but takes a bounds parameter like <a href="#map-fitbounds"><code>fitBounds</code></a>.</p>
</td>
	</tr>
	<tr id='map-setmaxbounds'>
		<td><code><b>setMaxBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Restricts the map view to the given bounds (see the <a href="#map-maxbounds">maxBounds</a> option).</p>
</td>
	</tr>
	<tr id='map-setminzoom'>
		<td><code><b>setMinZoom</b>(<nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the lower limit for the available zoom levels (see the <a href="#map-minzoom">minZoom</a> option).</p>
</td>
	</tr>
	<tr id='map-setmaxzoom'>
		<td><code><b>setMaxZoom</b>(<nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the upper limit for the available zoom levels (see the <a href="#map-maxzoom">maxZoom</a> option).</p>
</td>
	</tr>
	<tr id='map-paninsidebounds'>
		<td><code><b>panInsideBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;<a href='#pan-options'>Pan options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Pans the map to the closest view that would lie inside the given bounds (if it's not already), controlling the animation using the options specific, if any.</p>
</td>
	</tr>
	<tr id='map-paninside'>
		<td><code><b>panInside</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;options&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Pans the map the minimum amount to make the <a href="#latlng"><code>latlng</code></a> visible. Use
<code>padding</code>, <code>paddingTopLeft</code> and <code>paddingTopRight</code> options to fit
the display to more restricted bounds, like <a href="#map-fitbounds"><code>fitBounds</code></a>.
If <code>latlng</code> is already within the (optionally padded) display bounds,
the map will not be panned.</p>
</td>
	</tr>
	<tr id='map-invalidatesize'>
		<td><code><b>invalidateSize</b>(<nobr>&lt;<a href='#zoom/pan-options'>Zoom/pan options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Checks if the map container size changed and updates the map if so —
call it after you've changed the map size dynamically, also animating
pan by default. If <code>options.pan</code> is <code>false</code>, panning will not occur.
If <code>options.debounceMoveend</code> is <code>true</code>, it will delay <code>moveend</code> event so
that it doesn't happen often even if the method is called many
times in a row.</p>
</td>
	</tr>
	<tr id='map-invalidatesize'>
		<td><code><b>invalidateSize</b>(<nobr>&lt;Boolean&gt;</nobr> <i>animate</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Checks if the map container size changed and updates the map if so —
call it after you've changed the map size dynamically, also animating
pan by default.</p>
</td>
	</tr>
	<tr id='map-stop'>
		<td><code><b>stop</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Stops the currently running <code>panTo</code> or <code>flyTo</code> animation, if any.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-geolocation-methods'>Geolocation methods</h4>


<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-locate'>
		<td><code><b>locate</b>(<nobr>&lt;<a href='#locate-options'>Locate options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Tries to locate the user using the Geolocation API, firing a <a href="#map-locationfound"><code>locationfound</code></a>
event with location data on success or a <a href="#map-locationerror"><code>locationerror</code></a> event on failure,
and optionally sets the map view to the user's location with respect to
detection accuracy (or to the world view if geolocation failed).
Note that, if your page doesn't use HTTPS, this method will fail in
modern browsers (<a href="https://sites.google.com/a/chromium.org/dev/Home/chromium-security/deprecating-powerful-features-on-insecure-origins">Chrome 50 and newer</a>)
See <a href="#locate-options"><code>Locate options</code></a> for more details.</p>
</td>
	</tr>
	<tr id='map-stoplocate'>
		<td><code><b>stopLocate</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Stops watching location previously initiated by <code>map.locate({watch: true})</code>
and aborts resetting the map view if map.locate was called with
<code>{setView: true}</code>.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-other-methods'>Other Methods</h4>


<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-addhandler'>
		<td><code><b>addHandler</b>(<nobr>&lt;String&gt;</nobr> <i>name</i>, <nobr>&lt;Function&gt;</nobr> <i>HandlerClass</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a new <a href="#handler"><code>Handler</code></a> to the map, given its name and constructor function.</p>
</td>
	</tr>
	<tr id='map-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Destroys the map and clears all related event listeners.</p>
</td>
	</tr>
	<tr id='map-createpane'>
		<td><code><b>createPane</b>(<nobr>&lt;String&gt;</nobr> <i>name</i>, <nobr>&lt;HTMLElement&gt;</nobr> <i>container?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Creates a new <a href="#map-pane">map pane</a> with the given name if it doesn't exist already,
then returns it. The pane is created as a child of <code>container</code>, or
as a child of the main map pane if not set.</p>
</td>
	</tr>
	<tr id='map-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String|HTMLElement&gt;</nobr> <i>pane</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns a <a href="#map-pane">map pane</a>, given its name or its HTML element (its identity).</p>
</td>
	</tr>
	<tr id='map-getpanes'>
		<td><code><b>getPanes</b>()</code></td>
		<td><code>Object</code></td>
		<td><p>Returns a plain object containing the names of all <a href="#map-pane">panes</a> as keys and
the panes as values.</p>
</td>
	</tr>
	<tr id='map-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTML element that contains the map.</p>
</td>
	</tr>
	<tr id='map-whenready'>
		<td><code><b>whenReady</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Runs the given function <code>fn</code> when the map gets initialized with
a view (center and zoom) and at least one layer, or immediately
if it's already initialized, optionally passing a function context.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-methods-for-getting-map-state'>Methods for Getting Map State</h4>


<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-getcenter'>
		<td><code><b>getCenter</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the geographical center of the map view</p>
</td>
	</tr>
	<tr id='map-getzoom'>
		<td><code><b>getZoom</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the current zoom level of the map view</p>
</td>
	</tr>
	<tr id='map-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns the geographical bounds visible in the current map view</p>
</td>
	</tr>
	<tr id='map-getminzoom'>
		<td><code><b>getMinZoom</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the minimum zoom level of the map (if set in the <code>minZoom</code> option of the map or of any layers), or <code>0</code> by default.</p>
</td>
	</tr>
	<tr id='map-getmaxzoom'>
		<td><code><b>getMaxZoom</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the maximum zoom level of the map (if set in the <code>maxZoom</code> option of the map or of any layers).</p>
</td>
	</tr>
	<tr id='map-getboundszoom'>
		<td><code><b>getBoundsZoom</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;Boolean&gt;</nobr> <i>inside?</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>padding?</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the maximum zoom level on which the given bounds fit to the map
view in its entirety. If <code>inside</code> (optional) is set to <code>true</code>, the method
instead returns the minimum zoom level on which the map view fits into
the given bounds in its entirety.</p>
</td>
	</tr>
	<tr id='map-getsize'>
		<td><code><b>getSize</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the current size of the map container (in pixels).</p>
</td>
	</tr>
	<tr id='map-getpixelbounds'>
		<td><code><b>getPixelBounds</b>()</code></td>
		<td><code><a href='#bounds'>Bounds</a></code></td>
		<td><p>Returns the bounds of the current map view in projected pixel
coordinates (sometimes useful in layer and overlay implementations).</p>
</td>
	</tr>
	<tr id='map-getpixelorigin'>
		<td><code><b>getPixelOrigin</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the projected pixel coordinates of the top left point of
the map layer (useful in custom layer and overlay implementations).</p>
</td>
	</tr>
	<tr id='map-getpixelworldbounds'>
		<td><code><b>getPixelWorldBounds</b>(<nobr>&lt;Number&gt;</nobr> <i>zoom?</i>)</code></td>
		<td><code><a href='#bounds'>Bounds</a></code></td>
		<td><p>Returns the world's bounds in pixel coordinates for zoom level <code>zoom</code>.
If <code>zoom</code> is omitted, the map's current zoom level is used.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-conversion-methods'>Conversion Methods</h4>


<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-getzoomscale'>
		<td><code><b>getZoomScale</b>(<nobr>&lt;Number&gt;</nobr> <i>toZoom</i>, <nobr>&lt;Number&gt;</nobr> <i>fromZoom</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the scale factor to be applied to a map transition from zoom level
<code>fromZoom</code> to <code>toZoom</code>. Used internally to help with zoom animations.</p>
</td>
	</tr>
	<tr id='map-getscalezoom'>
		<td><code><b>getScaleZoom</b>(<nobr>&lt;Number&gt;</nobr> <i>scale</i>, <nobr>&lt;Number&gt;</nobr> <i>fromZoom</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the zoom level that the map would end up at, if it is at <code>fromZoom</code>
level and everything is scaled by a factor of <code>scale</code>. Inverse of
<a href="#map-getZoomScale"><code>getZoomScale</code></a>.</p>
</td>
	</tr>
	<tr id='map-project'>
		<td><code><b>project</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Projects a geographical coordinate <a href="#latlng"><code>LatLng</code></a> according to the projection
of the map's CRS, then scales it according to <code>zoom</code> and the CRS's
<a href="#transformation"><code>Transformation</code></a>. The result is pixel coordinate relative to
the CRS origin.</p>
</td>
	</tr>
	<tr id='map-unproject'>
		<td><code><b>unproject</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Inverse of <a href="#map-project"><code>project</code></a>.</p>
</td>
	</tr>
	<tr id='map-layerpointtolatlng'>
		<td><code><b>layerPointToLatLng</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Given a pixel coordinate relative to the <a href="#map-getpixelorigin">origin pixel</a>,
returns the corresponding geographical coordinate (for the current zoom level).</p>
</td>
	</tr>
	<tr id='map-latlngtolayerpoint'>
		<td><code><b>latLngToLayerPoint</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Given a geographical coordinate, returns the corresponding pixel coordinate
relative to the <a href="#map-getpixelorigin">origin pixel</a>.</p>
</td>
	</tr>
	<tr id='map-wraplatlng'>
		<td><code><b>wrapLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns a <a href="#latlng"><code>LatLng</code></a> where <code>lat</code> and <code>lng</code> has been wrapped according to the
map's CRS's <code>wrapLat</code> and <code>wrapLng</code> properties, if they are outside the
CRS's bounds.
By default this means longitude is wrapped around the dateline so its
value is between -180 and +180 degrees.</p>
</td>
	</tr>
	<tr id='map-wraplatlngbounds'>
		<td><code><b>wrapLatLngBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>)</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns a <a href="#latlngbounds"><code>LatLngBounds</code></a> with the same size as the given one, ensuring that
its center is within the CRS's bounds.
By default this means the center longitude is wrapped around the dateline so its
value is between -180 and +180 degrees, and the majority of the bounds
overlaps the CRS's bounds.</p>
</td>
	</tr>
	<tr id='map-distance'>
		<td><code><b>distance</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng1</i>, <nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng2</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the distance between two geographical coordinates according to
the map's CRS. By default this measures distance in meters.</p>
</td>
	</tr>
	<tr id='map-containerpointtolayerpoint'>
		<td><code><b>containerPointToLayerPoint</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Given a pixel coordinate relative to the map container, returns the corresponding
pixel coordinate relative to the <a href="#map-getpixelorigin">origin pixel</a>.</p>
</td>
	</tr>
	<tr id='map-layerpointtocontainerpoint'>
		<td><code><b>layerPointToContainerPoint</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Given a pixel coordinate relative to the <a href="#map-getpixelorigin">origin pixel</a>,
returns the corresponding pixel coordinate relative to the map container.</p>
</td>
	</tr>
	<tr id='map-containerpointtolatlng'>
		<td><code><b>containerPointToLatLng</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Given a pixel coordinate relative to the map container, returns
the corresponding geographical coordinate (for the current zoom level).</p>
</td>
	</tr>
	<tr id='map-latlngtocontainerpoint'>
		<td><code><b>latLngToContainerPoint</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Given a geographical coordinate, returns the corresponding pixel coordinate
relative to the map container.</p>
</td>
	</tr>
	<tr id='map-mouseeventtocontainerpoint'>
		<td><code><b>mouseEventToContainerPoint</b>(<nobr>&lt;<a href='#mouseevent'>MouseEvent</a>&gt;</nobr> <i>ev</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Given a MouseEvent object, returns the pixel coordinate relative to the
map container where the event took place.</p>
</td>
	</tr>
	<tr id='map-mouseeventtolayerpoint'>
		<td><code><b>mouseEventToLayerPoint</b>(<nobr>&lt;<a href='#mouseevent'>MouseEvent</a>&gt;</nobr> <i>ev</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Given a MouseEvent object, returns the pixel coordinate relative to
the <a href="#map-getpixelorigin">origin pixel</a> where the event took place.</p>
</td>
	</tr>
	<tr id='map-mouseeventtolatlng'>
		<td><code><b>mouseEventToLatLng</b>(<nobr>&lt;<a href='#mouseevent'>MouseEvent</a>&gt;</nobr> <i>ev</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Given a MouseEvent object, returns geographical coordinate where the
event took place.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='map-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='map-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='map-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='map-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='map-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='map-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='map-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='map-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='map-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='map-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='map-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='map-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='map-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='map-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='map-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='map-property'>Properties</h3>

<section class='collapsable'>

<h4 id='map-controls'>Controls</h4>


<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-zoomcontrol'>
		<td><code><b>zoomControl</b></code></td>
		<td><code><a href='#control-zoom'>Control.Zoom</a></code></td>
		<td>The default zoom control (only available if the
<a href="#map-zoomcontrol"><code>zoomControl</code> option</a> was <code>true</code> when creating the map).</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='map-handlers'>Handlers</h4>


<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-boxzoom'>
		<td><code><b>boxZoom</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Box (shift-drag with mouse) zoom handler.</td>
	</tr>
	<tr id='map-doubleclickzoom'>
		<td><code><b>doubleClickZoom</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Double click zoom handler.</td>
	</tr>
	<tr id='map-dragging'>
		<td><code><b>dragging</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Map dragging handler (by both mouse and touch).</td>
	</tr>
	<tr id='map-keyboard'>
		<td><code><b>keyboard</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Keyboard navigation handler.</td>
	</tr>
	<tr id='map-scrollwheelzoom'>
		<td><code><b>scrollWheelZoom</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Scroll wheel zoom handler.</td>
	</tr>
	<tr id='map-tap'>
		<td><code><b>tap</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Mobile touch hacks (quick tap and touch hold) handler.</td>
	</tr>
	<tr id='map-touchzoom'>
		<td><code><b>touchZoom</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Touch zoom handler.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='map-pane'>Map panes</h3>

<section >



<div class='section-comments'>Panes are DOM elements used to control the ordering of layers on the map. You
can access panes with <a href="#map-getpane"><code>map.getPane</code></a> or
<a href="#map-getpanes"><code>map.getPanes</code></a> methods. New panes can be created with the
<a href="#map-createpane"><code>map.createPane</code></a> method.
<p>Every map has the following default panes that differ only in zIndex.</p></div>

<table><thead>
	<tr>
		<th>Pane</th>
		<th>Type</th>
		<th>Z-index</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='map-mappane'>
		<td><code><b>mapPane</b></code></td>
		<td><code>HTMLElement</code></td>
		<td><code>&#x27;auto&#x27;</code></td>
		<td>Pane that contains all other map panes</td>
	</tr>
	<tr id='map-tilepane'>
		<td><code><b>tilePane</b></code></td>
		<td><code>HTMLElement</code></td>
		<td><code>200</code></td>
		<td>Pane for <a href="#gridlayer"><code>GridLayer</code></a>s and <a href="#tilelayer"><code>TileLayer</code></a>s</td>
	</tr>
	<tr id='map-overlaypane'>
		<td><code><b>overlayPane</b></code></td>
		<td><code>HTMLElement</code></td>
		<td><code>400</code></td>
		<td>Pane for overlay shadows (e.g. <a href="#marker"><code>Marker</code></a> shadows)</td>
	</tr>
	<tr id='map-shadowpane'>
		<td><code><b>shadowPane</b></code></td>
		<td><code>HTMLElement</code></td>
		<td><code>500</code></td>
		<td>Pane for vectors (<a href="#path"><code>Path</code></a>s, like <a href="#polyline"><code>Polyline</code></a>s and <a href="#polygon"><code>Polygon</code></a>s), <a href="#imageoverlay"><code>ImageOverlay</code></a>s and <a href="#videooverlay"><code>VideoOverlay</code></a>s</td>
	</tr>
	<tr id='map-markerpane'>
		<td><code><b>markerPane</b></code></td>
		<td><code>HTMLElement</code></td>
		<td><code>600</code></td>
		<td>Pane for <a href="#icon"><code>Icon</code></a>s of <a href="#marker"><code>Marker</code></a>s</td>
	</tr>
	<tr id='map-tooltippane'>
		<td><code><b>tooltipPane</b></code></td>
		<td><code>HTMLElement</code></td>
		<td><code>650</code></td>
		<td>Pane for <a href="#tooltip"><code>Tooltip</code></a>s.</td>
	</tr>
	<tr id='map-popuppane'>
		<td><code><b>popupPane</b></code></td>
		<td><code>HTMLElement</code></td>
		<td><code>700</code></td>
		<td>Pane for <a href="#popup"><code>Popup</code></a>s.</td>
	</tr>
</tbody></table>

</section>


</section><span id='locate-options'></span>

<section>
<h3 id='locate-options-option'>Locate options</h3>

<section >



<div class='section-comments'>Some of the geolocation methods for <a href="#map"><code>Map</code></a> take in an <code>options</code> parameter. This
is a plain javascript object with the following optional components:</div>

<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='locate-options-watch'>
		<td><code><b>watch</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, starts continuous watching of location changes (instead of detecting it
once) using W3C <code>watchPosition</code> method. You can later stop watching using
<code>map.stopLocate()</code> method.</td>
	</tr>
	<tr id='locate-options-setview'>
		<td><code><b>setView</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, automatically sets the map view to the user location with respect to
detection accuracy, or to world view if geolocation failed.</td>
	</tr>
	<tr id='locate-options-maxzoom'>
		<td><code><b>maxZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>Infinity</code></td>
		<td>The maximum zoom for automatic view setting when using <code>setView</code> option.</td>
	</tr>
	<tr id='locate-options-timeout'>
		<td><code><b>timeout</b></code></td>
		<td><code>Number</code></td>
		<td><code>10000</code></td>
		<td>Number of milliseconds to wait for a response from geolocation before firing a
<code>locationerror</code> event.</td>
	</tr>
	<tr id='locate-options-maximumage'>
		<td><code><b>maximumAge</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>Maximum age of detected location. If less than this amount of milliseconds
passed since last geolocation response, <code>locate</code> will return a cached location.</td>
	</tr>
	<tr id='locate-options-enablehighaccuracy'>
		<td><code><b>enableHighAccuracy</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Enables high accuracy, see <a href="http://dev.w3.org/geo/api/spec-source.php#high-accuracy">description in the W3C spec</a>.</td>
	</tr>
</tbody></table>

</section>


</section><span id='zoom-options'></span>

<section>
<h3 id='zoom-options-option'>Zoom options</h3>

<section >



<div class='section-comments'>Some of the <a href="#map"><code>Map</code></a> methods which modify the zoom level take in an <code>options</code>
parameter. This is a plain javascript object with the following optional
components:</div>

<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='zoom-options-animate'>
		<td><code><b>animate</b></code></td>
		<td><code>Boolean</code></td>
		<td><code></code></td>
		<td>If not specified, zoom animation will happen if the zoom origin is inside the
current view. If <code>true</code>, the map will attempt animating zoom disregarding where
zoom origin is. Setting <code>false</code> will make it always reset the view completely
without animation.</td>
	</tr>
</tbody></table>

</section>


</section><span id='pan-options'></span>

<section>
<h3 id='pan-options-option'>Pan options</h3>

<section >



<div class='section-comments'>Some of the <a href="#map"><code>Map</code></a> methods which modify the center of the map take in an <code>options</code>
parameter. This is a plain javascript object with the following optional
components:</div>

<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='pan-options-animate'>
		<td><code><b>animate</b></code></td>
		<td><code>Boolean</code></td>
		<td><code></code></td>
		<td>If <code>true</code>, panning will always be animated if possible. If <code>false</code>, it will
not animate panning, either resetting the map view if panning more than a
screen away, or just setting a new offset for the map pane (except for <code>panBy</code>
which always does the latter).</td>
	</tr>
	<tr id='pan-options-duration'>
		<td><code><b>duration</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.25</code></td>
		<td>Duration of animated panning, in seconds.</td>
	</tr>
	<tr id='pan-options-easelinearity'>
		<td><code><b>easeLinearity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.25</code></td>
		<td>The curvature factor of panning animation easing (third parameter of the
<a href="http://cubic-bezier.com/">Cubic Bezier curve</a>). 1.0 means linear animation,
and the smaller this number, the more bowed the curve.</td>
	</tr>
	<tr id='pan-options-nomovestart'>
		<td><code><b>noMoveStart</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, panning won't fire <code>movestart</code> event on start (used internally for
panning inertia).</td>
	</tr>
</tbody></table>

</section>


</section><span id='zoom/pan-options'></span>

<section>
<h3 id=''>Zoom/pan options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#zoom-options'>Zoom options</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='zoom/pan-options-animate'>
		<td><code><b>animate</b></code></td>
		<td><code>Boolean</code></td>
		<td><code></code></td>
		<td>If not specified, zoom animation will happen if the zoom origin is inside the
current view. If <code>true</code>, the map will attempt animating zoom disregarding where
zoom origin is. Setting <code>false</code> will make it always reset the view completely
without animation.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#pan-options'>Pan options</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='zoom/pan-options-duration'>
		<td><code><b>duration</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.25</code></td>
		<td>Duration of animated panning, in seconds.</td>
	</tr>
	<tr id='zoom/pan-options-easelinearity'>
		<td><code><b>easeLinearity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.25</code></td>
		<td>The curvature factor of panning animation easing (third parameter of the
<a href="http://cubic-bezier.com/">Cubic Bezier curve</a>). 1.0 means linear animation,
and the smaller this number, the more bowed the curve.</td>
	</tr>
	<tr id='zoom/pan-options-nomovestart'>
		<td><code><b>noMoveStart</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, panning won't fire <code>movestart</code> event on start (used internally for
panning inertia).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='fitbounds-options'></span>

<section>
<h3 id='fitbounds-options-option'>FitBounds options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='fitbounds-options-paddingtopleft'>
		<td><code><b>paddingTopLeft</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>Sets the amount of padding in the top left corner of a map container that
shouldn't be accounted for when setting the view to fit bounds. Useful if you
have some control overlays on the map like a sidebar and you don't want them
to obscure objects you're zooming to.</td>
	</tr>
	<tr id='fitbounds-options-paddingbottomright'>
		<td><code><b>paddingBottomRight</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>The same for the bottom right corner of the map.</td>
	</tr>
	<tr id='fitbounds-options-padding'>
		<td><code><b>padding</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>Equivalent of setting both top left and bottom right padding to the same value.</td>
	</tr>
	<tr id='fitbounds-options-maxzoom'>
		<td><code><b>maxZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>null</code></td>
		<td>The maximum possible zoom to use.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#zoom-options'>Zoom options</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='fitbounds-options-animate'>
		<td><code><b>animate</b></code></td>
		<td><code>Boolean</code></td>
		<td><code></code></td>
		<td>If not specified, zoom animation will happen if the zoom origin is inside the
current view. If <code>true</code>, the map will attempt animating zoom disregarding where
zoom origin is. Setting <code>false</code> will make it always reset the view completely
without animation.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#pan-options'>Pan options</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='fitbounds-options-duration'>
		<td><code><b>duration</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.25</code></td>
		<td>Duration of animated panning, in seconds.</td>
	</tr>
	<tr id='fitbounds-options-easelinearity'>
		<td><code><b>easeLinearity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.25</code></td>
		<td>The curvature factor of panning animation easing (third parameter of the
<a href="http://cubic-bezier.com/">Cubic Bezier curve</a>). 1.0 means linear animation,
and the smaller this number, the more bowed the curve.</td>
	</tr>
	<tr id='fitbounds-options-nomovestart'>
		<td><code><b>noMoveStart</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, panning won't fire <code>movestart</code> event on start (used internally for
panning inertia).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='marker'>Marker</h2><p>L.Marker is used to display clickable/draggable icons on the map. Extends <a href="#layer"><code>Layer</code></a>.</p>

<section>
<h3 id='marker-example'>Usage example</h3>

<section >





<pre><code class="language-js">L.marker([50.5, 30.5]).addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='marker-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-l-marker'>
		<td><code><b>L.marker</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;<a href='#marker-option'>Marker options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates a Marker object given a geographical point and optionally an options object.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='marker-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-icon'>
		<td><code><b>icon</b></code></td>
		<td><code><a href='#icon'>Icon</a></code></td>
		<td><code>*</code></td>
		<td>Icon instance to use for rendering the marker.
See <a href="#icon">Icon documentation</a> for details on how to customize the marker icon.
If not specified, a common instance of <a href="#icon-default"><code>L.Icon.Default</code></a> is used.</td>
	</tr>
	<tr id='marker-keyboard'>
		<td><code><b>keyboard</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the marker can be tabbed to with a keyboard and clicked by pressing enter.</td>
	</tr>
	<tr id='marker-title'>
		<td><code><b>title</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>Text for the browser tooltip that appear on marker hover (no tooltip by default).</td>
	</tr>
	<tr id='marker-alt'>
		<td><code><b>alt</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>Text for the <code>alt</code> attribute of the icon image (useful for accessibility).</td>
	</tr>
	<tr id='marker-zindexoffset'>
		<td><code><b>zIndexOffset</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>By default, marker images zIndex is set automatically based on its latitude. Use this option if you want to put the marker on top of all others (or below), specifying a high value like <code>1000</code> (or high negative value, respectively).</td>
	</tr>
	<tr id='marker-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>The opacity of the marker.</td>
	</tr>
	<tr id='marker-riseonhover'>
		<td><code><b>riseOnHover</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, the marker will get on top of others when you hover the mouse over it.</td>
	</tr>
	<tr id='marker-riseoffset'>
		<td><code><b>riseOffset</b></code></td>
		<td><code>Number</code></td>
		<td><code>250</code></td>
		<td>The z-index offset used for the <code>riseOnHover</code> feature.</td>
	</tr>
	<tr id='marker-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;markerPane&#x27;</code></td>
		<td><code>Map pane</code> where the markers icon will be added.</td>
	</tr>
	<tr id='marker-shadowpane'>
		<td><code><b>shadowPane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;shadowPane&#x27;</code></td>
		<td><code>Map pane</code> where the markers shadow will be added.</td>
	</tr>
	<tr id='marker-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>When <code>true</code>, a mouse event on this marker will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='marker-draggable-marker-options'>Draggable marker options</h4>


<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-draggable'>
		<td><code><b>draggable</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether the marker is draggable with mouse/touch or not.</td>
	</tr>
	<tr id='marker-autopan'>
		<td><code><b>autoPan</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether to pan the map when dragging this marker near its edge or not.</td>
	</tr>
	<tr id='marker-autopanpadding'>
		<td><code><b>autoPanPadding</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>Point(50, 50)</code></td>
		<td>Distance (in pixels to the left/right and to the top/bottom) of the
map edge to start panning the map.</td>
	</tr>
	<tr id='marker-autopanspeed'>
		<td><code><b>autoPanSpeed</b></code></td>
		<td><code>Number</code></td>
		<td><code>10</code></td>
		<td>Number of pixels the map should pan by.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='marker-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-move'>
		<td><code><b>move</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the marker is moved via <a href="#marker-setlatlng"><code>setLatLng</code></a> or by <a href="#marker-dragging">dragging</a>. Old and new coordinates are included in event arguments as <code>oldLatLng</code>, <a href="#latlng"><code>latlng</code></a>.</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='marker-dragging-events'>Dragging events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-dragstart'>
		<td><code><b>dragstart</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the user starts dragging the marker.</td>
	</tr>
	<tr id='marker-movestart'>
		<td><code><b>movestart</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the marker starts moving (because of dragging).</td>
	</tr>
	<tr id='marker-drag'>
		<td><code><b>drag</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired repeatedly while the user drags the marker.</td>
	</tr>
	<tr id='marker-dragend'>
		<td><code><b>dragend</b></code></td>
		<td><code><a href='#dragendevent'>DragEndEvent</a></code></td>
		<td>Fired when the user stops dragging the marker.</td>
	</tr>
	<tr id='marker-moveend'>
		<td><code><b>moveend</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the marker stops moving (because of dragging).</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='marker-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='marker-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='marker-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='marker-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='marker-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='marker-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='marker-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='marker-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='marker-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='marker-method'>Methods</h3>

<section >



<div class='section-comments'>In addition to <a href="#layer">shared layer methods</a> like <code>addTo()</code> and <code>remove()</code> and <a href="#popup">popup methods</a> like bindPopup() you can also use the following methods:</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-getlatlng'>
		<td><code><b>getLatLng</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the current geographical position of the marker.</p>
</td>
	</tr>
	<tr id='marker-setlatlng'>
		<td><code><b>setLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the marker position to the given point.</p>
</td>
	</tr>
	<tr id='marker-setzindexoffset'>
		<td><code><b>setZIndexOffset</b>(<nobr>&lt;Number&gt;</nobr> <i>offset</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#marker-zindexoffset">zIndex offset</a> of the marker.</p>
</td>
	</tr>
	<tr id='marker-geticon'>
		<td><code><b>getIcon</b>()</code></td>
		<td><code><a href='#icon'>Icon</a></code></td>
		<td><p>Returns the current icon used by the marker</p>
</td>
	</tr>
	<tr id='marker-seticon'>
		<td><code><b>setIcon</b>(<nobr>&lt;<a href='#icon'>Icon</a>&gt;</nobr> <i>icon</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the marker icon.</p>
</td>
	</tr>
	<tr id='marker-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the opacity of the marker.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='marker-other-methods'>Other methods</h4>


<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the marker (as a GeoJSON <a href="#point"><code>Point</code></a> Feature).</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='marker-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='marker-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='marker-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='marker-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='marker-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='marker-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='marker-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='marker-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='marker-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='marker-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='marker-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='marker-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='marker-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='marker-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='marker-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='marker-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='marker-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='marker-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='marker-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='marker-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='marker-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='marker-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='marker-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='marker-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='marker-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='marker-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='marker-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='marker-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='marker-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='marker-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='marker-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='marker-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='marker-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='marker-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='marker-property'>Properties</h3>

<section class='collapsable'>

<h4 id='marker-interaction-handlers'>Interaction handlers</h4>

<div class='section-comments'>Interaction handlers are properties of a marker instance that allow you to control interaction behavior in runtime, enabling or disabling certain features such as dragging (see <a href="#handler"><code>Handler</code></a> methods). Example:
<pre><code class="language-js">marker.dragging.disable();
</code></pre></div>

<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='marker-dragging'>
		<td><code><b>dragging</b></code></td>
		<td><code><a href='#handler'>Handler</a></code></td>
		<td>Marker dragging handler (by both mouse and touch). Only valid when the marker is on the map (Otherwise set <a href="#marker-draggable"><code>marker.options.draggable</code></a>).</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='popup'>Popup</h2><p>Used to open popups in certain places of the map. Use <a href="#map-openpopup">Map.openPopup</a> to
open popups while making sure that only one popup is open at one time
(recommended for usability), or use <a href="#map-addlayer">Map.addLayer</a> to open as many as you want.</p>

<section>
<h3 id='popup-example'>Usage example</h3>

<section >





<p>If you want to just bind a popup to marker click and then open it, it's really easy:</p>
<pre><code class="language-js">marker.bindPopup(popupContent).openPopup();
</code></pre>
<p>Path overlays like polylines also have a <code>bindPopup</code> method.
Here's a more complicated way to open a popup on a map:</p>
<pre><code class="language-js">var popup = L.popup()
	.setLatLng(latlng)
	.setContent('&lt;p&gt;Hello world!&lt;br /&gt;This is a nice popup.&lt;/p&gt;')
	.openOn(map);
</code></pre>



</section>


</section><section>
<h3 id='popup-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-l-popup'>
		<td><code><b>L.popup</b>(<nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>, <nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>source?</i>)</code></td>
		<td>Instantiates a <a href="#popup"><code>Popup</code></a> object given an optional <code>options</code> object that describes its appearance and location and an optional <code>source</code> object that is used to tag the popup with a reference to the Layer to which it refers.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='popup-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-maxwidth'>
		<td><code><b>maxWidth</b></code></td>
		<td><code>Number</code></td>
		<td><code>300</code></td>
		<td>Max width of the popup, in pixels.</td>
	</tr>
	<tr id='popup-minwidth'>
		<td><code><b>minWidth</b></code></td>
		<td><code>Number</code></td>
		<td><code>50</code></td>
		<td>Min width of the popup, in pixels.</td>
	</tr>
	<tr id='popup-maxheight'>
		<td><code><b>maxHeight</b></code></td>
		<td><code>Number</code></td>
		<td><code>null</code></td>
		<td>If set, creates a scrollable container of the given height
inside a popup if its content exceeds it.</td>
	</tr>
	<tr id='popup-autopan'>
		<td><code><b>autoPan</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Set it to <code>false</code> if you don't want the map to do panning animation
to fit the opened popup.</td>
	</tr>
	<tr id='popup-autopanpaddingtopleft'>
		<td><code><b>autoPanPaddingTopLeft</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>The margin between the popup and the top left corner of the map
view after autopanning was performed.</td>
	</tr>
	<tr id='popup-autopanpaddingbottomright'>
		<td><code><b>autoPanPaddingBottomRight</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>The margin between the popup and the bottom right corner of the map
view after autopanning was performed.</td>
	</tr>
	<tr id='popup-autopanpadding'>
		<td><code><b>autoPanPadding</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>Point(5, 5)</code></td>
		<td>Equivalent of setting both top left and bottom right autopan padding to the same value.</td>
	</tr>
	<tr id='popup-keepinview'>
		<td><code><b>keepInView</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Set it to <code>true</code> if you want to prevent users from panning the popup
off of the screen while it is open.</td>
	</tr>
	<tr id='popup-closebutton'>
		<td><code><b>closeButton</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Controls the presence of a close button in the popup.</td>
	</tr>
	<tr id='popup-autoclose'>
		<td><code><b>autoClose</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Set it to <code>false</code> if you want to override the default behavior of
the popup closing when another popup is opened.</td>
	</tr>
	<tr id='popup-closeonescapekey'>
		<td><code><b>closeOnEscapeKey</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Set it to <code>false</code> if you want to override the default behavior of
the ESC key for closing of the popup.</td>
	</tr>
	<tr id='popup-closeonclick'>
		<td><code><b>closeOnClick</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>*</code></td>
		<td>Set it if you want to override the default behavior of the popup closing when user clicks
on the map. Defaults to the map's <a href="#map-closepopuponclick"><code>closePopupOnClick</code></a> option.</td>
	</tr>
	<tr id='popup-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom CSS class name to assign to the popup.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#divoverlay'>DivOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-offset'>
		<td><code><b>offset</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>Point(0, 7)</code></td>
		<td>The offset of the popup position. Useful to control the anchor
of the popup when opening it on some overlays.</td>
	</tr>
	<tr id='popup-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;popupPane&#x27;</code></td>
		<td><code>Map pane</code> where the popup will be added.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='popup-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='popup-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='popup-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='popup-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-getlatlng'>
		<td><code><b>getLatLng</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the geographical point of popup.</p>
</td>
	</tr>
	<tr id='popup-setlatlng'>
		<td><code><b>setLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the geographical point where the popup will open.</p>
</td>
	</tr>
	<tr id='popup-getcontent'>
		<td><code><b>getContent</b>()</code></td>
		<td><code>String|HTMLElement</code></td>
		<td><p>Returns the content of the popup.</p>
</td>
	</tr>
	<tr id='popup-setcontent'>
		<td><code><b>setContent</b>(<nobr>&lt;String|HTMLElement|Function&gt;</nobr> <i>htmlContent</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the HTML content of the popup. If a function is passed the source layer will be passed to the function. The function should return a <code>String</code> or <code>HTMLElement</code> to be used in the popup.</p>
</td>
	</tr>
	<tr id='popup-getelement'>
		<td><code><b>getElement</b>()</code></td>
		<td><code>String|HTMLElement</code></td>
		<td><p>Returns the HTML container of the popup.</p>
</td>
	</tr>
	<tr id='popup-update'>
		<td><code><b>update</b>()</code></td>
		<td><code>null</code></td>
		<td><p>Updates the popup content, layout and position. Useful for updating the popup after something inside changed, e.g. image loaded.</p>
</td>
	</tr>
	<tr id='popup-isopen'>
		<td><code><b>isOpen</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> when the popup is visible on the map.</p>
</td>
	</tr>
	<tr id='popup-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings this popup in front of other popups (in the same map pane).</p>
</td>
	</tr>
	<tr id='popup-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings this popup to the back of other popups (in the same map pane).</p>
</td>
	</tr>
	<tr id='popup-openon'>
		<td><code><b>openOn</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the popup to the map and closes the previous one. The same as <code>map.openPopup(popup)</code>.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='popup-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='popup-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='popup-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='popup-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='popup-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='popup-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='popup-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='popup-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='popup-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='popup-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='popup-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='popup-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='popup-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='popup-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='popup-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='popup-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='popup-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='popup-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='popup-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popup-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='popup-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='popup-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='popup-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='popup-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='popup-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='popup-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='popup-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='popup-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='popup-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='popup-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='popup-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='popup-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='popup-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='popup-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='popup-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='tooltip'>Tooltip</h2><p>Used to display small texts on top of map layers.</p>

<section>
<h3 id='tooltip-example'>Usage example</h3>

<section >





<pre><code class="language-js">marker.bindTooltip(&quot;my tooltip text&quot;).openTooltip();
</code></pre>
<p>Note about tooltip offset. Leaflet takes two options in consideration
for computing tooltip offsetting:</p>
<ul>
<li>the <code>offset</code> Tooltip option: it defaults to [0, 0], and it's specific to one tooltip.
Add a positive x offset to move the tooltip to the right, and a positive y offset to
move it to the bottom. Negatives will move to the left and top.</li>
<li>the <code>tooltipAnchor</code> Icon option: this will only be considered for Marker. You
should adapt this value if you use a custom icon.</li>
</ul>



</section>


</section><section>
<h3 id='tooltip-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-l-tooltip'>
		<td><code><b>L.tooltip</b>(<nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>, <nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>source?</i>)</code></td>
		<td>Instantiates a Tooltip object given an optional <code>options</code> object that describes its appearance and location and an optional <code>source</code> object that is used to tag the tooltip with a reference to the Layer to which it refers.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='tooltip-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;tooltipPane&#x27;</code></td>
		<td><code>Map pane</code> where the tooltip will be added.</td>
	</tr>
	<tr id='tooltip-offset'>
		<td><code><b>offset</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>Point(0, 0)</code></td>
		<td>Optional offset of the tooltip position.</td>
	</tr>
	<tr id='tooltip-direction'>
		<td><code><b>direction</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;auto&#x27;</code></td>
		<td>Direction where to open the tooltip. Possible values are: <code>right</code>, <code>left</code>,
<code>top</code>, <code>bottom</code>, <code>center</code>, <code>auto</code>.
<code>auto</code> will dynamically switch between <code>right</code> and <code>left</code> according to the tooltip
position on the map.</td>
	</tr>
	<tr id='tooltip-permanent'>
		<td><code><b>permanent</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether to open the tooltip permanently or only on mouseover.</td>
	</tr>
	<tr id='tooltip-sticky'>
		<td><code><b>sticky</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If true, the tooltip will follow the mouse instead of being fixed at the feature center.</td>
	</tr>
	<tr id='tooltip-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If true, the tooltip will listen to the feature events.</td>
	</tr>
	<tr id='tooltip-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.9</code></td>
		<td>Tooltip container opacity.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#divoverlay'>DivOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom CSS class name to assign to the popup.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='tooltip-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='tooltip-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='tooltip-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='tooltip-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='tooltip-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='tooltip-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='tooltip-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='tooltip-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='tooltip-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='tooltip-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='tooltip-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='tooltip-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='tooltip-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='tooltip-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='tooltip-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='tooltip-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='tooltip-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='tooltip-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='tooltip-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='tooltip-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='tooltip-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='tooltip-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltip-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='tooltip-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='tooltip-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='tooltip-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='tooltip-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='tooltip-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='tooltip-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='tooltip-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='tooltip-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='tooltip-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='tooltip-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='tooltip-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='tooltip-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='tooltip-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='tooltip-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='tooltip-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='tilelayer'>TileLayer</h2><p>Used to load and display tile layers on the map. Note that most tile servers require attribution, which you can set under <a href="#layer"><code>Layer</code></a>. Extends <a href="#gridlayer"><code>GridLayer</code></a>.</p>

<section>
<h3 id='tilelayer-example'>Usage example</h3>

<section >





<pre><code class="language-js">L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar', attribution: 'Map data &amp;copy; &lt;a href=&quot;https://www.openstreetmap.org/&quot;&gt;OpenStreetMap&lt;/a&gt; contributors, &lt;a href=&quot;https://creativecommons.org/licenses/by-sa/2.0/&quot;&gt;CC-BY-SA&lt;/a&gt;'}).addTo(map);
</code></pre>



</section><section >

<h4 id='tilelayer-url-template'>URL template</h4>



<p>A string of the following form:</p>
<pre><code>'http://{s}.somedomain.com/blabla/{z}/{x}/{y}{r}.png'
</code></pre>
<p><code>{s}</code> means one of the available subdomains (used sequentially to help with browser parallel requests per domain limitation; subdomain values are specified in options; <code>a</code>, <code>b</code> or <code>c</code> by default, can be omitted), <code>{z}</code> — zoom level, <code>{x}</code> and <code>{y}</code> — tile coordinates. <code>{r}</code> can be used to add &quot;@2x&quot; to the URL to load retina tiles.</p>
<p>You can use custom keys in the template, which will be <a href="#util-template">evaluated</a> from TileLayer options, like this:</p>
<pre><code>L.tileLayer('http://{s}.somedomain.com/{foo}/{z}/{x}/{y}.png', {foo: 'bar'});
</code></pre>



</section>


</section><section>
<h3 id='tilelayer-factory'>Creation</h3>

<section class='collapsable'>

<h4 id='tilelayer-extension-methods'>Extension methods</h4>


<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-l-tilelayer'>
		<td><code><b>L.tilelayer</b>(<nobr>&lt;String&gt;</nobr> <i>urlTemplate</i>, <nobr>&lt;<a href='#tilelayer-option'>TileLayer options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates a tile layer object given a <code>URL template</code> and optionally an options object.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='tilelayer-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-minzoom'>
		<td><code><b>minZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>The minimum zoom level down to which this layer will be displayed (inclusive).</td>
	</tr>
	<tr id='tilelayer-maxzoom'>
		<td><code><b>maxZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>18</code></td>
		<td>The maximum zoom level up to which this layer will be displayed (inclusive).</td>
	</tr>
	<tr id='tilelayer-subdomains'>
		<td><code><b>subdomains</b></code></td>
		<td><code>String|String[]</code></td>
		<td><code>&#x27;abc&#x27;</code></td>
		<td>Subdomains of the tile service. Can be passed in the form of one string (where each letter is a subdomain name) or an array of strings.</td>
	</tr>
	<tr id='tilelayer-errortileurl'>
		<td><code><b>errorTileUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>URL to the tile image to show in place of the tile that failed to load.</td>
	</tr>
	<tr id='tilelayer-zoomoffset'>
		<td><code><b>zoomOffset</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>The zoom number used in tile URLs will be offset with this value.</td>
	</tr>
	<tr id='tilelayer-tms'>
		<td><code><b>tms</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, inverses Y axis numbering for tiles (turn this on for <a href="https://en.wikipedia.org/wiki/Tile_Map_Service">TMS</a> services).</td>
	</tr>
	<tr id='tilelayer-zoomreverse'>
		<td><code><b>zoomReverse</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If set to true, the zoom number used in tile URLs will be reversed (<code>maxZoom - zoom</code> instead of <code>zoom</code>)</td>
	</tr>
	<tr id='tilelayer-detectretina'>
		<td><code><b>detectRetina</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code> and user is on a retina display, it will request four tiles of half the specified size and a bigger zoom level in place of one to utilize the high resolution.</td>
	</tr>
	<tr id='tilelayer-crossorigin'>
		<td><code><b>crossOrigin</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>false</code></td>
		<td>Whether the crossOrigin attribute will be added to the tiles.
If a String is provided, all tiles will have their crossOrigin attribute set to the String provided. This is needed if you want to access tile pixel data.
Refer to <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_settings_attributes">CORS Settings</a> for valid String values.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#gridlayer'>GridLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-tilesize'>
		<td><code><b>tileSize</b></code></td>
		<td><code>Number|Point</code></td>
		<td><code>256</code></td>
		<td>Width and height of tiles in the grid. Use a number if width and height are equal, or <code>L.point(width, height)</code> otherwise.</td>
	</tr>
	<tr id='tilelayer-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Opacity of the tiles. Can be used in the <code>createTile()</code> function.</td>
	</tr>
	<tr id='tilelayer-updatewhenidle'>
		<td><code><b>updateWhenIdle</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>(depends)</code></td>
		<td>Load new tiles only when panning ends.
<code>true</code> by default on mobile browsers, in order to avoid too many requests and keep smooth navigation.
<code>false</code> otherwise in order to display new tiles <em>during</em> panning, since it is easy to pan outside the
<a href="#gridlayer-keepbuffer"><code>keepBuffer</code></a> option in desktop browsers.</td>
	</tr>
	<tr id='tilelayer-updatewhenzooming'>
		<td><code><b>updateWhenZooming</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>By default, a smooth zoom animation (during a <a href="#map-touchzoom">touch zoom</a> or a <a href="#map-flyto"><code>flyTo()</code></a>) will update grid layers every integer zoom level. Setting this option to <code>false</code> will update the grid layer only when the smooth animation ends.</td>
	</tr>
	<tr id='tilelayer-updateinterval'>
		<td><code><b>updateInterval</b></code></td>
		<td><code>Number</code></td>
		<td><code>200</code></td>
		<td>Tiles will not update more than once every <code>updateInterval</code> milliseconds when panning.</td>
	</tr>
	<tr id='tilelayer-zindex'>
		<td><code><b>zIndex</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>The explicit zIndex of the tile layer.</td>
	</tr>
	<tr id='tilelayer-bounds'>
		<td><code><b>bounds</b></code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><code>undefined</code></td>
		<td>If set, tiles will only be loaded inside the set <a href="#latlngbounds"><code>LatLngBounds</code></a>.</td>
	</tr>
	<tr id='tilelayer-maxnativezoom'>
		<td><code><b>maxNativeZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>Maximum zoom number the tile source has available. If it is specified,
the tiles on all zoom levels higher than <code>maxNativeZoom</code> will be loaded
from <code>maxNativeZoom</code> level and auto-scaled.</td>
	</tr>
	<tr id='tilelayer-minnativezoom'>
		<td><code><b>minNativeZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>Minimum zoom number the tile source has available. If it is specified,
the tiles on all zoom levels lower than <code>minNativeZoom</code> will be loaded
from <code>minNativeZoom</code> level and auto-scaled.</td>
	</tr>
	<tr id='tilelayer-nowrap'>
		<td><code><b>noWrap</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether the layer is wrapped around the antimeridian. If <code>true</code>, the
GridLayer will only be displayed once at low zoom levels. Has no
effect when the <a href="#map-crs">map CRS</a> doesn't wrap around. Can be used
in combination with [<a href="#bounds"><code>bounds</code></a>](#gridlayer-bounds) to prevent requesting
tiles outside the CRS limits.</td>
	</tr>
	<tr id='tilelayer-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;tilePane&#x27;</code></td>
		<td><code>Map pane</code> where the grid layer will be added.</td>
	</tr>
	<tr id='tilelayer-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to the tile layer. Empty by default.</td>
	</tr>
	<tr id='tilelayer-keepbuffer'>
		<td><code><b>keepBuffer</b></code></td>
		<td><code>Number</code></td>
		<td><code>2</code></td>
		<td>When panning the map, keep this many rows and columns of tiles before unloading them.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#gridlayer'>GridLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-loading'>
		<td><code><b>loading</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the grid layer starts loading tiles.</td>
	</tr>
	<tr id='tilelayer-tileunload'>
		<td><code><b>tileunload</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile is removed (e.g. when a tile goes off the screen).</td>
	</tr>
	<tr id='tilelayer-tileloadstart'>
		<td><code><b>tileloadstart</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile is requested and starts loading.</td>
	</tr>
	<tr id='tilelayer-tileerror'>
		<td><code><b>tileerror</b></code></td>
		<td><code><a href='#tileerrorevent'>TileErrorEvent</a></code></td>
		<td>Fired when there is an error loading a tile.</td>
	</tr>
	<tr id='tilelayer-tileload'>
		<td><code><b>tileload</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile loads.</td>
	</tr>
	<tr id='tilelayer-load'>
		<td><code><b>load</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the grid layer loaded all visible tiles.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='tilelayer-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='tilelayer-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='tilelayer-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='tilelayer-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-seturl'>
		<td><code><b>setUrl</b>(<nobr>&lt;String&gt;</nobr> <i>url</i>, <nobr>&lt;Boolean&gt;</nobr> <i>noRedraw?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Updates the layer's URL template and redraws it (unless <code>noRedraw</code> is set to <code>true</code>).
If the URL does not change, the layer will not be redrawn unless
the noRedraw parameter is set to false.</p>
</td>
	</tr>
	<tr id='tilelayer-createtile'>
		<td><code><b>createTile</b>(<nobr>&lt;Object&gt;</nobr> <i>coords</i>, <nobr>&lt;Function&gt;</nobr> <i>done?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Called only internally, overrides GridLayer's <a href="#gridlayer-createtile"><code>createTile()</code></a>
to return an <code>&lt;img&gt;</code> HTML element with the appropriate image URL given <code>coords</code>. The <code>done</code>
callback is called when the tile has been loaded.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='tilelayer-extension-methods'>Extension methods</h4>

<div class='section-comments'>Layers extending <a href="#tilelayer"><code>TileLayer</code></a> might reimplement the following method.</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-gettileurl'>
		<td><code><b>getTileUrl</b>(<nobr>&lt;Object&gt;</nobr> <i>coords</i>)</code></td>
		<td><code>String</code></td>
		<td><p>Called only internally, returns the URL for a tile given its coordinates.
Classes extending <a href="#tilelayer"><code>TileLayer</code></a> can override this function to provide custom tile URL naming schemes.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#gridlayer'>GridLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the tile layer to the top of all tile layers.</p>
</td>
	</tr>
	<tr id='tilelayer-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the tile layer to the bottom of all tile layers.</p>
</td>
	</tr>
	<tr id='tilelayer-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTML element that contains the tiles for this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#gridlayer-opacity">opacity</a> of the grid layer.</p>
</td>
	</tr>
	<tr id='tilelayer-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>zIndex</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#gridlayer-zindex">zIndex</a> of the grid layer.</p>
</td>
	</tr>
	<tr id='tilelayer-isloading'>
		<td><code><b>isLoading</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if any tile in the grid layer has not finished loading.</p>
</td>
	</tr>
	<tr id='tilelayer-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Causes the layer to clear all the tiles and request them again.</p>
</td>
	</tr>
	<tr id='tilelayer-gettilesize'>
		<td><code><b>getTileSize</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Normalizes the <a href="#gridlayer-tilesize">tileSize option</a> into a point. Used by the <code>createTile()</code> method.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='tilelayer-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='tilelayer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='tilelayer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='tilelayer-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='tilelayer-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='tilelayer-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='tilelayer-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='tilelayer-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='tilelayer-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='tilelayer-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='tilelayer-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='tilelayer-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='tilelayer-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='tilelayer-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='tilelayer-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='tilelayer-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='tilelayer-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='tilelayer-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='tilelayer-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='tilelayer-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='tilelayer-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='tilelayer-wms'>TileLayer.WMS</h2><p>Used to display <a href="https://en.wikipedia.org/wiki/Web_Map_Service">WMS</a> services as tile layers on the map. Extends <a href="#tilelayer"><code>TileLayer</code></a>.</p>

<section>
<h3 id='tilelayer-wms-example'>Usage example</h3>

<section >





<pre><code class="language-js">var nexrad = L.tileLayer.wms(&quot;http://mesonet.agron.iastate.edu/cgi-bin/wms/nexrad/n0r.cgi&quot;, {
	layers: 'nexrad-n0r-900913',
	format: 'image/png',
	transparent: true,
	attribution: &quot;Weather data © 2012 IEM Nexrad&quot;
});
</code></pre>



</section>


</section><section>
<h3 id='tilelayer-wms-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-l-tilelayer-wms'>
		<td><code><b>L.tileLayer.wms</b>(<nobr>&lt;String&gt;</nobr> <i>baseUrl</i>, <nobr>&lt;<a href='#tilelayer-wms-option'>TileLayer.WMS options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td>Instantiates a WMS tile layer object given a base URL of the WMS service and a WMS parameters/options object.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='tilelayer-wms-option'>Options</h3>

<section >



<div class='section-comments'>If any custom options not documented here are used, they will be sent to the
WMS server as extra parameters in each request URL. This can be useful for
<a href="http://docs.geoserver.org/stable/en/user/services/wms/vendor.php">non-standard vendor WMS parameters</a>.</div>

<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-layers'>
		<td><code><b>layers</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td><strong>(required)</strong> Comma-separated list of WMS layers to show.</td>
	</tr>
	<tr id='tilelayer-wms-styles'>
		<td><code><b>styles</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>Comma-separated list of WMS styles.</td>
	</tr>
	<tr id='tilelayer-wms-format'>
		<td><code><b>format</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;image/jpeg&#x27;</code></td>
		<td>WMS image format (use <code>'image/png'</code> for layers with transparency).</td>
	</tr>
	<tr id='tilelayer-wms-transparent'>
		<td><code><b>transparent</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, the WMS service will return images with transparency.</td>
	</tr>
	<tr id='tilelayer-wms-version'>
		<td><code><b>version</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;1.1.1&#x27;</code></td>
		<td>Version of the WMS service to use</td>
	</tr>
	<tr id='tilelayer-wms-crs'>
		<td><code><b>crs</b></code></td>
		<td><code><a href='#crs'>CRS</a></code></td>
		<td><code>null</code></td>
		<td>Coordinate Reference System to use for the WMS requests, defaults to
map CRS. Don't change this if you're not sure what it means.</td>
	</tr>
	<tr id='tilelayer-wms-uppercase'>
		<td><code><b>uppercase</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, WMS request parameter keys will be uppercase.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#tilelayer'>TileLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-minzoom'>
		<td><code><b>minZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>The minimum zoom level down to which this layer will be displayed (inclusive).</td>
	</tr>
	<tr id='tilelayer-wms-maxzoom'>
		<td><code><b>maxZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>18</code></td>
		<td>The maximum zoom level up to which this layer will be displayed (inclusive).</td>
	</tr>
	<tr id='tilelayer-wms-subdomains'>
		<td><code><b>subdomains</b></code></td>
		<td><code>String|String[]</code></td>
		<td><code>&#x27;abc&#x27;</code></td>
		<td>Subdomains of the tile service. Can be passed in the form of one string (where each letter is a subdomain name) or an array of strings.</td>
	</tr>
	<tr id='tilelayer-wms-errortileurl'>
		<td><code><b>errorTileUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>URL to the tile image to show in place of the tile that failed to load.</td>
	</tr>
	<tr id='tilelayer-wms-zoomoffset'>
		<td><code><b>zoomOffset</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>The zoom number used in tile URLs will be offset with this value.</td>
	</tr>
	<tr id='tilelayer-wms-tms'>
		<td><code><b>tms</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, inverses Y axis numbering for tiles (turn this on for <a href="https://en.wikipedia.org/wiki/Tile_Map_Service">TMS</a> services).</td>
	</tr>
	<tr id='tilelayer-wms-zoomreverse'>
		<td><code><b>zoomReverse</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If set to true, the zoom number used in tile URLs will be reversed (<code>maxZoom - zoom</code> instead of <code>zoom</code>)</td>
	</tr>
	<tr id='tilelayer-wms-detectretina'>
		<td><code><b>detectRetina</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code> and user is on a retina display, it will request four tiles of half the specified size and a bigger zoom level in place of one to utilize the high resolution.</td>
	</tr>
	<tr id='tilelayer-wms-crossorigin'>
		<td><code><b>crossOrigin</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>false</code></td>
		<td>Whether the crossOrigin attribute will be added to the tiles.
If a String is provided, all tiles will have their crossOrigin attribute set to the String provided. This is needed if you want to access tile pixel data.
Refer to <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_settings_attributes">CORS Settings</a> for valid String values.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#gridlayer'>GridLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-tilesize'>
		<td><code><b>tileSize</b></code></td>
		<td><code>Number|Point</code></td>
		<td><code>256</code></td>
		<td>Width and height of tiles in the grid. Use a number if width and height are equal, or <code>L.point(width, height)</code> otherwise.</td>
	</tr>
	<tr id='tilelayer-wms-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Opacity of the tiles. Can be used in the <code>createTile()</code> function.</td>
	</tr>
	<tr id='tilelayer-wms-updatewhenidle'>
		<td><code><b>updateWhenIdle</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>(depends)</code></td>
		<td>Load new tiles only when panning ends.
<code>true</code> by default on mobile browsers, in order to avoid too many requests and keep smooth navigation.
<code>false</code> otherwise in order to display new tiles <em>during</em> panning, since it is easy to pan outside the
<a href="#gridlayer-keepbuffer"><code>keepBuffer</code></a> option in desktop browsers.</td>
	</tr>
	<tr id='tilelayer-wms-updatewhenzooming'>
		<td><code><b>updateWhenZooming</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>By default, a smooth zoom animation (during a <a href="#map-touchzoom">touch zoom</a> or a <a href="#map-flyto"><code>flyTo()</code></a>) will update grid layers every integer zoom level. Setting this option to <code>false</code> will update the grid layer only when the smooth animation ends.</td>
	</tr>
	<tr id='tilelayer-wms-updateinterval'>
		<td><code><b>updateInterval</b></code></td>
		<td><code>Number</code></td>
		<td><code>200</code></td>
		<td>Tiles will not update more than once every <code>updateInterval</code> milliseconds when panning.</td>
	</tr>
	<tr id='tilelayer-wms-zindex'>
		<td><code><b>zIndex</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>The explicit zIndex of the tile layer.</td>
	</tr>
	<tr id='tilelayer-wms-bounds'>
		<td><code><b>bounds</b></code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><code>undefined</code></td>
		<td>If set, tiles will only be loaded inside the set <a href="#latlngbounds"><code>LatLngBounds</code></a>.</td>
	</tr>
	<tr id='tilelayer-wms-maxnativezoom'>
		<td><code><b>maxNativeZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>Maximum zoom number the tile source has available. If it is specified,
the tiles on all zoom levels higher than <code>maxNativeZoom</code> will be loaded
from <code>maxNativeZoom</code> level and auto-scaled.</td>
	</tr>
	<tr id='tilelayer-wms-minnativezoom'>
		<td><code><b>minNativeZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>Minimum zoom number the tile source has available. If it is specified,
the tiles on all zoom levels lower than <code>minNativeZoom</code> will be loaded
from <code>minNativeZoom</code> level and auto-scaled.</td>
	</tr>
	<tr id='tilelayer-wms-nowrap'>
		<td><code><b>noWrap</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether the layer is wrapped around the antimeridian. If <code>true</code>, the
GridLayer will only be displayed once at low zoom levels. Has no
effect when the <a href="#map-crs">map CRS</a> doesn't wrap around. Can be used
in combination with [<a href="#bounds"><code>bounds</code></a>](#gridlayer-bounds) to prevent requesting
tiles outside the CRS limits.</td>
	</tr>
	<tr id='tilelayer-wms-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;tilePane&#x27;</code></td>
		<td><code>Map pane</code> where the grid layer will be added.</td>
	</tr>
	<tr id='tilelayer-wms-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to the tile layer. Empty by default.</td>
	</tr>
	<tr id='tilelayer-wms-keepbuffer'>
		<td><code><b>keepBuffer</b></code></td>
		<td><code>Number</code></td>
		<td><code>2</code></td>
		<td>When panning the map, keep this many rows and columns of tiles before unloading them.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#gridlayer'>GridLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-loading'>
		<td><code><b>loading</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the grid layer starts loading tiles.</td>
	</tr>
	<tr id='tilelayer-wms-tileunload'>
		<td><code><b>tileunload</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile is removed (e.g. when a tile goes off the screen).</td>
	</tr>
	<tr id='tilelayer-wms-tileloadstart'>
		<td><code><b>tileloadstart</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile is requested and starts loading.</td>
	</tr>
	<tr id='tilelayer-wms-tileerror'>
		<td><code><b>tileerror</b></code></td>
		<td><code><a href='#tileerrorevent'>TileErrorEvent</a></code></td>
		<td>Fired when there is an error loading a tile.</td>
	</tr>
	<tr id='tilelayer-wms-tileload'>
		<td><code><b>tileload</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile loads.</td>
	</tr>
	<tr id='tilelayer-wms-load'>
		<td><code><b>load</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the grid layer loaded all visible tiles.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='tilelayer-wms-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='tilelayer-wms-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='tilelayer-wms-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='tilelayer-wms-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-setparams'>
		<td><code><b>setParams</b>(<nobr>&lt;Object&gt;</nobr> <i>params</i>, <nobr>&lt;Boolean&gt;</nobr> <i>noRedraw?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Merges an object with the new parameters and re-requests tiles on the current screen (unless <code>noRedraw</code> was set to true).</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#tilelayer'>TileLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-seturl'>
		<td><code><b>setUrl</b>(<nobr>&lt;String&gt;</nobr> <i>url</i>, <nobr>&lt;Boolean&gt;</nobr> <i>noRedraw?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Updates the layer's URL template and redraws it (unless <code>noRedraw</code> is set to <code>true</code>).
If the URL does not change, the layer will not be redrawn unless
the noRedraw parameter is set to false.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-createtile'>
		<td><code><b>createTile</b>(<nobr>&lt;Object&gt;</nobr> <i>coords</i>, <nobr>&lt;Function&gt;</nobr> <i>done?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Called only internally, overrides GridLayer's <a href="#gridlayer-createtile"><code>createTile()</code></a>
to return an <code>&lt;img&gt;</code> HTML element with the appropriate image URL given <code>coords</code>. The <code>done</code>
callback is called when the tile has been loaded.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#gridlayer'>GridLayer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the tile layer to the top of all tile layers.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the tile layer to the bottom of all tile layers.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTML element that contains the tiles for this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#gridlayer-opacity">opacity</a> of the grid layer.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>zIndex</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#gridlayer-zindex">zIndex</a> of the grid layer.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-isloading'>
		<td><code><b>isLoading</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if any tile in the grid layer has not finished loading.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Causes the layer to clear all the tiles and request them again.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-gettilesize'>
		<td><code><b>getTileSize</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Normalizes the <a href="#gridlayer-tilesize">tileSize option</a> into a point. Used by the <code>createTile()</code> method.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='tilelayer-wms-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-wms-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tilelayer-wms-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='tilelayer-wms-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='tilelayer-wms-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='tilelayer-wms-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='tilelayer-wms-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='tilelayer-wms-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-wms-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-wms-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-wms-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-wms-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='tilelayer-wms-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='imageoverlay'>ImageOverlay</h2><p>Used to load and display a single image over specific bounds of the map. Extends <a href="#layer"><code>Layer</code></a>.</p>

<section>
<h3 id='imageoverlay-example'>Usage example</h3>

<section >





<pre><code class="language-js">var imageUrl = 'http://www.lib.utexas.edu/maps/historical/newark_nj_1922.jpg',
	imageBounds = [[40.712216, -74.22655], [40.773941, -74.12544]];
L.imageOverlay(imageUrl, imageBounds).addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='imageoverlay-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-l-imageoverlay'>
		<td><code><b>L.imageOverlay</b>(<nobr>&lt;String&gt;</nobr> <i>imageUrl</i>, <nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;<a href='#imageoverlay-option'>ImageOverlay options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates an image overlay object given the URL of the image and the
geographical bounds it is tied to.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='imageoverlay-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>The opacity of the image overlay.</td>
	</tr>
	<tr id='imageoverlay-alt'>
		<td><code><b>alt</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>Text for the <code>alt</code> attribute of the image (useful for accessibility).</td>
	</tr>
	<tr id='imageoverlay-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, the image overlay will emit <a href="#interactive-layer">mouse events</a> when clicked or hovered.</td>
	</tr>
	<tr id='imageoverlay-crossorigin'>
		<td><code><b>crossOrigin</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>false</code></td>
		<td>Whether the crossOrigin attribute will be added to the image.
If a String is provided, the image will have its crossOrigin attribute set to the String provided. This is needed if you want to access image pixel data.
Refer to <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_settings_attributes">CORS Settings</a> for valid String values.</td>
	</tr>
	<tr id='imageoverlay-erroroverlayurl'>
		<td><code><b>errorOverlayUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>URL to the overlay image to show in place of the overlay that failed to load.</td>
	</tr>
	<tr id='imageoverlay-zindex'>
		<td><code><b>zIndex</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>The explicit <a href="https://developer.mozilla.org/docs/Web/CSS/CSS_Positioning/Understanding_z_index">zIndex</a> of the overlay layer.</td>
	</tr>
	<tr id='imageoverlay-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to the image. Empty by default.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this layer will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='imageoverlay-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='imageoverlay-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-load'>
		<td><code><b>load</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the ImageOverlay layer has loaded its image</td>
	</tr>
	<tr id='imageoverlay-error'>
		<td><code><b>error</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the ImageOverlay layer fails to load its image</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='imageoverlay-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='imageoverlay-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='imageoverlay-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='imageoverlay-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='imageoverlay-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='imageoverlay-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='imageoverlay-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='imageoverlay-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='imageoverlay-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='imageoverlay-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the opacity of the overlay.</p>
</td>
	</tr>
	<tr id='imageoverlay-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all overlays.</p>
</td>
	</tr>
	<tr id='imageoverlay-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all overlays.</p>
</td>
	</tr>
	<tr id='imageoverlay-seturl'>
		<td><code><b>setUrl</b>(<nobr>&lt;String&gt;</nobr> <i>url</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the URL of the image.</p>
</td>
	</tr>
	<tr id='imageoverlay-setbounds'>
		<td><code><b>setBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Update the bounds that this ImageOverlay covers</p>
</td>
	</tr>
	<tr id='imageoverlay-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>value</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#imageoverlay-zindex">zIndex</a> of the image overlay.</p>
</td>
	</tr>
	<tr id='imageoverlay-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Get the bounds that this ImageOverlay covers</p>
</td>
	</tr>
	<tr id='imageoverlay-getelement'>
		<td><code><b>getElement</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the instance of <a href="https://developer.mozilla.org/docs/Web/API/HTMLImageElement"><code>HTMLImageElement</code></a>
used by this overlay.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='imageoverlay-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='imageoverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='imageoverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='imageoverlay-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='imageoverlay-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='imageoverlay-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='imageoverlay-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='imageoverlay-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='imageoverlay-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='imageoverlay-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='imageoverlay-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='imageoverlay-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='imageoverlay-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='imageoverlay-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='imageoverlay-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='imageoverlay-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='imageoverlay-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='imageoverlay-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='imageoverlay-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='imageoverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='imageoverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='imageoverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='imageoverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='imageoverlay-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='imageoverlay-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='imageoverlay-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='imageoverlay-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='imageoverlay-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='imageoverlay-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='imageoverlay-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='imageoverlay-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='imageoverlay-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='imageoverlay-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='imageoverlay-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='imageoverlay-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='videooverlay'>VideoOverlay</h2><p>Used to load and display a video player over specific bounds of the map. Extends <a href="#imageoverlay"><code>ImageOverlay</code></a>.</p>
<p>A video overlay uses the <a href="https://developer.mozilla.org/docs/Web/HTML/Element/video"><code>&lt;video&gt;</code></a>
HTML5 element.</p>

<section>
<h3 id='videooverlay-example'>Usage example</h3>

<section >





<pre><code class="language-js">var videoUrl = 'https://www.mapbox.com/bites/00188/patricia_nasa.webm',
	videoBounds = [[ 32, -130], [ 13, -100]];
L.videoOverlay(videoUrl, videoBounds ).addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='videooverlay-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-l-videooverlay'>
		<td><code><b>L.videoOverlay</b>(<nobr>&lt;String|Array|HTMLVideoElement&gt;</nobr> <i>video</i>, <nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;<a href='#videooverlay-option'>VideoOverlay options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates an image overlay object given the URL of the video (or array of URLs, or even a video element) and the
geographical bounds it is tied to.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='videooverlay-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-autoplay'>
		<td><code><b>autoplay</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the video starts playing automatically when loaded.</td>
	</tr>
	<tr id='videooverlay-loop'>
		<td><code><b>loop</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the video will loop back to the beginning when played.</td>
	</tr>
	<tr id='videooverlay-keepaspectratio'>
		<td><code><b>keepAspectRatio</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether the video will save aspect ratio after the projection.
Relevant for supported browsers. Browser compatibility- https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit</td>
	</tr>
	<tr id='videooverlay-muted'>
		<td><code><b>muted</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether the video starts on mute when loaded.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#imageoverlay'>ImageOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>The opacity of the image overlay.</td>
	</tr>
	<tr id='videooverlay-alt'>
		<td><code><b>alt</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>Text for the <code>alt</code> attribute of the image (useful for accessibility).</td>
	</tr>
	<tr id='videooverlay-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, the image overlay will emit <a href="#interactive-layer">mouse events</a> when clicked or hovered.</td>
	</tr>
	<tr id='videooverlay-crossorigin'>
		<td><code><b>crossOrigin</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>false</code></td>
		<td>Whether the crossOrigin attribute will be added to the image.
If a String is provided, the image will have its crossOrigin attribute set to the String provided. This is needed if you want to access image pixel data.
Refer to <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_settings_attributes">CORS Settings</a> for valid String values.</td>
	</tr>
	<tr id='videooverlay-erroroverlayurl'>
		<td><code><b>errorOverlayUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>URL to the overlay image to show in place of the overlay that failed to load.</td>
	</tr>
	<tr id='videooverlay-zindex'>
		<td><code><b>zIndex</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>The explicit <a href="https://developer.mozilla.org/docs/Web/CSS/CSS_Positioning/Understanding_z_index">zIndex</a> of the overlay layer.</td>
	</tr>
	<tr id='videooverlay-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to the image. Empty by default.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this layer will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='videooverlay-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='videooverlay-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-load'>
		<td><code><b>load</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the video has finished loading the first frame</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#imageoverlay'>ImageOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-error'>
		<td><code><b>error</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the ImageOverlay layer fails to load its image</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='videooverlay-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='videooverlay-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='videooverlay-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='videooverlay-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='videooverlay-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='videooverlay-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='videooverlay-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='videooverlay-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='videooverlay-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='videooverlay-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-getelement'>
		<td><code><b>getElement</b>()</code></td>
		<td><code>HTMLVideoElement</code></td>
		<td><p>Returns the instance of <a href="https://developer.mozilla.org/docs/Web/API/HTMLVideoElement"><code>HTMLVideoElement</code></a>
used by this overlay.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#imageoverlay'>ImageOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the opacity of the overlay.</p>
</td>
	</tr>
	<tr id='videooverlay-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all overlays.</p>
</td>
	</tr>
	<tr id='videooverlay-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all overlays.</p>
</td>
	</tr>
	<tr id='videooverlay-seturl'>
		<td><code><b>setUrl</b>(<nobr>&lt;String&gt;</nobr> <i>url</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the URL of the image.</p>
</td>
	</tr>
	<tr id='videooverlay-setbounds'>
		<td><code><b>setBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Update the bounds that this ImageOverlay covers</p>
</td>
	</tr>
	<tr id='videooverlay-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>value</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#imageoverlay-zindex">zIndex</a> of the image overlay.</p>
</td>
	</tr>
	<tr id='videooverlay-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Get the bounds that this ImageOverlay covers</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='videooverlay-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='videooverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='videooverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='videooverlay-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='videooverlay-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='videooverlay-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='videooverlay-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='videooverlay-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='videooverlay-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='videooverlay-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='videooverlay-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='videooverlay-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='videooverlay-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='videooverlay-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='videooverlay-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='videooverlay-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='videooverlay-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='videooverlay-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='videooverlay-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='videooverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='videooverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='videooverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='videooverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='videooverlay-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='videooverlay-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='videooverlay-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='videooverlay-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='videooverlay-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='videooverlay-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='videooverlay-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='videooverlay-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='videooverlay-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='videooverlay-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='videooverlay-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='videooverlay-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='svgoverlay'>SVGOverlay</h2><p>Used to load, display and provide DOM access to an SVG file over specific bounds of the map. Extends <a href="#imageoverlay"><code>ImageOverlay</code></a>.</p>
<p>An SVG overlay uses the <a href="https://developer.mozilla.org/docs/Web/SVG/Element/svg"><code>&lt;svg&gt;</code></a> element.</p>

<section>
<h3 id='svgoverlay-example'>Usage example</h3>

<section >





<pre><code class="language-js">var svgElement = document.createElementNS(&quot;http://www.w3.org/2000/svg&quot;, &quot;svg&quot;);
svgElement.setAttribute('xmlns', &quot;http://www.w3.org/2000/svg&quot;);
svgElement.setAttribute('viewBox', &quot;0 0 200 200&quot;);
svgElement.innerHTML = '&lt;rect width=&quot;200&quot; height=&quot;200&quot;/&gt;&lt;rect x=&quot;75&quot; y=&quot;23&quot; width=&quot;50&quot; height=&quot;50&quot; style=&quot;fill:red&quot;/&gt;&lt;rect x=&quot;75&quot; y=&quot;123&quot; width=&quot;50&quot; height=&quot;50&quot; style=&quot;fill:#0013ff&quot;/&gt;';
var svgElementBounds = [ [ 32, -130 ], [ 13, -100 ] ];
L.svgOverlay(svgElement, svgElementBounds).addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='svgoverlay-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-l-svgoverlay'>
		<td><code><b>L.svgOverlay</b>(<nobr>&lt;String|SVGElement&gt;</nobr> <i>svg</i>, <nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;SVGOverlay options&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates an image overlay object given an SVG element and the geographical bounds it is tied to.
A viewBox attribute is required on the SVG element to zoom in and out properly.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id=''>Options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#imageoverlay'>ImageOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>The opacity of the image overlay.</td>
	</tr>
	<tr id='svgoverlay-alt'>
		<td><code><b>alt</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>Text for the <code>alt</code> attribute of the image (useful for accessibility).</td>
	</tr>
	<tr id='svgoverlay-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, the image overlay will emit <a href="#interactive-layer">mouse events</a> when clicked or hovered.</td>
	</tr>
	<tr id='svgoverlay-crossorigin'>
		<td><code><b>crossOrigin</b></code></td>
		<td><code>Boolean|String</code></td>
		<td><code>false</code></td>
		<td>Whether the crossOrigin attribute will be added to the image.
If a String is provided, the image will have its crossOrigin attribute set to the String provided. This is needed if you want to access image pixel data.
Refer to <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/CORS_settings_attributes">CORS Settings</a> for valid String values.</td>
	</tr>
	<tr id='svgoverlay-erroroverlayurl'>
		<td><code><b>errorOverlayUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>URL to the overlay image to show in place of the overlay that failed to load.</td>
	</tr>
	<tr id='svgoverlay-zindex'>
		<td><code><b>zIndex</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>The explicit <a href="https://developer.mozilla.org/docs/Web/CSS/CSS_Positioning/Understanding_z_index">zIndex</a> of the overlay layer.</td>
	</tr>
	<tr id='svgoverlay-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to the image. Empty by default.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this layer will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='svgoverlay-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#imageoverlay'>ImageOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-load'>
		<td><code><b>load</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the ImageOverlay layer has loaded its image</td>
	</tr>
	<tr id='svgoverlay-error'>
		<td><code><b>error</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the ImageOverlay layer fails to load its image</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='svgoverlay-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='svgoverlay-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='svgoverlay-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='svgoverlay-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='svgoverlay-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='svgoverlay-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='svgoverlay-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='svgoverlay-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='svgoverlay-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='svgoverlay-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-getelement'>
		<td><code><b>getElement</b>()</code></td>
		<td><code>SVGElement</code></td>
		<td><p>Returns the instance of <a href="https://developer.mozilla.org/docs/Web/API/SVGElement"><code>SVGElement</code></a>
used by this overlay.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#imageoverlay'>ImageOverlay</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the opacity of the overlay.</p>
</td>
	</tr>
	<tr id='svgoverlay-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all overlays.</p>
</td>
	</tr>
	<tr id='svgoverlay-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all overlays.</p>
</td>
	</tr>
	<tr id='svgoverlay-seturl'>
		<td><code><b>setUrl</b>(<nobr>&lt;String&gt;</nobr> <i>url</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the URL of the image.</p>
</td>
	</tr>
	<tr id='svgoverlay-setbounds'>
		<td><code><b>setBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Update the bounds that this ImageOverlay covers</p>
</td>
	</tr>
	<tr id='svgoverlay-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>value</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#imageoverlay-zindex">zIndex</a> of the image overlay.</p>
</td>
	</tr>
	<tr id='svgoverlay-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Get the bounds that this ImageOverlay covers</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='svgoverlay-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='svgoverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='svgoverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='svgoverlay-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='svgoverlay-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='svgoverlay-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='svgoverlay-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='svgoverlay-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='svgoverlay-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='svgoverlay-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='svgoverlay-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='svgoverlay-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='svgoverlay-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='svgoverlay-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='svgoverlay-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='svgoverlay-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='svgoverlay-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='svgoverlay-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='svgoverlay-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svgoverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='svgoverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='svgoverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='svgoverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='svgoverlay-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='svgoverlay-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='svgoverlay-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='svgoverlay-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='svgoverlay-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='svgoverlay-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='svgoverlay-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='svgoverlay-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='svgoverlay-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='svgoverlay-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='svgoverlay-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='svgoverlay-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='path'>Path</h2><p>An abstract class that contains options and constants shared between vector
overlays (Polygon, Polyline, Circle). Do not use it directly. Extends <a href="#layer"><code>Layer</code></a>.</p>

<section>
<h3 id='path-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-stroke'>
		<td><code><b>stroke</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether to draw stroke along the path. Set it to <code>false</code> to disable borders on polygons or circles.</td>
	</tr>
	<tr id='path-color'>
		<td><code><b>color</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;#3388ff&#x27;</code></td>
		<td>Stroke color</td>
	</tr>
	<tr id='path-weight'>
		<td><code><b>weight</b></code></td>
		<td><code>Number</code></td>
		<td><code>3</code></td>
		<td>Stroke width in pixels</td>
	</tr>
	<tr id='path-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Stroke opacity</td>
	</tr>
	<tr id='path-linecap'>
		<td><code><b>lineCap</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linecap">shape to be used at the end</a> of the stroke.</td>
	</tr>
	<tr id='path-linejoin'>
		<td><code><b>lineJoin</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linejoin">shape to be used at the corners</a> of the stroke.</td>
	</tr>
	<tr id='path-dasharray'>
		<td><code><b>dashArray</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the stroke <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dasharray">dash pattern</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='path-dashoffset'>
		<td><code><b>dashOffset</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dashoffset">distance into the dash pattern to start the dash</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='path-fill'>
		<td><code><b>fill</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>depends</code></td>
		<td>Whether to fill the path with color. Set it to <code>false</code> to disable filling on polygons or circles.</td>
	</tr>
	<tr id='path-fillcolor'>
		<td><code><b>fillColor</b></code></td>
		<td><code>String</code></td>
		<td><code>*</code></td>
		<td>Fill color. Defaults to the value of the <a href="#path-color"><code>color</code></a> option</td>
	</tr>
	<tr id='path-fillopacity'>
		<td><code><b>fillOpacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.2</code></td>
		<td>Fill opacity.</td>
	</tr>
	<tr id='path-fillrule'>
		<td><code><b>fillRule</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;evenodd&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/fill-rule">how the inside of a shape</a> is determined.</td>
	</tr>
	<tr id='path-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this path will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
	<tr id='path-renderer'>
		<td><code><b>renderer</b></code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><code></code></td>
		<td>Use this specific instance of <a href="#renderer"><code>Renderer</code></a> for this path. Takes
precedence over the map's <a href="#map-renderer">default renderer</a>.</td>
	</tr>
	<tr id='path-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>Custom class name set on an element. Only for SVG renderer.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='path-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='path-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='path-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='path-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='path-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='path-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='path-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='path-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='path-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='path-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='path-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Redraws the layer. Sometimes useful after you changed the coordinates that the path uses.</p>
</td>
	</tr>
	<tr id='path-setstyle'>
		<td><code><b>setStyle</b>(<nobr>&lt;<a href='#path-option'>Path options</a>&gt;</nobr> <i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the appearance of a Path based on the options in the <a href="#path-option"><code>Path options</code></a> object.</p>
</td>
	</tr>
	<tr id='path-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all path layers.</p>
</td>
	</tr>
	<tr id='path-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all path layers.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='path-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='path-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='path-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='path-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='path-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='path-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='path-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='path-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='path-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='path-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='path-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='path-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='path-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='path-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='path-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='path-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='path-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='path-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='path-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='path-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='path-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='path-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='path-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='path-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='path-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='path-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='path-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='path-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='path-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='path-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='path-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='path-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='path-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='path-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='path-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='polyline'>Polyline</h2><p>A class for drawing polyline overlays on a map. Extends <a href="#path"><code>Path</code></a>.</p>

<section>
<h3 id='polyline-example'>Usage example</h3>

<section >





<pre><code class="language-js">// create a red polyline from an array of LatLng points
var latlngs = [
	[45.51, -122.68],
	[37.77, -122.43],
	[34.04, -118.2]
];

var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
map.fitBounds(polyline.getBounds());
</code></pre>
<p>You can also pass a multi-dimensional array to represent a <code>MultiPolyline</code> shape:</p>
<pre><code class="language-js">// create a red polyline from an array of arrays of LatLng points
var latlngs = [
	[[45.51, -122.68],
	 [37.77, -122.43],
	 [34.04, -118.2]],
	[[40.78, -73.91],
	 [41.83, -87.62],
	 [32.76, -96.72]]
];
</code></pre>



</section>


</section><section>
<h3 id='polyline-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-l-polyline'>
		<td><code><b>L.polyline</b>(<nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs</i>, <nobr>&lt;<a href='#polyline-option'>Polyline options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates a polyline object given an array of geographical points and
optionally an options object. You can create a <a href="#polyline"><code>Polyline</code></a> object with
multiple separate lines (<code>MultiPolyline</code>) by passing an array of arrays
of geographic points.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='polyline-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-smoothfactor'>
		<td><code><b>smoothFactor</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>How much to simplify the polyline on each zoom level. More means
better performance and smoother look, and less means more accurate representation.</td>
	</tr>
	<tr id='polyline-noclip'>
		<td><code><b>noClip</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Disable polyline clipping.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-stroke'>
		<td><code><b>stroke</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether to draw stroke along the path. Set it to <code>false</code> to disable borders on polygons or circles.</td>
	</tr>
	<tr id='polyline-color'>
		<td><code><b>color</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;#3388ff&#x27;</code></td>
		<td>Stroke color</td>
	</tr>
	<tr id='polyline-weight'>
		<td><code><b>weight</b></code></td>
		<td><code>Number</code></td>
		<td><code>3</code></td>
		<td>Stroke width in pixels</td>
	</tr>
	<tr id='polyline-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Stroke opacity</td>
	</tr>
	<tr id='polyline-linecap'>
		<td><code><b>lineCap</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linecap">shape to be used at the end</a> of the stroke.</td>
	</tr>
	<tr id='polyline-linejoin'>
		<td><code><b>lineJoin</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linejoin">shape to be used at the corners</a> of the stroke.</td>
	</tr>
	<tr id='polyline-dasharray'>
		<td><code><b>dashArray</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the stroke <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dasharray">dash pattern</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='polyline-dashoffset'>
		<td><code><b>dashOffset</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dashoffset">distance into the dash pattern to start the dash</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='polyline-fill'>
		<td><code><b>fill</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>depends</code></td>
		<td>Whether to fill the path with color. Set it to <code>false</code> to disable filling on polygons or circles.</td>
	</tr>
	<tr id='polyline-fillcolor'>
		<td><code><b>fillColor</b></code></td>
		<td><code>String</code></td>
		<td><code>*</code></td>
		<td>Fill color. Defaults to the value of the <a href="#path-color"><code>color</code></a> option</td>
	</tr>
	<tr id='polyline-fillopacity'>
		<td><code><b>fillOpacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.2</code></td>
		<td>Fill opacity.</td>
	</tr>
	<tr id='polyline-fillrule'>
		<td><code><b>fillRule</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;evenodd&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/fill-rule">how the inside of a shape</a> is determined.</td>
	</tr>
	<tr id='polyline-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this path will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
	<tr id='polyline-renderer'>
		<td><code><b>renderer</b></code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><code></code></td>
		<td>Use this specific instance of <a href="#renderer"><code>Renderer</code></a> for this path. Takes
precedence over the map's <a href="#map-renderer">default renderer</a>.</td>
	</tr>
	<tr id='polyline-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>Custom class name set on an element. Only for SVG renderer.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='polyline-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='polyline-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='polyline-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='polyline-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='polyline-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='polyline-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='polyline-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='polyline-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='polyline-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='polyline-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='polyline-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the polyline (as a GeoJSON <code>LineString</code> or <code>MultiLineString</code> Feature).</p>
</td>
	</tr>
	<tr id='polyline-getlatlngs'>
		<td><code><b>getLatLngs</b>()</code></td>
		<td><code>LatLng[]</code></td>
		<td><p>Returns an array of the points in the path, or nested arrays of points in case of multi-polyline.</p>
</td>
	</tr>
	<tr id='polyline-setlatlngs'>
		<td><code><b>setLatLngs</b>(<nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Replaces all the points in the polyline with the given array of geographical points.</p>
</td>
	</tr>
	<tr id='polyline-isempty'>
		<td><code><b>isEmpty</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the Polyline has no LatLngs.</p>
</td>
	</tr>
	<tr id='polyline-closestlayerpoint'>
		<td><code><b>closestLayerPoint</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the point closest to <code>p</code> on the Polyline.</p>
</td>
	</tr>
	<tr id='polyline-getcenter'>
		<td><code><b>getCenter</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the center (<a href="http://en.wikipedia.org/wiki/Centroid">centroid</a>) of the polyline.</p>
</td>
	</tr>
	<tr id='polyline-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns the <a href="#latlngbounds"><code>LatLngBounds</code></a> of the path.</p>
</td>
	</tr>
	<tr id='polyline-addlatlng'>
		<td><code><b>addLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a given point to the polyline. By default, adds to the first ring of
the polyline in case of a multi-polyline, but can be overridden by passing
a specific ring as a LatLng array (that you can earlier access with <a href="#polyline-getlatlngs"><code>getLatLngs</code></a>).</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Redraws the layer. Sometimes useful after you changed the coordinates that the path uses.</p>
</td>
	</tr>
	<tr id='polyline-setstyle'>
		<td><code><b>setStyle</b>(<nobr>&lt;<a href='#path-option'>Path options</a>&gt;</nobr> <i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the appearance of a Path based on the options in the <a href="#path-option"><code>Path options</code></a> object.</p>
</td>
	</tr>
	<tr id='polyline-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all path layers.</p>
</td>
	</tr>
	<tr id='polyline-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all path layers.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='polyline-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='polyline-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='polyline-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='polyline-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='polyline-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='polyline-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='polyline-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='polyline-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='polyline-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='polyline-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='polyline-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='polyline-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='polyline-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='polyline-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='polyline-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='polyline-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='polyline-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='polyline-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='polyline-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyline-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='polyline-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='polyline-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='polyline-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='polyline-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='polyline-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='polyline-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='polyline-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='polyline-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='polyline-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='polyline-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='polyline-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='polyline-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='polyline-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='polyline-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='polyline-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='polygon'>Polygon</h2><p>A class for drawing polygon overlays on a map. Extends <a href="#polyline"><code>Polyline</code></a>.</p>
<p>Note that points you pass when creating a polygon shouldn't have an additional last point equal to the first one — it's better to filter out such points.</p>

<section>
<h3 id='polygon-example'>Usage example</h3>

<section >





<pre><code class="language-js">// create a red polygon from an array of LatLng points
var latlngs = [[37, -109.05],[41, -109.03],[41, -102.05],[37, -102.04]];

var polygon = L.polygon(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polygon
map.fitBounds(polygon.getBounds());
</code></pre>
<p>You can also pass an array of arrays of latlngs, with the first array representing the outer shape and the other arrays representing holes in the outer shape:</p>
<pre><code class="language-js">var latlngs = [
  [[37, -109.05],[41, -109.03],[41, -102.05],[37, -102.04]], // outer ring
  [[37.29, -108.58],[40.71, -108.58],[40.71, -102.50],[37.29, -102.50]] // hole
];
</code></pre>
<p>Additionally, you can pass a multi-dimensional array to represent a MultiPolygon shape.</p>
<pre><code class="language-js">var latlngs = [
  [ // first polygon
    [[37, -109.05],[41, -109.03],[41, -102.05],[37, -102.04]], // outer ring
    [[37.29, -108.58],[40.71, -108.58],[40.71, -102.50],[37.29, -102.50]] // hole
  ],
  [ // second polygon
    [[41, -111.03],[45, -111.04],[45, -104.05],[41, -104.05]]
  ]
];
</code></pre>



</section>


</section><section>
<h3 id='polygon-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-l-polygon'>
		<td><code><b>L.polygon</b>(<nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs</i>, <nobr>&lt;<a href='#polyline-option'>Polyline options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td></td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id=''>Options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#polyline'>Polyline</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-smoothfactor'>
		<td><code><b>smoothFactor</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>How much to simplify the polyline on each zoom level. More means
better performance and smoother look, and less means more accurate representation.</td>
	</tr>
	<tr id='polygon-noclip'>
		<td><code><b>noClip</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Disable polyline clipping.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-stroke'>
		<td><code><b>stroke</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether to draw stroke along the path. Set it to <code>false</code> to disable borders on polygons or circles.</td>
	</tr>
	<tr id='polygon-color'>
		<td><code><b>color</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;#3388ff&#x27;</code></td>
		<td>Stroke color</td>
	</tr>
	<tr id='polygon-weight'>
		<td><code><b>weight</b></code></td>
		<td><code>Number</code></td>
		<td><code>3</code></td>
		<td>Stroke width in pixels</td>
	</tr>
	<tr id='polygon-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Stroke opacity</td>
	</tr>
	<tr id='polygon-linecap'>
		<td><code><b>lineCap</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linecap">shape to be used at the end</a> of the stroke.</td>
	</tr>
	<tr id='polygon-linejoin'>
		<td><code><b>lineJoin</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linejoin">shape to be used at the corners</a> of the stroke.</td>
	</tr>
	<tr id='polygon-dasharray'>
		<td><code><b>dashArray</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the stroke <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dasharray">dash pattern</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='polygon-dashoffset'>
		<td><code><b>dashOffset</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dashoffset">distance into the dash pattern to start the dash</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='polygon-fill'>
		<td><code><b>fill</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>depends</code></td>
		<td>Whether to fill the path with color. Set it to <code>false</code> to disable filling on polygons or circles.</td>
	</tr>
	<tr id='polygon-fillcolor'>
		<td><code><b>fillColor</b></code></td>
		<td><code>String</code></td>
		<td><code>*</code></td>
		<td>Fill color. Defaults to the value of the <a href="#path-color"><code>color</code></a> option</td>
	</tr>
	<tr id='polygon-fillopacity'>
		<td><code><b>fillOpacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.2</code></td>
		<td>Fill opacity.</td>
	</tr>
	<tr id='polygon-fillrule'>
		<td><code><b>fillRule</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;evenodd&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/fill-rule">how the inside of a shape</a> is determined.</td>
	</tr>
	<tr id='polygon-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this path will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
	<tr id='polygon-renderer'>
		<td><code><b>renderer</b></code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><code></code></td>
		<td>Use this specific instance of <a href="#renderer"><code>Renderer</code></a> for this path. Takes
precedence over the map's <a href="#map-renderer">default renderer</a>.</td>
	</tr>
	<tr id='polygon-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>Custom class name set on an element. Only for SVG renderer.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='polygon-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='polygon-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='polygon-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='polygon-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='polygon-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='polygon-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='polygon-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='polygon-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='polygon-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='polygon-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='polygon-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the polygon (as a GeoJSON <a href="#polygon"><code>Polygon</code></a> or <code>MultiPolygon</code> Feature).</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#polyline'>Polyline</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-getlatlngs'>
		<td><code><b>getLatLngs</b>()</code></td>
		<td><code>LatLng[]</code></td>
		<td><p>Returns an array of the points in the path, or nested arrays of points in case of multi-polyline.</p>
</td>
	</tr>
	<tr id='polygon-setlatlngs'>
		<td><code><b>setLatLngs</b>(<nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Replaces all the points in the polyline with the given array of geographical points.</p>
</td>
	</tr>
	<tr id='polygon-isempty'>
		<td><code><b>isEmpty</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the Polyline has no LatLngs.</p>
</td>
	</tr>
	<tr id='polygon-closestlayerpoint'>
		<td><code><b>closestLayerPoint</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the point closest to <code>p</code> on the Polyline.</p>
</td>
	</tr>
	<tr id='polygon-getcenter'>
		<td><code><b>getCenter</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the center (<a href="http://en.wikipedia.org/wiki/Centroid">centroid</a>) of the polyline.</p>
</td>
	</tr>
	<tr id='polygon-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns the <a href="#latlngbounds"><code>LatLngBounds</code></a> of the path.</p>
</td>
	</tr>
	<tr id='polygon-addlatlng'>
		<td><code><b>addLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a given point to the polyline. By default, adds to the first ring of
the polyline in case of a multi-polyline, but can be overridden by passing
a specific ring as a LatLng array (that you can earlier access with <a href="#polyline-getlatlngs"><code>getLatLngs</code></a>).</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Redraws the layer. Sometimes useful after you changed the coordinates that the path uses.</p>
</td>
	</tr>
	<tr id='polygon-setstyle'>
		<td><code><b>setStyle</b>(<nobr>&lt;<a href='#path-option'>Path options</a>&gt;</nobr> <i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the appearance of a Path based on the options in the <a href="#path-option"><code>Path options</code></a> object.</p>
</td>
	</tr>
	<tr id='polygon-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all path layers.</p>
</td>
	</tr>
	<tr id='polygon-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all path layers.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='polygon-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='polygon-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='polygon-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='polygon-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='polygon-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='polygon-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='polygon-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='polygon-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='polygon-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='polygon-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='polygon-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='polygon-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='polygon-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='polygon-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='polygon-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='polygon-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='polygon-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='polygon-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='polygon-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polygon-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='polygon-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='polygon-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='polygon-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='polygon-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='polygon-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='polygon-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='polygon-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='polygon-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='polygon-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='polygon-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='polygon-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='polygon-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='polygon-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='polygon-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='polygon-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='rectangle'>Rectangle</h2><p>A class for drawing rectangle overlays on a map. Extends <a href="#polygon"><code>Polygon</code></a>.</p>

<section>
<h3 id='rectangle-example'>Usage example</h3>

<section >





<pre><code class="language-js">// define rectangle geographical bounds
var bounds = [[54.559322, -5.767822], [56.1210604, -3.021240]];

// create an orange rectangle
L.rectangle(bounds, {color: &quot;#ff7800&quot;, weight: 1}).addTo(map);

// zoom the map to the rectangle bounds
map.fitBounds(bounds);
</code></pre>



</section>


</section><section>
<h3 id='rectangle-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-l-rectangle'>
		<td><code><b>L.rectangle</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>latLngBounds</i>, <nobr>&lt;<a href='#polyline-option'>Polyline options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td></td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id=''>Options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#polyline'>Polyline</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-smoothfactor'>
		<td><code><b>smoothFactor</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>How much to simplify the polyline on each zoom level. More means
better performance and smoother look, and less means more accurate representation.</td>
	</tr>
	<tr id='rectangle-noclip'>
		<td><code><b>noClip</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Disable polyline clipping.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-stroke'>
		<td><code><b>stroke</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether to draw stroke along the path. Set it to <code>false</code> to disable borders on polygons or circles.</td>
	</tr>
	<tr id='rectangle-color'>
		<td><code><b>color</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;#3388ff&#x27;</code></td>
		<td>Stroke color</td>
	</tr>
	<tr id='rectangle-weight'>
		<td><code><b>weight</b></code></td>
		<td><code>Number</code></td>
		<td><code>3</code></td>
		<td>Stroke width in pixels</td>
	</tr>
	<tr id='rectangle-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Stroke opacity</td>
	</tr>
	<tr id='rectangle-linecap'>
		<td><code><b>lineCap</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linecap">shape to be used at the end</a> of the stroke.</td>
	</tr>
	<tr id='rectangle-linejoin'>
		<td><code><b>lineJoin</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linejoin">shape to be used at the corners</a> of the stroke.</td>
	</tr>
	<tr id='rectangle-dasharray'>
		<td><code><b>dashArray</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the stroke <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dasharray">dash pattern</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='rectangle-dashoffset'>
		<td><code><b>dashOffset</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dashoffset">distance into the dash pattern to start the dash</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='rectangle-fill'>
		<td><code><b>fill</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>depends</code></td>
		<td>Whether to fill the path with color. Set it to <code>false</code> to disable filling on polygons or circles.</td>
	</tr>
	<tr id='rectangle-fillcolor'>
		<td><code><b>fillColor</b></code></td>
		<td><code>String</code></td>
		<td><code>*</code></td>
		<td>Fill color. Defaults to the value of the <a href="#path-color"><code>color</code></a> option</td>
	</tr>
	<tr id='rectangle-fillopacity'>
		<td><code><b>fillOpacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.2</code></td>
		<td>Fill opacity.</td>
	</tr>
	<tr id='rectangle-fillrule'>
		<td><code><b>fillRule</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;evenodd&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/fill-rule">how the inside of a shape</a> is determined.</td>
	</tr>
	<tr id='rectangle-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this path will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
	<tr id='rectangle-renderer'>
		<td><code><b>renderer</b></code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><code></code></td>
		<td>Use this specific instance of <a href="#renderer"><code>Renderer</code></a> for this path. Takes
precedence over the map's <a href="#map-renderer">default renderer</a>.</td>
	</tr>
	<tr id='rectangle-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>Custom class name set on an element. Only for SVG renderer.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='rectangle-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='rectangle-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='rectangle-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='rectangle-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='rectangle-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='rectangle-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='rectangle-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='rectangle-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='rectangle-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='rectangle-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='rectangle-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-setbounds'>
		<td><code><b>setBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>latLngBounds</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Redraws the rectangle with the passed bounds.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#polygon'>Polygon</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the polygon (as a GeoJSON <a href="#polygon"><code>Polygon</code></a> or <code>MultiPolygon</code> Feature).</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#polyline'>Polyline</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-getlatlngs'>
		<td><code><b>getLatLngs</b>()</code></td>
		<td><code>LatLng[]</code></td>
		<td><p>Returns an array of the points in the path, or nested arrays of points in case of multi-polyline.</p>
</td>
	</tr>
	<tr id='rectangle-setlatlngs'>
		<td><code><b>setLatLngs</b>(<nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Replaces all the points in the polyline with the given array of geographical points.</p>
</td>
	</tr>
	<tr id='rectangle-isempty'>
		<td><code><b>isEmpty</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the Polyline has no LatLngs.</p>
</td>
	</tr>
	<tr id='rectangle-closestlayerpoint'>
		<td><code><b>closestLayerPoint</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the point closest to <code>p</code> on the Polyline.</p>
</td>
	</tr>
	<tr id='rectangle-getcenter'>
		<td><code><b>getCenter</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the center (<a href="http://en.wikipedia.org/wiki/Centroid">centroid</a>) of the polyline.</p>
</td>
	</tr>
	<tr id='rectangle-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns the <a href="#latlngbounds"><code>LatLngBounds</code></a> of the path.</p>
</td>
	</tr>
	<tr id='rectangle-addlatlng'>
		<td><code><b>addLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a given point to the polyline. By default, adds to the first ring of
the polyline in case of a multi-polyline, but can be overridden by passing
a specific ring as a LatLng array (that you can earlier access with <a href="#polyline-getlatlngs"><code>getLatLngs</code></a>).</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Redraws the layer. Sometimes useful after you changed the coordinates that the path uses.</p>
</td>
	</tr>
	<tr id='rectangle-setstyle'>
		<td><code><b>setStyle</b>(<nobr>&lt;<a href='#path-option'>Path options</a>&gt;</nobr> <i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the appearance of a Path based on the options in the <a href="#path-option"><code>Path options</code></a> object.</p>
</td>
	</tr>
	<tr id='rectangle-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all path layers.</p>
</td>
	</tr>
	<tr id='rectangle-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all path layers.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='rectangle-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='rectangle-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='rectangle-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='rectangle-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='rectangle-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='rectangle-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='rectangle-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='rectangle-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='rectangle-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='rectangle-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='rectangle-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='rectangle-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='rectangle-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='rectangle-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='rectangle-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='rectangle-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='rectangle-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='rectangle-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='rectangle-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='rectangle-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='rectangle-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='rectangle-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='rectangle-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='rectangle-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='rectangle-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='rectangle-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='rectangle-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='rectangle-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='rectangle-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='rectangle-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='rectangle-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='rectangle-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='rectangle-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='rectangle-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='rectangle-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='circle'>Circle</h2><p>A class for drawing circle overlays on a map. Extends <a href="#circlemarker"><code>CircleMarker</code></a>.</p>
<p>It's an approximation and starts to diverge from a real circle closer to poles (due to projection distortion).</p>

<section>
<h3 id='circle-example'>Usage example</h3>

<section >





<pre><code class="language-js">L.circle([50.5, 30.5], {radius: 200}).addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='circle-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-l-circle'>
		<td><code><b>L.circle</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;<a href='#circle-option'>Circle options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates a circle object given a geographical point, and an options object
which contains the circle radius.</td>
	</tr>
	<tr id='circle-l-circle'>
		<td><code><b>L.circle</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;Number&gt;</nobr> <i>radius</i>, <nobr>&lt;<a href='#circle-option'>Circle options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Obsolete way of instantiating a circle, for compatibility with 0.7.x code.
Do not use in new applications or plugins.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='circle-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-radius'>
		<td><code><b>radius</b></code></td>
		<td><code>Number</code></td>
		<td><code></code></td>
		<td>Radius of the circle, in meters.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-stroke'>
		<td><code><b>stroke</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether to draw stroke along the path. Set it to <code>false</code> to disable borders on polygons or circles.</td>
	</tr>
	<tr id='circle-color'>
		<td><code><b>color</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;#3388ff&#x27;</code></td>
		<td>Stroke color</td>
	</tr>
	<tr id='circle-weight'>
		<td><code><b>weight</b></code></td>
		<td><code>Number</code></td>
		<td><code>3</code></td>
		<td>Stroke width in pixels</td>
	</tr>
	<tr id='circle-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Stroke opacity</td>
	</tr>
	<tr id='circle-linecap'>
		<td><code><b>lineCap</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linecap">shape to be used at the end</a> of the stroke.</td>
	</tr>
	<tr id='circle-linejoin'>
		<td><code><b>lineJoin</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linejoin">shape to be used at the corners</a> of the stroke.</td>
	</tr>
	<tr id='circle-dasharray'>
		<td><code><b>dashArray</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the stroke <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dasharray">dash pattern</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='circle-dashoffset'>
		<td><code><b>dashOffset</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dashoffset">distance into the dash pattern to start the dash</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='circle-fill'>
		<td><code><b>fill</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>depends</code></td>
		<td>Whether to fill the path with color. Set it to <code>false</code> to disable filling on polygons or circles.</td>
	</tr>
	<tr id='circle-fillcolor'>
		<td><code><b>fillColor</b></code></td>
		<td><code>String</code></td>
		<td><code>*</code></td>
		<td>Fill color. Defaults to the value of the <a href="#path-color"><code>color</code></a> option</td>
	</tr>
	<tr id='circle-fillopacity'>
		<td><code><b>fillOpacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.2</code></td>
		<td>Fill opacity.</td>
	</tr>
	<tr id='circle-fillrule'>
		<td><code><b>fillRule</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;evenodd&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/fill-rule">how the inside of a shape</a> is determined.</td>
	</tr>
	<tr id='circle-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this path will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
	<tr id='circle-renderer'>
		<td><code><b>renderer</b></code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><code></code></td>
		<td>Use this specific instance of <a href="#renderer"><code>Renderer</code></a> for this path. Takes
precedence over the map's <a href="#map-renderer">default renderer</a>.</td>
	</tr>
	<tr id='circle-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>Custom class name set on an element. Only for SVG renderer.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='circle-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#circlemarker'>CircleMarker</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-move'>
		<td><code><b>move</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the marker is moved via <a href="#circlemarker-setlatlng"><code>setLatLng</code></a>. Old and new coordinates are included in event arguments as <code>oldLatLng</code>, <a href="#latlng"><code>latlng</code></a>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='circle-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='circle-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='circle-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='circle-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='circle-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='circle-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='circle-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='circle-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='circle-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='circle-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-setradius'>
		<td><code><b>setRadius</b>(<nobr>&lt;Number&gt;</nobr> <i>radius</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the radius of a circle. Units are in meters.</p>
</td>
	</tr>
	<tr id='circle-getradius'>
		<td><code><b>getRadius</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the current radius of a circle. Units are in meters.</p>
</td>
	</tr>
	<tr id='circle-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns the <a href="#latlngbounds"><code>LatLngBounds</code></a> of the path.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#circlemarker'>CircleMarker</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the circle marker (as a GeoJSON <a href="#point"><code>Point</code></a> Feature).</p>
</td>
	</tr>
	<tr id='circle-setlatlng'>
		<td><code><b>setLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latLng</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the position of a circle marker to a new location.</p>
</td>
	</tr>
	<tr id='circle-getlatlng'>
		<td><code><b>getLatLng</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the current geographical position of the circle marker</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Redraws the layer. Sometimes useful after you changed the coordinates that the path uses.</p>
</td>
	</tr>
	<tr id='circle-setstyle'>
		<td><code><b>setStyle</b>(<nobr>&lt;<a href='#path-option'>Path options</a>&gt;</nobr> <i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the appearance of a Path based on the options in the <a href="#path-option"><code>Path options</code></a> object.</p>
</td>
	</tr>
	<tr id='circle-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all path layers.</p>
</td>
	</tr>
	<tr id='circle-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all path layers.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='circle-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='circle-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='circle-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='circle-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='circle-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='circle-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='circle-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='circle-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='circle-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='circle-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='circle-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='circle-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='circle-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='circle-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='circle-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='circle-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='circle-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='circle-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='circle-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circle-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='circle-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='circle-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='circle-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='circle-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='circle-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='circle-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='circle-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='circle-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='circle-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='circle-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='circle-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='circle-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='circle-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='circle-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='circle-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='circlemarker'>CircleMarker</h2><p>A circle of a fixed size with radius specified in pixels. Extends <a href="#path"><code>Path</code></a>.</p>

<section>
<h3 id='circlemarker-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-l-circlemarker'>
		<td><code><b>L.circleMarker</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;<a href='#circlemarker-option'>CircleMarker options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Instantiates a circle marker object given a geographical point, and an optional options object.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='circlemarker-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-radius'>
		<td><code><b>radius</b></code></td>
		<td><code>Number</code></td>
		<td><code>10</code></td>
		<td>Radius of the circle marker, in pixels</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-stroke'>
		<td><code><b>stroke</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>Whether to draw stroke along the path. Set it to <code>false</code> to disable borders on polygons or circles.</td>
	</tr>
	<tr id='circlemarker-color'>
		<td><code><b>color</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;#3388ff&#x27;</code></td>
		<td>Stroke color</td>
	</tr>
	<tr id='circlemarker-weight'>
		<td><code><b>weight</b></code></td>
		<td><code>Number</code></td>
		<td><code>3</code></td>
		<td>Stroke width in pixels</td>
	</tr>
	<tr id='circlemarker-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Stroke opacity</td>
	</tr>
	<tr id='circlemarker-linecap'>
		<td><code><b>lineCap</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linecap">shape to be used at the end</a> of the stroke.</td>
	</tr>
	<tr id='circlemarker-linejoin'>
		<td><code><b>lineJoin</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;round&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-linejoin">shape to be used at the corners</a> of the stroke.</td>
	</tr>
	<tr id='circlemarker-dasharray'>
		<td><code><b>dashArray</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the stroke <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dasharray">dash pattern</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='circlemarker-dashoffset'>
		<td><code><b>dashOffset</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>A string that defines the <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/stroke-dashoffset">distance into the dash pattern to start the dash</a>. Doesn't work on <a href="#canvas"><code>Canvas</code></a>-powered layers in <a href="https://developer.mozilla.org/docs/Web/API/CanvasRenderingContext2D/setLineDash#Browser_compatibility">some old browsers</a>.</td>
	</tr>
	<tr id='circlemarker-fill'>
		<td><code><b>fill</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>depends</code></td>
		<td>Whether to fill the path with color. Set it to <code>false</code> to disable filling on polygons or circles.</td>
	</tr>
	<tr id='circlemarker-fillcolor'>
		<td><code><b>fillColor</b></code></td>
		<td><code>String</code></td>
		<td><code>*</code></td>
		<td>Fill color. Defaults to the value of the <a href="#path-color"><code>color</code></a> option</td>
	</tr>
	<tr id='circlemarker-fillopacity'>
		<td><code><b>fillOpacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.2</code></td>
		<td>Fill opacity.</td>
	</tr>
	<tr id='circlemarker-fillrule'>
		<td><code><b>fillRule</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;evenodd&#x27;</code></td>
		<td>A string that defines <a href="https://developer.mozilla.org/docs/Web/SVG/Attribute/fill-rule">how the inside of a shape</a> is determined.</td>
	</tr>
	<tr id='circlemarker-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this path will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
	<tr id='circlemarker-renderer'>
		<td><code><b>renderer</b></code></td>
		<td><code><a href='#renderer'>Renderer</a></code></td>
		<td><code></code></td>
		<td>Use this specific instance of <a href="#renderer"><code>Renderer</code></a> for this path. Takes
precedence over the map's <a href="#map-renderer">default renderer</a>.</td>
	</tr>
	<tr id='circlemarker-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>Custom class name set on an element. Only for SVG renderer.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='circlemarker-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='circlemarker-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-move'>
		<td><code><b>move</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the marker is moved via <a href="#circlemarker-setlatlng"><code>setLatLng</code></a>. Old and new coordinates are included in event arguments as <code>oldLatLng</code>, <a href="#latlng"><code>latlng</code></a>.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Mouse events inherited from <a href='#interactive-layer'>Interactive layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='circlemarker-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='circlemarker-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='circlemarker-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='circlemarker-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='circlemarker-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='circlemarker-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='circlemarker-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='circlemarker-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='circlemarker-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='circlemarker-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the circle marker (as a GeoJSON <a href="#point"><code>Point</code></a> Feature).</p>
</td>
	</tr>
	<tr id='circlemarker-setlatlng'>
		<td><code><b>setLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latLng</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the position of a circle marker to a new location.</p>
</td>
	</tr>
	<tr id='circlemarker-getlatlng'>
		<td><code><b>getLatLng</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the current geographical position of the circle marker</p>
</td>
	</tr>
	<tr id='circlemarker-setradius'>
		<td><code><b>setRadius</b>(<nobr>&lt;Number&gt;</nobr> <i>radius</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the radius of a circle marker. Units are in pixels.</p>
</td>
	</tr>
	<tr id='circlemarker-getradius'>
		<td><code><b>getRadius</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the current radius of the circle</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#path'>Path</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Redraws the layer. Sometimes useful after you changed the coordinates that the path uses.</p>
</td>
	</tr>
	<tr id='circlemarker-setstyle'>
		<td><code><b>setStyle</b>(<nobr>&lt;<a href='#path-option'>Path options</a>&gt;</nobr> <i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the appearance of a Path based on the options in the <a href="#path-option"><code>Path options</code></a> object.</p>
</td>
	</tr>
	<tr id='circlemarker-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the top of all path layers.</p>
</td>
	</tr>
	<tr id='circlemarker-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer to the bottom of all path layers.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='circlemarker-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='circlemarker-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='circlemarker-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='circlemarker-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='circlemarker-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='circlemarker-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='circlemarker-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='circlemarker-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='circlemarker-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='circlemarker-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='circlemarker-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='circlemarker-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='circlemarker-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='circlemarker-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='circlemarker-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='circlemarker-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='circlemarker-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='circlemarker-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='circlemarker-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='circlemarker-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='circlemarker-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='circlemarker-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='circlemarker-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='circlemarker-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='circlemarker-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='circlemarker-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='circlemarker-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='circlemarker-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='circlemarker-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='circlemarker-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='circlemarker-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='circlemarker-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='circlemarker-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='circlemarker-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='circlemarker-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='svg'>SVG</h2><p>VML was deprecated in 2012, which means VML functionality exists only for backwards compatibility
with old versions of Internet Explorer.</p>
<p>Allows vector layers to be displayed with <a href="https://developer.mozilla.org/docs/Web/SVG">SVG</a>.
Inherits <a href="#renderer"><code>Renderer</code></a>.</p>
<p>Due to <a href="http://caniuse.com/#search=svg">technical limitations</a>, SVG is not
available in all web browsers, notably Android 2.x and 3.x.</p>
<p>Although SVG is not available on IE7 and IE8, these browsers support
<a href="https://en.wikipedia.org/wiki/Vector_Markup_Language">VML</a>
(a now deprecated technology), and the SVG renderer will fall back to VML in
this case.</p>

<section>
<h3 id='svg-example'>Usage example</h3>

<section >





<p>Use SVG by default for all paths in the map:</p>
<pre><code class="language-js">var map = L.map('map', {
	renderer: L.svg()
});
</code></pre>
<p>Use a SVG renderer with extra padding for specific vector geometries:</p>
<pre><code class="language-js">var map = L.map('map');
var myRenderer = L.svg({ padding: 0.5 });
var line = L.polyline( coordinates, { renderer: myRenderer } );
var circle = L.circle( center, { renderer: myRenderer } );
</code></pre>



</section>


</section><section>
<h3 id='svg-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-l-svg'>
		<td><code><b>L.svg</b>(<nobr>&lt;<a href='#renderer-option'>Renderer options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Creates a SVG renderer with the given options.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id=''>Options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#renderer'>Renderer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-padding'>
		<td><code><b>padding</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.1</code></td>
		<td>How much to extend the clip area around the map view (relative to its size)
e.g. 0.1 would be 10% of map view in each direction</td>
	</tr>
	<tr id='svg-tolerance'>
		<td><code><b>tolerance</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>How much to extend click tolerance round a path/object on the map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='svg-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#renderer'>Renderer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-update'>
		<td><code><b>update</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the renderer updates its bounds, center and zoom, for example when
its map has moved</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='svg-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='svg-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='svg-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='svg-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='svg-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='svg-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='svg-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='svg-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='svg-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='svg-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='svg-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='svg-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='svg-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='svg-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='svg-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='svg-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='svg-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='svg-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='svg-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='svg-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='svg-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='svg-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='svg-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='svg-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='svg-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='svg-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='svg-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='svg-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='svg-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='svg-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='svg-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='svg-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='svg-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='svg-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='svg-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='svg-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='svg-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='svg-function'>Functions</h3>

<section >



<div class='section-comments'>There are several static functions which can be called without instantiating L.SVG:</div>

<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='svg-create'>
		<td><code><b>create</b>(<nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code>SVGElement</code></td>
		<td>Returns a instance of <a href="https://developer.mozilla.org/docs/Web/API/SVGElement">SVGElement</a>,
corresponding to the class name passed. For example, using 'line' will return
an instance of <a href="https://developer.mozilla.org/docs/Web/API/SVGLineElement">SVGLineElement</a>.</td>
	</tr>
	<tr id='svg-pointstopath'>
		<td><code><b>pointsToPath</b>(<nobr>&lt;Point[]&gt;</nobr> <i>rings</i>, <nobr>&lt;Boolean&gt;</nobr> <i>closed</i>)</code></td>
		<td><code>String</code></td>
		<td>Generates a SVG path string for multiple rings, with each ring turning
into &quot;M..L..L..&quot; instructions</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='canvas'>Canvas</h2><p>Allows vector layers to be displayed with <a href="https://developer.mozilla.org/docs/Web/API/Canvas_API"><code>&lt;canvas&gt;</code></a>.
Inherits <a href="#renderer"><code>Renderer</code></a>.</p>
<p>Due to <a href="http://caniuse.com/#search=canvas">technical limitations</a>, Canvas is not
available in all web browsers, notably IE8, and overlapping geometries might
not display properly in some edge cases.</p>

<section>
<h3 id='canvas-example'>Usage example</h3>

<section >





<p>Use Canvas by default for all paths in the map:</p>
<pre><code class="language-js">var map = L.map('map', {
	renderer: L.canvas()
});
</code></pre>
<p>Use a Canvas renderer with extra padding for specific vector geometries:</p>
<pre><code class="language-js">var map = L.map('map');
var myRenderer = L.canvas({ padding: 0.5 });
var line = L.polyline( coordinates, { renderer: myRenderer } );
var circle = L.circle( center, { renderer: myRenderer } );
</code></pre>



</section>


</section><section>
<h3 id='canvas-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-l-canvas'>
		<td><code><b>L.canvas</b>(<nobr>&lt;<a href='#renderer-option'>Renderer options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Creates a Canvas renderer with the given options.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id=''>Options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#renderer'>Renderer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-padding'>
		<td><code><b>padding</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.1</code></td>
		<td>How much to extend the clip area around the map view (relative to its size)
e.g. 0.1 would be 10% of map view in each direction</td>
	</tr>
	<tr id='canvas-tolerance'>
		<td><code><b>tolerance</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>How much to extend click tolerance round a path/object on the map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='canvas-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#renderer'>Renderer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-update'>
		<td><code><b>update</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the renderer updates its bounds, center and zoom, for example when
its map has moved</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='canvas-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='canvas-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='canvas-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='canvas-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='canvas-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='canvas-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='canvas-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='canvas-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='canvas-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='canvas-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='canvas-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='canvas-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='canvas-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='canvas-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='canvas-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='canvas-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='canvas-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='canvas-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='canvas-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='canvas-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='canvas-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='canvas-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='canvas-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='canvas-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='canvas-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='canvas-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='canvas-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='canvas-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='canvas-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='canvas-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='canvas-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='canvas-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='canvas-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='canvas-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='canvas-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='canvas-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='canvas-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='canvas-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='layergroup'>LayerGroup</h2><p>Used to group several layers and handle them as one. If you add it to the map,
any layers added or removed from the group will be added/removed on the map as
well. Extends <a href="#layer"><code>Layer</code></a>.</p>

<section>
<h3 id='layergroup-example'>Usage example</h3>

<section >





<pre><code class="language-js">L.layerGroup([marker1, marker2])
	.addLayer(polyline)
	.addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='layergroup-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-l-layergroup'>
		<td><code><b>L.layerGroup</b>(<nobr>&lt;Layer[]&gt;</nobr> <i>layers?</i>, <nobr>&lt;Object&gt;</nobr> <i>options?</i>)</code></td>
		<td>Create a layer group, optionally given an initial set of layers and an <code>options</code> object.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id=''>Options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='layergroup-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='layergroup-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='layergroup-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='layergroup-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='layergroup-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the layer group (as a GeoJSON <code>FeatureCollection</code>, <code>GeometryCollection</code>, or <code>MultiPoint</code>).</p>
</td>
	</tr>
	<tr id='layergroup-addlayer'>
		<td><code><b>addLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the given layer to the group.</p>
</td>
	</tr>
	<tr id='layergroup-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the given layer from the group.</p>
</td>
	</tr>
	<tr id='layergroup-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer with the given internal ID from the group.</p>
</td>
	</tr>
	<tr id='layergroup-haslayer'>
		<td><code><b>hasLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given layer is currently added to the group.</p>
</td>
	</tr>
	<tr id='layergroup-haslayer'>
		<td><code><b>hasLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given internal ID is currently added to the group.</p>
</td>
	</tr>
	<tr id='layergroup-clearlayers'>
		<td><code><b>clearLayers</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all the layers from the group.</p>
</td>
	</tr>
	<tr id='layergroup-invoke'>
		<td><code><b>invoke</b>(<nobr>&lt;String&gt;</nobr> <i>methodName</i>, <i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Calls <code>methodName</code> on every layer contained in this group, passing any
additional parameters. Has no effect if the layers contained do not
implement <code>methodName</code>.</p>
</td>
	</tr>
	<tr id='layergroup-eachlayer'>
		<td><code><b>eachLayer</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Iterates over the layers of the group, optionally specifying context of the iterator function.</p>
<pre><code class="language-js">group.eachLayer(function (layer) {
	layer.bindPopup('Hello');
});
</code></pre>
</td>
	</tr>
	<tr id='layergroup-getlayer'>
		<td><code><b>getLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code><a href='#layer'>Layer</a></code></td>
		<td><p>Returns the layer with the given internal ID.</p>
</td>
	</tr>
	<tr id='layergroup-getlayers'>
		<td><code><b>getLayers</b>()</code></td>
		<td><code>Layer[]</code></td>
		<td><p>Returns an array of all the layers added to the group.</p>
</td>
	</tr>
	<tr id='layergroup-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>zIndex</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Calls <code>setZIndex</code> on every layer contained in this group, passing the z-index.</p>
</td>
	</tr>
	<tr id='layergroup-getlayerid'>
		<td><code><b>getLayerId</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the internal ID for a layer</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='layergroup-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='layergroup-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='layergroup-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='layergroup-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='layergroup-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='layergroup-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='layergroup-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='layergroup-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='layergroup-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='layergroup-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='layergroup-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='layergroup-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='layergroup-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='layergroup-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='layergroup-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='layergroup-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='layergroup-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='layergroup-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='layergroup-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layergroup-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='layergroup-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='layergroup-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='layergroup-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='layergroup-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='layergroup-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='layergroup-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='layergroup-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='layergroup-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='layergroup-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='layergroup-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='layergroup-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='layergroup-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='layergroup-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='layergroup-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='layergroup-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='featuregroup'>FeatureGroup</h2><p>Extended <a href="#layergroup"><code>LayerGroup</code></a> that makes it easier to do the same thing to all its member layers:</p>
<ul>
<li><a href="#layer-bindpopup"><code>bindPopup</code></a> binds a popup to all of the layers at once (likewise with <a href="#layer-bindtooltip"><code>bindTooltip</code></a>)</li>
<li>Events are propagated to the <a href="#featuregroup"><code>FeatureGroup</code></a>, so if the group has an event
handler, it will handle events from any of the layers. This includes mouse events
and custom events.</li>
<li>Has <code>layeradd</code> and <code>layerremove</code> events</li>
</ul>

<section>
<h3 id='featuregroup-example'>Usage example</h3>

<section >





<pre><code class="language-js">L.featureGroup([marker1, marker2, polyline])
	.bindPopup('Hello world!')
	.on('click', function() { alert('Clicked on a member of the group!'); })
	.addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='featuregroup-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-l-featuregroup'>
		<td><code><b>L.featureGroup</b>(<nobr>&lt;Layer[]&gt;</nobr> <i>layers?</i>, <nobr>&lt;Object&gt;</nobr> <i>options?</i>)</code></td>
		<td>Create a feature group, optionally given an initial set of layers and an <code>options</code> object.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id=''>Options</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='featuregroup-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='featuregroup-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-layeradd'>
		<td><code><b>layeradd</b></code></td>
		<td><code><a href='#layerevent'>LayerEvent</a></code></td>
		<td>Fired when a layer is added to this <a href="#featuregroup"><code>FeatureGroup</code></a></td>
	</tr>
	<tr id='featuregroup-layerremove'>
		<td><code><b>layerremove</b></code></td>
		<td><code><a href='#layerevent'>LayerEvent</a></code></td>
		<td>Fired when a layer is removed from this <a href="#featuregroup"><code>FeatureGroup</code></a></td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='featuregroup-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='featuregroup-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='featuregroup-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='featuregroup-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-setstyle'>
		<td><code><b>setStyle</b>(<nobr>&lt;<a href='#path-option'>Path options</a>&gt;</nobr> <i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the given path options to each layer of the group that has a <code>setStyle</code> method.</p>
</td>
	</tr>
	<tr id='featuregroup-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer group to the top of all other layers</p>
</td>
	</tr>
	<tr id='featuregroup-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer group to the back of all other layers</p>
</td>
	</tr>
	<tr id='featuregroup-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns the LatLngBounds of the Feature Group (created from bounds and coordinates of its children).</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layergroup'>LayerGroup</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the layer group (as a GeoJSON <code>FeatureCollection</code>, <code>GeometryCollection</code>, or <code>MultiPoint</code>).</p>
</td>
	</tr>
	<tr id='featuregroup-addlayer'>
		<td><code><b>addLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the given layer to the group.</p>
</td>
	</tr>
	<tr id='featuregroup-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the given layer from the group.</p>
</td>
	</tr>
	<tr id='featuregroup-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer with the given internal ID from the group.</p>
</td>
	</tr>
	<tr id='featuregroup-haslayer'>
		<td><code><b>hasLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given layer is currently added to the group.</p>
</td>
	</tr>
	<tr id='featuregroup-haslayer'>
		<td><code><b>hasLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given internal ID is currently added to the group.</p>
</td>
	</tr>
	<tr id='featuregroup-clearlayers'>
		<td><code><b>clearLayers</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all the layers from the group.</p>
</td>
	</tr>
	<tr id='featuregroup-invoke'>
		<td><code><b>invoke</b>(<nobr>&lt;String&gt;</nobr> <i>methodName</i>, <i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Calls <code>methodName</code> on every layer contained in this group, passing any
additional parameters. Has no effect if the layers contained do not
implement <code>methodName</code>.</p>
</td>
	</tr>
	<tr id='featuregroup-eachlayer'>
		<td><code><b>eachLayer</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Iterates over the layers of the group, optionally specifying context of the iterator function.</p>
<pre><code class="language-js">group.eachLayer(function (layer) {
	layer.bindPopup('Hello');
});
</code></pre>
</td>
	</tr>
	<tr id='featuregroup-getlayer'>
		<td><code><b>getLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code><a href='#layer'>Layer</a></code></td>
		<td><p>Returns the layer with the given internal ID.</p>
</td>
	</tr>
	<tr id='featuregroup-getlayers'>
		<td><code><b>getLayers</b>()</code></td>
		<td><code>Layer[]</code></td>
		<td><p>Returns an array of all the layers added to the group.</p>
</td>
	</tr>
	<tr id='featuregroup-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>zIndex</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Calls <code>setZIndex</code> on every layer contained in this group, passing the z-index.</p>
</td>
	</tr>
	<tr id='featuregroup-getlayerid'>
		<td><code><b>getLayerId</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the internal ID for a layer</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='featuregroup-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='featuregroup-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='featuregroup-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='featuregroup-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='featuregroup-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='featuregroup-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='featuregroup-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='featuregroup-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='featuregroup-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='featuregroup-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='featuregroup-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='featuregroup-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='featuregroup-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='featuregroup-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='featuregroup-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='featuregroup-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='featuregroup-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='featuregroup-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='featuregroup-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='featuregroup-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='featuregroup-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='featuregroup-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='featuregroup-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='featuregroup-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='featuregroup-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='featuregroup-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='featuregroup-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='featuregroup-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='featuregroup-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='featuregroup-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='featuregroup-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='featuregroup-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='featuregroup-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='featuregroup-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='featuregroup-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='geojson'>GeoJSON</h2><p>Represents a GeoJSON object or an array of GeoJSON objects. Allows you to parse
GeoJSON data and display it on the map. Extends <a href="#featuregroup"><code>FeatureGroup</code></a>.</p>

<section>
<h3 id='geojson-example'>Usage example</h3>

<section >





<pre><code class="language-js">L.geoJSON(data, {
	style: function (feature) {
		return {color: feature.properties.color};
	}
}).bindPopup(function (layer) {
	return layer.feature.properties.description;
}).addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='geojson-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-l-geojson'>
		<td><code><b>L.geoJSON</b>(<nobr>&lt;Object&gt;</nobr> <i>geojson?</i>, <nobr>&lt;<a href='#geojson-option'>GeoJSON options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Creates a GeoJSON layer. Optionally accepts an object in
<a href="https://tools.ietf.org/html/rfc7946">GeoJSON format</a> to display on the map
(you can alternatively add it later with <code>addData</code> method) and an <code>options</code> object.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='geojson-option'>Options</h3>

<section >



<div class='section-comments'></div>

<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-pointtolayer'>
		<td><code><b>pointToLayer</b></code></td>
		<td><code>Function</code></td>
		<td><code>*</code></td>
		<td>A <code>Function</code> defining how GeoJSON points spawn Leaflet layers. It is internally
called when data is added, passing the GeoJSON point feature and its <a href="#latlng"><code>LatLng</code></a>.
The default is to spawn a default <a href="#marker"><code>Marker</code></a>:
<pre><code class="language-js">function(geoJsonPoint, latlng) {
	return L.marker(latlng);
}
</code></pre></td>
	</tr>
	<tr id='geojson-style'>
		<td><code><b>style</b></code></td>
		<td><code>Function</code></td>
		<td><code>*</code></td>
		<td>A <code>Function</code> defining the <a href="#path-option"><code>Path options</code></a> for styling GeoJSON lines and polygons,
called internally when data is added.
The default value is to not override any defaults:
<pre><code class="language-js">function (geoJsonFeature) {
	return {}
}
</code></pre></td>
	</tr>
	<tr id='geojson-oneachfeature'>
		<td><code><b>onEachFeature</b></code></td>
		<td><code>Function</code></td>
		<td><code>*</code></td>
		<td>A <code>Function</code> that will be called once for each created <code>Feature</code>, after it has
been created and styled. Useful for attaching events and popups to features.
The default is to do nothing with the newly created layers:
<pre><code class="language-js">function (feature, layer) {}
</code></pre></td>
	</tr>
	<tr id='geojson-filter'>
		<td><code><b>filter</b></code></td>
		<td><code>Function</code></td>
		<td><code>*</code></td>
		<td>A <code>Function</code> that will be used to decide whether to include a feature or not.
The default is to include all features:
<pre><code class="language-js">function (geoJsonFeature) {
	return true;
}
</code></pre>
<p>Note: dynamically changing the <code>filter</code> option will have effect only on newly
added data. It will <em>not</em> re-evaluate already included features.</p></td>
	</tr>
	<tr id='geojson-coordstolatlng'>
		<td><code><b>coordsToLatLng</b></code></td>
		<td><code>Function</code></td>
		<td><code>*</code></td>
		<td>A <code>Function</code> that will be used for converting GeoJSON coordinates to <a href="#latlng"><code>LatLng</code></a>s.
The default is the <code>coordsToLatLng</code> static method.</td>
	</tr>
	<tr id='geojson-markersinheritoptions'>
		<td><code><b>markersInheritOptions</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether default Markers for &quot;Point&quot; type Features inherit from group options.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='geojson-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#featuregroup'>FeatureGroup</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-layeradd'>
		<td><code><b>layeradd</b></code></td>
		<td><code><a href='#layerevent'>LayerEvent</a></code></td>
		<td>Fired when a layer is added to this <a href="#featuregroup"><code>FeatureGroup</code></a></td>
	</tr>
	<tr id='geojson-layerremove'>
		<td><code><b>layerremove</b></code></td>
		<td><code><a href='#layerevent'>LayerEvent</a></code></td>
		<td>Fired when a layer is removed from this <a href="#featuregroup"><code>FeatureGroup</code></a></td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='geojson-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='geojson-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='geojson-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='geojson-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-adddata'>
		<td><code><b>addData</b>(<i>data</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a GeoJSON object to the layer.</p>
</td>
	</tr>
	<tr id='geojson-resetstyle'>
		<td><code><b>resetStyle</b>(<i>layer?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Resets the given vector layer's style to the original GeoJSON style, useful for resetting style after hover events.
If <a href="#layer"><code>layer</code></a> is omitted, the style of all features in the current layer is reset.</p>
</td>
	</tr>
	<tr id='geojson-setstyle'>
		<td><code><b>setStyle</b>(<i>style</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes styles of GeoJSON vector layers with the given style function.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#featuregroup'>FeatureGroup</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer group to the top of all other layers</p>
</td>
	</tr>
	<tr id='geojson-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the layer group to the back of all other layers</p>
</td>
	</tr>
	<tr id='geojson-getbounds'>
		<td><code><b>getBounds</b>()</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns the LatLngBounds of the Feature Group (created from bounds and coordinates of its children).</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layergroup'>LayerGroup</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-togeojson'>
		<td><code><b>toGeoJSON</b>(<nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Object</code></td>
		<td><p><code>precision</code> is the number of decimal places for coordinates.
The default value is 6 places.
Returns a [<a href="#geojson"><code>GeoJSON</code></a>](http://en.wikipedia.org/wiki/GeoJSON) representation of the layer group (as a GeoJSON <code>FeatureCollection</code>, <code>GeometryCollection</code>, or <code>MultiPoint</code>).</p>
</td>
	</tr>
	<tr id='geojson-addlayer'>
		<td><code><b>addLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the given layer to the group.</p>
</td>
	</tr>
	<tr id='geojson-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the given layer from the group.</p>
</td>
	</tr>
	<tr id='geojson-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer with the given internal ID from the group.</p>
</td>
	</tr>
	<tr id='geojson-haslayer'>
		<td><code><b>hasLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given layer is currently added to the group.</p>
</td>
	</tr>
	<tr id='geojson-haslayer'>
		<td><code><b>hasLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given internal ID is currently added to the group.</p>
</td>
	</tr>
	<tr id='geojson-clearlayers'>
		<td><code><b>clearLayers</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all the layers from the group.</p>
</td>
	</tr>
	<tr id='geojson-invoke'>
		<td><code><b>invoke</b>(<nobr>&lt;String&gt;</nobr> <i>methodName</i>, <i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Calls <code>methodName</code> on every layer contained in this group, passing any
additional parameters. Has no effect if the layers contained do not
implement <code>methodName</code>.</p>
</td>
	</tr>
	<tr id='geojson-eachlayer'>
		<td><code><b>eachLayer</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Iterates over the layers of the group, optionally specifying context of the iterator function.</p>
<pre><code class="language-js">group.eachLayer(function (layer) {
	layer.bindPopup('Hello');
});
</code></pre>
</td>
	</tr>
	<tr id='geojson-getlayer'>
		<td><code><b>getLayer</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code><a href='#layer'>Layer</a></code></td>
		<td><p>Returns the layer with the given internal ID.</p>
</td>
	</tr>
	<tr id='geojson-getlayers'>
		<td><code><b>getLayers</b>()</code></td>
		<td><code>Layer[]</code></td>
		<td><p>Returns an array of all the layers added to the group.</p>
</td>
	</tr>
	<tr id='geojson-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>zIndex</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Calls <code>setZIndex</code> on every layer contained in this group, passing the z-index.</p>
</td>
	</tr>
	<tr id='geojson-getlayerid'>
		<td><code><b>getLayerId</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the internal ID for a layer</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='geojson-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='geojson-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='geojson-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='geojson-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='geojson-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='geojson-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='geojson-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='geojson-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='geojson-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='geojson-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='geojson-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='geojson-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='geojson-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='geojson-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='geojson-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='geojson-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='geojson-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='geojson-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='geojson-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='geojson-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='geojson-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='geojson-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='geojson-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='geojson-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='geojson-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='geojson-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='geojson-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='geojson-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='geojson-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='geojson-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='geojson-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='geojson-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='geojson-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='geojson-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='geojson-function'>Functions</h3>

<section >



<div class='section-comments'>There are several static functions which can be called without instantiating L.GeoJSON:</div>

<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojson-geometrytolayer'>
		<td><code><b>geometryToLayer</b>(<nobr>&lt;Object&gt;</nobr> <i>featureData</i>, <nobr>&lt;<a href='#geojson-option'>GeoJSON options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code><a href='#layer'>Layer</a></code></td>
		<td>Creates a <a href="#layer"><code>Layer</code></a> from a given GeoJSON feature. Can use a custom
<a href="#geojson-pointtolayer"><code>pointToLayer</code></a> and/or <a href="#geojson-coordstolatlng"><code>coordsToLatLng</code></a>
functions if provided as options.</td>
	</tr>
	<tr id='geojson-coordstolatlng'>
		<td><code><b>coordsToLatLng</b>(<nobr>&lt;Array&gt;</nobr> <i>coords</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td>Creates a <a href="#latlng"><code>LatLng</code></a> object from an array of 2 numbers (longitude, latitude)
or 3 numbers (longitude, latitude, altitude) used in GeoJSON for points.</td>
	</tr>
	<tr id='geojson-coordstolatlngs'>
		<td><code><b>coordsToLatLngs</b>(<nobr>&lt;Array&gt;</nobr> <i>coords</i>, <nobr>&lt;Number&gt;</nobr> <i>levelsDeep?</i>, <nobr>&lt;Function&gt;</nobr> <i>coordsToLatLng?</i>)</code></td>
		<td><code>Array</code></td>
		<td>Creates a multidimensional array of <a href="#latlng"><code>LatLng</code></a>s from a GeoJSON coordinates array.
<code>levelsDeep</code> specifies the nesting level (0 is for an array of points, 1 for an array of arrays of points, etc., 0 by default).
Can use a custom <a href="#geojson-coordstolatlng"><code>coordsToLatLng</code></a> function.</td>
	</tr>
	<tr id='geojson-latlngtocoords'>
		<td><code><b>latLngToCoords</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;Number&gt;</nobr> <i>precision?</i>)</code></td>
		<td><code>Array</code></td>
		<td>Reverse of <a href="#geojson-coordstolatlng"><code>coordsToLatLng</code></a></td>
	</tr>
	<tr id='geojson-latlngstocoords'>
		<td><code><b>latLngsToCoords</b>(<nobr>&lt;Array&gt;</nobr> <i>latlngs</i>, <nobr>&lt;Number&gt;</nobr> <i>levelsDeep?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>closed?</i>)</code></td>
		<td><code>Array</code></td>
		<td>Reverse of <a href="#geojson-coordstolatlngs"><code>coordsToLatLngs</code></a>
<code>closed</code> determines whether the first point should be appended to the end of the array to close the feature, only used when <code>levelsDeep</code> is 0. False by default.</td>
	</tr>
	<tr id='geojson-asfeature'>
		<td><code><b>asFeature</b>(<nobr>&lt;Object&gt;</nobr> <i>geojson</i>)</code></td>
		<td><code>Object</code></td>
		<td>Normalize GeoJSON geometries/features into GeoJSON features.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='gridlayer'>GridLayer</h2><p>Generic class for handling a tiled grid of HTML elements. This is the base class for all tile layers and replaces <code>TileLayer.Canvas</code>.
GridLayer can be extended to create a tiled grid of HTML elements like <code>&lt;canvas&gt;</code>, <code>&lt;img&gt;</code> or <code>&lt;div&gt;</code>. GridLayer will handle creating and animating these DOM elements for you.</p>

<section>
<h3 id='gridlayer-example'>Usage example</h3>

<section >

<h4 id='gridlayer-synchronous-usage'>Synchronous usage</h4>



<p>To create a custom layer, extend GridLayer and implement the <code>createTile()</code> method, which will be passed a <a href="#point"><code>Point</code></a> object with the <code>x</code>, <code>y</code>, and <code>z</code> (zoom level) coordinates to draw your tile.</p>
<pre><code class="language-js">var CanvasLayer = L.GridLayer.extend({
    createTile: function(coords){
        // create a &lt;canvas&gt; element for drawing
        var tile = L.DomUtil.create('canvas', 'leaflet-tile');

        // setup tile width and height according to the options
        var size = this.getTileSize();
        tile.width = size.x;
        tile.height = size.y;

        // get a canvas context and draw something on it using coords.x, coords.y and coords.z
        var ctx = tile.getContext('2d');

        // return the tile so it can be rendered on screen
        return tile;
    }
});
</code></pre>



</section><section >

<h4 id='gridlayer-asynchronous-usage'>Asynchronous usage</h4>



<p>Tile creation can also be asynchronous, this is useful when using a third-party drawing library. Once the tile is finished drawing it can be passed to the <code>done()</code> callback.</p>
<pre><code class="language-js">var CanvasLayer = L.GridLayer.extend({
    createTile: function(coords, done){
        var error;

        // create a &lt;canvas&gt; element for drawing
        var tile = L.DomUtil.create('canvas', 'leaflet-tile');

        // setup tile width and height according to the options
        var size = this.getTileSize();
        tile.width = size.x;
        tile.height = size.y;

        // draw something asynchronously and pass the tile to the done() callback
        setTimeout(function() {
            done(error, tile);
        }, 1000);

        return tile;
    }
});
</code></pre>



</section>


</section><section>
<h3 id='gridlayer-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-l-gridlayer'>
		<td><code><b>L.gridLayer</b>(<nobr>&lt;<a href='#gridlayer-option'>GridLayer options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Creates a new instance of GridLayer with the supplied options.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='gridlayer-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-tilesize'>
		<td><code><b>tileSize</b></code></td>
		<td><code>Number|Point</code></td>
		<td><code>256</code></td>
		<td>Width and height of tiles in the grid. Use a number if width and height are equal, or <code>L.point(width, height)</code> otherwise.</td>
	</tr>
	<tr id='gridlayer-opacity'>
		<td><code><b>opacity</b></code></td>
		<td><code>Number</code></td>
		<td><code>1.0</code></td>
		<td>Opacity of the tiles. Can be used in the <code>createTile()</code> function.</td>
	</tr>
	<tr id='gridlayer-updatewhenidle'>
		<td><code><b>updateWhenIdle</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>(depends)</code></td>
		<td>Load new tiles only when panning ends.
<code>true</code> by default on mobile browsers, in order to avoid too many requests and keep smooth navigation.
<code>false</code> otherwise in order to display new tiles <em>during</em> panning, since it is easy to pan outside the
<a href="#gridlayer-keepbuffer"><code>keepBuffer</code></a> option in desktop browsers.</td>
	</tr>
	<tr id='gridlayer-updatewhenzooming'>
		<td><code><b>updateWhenZooming</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>By default, a smooth zoom animation (during a <a href="#map-touchzoom">touch zoom</a> or a <a href="#map-flyto"><code>flyTo()</code></a>) will update grid layers every integer zoom level. Setting this option to <code>false</code> will update the grid layer only when the smooth animation ends.</td>
	</tr>
	<tr id='gridlayer-updateinterval'>
		<td><code><b>updateInterval</b></code></td>
		<td><code>Number</code></td>
		<td><code>200</code></td>
		<td>Tiles will not update more than once every <code>updateInterval</code> milliseconds when panning.</td>
	</tr>
	<tr id='gridlayer-zindex'>
		<td><code><b>zIndex</b></code></td>
		<td><code>Number</code></td>
		<td><code>1</code></td>
		<td>The explicit zIndex of the tile layer.</td>
	</tr>
	<tr id='gridlayer-bounds'>
		<td><code><b>bounds</b></code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><code>undefined</code></td>
		<td>If set, tiles will only be loaded inside the set <a href="#latlngbounds"><code>LatLngBounds</code></a>.</td>
	</tr>
	<tr id='gridlayer-minzoom'>
		<td><code><b>minZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>The minimum zoom level down to which this layer will be displayed (inclusive).</td>
	</tr>
	<tr id='gridlayer-maxzoom'>
		<td><code><b>maxZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>The maximum zoom level up to which this layer will be displayed (inclusive).</td>
	</tr>
	<tr id='gridlayer-maxnativezoom'>
		<td><code><b>maxNativeZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>Maximum zoom number the tile source has available. If it is specified,
the tiles on all zoom levels higher than <code>maxNativeZoom</code> will be loaded
from <code>maxNativeZoom</code> level and auto-scaled.</td>
	</tr>
	<tr id='gridlayer-minnativezoom'>
		<td><code><b>minNativeZoom</b></code></td>
		<td><code>Number</code></td>
		<td><code>undefined</code></td>
		<td>Minimum zoom number the tile source has available. If it is specified,
the tiles on all zoom levels lower than <code>minNativeZoom</code> will be loaded
from <code>minNativeZoom</code> level and auto-scaled.</td>
	</tr>
	<tr id='gridlayer-nowrap'>
		<td><code><b>noWrap</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether the layer is wrapped around the antimeridian. If <code>true</code>, the
GridLayer will only be displayed once at low zoom levels. Has no
effect when the <a href="#map-crs">map CRS</a> doesn't wrap around. Can be used
in combination with [<a href="#bounds"><code>bounds</code></a>](#gridlayer-bounds) to prevent requesting
tiles outside the CRS limits.</td>
	</tr>
	<tr id='gridlayer-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;tilePane&#x27;</code></td>
		<td><code>Map pane</code> where the grid layer will be added.</td>
	</tr>
	<tr id='gridlayer-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to the tile layer. Empty by default.</td>
	</tr>
	<tr id='gridlayer-keepbuffer'>
		<td><code><b>keepBuffer</b></code></td>
		<td><code>Number</code></td>
		<td><code>2</code></td>
		<td>When panning the map, keep this many rows and columns of tiles before unloading them.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='gridlayer-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-loading'>
		<td><code><b>loading</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the grid layer starts loading tiles.</td>
	</tr>
	<tr id='gridlayer-tileunload'>
		<td><code><b>tileunload</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile is removed (e.g. when a tile goes off the screen).</td>
	</tr>
	<tr id='gridlayer-tileloadstart'>
		<td><code><b>tileloadstart</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile is requested and starts loading.</td>
	</tr>
	<tr id='gridlayer-tileerror'>
		<td><code><b>tileerror</b></code></td>
		<td><code><a href='#tileerrorevent'>TileErrorEvent</a></code></td>
		<td>Fired when there is an error loading a tile.</td>
	</tr>
	<tr id='gridlayer-tileload'>
		<td><code><b>tileload</b></code></td>
		<td><code><a href='#tileevent'>TileEvent</a></code></td>
		<td>Fired when a tile loads.</td>
	</tr>
	<tr id='gridlayer-load'>
		<td><code><b>load</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the grid layer loaded all visible tiles.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='gridlayer-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='gridlayer-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='gridlayer-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='gridlayer-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-bringtofront'>
		<td><code><b>bringToFront</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the tile layer to the top of all tile layers.</p>
</td>
	</tr>
	<tr id='gridlayer-bringtoback'>
		<td><code><b>bringToBack</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Brings the tile layer to the bottom of all tile layers.</p>
</td>
	</tr>
	<tr id='gridlayer-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTML element that contains the tiles for this layer.</p>
</td>
	</tr>
	<tr id='gridlayer-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#gridlayer-opacity">opacity</a> of the grid layer.</p>
</td>
	</tr>
	<tr id='gridlayer-setzindex'>
		<td><code><b>setZIndex</b>(<nobr>&lt;Number&gt;</nobr> <i>zIndex</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Changes the <a href="#gridlayer-zindex">zIndex</a> of the grid layer.</p>
</td>
	</tr>
	<tr id='gridlayer-isloading'>
		<td><code><b>isLoading</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if any tile in the grid layer has not finished loading.</p>
</td>
	</tr>
	<tr id='gridlayer-redraw'>
		<td><code><b>redraw</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Causes the layer to clear all the tiles and request them again.</p>
</td>
	</tr>
	<tr id='gridlayer-gettilesize'>
		<td><code><b>getTileSize</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Normalizes the <a href="#gridlayer-tilesize">tileSize option</a> into a point. Used by the <code>createTile()</code> method.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='gridlayer-extension-methods'>Extension methods</h4>

<div class='section-comments'>Layers extending <a href="#gridlayer"><code>GridLayer</code></a> shall reimplement the following method.</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-createtile'>
		<td><code><b>createTile</b>(<nobr>&lt;Object&gt;</nobr> <i>coords</i>, <nobr>&lt;Function&gt;</nobr> <i>done?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Called only internally, must be overridden by classes extending <a href="#gridlayer"><code>GridLayer</code></a>.
Returns the <code>HTMLElement</code> corresponding to the given <code>coords</code>. If the <code>done</code> callback
is specified, it must be called when the tile has finished loading and drawing.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='gridlayer-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='gridlayer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='gridlayer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='gridlayer-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='gridlayer-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='gridlayer-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='gridlayer-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='gridlayer-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='gridlayer-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='gridlayer-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='gridlayer-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='gridlayer-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='gridlayer-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='gridlayer-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='gridlayer-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='gridlayer-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='gridlayer-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='gridlayer-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='gridlayer-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='gridlayer-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='gridlayer-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='gridlayer-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='gridlayer-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='gridlayer-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='gridlayer-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='gridlayer-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='gridlayer-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='gridlayer-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='gridlayer-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='gridlayer-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='gridlayer-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='gridlayer-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='gridlayer-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='gridlayer-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='gridlayer-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='latlng'>LatLng</h2><p>Represents a geographical point with a certain latitude and longitude.</p>

<section>
<h3 id='latlng-example'>Usage example</h3>

<section >





<pre><code>var latlng = L.latLng(50.5, 30.5);
</code></pre>
<p>All Leaflet methods that accept LatLng objects also accept them in a simple Array form and simple object form (unless noted otherwise), so these lines are equivalent:</p>
<pre><code>map.panTo([50, 30]);
map.panTo({lon: 30, lat: 50});
map.panTo({lat: 50, lng: 30});
map.panTo(L.latLng(50, 30));
</code></pre>
<p>Note that <a href="#latlng"><code>LatLng</code></a> does not inherit from Leaflet's <a href="#class"><code>Class</code></a> object,
which means new classes can't inherit from it, and new methods
can't be added to it with the <code>include</code> function.</p>



</section>


</section><section>
<h3 id='latlng-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='latlng-l-latlng'>
		<td><code><b>L.latLng</b>(<nobr>&lt;Number&gt;</nobr> <i>latitude</i>, <nobr>&lt;Number&gt;</nobr> <i>longitude</i>, <nobr>&lt;Number&gt;</nobr> <i>altitude?</i>)</code></td>
		<td>Creates an object representing a geographical point with the given latitude and longitude (and optionally altitude).</td>
	</tr>
	<tr id='latlng-l-latlng'>
		<td><code><b>L.latLng</b>(<nobr>&lt;Array&gt;</nobr> <i>coords</i>)</code></td>
		<td>Expects an array of the form <code>[Number, Number]</code> or <code>[Number, Number, Number]</code> instead.</td>
	</tr>
	<tr id='latlng-l-latlng'>
		<td><code><b>L.latLng</b>(<nobr>&lt;Object&gt;</nobr> <i>coords</i>)</code></td>
		<td>Expects an plain object of the form <code>{lat: Number, lng: Number}</code> or <code>{lat: Number, lng: Number, alt: Number}</code> instead.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='latlng-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='latlng-equals'>
		<td><code><b>equals</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>otherLatLng</i>, <nobr>&lt;Number&gt;</nobr> <i>maxMargin?</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given <a href="#latlng"><code>LatLng</code></a> point is at the same position (within a small margin of error). The margin of error can be overridden by setting <code>maxMargin</code> to a small number.</p>
</td>
	</tr>
	<tr id='latlng-tostring'>
		<td><code><b>toString</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Returns a string representation of the point (for debugging purposes).</p>
</td>
	</tr>
	<tr id='latlng-distanceto'>
		<td><code><b>distanceTo</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>otherLatLng</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the distance (in meters) to the given <a href="#latlng"><code>LatLng</code></a> calculated using the <a href="https://en.wikipedia.org/wiki/Spherical_law_of_cosines">Spherical Law of Cosines</a>.</p>
</td>
	</tr>
	<tr id='latlng-wrap'>
		<td><code><b>wrap</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns a new <a href="#latlng"><code>LatLng</code></a> object with the longitude wrapped so it's always between -180 and +180 degrees.</p>
</td>
	</tr>
	<tr id='latlng-tobounds'>
		<td><code><b>toBounds</b>(<nobr>&lt;Number&gt;</nobr> <i>sizeInMeters</i>)</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns a new <a href="#latlngbounds"><code>LatLngBounds</code></a> object in which each boundary is <code>sizeInMeters/2</code> meters apart from the <a href="#latlng"><code>LatLng</code></a>.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='latlng-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='latlng-lat'>
		<td><code><b>lat</b></code></td>
		<td><code>Number</code></td>
		<td>Latitude in degrees</td>
	</tr>
	<tr id='latlng-lng'>
		<td><code><b>lng</b></code></td>
		<td><code>Number</code></td>
		<td>Longitude in degrees</td>
	</tr>
	<tr id='latlng-alt'>
		<td><code><b>alt</b></code></td>
		<td><code>Number</code></td>
		<td>Altitude in meters (optional)</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='latlngbounds'>LatLngBounds</h2><p>Represents a rectangular geographical area on a map.</p>

<section>
<h3 id='latlngbounds-example'>Usage example</h3>

<section >





<pre><code class="language-js">var corner1 = L.latLng(40.712, -74.227),
corner2 = L.latLng(40.774, -74.125),
bounds = L.latLngBounds(corner1, corner2);
</code></pre>
<p>All Leaflet methods that accept LatLngBounds objects also accept them in a simple Array form (unless noted otherwise), so the bounds example above can be passed like this:</p>
<pre><code class="language-js">map.fitBounds([
	[40.712, -74.227],
	[40.774, -74.125]
]);
</code></pre>
<p>Caution: if the area crosses the antimeridian (often confused with the International Date Line), you must specify corners <em>outside</em> the [-180, 180] degrees longitude range.</p>
<p>Note that <a href="#latlngbounds"><code>LatLngBounds</code></a> does not inherit from Leaflet's <a href="#class"><code>Class</code></a> object,
which means new classes can't inherit from it, and new methods
can't be added to it with the <code>include</code> function.</p>



</section>


</section><section>
<h3 id='latlngbounds-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='latlngbounds-l-latlngbounds'>
		<td><code><b>L.latLngBounds</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>corner1</i>, <nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>corner2</i>)</code></td>
		<td>Creates a <a href="#latlngbounds"><code>LatLngBounds</code></a> object by defining two diagonally opposite corners of the rectangle.</td>
	</tr>
	<tr id='latlngbounds-l-latlngbounds'>
		<td><code><b>L.latLngBounds</b>(<nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs</i>)</code></td>
		<td>Creates a <a href="#latlngbounds"><code>LatLngBounds</code></a> object defined by the geographical points it contains. Very useful for zooming the map to fit a particular set of locations with <a href="#map-fitbounds"><code>fitBounds</code></a>.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='latlngbounds-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='latlngbounds-extend'>
		<td><code><b>extend</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Extend the bounds to contain the given point</p>
</td>
	</tr>
	<tr id='latlngbounds-extend'>
		<td><code><b>extend</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>otherBounds</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Extend the bounds to contain the given bounds</p>
</td>
	</tr>
	<tr id='latlngbounds-pad'>
		<td><code><b>pad</b>(<nobr>&lt;Number&gt;</nobr> <i>bufferRatio</i>)</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns bounds created by extending or retracting the current bounds by a given ratio in each direction.
For example, a ratio of 0.5 extends the bounds by 50% in each direction.
Negative values will retract the bounds.</p>
</td>
	</tr>
	<tr id='latlngbounds-getcenter'>
		<td><code><b>getCenter</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the center point of the bounds.</p>
</td>
	</tr>
	<tr id='latlngbounds-getsouthwest'>
		<td><code><b>getSouthWest</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the south-west point of the bounds.</p>
</td>
	</tr>
	<tr id='latlngbounds-getnortheast'>
		<td><code><b>getNorthEast</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the north-east point of the bounds.</p>
</td>
	</tr>
	<tr id='latlngbounds-getnorthwest'>
		<td><code><b>getNorthWest</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the north-west point of the bounds.</p>
</td>
	</tr>
	<tr id='latlngbounds-getsoutheast'>
		<td><code><b>getSouthEast</b>()</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns the south-east point of the bounds.</p>
</td>
	</tr>
	<tr id='latlngbounds-getwest'>
		<td><code><b>getWest</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the west longitude of the bounds</p>
</td>
	</tr>
	<tr id='latlngbounds-getsouth'>
		<td><code><b>getSouth</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the south latitude of the bounds</p>
</td>
	</tr>
	<tr id='latlngbounds-geteast'>
		<td><code><b>getEast</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the east longitude of the bounds</p>
</td>
	</tr>
	<tr id='latlngbounds-getnorth'>
		<td><code><b>getNorth</b>()</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the north latitude of the bounds</p>
</td>
	</tr>
	<tr id='latlngbounds-contains'>
		<td><code><b>contains</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>otherBounds</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle contains the given one.</p>
</td>
	</tr>
	<tr id='latlngbounds-contains'>
		<td><code><b>contains</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle contains the given point.</p>
</td>
	</tr>
	<tr id='latlngbounds-intersects'>
		<td><code><b>intersects</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>otherBounds</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle intersects the given bounds. Two bounds intersect if they have at least one point in common.</p>
</td>
	</tr>
	<tr id='latlngbounds-overlaps'>
		<td><code><b>overlaps</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>otherBounds</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle overlaps the given bounds. Two bounds overlap if their intersection is an area.</p>
</td>
	</tr>
	<tr id='latlngbounds-tobboxstring'>
		<td><code><b>toBBoxString</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Returns a string with bounding box coordinates in a 'southwest_lng,southwest_lat,northeast_lng,northeast_lat' format. Useful for sending requests to web services that return geo data.</p>
</td>
	</tr>
	<tr id='latlngbounds-equals'>
		<td><code><b>equals</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>otherBounds</i>, <nobr>&lt;Number&gt;</nobr> <i>maxMargin?</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle is equivalent (within a small margin of error) to the given bounds. The margin of error can be overridden by setting <code>maxMargin</code> to a small number.</p>
</td>
	</tr>
	<tr id='latlngbounds-isvalid'>
		<td><code><b>isValid</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the bounds are properly initialized.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='point'>Point</h2><p>Represents a point with <code>x</code> and <code>y</code> coordinates in pixels.</p>

<section>
<h3 id='point-example'>Usage example</h3>

<section >





<pre><code class="language-js">var point = L.point(200, 300);
</code></pre>
<p>All Leaflet methods and options that accept <a href="#point"><code>Point</code></a> objects also accept them in a simple Array form (unless noted otherwise), so these lines are equivalent:</p>
<pre><code class="language-js">map.panBy([200, 300]);
map.panBy(L.point(200, 300));
</code></pre>
<p>Note that <code>Point</code> does not inherit from Leaflet's <a href="#class"><code>Class</code></a> object,
which means new classes can't inherit from it, and new methods
can't be added to it with the <code>include</code> function.</p>



</section>


</section><section>
<h3 id='point-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='point-l-point'>
		<td><code><b>L.point</b>(<nobr>&lt;Number&gt;</nobr> <i>x</i>, <nobr>&lt;Number&gt;</nobr> <i>y</i>, <nobr>&lt;Boolean&gt;</nobr> <i>round?</i>)</code></td>
		<td>Creates a Point object with the given <code>x</code> and <code>y</code> coordinates. If optional <code>round</code> is set to true, rounds the <code>x</code> and <code>y</code> values.</td>
	</tr>
	<tr id='point-l-point'>
		<td><code><b>L.point</b>(<nobr>&lt;Number[]&gt;</nobr> <i>coords</i>)</code></td>
		<td>Expects an array of the form <code>[x, y]</code> instead.</td>
	</tr>
	<tr id='point-l-point'>
		<td><code><b>L.point</b>(<nobr>&lt;Object&gt;</nobr> <i>coords</i>)</code></td>
		<td>Expects a plain object of the form <code>{x: Number, y: Number}</code> instead.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='point-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='point-clone'>
		<td><code><b>clone</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns a copy of the current point.</p>
</td>
	</tr>
	<tr id='point-add'>
		<td><code><b>add</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>otherPoint</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the result of addition of the current and the given points.</p>
</td>
	</tr>
	<tr id='point-subtract'>
		<td><code><b>subtract</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>otherPoint</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the result of subtraction of the given point from the current.</p>
</td>
	</tr>
	<tr id='point-divideby'>
		<td><code><b>divideBy</b>(<nobr>&lt;Number&gt;</nobr> <i>num</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the result of division of the current point by the given number.</p>
</td>
	</tr>
	<tr id='point-multiplyby'>
		<td><code><b>multiplyBy</b>(<nobr>&lt;Number&gt;</nobr> <i>num</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the result of multiplication of the current point by the given number.</p>
</td>
	</tr>
	<tr id='point-scaleby'>
		<td><code><b>scaleBy</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>scale</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Multiply each coordinate of the current point by each coordinate of
<code>scale</code>. In linear algebra terms, multiply the point by the
<a href="https://en.wikipedia.org/wiki/Scaling_%28geometry%29#Matrix_representation">scaling matrix</a>
defined by <code>scale</code>.</p>
</td>
	</tr>
	<tr id='point-unscaleby'>
		<td><code><b>unscaleBy</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>scale</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Inverse of <code>scaleBy</code>. Divide each coordinate of the current point by
each coordinate of <code>scale</code>.</p>
</td>
	</tr>
	<tr id='point-round'>
		<td><code><b>round</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns a copy of the current point with rounded coordinates.</p>
</td>
	</tr>
	<tr id='point-floor'>
		<td><code><b>floor</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns a copy of the current point with floored coordinates (rounded down).</p>
</td>
	</tr>
	<tr id='point-ceil'>
		<td><code><b>ceil</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns a copy of the current point with ceiled coordinates (rounded up).</p>
</td>
	</tr>
	<tr id='point-trunc'>
		<td><code><b>trunc</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns a copy of the current point with truncated coordinates (rounded towards zero).</p>
</td>
	</tr>
	<tr id='point-distanceto'>
		<td><code><b>distanceTo</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>otherPoint</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the cartesian distance between the current and the given points.</p>
</td>
	</tr>
	<tr id='point-equals'>
		<td><code><b>equals</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>otherPoint</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the given point has the same coordinates.</p>
</td>
	</tr>
	<tr id='point-contains'>
		<td><code><b>contains</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>otherPoint</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if both coordinates of the given point are less than the corresponding current point coordinates (in absolute values).</p>
</td>
	</tr>
	<tr id='point-tostring'>
		<td><code><b>toString</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Returns a string representation of the point for debugging purposes.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='point-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='point-x'>
		<td><code><b>x</b></code></td>
		<td><code>Number</code></td>
		<td>The <code>x</code> coordinate of the point</td>
	</tr>
	<tr id='point-y'>
		<td><code><b>y</b></code></td>
		<td><code>Number</code></td>
		<td>The <code>y</code> coordinate of the point</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='bounds'>Bounds</h2><p>Represents a rectangular area in pixel coordinates.</p>

<section>
<h3 id='bounds-example'>Usage example</h3>

<section >





<pre><code class="language-js">var p1 = L.point(10, 10),
p2 = L.point(40, 60),
bounds = L.bounds(p1, p2);
</code></pre>
<p>All Leaflet methods that accept <a href="#bounds"><code>Bounds</code></a> objects also accept them in a simple Array form (unless noted otherwise), so the bounds example above can be passed like this:</p>
<pre><code class="language-js">otherBounds.intersects([[10, 10], [40, 60]]);
</code></pre>
<p>Note that <code>Bounds</code> does not inherit from Leaflet's <a href="#class"><code>Class</code></a> object,
which means new classes can't inherit from it, and new methods
can't be added to it with the <code>include</code> function.</p>



</section>


</section><section>
<h3 id='bounds-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='bounds-l-bounds'>
		<td><code><b>L.bounds</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>corner1</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>corner2</i>)</code></td>
		<td>Creates a Bounds object from two corners coordinate pairs.</td>
	</tr>
	<tr id='bounds-l-bounds'>
		<td><code><b>L.bounds</b>(<nobr>&lt;Point[]&gt;</nobr> <i>points</i>)</code></td>
		<td>Creates a Bounds object from the given array of points.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='bounds-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='bounds-extend'>
		<td><code><b>extend</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Extends the bounds to contain the given point.</p>
</td>
	</tr>
	<tr id='bounds-getcenter'>
		<td><code><b>getCenter</b>(<nobr>&lt;Boolean&gt;</nobr> <i>round?</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the center point of the bounds.</p>
</td>
	</tr>
	<tr id='bounds-getbottomleft'>
		<td><code><b>getBottomLeft</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the bottom-left point of the bounds.</p>
</td>
	</tr>
	<tr id='bounds-gettopright'>
		<td><code><b>getTopRight</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the top-right point of the bounds.</p>
</td>
	</tr>
	<tr id='bounds-gettopleft'>
		<td><code><b>getTopLeft</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the top-left point of the bounds (i.e. <a href="#bounds-min"><code>this.min</code></a>).</p>
</td>
	</tr>
	<tr id='bounds-getbottomright'>
		<td><code><b>getBottomRight</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the bottom-right point of the bounds (i.e. <a href="#bounds-max"><code>this.max</code></a>).</p>
</td>
	</tr>
	<tr id='bounds-getsize'>
		<td><code><b>getSize</b>()</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the size of the given bounds</p>
</td>
	</tr>
	<tr id='bounds-contains'>
		<td><code><b>contains</b>(<nobr>&lt;<a href='#bounds'>Bounds</a>&gt;</nobr> <i>otherBounds</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle contains the given one.</p>
</td>
	</tr>
	<tr id='bounds-contains'>
		<td><code><b>contains</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle contains the given point.</p>
</td>
	</tr>
	<tr id='bounds-intersects'>
		<td><code><b>intersects</b>(<nobr>&lt;<a href='#bounds'>Bounds</a>&gt;</nobr> <i>otherBounds</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle intersects the given bounds. Two bounds
intersect if they have at least one point in common.</p>
</td>
	</tr>
	<tr id='bounds-overlaps'>
		<td><code><b>overlaps</b>(<nobr>&lt;<a href='#bounds'>Bounds</a>&gt;</nobr> <i>otherBounds</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the rectangle overlaps the given bounds. Two bounds
overlap if their intersection is an area.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='bounds-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='bounds-min'>
		<td><code><b>min</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>The top left corner of the rectangle.</td>
	</tr>
	<tr id='bounds-max'>
		<td><code><b>max</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>The bottom right corner of the rectangle.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='icon'>Icon</h2><p>Represents an icon to provide when creating a marker.</p>

<section>
<h3 id='icon-example'>Usage example</h3>

<section >





<pre><code class="language-js">var myIcon = L.icon({
    iconUrl: 'my-icon.png',
    iconSize: [38, 95],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76],
    shadowUrl: 'my-icon-shadow.png',
    shadowSize: [68, 95],
    shadowAnchor: [22, 94]
});

L.marker([50.505, 30.57], {icon: myIcon}).addTo(map);
</code></pre>
<p><a href="#icon-default"><code>L.Icon.Default</code></a> extends <a href="#icon"><code>L.Icon</code></a> and is the blue icon Leaflet uses for markers by default.</p>



</section>


</section><section>
<h3 id='icon-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='icon-l-icon'>
		<td><code><b>L.icon</b>(<nobr>&lt;<a href='#icon-option'>Icon options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td>Creates an icon instance with the given options.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='icon-option'>Options</h3>

<section >



<div class='section-comments'></div>

<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='icon-iconurl'>
		<td><code><b>iconUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td><strong>(required)</strong> The URL to the icon image (absolute or relative to your script path).</td>
	</tr>
	<tr id='icon-iconretinaurl'>
		<td><code><b>iconRetinaUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>The URL to a retina sized version of the icon image (absolute or relative to your
script path). Used for Retina screen devices.</td>
	</tr>
	<tr id='icon-iconsize'>
		<td><code><b>iconSize</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>Size of the icon image in pixels.</td>
	</tr>
	<tr id='icon-iconanchor'>
		<td><code><b>iconAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>The coordinates of the &quot;tip&quot; of the icon (relative to its top left corner). The icon
will be aligned so that this point is at the marker's geographical location. Centered
by default if size is specified, also can be set in CSS with negative margins.</td>
	</tr>
	<tr id='icon-popupanchor'>
		<td><code><b>popupAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>The coordinates of the point from which popups will &quot;open&quot;, relative to the icon anchor.</td>
	</tr>
	<tr id='icon-tooltipanchor'>
		<td><code><b>tooltipAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>The coordinates of the point from which tooltips will &quot;open&quot;, relative to the icon anchor.</td>
	</tr>
	<tr id='icon-shadowurl'>
		<td><code><b>shadowUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>The URL to the icon shadow image. If not specified, no shadow image will be created.</td>
	</tr>
	<tr id='icon-shadowretinaurl'>
		<td><code><b>shadowRetinaUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td></td>
	</tr>
	<tr id='icon-shadowsize'>
		<td><code><b>shadowSize</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>Size of the shadow image in pixels.</td>
	</tr>
	<tr id='icon-shadowanchor'>
		<td><code><b>shadowAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>The coordinates of the &quot;tip&quot; of the shadow (relative to its top left corner) (the same
as iconAnchor if not specified).</td>
	</tr>
	<tr id='icon-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to both icon and shadow images. Empty by default.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='icon-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='icon-createicon'>
		<td><code><b>createIcon</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>oldIcon?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Called internally when the icon has to be shown, returns a <code>&lt;img&gt;</code> HTML element
styled according to the options.</p>
</td>
	</tr>
	<tr id='icon-createshadow'>
		<td><code><b>createShadow</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>oldIcon?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>As <code>createIcon</code>, but for the shadow beneath it.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><span id='icon-default'></span>

<section>
<h3 id='icon-default-option'>Icon.Default</h3>

<section >



<div class='section-comments'>A trivial subclass of <a href="#icon"><code>Icon</code></a>, represents the icon to use in <a href="#marker"><code>Marker</code></a>s when
no icon is specified. Points to the blue marker image distributed with Leaflet
releases.
<p>In order to customize the default icon, just change the properties of <code>L.Icon.Default.prototype.options</code>
(which is a set of <a href="#icon-option"><code>Icon options</code></a>).</p>
<p>If you want to <em>completely</em> replace the default icon, override the
<code>L.Marker.prototype.options.icon</code> with your own icon instead.</p></div>

<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='icon-default-imagepath'>
		<td><code><b>imagePath</b></code></td>
		<td><code>String</code></td>
		<td><code></code></td>
		<td><a href="#icon-default"><code>Icon.Default</code></a> will try to auto-detect the location of the
blue icon images. If you are placing these images in a non-standard
way, set this option to point to the right path.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='divicon'>DivIcon</h2><p>Represents a lightweight icon for markers that uses a simple <code>&lt;div&gt;</code>
element instead of an image. Inherits from <a href="#icon"><code>Icon</code></a> but ignores the <code>iconUrl</code> and shadow options.</p>

<section>
<h3 id='divicon-example'>Usage example</h3>

<section >





<pre><code class="language-js">var myIcon = L.divIcon({className: 'my-div-icon'});
// you can set .my-div-icon styles in CSS

L.marker([50.505, 30.57], {icon: myIcon}).addTo(map);
</code></pre>
<p>By default, it has a 'leaflet-div-icon' CSS class and is styled as a little white square with a shadow.</p>



</section>


</section><section>
<h3 id='divicon-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divicon-l-divicon'>
		<td><code><b>L.divIcon</b>(<nobr>&lt;<a href='#divicon-option'>DivIcon options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td>Creates a <a href="#divicon"><code>DivIcon</code></a> instance with the given options.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='divicon-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divicon-html'>
		<td><code><b>html</b></code></td>
		<td><code>String|HTMLElement</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>Custom HTML code to put inside the div element, empty by default. Alternatively,
an instance of <code>HTMLElement</code>.</td>
	</tr>
	<tr id='divicon-bgpos'>
		<td><code><b>bgPos</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>Optional relative position of the background, in pixels</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#icon'>Icon</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divicon-iconurl'>
		<td><code><b>iconUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td><strong>(required)</strong> The URL to the icon image (absolute or relative to your script path).</td>
	</tr>
	<tr id='divicon-iconretinaurl'>
		<td><code><b>iconRetinaUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>The URL to a retina sized version of the icon image (absolute or relative to your
script path). Used for Retina screen devices.</td>
	</tr>
	<tr id='divicon-iconsize'>
		<td><code><b>iconSize</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>Size of the icon image in pixels.</td>
	</tr>
	<tr id='divicon-iconanchor'>
		<td><code><b>iconAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>The coordinates of the &quot;tip&quot; of the icon (relative to its top left corner). The icon
will be aligned so that this point is at the marker's geographical location. Centered
by default if size is specified, also can be set in CSS with negative margins.</td>
	</tr>
	<tr id='divicon-popupanchor'>
		<td><code><b>popupAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>The coordinates of the point from which popups will &quot;open&quot;, relative to the icon anchor.</td>
	</tr>
	<tr id='divicon-tooltipanchor'>
		<td><code><b>tooltipAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>[0, 0]</code></td>
		<td>The coordinates of the point from which tooltips will &quot;open&quot;, relative to the icon anchor.</td>
	</tr>
	<tr id='divicon-shadowurl'>
		<td><code><b>shadowUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>The URL to the icon shadow image. If not specified, no shadow image will be created.</td>
	</tr>
	<tr id='divicon-shadowretinaurl'>
		<td><code><b>shadowRetinaUrl</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td></td>
	</tr>
	<tr id='divicon-shadowsize'>
		<td><code><b>shadowSize</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>Size of the shadow image in pixels.</td>
	</tr>
	<tr id='divicon-shadowanchor'>
		<td><code><b>shadowAnchor</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>null</code></td>
		<td>The coordinates of the &quot;tip&quot; of the shadow (relative to its top left corner) (the same
as iconAnchor if not specified).</td>
	</tr>
	<tr id='divicon-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom class name to assign to both icon and shadow images. Empty by default.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#icon'>Icon</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divicon-createicon'>
		<td><code><b>createIcon</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>oldIcon?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Called internally when the icon has to be shown, returns a <code>&lt;img&gt;</code> HTML element
styled according to the options.</p>
</td>
	</tr>
	<tr id='divicon-createshadow'>
		<td><code><b>createShadow</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>oldIcon?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>As <code>createIcon</code>, but for the shadow beneath it.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='control-zoom'>Control.Zoom</h2><p>A basic zoom control with two buttons (zoom in and zoom out). It is put on the map by default unless you set its <a href="#map-zoomcontrol"><code>zoomControl</code> option</a> to <code>false</code>. Extends <a href="#control"><code>Control</code></a>.</p>

<section>
<h3 id='control-zoom-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-zoom-l-control-zoom'>
		<td><code><b>L.control.zoom</b>(<nobr>&lt;<a href='#control-zoom-option'>Control.Zoom options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td>Creates a zoom control</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='control-zoom-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-zoom-zoomintext'>
		<td><code><b>zoomInText</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;+&#x27;</code></td>
		<td>The text set on the 'zoom in' button.</td>
	</tr>
	<tr id='control-zoom-zoomintitle'>
		<td><code><b>zoomInTitle</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;Zoom in&#x27;</code></td>
		<td>The title set on the 'zoom in' button.</td>
	</tr>
	<tr id='control-zoom-zoomouttext'>
		<td><code><b>zoomOutText</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&amp;#x2212</code></td>
		<td>'
The text set on the 'zoom out' button.</td>
	</tr>
	<tr id='control-zoom-zoomouttitle'>
		<td><code><b>zoomOutTitle</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;Zoom out&#x27;</code></td>
		<td>The title set on the 'zoom out' button.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-zoom-position'>
		<td><code><b>position</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;topright&#x27;</code></td>
		<td>The position of the control (one of the map corners). Possible values are <code>'topleft'</code>,
<code>'topright'</code>, <code>'bottomleft'</code> or <code>'bottomright'</code></td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-zoom-getposition'>
		<td><code><b>getPosition</b>()</code></td>
		<td><code>string</code></td>
		<td><p>Returns the position of the control.</p>
</td>
	</tr>
	<tr id='control-zoom-setposition'>
		<td><code><b>setPosition</b>(<nobr>&lt;string&gt;</nobr> <i>position</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the position of the control.</p>
</td>
	</tr>
	<tr id='control-zoom-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTMLElement that contains the control.</p>
</td>
	</tr>
	<tr id='control-zoom-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the control to the given map.</p>
</td>
	</tr>
	<tr id='control-zoom-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the control from the map it is currently active on.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='control-attribution'>Control.Attribution</h2><p>The attribution control allows you to display attribution data in a small text box on a map. It is put on the map by default unless you set its <a href="#map-attributioncontrol"><code>attributionControl</code> option</a> to <code>false</code>, and it fetches attribution texts from layers with the <a href="#layer-getattribution"><code>getAttribution</code> method</a> automatically. Extends Control.</p>

<section>
<h3 id='control-attribution-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-attribution-l-control-attribution'>
		<td><code><b>L.control.attribution</b>(<nobr>&lt;<a href='#control-attribution-option'>Control.Attribution options</a>&gt;</nobr> <i>options</i>)</code></td>
		<td>Creates an attribution control.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='control-attribution-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-attribution-prefix'>
		<td><code><b>prefix</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;Leaflet&#x27;</code></td>
		<td>The HTML text shown before the attributions. Pass <code>false</code> to disable.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-attribution-position'>
		<td><code><b>position</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;topright&#x27;</code></td>
		<td>The position of the control (one of the map corners). Possible values are <code>'topleft'</code>,
<code>'topright'</code>, <code>'bottomleft'</code> or <code>'bottomright'</code></td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='control-attribution-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-attribution-setprefix'>
		<td><code><b>setPrefix</b>(<nobr>&lt;String&gt;</nobr> <i>prefix</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the text before the attributions.</p>
</td>
	</tr>
	<tr id='control-attribution-addattribution'>
		<td><code><b>addAttribution</b>(<nobr>&lt;String&gt;</nobr> <i>text</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an attribution text (e.g. <code>'Vector data &amp;copy; Mapbox'</code>).</p>
</td>
	</tr>
	<tr id='control-attribution-removeattribution'>
		<td><code><b>removeAttribution</b>(<nobr>&lt;String&gt;</nobr> <i>text</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an attribution text.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-attribution-getposition'>
		<td><code><b>getPosition</b>()</code></td>
		<td><code>string</code></td>
		<td><p>Returns the position of the control.</p>
</td>
	</tr>
	<tr id='control-attribution-setposition'>
		<td><code><b>setPosition</b>(<nobr>&lt;string&gt;</nobr> <i>position</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the position of the control.</p>
</td>
	</tr>
	<tr id='control-attribution-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTMLElement that contains the control.</p>
</td>
	</tr>
	<tr id='control-attribution-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the control to the given map.</p>
</td>
	</tr>
	<tr id='control-attribution-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the control from the map it is currently active on.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='control-layers'>Control.Layers</h2><p>The layers control gives users the ability to switch between different base layers and switch overlays on/off (check out the <a href="http://leafletjs.com/examples/layers-control/">detailed example</a>). Extends <a href="#control"><code>Control</code></a>.</p>

<section>
<h3 id='control-layers-example'>Usage example</h3>

<section >





<pre><code class="language-js">var baseLayers = {
	&quot;Mapbox&quot;: mapbox,
	&quot;OpenStreetMap&quot;: osm
};

var overlays = {
	&quot;Marker&quot;: marker,
	&quot;Roads&quot;: roadsLayer
};

L.control.layers(baseLayers, overlays).addTo(map);
</code></pre>
<p>The <code>baseLayers</code> and <code>overlays</code> parameters are object literals with layer names as keys and <a href="#layer"><code>Layer</code></a> objects as values:</p>
<pre><code class="language-js">{
    &quot;&lt;someName1&gt;&quot;: layer1,
    &quot;&lt;someName2&gt;&quot;: layer2
}
</code></pre>
<p>The layer names can contain HTML, which allows you to add additional styling to the items:</p>
<pre><code class="language-js">{&quot;&lt;img src='my-layer-icon' /&gt; &lt;span class='my-layer-item'&gt;My Layer&lt;/span&gt;&quot;: myLayer}
</code></pre>



</section>


</section><section>
<h3 id='control-layers-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-layers-l-control-layers'>
		<td><code><b>L.control.layers</b>(<nobr>&lt;Object&gt;</nobr> <i>baselayers?</i>, <nobr>&lt;Object&gt;</nobr> <i>overlays?</i>, <nobr>&lt;<a href='#control-layers-option'>Control.Layers options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Creates a layers control with the given layers. Base layers will be switched with radio buttons, while overlays will be switched with checkboxes. Note that all base layers should be passed in the base layers object, but only one should be added to the map during map instantiation.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='control-layers-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-layers-collapsed'>
		<td><code><b>collapsed</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>true</code>, the control will be collapsed into an icon and expanded on mouse hover or touch.</td>
	</tr>
	<tr id='control-layers-autozindex'>
		<td><code><b>autoZIndex</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>true</code>, the control will assign zIndexes in increasing order to all of its layers so that the order is preserved when switching them on/off.</td>
	</tr>
	<tr id='control-layers-hidesinglebase'>
		<td><code><b>hideSingleBase</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, the base layers in the control will be hidden when there is only one.</td>
	</tr>
	<tr id='control-layers-sortlayers'>
		<td><code><b>sortLayers</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>Whether to sort the layers. When <code>false</code>, layers will keep the order
in which they were added to the control.</td>
	</tr>
	<tr id='control-layers-sortfunction'>
		<td><code><b>sortFunction</b></code></td>
		<td><code>Function</code></td>
		<td><code>*</code></td>
		<td>A <a href="https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Array/sort">compare function</a>
that will be used for sorting the layers, when <code>sortLayers</code> is <code>true</code>.
The function receives both the <a href="#layer"><code>L.Layer</code></a> instances and their names, as in
<code>sortFunction(layerA, layerB, nameA, nameB)</code>.
By default, it sorts layers alphabetically by their name.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-layers-position'>
		<td><code><b>position</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;topright&#x27;</code></td>
		<td>The position of the control (one of the map corners). Possible values are <code>'topleft'</code>,
<code>'topright'</code>, <code>'bottomleft'</code> or <code>'bottomright'</code></td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='control-layers-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-layers-addbaselayer'>
		<td><code><b>addBaseLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>, <nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a base layer (radio button entry) with the given name to the control.</p>
</td>
	</tr>
	<tr id='control-layers-addoverlay'>
		<td><code><b>addOverlay</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>, <nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an overlay (checkbox entry) with the given name to the control.</p>
</td>
	</tr>
	<tr id='control-layers-removelayer'>
		<td><code><b>removeLayer</b>(<nobr>&lt;<a href='#layer'>Layer</a>&gt;</nobr> <i>layer</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Remove the given layer from the control.</p>
</td>
	</tr>
	<tr id='control-layers-expand'>
		<td><code><b>expand</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Expand the control container if collapsed.</p>
</td>
	</tr>
	<tr id='control-layers-collapse'>
		<td><code><b>collapse</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Collapse the control container if expanded.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-layers-getposition'>
		<td><code><b>getPosition</b>()</code></td>
		<td><code>string</code></td>
		<td><p>Returns the position of the control.</p>
</td>
	</tr>
	<tr id='control-layers-setposition'>
		<td><code><b>setPosition</b>(<nobr>&lt;string&gt;</nobr> <i>position</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the position of the control.</p>
</td>
	</tr>
	<tr id='control-layers-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTMLElement that contains the control.</p>
</td>
	</tr>
	<tr id='control-layers-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the control to the given map.</p>
</td>
	</tr>
	<tr id='control-layers-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the control from the map it is currently active on.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='control-scale'>Control.Scale</h2><p>A simple scale control that shows the scale of the current center of screen in metric (m/km) and imperial (mi/ft) systems. Extends <a href="#control"><code>Control</code></a>.</p>

<section>
<h3 id='control-scale-example'>Usage example</h3>

<section >





<pre><code class="language-js">L.control.scale().addTo(map);
</code></pre>



</section>


</section><section>
<h3 id='control-scale-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-scale-l-control-scale'>
		<td><code><b>L.control.scale</b>(<nobr>&lt;<a href='#control-scale-option'>Control.Scale options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Creates an scale control with the given options.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='control-scale-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-scale-maxwidth'>
		<td><code><b>maxWidth</b></code></td>
		<td><code>Number</code></td>
		<td><code>100</code></td>
		<td>Maximum width of the control in pixels. The width is set dynamically to show round values (e.g. 100, 200, 500).</td>
	</tr>
	<tr id='control-scale-metric'>
		<td><code><b>metric</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>True</code></td>
		<td>Whether to show the metric scale line (m/km).</td>
	</tr>
	<tr id='control-scale-imperial'>
		<td><code><b>imperial</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>True</code></td>
		<td>Whether to show the imperial scale line (mi/ft).</td>
	</tr>
	<tr id='control-scale-updatewhenidle'>
		<td><code><b>updateWhenIdle</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>false</code></td>
		<td>If <code>true</code>, the control is updated on <a href="#map-moveend"><code>moveend</code></a>, otherwise it's always up-to-date (updated on <a href="#map-move"><code>move</code></a>).</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-scale-position'>
		<td><code><b>position</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;topright&#x27;</code></td>
		<td>The position of the control (one of the map corners). Possible values are <code>'topleft'</code>,
<code>'topright'</code>, <code>'bottomleft'</code> or <code>'bottomright'</code></td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#control'>Control</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-scale-getposition'>
		<td><code><b>getPosition</b>()</code></td>
		<td><code>string</code></td>
		<td><p>Returns the position of the control.</p>
</td>
	</tr>
	<tr id='control-scale-setposition'>
		<td><code><b>setPosition</b>(<nobr>&lt;string&gt;</nobr> <i>position</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the position of the control.</p>
</td>
	</tr>
	<tr id='control-scale-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTMLElement that contains the control.</p>
</td>
	</tr>
	<tr id='control-scale-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the control to the given map.</p>
</td>
	</tr>
	<tr id='control-scale-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the control from the map it is currently active on.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='browser'>Browser</h2><p>A namespace with static properties for browser/feature detection used by Leaflet internally.</p>

<section>
<h3 id='browser-example'>Usage example</h3>

<section >





<pre><code class="language-js">if (L.Browser.ielt9) {
  alert('Upgrade your browser, dude!');
}
</code></pre>



</section>


</section><section>
<h3 id='browser-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='browser-ie'>
		<td><code><b>ie</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all Internet Explorer versions (not Edge).</td>
	</tr>
	<tr id='browser-ielt9'>
		<td><code><b>ielt9</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for Internet Explorer versions less than 9.</td>
	</tr>
	<tr id='browser-edge'>
		<td><code><b>edge</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for the Edge web browser.</td>
	</tr>
	<tr id='browser-webkit'>
		<td><code><b>webkit</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for webkit-based browsers like Chrome and Safari (including mobile versions).</td>
	</tr>
	<tr id='browser-android'>
		<td><code><b>android</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for any browser running on an Android platform.</td>
	</tr>
	<tr id='browser-android23'>
		<td><code><b>android23</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for browsers running on Android 2 or Android 3.</td>
	</tr>
	<tr id='browser-androidstock'>
		<td><code><b>androidStock</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for the Android stock browser (i.e. not Chrome)</td>
	</tr>
	<tr id='browser-opera'>
		<td><code><b>opera</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for the Opera browser</td>
	</tr>
	<tr id='browser-chrome'>
		<td><code><b>chrome</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for the Chrome browser.</td>
	</tr>
	<tr id='browser-gecko'>
		<td><code><b>gecko</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for gecko-based browsers like Firefox.</td>
	</tr>
	<tr id='browser-safari'>
		<td><code><b>safari</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for the Safari browser.</td>
	</tr>
	<tr id='browser-opera12'>
		<td><code><b>opera12</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for the Opera browser supporting CSS transforms (version 12 or later).</td>
	</tr>
	<tr id='browser-win'>
		<td><code><b>win</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> when the browser is running in a Windows platform</td>
	</tr>
	<tr id='browser-ie3d'>
		<td><code><b>ie3d</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all Internet Explorer versions supporting CSS transforms.</td>
	</tr>
	<tr id='browser-webkit3d'>
		<td><code><b>webkit3d</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for webkit-based browsers supporting CSS transforms.</td>
	</tr>
	<tr id='browser-gecko3d'>
		<td><code><b>gecko3d</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for gecko-based browsers supporting CSS transforms.</td>
	</tr>
	<tr id='browser-any3d'>
		<td><code><b>any3d</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all browsers supporting CSS transforms.</td>
	</tr>
	<tr id='browser-mobile'>
		<td><code><b>mobile</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all browsers running in a mobile device.</td>
	</tr>
	<tr id='browser-mobilewebkit'>
		<td><code><b>mobileWebkit</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all webkit-based browsers in a mobile device.</td>
	</tr>
	<tr id='browser-mobilewebkit3d'>
		<td><code><b>mobileWebkit3d</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all webkit-based browsers in a mobile device supporting CSS transforms.</td>
	</tr>
	<tr id='browser-mspointer'>
		<td><code><b>msPointer</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for browsers implementing the Microsoft touch events model (notably IE10).</td>
	</tr>
	<tr id='browser-pointer'>
		<td><code><b>pointer</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all browsers supporting <a href="https://msdn.microsoft.com/en-us/library/dn433244%28v=vs.85%29.aspx">pointer events</a>.</td>
	</tr>
	<tr id='browser-touch'>
		<td><code><b>touch</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for all browsers supporting <a href="https://developer.mozilla.org/docs/Web/API/Touch_events">touch events</a>.
This does not necessarily mean that the browser is running in a computer with
a touchscreen, it only means that the browser is capable of understanding
touch events.</td>
	</tr>
	<tr id='browser-mobileopera'>
		<td><code><b>mobileOpera</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for the Opera browser in a mobile device.</td>
	</tr>
	<tr id='browser-mobilegecko'>
		<td><code><b>mobileGecko</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for gecko-based browsers running in a mobile device.</td>
	</tr>
	<tr id='browser-retina'>
		<td><code><b>retina</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for browsers on a high-resolution &quot;retina&quot; screen or on any screen when browser's display zoom is more than 100%.</td>
	</tr>
	<tr id='browser-passiveevents'>
		<td><code><b>passiveEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> for browsers that support passive events.</td>
	</tr>
	<tr id='browser-canvas'>
		<td><code><b>canvas</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> when the browser supports <a href="https://developer.mozilla.org/docs/Web/API/Canvas_API"><code>&lt;canvas&gt;</code></a>.</td>
	</tr>
	<tr id='browser-svg'>
		<td><code><b>svg</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> when the browser supports <a href="https://developer.mozilla.org/docs/Web/SVG">SVG</a>.</td>
	</tr>
	<tr id='browser-vml'>
		<td><code><b>vml</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code> if the browser supports <a href="https://en.wikipedia.org/wiki/Vector_Markup_Language">VML</a>.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='util'>Util</h2><p>Various utility functions, used by Leaflet internally.</p>

<section>
<h3 id='util-function'>Functions</h3>

<section >




<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='util-extend'>
		<td><code><b>extend</b>(<nobr>&lt;Object&gt;</nobr> <i>dest</i>, <nobr>&lt;Object&gt;</nobr> <i>src?</i>)</code></td>
		<td><code>Object</code></td>
		<td>Merges the properties of the <code>src</code> object (or multiple objects) into <code>dest</code> object and returns the latter. Has an <code>L.extend</code> shortcut.</td>
	</tr>
	<tr id='util-create'>
		<td><code><b>create</b>(<nobr>&lt;Object&gt;</nobr> <i>proto</i>, <nobr>&lt;Object&gt;</nobr> <i>properties?</i>)</code></td>
		<td><code>Object</code></td>
		<td>Compatibility polyfill for <a href="https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Object/create">Object.create</a></td>
	</tr>
	<tr id='util-bind'>
		<td><code><b>bind</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <i>…</i>)</code></td>
		<td><code>Function</code></td>
		<td>Returns a new function bound to the arguments passed, like <a href="https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Function/bind">Function.prototype.bind</a>.
Has a <code>L.bind()</code> shortcut.</td>
	</tr>
	<tr id='util-stamp'>
		<td><code><b>stamp</b>(<nobr>&lt;Object&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>Number</code></td>
		<td>Returns the unique ID of an object, assigning it one if it doesn't have it.</td>
	</tr>
	<tr id='util-throttle'>
		<td><code><b>throttle</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Number&gt;</nobr> <i>time</i>, <nobr>&lt;Object&gt;</nobr> <i>context</i>)</code></td>
		<td><code>Function</code></td>
		<td>Returns a function which executes function <code>fn</code> with the given scope <code>context</code>
(so that the <code>this</code> keyword refers to <code>context</code> inside <code>fn</code>'s code). The function
<code>fn</code> will be called no more than one time per given amount of <code>time</code>. The arguments
received by the bound function will be any arguments passed when binding the
function, followed by any arguments passed when invoking the bound function.
Has an <code>L.throttle</code> shortcut.</td>
	</tr>
	<tr id='util-wrapnum'>
		<td><code><b>wrapNum</b>(<nobr>&lt;Number&gt;</nobr> <i>num</i>, <nobr>&lt;Number[]&gt;</nobr> <i>range</i>, <nobr>&lt;Boolean&gt;</nobr> <i>includeMax?</i>)</code></td>
		<td><code>Number</code></td>
		<td>Returns the number <code>num</code> modulo <code>range</code> in such a way so it lies within
<code>range[0]</code> and <code>range[1]</code>. The returned value will be always smaller than
<code>range[1]</code> unless <code>includeMax</code> is set to <code>true</code>.</td>
	</tr>
	<tr id='util-falsefn'>
		<td><code><b>falseFn</b>()</code></td>
		<td><code>Function</code></td>
		<td>Returns a function which always returns <code>false</code>.</td>
	</tr>
	<tr id='util-formatnum'>
		<td><code><b>formatNum</b>(<nobr>&lt;Number&gt;</nobr> <i>num</i>, <nobr>&lt;Number&gt;</nobr> <i>digits?</i>)</code></td>
		<td><code>Number</code></td>
		<td>Returns the number <code>num</code> rounded to <code>digits</code> decimals, or to 6 decimals by default.</td>
	</tr>
	<tr id='util-trim'>
		<td><code><b>trim</b>(<nobr>&lt;String&gt;</nobr> <i>str</i>)</code></td>
		<td><code>String</code></td>
		<td>Compatibility polyfill for <a href="https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String/Trim">String.prototype.trim</a></td>
	</tr>
	<tr id='util-splitwords'>
		<td><code><b>splitWords</b>(<nobr>&lt;String&gt;</nobr> <i>str</i>)</code></td>
		<td><code>String[]</code></td>
		<td>Trims and splits the string on whitespace and returns the array of parts.</td>
	</tr>
	<tr id='util-setoptions'>
		<td><code><b>setOptions</b>(<nobr>&lt;Object&gt;</nobr> <i>obj</i>, <nobr>&lt;Object&gt;</nobr> <i>options</i>)</code></td>
		<td><code>Object</code></td>
		<td>Merges the given properties to the <code>options</code> of the <code>obj</code> object, returning the resulting options. See <code>Class options</code>. Has an <code>L.setOptions</code> shortcut.</td>
	</tr>
	<tr id='util-getparamstring'>
		<td><code><b>getParamString</b>(<nobr>&lt;Object&gt;</nobr> <i>obj</i>, <nobr>&lt;String&gt;</nobr> <i>existingUrl?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>uppercase?</i>)</code></td>
		<td><code>String</code></td>
		<td>Converts an object into a parameter URL string, e.g. <code>{a: &quot;foo&quot;, b: &quot;bar&quot;}</code>
translates to <code>'?a=foo&amp;b=bar'</code>. If <code>existingUrl</code> is set, the parameters will
be appended at the end. If <code>uppercase</code> is <code>true</code>, the parameter names will
be uppercased (e.g. <code>'?A=foo&amp;B=bar'</code>)</td>
	</tr>
	<tr id='util-template'>
		<td><code><b>template</b>(<nobr>&lt;String&gt;</nobr> <i>str</i>, <nobr>&lt;Object&gt;</nobr> <i>data</i>)</code></td>
		<td><code>String</code></td>
		<td>Simple templating facility, accepts a template string of the form <code>'Hello {a}, {b}'</code>
and a data object like <code>{a: 'foo', b: 'bar'}</code>, returns evaluated string
<code>('Hello foo, bar')</code>. You can also specify functions instead of strings for
data values — they will be evaluated passing <code>data</code> as an argument.</td>
	</tr>
	<tr id='util-isarray'>
		<td><code><b>isArray</b>(<i>obj</i>)</code></td>
		<td><code>Boolean</code></td>
		<td>Compatibility polyfill for <a href="https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Array/isArray">Array.isArray</a></td>
	</tr>
	<tr id='util-indexof'>
		<td><code><b>indexOf</b>(<nobr>&lt;Array&gt;</nobr> <i>array</i>, <nobr>&lt;Object&gt;</nobr> <i>el</i>)</code></td>
		<td><code>Number</code></td>
		<td>Compatibility polyfill for <a href="https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Array/indexOf">Array.prototype.indexOf</a></td>
	</tr>
	<tr id='util-requestanimframe'>
		<td><code><b>requestAnimFrame</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>immediate?</i>)</code></td>
		<td><code>Number</code></td>
		<td>Schedules <code>fn</code> to be executed when the browser repaints. <code>fn</code> is bound to
<code>context</code> if given. When <code>immediate</code> is set, <code>fn</code> is called immediately if
the browser doesn't have native support for
<a href="https://developer.mozilla.org/docs/Web/API/window/requestAnimationFrame"><code>window.requestAnimationFrame</code></a>,
otherwise it's delayed. Returns a request ID that can be used to cancel the request.</td>
	</tr>
	<tr id='util-cancelanimframe'>
		<td><code><b>cancelAnimFrame</b>(<nobr>&lt;Number&gt;</nobr> <i>id</i>)</code></td>
		<td><code>undefined</code></td>
		<td>Cancels a previous <code>requestAnimFrame</code>. See also <a href="https://developer.mozilla.org/docs/Web/API/window/cancelAnimationFrame">window.cancelAnimationFrame</a>.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='util-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='util-lastid'>
		<td><code><b>lastId</b></code></td>
		<td><code>Number</code></td>
		<td>Last unique ID used by <a href="#util-stamp"><code>stamp()</code></a></td>
	</tr>
	<tr id='util-emptyimageurl'>
		<td><code><b>emptyImageUrl</b></code></td>
		<td><code>String</code></td>
		<td>Data URI string containing a base64-encoded empty GIF image.
Used as a hack to free memory from unused images on WebKit-powered
mobile devices (by setting image <code>src</code> to this string).</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='transformation'>Transformation</h2><p>Represents an affine transformation: a set of coefficients <code>a</code>, <code>b</code>, <code>c</code>, <code>d</code>
for transforming a point of a form <code>(x, y)</code> into <code>(a*x + b, c*y + d)</code> and doing
the reverse. Used by Leaflet in its projections code.</p>

<section>
<h3 id='transformation-example'>Usage example</h3>

<section >





<pre><code class="language-js">var transformation = L.transformation(2, 5, -1, 10),
	p = L.point(1, 2),
	p2 = transformation.transform(p), //  L.point(7, 8)
	p3 = transformation.untransform(p2); //  L.point(1, 2)
</code></pre>



</section>


</section><section>
<h3 id='transformation-factory'>Creation</h3>

<section >




<table><thead>
	<tr>
		<th>Factory</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='transformation-l-transformation'>
		<td><code><b>L.transformation</b>(<nobr>&lt;Number&gt;</nobr> <i>a</i>, <nobr>&lt;Number&gt;</nobr> <i>b</i>, <nobr>&lt;Number&gt;</nobr> <i>c</i>, <nobr>&lt;Number&gt;</nobr> <i>d</i>)</code></td>
		<td>Instantiates a Transformation object with the given coefficients.</td>
	</tr>
	<tr id='transformation-l-transformation'>
		<td><code><b>L.transformation</b>(<nobr>&lt;Array&gt;</nobr> <i>coefficients</i>)</code></td>
		<td>Expects an coefficients array of the form
<code>[a: Number, b: Number, c: Number, d: Number]</code>.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='transformation-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='transformation-transform'>
		<td><code><b>transform</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>, <nobr>&lt;Number&gt;</nobr> <i>scale?</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns a transformed point, optionally multiplied by the given scale.
Only accepts actual <a href="#point"><code>L.Point</code></a> instances, not arrays.</p>
</td>
	</tr>
	<tr id='transformation-untransform'>
		<td><code><b>untransform</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>, <nobr>&lt;Number&gt;</nobr> <i>scale?</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Returns the reverse transformation of the given point, optionally divided
by the given scale. Only accepts actual <a href="#point"><code>L.Point</code></a> instances, not arrays.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='lineutil'>LineUtil</h2><p>Various utility functions for polyline points processing, used by Leaflet internally to make polylines lightning-fast.</p>

<section>
<h3 id='lineutil-function'>Functions</h3>

<section >




<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='lineutil-simplify'>
		<td><code><b>simplify</b>(<nobr>&lt;Point[]&gt;</nobr> <i>points</i>, <nobr>&lt;Number&gt;</nobr> <i>tolerance</i>)</code></td>
		<td><code>Point[]</code></td>
		<td>Dramatically reduces the number of points in a polyline while retaining
its shape and returns a new array of simplified points, using the
<a href="http://en.wikipedia.org/wiki/Douglas-Peucker_algorithm">Douglas-Peucker algorithm</a>.
Used for a huge performance boost when processing/displaying Leaflet polylines for
each zoom level and also reducing visual noise. tolerance affects the amount of
simplification (lesser value means higher quality but slower and with more points).
Also released as a separated micro-library <a href="http://mourner.github.com/simplify-js/">Simplify.js</a>.</td>
	</tr>
	<tr id='lineutil-pointtosegmentdistance'>
		<td><code><b>pointToSegmentDistance</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p1</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p2</i>)</code></td>
		<td><code>Number</code></td>
		<td>Returns the distance between point <code>p</code> and segment <code>p1</code> to <code>p2</code>.</td>
	</tr>
	<tr id='lineutil-closestpointonsegment'>
		<td><code><b>closestPointOnSegment</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p1</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>p2</i>)</code></td>
		<td><code>Number</code></td>
		<td>Returns the closest point from a point <code>p</code> on a segment <code>p1</code> to <code>p2</code>.</td>
	</tr>
	<tr id='lineutil-clipsegment'>
		<td><code><b>clipSegment</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>a</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>b</i>, <nobr>&lt;<a href='#bounds'>Bounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;Boolean&gt;</nobr> <i>useLastCode?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>round?</i>)</code></td>
		<td><code>Point[]|Boolean</code></td>
		<td>Clips the segment a to b by rectangular bounds with the
<a href="https://en.wikipedia.org/wiki/Cohen%E2%80%93Sutherland_algorithm">Cohen-Sutherland algorithm</a>
(modifying the segment points directly!). Used by Leaflet to only show polyline
points that are on the screen or near, increasing performance.</td>
	</tr>
	<tr id='lineutil-isflat'>
		<td><code><b>isFlat</b>(<nobr>&lt;LatLng[]&gt;</nobr> <i>latlngs</i>)</code></td>
		<td><code>Boolean</code></td>
		<td>Returns true if <code>latlngs</code> is a flat array, false is nested.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='polyutil'>PolyUtil</h2><p>Various utility functions for polygon geometries.</p>

<section>
<h3 id='polyutil-function'>Functions</h3>

<section >




<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='polyutil-clippolygon'>
		<td><code><b>clipPolygon</b>(<nobr>&lt;Point[]&gt;</nobr> <i>points</i>, <nobr>&lt;<a href='#bounds'>Bounds</a>&gt;</nobr> <i>bounds</i>, <nobr>&lt;Boolean&gt;</nobr> <i>round?</i>)</code></td>
		<td><code>Point[]</code></td>
		<td>Clips the polygon geometry defined by the given <code>points</code> by the given bounds (using the <a href="https://en.wikipedia.org/wiki/Sutherland%E2%80%93Hodgman_algorithm">Sutherland-Hodgman algorithm</a>).
Used by Leaflet to only show polygon points that are on the screen or near, increasing
performance. Note that polygon points needs different algorithm for clipping
than polyline, so there's a separate method for it.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='domevent'>DomEvent</h2><p>Utility functions to work with the <a href="https://developer.mozilla.org/docs/Web/API/Event">DOM events</a>, used by Leaflet internally.</p>

<section>
<h3 id='domevent-function'>Functions</h3>

<section >




<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='domevent-on'>
		<td><code><b>on</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;String&gt;</nobr> <i>types</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td>Adds a listener function (<code>fn</code>) to a particular DOM event type of the
element <code>el</code>. You can optionally specify the context of the listener
(object the <code>this</code> keyword will point to). You can also pass several
space-separated types (e.g. <code>'click dblclick'</code>).</td>
	</tr>
	<tr id='domevent-on'>
		<td><code><b>on</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;Object&gt;</nobr> <i>eventMap</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></td>
	</tr>
	<tr id='domevent-off'>
		<td><code><b>off</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;String&gt;</nobr> <i>types</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td>Removes a previously added listener function.
Note that if you passed a custom context to on, you must pass the same
context to <code>off</code> in order to remove the listener.</td>
	</tr>
	<tr id='domevent-off'>
		<td><code><b>off</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;Object&gt;</nobr> <i>eventMap</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td>Removes a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></td>
	</tr>
	<tr id='domevent-stoppropagation'>
		<td><code><b>stopPropagation</b>(<nobr>&lt;DOMEvent&gt;</nobr> <i>ev</i>)</code></td>
		<td><code>this</code></td>
		<td>Stop the given event from propagation to parent elements. Used inside the listener functions:
<pre><code class="language-js">L.DomEvent.on(div, 'click', function (ev) {
	L.DomEvent.stopPropagation(ev);
});
</code></pre></td>
	</tr>
	<tr id='domevent-disablescrollpropagation'>
		<td><code><b>disableScrollPropagation</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code>this</code></td>
		<td>Adds <code>stopPropagation</code> to the element's <code>'wheel'</code> events (plus browser variants).</td>
	</tr>
	<tr id='domevent-disableclickpropagation'>
		<td><code><b>disableClickPropagation</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code>this</code></td>
		<td>Adds <code>stopPropagation</code> to the element's <code>'click'</code>, <code>'doubleclick'</code>,
<code>'mousedown'</code> and <code>'touchstart'</code> events (plus browser variants).</td>
	</tr>
	<tr id='domevent-preventdefault'>
		<td><code><b>preventDefault</b>(<nobr>&lt;DOMEvent&gt;</nobr> <i>ev</i>)</code></td>
		<td><code>this</code></td>
		<td>Prevents the default action of the DOM Event <code>ev</code> from happening (such as
following a link in the href of the a element, or doing a POST request
with page reload when a <code>&lt;form&gt;</code> is submitted).
Use it inside listener functions.</td>
	</tr>
	<tr id='domevent-stop'>
		<td><code><b>stop</b>(<nobr>&lt;DOMEvent&gt;</nobr> <i>ev</i>)</code></td>
		<td><code>this</code></td>
		<td>Does <code>stopPropagation</code> and <code>preventDefault</code> at the same time.</td>
	</tr>
	<tr id='domevent-getmouseposition'>
		<td><code><b>getMousePosition</b>(<nobr>&lt;DOMEvent&gt;</nobr> <i>ev</i>, <nobr>&lt;HTMLElement&gt;</nobr> <i>container?</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>Gets normalized mouse position from a DOM event relative to the
<code>container</code> (border excluded) or to the whole page if not specified.</td>
	</tr>
	<tr id='domevent-getwheeldelta'>
		<td><code><b>getWheelDelta</b>(<nobr>&lt;DOMEvent&gt;</nobr> <i>ev</i>)</code></td>
		<td><code>Number</code></td>
		<td>Gets normalized wheel delta from a wheel DOM event, in vertical
pixels scrolled (negative if scrolling down).
Events from pointing devices without precise scrolling are mapped to
a best guess of 60 pixels.</td>
	</tr>
	<tr id='domevent-addlistener'>
		<td><code><b>addListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td>Alias to <a href="#domevent-on"><code>L.DomEvent.on</code></a></td>
	</tr>
	<tr id='domevent-removelistener'>
		<td><code><b>removeListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td>Alias to <a href="#domevent-off"><code>L.DomEvent.off</code></a></td>
	</tr>
</tbody></table>

</section>


</section><h2 id='domutil'>DomUtil</h2><p>Utility functions to work with the <a href="https://developer.mozilla.org/docs/Web/API/Document_Object_Model">DOM</a>
tree, used by Leaflet internally.</p>
<p>Most functions expecting or returning a <code>HTMLElement</code> also work for
SVG elements. The only difference is that classes refer to CSS classes
in HTML and SVG classes in SVG.</p>

<section>
<h3 id='domutil-function'>Functions</h3>

<section >




<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='domutil-get'>
		<td><code><b>get</b>(<nobr>&lt;String|HTMLElement&gt;</nobr> <i>id</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td>Returns an element given its DOM id, or returns the element itself
if it was passed directly.</td>
	</tr>
	<tr id='domutil-getstyle'>
		<td><code><b>getStyle</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;String&gt;</nobr> <i>styleAttrib</i>)</code></td>
		<td><code>String</code></td>
		<td>Returns the value for a certain style attribute on an element,
including computed values or values set through CSS.</td>
	</tr>
	<tr id='domutil-create'>
		<td><code><b>create</b>(<nobr>&lt;String&gt;</nobr> <i>tagName</i>, <nobr>&lt;String&gt;</nobr> <i>className?</i>, <nobr>&lt;HTMLElement&gt;</nobr> <i>container?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td>Creates an HTML element with <code>tagName</code>, sets its class to <code>className</code>, and optionally appends it to <code>container</code> element.</td>
	</tr>
	<tr id='domutil-remove'>
		<td><code><b>remove</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code></code></td>
		<td>Removes <code>el</code> from its parent element</td>
	</tr>
	<tr id='domutil-empty'>
		<td><code><b>empty</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code></code></td>
		<td>Removes all of <code>el</code>'s children elements from <code>el</code></td>
	</tr>
	<tr id='domutil-tofront'>
		<td><code><b>toFront</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code></code></td>
		<td>Makes <code>el</code> the last child of its parent, so it renders in front of the other children.</td>
	</tr>
	<tr id='domutil-toback'>
		<td><code><b>toBack</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code></code></td>
		<td>Makes <code>el</code> the first child of its parent, so it renders behind the other children.</td>
	</tr>
	<tr id='domutil-hasclass'>
		<td><code><b>hasClass</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code>Boolean</code></td>
		<td>Returns <code>true</code> if the element's class attribute contains <code>name</code>.</td>
	</tr>
	<tr id='domutil-addclass'>
		<td><code><b>addClass</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code></code></td>
		<td>Adds <code>name</code> to the element's class attribute.</td>
	</tr>
	<tr id='domutil-removeclass'>
		<td><code><b>removeClass</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code></code></td>
		<td>Removes <code>name</code> from the element's class attribute.</td>
	</tr>
	<tr id='domutil-setclass'>
		<td><code><b>setClass</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code></code></td>
		<td>Sets the element's class.</td>
	</tr>
	<tr id='domutil-getclass'>
		<td><code><b>getClass</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code>String</code></td>
		<td>Returns the element's class.</td>
	</tr>
	<tr id='domutil-setopacity'>
		<td><code><b>setOpacity</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;Number&gt;</nobr> <i>opacity</i>)</code></td>
		<td><code></code></td>
		<td>Set the opacity of an element (including old IE support).
<code>opacity</code> must be a number from <code>0</code> to <code>1</code>.</td>
	</tr>
	<tr id='domutil-testprop'>
		<td><code><b>testProp</b>(<nobr>&lt;String[]&gt;</nobr> <i>props</i>)</code></td>
		<td><code>String|false</code></td>
		<td>Goes through the array of style names and returns the first name
that is a valid style name for an element. If no such name is found,
it returns false. Useful for vendor-prefixed styles like <code>transform</code>.</td>
	</tr>
	<tr id='domutil-settransform'>
		<td><code><b>setTransform</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>offset</i>, <nobr>&lt;Number&gt;</nobr> <i>scale?</i>)</code></td>
		<td><code></code></td>
		<td>Resets the 3D CSS transform of <code>el</code> so it is translated by <code>offset</code> pixels
and optionally scaled by <code>scale</code>. Does not have an effect if the
browser doesn't support 3D CSS transforms.</td>
	</tr>
	<tr id='domutil-setposition'>
		<td><code><b>setPosition</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>position</i>)</code></td>
		<td><code></code></td>
		<td>Sets the position of <code>el</code> to coordinates specified by <code>position</code>,
using CSS translate or top/left positioning depending on the browser
(used by Leaflet internally to position its layers).</td>
	</tr>
	<tr id='domutil-getposition'>
		<td><code><b>getPosition</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>Returns the coordinates of an element previously positioned with setPosition.</td>
	</tr>
	<tr id='domutil-disabletextselection'>
		<td><code><b>disableTextSelection</b>()</code></td>
		<td><code></code></td>
		<td>Prevents the user from generating <code>selectstart</code> DOM events, usually generated
when the user drags the mouse through a page with text. Used internally
by Leaflet to override the behaviour of any click-and-drag interaction on
the map. Affects drag interactions on the whole document.</td>
	</tr>
	<tr id='domutil-enabletextselection'>
		<td><code><b>enableTextSelection</b>()</code></td>
		<td><code></code></td>
		<td>Cancels the effects of a previous <a href="#domutil-disabletextselection"><code>L.DomUtil.disableTextSelection</code></a>.</td>
	</tr>
	<tr id='domutil-disableimagedrag'>
		<td><code><b>disableImageDrag</b>()</code></td>
		<td><code></code></td>
		<td>As <a href="#domutil-disabletextselection"><code>L.DomUtil.disableTextSelection</code></a>, but
for <code>dragstart</code> DOM events, usually generated when the user drags an image.</td>
	</tr>
	<tr id='domutil-enableimagedrag'>
		<td><code><b>enableImageDrag</b>()</code></td>
		<td><code></code></td>
		<td>Cancels the effects of a previous <a href="#domutil-disabletextselection"><code>L.DomUtil.disableImageDrag</code></a>.</td>
	</tr>
	<tr id='domutil-preventoutline'>
		<td><code><b>preventOutline</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code></code></td>
		<td>Makes the <a href="https://developer.mozilla.org/docs/Web/CSS/outline">outline</a>
of the element <code>el</code> invisible. Used internally by Leaflet to prevent
focusable elements from displaying an outline when the user performs a
drag interaction on them.</td>
	</tr>
	<tr id='domutil-restoreoutline'>
		<td><code><b>restoreOutline</b>()</code></td>
		<td><code></code></td>
		<td>Cancels the effects of a previous <a href=""><code>L.DomUtil.preventOutline</code></a>.</td>
	</tr>
	<tr id='domutil-getsizedparentnode'>
		<td><code><b>getSizedParentNode</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td>Finds the closest parent node which size (width and height) is not null.</td>
	</tr>
	<tr id='domutil-getscale'>
		<td><code><b>getScale</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>)</code></td>
		<td><code>Object</code></td>
		<td>Computes the CSS scale currently applied on the element.
Returns an object with <code>x</code> and <code>y</code> members as horizontal and vertical scales respectively,
and <code>boundingClientRect</code> as the result of <a href="https://developer.mozilla.org/en-US/docs/Web/API/Element/getBoundingClientRect"><code>getBoundingClientRect()</code></a>.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='domutil-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='domutil-transform'>
		<td><code><b>TRANSFORM</b></code></td>
		<td><code>String</code></td>
		<td>Vendor-prefixed transform style name (e.g. <code>'webkitTransform'</code> for WebKit).</td>
	</tr>
	<tr id='domutil-transition'>
		<td><code><b>TRANSITION</b></code></td>
		<td><code>String</code></td>
		<td>Vendor-prefixed transition style name.</td>
	</tr>
	<tr id='domutil-transition_end'>
		<td><code><b>TRANSITION_END</b></code></td>
		<td><code>String</code></td>
		<td>Vendor-prefixed transitionend event name.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='posanimation'>PosAnimation</h2><p>Used internally for panning animations, utilizing CSS3 Transitions for modern browsers and a timer fallback for IE6-9.</p>

<section>
<h3 id='posanimation-example'>Usage example</h3>

<section >





<pre><code class="language-js">var fx = new L.PosAnimation();
fx.run(el, [300, 500], 0.5);
</code></pre>



</section>


</section><section>
<h3 id='posanimation-constructor'>Constructor</h3>

<section >




<table><thead>
	<tr>
		<th>Constructor</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='posanimation-l-posanimation'>
		<td><code><b>L.PosAnimation</b>()</code></td>
		<td>Creates a <a href="#posanimation"><code>PosAnimation</code></a> object.</td>
	</tr>
</tbody></table>


</section>


</section><section>
<h3 id='posanimation-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='posanimation-start'>
		<td><code><b>start</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the animation starts</td>
	</tr>
	<tr id='posanimation-step'>
		<td><code><b>step</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired continuously during the animation.</td>
	</tr>
	<tr id='posanimation-end'>
		<td><code><b>end</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the animation ends.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='posanimation-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='posanimation-run'>
		<td><code><b>run</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>newPos</i>, <nobr>&lt;Number&gt;</nobr> <i>duration?</i>, <nobr>&lt;Number&gt;</nobr> <i>easeLinearity?</i>)</code></td>
		<td><code></code></td>
		<td><p>Run an animation of a given element to a new position, optionally setting
duration in seconds (<code>0.25</code> by default) and easing linearity factor (3rd
argument of the <a href="http://cubic-bezier.com/#0,0,.5,1">cubic bezier curve</a>,
<code>0.5</code> by default).</p>
</td>
	</tr>
	<tr id='posanimation-stop'>
		<td><code><b>stop</b>()</code></td>
		<td><code></code></td>
		<td><p>Stops the animation (if currently running).</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='posanimation-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='posanimation-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='posanimation-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='posanimation-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='posanimation-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='posanimation-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='posanimation-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='posanimation-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='posanimation-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='posanimation-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='posanimation-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='posanimation-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='posanimation-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='posanimation-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='posanimation-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='posanimation-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='draggable'>Draggable</h2><p>A class for making DOM elements draggable (including touch support).
Used internally for map and marker dragging. Only works for elements
that were positioned with <a href="#domutil-setposition"><code>L.DomUtil.setPosition</code></a>.</p>

<section>
<h3 id='draggable-example'>Usage example</h3>

<section >





<pre><code class="language-js">var draggable = new L.Draggable(elementToDrag);
draggable.enable();
</code></pre>



</section>


</section><section>
<h3 id='draggable-constructor'>Constructor</h3>

<section >




<table><thead>
	<tr>
		<th>Constructor</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='draggable-l-draggable'>
		<td><code><b>L.Draggable</b>(<nobr>&lt;HTMLElement&gt;</nobr> <i>el</i>, <nobr>&lt;HTMLElement&gt;</nobr> <i>dragHandle?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>preventOutline?</i>, <nobr>&lt;<a href='#draggable-option'>Draggable options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td>Creates a <a href="#draggable"><code>Draggable</code></a> object for moving <code>el</code> when you start dragging the <code>dragHandle</code> element (equals <code>el</code> itself by default).</td>
	</tr>
</tbody></table>


</section>


</section><section>
<h3 id='draggable-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='draggable-clicktolerance'>
		<td><code><b>clickTolerance</b></code></td>
		<td><code>Number</code></td>
		<td><code>3</code></td>
		<td>The max number of pixels a user can shift the mouse pointer during a click
for it to be considered a valid click (as opposed to a mouse drag).</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='draggable-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='draggable-down'>
		<td><code><b>down</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when a drag is about to start.</td>
	</tr>
	<tr id='draggable-dragstart'>
		<td><code><b>dragstart</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when a drag starts</td>
	</tr>
	<tr id='draggable-predrag'>
		<td><code><b>predrag</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired continuously during dragging <em>before</em> each corresponding
update of the element's position.</td>
	</tr>
	<tr id='draggable-drag'>
		<td><code><b>drag</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired continuously during dragging.</td>
	</tr>
	<tr id='draggable-dragend'>
		<td><code><b>dragend</b></code></td>
		<td><code><a href='#dragendevent'>DragEndEvent</a></code></td>
		<td>Fired when the drag ends.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='draggable-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='draggable-enable'>
		<td><code><b>enable</b>()</code></td>
		<td><code></code></td>
		<td><p>Enables the dragging ability</p>
</td>
	</tr>
	<tr id='draggable-disable'>
		<td><code><b>disable</b>()</code></td>
		<td><code></code></td>
		<td><p>Disables the dragging ability</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='draggable-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='draggable-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='draggable-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='draggable-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='draggable-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='draggable-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='draggable-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='draggable-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='draggable-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='draggable-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='draggable-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='draggable-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='draggable-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='draggable-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='draggable-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='draggable-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='class'>Class</h2><p>L.Class powers the OOP facilities of Leaflet and is used to create almost all of the Leaflet classes documented here.</p>
<p>In addition to implementing a simple classical inheritance model, it introduces several special properties for convenient code organization — options, includes and statics.</p>

<section>
<h3 id='class-example'>Usage example</h3>

<section >





<pre><code class="language-js">var MyClass = L.Class.extend({
initialize: function (greeter) {
	this.greeter = greeter;
	// class constructor
},

greet: function (name) {
	alert(this.greeter + ', ' + name)
	}
});

// create instance of MyClass, passing &quot;Hello&quot; to the constructor
var a = new MyClass(&quot;Hello&quot;);

// call greet method, alerting &quot;Hello, World&quot;
a.greet(&quot;World&quot;);
</code></pre>



</section><section >

<h4 id='class-class-factories'>Class Factories</h4>



<p>You may have noticed that Leaflet objects are created without using
the <code>new</code> keyword. This is achieved by complementing each class with a
lowercase factory method:</p>
<pre><code class="language-js">new L.Map('map'); // becomes:
L.map('map');
</code></pre>
<p>The factories are implemented very easily, and you can do this for your own classes:</p>
<pre><code class="language-js">L.map = function (id, options) {
    return new L.Map(id, options);
};
</code></pre>



</section><section >

<h4 id='class-inheritance'>Inheritance</h4>



<p>You use L.Class.extend to define new classes, but you can use the same method on any class to inherit from it:</p>
<pre><code class="language-js">var MyChildClass = MyClass.extend({
    // ... new properties and methods
});
</code></pre>
<p>This will create a class that inherits all methods and properties of the parent class (through a proper prototype chain), adding or overriding the ones you pass to extend. It will also properly react to instanceof:</p>
<pre><code class="language-js">var a = new MyChildClass();
a instanceof MyChildClass; // true
a instanceof MyClass; // true
</code></pre>
<p>You can call parent methods (including constructor) from corresponding child ones (as you do with super calls in other languages) by accessing parent class prototype and using JavaScript's call or apply:</p>
<pre><code>var MyChildClass = MyClass.extend({
    initialize: function () {
        MyClass.prototype.initialize.call(this, &quot;Yo&quot;);
    },

    greet: function (name) {
        MyClass.prototype.greet.call(this, 'bro ' + name + '!');
    }
});

var a = new MyChildClass();
a.greet('Jason'); // alerts &quot;Yo, bro Jason!&quot;
</code></pre>



</section><section >

<h4 id='class-options'>Options</h4>



<p><code>options</code> is a special property that unlike other objects that you pass
to <code>extend</code> will be merged with the parent one instead of overriding it
completely, which makes managing configuration of objects and default
values convenient:</p>
<pre><code class="language-js">var MyClass = L.Class.extend({
    options: {
        myOption1: 'foo',
        myOption2: 'bar'
    }
});

var MyChildClass = MyClass.extend({
    options: {
        myOption1: 'baz',
        myOption3: 5
    }
});

var a = new MyChildClass();
a.options.myOption1; // 'baz'
a.options.myOption2; // 'bar'
a.options.myOption3; // 5
</code></pre>
<p>There's also <a href="#util-setoptions"><code>L.Util.setOptions</code></a>, a method for
conveniently merging options passed to constructor with the defaults
defines in the class:</p>
<pre><code class="language-js">var MyClass = L.Class.extend({
    options: {
        foo: 'bar',
        bla: 5
    },

    initialize: function (options) {
        L.Util.setOptions(this, options);
        ...
    }
});

var a = new MyClass({bla: 10});
a.options; // {foo: 'bar', bla: 10}
</code></pre>
<p>Note that the options object allows any keys, not just
the options defined by the class and its base classes.
This means you can use the options object to store
application specific information, as long as you avoid
keys that are already used by the class in question.</p>



</section><section >

<h4 id='class-includes'>Includes</h4>



<p><code>includes</code> is a special class property that merges all specified objects into the class (such objects are called mixins).</p>
<pre><code class="language-js"> var MyMixin = {
    foo: function () { ... },
    bar: 5
};

var MyClass = L.Class.extend({
    includes: MyMixin
});

var a = new MyClass();
a.foo();
</code></pre>
<p>You can also do such includes in runtime with the <code>include</code> method:</p>
<pre><code class="language-js">MyClass.include(MyMixin);
</code></pre>
<p><code>statics</code> is just a convenience property that injects specified object properties as the static properties of the class, useful for defining constants:</p>
<pre><code class="language-js">var MyClass = L.Class.extend({
    statics: {
        FOO: 'bar',
        BLA: 5
    }
});

MyClass.FOO; // 'bar'
</code></pre>



</section><section >

<h4 id='class-constructor-hooks'>Constructor hooks</h4>



<p>If you're a plugin developer, you often need to add additional initialization code to existing classes (e.g. editing hooks for <a href="#polyline"><code>L.Polyline</code></a>). Leaflet comes with a way to do it easily using the <code>addInitHook</code> method:</p>
<pre><code class="language-js">MyClass.addInitHook(function () {
    // ... do something in constructor additionally
    // e.g. add event listeners, set custom properties etc.
});
</code></pre>
<p>You can also use the following shortcut when you just need to make one additional method call:</p>
<pre><code class="language-js">MyClass.addInitHook('methodName', arg1, arg2, …);
</code></pre>



</section>


</section><section>
<h3 id='class-function'>Functions</h3>

<section >




<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='class-extend'>
		<td><code><b>extend</b>(<nobr>&lt;Object&gt;</nobr> <i>props</i>)</code></td>
		<td><code>Function</code></td>
		<td><a href="#class-inheritance">Extends the current class</a> given the properties to be included.
Returns a Javascript function that is a class constructor (to be called with <code>new</code>).</td>
	</tr>
	<tr id='class-include'>
		<td><code><b>include</b>(<nobr>&lt;Object&gt;</nobr> <i>properties</i>)</code></td>
		<td><code>this</code></td>
		<td><a href="#class-includes">Includes a mixin</a> into the current class.</td>
	</tr>
	<tr id='class-mergeoptions'>
		<td><code><b>mergeOptions</b>(<nobr>&lt;Object&gt;</nobr> <i>options</i>)</code></td>
		<td><code>this</code></td>
		<td><a href="#class-options">Merges <code>options</code></a> into the defaults of the class.</td>
	</tr>
	<tr id='class-addinithook'>
		<td><code><b>addInitHook</b>(<nobr>&lt;Function&gt;</nobr> <i>fn</i>)</code></td>
		<td><code>this</code></td>
		<td>Adds a <a href="#class-constructor-hooks">constructor hook</a> to the class.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='evented'>Evented</h2><p>A set of methods shared between event-powered classes (like <a href="#map"><code>Map</code></a> and <a href="#marker"><code>Marker</code></a>). Generally, events allow you to execute some function when something happens with an object (e.g. the user clicks on the map, causing the map to fire <code>'click'</code> event).</p>

<section>
<h3 id='evented-example'>Usage example</h3>

<section >





<pre><code class="language-js">map.on('click', function(e) {
	alert(e.latlng);
} );
</code></pre>
<p>Leaflet deals with event listeners by reference, so if you want to add a listener and then remove it, define it as a function:</p>
<pre><code class="language-js">function onClick(e) { ... }

map.on('click', onClick);
map.off('click', onClick);
</code></pre>



</section>


</section><section>
<h3 id='evented-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='evented-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='evented-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='evented-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='evented-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='evented-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='evented-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='evented-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='evented-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='evented-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='evented-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='evented-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='evented-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='evented-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='evented-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='evented-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='evented-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='layer'>Layer</h2><p>A set of methods from the Layer base class that all Leaflet layers use.
Inherits all methods, options and events from <a href="#evented"><code>L.Evented</code></a>.</p>

<section>
<h3 id='layer-example'>Usage example</h3>

<section >





<pre><code class="language-js">var layer = L.marker(latlng).addTo(map);
layer.addTo(map);
layer.remove();
</code></pre>



</section>


</section><section>
<h3 id='layer-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='layer-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='layer-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='layer-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='layer-popup-events'>Popup events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='layer-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='layer-tooltip-events'>Tooltip events</h4>


<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='layer-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='layer-method'>Methods</h3>

<section >



<div class='section-comments'>Classes extending <a href="#layer"><code>L.Layer</code></a> will inherit the following methods:</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='layer-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='layer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='layer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='layer-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='layer-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='layer-extension-methods'>Extension methods</h4>

<div class='section-comments'>Every layer should extend from <a href="#layer"><code>L.Layer</code></a> and (re-)implement the following methods.</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-onadd'>
		<td><code><b>onAdd</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Should contain code that creates DOM elements for the layer, adds them to <code>map panes</code> where they should belong and puts listeners on relevant map events. Called on <a href="#map-addlayer"><code>map.addLayer(layer)</code></a>.</p>
</td>
	</tr>
	<tr id='layer-onremove'>
		<td><code><b>onRemove</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Should contain all clean up code that removes the layer's elements from the DOM and removes listeners previously added in <a href="#layer-onadd"><code>onAdd</code></a>. Called on <a href="#map-removelayer"><code>map.removeLayer(layer)</code></a>.</p>
</td>
	</tr>
	<tr id='layer-getevents'>
		<td><code><b>getEvents</b>()</code></td>
		<td><code>Object</code></td>
		<td><p>This optional method should return an object like <code>{ viewreset: this._reset }</code> for <a href="#evented-addeventlistener"><code>addEventListener</code></a>. The event handlers in this object will be automatically added and removed from the map with your layer.</p>
</td>
	</tr>
	<tr id='layer-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>This optional method should return a string containing HTML to be shown on the <code>Attribution control</code> whenever the layer is visible.</p>
</td>
	</tr>
	<tr id='layer-beforeadd'>
		<td><code><b>beforeAdd</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Optional method. Called on <a href="#map-addlayer"><code>map.addLayer(layer)</code></a>, before the layer is added to the map, before events are initialized, without waiting until the map is in a usable state. Use for early initialization only.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='layer-popup-methods'>Popup methods</h4>

<div class='section-comments'>All layers share a set of methods convenient for binding popups to it.
<pre><code class="language-js">var layer = L.Polygon(latlngs).bindPopup('Hi There!').addTo(map);
layer.openPopup();
layer.closePopup();
</code></pre>
<p>Popups will also be automatically opened when the layer is clicked on and closed when the layer is removed from the map or another popup is opened.</p></div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='layer-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='layer-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='layer-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='layer-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='layer-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='layer-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='layer-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='layer-tooltip-methods'>Tooltip methods</h4>

<div class='section-comments'>All layers share a set of methods convenient for binding tooltips to it.
<pre><code class="language-js">var layer = L.Polygon(latlngs).bindTooltip('Hi There!').addTo(map);
layer.openTooltip();
layer.closeTooltip();
</code></pre></div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='layer-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='layer-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='layer-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='layer-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='layer-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='layer-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='layer-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layer-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='layer-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='layer-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='layer-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='layer-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='layer-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='layer-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='layer-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='layer-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='layer-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='layer-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='layer-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='layer-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='layer-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='layer-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='layer-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='interactive-layer'>Interactive layer</h2><p>Some <a href="#layer"><code>Layer</code></a>s can be made interactive - when the user interacts
with such a layer, mouse events like <code>click</code> and <code>mouseover</code> can be handled.
Use the <a href="#evented-method">event handling methods</a> to handle these events.</p>

<section>
<h3 id='interactive-layer-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-interactive'>
		<td><code><b>interactive</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>If <code>false</code>, the layer will not emit mouse events and will act as a part of the underlying map.</td>
	</tr>
	<tr id='interactive-layer-bubblingmouseevents'>
		<td><code><b>bubblingMouseEvents</b></code></td>
		<td><code>Boolean</code></td>
		<td><code>true</code></td>
		<td>When <code>true</code>, a mouse event on this layer will trigger the same event on the map
(unless <a href="#domevent-stoppropagation"><code>L.DomEvent.stopPropagation</code></a> is used).</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='interactive-layer-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='interactive-layer-event'>Events</h3>

<section class='collapsable'>

<h4 id='interactive-layer-mouse-events'>Mouse events</h4>

<div class='section-comments'></div>

<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-click'>
		<td><code><b>click</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user clicks (or taps) the layer.</td>
	</tr>
	<tr id='interactive-layer-dblclick'>
		<td><code><b>dblclick</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user double-clicks (or double-taps) the layer.</td>
	</tr>
	<tr id='interactive-layer-mousedown'>
		<td><code><b>mousedown</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user pushes the mouse button on the layer.</td>
	</tr>
	<tr id='interactive-layer-mouseup'>
		<td><code><b>mouseup</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user releases the mouse button pushed on the layer.</td>
	</tr>
	<tr id='interactive-layer-mouseover'>
		<td><code><b>mouseover</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse enters the layer.</td>
	</tr>
	<tr id='interactive-layer-mouseout'>
		<td><code><b>mouseout</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the mouse leaves the layer.</td>
	</tr>
	<tr id='interactive-layer-contextmenu'>
		<td><code><b>contextmenu</b></code></td>
		<td><code><a href='#mouseevent'>MouseEvent</a></code></td>
		<td>Fired when the user right-clicks on the layer, prevents
default browser context menu from showing if there are listeners on
this event. Also fired on mobile when the user holds a single touch
for a second (also called long press).</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='interactive-layer-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='interactive-layer-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='interactive-layer-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='interactive-layer-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='interactive-layer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='interactive-layer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='interactive-layer-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='interactive-layer-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='interactive-layer-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='interactive-layer-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='interactive-layer-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='interactive-layer-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='interactive-layer-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='interactive-layer-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='interactive-layer-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='interactive-layer-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='interactive-layer-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='interactive-layer-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='interactive-layer-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='interactive-layer-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='interactive-layer-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='interactive-layer-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='interactive-layer-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='interactive-layer-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='interactive-layer-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='interactive-layer-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='interactive-layer-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='interactive-layer-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='interactive-layer-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='interactive-layer-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='interactive-layer-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='interactive-layer-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='interactive-layer-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='interactive-layer-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='interactive-layer-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='interactive-layer-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='interactive-layer-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='interactive-layer-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='control'>Control</h2><p>L.Control is a base class for implementing map controls. Handles positioning.
All other controls extend from this class.</p>

<section>
<h3 id='control-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-position'>
		<td><code><b>position</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;topright&#x27;</code></td>
		<td>The position of the control (one of the map corners). Possible values are <code>'topleft'</code>,
<code>'topright'</code>, <code>'bottomleft'</code> or <code>'bottomright'</code></td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='control-method'>Methods</h3>

<section >



<div class='section-comments'>Classes extending L.Control will inherit the following methods:</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-getposition'>
		<td><code><b>getPosition</b>()</code></td>
		<td><code>string</code></td>
		<td><p>Returns the position of the control.</p>
</td>
	</tr>
	<tr id='control-setposition'>
		<td><code><b>setPosition</b>(<nobr>&lt;string&gt;</nobr> <i>position</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the position of the control.</p>
</td>
	</tr>
	<tr id='control-getcontainer'>
		<td><code><b>getContainer</b>()</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the HTMLElement that contains the control.</p>
</td>
	</tr>
	<tr id='control-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the control to the given map.</p>
</td>
	</tr>
	<tr id='control-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the control from the map it is currently active on.</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='control-extension-methods'>Extension methods</h4>

<div class='section-comments'>Every control should extend from <a href="#control"><code>L.Control</code></a> and (re-)implement the following methods.</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='control-onadd'>
		<td><code><b>onAdd</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Should return the container DOM element for the control and add listeners on relevant map events. Called on <a href="#control-addTo"><code>control.addTo(map)</code></a>.</p>
</td>
	</tr>
	<tr id='control-onremove'>
		<td><code><b>onRemove</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code></code></td>
		<td><p>Optional method. Should contain all clean up code that removes the listeners previously added in <a href="#control-onadd"><code>onAdd</code></a>. Called on <a href="#control-remove"><code>control.remove()</code></a>.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='handler'>Handler</h2><p>Abstract class for map interaction handlers</p>

<section>
<h3 id='handler-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='handler-enable'>
		<td><code><b>enable</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Enables the handler</p>
</td>
	</tr>
	<tr id='handler-disable'>
		<td><code><b>disable</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Disables the handler</p>
</td>
	</tr>
	<tr id='handler-enabled'>
		<td><code><b>enabled</b>()</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if the handler is enabled</p>
</td>
	</tr>
</tbody></table>

</section><section class='collapsable'>

<h4 id='handler-extension-methods'>Extension methods</h4>

<div class='section-comments'>Classes inheriting from <a href="#handler"><code>Handler</code></a> must implement the two following methods:</div>

<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='handler-addhooks'>
		<td><code><b>addHooks</b>()</code></td>
		<td><code></code></td>
		<td><p>Called when the handler is enabled, should add event hooks.</p>
</td>
	</tr>
	<tr id='handler-removehooks'>
		<td><code><b>removeHooks</b>()</code></td>
		<td><code></code></td>
		<td><p>Called when the handler is disabled, should remove the event hooks added previously.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='handler-function'>Functions</h3>

<section class='collapsable'>

<h4 id='handler-there-is-static-function-which-can-be-called-without-instantiating-l-handler:'>There is static function which can be called without instantiating L.Handler:</h4>


<table><thead>
	<tr>
		<th>Function</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='handler-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>, <nobr>&lt;String&gt;</nobr> <i>name</i>)</code></td>
		<td><code>this</code></td>
		<td>Adds a new Handler to the given map with the given name.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='projection'>Projection</h2><p>An object with methods for projecting geographical coordinates of the world onto
a flat surface (and back). See <a href="http://en.wikipedia.org/wiki/Map_projection">Map projection</a>.</p>

<section>
<h3 id='projection-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='projection-project'>
		<td><code><b>project</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Projects geographical coordinates into a 2D point.
Only accepts actual <a href="#latlng"><code>L.LatLng</code></a> instances, not arrays.</p>
</td>
	</tr>
	<tr id='projection-unproject'>
		<td><code><b>unproject</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>The inverse of <code>project</code>. Projects a 2D point into a geographical location.
Only accepts actual <a href="#point"><code>L.Point</code></a> instances, not arrays.</p>
<p>Note that the projection instances do not inherit from Leaflet's <a href="#class"><code>Class</code></a> object,
and can't be instantiated. Also, new classes can't inherit from them,
and methods can't be added to them with the <code>include</code> function.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='projection-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='projection-bounds'>
		<td><code><b>bounds</b></code></td>
		<td><code><a href='#bounds'>Bounds</a></code></td>
		<td>The bounds (specified in CRS units) where the projection is valid</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='projection-projection'>Defined projections</h3>

<section >



<div class='section-comments'>Leaflet comes with a set of already defined Projections out of the box:</div>

<table><thead>
	<tr>
		<th>Projection</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='projection-l-projection-lonlat'>
		<td><code><b>L.Projection.LonLat</b></code></td>
		<td>Equirectangular, or Plate Carree projection — the most simple projection,
mostly used by GIS enthusiasts. Directly maps <code>x</code> as longitude, and <code>y</code> as
latitude. Also suitable for flat worlds, e.g. game maps. Used by the
<code>EPSG:4326</code> and <code>Simple</code> CRS.</td>
	</tr>
	<tr id='projection-l-projection-mercator'>
		<td><code><b>L.Projection.Mercator</b></code></td>
		<td>Elliptical Mercator projection — more complex than Spherical Mercator. Assumes that Earth is an ellipsoid. Used by the EPSG:3395 CRS.</td>
	</tr>
	<tr id='projection-l-projection-sphericalmercator'>
		<td><code><b>L.Projection.SphericalMercator</b></code></td>
		<td>Spherical Mercator projection — the most common projection for online maps,
used by almost all free and commercial tile providers. Assumes that Earth is
a sphere. Used by the <code>EPSG:3857</code> CRS.</td>
	</tr>
</tbody></table>

</section>


</section><h2 id='crs'>CRS</h2>
<section>
<h3 id='crs-method'>Methods</h3>

<section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='crs-latlngtopoint'>
		<td><code><b>latLngToPoint</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Projects geographical coordinates into pixel coordinates for a given zoom.</p>
</td>
	</tr>
	<tr id='crs-pointtolatlng'>
		<td><code><b>pointToLatLng</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>, <nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>The inverse of <code>latLngToPoint</code>. Projects pixel coordinates on a given
zoom into geographical coordinates.</p>
</td>
	</tr>
	<tr id='crs-project'>
		<td><code><b>project</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><p>Projects geographical coordinates into coordinates in units accepted for
this CRS (e.g. meters for EPSG:3857, for passing it to WMS services).</p>
</td>
	</tr>
	<tr id='crs-unproject'>
		<td><code><b>unproject</b>(<nobr>&lt;<a href='#point'>Point</a>&gt;</nobr> <i>point</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Given a projected coordinate returns the corresponding LatLng.
The inverse of <code>project</code>.</p>
</td>
	</tr>
	<tr id='crs-scale'>
		<td><code><b>scale</b>(<nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the scale used when transforming projected coordinates into
pixel coordinates for a particular zoom. For example, it returns
<code>256 * 2^zoom</code> for Mercator-based CRS.</p>
</td>
	</tr>
	<tr id='crs-zoom'>
		<td><code><b>zoom</b>(<nobr>&lt;Number&gt;</nobr> <i>scale</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Inverse of <code>scale()</code>, returns the zoom level corresponding to a scale
factor of <code>scale</code>.</p>
</td>
	</tr>
	<tr id='crs-getprojectedbounds'>
		<td><code><b>getProjectedBounds</b>(<nobr>&lt;Number&gt;</nobr> <i>zoom</i>)</code></td>
		<td><code><a href='#bounds'>Bounds</a></code></td>
		<td><p>Returns the projection's bounds scaled and transformed for the provided <code>zoom</code>.</p>
</td>
	</tr>
	<tr id='crs-distance'>
		<td><code><b>distance</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng1</i>, <nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng2</i>)</code></td>
		<td><code>Number</code></td>
		<td><p>Returns the distance between two geographical coordinates.</p>
</td>
	</tr>
	<tr id='crs-wraplatlng'>
		<td><code><b>wrapLatLng</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng</i>)</code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td><p>Returns a <a href="#latlng"><code>LatLng</code></a> where lat and lng has been wrapped according to the
CRS's <code>wrapLat</code> and <code>wrapLng</code> properties, if they are outside the CRS's bounds.</p>
</td>
	</tr>
	<tr id='crs-wraplatlngbounds'>
		<td><code><b>wrapLatLngBounds</b>(<nobr>&lt;<a href='#latlngbounds'>LatLngBounds</a>&gt;</nobr> <i>bounds</i>)</code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td><p>Returns a <a href="#latlngbounds"><code>LatLngBounds</code></a> with the same size as the given one, ensuring
that its center is within the CRS's bounds.
Only accepts actual <a href="#latlngbounds"><code>L.LatLngBounds</code></a> instances, not arrays.</p>
</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='crs-property'>Properties</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='crs-code'>
		<td><code><b>code</b></code></td>
		<td><code>String</code></td>
		<td>Standard code name of the CRS passed into WMS services (e.g. <code>'EPSG:3857'</code>)</td>
	</tr>
	<tr id='crs-wraplng'>
		<td><code><b>wrapLng</b></code></td>
		<td><code>Number[]</code></td>
		<td>An array of two numbers defining whether the longitude (horizontal) coordinate
axis wraps around a given range and how. Defaults to <code>[-180, 180]</code> in most
geographical CRSs. If <code>undefined</code>, the longitude axis does not wrap around.</td>
	</tr>
	<tr id='crs-wraplat'>
		<td><code><b>wrapLat</b></code></td>
		<td><code>Number[]</code></td>
		<td>Like <code>wrapLng</code>, but for the latitude (vertical) axis.</td>
	</tr>
	<tr id='crs-infinite'>
		<td><code><b>infinite</b></code></td>
		<td><code>Boolean</code></td>
		<td>If true, the coordinate space will be unbounded (infinite in both axes)</td>
	</tr>
</tbody></table>

</section>


</section><section>
<h3 id='crs-crs'>Defined CRSs</h3>

<section >




<table><thead>
	<tr>
		<th>CRS</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='crs-l-crs-epsg3395'>
		<td><code><b>L.CRS.EPSG3395</b></code></td>
		<td>Rarely used by some commercial tile providers. Uses Elliptical Mercator projection.</td>
	</tr>
	<tr id='crs-l-crs-epsg3857'>
		<td><code><b>L.CRS.EPSG3857</b></code></td>
		<td>The most common CRS for online maps, used by almost all free and commercial
tile providers. Uses Spherical Mercator projection. Set in by default in
Map's <a href="#crs"><code>crs</code></a> option.</td>
	</tr>
	<tr id='crs-l-crs-epsg4326'>
		<td><code><b>L.CRS.EPSG4326</b></code></td>
		<td>A common CRS among GIS enthusiasts. Uses simple Equirectangular projection.
<p>Leaflet 1.0.x complies with the <a href="https://wiki.osgeo.org/wiki/Tile_Map_Service_Specification#global-geodetic">TMS coordinate scheme for EPSG:4326</a>,
which is a breaking change from 0.7.x behaviour.  If you are using a <a href="#tilelayer"><code>TileLayer</code></a>
with this CRS, ensure that there are two 256x256 pixel tiles covering the
whole earth at zoom level zero, and that the tile coordinate origin is (-180,+90),
or (-180,-90) for <code>TileLayer</code>s with <a href="#tilelayer-tms">the <code>tms</code> option</a> set.</p></td>
	</tr>
	<tr id='crs-l-crs-earth'>
		<td><code><b>L.CRS.Earth</b></code></td>
		<td>Serves as the base for CRS that are global such that they cover the earth.
Can only be used as the base for other CRS and cannot be used directly,
since it does not have a <code>code</code>, <a href="#projection"><code>projection</code></a> or <a href="#transformation"><code>transformation</code></a>. <code>distance()</code> returns
meters.</td>
	</tr>
	<tr id='crs-l-crs-simple'>
		<td><code><b>L.CRS.Simple</b></code></td>
		<td>A simple CRS that maps longitude and latitude into <code>x</code> and <code>y</code> directly.
May be used for maps of flat surfaces (e.g. game maps). Note that the <code>y</code>
axis should still be inverted (going from bottom to top). <code>distance()</code> returns
simple euclidean distance.</td>
	</tr>
	<tr id='crs-l-crs-base'>
		<td><code><b>L.CRS.Base</b></code></td>
		<td>Object that defines coordinate reference systems for projecting
geographical points into pixel (screen) coordinates and back (and to
coordinates in other units for <a href="https://en.wikipedia.org/wiki/Web_Map_Service">WMS</a> services). See
<a href="http://en.wikipedia.org/wiki/Coordinate_reference_system">spatial reference system</a>.
<p>Leaflet defines the most usual CRSs by default. If you want to use a
CRS not defined by default, take a look at the
<a href="https://github.com/kartena/Proj4Leaflet">Proj4Leaflet</a> plugin.</p>
<p>Note that the CRS instances do not inherit from Leaflet's <a href="#class"><code>Class</code></a> object,
and can't be instantiated. Also, new classes can't inherit from them,
and methods can't be added to them with the <code>include</code> function.</p></td>
	</tr>
</tbody></table>

</section>


</section><h2 id='renderer'>Renderer</h2><p>Base class for vector renderer implementations (<a href="#svg"><code>SVG</code></a>, <a href="#canvas"><code>Canvas</code></a>). Handles the
DOM container of the renderer, its bounds, and its zoom animation.</p>
<p>A <a href="#renderer"><code>Renderer</code></a> works as an implicit layer group for all <a href="#path"><code>Path</code></a>s - the renderer
itself can be added or removed to the map. All paths use a renderer, which can
be implicit (the map will decide the type of renderer and use it automatically)
or explicit (using the [<a href="#renderer"><code>renderer</code></a>](#path-renderer) option of the path).</p>
<p>Do not use this class directly, use <code>SVG</code> and <code>Canvas</code> instead.</p>

<section>
<h3 id='renderer-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-padding'>
		<td><code><b>padding</b></code></td>
		<td><code>Number</code></td>
		<td><code>0.1</code></td>
		<td>How much to extend the clip area around the map view (relative to its size)
e.g. 0.1 would be 10% of map view in each direction</td>
	</tr>
	<tr id='renderer-tolerance'>
		<td><code><b>tolerance</b></code></td>
		<td><code>Number</code></td>
		<td><code>0</code></td>
		<td>How much to extend click tolerance round a path/object on the map</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;overlayPane&#x27;</code></td>
		<td>By default the layer will be added to the map's <a href="#map-overlaypane">overlay pane</a>. Overriding this option will cause the layer to be placed on another pane by default.</td>
	</tr>
	<tr id='renderer-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id='renderer-event'>Events</h3>

<section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-update'>
		<td><code><b>update</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired when the renderer updates its bounds, center and zoom, for example when
its map has moved</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='renderer-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='renderer-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='renderer-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='renderer-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='renderer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='renderer-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='renderer-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='renderer-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='renderer-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='renderer-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='renderer-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='renderer-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='renderer-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='renderer-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='renderer-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='renderer-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='renderer-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='renderer-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='renderer-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='renderer-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='renderer-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='renderer-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='renderer-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='renderer-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='renderer-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='renderer-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='renderer-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='renderer-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='renderer-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='renderer-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='renderer-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='renderer-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='renderer-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='renderer-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='renderer-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='renderer-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='renderer-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='renderer-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='event-objects'>Event objects</h2><p>Whenever a class inheriting from <a href="#evented"><code>Evented</code></a> fires an event, a listener function
will be called with an event argument, which is a plain object containing
information about the event. For example:</p>
<pre><code class="language-js">map.on('click', function(ev) {
    alert(ev.latlng); // ev is an event object (MouseEvent in this case)
});
</code></pre>
<p>The information available depends on the event type:</p>

<span id='event'></span>

<section>
<h3 id='event-property'>Event</h3>

<section >



<div class='section-comments'>The base event object. All other event objects contain these properties too.</div>

<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='event-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='event-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='event-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='event-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='event-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section>


</section><span id='keyboardevent'></span>

<section>
<h3 id='keyboardevent-property'>KeyboardEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='keyboardevent-originalevent'>
		<td><code><b>originalEvent</b></code></td>
		<td><code>DOMEvent</code></td>
		<td>The original [DOM <a href="#keyboardevent"><code>KeyboardEvent</code></a>](https://developer.mozilla.org/en-US/docs/Web/API/KeyboardEvent) that triggered this Leaflet event.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='keyboardevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='keyboardevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='keyboardevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='keyboardevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='keyboardevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='mouseevent'></span>

<section>
<h3 id='mouseevent-property'>MouseEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='mouseevent-latlng'>
		<td><code><b>latlng</b></code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td>The geographical point where the mouse event occurred.</td>
	</tr>
	<tr id='mouseevent-layerpoint'>
		<td><code><b>layerPoint</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>Pixel coordinates of the point where the mouse event occurred relative to the map layer.</td>
	</tr>
	<tr id='mouseevent-containerpoint'>
		<td><code><b>containerPoint</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>Pixel coordinates of the point where the mouse event occurred relative to the map сontainer.</td>
	</tr>
	<tr id='mouseevent-originalevent'>
		<td><code><b>originalEvent</b></code></td>
		<td><code>DOMEvent</code></td>
		<td>The original [DOM <a href="#mouseevent"><code>MouseEvent</code></a>](https://developer.mozilla.org/en-US/docs/Web/API/MouseEvent) or <a href="https://developer.mozilla.org/en-US/docs/Web/API/TouchEvent">DOM <code>TouchEvent</code></a> that triggered this Leaflet event.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='mouseevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='mouseevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='mouseevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='mouseevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='mouseevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='locationevent'></span>

<section>
<h3 id='locationevent-property'>LocationEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='locationevent-latlng'>
		<td><code><b>latlng</b></code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td>Detected geographical location of the user.</td>
	</tr>
	<tr id='locationevent-bounds'>
		<td><code><b>bounds</b></code></td>
		<td><code><a href='#latlngbounds'>LatLngBounds</a></code></td>
		<td>Geographical bounds of the area user is located in (with respect to the accuracy of location).</td>
	</tr>
	<tr id='locationevent-accuracy'>
		<td><code><b>accuracy</b></code></td>
		<td><code>Number</code></td>
		<td>Accuracy of location in meters.</td>
	</tr>
	<tr id='locationevent-altitude'>
		<td><code><b>altitude</b></code></td>
		<td><code>Number</code></td>
		<td>Height of the position above the WGS84 ellipsoid in meters.</td>
	</tr>
	<tr id='locationevent-altitudeaccuracy'>
		<td><code><b>altitudeAccuracy</b></code></td>
		<td><code>Number</code></td>
		<td>Accuracy of altitude in meters.</td>
	</tr>
	<tr id='locationevent-heading'>
		<td><code><b>heading</b></code></td>
		<td><code>Number</code></td>
		<td>The direction of travel in degrees counting clockwise from true North.</td>
	</tr>
	<tr id='locationevent-speed'>
		<td><code><b>speed</b></code></td>
		<td><code>Number</code></td>
		<td>Current velocity in meters per second.</td>
	</tr>
	<tr id='locationevent-timestamp'>
		<td><code><b>timestamp</b></code></td>
		<td><code>Number</code></td>
		<td>The time when the position was acquired.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='locationevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='locationevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='locationevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='locationevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='locationevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='errorevent'></span>

<section>
<h3 id='errorevent-property'>ErrorEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='errorevent-message'>
		<td><code><b>message</b></code></td>
		<td><code>String</code></td>
		<td>Error message.</td>
	</tr>
	<tr id='errorevent-code'>
		<td><code><b>code</b></code></td>
		<td><code>Number</code></td>
		<td>Error code (if applicable).</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='errorevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='errorevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='errorevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='errorevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='errorevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='layerevent'></span>

<section>
<h3 id='layerevent-property'>LayerEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layerevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code><a href='#layer'>Layer</a></code></td>
		<td>The layer that was added or removed.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layerevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='layerevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='layerevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='layerevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='layerscontrolevent'></span>

<section>
<h3 id='layerscontrolevent-property'>LayersControlEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layerscontrolevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code><a href='#layer'>Layer</a></code></td>
		<td>The layer that was added or removed.</td>
	</tr>
	<tr id='layerscontrolevent-name'>
		<td><code><b>name</b></code></td>
		<td><code>String</code></td>
		<td>The name of the layer that was added or removed.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='layerscontrolevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='layerscontrolevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='layerscontrolevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='layerscontrolevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='tileevent'></span>

<section>
<h3 id='tileevent-property'>TileEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tileevent-tile'>
		<td><code><b>tile</b></code></td>
		<td><code>HTMLElement</code></td>
		<td>The tile element (image).</td>
	</tr>
	<tr id='tileevent-coords'>
		<td><code><b>coords</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>Point object with the tile's <code>x</code>, <code>y</code>, and <code>z</code> (zoom level) coordinates.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tileevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='tileevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='tileevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='tileevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='tileevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='tileerrorevent'></span>

<section>
<h3 id='tileerrorevent-property'>TileErrorEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tileerrorevent-tile'>
		<td><code><b>tile</b></code></td>
		<td><code>HTMLElement</code></td>
		<td>The tile element (image).</td>
	</tr>
	<tr id='tileerrorevent-coords'>
		<td><code><b>coords</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>Point object with the tile's <code>x</code>, <code>y</code>, and <code>z</code> (zoom level) coordinates.</td>
	</tr>
	<tr id='tileerrorevent-error'>
		<td><code><b>error</b></code></td>
		<td><code>*</code></td>
		<td>Error passed to the tile's <code>done()</code> callback.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tileerrorevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='tileerrorevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='tileerrorevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='tileerrorevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='tileerrorevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='resizeevent'></span>

<section>
<h3 id='resizeevent-property'>ResizeEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='resizeevent-oldsize'>
		<td><code><b>oldSize</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>The old size before resize event.</td>
	</tr>
	<tr id='resizeevent-newsize'>
		<td><code><b>newSize</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td>The new size after the resize event.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='resizeevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='resizeevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='resizeevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='resizeevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='resizeevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='geojsonevent'></span>

<section>
<h3 id='geojsonevent-property'>GeoJSONEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojsonevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code><a href='#layer'>Layer</a></code></td>
		<td>The layer for the GeoJSON feature that is being added to the map.</td>
	</tr>
	<tr id='geojsonevent-properties'>
		<td><code><b>properties</b></code></td>
		<td><code>Object</code></td>
		<td>GeoJSON properties of the feature.</td>
	</tr>
	<tr id='geojsonevent-geometrytype'>
		<td><code><b>geometryType</b></code></td>
		<td><code>String</code></td>
		<td>GeoJSON geometry type of the feature.</td>
	</tr>
	<tr id='geojsonevent-id'>
		<td><code><b>id</b></code></td>
		<td><code>String</code></td>
		<td>GeoJSON ID of the feature (if present).</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='geojsonevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='geojsonevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='geojsonevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='geojsonevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='popupevent'></span>

<section>
<h3 id='popupevent-property'>PopupEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popupevent-popup'>
		<td><code><b>popup</b></code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td>The popup that was opened or closed.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='popupevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='popupevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='popupevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='popupevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='popupevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='tooltipevent'></span>

<section>
<h3 id='tooltipevent-property'>TooltipEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltipevent-tooltip'>
		<td><code><b>tooltip</b></code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td>The tooltip that was opened or closed.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='tooltipevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='tooltipevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='tooltipevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='tooltipevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='tooltipevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='dragendevent'></span>

<section>
<h3 id='dragendevent-property'>DragEndEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='dragendevent-distance'>
		<td><code><b>distance</b></code></td>
		<td><code>Number</code></td>
		<td>The distance in pixels the draggable element was moved by.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='dragendevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='dragendevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='dragendevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='dragendevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='dragendevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><span id='zoomanimevent'></span>

<section>
<h3 id='zoomanimevent-property'>ZoomAnimEvent</h3>

<section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='zoomanimevent-center'>
		<td><code><b>center</b></code></td>
		<td><code><a href='#latlng'>LatLng</a></code></td>
		<td>The current center of the map</td>
	</tr>
	<tr id='zoomanimevent-zoom'>
		<td><code><b>zoom</b></code></td>
		<td><code>Number</code></td>
		<td>The current zoom level of the map</td>
	</tr>
	<tr id='zoomanimevent-noupdate'>
		<td><code><b>noUpdate</b></code></td>
		<td><code>Boolean</code></td>
		<td>Whether layers should update their contents due to this event</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Properties inherited from <a href='#event'>Event</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Property</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='zoomanimevent-type'>
		<td><code><b>type</b></code></td>
		<td><code>String</code></td>
		<td>The event type (e.g. <code>'click'</code>).</td>
	</tr>
	<tr id='zoomanimevent-target'>
		<td><code><b>target</b></code></td>
		<td><code>Object</code></td>
		<td>The object that fired the event. For propagated events, the last object in
the propagation chain that fired the event.</td>
	</tr>
	<tr id='zoomanimevent-sourcetarget'>
		<td><code><b>sourceTarget</b></code></td>
		<td><code>Object</code></td>
		<td>The object that originally fired the event. For non-propagated events, this will
be the same as the <code>target</code>.</td>
	</tr>
	<tr id='zoomanimevent-propagatedfrom'>
		<td><code><b>propagatedFrom</b></code></td>
		<td><code>Object</code></td>
		<td>For propagated events, the last object that propagated the event to its
event parent.</td>
	</tr>
	<tr id='zoomanimevent-layer'>
		<td><code><b>layer</b></code></td>
		<td><code>Object</code></td>
		<td><strong>Deprecated.</strong> The same as <code>propagatedFrom</code>.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='divoverlay'>DivOverlay</h2><p>Base model for L.Popup and L.Tooltip. Inherit from it for custom popup like plugins.</p>

<section>
<h3 id='divoverlay-option'>Options</h3>

<section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-offset'>
		<td><code><b>offset</b></code></td>
		<td><code><a href='#point'>Point</a></code></td>
		<td><code>Point(0, 7)</code></td>
		<td>The offset of the popup position. Useful to control the anchor
of the popup when opening it on some overlays.</td>
	</tr>
	<tr id='divoverlay-classname'>
		<td><code><b>className</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;&#x27;</code></td>
		<td>A custom CSS class name to assign to the popup.</td>
	</tr>
	<tr id='divoverlay-pane'>
		<td><code><b>pane</b></code></td>
		<td><code>String</code></td>
		<td><code>&#x27;popupPane&#x27;</code></td>
		<td><code>Map pane</code> where the popup will be added.</td>
	</tr>
</tbody></table>

</section>


<div class='accordion'>
	<label><span class='expander'>▶</span> Options inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-attribution'>
		<td><code><b>attribution</b></code></td>
		<td><code>String</code></td>
		<td><code>null</code></td>
		<td>String to be shown in the attribution control, e.g. &quot;© OpenStreetMap contributors&quot;. It describes the layer data and is often a legal obligation towards copyright holders and tile providers.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Events</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-add'>
		<td><code><b>add</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is added to a map</td>
	</tr>
	<tr id='divoverlay-remove'>
		<td><code><b>remove</b></code></td>
		<td><code><a href='#event'>Event</a></code></td>
		<td>Fired after the layer is removed from a map</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-popupopen'>
		<td><code><b>popupopen</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is opened</td>
	</tr>
	<tr id='divoverlay-popupclose'>
		<td><code><b>popupclose</b></code></td>
		<td><code><a href='#popupevent'>PopupEvent</a></code></td>
		<td>Fired when a popup bound to this layer is closed</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip events inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Event</th>
		<th>Data</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-tooltipopen'>
		<td><code><b>tooltipopen</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is opened.</td>
	</tr>
	<tr id='divoverlay-tooltipclose'>
		<td><code><b>tooltipclose</b></code></td>
		<td><code><a href='#tooltipevent'>TooltipEvent</a></code></td>
		<td>Fired when a tooltip bound to this layer is closed.</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><section>
<h3 id=''>Methods</h3>




<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-addto'>
		<td><code><b>addTo</b>(<nobr>&lt;Map|LayerGroup&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds the layer to the given map or layer group.</p>
</td>
	</tr>
	<tr id='divoverlay-remove'>
		<td><code><b>remove</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the map it is currently active on.</p>
</td>
	</tr>
	<tr id='divoverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#map'>Map</a>&gt;</nobr> <i>map</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given map</p>
</td>
	</tr>
	<tr id='divoverlay-removefrom'>
		<td><code><b>removeFrom</b>(<nobr>&lt;<a href='#layergroup'>LayerGroup</a>&gt;</nobr> <i>group</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes the layer from the given <a href="#layergroup"><code>LayerGroup</code></a></p>
</td>
	</tr>
	<tr id='divoverlay-getpane'>
		<td><code><b>getPane</b>(<nobr>&lt;String&gt;</nobr> <i>name?</i>)</code></td>
		<td><code>HTMLElement</code></td>
		<td><p>Returns the <code>HTMLElement</code> representing the named pane on the map. If <code>name</code> is omitted, returns the pane for this layer.</p>
</td>
	</tr>
	<tr id='divoverlay-getattribution'>
		<td><code><b>getAttribution</b>()</code></td>
		<td><code>String</code></td>
		<td><p>Used by the <code>attribution control</code>, returns the <a href="#gridlayer-attribution">attribution option</a>.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Popup methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-bindpopup'>
		<td><code><b>bindPopup</b>(<nobr>&lt;String|HTMLElement|Function|Popup&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#popup-option'>Popup options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a popup to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='divoverlay-unbindpopup'>
		<td><code><b>unbindPopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the popup previously bound with <code>bindPopup</code>.</p>
</td>
	</tr>
	<tr id='divoverlay-openpopup'>
		<td><code><b>openPopup</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound popup at the specified <a href="#latlng"><code>latlng</code></a> or at the default popup anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='divoverlay-closepopup'>
		<td><code><b>closePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the popup bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='divoverlay-togglepopup'>
		<td><code><b>togglePopup</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the popup bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='divoverlay-ispopupopen'>
		<td><code><b>isPopupOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the popup bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='divoverlay-setpopupcontent'>
		<td><code><b>setPopupContent</b>(<nobr>&lt;String|HTMLElement|Popup&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the popup bound to this layer.</p>
</td>
	</tr>
	<tr id='divoverlay-getpopup'>
		<td><code><b>getPopup</b>()</code></td>
		<td><code><a href='#popup'>Popup</a></code></td>
		<td><p>Returns the popup bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Tooltip methods inherited from <a href='#layer'>Layer</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-bindtooltip'>
		<td><code><b>bindTooltip</b>(<nobr>&lt;String|HTMLElement|Function|Tooltip&gt;</nobr> <i>content</i>, <nobr>&lt;<a href='#tooltip-option'>Tooltip options</a>&gt;</nobr> <i>options?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Binds a tooltip to the layer with the passed <code>content</code> and sets up the
necessary event listeners. If a <code>Function</code> is passed it will receive
the layer as the first argument and should return a <code>String</code> or <code>HTMLElement</code>.</p>
</td>
	</tr>
	<tr id='divoverlay-unbindtooltip'>
		<td><code><b>unbindTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes the tooltip previously bound with <code>bindTooltip</code>.</p>
</td>
	</tr>
	<tr id='divoverlay-opentooltip'>
		<td><code><b>openTooltip</b>(<nobr>&lt;<a href='#latlng'>LatLng</a>&gt;</nobr> <i>latlng?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Opens the bound tooltip at the specified <a href="#latlng"><code>latlng</code></a> or at the default tooltip anchor if no <code>latlng</code> is passed.</p>
</td>
	</tr>
	<tr id='divoverlay-closetooltip'>
		<td><code><b>closeTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Closes the tooltip bound to this layer if it is open.</p>
</td>
	</tr>
	<tr id='divoverlay-toggletooltip'>
		<td><code><b>toggleTooltip</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Opens or closes the tooltip bound to this layer depending on its current state.</p>
</td>
	</tr>
	<tr id='divoverlay-istooltipopen'>
		<td><code><b>isTooltipOpen</b>()</code></td>
		<td><code>boolean</code></td>
		<td><p>Returns <code>true</code> if the tooltip bound to this layer is currently open.</p>
</td>
	</tr>
	<tr id='divoverlay-settooltipcontent'>
		<td><code><b>setTooltipContent</b>(<nobr>&lt;String|HTMLElement|Tooltip&gt;</nobr> <i>content</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Sets the content of the tooltip bound to this layer.</p>
</td>
	</tr>
	<tr id='divoverlay-gettooltip'>
		<td><code><b>getTooltip</b>()</code></td>
		<td><code><a href='#tooltip'>Tooltip</a></code></td>
		<td><p>Returns the tooltip bound to this layer.</p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

<div class='accordion'>
	<label><span class='expander'>▶</span> Methods inherited from <a href='#evented'>Evented</a></label>
	<div class='accordion-overflow'>
		<div class='accordion-content'><section >




<table><thead>
	<tr>
		<th>Method</th>
		<th>Returns</th>
		<th>Description</th>
	</tr>
	</thead><tbody>
	<tr id='divoverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a listener function (<code>fn</code>) to a particular event type of the object. You can optionally specify the context of the listener (object the this keyword will point to). You can also pass several space-separated types (e.g. <code>'click dblclick'</code>).</p>
</td>
	</tr>
	<tr id='divoverlay-on'>
		<td><code><b>on</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds a set of type/listener pairs, e.g. <code>{click: onClick, mousemove: onMouseMove}</code></p>
</td>
	</tr>
	<tr id='divoverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Function&gt;</nobr> <i>fn?</i>, <nobr>&lt;Object&gt;</nobr> <i>context?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a previously added listener function. If no function is specified, it will remove all the listeners of that particular event from the object. Note that if you passed a custom context to <code>on</code>, you must pass the same context to <code>off</code> in order to remove the listener.</p>
</td>
	</tr>
	<tr id='divoverlay-off'>
		<td><code><b>off</b>(<nobr>&lt;Object&gt;</nobr> <i>eventMap</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes a set of type/listener pairs.</p>
</td>
	</tr>
	<tr id='divoverlay-off'>
		<td><code><b>off</b>()</code></td>
		<td><code>this</code></td>
		<td><p>Removes all listeners to all events on the object. This includes implicitly attached events.</p>
</td>
	</tr>
	<tr id='divoverlay-fire'>
		<td><code><b>fire</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>, <nobr>&lt;Object&gt;</nobr> <i>data?</i>, <nobr>&lt;Boolean&gt;</nobr> <i>propagate?</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Fires an event of the specified type. You can optionally provide an data
object — the first argument of the listener function will contain its
properties. The event can optionally be propagated to event parents.</p>
</td>
	</tr>
	<tr id='divoverlay-listens'>
		<td><code><b>listens</b>(<nobr>&lt;String&gt;</nobr> <i>type</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Returns <code>true</code> if a particular event type has any listeners attached to it.</p>
</td>
	</tr>
	<tr id='divoverlay-once'>
		<td><code><b>once</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Behaves as <a href="#evented-on"><code>on(…)</code></a>, except the listener will only get fired once and then removed.</p>
</td>
	</tr>
	<tr id='divoverlay-addeventparent'>
		<td><code><b>addEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Adds an event parent - an <a href="#evented"><code>Evented</code></a> that will receive propagated events</p>
</td>
	</tr>
	<tr id='divoverlay-removeeventparent'>
		<td><code><b>removeEventParent</b>(<nobr>&lt;<a href='#evented'>Evented</a>&gt;</nobr> <i>obj</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Removes an event parent, so it will stop receiving propagated events</p>
</td>
	</tr>
	<tr id='divoverlay-addeventlistener'>
		<td><code><b>addEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-on"><code>on(…)</code></a></p>
</td>
	</tr>
	<tr id='divoverlay-removeeventlistener'>
		<td><code><b>removeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off(…)</code></a></p>
</td>
	</tr>
	<tr id='divoverlay-clearalleventlisteners'>
		<td><code><b>clearAllEventListeners</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-off"><code>off()</code></a></p>
</td>
	</tr>
	<tr id='divoverlay-addonetimeeventlistener'>
		<td><code><b>addOneTimeEventListener</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-once"><code>once(…)</code></a></p>
</td>
	</tr>
	<tr id='divoverlay-fireevent'>
		<td><code><b>fireEvent</b>(<i>…</i>)</code></td>
		<td><code>this</code></td>
		<td><p>Alias to <a href="#evented-fire"><code>fire(…)</code></a></p>
</td>
	</tr>
	<tr id='divoverlay-haseventlisteners'>
		<td><code><b>hasEventListeners</b>(<i>…</i>)</code></td>
		<td><code>Boolean</code></td>
		<td><p>Alias to <a href="#evented-listens"><code>listens(…)</code></a></p>
</td>
	</tr>
</tbody></table>

</section></div>
	</div>
</div>

</section><h2 id='global-switches'>Global Switches</h2><p>Global switches are created for rare cases and generally make
Leaflet to not detect a particular browser feature even if it's
there. You need to set the switch as a global variable to true
before including Leaflet on the page, like this:</p>
<pre><code class="language-html">&lt;script&gt;L_NO_TOUCH = true;&lt;/script&gt;
&lt;script src=&quot;leaflet.js&quot;&gt;&lt;/script&gt;
</code></pre>
<p>| Switch         |   Description    |
| -------------- | ---------------- |
| <code>L_NO_TOUCH</code>   | Forces Leaflet to not use touch events even if it detects them. |
| <code>L_DISABLE_3D</code> | Forces Leaflet to not use hardware-accelerated CSS 3D transforms for positioning (which may cause glitches in some rare environments) even if they're supported. |</p>

<h2 id='noconflict'>noConflict</h2><p>This method restores the <code>L</code> global variable to the original value
it had before Leaflet inclusion, and returns the real Leaflet
namespace so you can put it elsewhere, like this:</p>
<pre><code class="language-html">&lt;script src='libs/l.js'&gt;
&lt;!-- L points to some other library --&gt;

&lt;script src='leaflet.js'&gt;
&lt;!-- you include Leaflet, it replaces the L variable to Leaflet namespace --&gt;

&lt;script&gt;
var Leaflet = L.noConflict();
// now L points to that other library again, and you can use Leaflet.Map etc.
&lt;/script&gt;
</code></pre>

<h2 id='version'>version</h2><p>A constant that represents the Leaflet version in use.</p>
<pre><code class="language-js">L.version; // contains &quot;1.0.0&quot; (or whatever version is currently in use)
</code></pre>



	<!-- CUT HERE FOR docs/reference-*.php -->

	</div>

	<script src="../docs/docs/js/docs.js"></script>
	<script src="../docs/docs/js/reference.js"></script>

</body></html>
