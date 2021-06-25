const add = document.querySelectorAll('#btn-action');
const nama = document.querySelectorAll('#nama-produk');
const bag= document.querySelector('#keranjang');
const modal=document.querySelector('.modal-body');
const modalItem=document.querySelectorAll('.modal-item');
const num=document.querySelectorAll('#num');
const dellModal=document.querySelectorAll('#del-item');

let angka=0;
let x=1;
//console.log(num);

for(let i=0;i<add.length;i++){


add[i].addEventListener('click', () =>{
    ++angka;
    bag.setAttribute("style","display : inline-block");
    bag.innerHTML=angka;
    
    //console.log(i);
    // add number to modal
    modalItem[i].setAttribute("style","display: block");
    num[i].value=(+num[i].value+1);

    // modal
    
})
}






