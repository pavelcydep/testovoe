export default class Table{
	constructor( products,tbody) {
	
        this.data = products;
       this.tbody = tbody;
      
	}

    renderTableApi(){
for (const product of this.data) {
       const tr = this.tbody.insertRow();
        tr.insertCell().textContent = product.id;
        tr.insertCell().textContent = product.name;
        tr.insertCell().textContent = product.status ;
        tr.insertCell().textContent = product.atribut;
        
}}
     
}