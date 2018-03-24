$(document).foundation()


var modal = document.querySelector(".modal");
var trigger = document.querySelector(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
    $('body').addClass('positionfix');
}
$(document).ready(function() {
$(".close-button").click(function(){
    $("body").removeClass('positionfix');
    console.log('click');
 });
});

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
