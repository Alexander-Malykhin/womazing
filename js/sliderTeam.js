const sliderTeam = () => {
    const buttonLeft = document.querySelector('.slider__button-left')
    const buttonRight = document.querySelector('.slider__button-right')
    const sliders = document.querySelectorAll('.team__sliders-item')
    const dots = document.querySelectorAll('.slider__dots-item')

    const countSlider = sliders.length - 1;
    let count = 0;

    const clearActive = (arr, active) => {
        arr.forEach(item => {
            item.classList.remove(active)
        })
    }

    const addActive = (arr, active) => {
        arr.forEach((item, index) => {
            if (count === index) item.classList.add(active)
        })
    }

    const updateSlider = () => {
        clearActive(dots, 'slider__active');
        addActive(dots, 'slider__active');
        clearActive(sliders, 'slider__active');
        addActive(sliders, 'slider__active');
    };

    if (buttonRight) {
        buttonRight.addEventListener('click', () => {
            count >= countSlider ? count = 0 : count++
            updateSlider()
        })
    }

    if (buttonLeft) {
        buttonLeft.addEventListener('click', () => {
            count <= 0 ? count = countSlider : count--
            updateSlider()
        })
    }

    if (dots) {
        dots.forEach((item, index) => {
            item.addEventListener('click', () => {
                count = index
                updateSlider()
            })
        })
    }

    setInterval(() => {
        count = count >= countSlider ? 0 : count + 1;
        updateSlider()
    }, 3000)
}

sliderTeam()