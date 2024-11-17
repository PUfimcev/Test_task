class LimitTextariaLines{

    #plusElems;
    #minusElems;

    constructor(){
        const plusArr = document.querySelectorAll('.title-plus') || null;

        const minusArr = document.querySelectorAll('.title-minus') || null;

        if(!plusArr && !minusArr)  return;

        this.#plusElems = plusArr;
        this.#minusElems = minusArr;

        this.showHideElems();
    }

    showHideElems(){

        this.#plusElems.forEach((elem) =>{
            elem.addEventListener('click', (e)=>{
                const parentElem = (e.currentTarget).closest('.status-title');

                e.currentTarget.style = 'display: none';
                e.currentTarget.nextElementSibling.style = 'display: block';
                parentElem.nextElementSibling.style = 'display: block';


            });
        });

        this.#minusElems.forEach((elem) =>{
            elem.addEventListener('click', (e)=>{
                const parentElem = (e.currentTarget).closest('.status-title');

                e.currentTarget.style = 'display: none';
                e.currentTarget.previousElementSibling.style = 'display: block';
                parentElem.nextElementSibling.style = 'display: none';

            });
        });

    }
}

export default new LimitTextariaLines();
