function openModal() {
    var modal = document.getElementById('modal-card')
    if (modal.style.display == 'none') {
        modal.style.display = 'block'
    } else if (modal.style.display == 'block') {
        modal.style.display = 'none'
    } else {
        modal.style.display = 'block'
    }
}