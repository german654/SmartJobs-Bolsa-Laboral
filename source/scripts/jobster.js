document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.circle-item');
  const radius = 160; // Radio para las imágenes (más pequeño que el círculo punteado)
  const totalItems = items.length;
  const angleStep = (2 * Math.PI) / totalItems; // Ángulo entre cada imagen

  // Posicionar los elementos en círculo
  items.forEach((item, index) => {
    const angle = index * angleStep;
    const x = radius * Math.cos(angle); // Coordenada X
    const y = radius * Math.sin(angle); // Coordenada Y

    item.style.transform = `translate(${x}px, ${y}px)`; // Posicionar la imagen
  });

  // Animar la aparición de los elementos uno por uno
  let delay = 0;
  items.forEach((item, index) => {
    setTimeout(() => {
      item.style.opacity = 1; // Aparecer la imagen
    }, delay);
    delay += 500; // Retraso entre cada aparición (500ms)
  });
});
