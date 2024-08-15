// Target all the classes and ids for further use
let userscore =0;
let computerscore=0;
const choices = document.querySelectorAll(".choice");
const msg = document.querySelector("#msg");
const user = document.querySelector("#user");
const comp = document.querySelector("#computer");

// Generate computer choice using a built in function 
const gencompchoice =() =>{
    // stored the choices in an array
    let options =["rock","paper","scissor"];
    //generate the whole number from 0 to 2 
   let num = Math.floor(Math.random()*3);
   //using the generated number as an index to access the array element
    return options[num];
}

//show the winner update the message and score
const showwinner =(userwin, userchoice,compchoice)=>{

if(userwin)
{
    console.log("you win");
    msg.innerText = `YOU WIN! Your ${userchoice} beats ${compchoice}`;
    msg.style.backgroundColor="green";
    userscore++;
    user.innerText=userscore;
}
else{
    console.log("you lose");
    msg.innerText = `YOU LOSE! ${compchoice} beats Your ${userchoice}`;
    msg.style.backgroundColor="red";

    computerscore++;
    comp.innerText=computerscore;
}
}

// draw game
const drawgame =(userchoice,compchoice)=>{
    console.log("Game is Draw");
    msg.innerText = `GAME DRAW  ${userchoice} = ${compchoice}`;
    msg.style.backgroundColor="#081b31";

}

// main function condition check
const playgame = (userchoice)=>{
        console.log("user choise is ", userchoice);
    // computer choice generator
    const compchoice = gencompchoice();
    console.log("computer choise is ", compchoice);

if(userchoice === compchoice){
    drawgame(userchoice,compchoice);
}
else{
    let userwin =true;
    if(userchoice ==="rock"){
        userwin = compchoice === "paper" ? false :true ;
        
    } 
    else if(userchoice ==="paper")
    {
        userwin= compchoice === "scissor" ? false :true;
    }
    else
    {
        userwin= compchoice === "rock" ? false :true;
    }
    showwinner(userwin,userchoice,compchoice);
}
}

// Access the user choice using event listener and get the user choice using the id assigned to the choice
choices.forEach((choice) => {
    choice.addEventListener("click", ()=>{
        const userchoice= choice.getAttribute("id");
        // console.log("choice is clicked", userchoice);
        playgame(userchoice);
    });
});
