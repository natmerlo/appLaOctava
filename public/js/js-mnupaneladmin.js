const varbtMen_1 = document.getElementById('btMen_1');

varbtMen_1.addEventListener('click', ()=>{
    Conmutar_menu();
})

function Conmutar_menu(){
    document.getElementById('menu-moviles').classList.toggle('hidden');
    document.getElementById('abrir-menu').classList.toggle('hidden');
    document.getElementById('cerrar-menu').classList.toggle('hidden');
}

const varBtMenuMovil = document.getElementById('btMenuMovil');
varBtMenuMovil.addEventListener('click', ()=>{
    Conmutar_menu();
})

