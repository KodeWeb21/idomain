const btn = document.querySelector('.btn');
const inputUser = document.querySelector('.form__input');
const form = document.querySelector('.form');
let messageError = false;
const csrfInput = document.getElementById("token");
const errormsg = document.querySelector(".errormsg");
const templateCard = document.querySelector(".template");
const domainsContainer = document.querySelector(".domainscontainer");
const loader = document.querySelector(".loader");
let copyStatus = false;
const activeLoader = () =>{
    loader.classList.remove("loader--hidden");
}

const disableLoading = () =>{
    loader.classList.add("loader--hidden");
}

const drawError = (error) =>{
    errormsg.textContent = error;
}

const deleteError = () =>{
    errormsg.textContent = "";
}

const traverseDomains = ({domains}) =>{
    const fragment = document.createDocumentFragment();
    domains.forEach(domain => drawDomainsCards(domain,fragment));
    domainsContainer.appendChild(fragment);
}

const drawDomainsCards = (domain, fragment) =>{
    const cardClone = templateCard.content.cloneNode(true);
    const cardText = cardClone.querySelector('.card__text');
    cardText.textContent = domain;
    fragment.appendChild(cardClone);
}

const deleteOldDomains = () =>{
    const numberOfDomains = domainsContainer.childElementCount;
    if(numberOfDomains <= 0) return;
    domainsContainer.innerHTML = "";
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

   deleteOldDomains();
   activeLoader();
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
    disableLoading();
    traverseDomains(domains);
}

const copyElement = async (textCopy) =>{
    if(textCopy.trim() === "") return
    try{
        await navigator.clipboard.writeText(textCopy);
    }catch(error){
        throw new Error("No se pudo copiar el texto al portapapeles");
    }
}

const activeMessageCopy = (element) =>{
    element.classList.remove("copy--hidden")
}

const disabledMessageCopy = (element) =>{
    setTimeout(()=>{
        element.classList.add("copy--hidden");
        copyStatus = false;
    },1000)
}

domainsContainer.addEventListener('click',(e)=>{
    const element = e.target;
    if(element.matches(".copy__btn") || element.matches(".copy__btn > *")){
      if(copyStatus) return;
      copyStatus = true;
      const card = element.parentElement.parentElement;
      const copyText = element.previousElementSibling;
      const cardText = card.querySelector(".card__text").textContent;
      copyElement(cardText);
      activeMessageCopy(copyText);
      disabledMessageCopy(copyText)    
    }
})