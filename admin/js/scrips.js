
/* Evento do Mouse */


let isDragging = false;
let startX, startY, scrollLeft, scrollTop;

const arrastarMouseElement = document.getElementById('arrastarMouse');

arrastarMouseElement.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - arrastarMouseElement.offsetLeft;
    startY = e.pageY - arrastarMouseElement.offsetTop;
    scrollLeft = arrastarMouseElement.scrollLeft;
    scrollTop = arrastarMouseElement.scrollTop;
});

arrastarMouseElement.addEventListener('mouseleave', () => {
    isDragging = false;
});

arrastarMouseElement.addEventListener('mouseup', () => {
    isDragging = false;
});

arrastarMouseElement.addEventListener('mousemove', (e) => {
    if (!isDragging) return;

    const x = e.pageX - arrastarMouseElement.offsetLeft;
    const y = e.pageY - arrastarMouseElement.offsetTop;

    const walkX = (x - startX) * 1; // Ajuste a sensibilidade conforme necessário
    const walkY = (y - startY) * 1;

    arrastarMouseElement.scrollLeft = scrollLeft - walkX;
    arrastarMouseElement.scrollTop = scrollTop - walkY;
});
