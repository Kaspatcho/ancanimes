const switchOptions = document.querySelectorAll('.switch-container .switch-nav-option')

for (const button of switchOptions) {
    button.addEventListener('click', function() {
        const selected = document.querySelector('.switch-container .switch-form.selected')
        const target = document.querySelector(`.switch-container .switch-form#${this.dataset.target}`)

        selected.classList.remove('selected')
        target.classList.add('selected')
    })
}