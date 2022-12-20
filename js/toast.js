var cortaNoIgual = document.cookie.split('=') 
var cortaNoPontoVirgula = cortaNoIgual[1].split(';')
var final = decodeURI(cortaNoPontoVirgula[0])
var ck = document.cookie;

var divExibe = document.getElementById('exibe');
divExibe.innerHTML = ck;
divExibe.style.backgroundColor = 'blue';
divExibe.style.color = 'white'

divExibe.innerHTML = final
if(decodeURI(cortaNoPontoVirgula[1].trim()) == 'EDITAR'){
    divExibe.style.backgroundColor = 'blue';
    document.cookie = 'EDITAR=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=';
}else if (decodeURI(cortaNoPontoVirgula[1].trim()) == 'DELETAR') {
    divExibe.style.backgroundColor = 'red';
    document.cookie = 'DELETAR=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=';
}else {
    divExibe.style.backgroundColor = 'green';
    document.cookie = 'CRIAR=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=';
}


divExibe.className = 'show';
setTimeout(function(){
    divExibe.className = divExibe.className.replace('show', '');
}, 3000);
document.cookie = 'msg=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=';