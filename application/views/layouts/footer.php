            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <?= date('Y');?> - Muhammad Nur Ashiddiqi.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>
    
    <!-- Add Json Kecamatan-->
    <script src="<?= base_url('assets/');?>js/ADMINISTRASIKECAMATAN_AR_50K_0.js"></script>
    
    <!-- Page level plugins -->
    <script src="<?= base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/');?>js/demo/datatables-demo.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <script>
	var mymap = L.map('mapid').setView([-5.4181, 105.2991], 12);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);
	
	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	// method that we will use to update the control based on feature properties passed
	info.update = function (props) {
		this._div.innerHTML = '<h4>Jumlah Objek Wisata</h4>' +  (props ?
			'<b>' + props.NAMOBJ + '</b><br /> '+ props.iniwisata + ' wisata / kecamatan '
			: 'Hover over a state');
	};

	info.addTo(mymap);

    // get color depending on population density value
	function getColor(d) {
		return d > 5 ? '#800026' :
				d > 3  ? '#BD0026' :
				d > 1  ? '#E31A1C' :
				        '#FC4E2A' ;
				// d > 4   ? '#FD8D3C' :
				// d >    ? '#FEB24C' :
				// d > 2   ? '#FED976' :
				// 			'#FFEDA0';
	}
	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.iniwisata)
		};
	}

    function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}
    var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	geojson = L.geoJson(json_ADMINISTRASIKECAMATAN_AR_50K_0, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(mymap);

    

    
    <?php foreach ($wisata as $r) { ?>
    var markerIcon = L.icon({
    iconUrl: '<?=base_url('gambar/icons/') . $r['gambar_icon']; ?>',
    iconSize: [35, 40], // size of the icon
    iconAnchor: [15.5, 42], // point of the icon which will correspond to marker's location
    popupAnchor: [0, -45], // point from which the popup should open relative to the iconAnchor
});

	var Marker = L.marker([<?= $r['cord']; ?>], {icon: markerIcon}).bindPopup('<h4><?= $r['nama']; ?></h4><p>Tiket Masuk : Rp<?= $r['harga']; ?><br>Alamat : <?= $r['alamat']; ?><br><img src ="<?= base_url('gambar/') . $r['gambar'] ?>" style="width:100%;height:150px;" />').addTo(mymap);
    
	var circle = L.circle([<?= $r['cord']; ?>], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 200
    }).addTo(mymap);
    <?php } ?>
    
</script>
</body>

</html>