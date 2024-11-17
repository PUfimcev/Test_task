class MaskSetDateOfBirth{

    #inputDateOfBirth = null;

    constructor(){
        const inputField = document.querySelector('#birthdate');

        if(inputField !== null){

            this.#inputDateOfBirth = inputField;
        }
        this.#transfigureInputValue();
    }

    #transfigureInputValue(){

        if( this.#inputDateOfBirth !== null){

            this.#inputDateOfBirth.addEventListener('input', (e) => {this.#handleInput(e)});
        }
    }

    #handleInput(e){

        e.currentTarget.value = this.#useMaskPhone(e.currentTarget.value).slice(0, 11);
    }

    #useMaskPhone(data){
        return data.replace(/\D/g, '')
        .replace(/^(\d{2})(\d)/g, '$1.$2')
        .replace(/^(\d{2}\.\d{2})(\d)/g, '$1.$2')
        .replace(/^(\d{2}\.\d{2}\.\d{4})(\d+?)/g, '$1');
    }
}

export default new MaskSetDateOfBirth();
