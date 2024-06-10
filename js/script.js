const bar = document.getElementById('bar');
const menu = document.getElementById('menu');
bar.addEventListener("click",()=>{
    if(menu.classList.contains('active')){
        menu.classList.remove('active');
    }else{
        menu.classList.add('active');
    }
})