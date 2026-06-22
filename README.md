
# NaVibhav's Kitchen

### A Cinematic Full-Stack Restaurant Website

Vibhav's Kitchen is a modern restaurant website built using HTML, Tailwind CSS, GSAP animations, and a PHP backend.
It uses scroll-telling and cinematic transitions to create an immersive user experience.

---

## Project Overview

Vibhav's Kitchen aims to redefine restaurant websites by combining smooth animations, scroll-triggered effects, video transitions, and responsive layouts.
The homepage features an autoplay intro video that transitions into an animated slideshow. All pages include GSAP-based animations and modern UI design patterns.

The backend is developed using PHP to securely process user messages submitted through the contact form.

---

## Key Features

* Cinematic hero section with video-to-slideshow transition
* GSAP-based scroll animations and parallax effects
* Categorized interactive menu with sticky navigation
* Functional PHP backend for contact form submissions
* Fully responsive design for all devices
* Magazine-style About page layout with horizontal timeline

---

## Technology Stack

### Frontend

* HTML5
* CSS3
* Tailwind CSS
* GSAP (GreenSock Animation Platform)

### Backend

* PHP 8.0+

### Server

* Apache (through XAMPP)

---

## Project Structure

```
vibhavs-kitchen/
├── index.html            # Homepage with video-to-slideshow animation
├── about.html            # About page with timeline
├── menus.html            # Menu page with categories and sticky navbar
├── contact.html          # Contact form page
├── contact_handler.php   # PHP backend for form processing
├── success.html          # Success page after form submission
├── failure.html          # Error page for failed submission
├── intro.mp4             # Hero video file
└── res/                  # Images and media assets
```

---

## Getting Started (Local Setup)

To run the project locally, you need a PHP-enabled server environment such as XAMPP, WAMP, or MAMP.

### Prerequisites

Install XAMPP.

### Installation Steps

1. Clone the repository

   ```
   git clone https://github.com/Vijaykumar-1121/navibhavs-kitchen.git
   ```

2. Move the project folder to the server directory

   ```
   C:\xampp\htdocs\
   ```

3. Start the Apache server from the XAMPP Control Panel.

4. Open the project in your browser

   ```
   http://localhost/vibhavs-kitchen/index.html
   ```

---

## Contact Form Configuration

To make the contact form functional in production:

1. Open `contact_handler.php`
2. Update the email address

   ```php
   $recipient_email = "your-email@example.com";
   ```
3. Ensure SMTP email service is configured on your hosting (cPanel recommended).

---


