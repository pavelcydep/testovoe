require('./bootstrap');

import Popup from './popup';

const tbody =  document.querySelector('.my-table__tbody');
const buttonAdd= document.querySelector('.button__add');
const popupTask= document.querySelector('.popup');
const popupTaskAdd = new Popup(popupTask,buttonAdd);
const buttonAtributAdd= document.querySelector('.popup__btn');
const popupDoubleInput=document.querySelector('.poput__atribut');
popupTaskAdd.openClose();

buttonAtributAdd.addEventListener('click' ,
()=>popupDoubleInput.classList.remove('display-none'));
