import "./styles.scss"

document.addEventListener("DOMContentLoaded", function () {

    const pluginDom = {
        wrapper: [...document.querySelectorAll('.exovid-wrapper')],
        iframes: [...document.querySelectorAll('.exovid-wrapper iframe')],
        masks: [...document.querySelectorAll('.exovid-wrapper .exovid-mask')]
    }
    pluginDom.wrapper.forEach((wrapper, index) => {
        const iframe = wrapper.querySelector('iframe')
        const mask = wrapper.querySelector('.exovid-mask')
        const loadOneBtn = wrapper.querySelector('.exovid-btn.exovid-load-one')
        const loadAllBtn = wrapper.querySelector('.exovid-btn.exovid-load-all')
        const infoBtn = wrapper.querySelector('.exovid-info-opener')
        const closeBtn = wrapper.querySelector('.exovid-info-closer')
        const infoBox = wrapper.querySelector('.exovid-info-box')

        loadOneBtn.addEventListener('click', () => {
            iframe.src = iframe.dataset.src;
            iframe.addEventListener("load", () => {
                mask.style.opacity = 0;
                setTimeout(() => mask.style.display = "none", 1900);
            })
        })
        if (loadAllBtn) {
            loadAllBtn.addEventListener('click', () => {
                pluginDom.iframes.forEach((iframe, index) => {
                    iframe.src = iframe.dataset.src
                    iframe.addEventListener("load", () => {
                        const mask = pluginDom.masks[index]
                        mask.style.opacity = 0;
                        setTimeout(() => mask.style.display = "none", 1900);
                    })
                })
            })
        }
        if (infoBtn) {
            infoBtn.addEventListener('click', () => {
                console.log(infoBox)
                infoBox.classList.add('exovid-infobox-show');
                infoBtn.style.visibility = "hidden";
            })
            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    infoBox.classList.remove('exovid-infobox-show');
                    infoBtn.style.visibility = "visible";
                })
            }
        }
    });
});


