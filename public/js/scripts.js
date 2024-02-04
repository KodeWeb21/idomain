const btn = document.querySelector('.btn');
const inputUser = document.querySelector('.form__input');
const form = document.querySelector('.form');
let messageError = false;
const errormsg = document.querySelector(".errormsg");

const drawError = (error) =>{
    errormsg.textContent = error;
}

const deleteError = () =>{
    errormsg.textContent = "";
}

const validateInput = (inputValue) =>{
    if(inputValue.trim() === "" ){
        messageError = "The input cannot be empty";
        return false;
    }
    if(inputValue.length < 3){
        messageError = "input must be at least 3 characters long";
        return false;

    }
    return true;
}

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const inputvalue = inputUser.value;
    console.log(inputvalue);
    const isvalidate = validateInput(inputvalue)
   if(!isvalidate){
        drawError(messageError);
        return;
   }

   if(messageError) deleteError();
   
   console.log("Todo bien con el input")
})