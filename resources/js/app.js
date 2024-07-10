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
// });

// === PASSWORD END ===