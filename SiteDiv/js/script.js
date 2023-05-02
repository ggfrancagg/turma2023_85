var botao=document.querySelectorAll('button');
var i=0;

while(i<botao.length){
botao[i].addEventListener('click',comprar);
i++;
}
function comprar(){
	alert('Compra efetuada com sucesso!');
}