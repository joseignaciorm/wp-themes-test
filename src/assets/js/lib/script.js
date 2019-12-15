const btnAdvanceSearch = document.getElementById('btn-advanceSearch'),
    hiddenItems = document.getElementById('hiddenItems'),
    fields = document.getElementById('fields'),
    bodyEnter = document.querySelector('body')

btnAdvanceSearch.addEventListener('mouseover', () => {
    hiddenItems.classList.add('active')
})

hiddenItems.addEventListener('mouseleave', () => {
    hiddenItems.classList.remove('active')
})

bodyEnter.addEventListener('mouseenter', () => {
    hiddenItems.classList.remove('active')
})