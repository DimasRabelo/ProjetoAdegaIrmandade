
/* Evento do Mouse */


let isDragging = false;
let startX, startY, scrollLeft, scrollTop;

document.getElementById('arrastarMouse').addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - document.getElementById('arrastarMouse').offsetLeft;
    startY = e.pageY - document.getElementById('arrastarMouse').offsetTop;
    scrollLeft = document.getElementById('arrastarMouse').scrollLeft;
    scrollTop = document.getElementById('arrastarMouse').scrollTop;
});

document.getElementById('arrastarMouse').addEventListener('mouseleave', () => {
    isDragging = false;
});

document.getElementById('arrastarMouse').addEventListener('mouseup', () => {
    isDragging = false;
});

document.getElementById('arrastarMouse').addEventListener('mousemove', (e) => {
    if (!isDragging) return;

    const x = e.pageX - document.getElementById('arrastarMouse').offsetLeft;
    const y = e.pageY - document.getElementById('arrastarMouse').offsetTop;

    const walkX = (x - startX) * 1; // Ajuste a sensibilidade conforme necessário
    const walkY = (y - startY) * 1;

    document.getElementById('arrastarMouse').scrollLeft = scrollLeft - walkX;
    document.getElementById('arrastarMouse').scrollTop = scrollTop - walkY;
});