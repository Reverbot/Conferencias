var map = L.map('mapa').setView([11.976409, -86.084501], 16);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		L.marker([11.976409, -86.084501]).addTo(map)
			.bindPopup('Conferencia 2019 </br> boletos ya disponibles')
			.openPopup();