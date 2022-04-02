var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
overlay = document.getElementById('overlay'),
popup = document.getElementById('popup'),
btnCerrarPopup = document.getElementById('btn-cerrar-popup')
overlay2 = document.getElementById('overlay2'),
btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2')


;

btnAbrirPopup.addEventListener('click', function ()
    {
        overlay.classList.add('active');
        popup.classList.add('active');
    }
                             );

btnCerrarPopup.addEventListener('click', function (e)
{
        e.preventDefault();
        overlay.classList.remove('active');
        popup.classList.remove('active');
    }
                                );

btnCerrarPopup2.addEventListener('click', function (e) {
    e.preventDefault();
    panel1.classList.remove('active');
}
                            );