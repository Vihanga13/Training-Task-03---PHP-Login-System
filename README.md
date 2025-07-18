# PHP Login System - Blog Website

Hey there! This is my PHP blog website with a complete user login system. I built this as a learning project to understand how authentication works in PHP.

## What This Project Does

I created a simple blog website where users can:
- Sign up for a new account
- Log in with their username or email
- View a personalized welcome page
- Log out securely
- Browse blog categories on the homepage

The whole thing uses PHP for the backend and MySQL for storing user data. I also made sure it looks good on both desktop and mobile devices.

## How to Get This Running

Before you start, make sure you have PHP (version 7.4 or newer) and MySQL installed on your computer. If you don't have these, I recommend downloading XAMPP which includes both.

Here's how to set everything up:

**Step 1: Set up the database**
First, create a new MySQL database called `phploginsystem`. Then run this SQL command to create the users table:

```sql
CREATE TABLE users (
    usersId INT(11) PRIMARY KEY AUTO_INCREMENT,
    usersName VARCHAR(128) NOT NULL,
    usersEmail VARCHAR(128) NOT NULL,
    usersUid VARCHAR(128) NOT NULL,
    usersPwd VARCHAR(128) NOT NULL
);
```

**Step 2: Configure the database connection**
Open the file `includes/dbh.inc.php` and update it with your database details. If you're using XAMPP with default settings, you probably won't need to change anything.

**Step 3: Start the server**
Navigate to your project folder in the command line and run:
```bash
php -S localhost:8000
```

**Step 4: Check it out!**
Open your web browser and go to `http://localhost:8000`. You should see the homepage with the blog categories.

## Screenshots

Here's what the different pages look like:

### Registration Page
![Signup](screenshots/signup.png)

### Login Page  
![Login](screenshots/login.png)

### Welcome Page (after logging in)
![Welcome](screenshots/welcome.png)

### Logout Page
![Logout](screenshots/logout.png)

## What I Learned

I built this project by following an awesome YouTube tutorial. It really helped me understand how to:
- Handle user input safely
- Hash passwords properly
- Manage user sessions
- Prevent SQL injection attacks
- Structure a PHP project

If you want to learn too, check out the tutorial I used: [PHP Login System Tutorial](https://youtu.be/gCo6JqGMi30?feature=shared)

Short screencast about login system
https://drive.google.com/file/d/1f9-pl-gMCfxC24bAJhWywibG8P45KE83/view?usp=sharing