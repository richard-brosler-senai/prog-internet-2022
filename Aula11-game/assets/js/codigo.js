const mario = document.querySelector("#mario");
const cano = document.querySelector("#pipe");

const btnsReset = document.querySelectorAll(".clReset");

Array.from(btnsReset).forEach(btn => 
  {
    btn.addEventListener("click",()=>
    {
      document.location.reload();  
    })
  }
)

const loop = setInterval(()=>{
  const canoPosicao = cano.offsetLeft;
  const modal = document.querySelector(".modal");
  const marioPosicao = window.getComputedStyle(mario).bottom
                          .replace("px","");
  console.log(marioPosicao);
  if (canoPosicao >= -65 && canoPosicao <= 98 && marioPosicao < 105) {
    cano.style.animation = "none";
    cano.style.left = `${canoPosicao}px`;

    mario.style.animation = "none";
    mario.style.bottom = `${marioPosicao}px`;
    mario.src = "assets/img/game-over.png"
    mario.style.height = "85px";
    mario.style.marginLeft = "40px";
    // Cancelando o setInterval para não ficar consumindo recursos
    clearInterval(loop);
    // Mostrando o modal
    modal.classList.add("show");
  }
},100);

document.addEventListener("keydown",(event)=>{
  mario.classList.add("jump");
  setTimeout(()=>{
    mario.classList.remove("jump");
  },1000);
})

