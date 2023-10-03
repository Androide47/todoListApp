# React To-Do List with PHP Backend

## Project Overview

This is a simple To-Do list application built using React.js for the frontend and PHP for the backend. The application allows you to add, delete, and edit tasks. The project also has functionalities for toggling between "Edit" and "Save" during task editing and displays task numbers for added clarity.

## Features

1. Add new tasks
2. Delete existing tasks
3. Edit tasks inline
4. Toggle between "Edit" and "Save" button while editing
5. Display task numbers

## Tech Stack

- React.js
- PHP
- Axios for API calls
- Bootstrap for styling

### Why Bootstrap?

Bootstrap is used for quick and responsive styling. It allows for a clean, modern, and responsive design, streamlining the development process without compromising the user experience.

## Project Setup

### Prerequisites

1. Node.js & npm
2. PHP
3. XAMPP or any other local server setup that supports PHP

### Steps for Deployment

1. **Clone the Repository**
    ```bash
    git clone https://github.com/your-repository/react-php-todo.git
    ```

2. **Navigate to the Project Directory and Install Dependencies**
    ```bash
    cd react-php-todo
    npm install
    ```

3. **Start the React Development Server**
    ```bash
    npm start
    ```

### Database Connection using XAMPP

1. Open your XAMPP control panel and start the Apache and MySQL services.
2. Open your browser and navigate to `http://localhost/phpmyadmin/` to create a new database for the tasks.
3. In your PHP backend files, update the database configurations to match your setup.

---

## Recent Updates

- **Feature Added**: Now the tasks are numbered for better identification and management.
- **Feature Enhanced**: Users can now toggle between "Edit" and "Save" during task editing.

## Contributions

Feel free to fork the project and submit pull requests for any features or fixes you add.

---

This README includes project setup instructions, feature overviews, tech stack, and a special note justifying the use of Bootstrap. Feel free to expand or modify it as per your project's specific needs.