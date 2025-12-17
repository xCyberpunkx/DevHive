##### Overview

DevHive is a web application designed to facilitate the listing of development projects and services, inspired by platforms like Fiverr and Upwork. Built on the Laravel PHP framework, it provides a robust platform for developers to showcase their skills and services to potential clients.

##### Features

1. **User Authentication and Authorization:**
   - Implements Laravel's authentication system for user login and registration.
   - Provides role-based access control for administrators and regular users.

2. **Listing Management:**
   - Users can create and manage listings for their development services.
   - Supports file uploading and management for project files and documents.

3. **Database Management:**
   - Utilizes MySQL for database storage.
   - Implements Laravel migrations and seeders for easy database setup and management.

4. **File Storage and Access:**
   - Uses Laravel's storage system to manage file uploads.
   - Creates a symbolic link to make uploaded files publicly accessible.

5. **Admin Panel (PHP Filament):**
   - Integrates PHP Filament for an admin dashboard
   - Provides functionalities for managing users and roles.
   - Allows administrators to modify admin credentials securely.

6. **Deployment and Development:**
   - Designed for deployment on local development environments or web servers.
   - Includes instructions for setting up and running the application.

##### Usage Instructions

- **Setup Instructions:**
  - Clone the repository from GitHub.
  - Install PHP dependencies using Composer.
  - Install Node dependencies using npm.
  - Configure MySQL database credentials in the `.env` file.
  - cp env.example env
  - generate the app key using artisan key:generate
  - link the storage using artisan storage:link
  - Run database migrations and seed the database.

- **Running the Application:**
  - Start the Laravel development server or upload files to a web server.
  - Access the application in a web browser.

- **Admin Panel and Credentials:**
  - Access the admin panel using PHP Filament.
  - Change admin credentials through the application interface.

##### Future Improvements
- Enhance UI/UX design for better user experience.
- Expand functionality to include more detailed user profiles and project portfolios.

##### License

The DevHive application is licensed under the MIT License, making it open-sourced software that can be freely used, modified, and distributed.

##### Conclusion

DevHive offers a comprehensive platform for developers to showcase their skills and services. With its user-friendly interface and robust backend, it provides a seamless experience for both developers and clients. Built on Laravel and utilizing modern development practices, DevHive is ready to be deployed and customized for various needs.


