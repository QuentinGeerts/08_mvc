window.onload = function () {

    const tabImages = [
        "plaid_1.png",
        "plaid_2.png",
        "plaid_3.png",
        "plaid_4.png",
    ];

    let i = 1;

    let diapo = setInterval(() => {
        if (i == tabImages.length) i = 0
        slide(tabImages[i++])
    }, 3000);

    const image = document.getElementById('slider-image')
    image.onmouseover = function () {
        clearInterval(diapo)
    }
    image.onmouseout = function () {
        diapo = setInterval(() => {
            if (i == tabImages.length) i = 0
            slide(tabImages[i++])
        }, 3000);
    }

};

function slide (nextImage) {
    const slider_image = document.getElementById('slider-image');
    console.log('slider_image :>> ', slider_image);
    slider_image.setAttribute('src', `public/images/${nextImage}`)

}