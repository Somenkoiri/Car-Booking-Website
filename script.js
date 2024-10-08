// JavaScript to make the section draggable
const draggableSection = document.getElementById('draggable-section');

draggableSection.onmousedown = function (event) {
  let shiftX = event.clientX - draggableSection.getBoundingClientRect().left;
  let shiftY = event.clientY - draggableSection.getBoundingClientRect().top;

  function moveAt(pageX, pageY) {
    draggableSection.style.left = pageX - shiftX + 'px';
    draggableSection.style.top = pageY - shiftY + 'px';
  }

  function onMouseMove(event) {
    moveAt(event.pageX, event.pageY);
  }

  document.addEventListener('mousemove', onMouseMove);

  draggableSection.onmouseup = function () {
    document.removeEventListener('mousemove', onMouseMove);
    draggableSection.onmouseup = null;
  };
};

draggableSection.ondragstart = function () {
  return false;
};


