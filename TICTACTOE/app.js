let boxes = document.querySelectorAll(".box");
let reset = document.querySelector(".reset");
let newbtn = document.querySelector("#new");
let msgcontainor = document.querySelector(".win");
let msg = document.querySelector("#msg");

let count = 0; //To Track Draw

let turno =true; // turn is of O
const winpattern = [
  [0,1,2],[3,4,5],[6,7,8]
  ,[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]
];

const resetgame = () =>{
turno =true;
enableboxes();
msgcontainor.classList.add("hide");
for(let box of boxes){

    box.style.background= "";
}

}

boxes.forEach((box) => {
  box.addEventListener("click", () => {
    // console.log("Box is clicked");
    if(turno)
    {
        box.innerText = "O";
        box.style.background= "pink";

        turno = false;
    }
    else{
        box.innerText ="X";
        box.style.background= "orange";
        turno=true;
    }
    box.disabled=true;
    

     checkwinner();

    
  });
});
const showwinner = (winner) =>{
msg.innerHTML=`Congrats winner is ${winner} <i class="fa-solid fa-web-awesome fa-fade"></i>` ;
msgcontainor.classList.remove("hide");
};

const gameDraw = () => {
    msg.innerText = `Game was a Draw.`;
    msgcontainor.classList.remove("hide");
    disableboxes();
  };

const disableboxes = () =>{
    for(let box of boxes){
        box.disabled=true;

    }
    }
const enableboxes = () =>{
for(let box of boxes){
    box.disabled=false;
    box.innerText="";
}
}
const checkwinner = () =>{
    for(let pattern of winpattern)
    {
        // console.log(pattern[0],pattern[1],pattern[2]);
        // console.log(boxes[pattern[0]].innerText,boxes[pattern[1]].innerText,boxes[pattern[2]].innerText);
let pos1=boxes[pattern[0]].innerText;
let pos2=boxes[pattern[1]].innerText;
let pos3=boxes[pattern[2]].innerText;
        if(pos1 != "" &&pos2 != "" &&pos3 != "" ){
            if(pos1 === pos2 &&pos2 === pos3 ){
                // console.log("winner",pos1);
                showwinner(pos1);
                
                disableboxes();
                return;
            }
           
        }
            
    }  
};
newbtn.addEventListener("click",resetgame);
reset.addEventListener("click",resetgame);
