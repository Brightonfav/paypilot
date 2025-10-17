import './bootstrap';
import './home.js';
import AOS from 'aos';
import 'aos/dist/aos.css';
import * as lucide from "lucide";

// ✅ Initialize Lucide Icons
document.addEventListener("DOMContentLoaded", () => {
  lucide.createIcons();
});

// ✅ Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', () => {
  AOS.init({
    duration: 1000, // animation duration in ms
    once: true,     // only animate once per element
    offset: 100,    // trigger distance before element
  });
});
