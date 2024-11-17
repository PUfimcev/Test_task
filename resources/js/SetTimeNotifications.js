/**
 * Set timer of notification appearance
 */

class SetTimeNotifications {

    #notification;

    constructor(){
        this.#notification = document.getElementById('notifications') || null;

        if(this.#notification !== null){
            this.#resetNotification();
        }
    }

    async #setMoveNotification() {

        return new Promise((resolve)=>{
            setTimeout(()=>{
                if(this.#notification !== null){

                    resolve(this.#notification.style.top = "-45%");
                }
            }, 1200)}
        );
    }

    async #resetNotification() {
        try {
            await this.#setMoveNotification();
            setTimeout(()=>{
                this.#notification.remove();
            }, 500);
        } catch(error) {
            console.error(error);
          }
    };

}

export default new SetTimeNotifications();
