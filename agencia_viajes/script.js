document.addEventListener('DOMContentLoaded', function() {
  const searchButton = document.getElementById('search-button');
  const resultsContainer = document.getElementById('results-container');
  const notificationsContainer = document.getElementById('notifications-container');

  // Clase PaqueteTuristico
  class PaqueteTuristico {
    constructor(destino, fecha, precio) {
      this.destino = destino;
      this.fecha = fecha;
      this.precio = precio;
    }

    // Método para mostrar los detalles del paquete
    mostrarDetalles() {
      return `Paquete a ${this.destino} para el ${this.fecha} - $${this.precio}`;
    }
  }

  // Simulación de paquetes turísticos
  const paquetes = [
    new PaqueteTuristico('Paris', '2024-07-15', 255200),
    new PaqueteTuristico('Roma', '2024-08-20', 199000),
    new PaqueteTuristico('Nueva York', '2024-09-05', 551500)
  ];

  searchButton.addEventListener('click', function() {
    const destination = document.getElementById('destination').value;
    const travelDate = document.getElementById('travel-date').value;

    if (destination && travelDate) {
      const results = paquetes
        .filter(paquete => paquete.destino.toLowerCase().includes(destination.toLowerCase()) && paquete.fecha === travelDate)
        .map(paquete => paquete.mostrarDetalles());
      displayResults(results);
    } else {
      alert('Por favor, ingrese un destino y una fecha de viaje.');
    }
  });

  function displayResults(results) {
    resultsContainer.innerHTML = ''; // Limpia los resultados anteriores
    if (results.length > 0) {
      results.forEach(result => {
        const resultElement = document.createElement('div');
        resultElement.textContent = result;
        resultsContainer.appendChild(resultElement);
      });
    } else {
      resultsContainer.textContent = 'No se encontraron paquetes turísticos para los criterios de búsqueda.';
    }
  }

  function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    notificationsContainer.appendChild(notification);

    setTimeout(() => {
      notificationsContainer.removeChild(notification);
    }, 5000); // Notificación desaparece después de 5 segundos
  }

  // Simulación de notificaciones en tiempo real
  setInterval(() => {
    const offers = [
      'Oferta especial: 20% de descuento en vuelos a París!',
      'Paquete turístico: 3 noches en Roma por $100000!',
      'Última oportunidad: 10% de descuento en vuelos a Nueva York!'
    ];
    const randomOffer = offers[Math.floor(Math.random() * offers.length)];
    showNotification(randomOffer);
  }, 10000); // Muestra una nueva oferta cada 10 segundos

  // Simulación de actualizaciones en tiempo real sobre disponibilidad de paquetes turísticos
  setInterval(() => {
    const updates = [
      'Actualización: Solo quedan 5 lugares para el paquete a París del 2023-07-15!',
      'Actualización: 2 lugares disponibles para el paquete a Roma del 2023-08-20!',
      'Actualización: Paquete a Nueva York del 2023-09-05 ahora con 10% de descuento!'
    ];
    const randomUpdate = updates[Math.floor(Math.random() * updates.length)];
    showNotification(randomUpdate);
  }, 15000); // Muestra una nueva actualización cada 15 segundos
});


