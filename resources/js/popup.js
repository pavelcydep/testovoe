export default class Popup {
	constructor(popup,buttonElement) {
		this.popup=popup;
        this.buttonElement=buttonElement;
	}

	openClose () {
		
        this.buttonElement.addEventListener('click',()=>{
            this.popup.classList.toggle('popup_is-opened');
           console.log('hi');
        });
    }
      
}
