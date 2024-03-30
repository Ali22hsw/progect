# Changelog

- removed 'root' password so it works with `xampp` in [dep.php](Dep.php) and [show.php](in/show.php)

- added `users` table, that has the following fields: 
```SQL
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    department_id INT,
    auth_token VARCHAR(60), -- authenticating user
    user_type INT NOT NULL DEFAULT 0 -- 0: citizen, 1: employee, 2: admin
)
```

- added `handleLogin.php` file to handle employee login, similarly you can handle citizen login.
- changed `DashBorad/index.html` to `index.php` to handle redirecting the user to `login` page if not logged in.




