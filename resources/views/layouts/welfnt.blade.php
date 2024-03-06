
<style>
  body {

    margin: 0;
    padding: 0;
    background-size: cover;
    background-image: url('{{ asset("nar.png") }}');
    transition: background-image 1s ease;



  }


</style>
<body>

<script>
    // Liste des chemins d'accès aux images de fond
    const backgrounds = [
      "{{ asset('spi.jpg') }}",
      "{{ asset('suk.jpg') }}",
      "{{ asset('watch.jpg') }}",
      "{{ asset('gta6.jpg') }}",
      "{{ asset('lof.png') }}"

      // Ajoutez plus d'images si nécessaire
    ];

    let currentIndex = 0;

     // Fonction pour précharger les images
  function preloadImages() {
    backgrounds.forEach((image) => {
      const img = new Image();
      img.src = image;
    });
  }

    function changeBackground() {
      document.body.style.backgroundImage = `url('${backgrounds[currentIndex]}')`;
      currentIndex = (currentIndex + 1) % backgrounds.length;
    }

   // Préchargez les images, puis commencez le défilement automatique
  window.onload = function() {
    preloadImages();
    setInterval(changeBackground, 5000);
  };
  </script>
</body>
