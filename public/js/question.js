const $boxList = document.querySelector('.box__list');
const classHeader = "question__header";
const classAction = "section--hidden";


const toogleHidden = (parent) =>{
    const $questionBody = parent.querySelector('.question__body');
    $questionBody.classList.toggle(classAction)
}

$boxList.addEventListener('click',(e)=>{
    const target = e.target;
    console.log(target);
    console.log(classHeader);
    if(target.matches('.question__header') || target.matches('.question__header > *')) toogleHidden(target.closest('.question'))
})