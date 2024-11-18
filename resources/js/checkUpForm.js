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

        document.querySelectorAll('.form-error').forEach((elem) => {
            elem.classList.remove('show');
        });
    }

    checkName(){
        this.#name.addEventListener('input', (e)=>{
            if(e.target.value.length >0) {
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
            };

            if(e.target.value.length == 0){
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
                this.disableCheckbox();
                this.disableForm();
            }
        })

        this.#name.addEventListener('focus', (e)=>{
            e.target.nextElementSibling.classList.remove('show');
            this.disableCheckbox();
            this.disableForm();

        })

        return (this.#name.value.length > 0) ? true : false;
    }

    checkLastName(){
        this.#lastName.addEventListener('input', (e)=>{
            if(e.target.value.length >0) {
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
            };

            if(e.target.value.length == 0){
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
                this.disableCheckbox();
                this.disableForm();
            }
        })

        this.#lastName.addEventListener('focus', (e)=>{
            e.target.nextElementSibling.classList.remove('show');
            e.target.nextElementSibling.innerHTML = '';
            this.disableCheckbox();
            this.disableForm();
        })

        return (this.#lastName.value.length > 0) ? true : false;
    }

    checkBirthDate(){
        this.#birthDate.addEventListener('input', (e)=>{
            if(e.target.value.length >0) {
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
            };

            if(e.target.value.length == 0){
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
                this.disableCheckbox();
                this.disableForm();
            }
        })

        this.#birthDate.addEventListener('focus', (e)=>{
            e.target.nextElementSibling.classList.remove('show');
            e.target.nextElementSibling.innerHTML = '';
            this.disableCheckbox();
            this.disableForm();

        })

        return (this.#birthDate.value.length > 0 && this.#birthDate.value.length == 10) ? true : false;
    }

    checkEmail(){
        this.#email.addEventListener('input', (e)=>{
            if(e.target.value.length >0) {
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
            };

            if(e.target.value.length == 0 && this.#phone.value.length > 0){
                e.target.nextElementSibling.classList.remove('show');
                e.target.nextElementSibling.innerHTML = '';
            }

            if(e.target.value.length == 0 && this.#phone.value.length == 0){
                e.target.nextElementSibling.innerHTML = '<span>Напишите email или номер телефона</span>';
                e.target.nextElementSibling.classList.remove('show');
                this.disableCheckbox();
                this.disableForm();
            }
        })

        this.#email.addEventListener('focus', (e)=>{
            e.target.nextElementSibling.classList.remove('show');
            this.disableCheckbox();
            this.disableForm();

        })

        return (this.#email.value.length > 0) ? true : false;
    }

    checkPhone(){
        this.#phone.addEventListener('input', (e)=>{
            if(e.target.value.length >0) {
                this.#email.nextElementSibling.classList.remove('show');
                this.#email.nextElementSibling.innerHTML = '';
            };

            if(e.target.value.length == 0 && this.#email.value.length > 0){
                this.#email.nextElementSibling.classList.remove('show');
                this.#email.nextElementSibling.innerHTML = '';
            }

            if(e.target.value.length == 0 && this.#email.value.length == 0){
                this.#email.nextElementSibling.innerHTML = '<span>Напишите email или номер телефона</span>';
                this.#email.nextElementSibling.classList.remove('show');
                this.disableCheckbox();
                this.disableForm();
            }
        })

        this.#phone.addEventListener('focus', ()=>{
            this.#email.nextElementSibling.classList.remove('show');
            this.disableCheckbox();
            this.disableForm();

        })

        return (this.#phone.value.length > 0 && this.#phone.value.length == 13) ? true : false;
    }

    checkCorrectInputEmail(){


        this.#email.addEventListener('change', (e)=>{

            let validationResult = null;

            if(e.target.value.length > 0) validationResult = this.validateEmail(e.target.value);

            if(!validationResult) {
                e.target.nextElementSibling.innerHTML = '<span>Не верно введен адрес эл.почты</span>';
                e.target.nextElementSibling.classList.add('show');
            }
        })
    }

    validateEmail(data = ''){
        if(!data) return;

        const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;

        return EMAIL_REGEXP.test(data);

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
                this.#name.nextElementSibling.innerHTML = '<span>Поле обязательно для заполнения</span>';
                this.#name.nextElementSibling.classList.add('show');
                this.disableCheckbox();
            }

            if(!this.checkLastName()) {
                this.#lastName.nextElementSibling.innerHTML = '<span>Поле обязательно для заполнения</span>';
                this.#lastName.nextElementSibling.classList.add('show');
                this.disableCheckbox();
            }

            if(!this.checkBirthDate()) {
                this.#birthDate.nextElementSibling.innerHTML = '<span>Поле обязательно для заполнения</span>';
                this.#birthDate.nextElementSibling.classList.add('show');
                this.disableCheckbox();
            }

            if(!this.checkEmail() && !this.checkPhone()) {
                this.#email.nextElementSibling.innerHTML = '<span>Напишите email или номер телефона</span>';
                this.#email.nextElementSibling.classList.add('show');
                this.disableCheckbox();
            } else {
                this.#email.nextElementSibling.classList.remove('show');
                this.#email.nextElementSibling.innerHTML = '';
            }

            (e.currentTarget.checked) ? this.enableButton() : this.disableButton();
        });
    }

}

export default new CheckUpForm();
