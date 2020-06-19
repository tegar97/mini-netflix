document.querySelector('.menu-btn').addEventListener('click',() => {
    document.querySelector('.main-menu').classList.toggle('show')
})


//dark mode 

//check for saved 'darkMode' in localStorage

let darkMode = localStorage.getItem('darkMode')

const darkModeToggle = document.querySelector("#dark-mode-toggle")

const enableDarkMode = () => {
    //Add the ckass to the body
    document.body.classList.add('darkmode')
    //update darkmode in localStorage 
    localStorage.setItem('darkMode', 'enabled');
}

const disableDarkMode = () => {
    //1.remove the class from the body
    document.body.classList.remove('darkmode');
    //2.update dark mode in localStorage
    localStorage.setItem('darkMode',null)
}

//if the user already visited and enabled dark mode

//start things off with it on

if(darkMode == 'enabled') {
    enableDarkMode();
}

//when someone clicks the button
darkModeToggle.addEventListener('click',() => {
    //get their darkMode setting

    darkMode = localStorage.getItem('darkMode')

        // if it not current enabled, enable it
    if (darkMode !== 'enabled') {
        enableDarkMode();
    // if it has been enabled, turn it off  
    } else {  
        disableDarkMode(); 
    }
})



