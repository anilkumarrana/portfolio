// menu dropdown
function togglemenu(){
    const menuContainer = document.getElementById('menu');
    menuContainer.classList.toggle('active');
}

function closemenu(){
    document.getElementById('menu').style.display = "none";
}

// Get In Touch 

function toggleLogin(){
    document.getElementById('info').style.display = "block";
}

function closeLogin(){
    document.getElementById('info').style.display = "none";
}

// video play and pause 

function playvideo(){
    document.getElementById('video').style.display = "block";
    
}

function pausevideo(){
    document.getElementById('video').style.display = "none"
}

// Handle all clicks outside of modals
window.addEventListener('click', function(event) {
    const menu = document.getElementById('menu');
    const infoModal = document.getElementById('info');
    const video = document.getElementById('video');

    // Close info modal if clicking outside the box
    if (event.target === infoModal) {
        infoModal.style.display = 'none';
    }
    if (event.target === video) {
        video.style.display = 'none';
    }
});
// Data save alert

function showMessage(){
    alert("Thank You! Your data has been  Submitted Successfully");
}

// Typewriter Effect
const words = ["Clean Code.", "Modern UI.", "Scalable Apps.", "Fast Performance."];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
    const typewriterEl = document.getElementById("typewriter");
    if (!typewriterEl) return;

    currentWord = words[i];
    if (isDeleting) {
        typewriterEl.textContent = currentWord.substring(0, j - 1);
        j--;
        if (j === 0) {
            isDeleting = false;
            i = (i + 1) % words.length;
        }
    } else {
        typewriterEl.textContent = currentWord.substring(0, j + 1);
        j++;
        if (j === currentWord.length) {
            isDeleting = true;
        }
    }
    setTimeout(type, isDeleting ? 100 : 200);
}

function initRevealAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
}

// Testimonial Slider Logic
let currentTestimonial = 0;
function moveSlider(direction) {
    const slider = document.getElementById('testimonialSlider');
    const cards = document.querySelectorAll('.testimonial-card');
    const total = cards.length;
    if (total === 0 || !slider) return;
    
    currentTestimonial = (currentTestimonial + direction + total) % total;
    slider.style.transform = `translateX(-${currentTestimonial * 100}%)`;
}

function initParallax() {
    window.addEventListener('scroll', () => {
        const watermark = document.querySelector('.bg-watermark');
        if (watermark) {
            const scrollValue = window.scrollY;
            // The 0.15 multiplier controls the speed. Lower = subtler.
            watermark.style.transform = `translate(-50%, calc(-50% + ${scrollValue * 0.15}px))`;
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    type();
    initRevealAnimations();
    initParallax();
});
