var botao=document.querySelectorAll('button');
var i=0;

while(i<botao.length){//enquanto tiver botão
botao[i].addEventListener('click',comprar);//adiciona o click
i++;//incrementa
}

function comprar(){
	alert('Compra efetuada com sucesso!');
}