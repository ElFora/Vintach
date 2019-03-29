var modal = document.getElementById('modal-content');
var modalBtn = document.getElementById('modal-btn');
var closeBtn = document.getElementById('close-btn');

modalBtn.addEventListener('click', openModal);

function openModal(){
  modal.style.display = 'block';
}