import "./bootstrap";
import "bootstrap";

// === SIDEBAR START ===
const sideBarListActive = document.querySelectorAll('.sidebar ul li')
if(sideBarListActive){
    sideBarListActive.forEach(function(item) {
        item.addEventListener('click', function() {
            document.querySelector('.sidebar ul li.active')?.classList.remove('active');
            item.classList.add('active');
        });
    });
}

const sideBarCloseBtn = document.querySelector('.close-btn');
if(sideBarCloseBtn){
    sideBarCloseBtn.addEventListener('click', function() {
        document.querySelector('.sidebar').classList.remove('active');
    });
}

const sideBarOpenBtn = document.querySelector('.open-btn');
if (sideBarOpenBtn) {
    sideBarOpenBtn.addEventListener('click', function() {
        if(document.querySelector('.sidebar').classList.contains('active')){
            document.querySelector('.sidebar').classList.remove('active');
        } else {
            document.querySelector('.sidebar').classList.add('active');
        }
    });
}

// === SIDEBAR END ===

// === DROPDOWN START ===

const dropdownImage = document.getElementById('profileImage')
const dropdownSubmenu = document.getElementById('subMenu')
if(dropdownImage && dropdownSubmenu){
    dropdownImage.addEventListener('click', () => {
        dropdownSubmenu.classList.toggle('open-menu')
    })
}

const subMenuLink = document.querySelector('.sub-menu-link');
const arrowIcon = document.querySelector('.bi-caret-right');
if (arrowIcon && subMenuLink) {
    subMenuLink.addEventListener('mouseover', () =>{
        arrowIcon.classList.remove('bi-caret-right');
        arrowIcon.classList.add('bi-caret-right-fill');
    })
    subMenuLink.addEventListener('mouseout', () =>{
        arrowIcon.classList.add('bi-caret-right');
        arrowIcon.classList.remove('bi-caret-right-fill');
    })
}

// === DROPDOWN END ===


// === PASSWORD START ===
// document.addEventListener('DOMContentLoaded', () => {

const togglePassword = document.querySelector('.passwordIconPlace');
const password = document.querySelector('.passwordInputPlace');
if (togglePassword &&password) {
    
    togglePassword.addEventListener('click', () => {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        togglePassword.classList.toggle('bi-eye-fill');
        togglePassword.classList.toggle('bi-eye-slash-fill');
        togglePassword.classList.toggle('opacity-75');
        togglePassword.classList.toggle('opacity-100');
    });
}
const togglePassword2 = document.querySelector('.passwordIconPlace2');
const password2 = document.querySelector('.passwordInputPlace2');
if (togglePassword2 &&password2) {
    
    togglePassword2.addEventListener('click', () => {
        const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type);
        togglePassword2.classList.toggle('bi-eye-fill');
        togglePassword2.classList.toggle('bi-eye-slash-fill');
        togglePassword2.classList.toggle('opacity-75');
        togglePassword2.classList.toggle('opacity-100');
    });
}
// });

// === PASSWORD END ===