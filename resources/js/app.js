import "./bootstrap";
import "bootstrap";

// === SIDEBAR START ===
document.querySelectorAll('.sidebar ul li').forEach(function(item) {
    item.addEventListener('click', function() {
        document.querySelector('.sidebar ul li.active')?.classList.remove('active');
        item.classList.add('active');
    });
});

document.querySelector('.close-btn').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.remove('active');
});

document.querySelector('.open-btn').addEventListener('click', function() {
    if(document.querySelector('.sidebar').classList.contains('active')){
        document.querySelector('.sidebar').classList.remove('active');
    } else {
        document.querySelector('.sidebar').classList.add('active');
    }
});

// === SIDEBAR END ===