form = document.querySelector('#form');
displayError = document.querySelector('#error');

if(form){
    
    form.addEventListener('submit', (e) =>{
        inputName = document.querySelector('#name').value;
        inputType = document.querySelector('#type').value;
        inputHp = document.querySelector('#hp').value;

        if(inputName === '' || inputName.length > 25 || inputHp < 0 || inputHp > 21){
            e.preventDefault();
            error.innerText= 'Formulaire invalide.';
        }

    });
}

btnRestart = document.querySelector('#restart');
btnNextBattle = document.querySelector('#nextBattle');

    if(btnRestart && btnNextBattle){

        btnRestart.addEventListener('click', (e) =>{
        window.location.replace('index.php');
        });
        
        btnNextBattle.addEventListener('click', (e) =>{
            window.location.reload();
        });

}



