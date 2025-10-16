import './bootstrap';
import './home.js';
import AOS from 'aos';
import 'aos/dist/aos.css';

// ✅ Initialize AOS
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1000, // animation duration in ms
        once: true,     // whether animation should happen only once
        offset: 100,    // distance to start the animation
    });
});

import lucide from "lucide";
lucide.createIcons();

