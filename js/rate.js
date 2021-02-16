
const container = document.querySelector('.rating');
    const items = container.querySelectorAll('.rating-item')
    container.onclick = e => {
        const elClass= e.target.classList;
        if (!elClass.container('active')){
            items.forEach(
                item => item.classList.remove('active')
                );
            console.log(e.target.getAttribute("date-rate"));
            elClass.add('active');
        }
    };

