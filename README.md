# php-cicd-demo

# 🌸 Aura.php - Aesthetic Minimalist Blog

A clean, minimalist, and responsive blog landing page built with **PHP** and **Tailwind CSS**. Designed for readability, lightning-fast load times, and elegant presentation.

## ✨ Features
- **Modern Aesthetic:** Soft off-white canvas with sharp, neutral typography.
- **Fully Responsive:** Beautifully optimized for desktop, tablet, and mobile devices.
- **Dynamic Date Handling:** Built-in PHP scripts for dynamic years and article dates.
- **Zero Configuration:** Ready to run out of the box using Tailwind's CDN.

---

## 🚀 Deployment Guide on Ubuntu (Apache/Nginx)

Follow these steps to host this project on an Ubuntu instance.

### 1. Update the System
Log in to your Ubuntu instance via SSH and update your package lists:
```bash
sudo apt update && sudo apt upgrade -y
```

### 2. Install Web Server & PHP
Choose either **Apache** or **Nginx** to host your application.

#### Option A: Using Apache (Recommended for Easy Setup)
```bash
# Install Apache and PHP
sudo apt install apache2 php libapache2-mod-php -y

# Restart Apache to load PHP
sudo systemctl restart apache2
```

#### Option B: Using Nginx
```bash
# Install Nginx and PHP-FPM
sudo apt install nginx php-fpm php-cli -y
```

### 3. Deploy the Code
Clone this repository directly into your web root directory.

#### For Apache:
```bash
# Clean default file
sudo rm -rf /var/www/html/*

# Clone this repo (replace with your actual GitHub URL)
sudo git clone https://github.com /var/www/html/
```

#### For Nginx:
```bash
# Clean default file
sudo rm -rf /var/www/html/*

# Clone this repo
sudo git clone https://github.com /var/www/html/

# Ensure Nginx configuration points to index.php and uses fastcgi
```

### 4. Set Permissions
Ensure the web server has correct permissions to read your files:
```bash
sudo chown -w www-data:www-data /var/www/html/ -R
sudo chmod -R 755 /var/www/html/
```

### 5. Access the Application
Open your browser and navigate to your server's public IP address:
```text
http://your_server_ip/
```

---

## 🛠️ Customization
To replace the mock data with a real database connection, modify the top PHP block in `index.php`:
```php
// Example database connection snippet
\$conn = new mysqli("localhost", "username", "password", "database");
if (\$conn->connect_error) {
    die("Connection failed: " . \$conn->connect_error);
}
```

## 📄 License
This project is open-source and available under the [MIT License](LICENSE).
