require('./bootstrap');
import Table from './table';
import Popup from './popup';

const tbody =  document.querySelector('.my-table__tbody');
const buttonAdd= document.querySelector('.button__add');
const popupTask= document.querySelector('.popup');
const popupTaskAdd = new Popup(popupTask,buttonAdd);
const buttonAtributAdd= document.querySelector('.popup__btn');
const popupDoubleInput=document.querySelector('.poput__atribut');
popupTaskAdd.openClose();


const renderAtribut=()=>{

    const poputDoubleInputName = document.createElement('div');
    poputDoubleInputName.classList.add('poput__double-input');
    const button= document.createElement('button');
    const labelName= document.createElement('label');
    const labelValue= document.createElement('label');
    const inputName=document.createElement('input');
    const inputValue=document.createElement('input');
    labelName.classList.add('popup__subtitle');
    labelValue.classList.add('popup__subtitle');
    inputName.classList.add('popup__input_double-input');
    inputValue.classList.add('popup__input_double-input');
    poputDoubleInputName.appendChild(labelName);
    poputDoubleInputName.appendChild(labelValue);
    poputDoubleInputName.appendChild(inputName);
    labelName.textContent='Название';

    poputDoubleInputName.appendChild(labelName);
    poputDoubleInputName.appendChild(inputValue);
    labelValue.textContent='Значение';
    return poputDoubleInputName;
}
const atributAdd=()=>{
    const poputDouble = renderAtribut();
    popupDoubleInput.appendChild(poputDouble);
}
buttonAtributAdd.addEventListener('click',atributAdd);