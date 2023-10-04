const elmMenuMb = document.querySelectorAll('.menu-item-mb')
const elmMenuMbRoot = document.querySelector('.menu-mobile')
const menuBugger = document.querySelector('.menu-bugger')

menuBugger.addEventListener('click', () => {
    elmMenuMbRoot.classList.add('!flex')
})
for (let index = 0; index < elmMenuMb.length; index++) {
    elmMenuMb[index].addEventListener('click', () => {
        elmMenuMbRoot.classList.remove('!flex')
    })
}