const burgerButton = () => {
    const burger = document.querySelector('.burger')
    const menu = document.querySelector('.mobile__menu')
    const mobileButton = document.querySelector('.mobile__button')

    burger.addEventListener('click', () => {
        document.body.style.overflow = 'hidden';
        menu.classList.add('mobile-active')
    })

    mobileButton.addEventListener('click', () => {
        document.body.style.overflow = '';
        menu.classList.remove('mobile-active')
    })
}

burgerButton()