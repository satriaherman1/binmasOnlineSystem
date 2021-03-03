window.onload = function(){
    const body = document.querySelector('body');
    const logo = document.querySelector('span.logo-lg')

    setInterval( () => {
        if(body.classList.contains('sidebar-collapse')){
            logo.innerHTML = `<h5> BOS </h5>`
        }
        else{
            logo.innerHTML = `<h5>Binmas Online System</h5>`
        }
        
    } , 100)
}