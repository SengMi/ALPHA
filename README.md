# Alpha Library Management System

**Alpha Library Management System** is a web-based application that helps manage library operations such as book management, author management, and category management. It allows administrators to add, edit, and remove books, authors, and categories, and it also supports a search functionality to quickly find library resources.

## Features

- **Admin Dashboard**: Admin users can manage books, authors, categories, and library settings.
- **Book Management**: Add, edit, delete, and view books in the system.
- **Author Management**: Add, edit, and delete authors in the system.
- **Category Management**: Organize books into categories and manage them.
- **Search Functionality**: Easily search for books by title, author, or category.
- **User-Friendly Interface**: Intuitive interface for library administrators.

## Technologies Used

- **Frontend**: HTML
- **Backend**: PHP
- **Database**: MySQL (via `db_conn.php`)
- **GIFs/Images**: For visual enhancements (`f.gif`, `g.gif`, `h.gif`, `t.gif`)

## Installation

To set up the project locally, follow these steps:

1. **Clone the repository**:

   ```bash
   git clone <repository-url>
   cd <project-directory>
   ```

2. **Set up the Database**:
   
   - Create a MySQL database for the project and update the database connection credentials in the `db_conn.php` file.

3. **Upload Files to Server**:
   
   - Upload all the files (e.g., PHP files, HTML files, GIFs) to your web server.
   - Ensure the server supports PHP and is configured to connect to the MySQL database.

4. **Run the Project**:
   
   - Access the system via your web browser at `http://localhost/alpha-library-management-system/` or the relevant URL where you’ve hosted the project.

## Usage

- **Login as Admin**: Admin users can log in using the `login.php` page.
- **Manage Books**: Add, edit, or delete books via `add-book.php`, `edit-book.php`.
- **Manage Authors and Categories**: Use `add-author.php`, `edit-author.php`, `add-category.php`, and `edit-category.php` for managing authors and categories.
- **Search Books**: Use the `search.php` page to search for books by title, author, or category.

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- Special thanks to open-source contributors who helped improve this project.
- Images and GIFs for visual enhancements.

