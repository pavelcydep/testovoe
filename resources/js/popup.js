export default class Popup {
	constructor(popup,buttonElement) {
		this.popup=popup;
        this.buttonElement=buttonElement;
        this.popup.querySelector('.popup__close').addEventListener("click", () => this.close());
	}

	openClose () {
		
        this.buttonElement.addEventListener('click',()=>{
            this.popup.classList.toggle('popup_is-opened');
           console.log('hi');
        });
    }
    close() {
		this.popup.classList.remove('popup_is-opened');
	}
}
