# 📰 Tech News – Custom WordPress Theme

## 📌 Project Overview

**Tech News** is a fully custom WordPress theme developed from scratch using **PHP, WordPress core, HTML5, CSS3, JavaScript (jQuery), and MySQL**.

The theme is designed as a modern tech news and blog website featuring categorized posts, dynamic content rendering, responsive navigation, testimonials, and enhanced contact functionality.

This project was built for learning and portfolio purposes, with multiple custom features implemented beyond tutorial material.

---

# 🌟 Project Preview

![Home Preview](/scrrenshots/Home/front-page-ai.png)

---

# 🚀 Key Features

- Custom WordPress theme (no page builders)
- Blog and category-based news layout
- Fully responsive design (desktop + mobile)
- Sidebar with latest posts
- Custom WP_Query implementation
- Mobile navigation toggle (jQuery)
- Contact Form 7 popup message enhancement
- Custom CSS animations
- Clean file structure

---

# 🆕 Custom Features (Beyond Tutorials)

---

## 1️⃣ Custom WP_Query on Front Page

**File:** `front-page.php`

- Displays posts from the **AI category**
- Limited to the **two most recent posts**
- Implemented using a custom `WP_Query`
- Independently researched and implemented

![AI Category Preview](/scrrenshots/AI/ai_category.png)

---

## 2️⃣ Animated Rainbow Gradient Site Title

- Custom CSS animation using `@keyframes`
- Gradient text animation applied to site title
- Fully handcrafted styling

![Preview](/scrrenshots/My-Features/header-title.png)

---

## 3️⃣ Responsive Mobile Menu Toggle

**Files:** `script.js`, `header.php`

- jQuery-based toggle functionality
- Enhances usability on smaller screens
- Not part of tutorial content

![Mobile menu Preview](/scrrenshots/My-Features/menu-mobile.png)
 ![Mobile menu Preview 2](/scrrenshots/My-Features/menu-mobile2.png)

---

## 4️⃣ Contact Form 7 Popup Messages

- Custom JavaScript intercepts submission response
- Replaces default inline CF7 messages
- Handles both success and error states

![Preview](/scrrenshots/My-Features/cf7-popup.png)

### Error State

![Preview](/scrrenshots/Contact-us%20/error_message.png)


### Success State

![Preview](/scrrenshots/Contact-us%20/submit_message.png)

---

# 🗂 Category Pages

## 🤖 AI Category

![Preview](/scrrenshots/AI/ai_category.png)

## 📱 Gadgets Category

![Preview](/scrrenshots/Gadgets/gadgets_category.png)



---

# 🗂 Theme Folder Structure

```text
technews/
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
│   ├── AI/
│   ├── Contact-details/
│   ├── Contact-us/
│   ├── Cybersecurity/
│   ├── Gadgets/
│   ├── Home/
│   ├── My-Features/
│   └── News/
│
└── README.md
```

---

# 🛠 Technologies Used

- PHP  
- WordPress  
- HTML5  
- CSS3  
- JavaScript / jQuery  
- MySQL  
- XAMPP (Local Development)

---

# 💻 Local Setup Instructions

1. Install XAMPP (or another local server environment)
2. Clone this repository:

```bash
git clone https://github.com/BitaYeganeh/WordPress-PHP-Project---Tech-News.git
```

3. Move the theme folder into:

```
wp-content/themes/
```

4. Start Apache and MySQL
5. Open the WordPress admin dashboard
6. Activate the **Tech News** theme
7. Create posts and assign categories to view dynamic content

---

# 👩‍💻 Author

**Bita Yeganeh**  
WordPress & PHP Developer