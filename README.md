# Tech News – Custom WordPress Theme

## 📌 Project Overview

**Tech News** is a custom WordPress theme developed from scratch using PHP, CSS, JavaScript, and WordPress core functionality.

The theme is designed as a tech news and blog website featuring categorized posts, responsive navigation, testimonials, and contact functionality.

This project was created for learning and portfolio purposes, with multiple custom features implemented beyond tutorial content.

---

## 🚀 Key Features

- Custom WordPress theme (no page builders)
- Blog and category-based news layout
- Responsive design for desktop and mobile
- Sidebar with latest posts and links
- Contact form with enhanced user feedback
- Custom CSS animations

---

## 🆕 Custom Features (Beyond Tutorials)

### 1. Custom WP_Query on Front Page

- **File:** `front-page.php`
- **Screenshot:** `screenshots/front-page-ai.png`
- Displays only posts from the **“AI”** category
- Limited to the **two most recent posts**
- Implemented using `WP_Query`
- This functionality was researched and implemented independently

---

### 2. Animated Rainbow Gradient Site Title

- **Screenshot:** `screenshots/header-title.png`
- CSS animated rainbow gradient using `@keyframes`
- Adds a unique visual effect to the site header
- Fully custom CSS implementation

---

### 3. Responsive Mobile Menu Toggle

- **Files:** `script.js`, `header.php`
- **Screenshots:**
  - `screenshots/menu-mobile.png`
  - `screenshots/menu-mobile2.png`
- Mobile navigation toggle implemented using jQuery
- Improves usability on smaller screens
- Not included in the learning tutorials

---

### 4. Contact Form 7 Popup Messages

- **Screenshot:** `screenshots/cf7-popup.png`
- Custom JavaScript used to display popup messages on form submission
- Replaces default inline Contact Form 7 messages
- Handles both success and error states
- Fully custom implementation

---

## 🗂️ Theme Folder Structure

```text
technews/                  (WordPress theme folder)
│── style.css
│── functions.php
│── script.js
│── header.php
│── footer.php
│── sidebar.php
│── index.php
│── front-page.php
│── single.php
│── page.php
│── banner.jpg
│
├── screenshots/
│   ├── My-Features
│   ├── Home
│   ├── Gadgets
│   ├── AI
│   ├── Cybersecurity
│   ├── Contact-us
│   ├── Contact-details
│   └── News
│
└── README.md
```

---

🛠️ Technologies Used

PHP

WordPress

HTML5

CSS3

JavaScript / jQuery

MySQL

## Local development environment (XAMPP)

---

💻 Local Setup Instructions

Install XAMPP or another local server environment

Clone this repository:

git clone https://github.com/your-username/your-repo-name.git

Move the theme folder into:

wp-content/themes/
