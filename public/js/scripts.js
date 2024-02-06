const btn = document.querySelector('.btn');
const inputUser = document.querySelector('.form__input');
const form = document.querySelector('.form');
let messageError = false;
const csrfInput = document.getElementById("token");
const errormsg = document.querySelector(".errormsg");
const templateCard = document.querySelector(".template");
const main = document.querySelector(".main");

const drawError = (error) =>{
    errormsg.textContent = error;
}

const deleteError = () =>{
    errormsg.textContent = "";
}

const traverseDomains = ({domains}) =>{
    const fragment = document.createDocumentFragment();
    domains.forEach(domain => drawDomainsCards(domain,fragment));
    domains.forEach(domain => console.log(domain));
    main.appendChild(fragment);
}

const drawDomainsCards = (domain, fragment) =>{
    const cardClone = templateCard.content.cloneNode(true);
    const cardText = cardClone.querySelector('.card__text');
    cardText.textContent = domain;
    fragment.appendChild(cardClone);
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
    const isvalidate = validateInput(inputvalue)
   if(!isvalidate){
        drawError(messageError);
        return;
   }
   if(messageError) deleteError();
   
   const formData = new FormData(form);
   getData("/domain",formData);
})

const getData = async (url,data) =>{
    const response = await fetch(url,{
        method: "POST",
        body: data,
        headers: {
            "X-CSRF-TOKEN": token.value,
        }
    });

    const domains = await response.json();
    traverseDomains(domains);
}