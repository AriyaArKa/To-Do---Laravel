# To-Do List App

## 📌 Overview
This is a simple **To-Do List** application built with **Laravel**. It allows users to add, update, and delete tasks with due dates.

## ⚙️ Features
- 📝 Add tasks
- ✏️ Edit tasks
- ✅ Mark tasks as completed
- ❌ Delete tasks
- 📅 Due date tracking

## 🛠️ Installation & Setup

1. **Clone the repository**
   ```sh
   git clone https://github.com/AriyaArKa/To-Do---Laravel.git
   cd todolist-app
   ```

2. **Install dependencies**
   ```sh
   composer install
   ```

3. **Set up the environment**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure the database**
   - Update `.env` with your database credentials
   ```sh
   DB_DATABASE=your_db_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run migrations**
   ```sh
   php artisan migrate
   ```

6. **Serve the application**
   ```sh
   php artisan serve
   ```
   Now, open `http://127.0.0.1:8000/` in your browser.

## 🚀 Usage
- Visit the home page to view your tasks.
- Click "Add Todo" to create a new task.
- Click "Edit" to update a task.
- Click "Delete" to remove a task.

## 📸 Screenshots

### 🏠 Home Page
![Home Page](screenshots/homepage.PNG)

### ➕ Add Todo
![Add Todo](screenshots/add_todo.PNG)

### 📝 Update Todo
![Edit Todo](screenshots/upadate_todo2.PNG)

### 📝 After Update
![Edit Todo](screenshots/afterUpdate.PNG)

### ❌ Delete Todo
![Delete Todo](screenshots/delete_todo.PNG)

## 🏗️ Built With
- **Laravel** - PHP Framework
- **Bootstrap** - Styling
- **MySQL** - Database

## 🤝 Contributing
Contributions are welcome! Feel free to submit a PR.

## 📜 License
This project is open-source and available under the [MIT License](LICENSE).

