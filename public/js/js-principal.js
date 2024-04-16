const varBtMenuMovil = document.getElementById('btMenuMovil');

const varbtMen_1 = document.getElementById('btMen_1');
varbtMen_1.addEventListener('click', ()=>{
    Conmutar_menu();
})
const varbtMen_2 = document.getElementById('btMen_2');
varbtMen_2.addEventListener('click', ()=>{
    Conmutar_menu();
})
const varbtMen_3 = document.getElementById('btMen_3');
varbtMen_3.addEventListener('click', ()=>{
    Conmutar_menu();
})
const varbtMen_4 = document.getElementById('btMen_4');
varbtMen_4.addEventListener('click', ()=>{
    Conmutar_menu();
})
const varbtMen_5 = document.getElementById('btMen_5');
varbtMen_5.addEventListener('click', ()=>{
    Conmutar_menu();
})

function Conmutar_menu(){
    document.getElementById('menu-moviles').classList.toggle('hidden');
    document.getElementById('abrir-menu').classList.toggle('hidden');
    document.getElementById('cerrar-menu').classList.toggle('hidden');
}

varBtMenuMovil.addEventListener('click', ()=>{
    Conmutar_menu();
})
