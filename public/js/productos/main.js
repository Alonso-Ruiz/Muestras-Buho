const $fileInput = document.getElementById('image');
const $dragZone = document.getElementById('result-image');
const $img = document.getElementById('img-result');

// Evento de clickear para insertar imagen
$dragZone.addEventListener('click', () => {
  $fileInput.click();
})

// Evento que al clickear, podamos añadir imagen
$fileInput.addEventListener('change', (e) => {
  const file = e.target.files[0];
  uploadImage(file);
})

// Evento de acercar imagen
$dragZone.addEventListener('dragover', (e) => {
  e.preventDefault();

  $dragZone.classList.add('form-file__result--active');
})

// Evento de alejar imagen
$dragZone.addEventListener('dragleave', (e) => {
  e.preventDefault();

  $dragZone.classList.remove('form-file__result--active');
})

// evento de soltar imagen
$dragZone.addEventListener('drop', (e) => {
  e.preventDefault();
  
  $fileInput.files = e.dataTransfer.files;
  const file = $fileInput.files[0];
  
  uploadImage(file);
})

// Funcion subir imagen
const uploadImage = (file) => {
  const fileReader = new FileReader();
  fileReader.readAsDataURL(file);

  fileReader.addEventListener('load', (e) => {
    $img.setAttribute('src', e.target.result);
  })
}