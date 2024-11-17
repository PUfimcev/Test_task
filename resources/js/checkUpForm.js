class CheckUpForm{

    #checkboxElem;
    #sendButton;
    #name;
    #lastName;
    #birthDate;
    #email;
    #phone;

    constructor(){
        const checkbox = document.querySelector('#remember');
        const button = document.querySelector('.form_btn');
        const name = document.querySelector('#name');
        const lastName = document.querySelector('#last_name_input');
        const birthDate = document.querySelector('#birthdate');
        const email = document.querySelector('#email');
        const phone = document.querySelector('#phone');

        if(!checkbox && !button) return;

        this.#checkboxElem = checkbox || null;
        this.#sendButton = button || null;
        this.#name = name ;
        this.#lastName = lastName || null;
        this.#birthDate = birthDate || null;
        this.#email = email || null;
        this.#phone = phone || null;

        this.disableButton();
        this.toggleCheckbox();
        this.checkName();
        this.checkLastName();
        this.checkBirthDate();
        this.checkEmail();
        this.checkPhone();
        this.checkCorrectInputEmail();

    }

    disableButton(){
        this.#sendButton.disabled = true;
    }

    enableButton(){
        this.#sendButton.disabled = false;
    };

    disableForm(){

        if(this.#birthDate.value.length == 0 && this.#lastName.value.length == 0 && this.#name.value.length == 0) {
            document.querySelectorAll('.form-error').forEach((elem) => {
                elem.style = 'display: none';
            });

        }
    }

    checkName(){
        this.#name.addEventListener('input', (e)=>{
            (e.target.value.length > 0) && (e.target.nextElementSibling.style = 'display: none');

            if(e.target.value.length == 0){
                this.#name.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
                this.disableForm();
            }
        })

        return (this.#name.value.length > 0) ? true : false;
    }

    checkLastName(){
        this.#lastName.addEventListener('input', (e)=>{
            (e.target.value.length >0) && (e.target.nextElementSibling.style = 'display: none');

            if(e.target.value.length == 0){
                this.#lastName.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
                this.disableForm();
            }
        })

        return (this.#lastName.value.length > 0) ? true : false;
    }

    checkBirthDate(){
        this.#birthDate.addEventListener('input', (e)=>{
            (e.target.value.length >0) && (e.target.nextElementSibling.style = 'display: none');

            if(e.target.value.length == 0){
                this.#birthDate.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
                this.disableForm();
            }
        })

        return (this.#birthDate.value.length > 0 && this.#birthDate.value.length == 10) ? true : false;
    }

    checkEmail(){
        this.#email.addEventListener('input', (e)=>{
            if(e.target.value.length >0) {
                e.target.nextElementSibling.style = 'display: none';
                this.#phone.nextElementSibling.style = 'display: none';
            };

            if(e.target.value.length == 0 && this.#phone.value.length > 0){
                e.target.nextElementSibling.style = 'display: none';
                this.#phone.nextElementSibling.style = 'display: none';
            }

            if(e.target.value.length == 0 && this.#phone.value.length == 0){
                e.target.nextElementSibling.style = 'display: block';
                this.#phone.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
            }
        })

        return (this.#email.value.length > 0) ? true : false;
    }

    checkPhone(){
        this.#phone.addEventListener('input', (e)=>{
            if(e.target.value.length >0) {
                e.target.nextElementSibling.style = 'display: none';
                this.#email.nextElementSibling.style = 'display: none';
            };

            if(e.target.value.length == 0 && this.#email.value.length > 0){
                e.target.nextElementSibling.style = 'display: none';
                this.#email.nextElementSibling.style = 'display: none';
            }

            if(e.target.value.length == 0 && this.#email.value.length == 0){
                e.target.nextElementSibling.style = 'display: block';
                this.#email.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
            }
        })

        return (this.#phone.value.length > 0 && this.#phone.value.length == 13) ? true : false;
    }

    checkCorrectInputEmail(){
        this.#email.addEventListener('input', (e)=>{
            document.querySelector('.form-error.email-error').style = 'display: none';
        })

        return false;
    }


    disableCheckbox(){
        this.#checkboxElem.checked = false;
        this.disableButton();
    }

    enableCheckbox(){
        this.enableButton();
    }

    toggleCheckbox(){
        this.#checkboxElem.addEventListener('change', (e)=>{

            if(!this.checkName()) {
                this.#name.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
            }

            if(!this.checkLastName()) {
                this.#lastName.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
            }

            if(!this.checkBirthDate()) {
                this.#birthDate.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
            }

            if(!this.checkEmail() && !this.checkPhone()) {
                this.#email.nextElementSibling.style = 'display: block';
                this.#phone.nextElementSibling.style = 'display: block';
                this.disableCheckbox();
            } else {
                this.#email.nextElementSibling.style = 'display: none';
                this.#phone.nextElementSibling.style = 'display: none';
            }

            if(!this.checkCorrectInputEmail()){
                document.querySelector('.form-error.email-error').style = 'display: block';
                this.disableCheckbox();
            }

            (e.currentTarget.checked) ? this.enableButton() : this.disableButton();
        });
    }

}

export default new CheckUpForm();
