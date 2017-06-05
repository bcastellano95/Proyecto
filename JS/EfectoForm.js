/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(
        function () {
            formCliente();
        }
);

function mostrarInt() {
    document.getElementById('Introduccion').style.display = 'block';
    document.getElementById('Resumendehabilidades').style.display = 'none';
    document.getElementById('Talentos').style.display = 'none';
    document.getElementById('ArtefactoyReliquias').style.display = 'none';
    document.getElementById('EstadisticasPincipales').style.display = 'none';
    document.getElementById('GemasEncantamientos').style.display = 'none';
    document.getElementById('LegendariosBIS').style.display = 'none';
}
function mostrarRes() {
    document.getElementById('Introduccion').style.display = 'none';
    document.getElementById('Resumendehabilidades').style.display = 'block';
    document.getElementById('Talentos').style.display = 'none';
    document.getElementById('ArtefactoyReliquias').style.display = 'none';
    document.getElementById('EstadisticasPincipales').style.display = 'none';
    document.getElementById('GemasEncantamientos').style.display = 'none';
    document.getElementById('LegendariosBIS').style.display = 'none';
}
function mostrarTal() {
    document.getElementById('Introduccion').style.display = 'none';
    document.getElementById('Resumendehabilidades').style.display = 'none';
    document.getElementById('Talentos').style.display = 'block';
    document.getElementById('ArtefactoyReliquias').style.display = 'none';
    document.getElementById('EstadisticasPincipales').style.display = 'none';
    document.getElementById('GemasEncantamientos').style.display = 'none';
    document.getElementById('LegendariosBIS').style.display = 'none';
}
function mostrarArt() {
    document.getElementById('Introduccion').style.display = 'none';
    document.getElementById('Resumendehabilidades').style.display = 'none';
    document.getElementById('Talentos').style.display = 'none';
    document.getElementById('ArtefactoyReliquias').style.display = 'block';
    document.getElementById('EstadisticasPincipales').style.display = 'none';
    document.getElementById('GemasEncantamientos').style.display = 'none';
    document.getElementById('LegendariosBIS').style.display = 'none';
}
function mostrarEst() {
    document.getElementById('Introduccion').style.display = 'none';
    document.getElementById('Resumendehabilidades').style.display = 'none';
    document.getElementById('Talentos').style.display = 'none';
    document.getElementById('ArtefactoyReliquias').style.display = 'none';
    document.getElementById('EstadisticasPincipales').style.display = 'block';
    document.getElementById('GemasEncantamientos').style.display = 'none';
    document.getElementById('LegendariosBIS').style.display = 'none';
}
function mostrarGem() {
    document.getElementById('Introduccion').style.display = 'none';
    document.getElementById('Resumendehabilidades').style.display = 'none';
    document.getElementById('Talentos').style.display = 'none';
    document.getElementById('ArtefactoyReliquias').style.display = 'none';
    document.getElementById('EstadisticasPincipales').style.display = 'none';
    document.getElementById('GemasEncantamientos').style.display = 'block';
    document.getElementById('LegendariosBIS').style.display = 'none';
}
function mostrarLeg() {
    document.getElementById('Introduccion').style.display = 'none';
    document.getElementById('Resumendehabilidades').style.display = 'none';
    document.getElementById('Talentos').style.display = 'none';
    document.getElementById('ArtefactoyReliquias').style.display = 'none';
    document.getElementById('EstadisticasPincipales').style.display = 'none';
    document.getElementById('GemasEncantamientos').style.display = 'none';
    document.getElementById('LegendariosBIS').style.display = 'block';
}
