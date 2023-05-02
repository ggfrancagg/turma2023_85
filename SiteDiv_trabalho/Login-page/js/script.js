var botao=document.querySelectorAll('button');
var i=0;

while(i<botao.length){//enquanto tiver botao
botao[i].addEventListener('click',Comprar);//adiciona o click
i++;//incrementa 
}

function Comprar(){
	alert('Compra efetuatuada com sucesso!');
}